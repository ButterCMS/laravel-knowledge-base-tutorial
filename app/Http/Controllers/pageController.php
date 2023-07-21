<?php


namespace App\Http\Controllers;


use ButterCMS\ButterCMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\View\View;


class PageController extends Controller
{
    private static $apiToken = 'c3c37caed6eaa3141e464fc82cab8f83cae7925f';
    private $client;
    public function __construct() {
        $this -> client = new ButterCMS(PageController::$apiToken);
      }


    public function showPage(string $type, string $pageSlug): View
    {
        $page = $this->client->fetchPage($type, $pageSlug);


        return view('page', [
            'pageSeo' => $page->getFields()['seo'],
            'pageBanner' => $page->getFields()['laravel_kb_banner'],
            'pageArticleCards' => $page->getFields()['laravel_article_card'],
            
            
        ]);
    }


    public function showLandingPage(): View
    {
        return $this->showPage('laravel_kb_home_page_type', 'laravel-kb-home-page');
    }


    public function showLandingPageSlug(string $pageSlug): View
    {
        return $this->showPage('laravel_kb_home_page_type', $pageSlug);
    }
}

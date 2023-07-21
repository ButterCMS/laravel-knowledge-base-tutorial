<?php


namespace App\Http\Controllers;
use ButterCMS\Model\PostsResponse;
use ButterCMS\ButterCMS;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\View\View;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class KbController extends Controller
{
    private static $apiToken = 'c3c37caed6eaa3141e464fc82cab8f83cae7925f';
    private $client;
    public function __construct() {
        $this -> client = new ButterCMS(KbController::$apiToken);
      }


    public function showPage(string $type, string $pageSlug): View
    {
        $page = $this->client->fetchPage($type, $pageSlug);
        $navigation = $this->client->fetchContentFields([
            'laravel_navigation_menu'
        ],[
            'preview' => '1',
           ]);


        return view('HomePage', [
            'pageSeo' => $page->getFields()['seo'],
            'pageCategoryCard' => $page->getFields()['laravelcategorycard'],
            'pageHero' => $page->getFields()['laravel_kb_hero'],
            'pageNavigationCTA' => $navigation['laravel_navigation_menu'][0]['cta']
            
            
        ]);
    }


    public function showKbPage(): View
    {
        
        return $this->showPage('laravel_kb_home_page_type', 'laravel-kb-home-page');
    }


    public function showArticlesBySearchQuery(Request $request): View
    {
        //fetch all pages
        $Mainpage = $this->client->fetchPage('laravel_kb_page_type', 'laravel-kb-page');
        // Get the search query from the request
        $searchTerm = $request->query->get('q');
        $pageType = 'laravel_articles_page_type'; // Set your desired page type here
        
        $url = url('https://api.buttercms.com/v2/pages/search?query=' . urlencode($searchTerm) . '&auth_token=' . urlencode('c3c37caed6eaa3141e464fc82cab8f83cae7925f')); 
        // Append the page_type parameter if provided
            if (!empty($pageType)) {
                $url .= '&page_type=' . urlencode($pageType);
            }
        
        $response = Http::get($url);
        $page = $response->json();
        
        $data = $page['data'];
        $slugs = [];

            foreach ($data as $item) {
                $slugs[] = $item['slug'];
            }
        
            return view('searchPage', [
                'pageSeo' => $Mainpage->getFields()['seo'],
                'pageArticleCards' => $Mainpage->getFields()['laravel_article_card'],
                'slug' => $slugs
                
            ]); 
   
    }

    public function showArticles($param)
    {
        $page = $this->client->fetchPage('laravel_articles_page_type', $param);
        // Use the value passed from the Blade.php file
        // $param variable will contain the value
        
        // Your code here
        
        return view('articlePage', [
            'pageSeo' => $page->getFields()['seo'],
            'title'   => $page->getFields()['title'],
            'description' => $page->getFields()['description'],
            'image' => $page->getFields()['image'],
            'body'  => $page->getFields()['body']
        ]);
    }

    public function showCategory($param)
    {

        $page = $this->client->fetchPage('laravel_category_page_type', $param);
        // Use the value passed from the Blade.php file
        // $param variable will contain the value
        // Your code here
        
        return view('categoryPage', [
            'pageSeo' => $page->getFields()['seo'],
            'pageTitle'   => $page->getFields()['laravel_kb_hero']['title'],
            'pageDescription' => $page->getFields()['laravel_kb_hero']['description'],
            'pageImage' => $page->getFields()['laravel_kb_hero']['image'],
            'pageCategories'    => $page->getFields()['categories'],
            
            'pageArticles' =>$page->getFields()['articles']
        ]);
        
    }

}

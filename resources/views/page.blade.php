<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="https://kit.fontawesome.com/48764efa36.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>{{ $pageSeo['title'] }}</title>
    <meta name="description" content="{{ $pageSeo['description'] }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   

  </head>

  <body>
  <div id="TopMenu">
            <div class="logo">
               <a href="/"> <img src="{{ asset('img/logo.png') }}" alt="Logo"> </a>
            </div>
            <div class="menuContainer">
                <ul class="menu">
                    <li class="has-submenu">
                        <a href="#">Services</a>
                        <ul class="submenu">
                            <li><a href="#">Collection</a></li>
                            <li><a href="#">National Sachel</a></li>
                            
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Tools</a>
                        <ul class="submenu">
                            <li><a href="#">API</a></li>
                            <li><a href="#">eCommerce</a></li>
                            <li><a href="#">eWallet</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Learn</a>
                        <ul class="submenu">
                            <li><a href="/KbPage">Knowledge Base</a></li>
                            <li><a href="#">FAQ</a></li>
                        
                        </ul>
                    </li>
                    <li><a href="#">Contact Us</a></li>
                
                </ul>
            </div>
        </div>

 
        <div id="banner" style="background-repeat: no-repeat; background-size: cover;background-position: center;">
                    <div id="signup">
                        <div id="S_top">
                            <h1 id="welcomeText1">{{ $pageBanner['title'] }}</h1>
                             <p id="welcomeText">{{ $pageBanner['description'] }}</p>
                        </div>
                        <div id="S_bot">
                            <div class="custom-bg-6">
                               <a href="{{ $pageBanner['cta_url'] }}" style="text-decoration: none;color:inherit;"> <h4 >{{ $pageBanner['cta'] }}</h4> </a>
                            </div>
                        </div>
                    </div>
                    <div id="bannerImg">
                        <img src="{{ $pageBanner['image'] }}" alt="Banner Image" style="width:700px">
                    </div>
        </div>

       
        <div id="slide">

            <h1 class="featureHeading">Featured Articles</h1>
            <div class="features">
            
         @foreach ($pageArticleCards['article_repeater'] as $card)
                <a href="{{ route('showArticles', ['param' => $card['article_card_reference']['slug']]) }}" class="aStyle">
                    <div class="featuresInner">
                        <div id="fTop">
                            <img src="{{ $card['article_card_reference']['fields']['image'] }}" alt="Component Icon" style="width:260px;height:160px">
                        </div>

                        <div class="fBottom">
                            <h4>{{ $card['article_card_reference']['fields']['title'] }}</h4>
                            <p>{{ $card['article_card_reference']['fields']['description'] }}</p>
                            
    
                        </div>
                    </div>
                </a>
        @endforeach
            </div>

        </div>
 
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   <footer>
        <div class="footer-container">
            <div class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="Logo">
            </div>
            
            <nav class="footer-links">
                <ul>
                    <li><a href="#" class="link-no-decoration">Home</a></li>
                    <li><a href="#" class="link-no-decoration">About</a></li>
                    <li><a href="#" class="link-no-decoration">Services</a></li>
                    <li><a href="#" class="link-no-decoration">Contact</a></li>
                </ul>
            </nav>
            <div class="footer-social">
                <a href="#" class="link-no-decoration"><i class="fab fa-facebook"></i></a>
                <a href="#" class="link-no-decoration"><i class="fab fa-twitter"></i></a>
                <a href="#" class="link-no-decoration"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
  
    </footer>

    </body>
</html>

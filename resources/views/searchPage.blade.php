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

  <body style="background-color: white;">

 
  <div id="bannerKB">
                    <div class="HomeTop">
                        <div>
                        <a href="/"> <img src="{{ asset('img/logo.png') }}" alt="Logo" height="100px"> </a>
                        </div>
                        <div class="HomeRight">
                            <button id="loginButton"><h3>LOGIN</h3></button>
                            <button id="signupButton"><h3>SIGN UP</h3></button>
                        </div>
                                
                    </div>

                    <div id="heading" style="color:white;text-align: center;">
                    <h1 class="Headline"  style="color:white;text-align: center;">Search Our Knowledge Base</h1>
                    <h5 class="Sub_Headline">Learn more about our services by reading articles that dive deep into important topic</h5>
                    </div>
                    
                    <div id="cover">
                        <form action="{{url('/article/search/')}}">
                            <div class="tb">
                            <div class="td"><input type="text" style="border:none" placeholder="Search Here...." value="{{$searchTerm ?? null}}" name="q" required></div>
                            <div class="td" id="s-cover">
                                <button type="submit">
                                <div id="s-circle"></div>
                                <span></span>
                                </button>
                            </div>
                            </div>
                        </form>
                    </div>
        </div>
       
        <div id="slideKB">

        <h1 class="featureHeading">Search Results</h1>
        <div class="featuresKB">
            @foreach ($pageArticleCards['article_repeater'] as $card)
                <?php
                    $array1 = $card['article_card_reference']['slug'];
                    $array2 = $slug;

                    $commonItems = array_intersect((array)$array1, (array)$array2);
                ?>

                @if (!empty($commonItems))
                <a href="{{ route('showArticles', ['param' => $card['article_card_reference']['slug']]) }}" class="aStyle">
                    <div class="featuresInnerKB">
                        <div id="fTop">
                            <img src="{{ $card['article_card_reference']['fields']['image'] }}" alt="Component Icon" style="width:260px;height:160px">
                        </div>
                        <div class="fBottom">
                            <h4>{{ $card['article_card_reference']['fields']['title'] }}</h4>
                            <p>{{ $card['article_card_reference']['fields']['description'] }}</p>
                        </div>
                    </div>
                </a>
                @endif
            @endforeach
        </div>
        </div>
 
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
    <footer>
        <div class="footer-container"  style="margin-bottom:20px">
            <div class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="Logo">
            </div>
            <div class="footer-social">
                <a href="#" class="link-no-decoration"><i class="fab fa-facebook"></i></a>
                <a href="#" class="link-no-decoration"><i class="fab fa-twitter"></i></a>
                <a href="#" class="link-no-decoration"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
  
    </footer>
  </body>
</html>

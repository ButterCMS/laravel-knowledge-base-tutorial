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
       
      
        <div id="CategoryBody">
       
                    <div id="SideBar">
                        <div class="logo" style="display:flex;flex-direction:row;align-items:center;margin-bottom:20px">
                                <a href="/"> <img src="{{ asset('img/logo.png') }}" alt="Logo"> </a>
                                
                            <button id="loginButton"><h5>LOGIN</h5></button>
                       
                        </div>
                        <nav>
                            <ul>
                            @foreach ($pageCategories as $categories)
                                <li>
                                    <a href="{{ route('showCategory', ['param' => $categories['slug']]) }}"></i> {{$categories['fields']['seo']['title']}}</a>
                                </li>
                            @endforeach   
                            </ul>
                        </nav>
                    </div>
                    
                    <div id="ArticleSide">
                        <div id="CategoryHero">
                            <h2>
                                {{($pageTitle)}} 
                            </h2>
                            <h6> {{$pageDescription}} </h6>
                        </div>
                        <div id="slideKB">
                            <div class="featuresKB">
                            
                        @foreach ($pageArticles as $card)
                                <a href="{{ route('showArticles', ['param' => $card['slug']]) }}" class="aStyle">
                                    <div class="featuresInnerKB">
                                        <div id="fTop">
                                            <img src="{{ $card['fields']['image'] }}" alt="Component Icon" style="width:260px;height:160px">
                                        </div>
                                        <div class="fBottom">
                                            <h4>{{ $card['fields']['title'] }}</h4>
                                        </div>
                                    </div>
                                </a>
                        @endforeach
                            </div>

                        </div>
                    </div>
        </div>
        
       
       
 
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>

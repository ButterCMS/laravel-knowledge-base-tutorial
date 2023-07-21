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
        <div id="bannerKB" style="background-repeat: no-repeat; background-size: cover;background-position: center;color:white">
            <div class="HomeTop" style="margin-top:-100px">
                            <div>
                            <a href="/"> <img src="{{ asset('img/logo.png') }}" alt="Logo" height="100px"> </a>
                            </div>
                            <div class="HomeRight">
                                <button id="loginButton"><h3>LOGIN</h3></button>
                                <button id="signupButton"><h3>SIGN UP</h3></button>
                            </div>
                                    
            </div>
            <div style="position:relative;margin-top:100px;text-align:center">
                    <h1 class="Headline">{{$title}}</h1>
                    <h5 class="Sub_Headline">{{$description}}</h5>
            </div>    
            
        </div>
        <div id="articleImgDiv">
                <img src="{{$image}}" alt="Article Image" style="width:700px">
        </div>

        <div id="articleBody">
                {!! $body !!}
        </div>

       
       
 
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   
  </body>
</html>

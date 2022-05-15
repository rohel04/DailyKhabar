<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
</head>
<body>
  <!-- testing  -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand nav-img" style="margin: 0px;"href="/"><img src="/uploads/logo1.png" alt="logo"  width="30" height="30" class="d-inline-block align-top">&nbsp;DailyKhabar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav" style="padding-left:20px ">
          @foreach($category as $cat)           
              <a class="nav-item nav-link text-white" href="{{route('category',['cname'=>$cat->cname])}}">{{$cat->cname}}</a>
          
          @endforeach
            <!-- <a class="nav-item nav-link active" href="#">Dk<span class="sr-only">(current)</span></a> -->
            
          </div>
        </div>
      </nav>
      
     <div style="width: 1349px; margin: auto;"> 
      
          @yield('body')
          </div>

<footer class="bg-dark text-center text-white">

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  Contact: dailykhabar@hotmail.com</br>
  © 2022 Copyright: DailyKhabar
  </div>
  <!-- Copyright -->
</footer>  
</body>
</html>





     

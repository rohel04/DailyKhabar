<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <style>
       .sidebar {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0;
  left: 0;
  background-color: #111; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidebar */
}

/* The sidebar links */
.sidebar a {
  padding: 8px 8px 20px 32px;
  text-decoration: none;
  font-size: 18px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidebar a:hover {
  color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* The button used to open the sidebar */
.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
  float: left;
}

.openbtn:hover {
  background-color: #444;
}


/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
  transition: margin-left 0.5s; /* If you want a transition effect */
  padding-left: 5px;
  
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {
    padding-top: 15px;
  }
  .sidebar a {
    font-size: 18px;
  }
}

       </style>


</head>
<body>

    
    
    
        <!-- Sidebar -->
        <div id="mySidebar" class="sidebar">
            <!-- <a href="#" class="closebtn" onclick="toggleNav()">&times;</a> -->
             <ul class="list-unstyled components">
                        <h4 style="color:#fff;padding-left:19%;padding-bottom: 10px;">Menu</h4>
                        
                        <li class="active">
                            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Reporter Manager</a>
                            <ul class="collapse list-unstyled" id="homeSubmenu">
                                <li>
                                    <a href="/reporters/view">Reporter List</a>
                                </li>
                                <li>
                                    <a href="/reporters/add_reporters">Add Reporter</a>
                                </li>
            
                            </ul>
              <li>
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Category Manager</a>
                            <ul class="collapse list-unstyled" id="pageSubmenu">
                                <li>
                                    <a href="/category">Category List</a>
                                </li>
                                <li>
                                    <a href="/category/add">Add Category</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#newsSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">News Manager</a>
                            <ul class="collapse list-unstyled" id="newsSubmenu">
                                <li>
                                    <a href="{{route('news.index')}}">News List</a>
                                </li>
                                <li>
                                    <a href="{{route('news.add')}}">Add News</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div id="logout" style="bottom: 30px;position:absolute">
                      <a href="/logout" ><i class="fa fa-sign-out" aria-hidden="true">Logout</i></a>
                  </div>
          </div>
        <section style="padding-top: 5px;padding-right:5px;">
            <div id="main">
                <div id="top" style="height: 100px;">
                <button class="openbtn" onclick="toggleNav()">&#9776;</button>
                <a href="/admin" style="padding-left:41%;text-decoration:none;font-size:30px;font-weight:bold;color:black">DailyKhabar</a>
                <h6 style="float: right;">Welcome, <span style="color: rgb(201, 9, 9)">{{Auth::User()->name}}</span></h6>
                
                
              
                
                
              </div>
              
                @yield('section')
            </div>
        </section>
    
    
</body>
</html>
<script>
    function toggleNav() {
      var element = document.getElementById("mySidebar");
        if (element.style.width == "210px") {
            element.style.width = "0px";
            document.getElementById("main").style.marginLeft = "0px";
    
        } else {
            element.style.width = "210px";
              document.getElementById("main").style.marginLeft = "210px";
              
    
        }
      }
      </script>

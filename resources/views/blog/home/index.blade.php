
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">XMR Blog</a>
          </div>
          <ul class="nav navbar-nav">
            @auth
            @if (auth()->user()->isAdmin==1)
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin Panel<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{'showUsers'}}">users</a></li>
                <li><a href="#">articles</a></li>

              </ul>
            </li>

            @else
            @endif
            @endauth
            <li class=""><a href="{{'blogs'}}">Articales</a></li>
         @auth
             @if (auth()->user()->isAuthor==1)
          <li><a href="{{'addBlog'}}">Add Articale</a></li>
          @else
          @endif
         @endauth


          </ul>
          <ul class="nav navbar-nav navbar-right">

            @auth
            <li><a href="{{route('users.show',auth()->user())}}"><span class="glyphicon glyphicon-user"></span> profile</a></li>

            <li><a href="#">{{auth()->user()->name}}</a></li>
            <img src="{{asset(auth()->user()->image)}}" class="" alt="Cinque Terre" width="50" height="50">
            <li><a href="{{'logout'}}"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
            @else
            <li><a href="{{'loginForm'}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <li><a href="{{'register'}}"><span class="glyphicon glyphicon-log-in"></span> Register</a></li>

        @endauth

          </ul>
        </div>
      </nav><br>

      <div >

        @yield('body')
        





      </div>




</body>
</html>

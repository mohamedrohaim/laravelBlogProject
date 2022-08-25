<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>edit Profile</title>
</head>
<body>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">XMR Blog</a>
          </div>
          <ul class="nav navbar-nav">
          </ul>
          <ul class="nav navbar-nav navbar-right">

            @auth
            <li><a href="#">{{auth()->user()->name}}</a></li>
            <img src="{{asset(auth()->user()->image)}}" class="" alt="Cinque Terre" width="50" height="50">

            @endauth

          </ul>
        </div>
      </nav><br>



<div class="container">
    <div class="jumbotron">
        <h2 style="color: chocolate">Edit Profile</h2>
        <form action="{{route('users.update',$user)}}"  method="post" enctype="multipart/form-data">
        @csrf
        @method('put')

            <div class="form-group">
                <label >Name:</label>
                <input type="text" class="form-control"  name="name" value="{{$user->name}}">
              </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control"  name="email"   value="{{$user->email}}">
            </div>
            <div class="form-group">
              <label>Password:</label>
              <input type="password" class="form-control"  name="password" value="same">
            </div>
            <div class="form-group">
                <label >Image:</label>
                <input type="file" class="form-control"  name="image">
              </div>

            <button type="submit" class="btn btn-primary ">edit</button>
          </form>


    </div>

</body>
</html>

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
        <h2 style="color: chocolate">Add Blog</h2>
        <form action="{{'addBlogAction'}}"  method="post" enctype="multipart/form-data">
        @csrf
        @method('post')

            <div class="form-group">
                <label>author id:</label>
                <input type="text" id="country" name="user_id" value="{{auth()->user()->id}}" readonly><br><br>


                <label >title:</label>
                <input type="text" class="form-control"  name="title">
              </div>
            <div class="form-group">
              <label for="email">header:</label>
              <input type="text" class="form-control"  name="header">
            </div>
            <div class="form-group">
              <label>content:</label><br>


              <textarea name="content" rows="10" cols="70"></textarea>



            </div>
            <div class="form-group">
                <label >Image:</label>
                <input type="file" class="form-control"  name="image">
              </div>

            <button type="submit" class="btn btn-primary ">Add Blog</button>
          </form>


    </div>

</body>
</html>

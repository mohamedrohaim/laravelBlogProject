@extends('blog.home.index')
@section('body')
<div class="container">
<div class="jumbotron">

    <form action="{{'loginAction'}}" method="Post" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control"  name="email">
        </div>
        <div class="form-group">
          <label>Password:</label>
          <input type="password" class="form-control"  name="password">
        </div>


        <button type="submit" class="btn btn-primary ">Login</button>
      </form>


</div>

</div>
@endsection

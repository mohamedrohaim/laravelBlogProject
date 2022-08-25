@extends('blog.home.index')
@section('body')
<div class="container">
<div class="jumbotron">

    <form action="{{'registerAction'}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="form-group">
            <label >Name:</label>
            <input type="text" class="form-control"  name="name">
          </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control"  name="email">
        </div>
        <div class="form-group">
          <label>Password:</label>
          <input type="password" class="form-control"  name="password">
        </div>
        <div class="form-group">
            <label >Image:</label>
            <input type="file" class="form-control"  name="image">
          </div>

        <button type="submit" class="btn btn-primary ">Register</button>
      </form>


</div>

</div>
@endsection

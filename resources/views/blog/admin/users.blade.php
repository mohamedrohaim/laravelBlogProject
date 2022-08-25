@extends('blog.home.index')
@section('body')


<div class="container">
  <div class="jumbotron colored">
    <h1>All Users</h1>
    <p>this page show all users</p>
  </div>
  <br>


  <table class="table table-borderless">
      <thead>
        <tr >
          <th>Image</th>
          <th>name</th>
          <th>email</th>
          <th>is Admin</th>
          <th>is Author</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($users as $user)
          <tr>
            <td>@if ($user->image==null)
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDVAmb2f6omsmtw8DjZiusUKL9HbdRBKcTSgIlz2-9SQWPmDxDZrg3sQZYfWTP9YB4VpU&usqp=CAU" class="" alt="Cinque Terre" width="50" height="50">
                @else
                <img src="{{$user->image}}" class="" alt="Cinque Terre" width="50" height="50">
            @endif</td>
              <td>{{$user->name }}</td>
              <td>{{$user->email }}</td>
              <td> @if ($user->isAdmin==1)
                Yes
                @else
                No

              @endif</td>
              <td>@if ($user->isAuthor==1)
                Yes
                @else
                No

              @endif</td>
              <td>

                  <a href='deleteUser/{{$user->id}}'>delete</a>


              </td>
            </tr>
          @endforeach


      </tbody>
    </table>
</div>


@endsection

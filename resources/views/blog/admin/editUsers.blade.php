
<div class="container">
<div class="jumbotron">
    <h2 style="color: chocolate">Edit Profile</h2>
    <form action="{{route('users.permition',$user)}}"  method="post" enctype="multipart/form-data">
    @csrf
    @method('put')

        <div class="form-group">
            <label >is Author:</label>
            <input type="number" class="form-control"  name="isAuthor" value="{{$user->isAuthor}}">
          </div>
        <div class="form-group">
          <label for="email">IS admin:</label>
          <input type="number" class="form-control"  name="isAdmin"   value="{{$user->isAdmin}}">
        </div>


        <button type="submit" class="btn btn-primary ">edit</button>
      </form>


</div>

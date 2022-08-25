@extends('blog.home.index')
@section('body')


    @foreach ($blog as $item)



    <div class="container">
        <div class="jumbotron">
          <h2>{{$item->title}}</h2>
          <h5>author id : {{$item->user_id}}</h5>
          <h5>{{$item->created_at}}</h5>
          <img src="{{$item->image}}" width="50%" height="50%" alt="Girl in a jacket">

          <h3>{{$item->header}}</h3>
          <p>{{$item->content}}</p>
        </div>

      </div>
@endforeach
@endsection

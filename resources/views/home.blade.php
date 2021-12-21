@extends('layouts.app')

@section('content')

<a class="btn btn-primary mt-5" href="{{route('create')}}">Оставить отзыв</a>

@foreach($posts as $post)
    <div class="card mt-2 mb-2" style="width: 60rem;">
      <div class="card-body">
        <h5 class="card-title">{{$post->name}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{$post->email}}</h6>
        <p class="card-text">{{$post->text}}</p>
      </div>
    </div>
@endforeach

{{$posts->links('vendor.pagination.bootstrap-4')}}

@endsection

@extends('layouts.app')
@section('title', 'Админ Панель')

@section('content')

<table class="table mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Имя</th>
      <th scope="col">Е-mail</th>
      <th scope="col">Текст</th>
      <th scope="col">Статус отзыва</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>


@foreach($posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->name}}</td>
      <td>{{$post->email}}</td>
      <td>{{$post->text}}</td>
      <td>
    @if(($post->status) == 0)
			Отзыв не опубликован
		@else
			Отзыв опубликован
		@endif
	  </td>

	  <td>
	  	<a class="btn btn-warning" href="{{route('edit',$post)}}">Изменить отзыв</a>
	  </td>

	  <td>
	  	<a class="btn btn-danger" href="{{route('delete', $post)}}">Удалить отзыв</a>
	  </td>

	  <!-- Кнопка "Опбуликовать отзыв" доступна лишу возле неопубликованных отзывов -->
	  	@if(($post->status) == 0)
		<td>	  	
			  <form action="{{route('update', $post)}}" method="POST">
			  	@csrf
			  	@method('PUT')
			  	<input type="hidden" value="1" name="status">
			  	<button type="submit" class="btn btn-success">Опубликовать отзыв</button>
			  </form>

	  </td>
	  	@endif


    </tr>
@endforeach

  </tbody>
</table>


@endsection

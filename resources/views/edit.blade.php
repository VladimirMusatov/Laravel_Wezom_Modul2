@extends('layouts.app')
@section('title', 'Изменить отзыв')

@section('content')

<div class="mt-5">
	<form action="{{route('update', $id->id)}}" method="POST">
		@csrf	
	  	@method('PUT')
	  <div class="mb-3">
	    <label class="form-label" >Имя</label>
	    <input type="text"  name='name' value="{{$id->name}}" placeholder="{{$id->name}}" class="form-control" required>
	  </div>	

	  <div class="mb-3">
	    <label class="form-label">E-mail</label>
	    <input type="email" name="email" value="{{$id->email}}" class="form-control" placeholder="{{$id->email}}" id="exampleInputEmail1" aria-describedby="emailHelp" required>
	  </div>

	  <div class="mb-3">
	 	 <label class="form-label">Текст</label>
	    <input type="text" name="text" value="{{$id->text}}" class="form-control" placeholder="{{$id->text}}" required>
	  </div>

	  <button type="submit" class="btn btn-primary">Изменить отзыв отзыв</button>
	</form>
</div>

@endsection
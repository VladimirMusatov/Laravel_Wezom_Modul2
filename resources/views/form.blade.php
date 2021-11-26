@extends('layouts.app')

@section('title', 'Оставить отзыв');

@section('content')

<div class="mt-5">

@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
		</ul>
	</div>
@endif

	<form action="{{route('store')}}">
		@csrf	
	  <div class="mb-3">
	    <label class="form-label">Имя</label>
	    <input type="text" name='name' class="form-control" required>
	  </div>	

	  <div class="mb-3">
	    <label class="form-label">E-mail</label>
	    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
	  </div>

	  <div class="mb-3">
	 	 <label class="form-label">Текст</label>
	    <input type="text" name="text" class="form-control" required>
	  </div>

	 <div class="form-group mt-5">
	   {!! NoCaptcha::display() !!}

	 </div>
	  <button type="submit" class="btn btn-primary">Оставить отзыв</button>
	</form>



</div>

@endsection

@push('scripts')
	 {!! NoCaptcha::renderJs() !!}
@endpush
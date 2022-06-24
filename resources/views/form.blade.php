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

	<form method="POST" style="width:50%; margin: 0 auto;" action="{{route('store')}}">
		@csrf	
	  <div class="mb-4">
	    <label class="form-label">Имя</label>
	    <input type="text" name='name' class="form-control">
	  </div>	

	  <div class="mb-3">
	    <label class="form-label">E-mail</label>
	    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
	  </div>

	  <div class="mb-3">
	 	 <label class="form-label">Текст</label>
	 	 <textarea name="text" class="form-control" required></textarea>
	  </div>
	  <button type="submit" class="btn btn-primary">Оставить отзыв</button>
	</form>



</div>

@endsection

@push('scripts')
	 {!! NoCaptcha::renderJs() !!}
@endpush
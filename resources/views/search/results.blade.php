@extends('templates.default')

@section('content')
	<h4>Your search for "{{ Request::input('query')}}"</h4>
	<div class="row">
	    <div class="col-lg-12">
	       @if (!$users->count())    
	           <p>No results, found</p>
	       @else     
	        @foreach ($users as $user)
	            @include('user/partials/userblock')
	        @endforeach
	       @endif 
	    </div>
	</div>
@stop
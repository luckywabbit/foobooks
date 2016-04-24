@extends('layouts.master')

@section('title')
    All books
@stop

@section('content')
	<div class='book'> 
    	@foreach($books as $book)
 			 <h2>{{ $book->title }}</h2>
  			<img src='{{ $book->cover }}'> 
         @endforeach
    </div>
@stop 
@extends('layouts.app')

@section('pageCss')
<link href="{{ asset('css/book.css') }}" rel="stylesheet">
@endsection

@section('content')
	<div class="container" >
		<div class="card-columns">
			@newBook
			@endnewBook

			@bookList(['books' => $books])
			@endbookList

		</div>
	</div>
@endsection
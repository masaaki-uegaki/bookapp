@extends('layouts.app')

@section('layoutCss')
	<link href="{{ asset('css/layouts/book-edit.css') }}" rel="stylesheet">
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
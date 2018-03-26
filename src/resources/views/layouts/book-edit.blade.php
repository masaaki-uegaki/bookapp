@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('書籍編集') }}</div>

                <div class="card-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')
                    <form action="/books/{{ $book->id }}" method="POST" class="form-horizontal">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="bookName" class="col-md-4 col-form-label text-md-right">{{ __('書籍名') }}</label>

                            <div class="col-md-6">
                                <input id="bookName" type="text" class="form-control{{ $errors->has('bookName') ? ' is-invalid' : '' }}" name="bookName" value="{{$book->bookName}}" required autofocus>

                                @if ($errors->has('bookName'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('bookName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-check"></i>{{ __('更新') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

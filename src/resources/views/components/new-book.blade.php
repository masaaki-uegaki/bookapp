@section('pageCss')
<link href="{{ asset('css/components/new-book.css') }}" rel="stylesheet">
@endsection

<div class="card">
	<div class="card-header">
		{{ __('新規書籍の登録') }}
	</div>

	<div class="card-body">
		<!-- Display Validation Errors -->
		@include('common.errors')

		<!-- New Book Form -->
		<form action="/books" method="POST" class="form-horizontal">
			{{ csrf_field() }}

			<!-- Book Name -->
			<div class="form-group">
				<label for="task-name" class="col-sm-3 control-label">{{ __('書籍名') }}</label>

				<div class="col-sm-6">
					<input type="text" name="name" id="book-name" class="form-control" value="{{ old('book') }}">
				</div>
			</div>

			<!-- Add Book Button -->
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-6">
					<button type="submit" class="btn btn-primary">
						<i class="fa fa-plus"></i>{{ __('追加') }}
					</button>
				</div>
			</div>
		</form>
	</div>
</div>

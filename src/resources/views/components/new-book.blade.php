<div class="card">
	<div class="card-header">
		{{ __('新規書籍の登録') }}
	</div>

	<div class="card-body">
		<!-- Display Validation Errors -->
		@include('common.errors')

		<!-- New Book Form -->
		<form action="/books" method="POST" class="form-horizontal">
			@csrf
			@method('POST')

			<!-- Book Name -->
			<div class="form-group row">
				<label for="bookName" class="col-sm-1 control-label">{{ __('書籍名') }}</label>

				<div class="col-sm-8">
					<input type="text" name="bookName" id="bookName" class="form-control" value="{{ old('book') }}" required>
				</div>
			</div>

			<!-- Add Book Button -->
			<div class="form-group row">
				<div class="offset-sm-1 col-sm-1">
					<button type="submit" class="btn btn-primary">
						<i class="fa fa-plus"></i>{{ __('追加') }}
					</button>
				</div>
			</div>
		</form>
	</div>
</div>

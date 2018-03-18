@extends('layouts.app')

@section('pageCss')
<link href="/css/book.css" rel="stylesheet">
@endsection

@section('content')
	<div class="container" >
		<div class="">
			<div class="card-columns">
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

				<!-- Books -->
				@if (count($books) > 0)
					<div class="card">
						<div class="card-header">
							{{ __('書籍一覧') }}
						</div>

						<div class="card-body">
							<table class="table table-striped task-table">
								<thead>
									<th>{{ __('書籍名') }}</th>
									<th>&nbsp;</th>
								</thead>
								<tbody>
									@foreach ($books as $book)
										<tr>
											<td class="table-text"><div>{{ $book->title }}</div></td>

											<!-- Task Delete Button -->
											<td>
												<form action="/books/{{ $book->id }}" method="POST">
													{{ csrf_field() }}
													{{ method_field('DELETE') }}

													<button type="submit" class="btn btn-danger">
														<i class="fa fa-trash"></i>{{ __('削除') }}
													</button>
												</form>
											</td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			@endif
		</div>
	</div>
@endsection
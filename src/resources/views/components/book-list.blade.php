@if (count( $books  ) > 0)
	<div class="card">
		<div class="card-header">
			{{ __('書籍一覧') }}
		</div>

		<div class="card-body">
			<table class="table table-striped">
				<thead>
					<th>{{ __('書籍名') }}</th>
					<th>&nbsp;</th>
				</thead>
				<tbody>
					@foreach ($books as $book)
						<tr>
							<td class="table-text"><div>{{ $book->bookName }}</div></td>

							<td>
								<div class="float-right buttons">
									<form action="/books/{{ $book->id }}" method="POST">
										@csrf
										@method('GET')

										<button type="submit" class="btn btn-success">
											<i class="fa fa-edit"></i>{{ __('編集') }}
										</button>
									</form>
									<form action="/books/{{ $book->id }}" method="POST">
										@csrf
										@method('DELETE')

										<button type="submit" class="btn btn-danger">
											<i class="fa fa-trash"></i>{{ __('削除') }}
										</button>
									</form>
								</div>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endif

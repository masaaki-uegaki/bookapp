@if (count( $books  ) > 0)
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

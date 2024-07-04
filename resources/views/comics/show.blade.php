@extends('layouts.app')

@section('content')
	<div class="col-4 mt-3 m-auto">
		<div class="card p-0 h-100">
			<div class="col-4">
				<img src="{{ $list->path_img }}" class="w-100 rounded-start" alt="...">
			</div>
			<div class="row g-0 m-0">
				<div class="col-md-8">
					<div class="card-body">
						<p class="card-text"><b>Descrizione:</b> {{ $list->description }}</p>
						<p class="card-text"><b>Prezzo:</b> {{ $list->price }} €</p>
						<p class="card-text"><b>Data di Uscita:</b> {{ $list->sale_date }}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

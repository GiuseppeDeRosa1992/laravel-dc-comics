<section>
	<div class="text-center px-2 row m-0">
		@foreach ($list as $fumetto)
			<div class="col-4 mt-3">
				<div class="card p-0 h-100">
					<div class="row g-0 m-0">
						<div class="col-12">
							<img src="{{ $fumetto->path_img }}" class="w-50 rounded-start" alt="...">
						</div>
						<h5 class="card-title"><b>Titolo:</b> {{ $fumetto->title }}</h5>
					</div>
					<a href="{{ route('comics.show', $fumetto->id) }}" class="btn btn-outline-primary my-3">Clicca per Dettagli</a>
					<a href="{{ route('comics.edit', $fumetto->id) }}" class="btn btn-outline-primary my-3">Modifica Fumetto</a>
					{{-- CREO FORM PER CANCELLARE UN FUMETTO DAL DATABASE GLI DO LA ROTTA DESTROY E IL METODO POST POI SOTTO LO CAMBIO NEL METODO DELETE --}}
					<form method="POST" action="{{ route('comics.destroy', $fumetto->id) }}">
						@csrf
						{{-- CREO METODO DELETE PER CANCELLARE DAL DATABASE UN FUMETTO --}}
						@method('DELETE')
						<button type="submit" href="" class="btn btn-outline-danger my-3">Elimina
							Fumetto</button>
					</form>
				</div>
			</div>
		@endforeach
	</div>
</section>

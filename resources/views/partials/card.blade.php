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
				</div>
			</div>
		@endforeach
	</div>
</section>

<section>
	<div class="text-center px-2 row m-0">
		@foreach ($list as $fumetto)
			<div class="col-4 mt-3">
				<div class="card p-0 h-100">
					<div class="row g-0 m-0">
						<div class="col-md-4">
							<img src="{{ $fumetto->path_img }}" class="w-100 rounded-start" alt="...">
						</div>
						<div class="col-md-8">
							<div class="card-body">
								<h5 class="card-title"><b>Titolo:</b> {{ $fumetto->title }}</h5>
								<p class="card-text"><b>Descrizione:</b> {{ $fumetto->description }}</p>
								<p class="card-text"><b>Prezzo:</b> {{ $fumetto->price }} €</p>
								<p class="card-text"><b>Data di Uscita:</b> {{ $fumetto->sale_date }}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		@endforeach
	</div>
</section>

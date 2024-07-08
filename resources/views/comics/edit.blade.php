@extends('layouts.app')


@section('content')
	<div class="container">
		<h2 class="p-2 text-center">Modifica il Fumetto: {{ $comic->title }}</h2>

		{{-- MESSAGGIO DI ERRORE SE NON SI COMPLETANO I CAMPI CHE SONO OBBLIGATORI --}}
		<div>
			@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif
		</div>

		<form method="POST" action="{{ route('comics.update', $comic->id) }}" class="row g-3">
			{{-- VISTO CHE NEL FORM SI POSSONO ACCETTARE SOLO POST E GET METTIAMO POST NEL FORM E POI USO IL METHODS CHE MI RICHIAMA PUT CHE SERVEAD UPDATE PER AGGIORNARE IL DATABASE --}}
			@method('PUT')
			@csrf
			<div class="col-md-4">
				<label for="validationServer01" class="form-label">Titolo Fumetto</label>
				<input type="text" class="form-control" id="validationServer01" name="title" value="{{ $comic->title }}">
				@error('title')
					<div class="text-danger">{{ $message }}</div>
				@enderror
			</div>
			<div class="col-md-4">
				<label for="validationServer02" class="form-label">Descrizione Fumetto</label>
				<textarea type="text" class="form-control" style="height: 10rem" id="validationServer02" name="description"
				 placeholder="{{ $comic->description }}"></textarea>
				@error('description')
					<div class="text-danger">{{ $message }}</div>
				@enderror
			</div>
			<div class="col-md-4">
				<label for="validationServer01" class="form-label">URL Immagine</label>
				<input type="text" class="form-control" id="validationServer01" name="path_img" value="{{ $comic->path_img }}">
				@error('path_img')
					<div class="text-danger">{{ $message }}</div>
				@enderror
			</div>
			<div class="col-md-4">
				<label for="validationServerUsername" class="form-label">Prezzo</label>
				<div class="input-group has-validation">
					<input type="number" class="form-control" id="validationServerUsername"
						aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" name="price" step="0,01"
						value="{{ $comic->price }}">
					<span class="input-group-text" id="inputGroupPrepend3">€</span>
					@error('price')
						<div class="text-danger">{{ $message }}</div>
					@enderror
				</div>
			</div>
			<div class="col-md-6">
				<label for="validationServer03" class="form-label">Data di Uscita</label>
				<input type="date" class="form-control" id="validationServer03" aria-describedby="validationServer03Feedback"
					name="sale_date" value="{{ $comic->sale_date }}">
				@error('sale_date')
					<div class="text-danger">{{ $message }}</div>
				@enderror
			</div>
			<div class="col-12">
				<button class="btn btn-primary" type="submit">Submit form</button>
			</div>
		</form>
	</div>
@endsection

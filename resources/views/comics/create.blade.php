@extends('layouts.app')

@section('content')
	<div class="container">
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

		<form method="POST" action="{{ route('comics.store') }}" class="row g-3">
			@csrf
			<div class="col-md-4">
				<label for="validationServer01" class="form-label">Titolo Fumetto</label>
				<input type="text" class="form-control" id="validationServer01" name="title">
				{{-- MESSAGGIO DI ERRORE PER INPUT CHE MANCA --}}
				@error('title')
					<div class="text-danger">{{ $message }}</div>
				@enderror
			</div>
			<div class="col-md-4">
				<label for="validationServer02" class="form-label">Descrizione Fumetto</label>
				<textarea type="text" class="form-control" id="validationServer02" name="description"></textarea>
				{{-- MESSAGGIO DI ERRORE PER INPUT CHE MANCA --}}
				@error('description')
					<div class="text-danger">{{ $message }}</div>
				@enderror
			</div>
			<div class="col-md-4">
				<label for="validationServer01" class="form-label">URL Immagine</label>
				<input type="text" class="form-control" id="validationServer01" name="path_img">
				{{-- MESSAGGIO DI ERRORE PER INPUT CHE MANCA --}}
				@error('path_img')
					<div class="text-danger">{{ $message }}</div>
				@enderror
			</div>
			<div class="col-md-4">
				<label for="validationServerUsername" class="form-label">Prezzo</label>
				<div class="input-group has-validation">
					<input type="number" class="form-control" id="validationServerUsername"
						aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" name="price" step="0,01">
					<span class="input-group-text" id="inputGroupPrepend3">€</span>
					{{-- MESSAGGIO DI ERRORE PER INPUT CHE MANCA --}}
					@error('price')
						<div class="text-danger">{{ $message }}</div>
					@enderror
				</div>
			</div>
			<div class="col-md-6">
				<label for="validationServer03" class="form-label">Data di Uscita</label>
				<input type="date" class="form-control" id="validationServer03" aria-describedby="validationServer03Feedback"
					name="sale_date">
				{{-- MESSAGGIO DI ERRORE PER INPUT CHE MANCA --}}
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

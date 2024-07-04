@extends('layouts.app')

@section('content')
	<div class="container">
		<form class="row g-3">
			<div class="col-md-4">
				<label for="validationServer01" class="form-label">Titolo Fumetto</label>
				<input type="text" class="form-control" id="validationServer01" value="Mark" required>
				<div class="valid-feedback">
					Campo Riempito Perfettamente
				</div>
			</div>
			<div class="col-md-4">
				<label for="validationServer02" class="form-label">Descrizione Fumetto</label>
				<textarea type="text" class="form-control" id="validationServer02" value="Otto" required></textarea>
				<div class="valid-feedback">
					Campo Riempito Perfettamente
				</div>
			</div>
			<div class="col-md-4">
				<label for="validationServerUsername" class="form-label">Prezzo</label>
				<div class="input-group has-validation">
					<input type="number" class="form-control" id="validationServerUsername"
						aria-describedby="inputGroupPrepend3 validationServerUsernameFeedback" required>
					<span class="input-group-text" id="inputGroupPrepend3">€</span>
					<div id="validationServerUsernameFeedback" class="invalid-feedback">
						Riempi il Campo.
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<label for="validationServer03" class="form-label">Data di Uscita</label>
				<input type="date" class="form-control" id="validationServer03" aria-describedby="validationServer03Feedback"
					required>
				<div id="validationServer03Feedback" class="invalid-feedback">
					Riempi il Campo.
				</div>
			</div>
			<div class="col-12">
				<button class="btn btn-primary" type="submit">Submit form</button>
			</div>
		</form>
	</div>
@endsection

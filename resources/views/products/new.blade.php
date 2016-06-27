@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

			<form action="/post/add" method="POST" role="form">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<legend>New Product</legend>
			
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" name="title" id="input" class="form-control" value="" required="required" pattern="" title="">
				</div>
				
				<div class="form-group">
					<label for="description">Description</label>
					<textarea name="description" id="description" class="form-control" rows="3" required="required" placeholder="Descripción del producto"></textarea>
				</div>
			
				<div class="form-group">
					<label for="body">Body</label>
					<textarea name="body" id="body" class="form-control" rows="9" required="required" placeholder="El cuerpo del producto"></textarea>
				</div>	

				<div class="form-group">
					<label for="price">Price</label>
					<input id="price" type="number" name="price" id="input" class="form-control" value="" min="{10}" max="" step="10" required="required" title="Precio">
				</div>

				<div class="form-group">
					<label for="stock">Stock</label>
					<input id="stock" type="number" name="stock" id="input" class="form-control" value="" min="10" max="" step="10" required="required" title="Precio">
				</div>

				<div class="checkbox">
					<label>
						<input active type="checkbox" value="1">
						Active
					</label>
				</div>

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>
@endsection
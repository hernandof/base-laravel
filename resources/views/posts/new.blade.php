@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

			<form action="/post/add" method="POST" role="form">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<legend>New Post</legend>
			
				<div class="form-group">
					<label for="title">Title</label>
					<input type="text" class="form-control" name="title" id="title" placeholder="Title of the post">
				</div>
			
				<div class="form-group">
					<label for="body">Body</label>
					<textarea name="body" id="body" class="form-control" rows="3" required="required" placeholder="More than 50 characters please."></textarea>
				</div>	
			
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
</div>
@endsection
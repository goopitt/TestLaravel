@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Classes</div>
                <div class="card-body">
					<form action="{{ route('teachers.update', $teacher) }}" method="POST" enctype="multipart/form-data">
			 			{{ csrf_field() }}
			 			{{ method_field('PATCH') }}
			 			<div class="form-group">
			 				<label>Name</label>
			 				<input type="text" class="form-control" name="name" placeholder="Student Name" value="{{ $teacher->name }}">
			 			</div>
			 			<div class="form-group">
			            	<input type="submit" class="btn btn-primary" value="Update"/>
			        	</div>
			        </form>
			    </div>
			</div>
		</div>
	</div>
</div>
@endsection
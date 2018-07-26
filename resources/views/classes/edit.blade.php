@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Classes</div>
                <div class="card-body">
					<form action="{{ route('classes.update', $class) }}" method="POST" enctype="multipart/form-data">
			 			{{ csrf_field() }}
			 			{{ method_field('PATCH') }}
			 			<div class="form-group">
			 				<label>Name</label>
			 				<input type="text" class="form-control" name="name" placeholder="Class Name" value="{{ $class->name }}">
			 			</div>
			 			<div class="form-group">
			 				<label>Teacher</label>
			 				<select name="teachers_id" id="" class="form-control">
			 					@foreach ($teacher as $tec)
			 						<option value="{{ $tec->id}}"
			 							@if($tec->id === $class->teachers_id)
			 								selected
			 							@endif
			 							> {{ $tec->name}}</option>
			 					@endforeach
			 				</select>
			 			</div>

			 			<div class="form-group">
			            	<input type="submit" class="btn btn-primary" value="Save"/>
			        	</div>
			        </form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
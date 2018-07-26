@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Classes</div>
                <div class="card-body">
					<form action="{{ route('classes.store') }}" method="POST" enctype="multipart/form-data">
			 			{{ csrf_field() }}
			 			<div class="form-group has-feedback{{ $errors->has('name') ? 'has-error' : ''}}">
			 				<label>Name</label>
			 				<input type="text" class="form-control" name="name" placeholder="Class Name">
			 				@if ($errors->has('name'))
			 					<span class="help-block">
			 						<p>{{ $errors->first('name')}}</p>
			 					</span>
			 				@endif
			 			</div>
			 			<div class="form-group">
			 				<label>Teacher</label>
			 				<select name="teachers_id" id="" class="form-control">
			 					@foreach ($teacher as $tec)
			 						<option value="{{ $tec->id}}">{{ $tec->name}}</option>
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
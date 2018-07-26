@extends('layouts.app')

@section('content')
	<div class="container">
		<form action="{{ route('students.update', $student) }}" method="POST" enctype="multipart/form-data">
 			{{ csrf_field() }}
 			{{ method_field('PATCH') }}
 			<div class="form-group">
 				<label>Name</label>
 				<input type="text" class="form-control" name="name" placeholder="Student Name" value="{{ $student->name }}">
 			</div>
 			<div class="form-group">
 				<label>Class</label>
 				<select name="class_id" id="" class="form-control">
 					@foreach ($class as $cla)
 						<option value="{{ $cla->id}}"
 							@if($cla->id === $student->class_id)
 								selected
 							@endif
 							>{{ $cla->name}}</option>
 					@endforeach
 				</select>
 			</div>
 			<div class="form-group">
            	<input type="submit" class="btn btn-primary" value="Update"/>
        	</div>
        </form>
	</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Students</div>
                <div class="card-body">
                	<div style="margin-bottom: 20px">
						<a href="{{ route('students.create') }}" type="submit" class="btn btn-sm btn-primary">Add Students</a>
					</div>
			        <table class="table table-bordered table-striped">
			            <thead>
			                <tr>
		                    	<th width="50px">ID</th>
		            		    <th>Name</th>
		            		    <th>Class</th>
		            		    <th width="20px" style="border-right: 0;"></th>
		            		    <th width="20px" style="border-left: 0;"></th>
			                </tr>
			            </thead>
					    <tbody>
					    	@foreach ($student as $std)
					    	<tr>
					    		<td>{{ $loop->iteration }}</td>
					    		<td>{{ $std->name }}</td>
					    		<td>@foreach($class as $cla)
						    			@if( $std->class_id === $cla->id )
						    				{{ $cla->name}}
						    			@endif
 									@endforeach
									</td>
					    		<td style="border-right: 0;">
									<a href="{{ route('students.edit', $std) }}" type="submit" class="btn btn-sm btn-success">Edit</a>
					    		</td>
					    		<td style="border-left: 0;">							    			
					    			<form class="" action="{{ route('students.destroy', $std) }}" method="post">
					    				{{ csrf_field() }}
					    				{{ method_field('DELETE') }}
										<button type="submit" class="btn btn-sm btn-danger">Delete</button>
					    			</form>
					    		</td>
					    	</tr>
					    	@endforeach

					    </tbody>
					</table>
				</div>
	        </div>
	    </div>
	</div>
</div>
@endsection
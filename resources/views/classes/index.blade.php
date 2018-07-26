@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Classes</div>
                <div class="card-body">
                	<div style="margin-bottom: 20px">
						<a href="{{ route('classes.create') }}" type="submit" class="btn btn-sm btn-primary">Add Classes</a>
					</div>
			        <table class="table table-bordered table-striped">
			            <thead>
			                <tr>
		                    	<th>ID</th>
		            		    <th>Name</th>
		            		    <th>Teacher</th>
		            		    <th width="20px" style="border-right: 0;"></th>
		            		    <th width="20px" style="border-left: 0;"></th>
			                </tr>
			            </thead>
					    <tbody>
					    	@foreach ($class as $cls)
					    	<tr>
					    		<td>{{ $loop->iteration }}</td>
					    		<td>{{ $cls->name }}</td>
					    		<td>@foreach($teacher as $tec)
						    			@if( $cls->teachers_id === $tec->id )
						    				{{ $tec->name}}
						    			@endif
 									@endforeach
 								</td>
					    		<td style="border-right: 0;">
									<a href="{{ route('classes.edit', $cls) }}" type="submit" class="btn btn-sm btn-success">Edit</a>
					    		</td>
					    		<td style="border-left: 0;">							    			
					    			<form class="" action="{{ route('classes.destroy', $cls) }}" method="post">
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
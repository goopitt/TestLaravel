@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Teachers</div>
                <div class="card-body">
                	<div style="margin-bottom: 20px">
						<a href="{{ route('teachers.create') }}" type="submit" class="btn btn-sm btn-primary">Add Teachers</a>
					</div>
			        <table class="table table-bordered table-striped">
			            <thead>
			                <tr>
		                    	<th width="50px">ID</th>
		            		    <th>Name</th>
		            		    <th width="20px" style="border-right: 0;"></th>
		            		    <th width="20px" style="border-left: 0;"></th>
			                </tr>
			            </thead>
					    <tbody>
					    	@foreach ($teacher as $t)
					    	<tr>
					    		<td>{{ $loop->iteration }}</td>
					    		<td>{{ $t->name }}</td>
					    		<td style="border-right: 0;">
									<a href="{{ route('teachers.edit', $t) }}" type="submit" class="btn btn-sm btn-success">Edit</a>
					    		</td>
					    		<td style="border-left: 0;">							    			
					    			<form class="" action="{{ route('teachers.destroy', $t) }}" method="post">
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
<!DOCTYPE html>

<html>

<head>
	<title>Hi</title>
	<style type="text/css">

			table{
				width: 100%;
				border:1px solid black;

			}
			td, th{
				border:1px solid black;
			}

		</style>
</head>

<body>

<h2>{{ $title }}</h2>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
			        <table class="table table-bordered table-striped">
			            <thead>
			                <tr>
		                    	<th>ID</th>
		            		    <th>Teacher Name</th>
		            		    <th>Class Name</th>
		            		    <th>Students</th>
			                </tr>
			            </thead>
					    <tbody>
					    	@foreach ($class_data as $cd)
					    	<tr>
					    		<td>{{ $loop->iteration }}</td>
					    		<td>{{ $cd->guru }}</td>
					    		<td>{{ $cd->kelas }}</td>
					    		<td>{{ $cd->siswa }}</td>
					    	</tr>
					    	@endforeach
					    </tbody>
					</table>
				</div>
	        </div>
	    </div>
	</div>
</div>

</body>

</html>
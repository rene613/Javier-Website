
<!DOCTYPE html>
<html>
	<head>
		<title>AJAX Database</title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	</head>
	<body>

	<div class="container">

		<div class="col-lg-4">

			{{Form::open(array('url'=>'', 'files'=>true))}}

				<div class="form-group">
					<label>Services</label>
					<select class="form-control input-sm" name="service" id="service">
					@foreach($services as $service)
						<option value="{{$service->service_id}}">{{$service->service_name}}</option>
					@endforeach
						<option value=""></option>
					</select>	
				</div>

				<div class="form-group">
					<label>Subservices</label>
					<select class="form-control input-sm" name="subservice" id="subservice">
						<option value=""></option>
					</select>	
				</div>

			{{Form::close()}}

		</div>

		<script>

			$('#service').on('change', function(e){
				console.log(e);

				var service_id = e.target.value;


				//ajax
				$.get('/ajax-subservice?service_id=' + service_id, function(data){
					//succes data
					$('#subservice').empty();
					$.each(data, function(index, subserviceObj){

						$('#subservice').append('<option value="'+subserviceObj.id+'">'+subserviceObj.sub_name+'</option>');

					});
				});
			});

		</script>

	</div>
	</body>
</html>

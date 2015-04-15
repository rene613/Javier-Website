
<!DOCTYPE html>
<html>
	<head>
		<title>AJAX Database</title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
		<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<link href="{{URL::to('css/admin.css') }}" rel="stylesheet" type="text/css">
	</head>
	<body style="background-color:#E5E5E5;">
		<div class="btn-group btn-group-justified" role="group" aria-label="Justified button group with nested dropdown">
	      <div class="btn-group" role="group">
	        <button href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
	          Nuevo <span class="caret"></span>
	        </button>
	        <ul class="dropdown-menu" role="menu">
	          <li><a href="#" onclick="toggleCreate()">Nuevo service</a></li>
	          <li><a href="#" onclick="toggleCreateSub()">Nuevo subservice</a></li>
	        </ul>
	      </div>
	      <div class="btn-group" role="group">
	        <button href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
	          Actualización <span class="caret"></span>
	        </button>
	        <ul class="dropdown-menu" role="menu">
	          <li><a href="#" onclick="toggleUpdate()">Actualización service</a></li>
	          <li><a href="#" onclick="toggleUpdateSub()">Actualización subservice</a></li>
	        </ul>
	      </div>
	      <div class="btn-group" role="group">
	        <button href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
	          Borrar <span class="caret"></span>
	        </button>
	        <ul class="dropdown-menu" role="menu">
	          <li><a href="#" onclick="toggleDelete()">Borrar service</a></li>
	          <li><a href="#" onclick="toggleDeleteSub()">Borrar subservice</a></li>
	        </ul>
	      </div>
	      <div class="btn-group" role="group">
	        <button href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
	          Admin <span class="caret"></span>
	        </button>
	        <ul class="dropdown-menu" role="menu">
	          <li><a href="#" onclick="toggleDelete()">Nuevo admin</a></li>
	          <li><a href="#" onclick="toggleDeleteSub()">Borrar admin</a></li>
	        </ul>
	      </div>
	    </div>

		<script>
			// Toggle's for all the forms on admin page!
			function resetForm(){
				document.getElementById('createForm').style.display = 'none';
				document.getElementById('createSubForm').style.display = 'none';
			    document.getElementById('updateForm').style.display = 'none';
			    document.getElementById('updateSubForm').style.display = 'none';
			    document.getElementById('deleteForm').style.display = 'none';
			    document.getElementById('deleteSubForm').style.display = 'none';
			}
			function toggleCreate() {
				resetForm();
			    document.getElementById('createForm').style.display = 'block';
			};
			function toggleCreateSub() {
				resetForm();
			    document.getElementById('createSubForm').style.display = 'block';
			};
			function toggleUpdate() {
				resetForm();
			    document.getElementById('updateForm').style.display = 'block';
			};
			function toggleUpdateSub() {
				resetForm();
			    document.getElementById('updateSubForm').style.display = 'block';
			};
			function toggleDelete() {
				resetForm();
			    document.getElementById('deleteForm').style.display = 'block';
			};
			function toggleDeleteSub() {
				resetForm();
			    document.getElementById('deleteSubForm').style.display = 'block';
			};
		</script>

		<div class="container" style="margin:20px">

			<!-- create services form -->
			<div id="createForm" style="display:none;">

				<form method="post" action="/create" name="adminform">

					<fieldset>

						<b>Add a service</b><br><br>
						<div class="input-group input-group">
							<span class="input-group-addon" id="sizing-addon3"><b>Service Name: </b></span>
							{{ Form::text('service_name', null, array('class'=>'form-control', 'placeholder'=>'Name your service')) }}
						</div><br>

						<div>
							<label>Service Text: </label><br>
							{{ Form::textarea('service_text', null, array('class'=>'form-control')) }}
						</div><br>

					</fieldset>

					<!--<input type="submit" class="submit" id="submit" value="Add" />-->
					<button type="submit" class="btn btn-default btn-lg">
					  	<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Nuevo
					</button>

				</form>

			</div>
		
			<!-- create subservices form -->
			<div id="createSubForm" style="display:none;">

				<form method="post" action="/createSub" name="adminform">

					<fieldset>

						<b>Add a subservice</b><br><br>

			            <div class="input-group">
							<span class="input-group-addon" id="sizing-addon3" style="background-color:#4CB770; color:#eee; width:160px; text-align:left;"><b>Service Name: </b></span>
							<select class="form-control" name="services" id="create2services">
							<option disabled selected style="display:none;"></option>

								@foreach($services as $service)
									<option value="{{$service->service_id}}">{{$service->service_name}}</option>
								@endforeach
							</select>
						</div><br>

						<div class="input-group input-group">
							<span class="input-group-addon" id="sizing-addon3" style="background-color:#4CB770; color:#eee; width:160px; text-align:left;"><b>Subservice Name: </b></span>
							{{ Form::text('sub_name', null, array('class'=>'form-control', 'placeholder'=>'Name your subservice')) }}
						</div><br>

						<div class="input-group input-group">
							<span class="input-group-addon" id="sizing-addon3" style="background-color:#4CB770; color:#eee; width:160px; text-align:left;"><b>Price: </b></span>
							{{ Form::text('price', null, array('class'=>'form-control', 'placeholder'=>'Price')) }}
						</div><br>

						<div class="input-group input-group">
							<span class="input-group-addon" id="sizing-addon3" style="background-color:#4CB770; color:#eee; width:160px; text-align:left;"><b>Subservice ID: </b></span>
							<input type="text" class="form-control" placeholder="automatically added" aria-describedby="sizing-addon3">
						</div><br>

						<div>
							<label>Service Text: </label><br>
							{{ Form::textarea('sub_text', null, array('class'=>'form-control')) }}
						</div><br>


					</fieldset>

					<button type="submit" class="btn btn-default btn-lg">
					  	<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Nuevo
					</button>
					<div class="clearfix"></div>

				</form>

			</div>

			<!-- update services form -->
			<div id="updateForm" style="display:none;">

				<form method="post" action="/update" name="adminform">

					<fieldset>

						<b>Update a service</b><br><br>

						<div class="input-group">
							<span class="input-group-addon" id="sizing-addon3" style="background-color:#4CB770; color:#eee; width:160px; text-align:left;"><b>Service Name: </b></span>
							<select class="form-control" name="services" id="update1Services">
							<option disabled selected style="display:none;"></option>
							@foreach ($services as $service)	
									<option value={{$service->service_id}}>{{$service->service_name}}</option>
							@endforeach
							</select>
						</div><br>

						<div>
							<label>Service Text: </label>
							{{ Form::textarea('service_text', null, array('class'=>'form-control', 'id'=>'update1Text')) }}

						</div><br>

					</fieldset>
					<button type="submit" class="btn btn-default btn-lg">
					  	<span class="glyphicon glyphicon-save" aria-hidden="true"></span> Actualización
					</button>

				</form>

			</div>

			<!-- update subservices form -->
			<div id="updateSubForm" style="display:none;">

				<form method="post" action="/updateSub" name="adminform">

					<fieldset>

						<b>Update a subservice</b><br><br>

						<div class="input-group">
							<span class="input-group-addon" id="sizing-addon3" style="background-color:#4CB770; color:#eee; width:160px; text-align:left;"><b>Service Name: </b></span>
							<select class="form-control" name="services" id="update2Services">
								<option disabled selected style="display:none;">Select a service</option>
								@foreach($services as $service)
									<option value="{{$service->service_id}}">{{$service->service_name}}</option>
								@endforeach
							</select>	
						</div><br>

						<div class="input-group">
							<span class="input-group-addon" id="sizing-addon3" style="background-color:#4CB770; color:#eee; width:160px; text-align:left;"><b>Subservice Name: </b></span>
							<select class="form-control" name="subservices" id="update2Subservices">
								<option disabled selected style="display:none;"></option>
							</select>	
						</div><br>

						<div class="input-group input-group">
							<span class="input-group-addon" id="sizing-addon3" style="background-color:#4CB770; color:#eee; width:160px; text-align:left;"><b>Price: </b></span>
							{{ Form::text('price', null, array('class'=>'form-control', 'placeholder'=>'price', 'id'=>'update2SubPrice')) }}
						</div><br>

						<div>
							<label>Service Text: </label><br>
							{{ Form::textarea('sub_text', null, array('class'=>'form-control', 'id'=>'update2SubText')) }}
						</div><br>

					</fieldset>

					<!--<input type="submit" class="submit" id="submit" value="Add" />-->
					<button type="submit" class="btn btn-default btn-lg">
					  	<span class="glyphicon glyphicon-save" aria-hidden="true"></span> Actualización
					</button>

				</form>

			</div>

			<!-- delete services form -->
			<div id="deleteForm" style="display:none;">

				<form method="post" action="/delete" name="adminform">

					<fieldset>

						<b>Delete a service</b><br><br>

						<div class="input-group">
							<span class="input-group-addon" id="sizing-addon3" style="background-color:#4CB770; color:#eee; width:160px; text-align:left;"><b>Service Name: </b></span>
							<select class="form-control" name="services" id="delete1Services">
								<option disabled selected style="display:none;">Select a service</option>
								@foreach($services as $service)
									<option value="{{$service->service_id}}">{{$service->service_name}}</option>
								@endforeach
							</select>	
						</div><br>

					</fieldset>

					<button type="submit" class="btn btn-default btn-lg" onclick="return confirm('Are you sure you want to delete this service?')">
					  	<span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Borrar
					</button>
					<div class="clearfix"></div>

				</form>

			</div>

			<!-- delete subservices form -->
			<div id="deleteSubForm" style="display:none;">
			
				<form method="post" action="/deleteSub" name="adminform">

					<fieldset>
						<b>Delete a subservice</b><br><br>

							<div class="input-group">
								<span class="input-group-addon" id="sizing-addon3" style="background-color:#4CB770; color:#eee; width:160px; text-align:left;"><b>Service Name: </b></span>
								<select class="form-control" name="subservices" id="delete2Services">
									<option disabled selected style="display:none;">Select a service</option>
									@foreach($services as $service)
										<option value="{{$service->service_id}}">{{$service->service_name}}</option>
									@endforeach
								</select>	
							</div><br>

							<div class="input-group">
								<span class="input-group-addon" id="sizing-addon3" style="background-color:#4CB770; color:#eee; width:160px; text-align:left;"><b>Subservice Name: </b></span>
								<select class="form-control" name="subservice" id="delete2Subservices">
									<option disabled selected style="display:none;"></option>
								</select>	
							</div><br>
						</fieldset>

					<button type="submit" class="btn btn-default btn-lg" onclick="return confirm('Are you sure you want to delete this service?')">
					  	<span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Borrar
					</button>
					<div class="clearfix"></div>

				</form>

			</div>

		</div>

		<!-- All get requests for database interaction without refresh!!! -->
		<script>

			// update services section
			$('#update1Services').on('change', function(e){
				console.log(e);

				var service_id = e.target.value;


				//ajax
				$.get('/ajax-service?service_id=' + service_id, function(data){
					//succes data

					$('#update1Text').empty();
					$.each(data, function(index, subserviceObj){

						$('#update1Text').html(subserviceObj.service_text);

					});
				});
			}); 

			// update subservices section
			// retrieve all subservices from a service
			$('#update2Services').on('change', function(e){
				console.log(e);

				var service_id = e.target.value;


				//ajax
				$.get('/ajax-subservices?service_id=' + service_id, function(data){
					//succes data
					$('#update2SubPrice').val("");
					$('#update2SubText').empty();
					$('#update2Subservices').empty();
					$('#update2Subservices').append('<option disabled selected style="display:none;">Select a sub service</option>');
					$.each(data, function(index, subserviceObj){

						$('#update2Subservices').append('<option value="'+subserviceObj.sub_id+'">'+subserviceObj.sub_name+'</option>');

					});
				});
			});

			// retrieve text and price from one subservice
			$( document ).ready(function() {
				$('#update2Subservices').on('change', function(e){
					console.log(e);

					var sub_id = e.target.value;


					//ajax
					$.get('/ajax-subservice?sub_id=' + sub_id, function(data){
						//succes data
						$('#update2SubPrice').empty();
						$('#update2SubText').empty();
						$.each(data, function(index, subserviceObj){

							$('#update2SubPrice').val(subserviceObj.price);
							$('#update2SubText').html(subserviceObj.sub_text);
							//$('#subservice').append('<option value="'+subserviceObj.id+'">'+subserviceObj.sub_name+'</option>');

						});
					});
				});
			});

			// delete subservice section
			// retrieve subservices from the current service
			$('#delete2Services').on('change', function(e){
				console.log(e);

				var service_id = e.target.value;


				//ajax
				$.get('/ajax-subservices?service_id=' + service_id, function(data){
					//succes data
					$('#delete2Subservices').empty();
					$('#delete2Subservices').append('<option disabled selected style="display:none;">Select a sub service</option>');
					$.each(data, function(index, subserviceObj){

						$('#delete2Subservices').append('<option value="'+subserviceObj.sub_id+'">'+subserviceObj.sub_name+'</option>');

					});
				});
			});

		</script>
	</body>
</html>

<!--<script type="text/javascript" src="http://twitter.github.io/bootstrap/assets/js/bootstrap-dropdown.js"></script>-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

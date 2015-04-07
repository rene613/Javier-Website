
<!DOCTYPE html>
<html>
	<head>
		<title>AJAX Database</title>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
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
	
	<!-- create services form -->
	<div id="createForm" style="display:none;">

		<div style="margin:20px">

			<form method="post" action="/create" name="adminform" id="adminform">

				<fieldset>

					<b>Add a service</b><br><br>
					<div class="input-group input-group">
						<span class="input-group-addon" id="sizing-addon3" style="background-color:#4CB770; color:#eee; width:160px; text-align:left;"><b>Service Name: </b></span>
						<input type="text" class="form-control" placeholder="Name your service" aria-describedby="sizing-addon3">
					</div><br>

					<div>
						<label>Service Text: </label><br>
						<textarea name="subText" type="textarea" class="form-control" id="subText" style="height:200px; width:100%;" /></textarea>
					</div><br>

				</fieldset>

				<!--<input type="submit" class="submit" id="submit" value="Add" />-->
				<button type="button" class="btn btn-default btn-lg">
				  	<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Nuevo
				</button>

			</form>

		</div>

	</div>

	<!-- create subservices form -->
	<div id="createSubForm" style="display:none;">

		<div style="margin:20px">

			<form method="post" action="/admin" name="contactform" id="contactform">

				<fieldset>

					<b>Add a subservice</b><br><br>

		            <div class="input-group">
						<span class="input-group-addon" id="sizing-addon3" style="background-color:#4CB770; color:#eee; width:160px; text-align:left;"><b>Service Name: </b></span>
						<select class="form-control" name="services">
						<option disabled selected style="display:none;"></option>
							@foreach($services as $service)
								<option value="{{$service->service_id}}">{{$service->service_name}}</option>
							@endforeach
						</select>
					</div><br>

					<div class="input-group input-group">
						<span class="input-group-addon" id="sizing-addon3" style="background-color:#4CB770; color:#eee; width:160px; text-align:left;"><b>Subservice Name: </b></span>
						<input type="text" class="form-control" placeholder="Name your subservice" aria-describedby="sizing-addon3">
					</div><br>

					<div class="input-group input-group">
						<span class="input-group-addon" id="sizing-addon3" style="background-color:#4CB770; color:#eee; width:160px; text-align:left;"><b>Price: </b></span>
						<input type="text" class="form-control" placeholder="price" aria-describedby="sizing-addon3">
					</div><br>

					<div class="input-group input-group">
						<span class="input-group-addon" id="sizing-addon3" style="background-color:#4CB770; color:#eee; width:160px; text-align:left;"><b>Subservice ID: </b></span>
						<input type="text" class="form-control" placeholder="automatically added" aria-describedby="sizing-addon3">
					</div><br>

					<div>
						<label>Service Text: </label><br>
						<textarea name="subText" type="textarea" class="form-control" id="subText" style="height:200px; width:100%;" /></textarea>
					</div><br>


				</fieldset>

				<button type="button" class="btn btn-default btn-lg">
				  	<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Nuevo
				</button>
				<div class="clearfix"></div>

			</form>

		</div>

	</div>

	<div id="updateForm" style="display:none;">

		<div style="margin:20px">

			<form method="post" action="/admin" name="adminform" id="adminform">

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
						<textarea name="subText" type="textarea" id="update1Text" style="height:200px; width:100%;"></textarea>

					</div><br>

				</fieldset>
				<button type="button" class="btn btn-default btn-lg">
				  	<span class="glyphicon glyphicon-save" aria-hidden="true"></span> Actualización
				</button>

			</form>

		</div>

	</div>
	<div id="updateSubForm" style="display:none;">

		<div style="margin:20px">

			<form method="post" action="/create" name="adminform" id="adminform">

				<fieldset>

					<b>Update a subservice</b><br><br>

					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon3" style="background-color:#4CB770; color:#eee; width:160px; text-align:left;"><b>Service Name: </b></span>
						<select class="form-control" name="service" id="update2Services">
							<option disabled selected style="display:none;">Select a service</option>
							@foreach($services as $service)
								<option value="{{$service->service_id}}">{{$service->service_name}}</option>
							@endforeach
						</select>	
					</div><br>

					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon3" style="background-color:#4CB770; color:#eee; width:160px; text-align:left;"><b>Subservice Name: </b></span>
						<select class="form-control" name="subservice" id="update2Subservices">
							<option disabled selected style="display:none;"></option>
						</select>	
					</div><br>

					<div class="input-group input-group">
						<span class="input-group-addon" id="sizing-addon3" style="background-color:#4CB770; color:#eee; width:160px; text-align:left;"><b>Price: </b></span>
						<input type="text" class="form-control" placeholder="price" aria-describedby="sizing-addon3" id="update2SubPrice" value="">
					</div><br>

					<div>
						<label>Service Text: </label><br>
						<textarea name="subText" type="textarea" class="form-control" id="update2SubText" style="height:200px; width:100%;"></textarea>
					</div><br>

				</fieldset>

				<!--<input type="submit" class="submit" id="submit" value="Add" />-->
				<button type="button" class="btn btn-default btn-lg">
				  	<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Nuevo
				</button>

			</form>

		</div>

	</div>
	<div id="deleteForm" style="display:none;">

		<div style="margin:20px">

			<form method="post" action="/deleteService" name="contactform" id="contactform">

				<fieldset>

					<b>Delete a service</b><br><br>

					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon3" style="background-color:#4CB770; color:#eee; width:160px; text-align:left;"><b>Service Name: </b></span>
						<select class="form-control" name="service" id="delete1Services">
							<option disabled selected style="display:none;">Select a service</option>
							@foreach($services as $service)
								<option value="{{$service->service_id}}">{{$service->service_name}}</option>
							@endforeach
						</select>	
					</div><br>

				</fieldset>

				<button type="button" class="btn btn-default btn-lg">
				  	<span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Borrar
				</button>
				<div class="clearfix"></div>

			</form>

		</div>

	</div>
	<div id="deleteSubForm" style="display:none;">
		
		<div style="margin:20px">
		
			<form method="post" action="/deleteService" name="contactform" id="contactform">

				<fieldset>
					<b>Delete a subservice</b><br><br>

						<div class="input-group">
							<span class="input-group-addon" id="sizing-addon3" style="background-color:#4CB770; color:#eee; width:160px; text-align:left;"><b>Service Name: </b></span>
							<select class="form-control" name="service" id="delete2Services">
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

				<button type="button" class="btn btn-default btn-lg">
				  	<span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Borrar
				</button>
				<div class="clearfix"></div>

			</form>

		</div>

	</div>

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
					$.get('/ajax-2subservice?sub_id=' + sub_id, function(data){
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
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">

	<!--<script type="text/javascript" src="http://twitter.github.io/bootstrap/assets/js/bootstrap-dropdown.js"></script>-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

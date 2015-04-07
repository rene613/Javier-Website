<title>admin</title>
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
          <li><a href="#" onclick="toggleDelete()">Borrar subservice</a></li>
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
<div style="margin:	20px;">
<!-- -------------------- CREATE ------------------------- -->
<div id="createForm" style="display:none;">
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

<!-- -------------------- SUB CREATE ------------------------- -->
<div id="createSu
bForm" style="display:none;">
	<form method="post" action="/admin" name="contactform" id="contactform">

		<fieldset>

			<b>Add a subservice</b><br><br>

            <div class="input-group">
				<span class="input-group-addon" id="sizing-addon3" style="background-color:#4CB770; color:#eee; width:160px; text-align:left;"><b>Service Name: </b></span>
				<select class="form-control" name="services" id="services">
				<option disabled selected style="display:none;"></option>
				@foreach ($services as $service)	
						<option value={{$service->service_id}}>{{$service->service_name}}</option>
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
<!-- -------------------- END CREATE ------------------------- -->


<!-- -------------------- UPDATE ------------------------- -->
<div id="updateForm" style="display:none;">
	<form method="post" action="/admin" name="adminform" id="adminform">

		<fieldset>

			<b>Update a service</b><br><br>

			<div class="input-group">
				<span class="input-group-addon" id="sizing-addon3" style="background-color:#4CB770; color:#eee; width:160px; text-align:left;"><b>Service Name: </b></span>
				<select class="form-control" name="services" id="updateServices">
				<option disabled selected style="display:none;"></option>
				@foreach ($services as $service)	
						<option value={{$service->service_id}}>{{$service->service_name}}</option>
				@endforeach
				</select>
			</div><br>

			<div>
				<label>Service Text: </label>
				@foreach ($services as $service)
				<textarea name="subText" type="textarea" id={{$service->service_id}} style="display:none; height:200px; width:100%;"/>{{$service->service_text}}</textarea>
				@endforeach

			</div><br>

		</fieldset>
		<button type="button" class="btn btn-default btn-lg">
		  	<span class="glyphicon glyphicon-save" aria-hidden="true"></span> Actualización
		</button>

	</form>
</div>

<!-- -------------------- SUB UPDATE ------------------------- -->
<div id="updateSubForm" style="display:none;">
	<form method="post" action="/update" name="contactform" id="contactform">

		<fieldset>

			<b>Update a subservice</b><br><br>
			<div class="input-group">
				<span class="input-group-addon" id="sizing-addon3" style="background-color:#4CB770; color:#eee; width:160px; text-align:left;"><b>Service Name: </b></span>
				<select class="form-control" name="services" id="updateSubservices">
				<option disabled selected style="display:none;"></option>
				@foreach ($services as $service)	
						<option value={{$service->service_id}}>{{$service->service_name}}</option>
				@endforeach
				</select>
			</div><br>

			@foreach ($services as $service)
			<?php $id = $service->service_id; ?>
			<div class="input-group {{$id ."select"}}" style="display:none;">
				<span class="input-group-addon" id="sizing-addon3" style="background-color:#4CB770; color:#eee; width:160px; text-align:left;"><b>Subservice Name: </b></span>
				<select class="form-control" name="services" id={{$id . "12"}}>
					<option disabled selected style="display:none;"></option>
					<?php $subservices = DB::select("select * from subservices where service_name = '$id' ORDER BY sub_id"); ?>
					@foreach ($subservices as $subservice)
						<option value={{$subservice->sub_id}}>{{$subservice->sub_name}}</option>
					@endforeach	
				</select>
			</div>
			@endforeach

			<br>

			<div class="input-group input-group">
				<span class="input-group-addon" id="sizing-addon3" style="background-color:#4CB770; color:#eee; width:160px; text-align:left;"><b>Price: </b></span>
				<input type="text" class="form-control" placeholder="price" aria-describedby="sizing-addon3">
			</div><br>

			<div>
				<label>Service Text: </label><br>
				<textarea name="subText" type="textarea" class="form-control" id="subText" style="height:200px; width:100%;" /></textarea>
			</div><br>

		</fieldset>

		<button type="button" class="btn btn-default btn-lg">
		  	<span class="glyphicon glyphicon-save" aria-hidden="true"></span> Actualización
		</button>
		<div class="clearfix"></div>

	</form>
</div>	
<!-- -------------------- END UPDATE ------------------------- -->

<!-- -------------------- DELETE ------------------------- -->
<div id="deleteForm" style="display:none;">
	<form method="post" action="/deleteService" name="contactform" id="contactform">

		<fieldset>

			<b>Delete a service</b><br><br>
			<div>
				<label>Service</label><br>
					<select name="services" id="services">
					<option value="0">--- Select a service ---</option>
					@foreach ($services as $service)	
							<option value={{$service->service_id}}>{{$service->service_name}}</option>
					@endforeach
					</select>
				</select>
			</div>

		</fieldset>

		<button type="button" class="btn btn-default btn-lg">
		  	<span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Borrar
		</button>
		<div class="clearfix"></div>

	</form>
</div>	

<!-- -------------------- SUB DELETE ------------------------- -->
<div id="deleteSubForm" style="display:none;">
	<form method="post" action="/deleteSubservice" name="contactform" id="contactform">

		<fieldset>

			<b>Delete a service</b><br><br>
			<div>
				<label>Service</label><br>
					<select name="services" id="services">
					<option value="0">--- Select a service ---</option>
					@foreach ($services as $service)	
							<option value={{$service->service_id}}>{{$service->service_name}}</option>
					@endforeach
					</select>
				</select>
			</div>

		</fieldset>

		<button type="button" class="btn btn-default btn-lg">
		  	<span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Borrar
		</button>
		<div class="clearfix"></div>

	</form>
</div>	
<div id="result"></div>

<!-- -------------------- END DELETE ------------------------- -->

</body>

	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">

	<!--<script type="text/javascript" src="http://twitter.github.io/bootstrap/assets/js/bootstrap-dropdown.js"></script>-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.8.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	{{ HTML::script('scripts/CRUD.js') }}
	
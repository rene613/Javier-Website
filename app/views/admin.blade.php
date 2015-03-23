<title>admin</title>
<form method="post" action="/admin" name="adminform" id="adminform">

	<fieldset>

		Add a service<br>
		<div>
			<label>Service Name:</label><br>
			<input name="name" type="text" id="name" />
		</div>

		<div>
			<label>Service Text: </label><br>
			<textarea name="subText" type="textarea" id="subText" style="height:200px; width:400px;" /></textarea>
		</div>

	</fieldset>
	<input type="submit" class="submit" id="submit" value="Add" />

</form>
<form method="post" action="/contact" name="contactform" id="contactform">

	<fieldset>

		Add a subservice<br>
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

		<div>
			<label>Subservice name: </label><br>
			<input name="subName" type="text" id="subName" />
		</div>

		<div>
			<label>Price: </label><br>
			<input name="price" type="text" id="price" />
		</div>

		<div>
			<label>id: </label><br>
			<input name="id" type="text" id="id" />
		</div>

		<div>
			<label>Subservice Text: </label><br>
			<textarea name="subText" type="textarea" id="subText" style="height:200px; width:400px;" /></textarea>

		</div>


	</fieldset>

	<input type="submit" class="submit" id="submit" value="Add" />
	<div class="clearfix"></div>

</form>
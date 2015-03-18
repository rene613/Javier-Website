<form method="post" action="/contact" name="contactform" id="contactform">

	<fieldset>

		Add a service<br>
		<div>
			<label>Service Name:</label>
			<input name="name" type="text" id="name" />
		</div>

		<div>
			<label>Service Text: </label>
			<input name="serviceText" type="text" id="serviceText" />
		</div>

	</fieldset>
	<input type="submit" class="submit" id="submit" value="Add" />

</form>
<form method="post" action="/contact" name="contactform" id="contactform">

	<fieldset>

		Add a subservice<br>
		<div>
			<label>Service</label>
				<select name="services" id="services">
				<option value="0">--- Select a service ---</option>
				<option value="projects">Proyectos de instalaciones</option>
				<option value="licenses">Licencias de actividad</option>
				<option value="energy">Energía</option>
				<option value="environmental">Ingeniería ambiental</option>
				<option value="civil">Ingeniería civil</option>
				<option value="expert">Periciales</option>
			</select>
		</div>

		<div>
			<label>Subservice name: </label>
			<input name="subName" type="text" id="subName" />
		</div>

		<div>
			<label>Subservice Text: </label>
			<input name="subText" type="text" id="subText" />
		</div>

		<div>
			<label>Price: </label>
			<input name="price" type="text" id="price" />
		</div>

		<div>
			<label>id: </label>
			<input name="id" type="text" id="id" />
		</div>


	</fieldset>

	<input type="submit" class="submit" id="submit" value="Add" />
	<div class="clearfix"></div>

</form>
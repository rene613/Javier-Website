<?php
	
	class Service extends Eloquent{

		public $timestamps = false;
		protected $fillable = ['service_name'];
		protected $primaryKey = "service_id";
	
	}

?>
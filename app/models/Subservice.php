<?php
	
	class Subservice extends Eloquent{

		public $timestamps = false;
		protected $fillable = ['sub_name', 'service_id'];
		protected $primaryKey = "sub_id";
		
	}

?>
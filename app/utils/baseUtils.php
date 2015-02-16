<?php

class baseUtils{

    public static function pageCheck($page, $value)
    {
		if($page == $value) {
			echo 'id="current"';
		}
	}
}

?>
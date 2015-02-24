<?php
class extraController extends BaseController
{
    public function getForm() {
        return View::make('extra')
        ->with('page', 'extra')
        ->with('services', ["projects", "licenses", "energy", "environmental", "civil", "expert"]);
    }
}
?>
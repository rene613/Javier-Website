<?php
class extraController extends BaseController
{
    public function getForm() {
        return View::make('extra')
        ->with('page', 'extra')
        ->with('services', ["project", "license", "energy", "environmental", "civil", "expert"]);
    }
}
?>
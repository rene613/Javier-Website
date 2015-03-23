<?php
class extraController extends BaseController
{
    public function getForm() {

        return View::make('extra')
        ->with('page', 'extra')
        ->with('services', DB::select('select * from services'));
    }
}
?>
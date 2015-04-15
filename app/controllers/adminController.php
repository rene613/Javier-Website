<?php
class AdminController extends BaseController
{
    public function getForm() {

          return View::make('admin')
          ->with('page', 'contact')
          ->with('services', DB::select('select * from services'));
          
     }
    
     public function create() {
         
        $service = new service;
        $service->service_name = Input::get('service_name');
        $service->service_text = Input::get('service_text');
        $service->save();

     }

     public function createSub() {
         
        $subservice = new subservice;
        $subservice->service_id = Input::get('services');
        $subservice->sub_name = Input::get('sub_name');
        $subservice->sub_text = Input::get('sub_text');
        $subservice->price = Input::get('price');
        $subservice->save();

     }

     public function update() {
         
        $service = service::where('service_id', '=', Input::get('services'))->first();
        $service->service_text = Input::get('service_text');
        $service->save();

     }

     public function updateSub() {
         
        $subservice = subservice::where('sub_id', '=', Input::get('subservices'))->first();
        $subservice->sub_text = Input::get('sub_text');
        $subservice->price = Input::get('price');
        $subservice->save();

     }

     public function delete() {
         
        $service = service::where('service_id', '=', Input::get('services'))->first();
        $service->delete();

     }

     public function deleteSub() {
         
        $service = new service;

        $service->service_name = Input::get('service_name');

        $service->service_text = Input::get('service_text');

        $service->save();

     }

}
?>
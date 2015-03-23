<?php
class AdminController extends BaseController
{
    public function getForm() {

          return View::make('admin')
          ->with('services', DB::select('select * from services'));
          
     }
    
     public function postForm() {
         
          $fromEmail = Input::get('email');
          $fromName = Input::get('name');
          $subject = Input::get('subject');
          $comment = Input::get('comment');
      
          $toEmail = 'rene.steneker@hotmail.com';
          $toName = 'Company Manager';
          
          $data = array('fromEmail' => $fromEmail, 'fromName' => $fromName, 'subject' => $subject, 'comment' => $comment, 'toEmail' => $toEmail, 'toName' => $toName);
          Mail::send('emails.contact', $data, function($message) use ($toEmail, $toName, $subject)
          {
              $message->to($toEmail, $toName);
      
              $message->subject($subject);
          });

     }
}
?>
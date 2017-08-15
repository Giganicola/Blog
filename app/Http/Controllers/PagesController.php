<?php 

namespace App\Http\Controllers;

class PagesController extends Controller {
  
    public function getIndex() {
        
        # process variable data or params
        # talk to the model
        # receive from the model
        # compile or process data from the model if needed
        # pass that data to the correct view
      
        return view('pages.welcome');
    }
  
    public function getAbout() {        
        
        $first = '';
        $last = 'Blog';
      
        $data = [];
      
        $data['fullname'] = $first . ' ' . $last;
        $data['email'] = 'test@test.com';
      
        return view('pages.about')->withData($data);
    }
  
    public function getContact() {
      
        return view('pages.contact');
    }  
  
}



?>
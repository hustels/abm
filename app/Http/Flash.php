<?php 

namespace App\Http;
class Flash
{
	public function message($message){
		session()->flash('flash_message' , $message);
	}
}

//$flash->message('hello there')
//$flash->error('')
//$flash->success('')
 ?>
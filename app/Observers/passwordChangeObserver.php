<?php

namespace App\Observers;
use Illuminate\Support\Facades\Mail; 
use App\Mail\passwordChangeMail;

class passwordChangeObserver
{
    public function updated($model){
      if($model->wasChanged('password')){
         Mail::to($model->email)->send(new passwordChangeMail());
      }
    }
}

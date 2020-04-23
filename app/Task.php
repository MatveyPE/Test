<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $filllable =['name'];

  //  $user = App\User::(1);

  //  foreach ($user->tasks as $task){
    //  echo $task->name;

      public function user(){
        return $this->belongsTo(User::class);
      }
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Task;

class Task extends Model
{
   public function scopeIncomplete($query) //Allows you to do App\Task::incomplete
   {
   		return $query->where('complete', 0);
   }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contract extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'name', 'ext_no', 'int_no', 'type', 'employer', 'executer', 'department',
    'group', 'start_date', 'finish_date', 'status', 'participation', 'cost'
  ];


}

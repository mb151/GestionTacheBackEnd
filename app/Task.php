<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['nameTask','detailTask','dateTask','iscompleted'];
    public $timestamps = false;
}

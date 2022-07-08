<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResultDataman extends Model
{
    use HasFactory;
    protected $table = 'Table_ResultDataman';
    public function getAll(){
        // return ResultDataman->table->get();
    }
}

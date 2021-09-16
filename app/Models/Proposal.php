<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;
    protected $table = 'tbl_proposal';

    protected $primaryKey = 'Id';

    public function Nilai()
    {
        return $this->hasMany('App\Models\Nilai');
    }
}

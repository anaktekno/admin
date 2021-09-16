<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;

    protected $table = 'tbl_nilai';

    protected $primaryKey = 'Id';

    protected $fillable = [
        'proposal_id',
        'user_id',
        'original',
        'inovasi',
        'kolaborasi',
        'kebermanfaatan',
        'sustainability',
        'TTKI',
        'komentar',
        'anggaran',
        'video'
    ];

    public function Proposal()
    {
        return $this->belongsTo('App\Models\Proposal', 'proposal_id');
    }

    public function User()
    {
        return $this->belongsTo('App\Models\User');
    }
}

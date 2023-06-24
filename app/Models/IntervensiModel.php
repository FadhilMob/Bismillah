<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BidangModel;
use App\Models\User;

class IntervensiModel extends Model
{
    use HasFactory;
    protected $table = 'intervensi';
    protected $fillable = [
        'id',
        'nama_intervensi',
        'bidang_id',
        'user_id'
       
    ];

    public function dt_bidangIn()
    {
        return $this->belongsTo(BidangModel::class, 'bidang_id');
    }
    public function dt_userIn()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

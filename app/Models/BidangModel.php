<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\RhkModel;

class BidangModel extends Model
{
    use HasFactory;
    protected $table = 'bidang';
    protected $fillable = [
        'nama_bidang',
        'nama_kategori'
    ];

    public function dt_user()
    {
        return $this->HasMany(User::class, 'id');
    }
    public function dt_rhk()
    {
        return $this->HasMany(RhkModel::class, 'id');
    }
    public function dt_intervensi()
    {
        return $this->HasMany(IntervensiModel::class, 'id');
    }
}

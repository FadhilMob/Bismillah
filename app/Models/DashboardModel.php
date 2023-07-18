<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DashboardModel extends Model
{
    use HasFactory;
    protected $table = 'dashboard';
    protected $fillable = [
        'id',
        'user_id',
        'bidang_id',
        'intervensi_id',
        'rhk_id',
        'laporan_id'
    ];

    public function dt_user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function dt_bidang()
    {
        return $this->belongsTo(BidangModel::class, 'bidang_id');
    }
    public function dt_intervensi()
    {
         return $this->belongsTo(IntervensiModel::class, 'intervensi_id');
    }
    public function dt_rhk()
    {
         return $this->belongsTo(RhkModel::class, 'rhk_id');
    }
    public function dt_laporan()
    {
         return $this->belongsTo(LaporanModel::class, 'laporan_id');
    }
}

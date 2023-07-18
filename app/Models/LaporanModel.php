<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanModel extends Model
{
    use HasFactory;
    protected $table = 'laporan';
    protected $fillable = [
        'user_id',
        'rhk_id',
        'judul',
        'latar_belakang',
        'dasar_hukum',
        'dasar_pelaksanaan',
        'waktu_pelaksanaan',
        'hari',
        'pukul1',
        'pukul2',
        'tempat',
        'peserta',
        'tujuan',
        'identifikasi_masalah',
        'dokumentasi',
        'jabatan1',
        'nama1',
        'fungsional1',
        'nip1',
        'jabatan2',
        'nama2',
        'fungsional2',
        'nip2',
        'jabatan3',
        'nama3',
        'fungsional3',
        'nip3',
        'role'

    ];
    public function dt_userLap()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function dt_rhkLap()
    {
        return $this->belongsTo(RhkModel::class, 'rhk_id');
    }
}

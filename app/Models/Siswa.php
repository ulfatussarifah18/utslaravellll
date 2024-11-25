<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $fillable =['nama', 'kelas', 'guru_id'];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    public function absensi()
   {
       return $this->hasMany(Absensi::class);
   }
}

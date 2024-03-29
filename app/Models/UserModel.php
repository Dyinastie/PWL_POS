<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserModel extends Model
{
    protected $table = 'm_user'; // Mendefinisikan nama tabel yang digunakan oleh model ini
    public $timestamps = false;
    protected $primaryKey = 'user_id'; // Mendefinisikan primary key dari tabel yang digunakan

    protected $fillable =[
        'user_id',
        'level_id',
        'username',
        'nama',
        'password',
    ];

    // public function level(): BelongsTo {
    //     return $this->belongsTo(LevelModel::class);
    // }
}

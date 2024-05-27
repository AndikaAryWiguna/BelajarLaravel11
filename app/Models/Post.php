<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    // Jika nama tabel berbeda dengan nama model maka harus isikan code yang dibawah
    // protected $table = 'tabel_baru';

    // Jika Primary Key pada tabel tidak ID Maka gunakan Code yang dibawah
    // protected $primaryKey = 'nama_primary_key';

    // code untuk protect create yang diinputkan ada 2 :
    // fillable 'untuk yang bisa diisi'
    // guarted 'untuk yang didalamnya tidak boleh diisi'
    protected $fillable = ['title','author','slug','body'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

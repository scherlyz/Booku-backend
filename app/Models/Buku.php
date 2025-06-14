<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terkait dengan model
     * 
     * @var string
     */
    protected $table = 'buku'; // Sesuai dengan nama tabel di migration

    /**
     * Kolom yang dapat diisi secara massal
     * 
     * @var array
     */
    protected $fillable = [
        'title',
        'author',
        'description',
        'cover_url',
        'year',
        'publisher'
    ];

    /**
     * Tipe data yang harus di-cast
     * 
     * @var array
     */
    protected $casts = [
        'year' => 'integer'
    ];

    /**
     * Relasi ke model lain (jika ada)
     * Contoh:
     * public function category() {
     *     return $this->belongsTo(Category::class);
     * }
     */
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class makananModel extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'kategori', 'keterangan', 'harga'];
    protected $table = 'makanan';
    public $timestamps = false;
}

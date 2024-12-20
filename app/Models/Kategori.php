<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

	public $table = 'kategori';

	public function produk()
	{
		return $this->belongsTo(Produk::class);
	}
}

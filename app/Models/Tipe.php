<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipe extends Model
{
    use HasFactory;

	public $table = 'tipe';

	public function kategori()
	{
		return $this->belongsTo(Kategori::class);
	}
}

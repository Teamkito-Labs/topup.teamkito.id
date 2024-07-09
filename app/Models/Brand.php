<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

	public $table = 'brand';

	public function kategori()
	{
		return $this->belongsTo(Kategori::class);
	}

	public function items()
	{
		return $this->hasMany(Item::class, 'brand_id', 'id');
	}
}

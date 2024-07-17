<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlashSale extends Model
{
    use HasFactory;

	public $table = 'flash_sale';

	public function kategori()
	{
		return $this->belongsTo(Kategori::class);
	}

	public function brand()
	{
		return $this->belongsTo(Brand::class);
	}

	public function item()
	{
		return $this->belongsTo(Item::class);
	}
}

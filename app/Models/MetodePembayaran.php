<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetodePembayaran extends Model
{
    use HasFactory;

	public $table = 'metode_pembayaran';

	public function penyedia()
	{
		return $this->belongsTo(PenyediaPembayaran::class, 'penyedia_pembayaran_id', 'id');
	}

	public function kategori()
	{
		return $this->belongsTo(KategoriPembayaran::class, 'kategori_pembayaran_id', 'id');
	}
}

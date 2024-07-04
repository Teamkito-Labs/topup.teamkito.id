<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class APIController extends Controller
{
    public function getTotalHarga($item_id, $payCode)
	{
		$number = $item_id;

		$tripay = new Tripay(new HttpClient(env('TRIPAY_API_KEY')));

		$data = $tripay->getBiayaTransaksi($payCode, $number);

		return response()->json($data);
	}
}

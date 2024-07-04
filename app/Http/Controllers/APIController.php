<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nekoding\Tripay\Networks\HttpClient;
use Nekoding\Tripay\Tripay;

class APIController extends Controller
{
    public function getTotalHarga(Request $request)
	{
		$number = $request->amount;

		$tripay = new Tripay(new HttpClient(env('TRIPAY_API_KEY')));

		$data = $tripay->getBiayaTransaksi($number, $request->payCode);

		// dd($data['data'][0]['total_fee']['customer']);

		$total = $number + $data['data'][0]['total_fee']['customer'];

		return response()->json($total);
	}
}

<?php

use Carbon\Carbon;

function formatRupiah($amount)
{
	return 'Rp' . number_format($amount, 0, ',', '.');
}

function tanggal($date)
{
	return Carbon::parse($date)->translatedFormat('d F Y');
}

function tanggalLengkap($date)
{
	return Carbon::parse($date)->translatedFormat('d F Y H:i');
}

function hargaPersen($harga, $persen)
{
	return $harga * $persen / 100;
}

function checkHargaByKode($kode)
{
	$username = env('DIGIFlAZZ_USERNAME');
    $apiKey = env('DIGIFLAZZ_KEY');
    
    $data = json_encode(array( 
        'cmd' => 'deposit',
        'username' => $username, // konstan
        'sign' => md5("$username$apiKey" . "depo"),
        'code' => $kode
    ));
    $header = array(
        'Content-Type: application/json',
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.digiflazz.com/v1/price-list');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    
    $response = curl_exec($ch);
    curl_close($ch);

    // Decode the JSON response
    $jsonResponse = json_decode($response, true);

    if (isset($jsonResponse['data']) && !empty($jsonResponse['data'])) {
        // Extract price and product_name
        $price = $jsonResponse['data'][0]['price'] ?? null;
        $productName = $jsonResponse['data'][0]['product_name'] ?? null;

        // Return the associative array
        return array(
            'product_name' => $productName,
            'price' => $price
        );
    } else {
        // Return empty data if the response is empty or invalid
        return '';
    }
}
<?php 

namespace App\Interfaces;

use App\Http\Requests\TipeRequest;

interface TipeInterface
{
	public function getAllTipe();
	public function getAllTipeStatus($status);
	public function storeNewTipe(TipeRequest $request);
}
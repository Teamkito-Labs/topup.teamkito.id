<?php 

namespace App\Interfaces;

interface ItemInterface
{
	public function getAllItem();
	public function getAllItemByStatus($status);
	public function getAllItemByBrandId($brandId);
	public function getAllItemByBrandIdAndTipeId($brandId, $tipeId);
}
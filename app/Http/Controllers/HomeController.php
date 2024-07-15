<?php

namespace App\Http\Controllers;

use App\Interfaces\BrandInterface;
use App\Interfaces\ItemInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	private BrandInterface $brandRepository;
	private ItemInterface $itemRepository;

	public function __construct(BrandInterface $brandRepository, ItemInterface $itemRepository)
    {
		$this->brandRepository = $brandRepository;
		$this->itemRepository = $itemRepository;
    }

    function home() : View {
		$tipe = 'Top Up Populer';
		$games = $this->brandRepository->getAllBrand();

		return view('welcome', compact('games', 'tipe'));
	}

	function home_perangkat($perangkat) : View {
		if ($perangkat == 'mobile') {
			$tipe = 'Mobile';
			$games = $this->brandRepository->getAllBrandByPerangkat('Mobile');
		} elseif ($perangkat == 'pc') {
			$tipe = 'PC';
			$games = $this->brandRepository->getAllBrandByPerangkat('PC');
		} elseif ($perangkat == 'konsol') {
			$tipe = 'Mobile';
			$games = $this->brandRepository->getAllBrandByPerangkat('Konsol');
		}	

		return view('welcome', compact('games', 'tipe'));
	}

	function proses_topup($gameSlug) : View {
		$data = $this->brandRepository->getBrandBySlug($gameSlug);
		$items = $this->itemRepository->getAllItemByBrandId($data->id);

		return view('guest.proses-topup-diamond', compact('data', 'items'));
	}
}

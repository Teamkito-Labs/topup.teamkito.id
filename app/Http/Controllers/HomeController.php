<?php

namespace App\Http\Controllers;

use App\Interfaces\BrandInterface;
use App\Interfaces\ItemInterface;
use App\Interfaces\MetodePembayaranInterface;
use Illuminate\Contracts\View\View;
use Xendit\Configuration;
use Xendit\PaymentMethod\PaymentMethodApi;

class HomeController extends Controller
{
	private BrandInterface $brandRepository;
	private ItemInterface $itemRepository;
	private MetodePembayaranInterface $metodePembayaranRepository;

	public function __construct(BrandInterface $brandRepository, ItemInterface $itemRepository, MetodePembayaranInterface $metodePembayaranRepository)
    {
		$this->brandRepository = $brandRepository;
		$this->itemRepository = $itemRepository;
		$this->metodePembayaranRepository = $metodePembayaranRepository;
		Configuration::setXenditKey(env('XENDIT_API_KEY'));
    }

    function home() : View {
		$tipe = 'Top Up Populer';
		$games = $this->brandRepository->getAllBrand();
		$apiInstance = new PaymentMethodApi();
		$data = $apiInstance->getAllPaymentMethods();

		return view('welcome', compact('games', 'tipe', 'data'));
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
		$pembayaran = $this->metodePembayaranRepository->getAllMetodePembayaran();

		return view('guest.proses-topup-diamond', compact('data', 'items', 'pembayaran'));
	}
}

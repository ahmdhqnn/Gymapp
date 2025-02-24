<?php

namespace App\Http\Controllers;

use App\Models\Gym;
use App\Models\City;
use Illuminate\Http\Request;
use App\Services\FrontService;

class FrontController extends Controller
{
    protected $frontService;

    public function __construct(FrontService $frontService)
    {
        $this->frontService = $frontService;
    }
    public function index()
    {
        $data = $this->frontService->getFrontPageData();
        // dd($data);
        return view('front.index', $data);
    }
    public function pricing()
    {
        $data = $this->frontService->getSubscriptionData();
        // return view('front.pricing', $data);
        dd($data);
    }
    public function details(Gym $gym)
    {
        dd($gym);
        // return view('front.details', compact('gym'));
    }
    public function city(City $city)
    {
        // dd($city);
        return view('front.city', compact('city'));
    }
}

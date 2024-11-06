<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubscribePackage;
use App\Services\BookingService;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\StorePaymentRequest;
use App\Models\SubscribeTransaction;
use App\Http\Requests\StoreCheckBookingRequest;

class BookingController extends Controller
{
    protected $bookingService;

    public function __construct(BookingService $bookingService)
    {
        $this->bookingService = $bookingService;
    }
    public function booking(SubscribePackage $subscribePackage)
    {
        $tax = 0.11;
        $totalTaxAmount = $tax * $subscribePackage->price;
        $grandTotalAmount = $subscribePackage->price + $totalTaxAmount;

        return view('booking.checkout', compact('subscribepackage', 'totalTaxAmount', 'grandTotalAmount'));
    }
    public function bookingStore(SubscribePackage $subscribePackage, StoreBookingRequest $request)
    {
        $validated = $request->validated();
        try {
            $this->bookingService->storeBookingInSession($subscribePackage, $validated);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Failed to store booking. Please try again later.']);
        }
        return redirect()->route('front.payment');
    }
    public function payment()
    {
        $data = $this->bookingService->payment();
        return view('booking.payment', $data);
    }

    public function paymentStore(StorePaymentRequest $request)
    {
        $validated = $request->validated();
        $bookingTransactionId = $this->bookingService->paymentStore($validated);
    if ($bookingTransactionId) {
        return redirect()->route('front.booking_finished', $bookingTransactionId);
    }

    return redirect()->route('front.index')->withErrors(['error' => 'Failed to process payment. Please try again later.']);
    }
    public function bookingFinished(SubscribeTransaction $subscribeTransaction)
    {
        return view('booking.booking.finished', compact('subscribeTransaction'));
    }

    public function checkBookingDetails(StoreCheckBookingRequest $request)
    {
        $validated = $request->validated();
        $bookingDetails = $this->bookingService->getBookingDetails($validated);

        if ($bookingDetails) {
            return view('booking.check_booking.details', compact('BookingDetails'));
        }
        return redirect()->route('booking.check_booking')->withErrors(['error' => 'Transaction not found.']);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{

    public function index()
    {
        $bookings = Booking::all();
        return view('booking.index', compact('bookings' ));
    }

    public function create()
    {
        $services = Service::all();
        $employees = Employee::all();
        return view('booking.create', compact('services', 'employees'));
    }

    public function store(Request $request)
    {
        //dd($request);
        $booking = $request->validate([
            'client_name' => 'required|string',
            'client_phone' => 'required|string',
            'client_email' => 'required|email',
            'service_id' => 'required|exists:services,id',
            'employee_id' => 'required|exists:employees,id',
            'booking_date' => 'required|date',
            'status' => 'required|string',
            'payment_status' => 'required|string',
        ]);

        Booking::create($booking);
        return redirect()->route('booking.index')->with('success', 'Boking created successfully');
    }

    public function show($id)
    {
        $bookings = Booking::findOrFail($id);
        return view('booking.show', compact('bookings'));
    }

    public function edit($id)
    {
        $employees = Employee::all();
        $services = Service::all();
        $bookings = Booking::findOrFail($id);
        return view('booking.edit', compact('bookings', 'services', 'employees'));
    }

    public function update(Request $request, $id)
    {
        $booking = $request->validate([
            'client_name' => 'required|string',
            'client_phone' => 'required|string',
            'client_email' => 'required|string',
            'booking_date' => 'required|string',
            'status' => 'required|string',
            'payment_status' => 'required|string',
            'service_id' => 'required|exists:services,id',
            'employee_id' => 'required|exists:employees,id',
        ]);

        $bookings = Booking::findOrFail($id);
        $bookings->update($booking);
        return redirect('/booking')->with('success', 'bookings updated successfully');
    }

    public function destroy($id)
    {
        $bookings = Booking::findOrFail($id);
        $bookings->delete();
        return redirect('/booking')->with('success', 'bookings deleted successfully');
    }

}

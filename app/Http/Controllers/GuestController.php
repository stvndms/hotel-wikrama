<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guests = Guest::all();
        return response()->json(['guests' => $guests], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'guest_name' => ['required', 'max:255'],
            'guest_photo' => ['image', 'file', 'max:3024'],
            'guest_phone' => ['required'],
            'guest_country' => ['required'],
            'guest_address' => ['required'],
            'guest_id_card' => ['image', 'file', 'max:3024']
        ];

        $validatedData = $request->validate($rules);
        $validatedData['guest_photo'] = $request->file('guest_photo')->store('uploaded-images');
        $validatedData0['guest_id_card'] = $request->file('guest_id_card')->store('uploaded-images');

        Guest::create($validatedData);

        return redirect('/')->with('success', 'Your Data has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function show(Guest $guest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function edit(Guest $guest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guest $guest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guest  $guest
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guest $guest)
    {
        //
    }

    public function createApi(Request $request) 
    {
        $rules = [
            'guest_name' => ['required', 'max:255'],
            'guest_photo' => ['image', 'file', 'max:3024'],
            'guest_phone' => ['required'],
            'guest_country' => ['required'],
            'guest_address' => ['required'],
            'guest_id_card' => ['image', 'file', 'max:3024']
        ];

        $validatedData = $request->validate($rules);
        // $validatedData['guest_photo'] = $request->file('guest_photo')->store('uploaded-images');
        // $validatedData0['guest_id_card'] = $request->file('guest_id_card')->store('uploaded-images');

        Guest::create($validatedData);

        return response()->json(
            [
                'guest' => $validatedData
            ], 201);
    }

    public function updateApi(Request $request, Guest $guest)
    {
        $rules = [
            'guest_name' => ['required', 'max:255'],
            'guest_photo' => ['image', 'file', 'max:3024'],
            'guest_phone' => ['required'],
            'guest_country' => ['required'],
            'guest_address' => ['required'],
            'guest_id_card' => ['image', 'file', 'max:3024']
        ];

        $validatedData = $request->validate($rules);
        Guest::where('id', $guest->id)->update($validatedData);

        return response()->json(
            [
                'guest' => $validatedData
            ], 200); 
    }

    public function deleteApi(Guest $guest) {
        Guest::destroy($guest->id);
        $date = Carbon::now()->toDateTimeString();
        return response()->json([
            'message' => 'Data tamu sudah dihapus',
            'status' => '200',
            'reason' => 'OK',
            'timestamp' => $date
        ], 200);
    }
}

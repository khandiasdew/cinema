<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class bookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $film = film::all();
        $booking = booking::all();
        return view('admin.adminroom', compact('booking'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $film =film::all();
        $a = booking::where('no_kursi', 'A1')->exists();
        $aa = booking::where('no_kursi', 'A2')->exists();
        $aaa = booking::where('no_kursi', 'A3')->exists();
        $aaaa = booking::where('no_kursi', 'A4')->exists();
        $aaaaa = booking::where('no_kursi', 'A5')->exists();
        $b = booking::where('no_kursi', 'B1')->exists();
        $bb = booking::where('no_kursi', 'B2')->exists();
        $bbb = booking::where('no_kursi', 'B3')->exists();
        $bbbb = booking::where('no_kursi', 'B4')->exists();
        $bbbbb = booking::where('no_kursi', 'B5')->exists();
        $c = booking::where('no_kursi', 'C1')->exists();
        $cc = booking::where('no_kursi', 'C2')->exists();
        $ccc = booking::where('no_kursi', 'C3')->exists();
        $cccc = booking::where('no_kursi', 'C4')->exists();
        $ccccc = booking::where('no_kursi', 'C5')->exists();
        // 'A-1'),'A-2','A-3','A-4','A-5','A-6','B-1','B-2','B-3','B-4','B-5','B-6','C-1','C-2','C-3','C-4','C-5','C-6','D-1','D-2','D-3','D-4','D-5','D-6','E-1','E-2','E-3','E-4','E-5','E-6',])->exists();
        return view('booking.booking', compact(
            'film',
            'a',
            'aa',
            'aaa',
            'aaaa',
            'aaaaa',
            'b',
            'bb',
            'bbb',
            'bbbb',
            'bbbbb',
            'c',
            'cc',
            'ccc',
            'cccc',
            'ccccc',
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $booking = booking::create($request->all());
        return redirect()->route('booking.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $film = film::all();
        $booking = booking::find($id);
        // $moon = booking::CREATED_AT;
        $date = booking::find(1)->created_at->format('d');
        $moon = booking::find(1)->created_at->format('m');
        return view('tiket', compact('booking','moon','date'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function delete($id)
    {
        $booking = booking::where('id_booking', $id);
        $booking->delete();
        return redirect()->route('booking.index')->with("succes", 'data dihapus');
    }
}

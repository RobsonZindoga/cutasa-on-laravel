<?php

namespace App\Http\Controllers;

use App\Donations;
use Illuminate\Http\Request;

class DonationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'donations' => Donations::all(),
        ];
        return view('donations.index', $data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Donations  $donations
     * @return \Illuminate\Http\Response
     */
    public function show(Donations $donations)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Donations  $donations
     * @return \Illuminate\Http\Response
     */
    public function edit(Donations $donations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Donations  $donations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donations $donations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Donations  $donations
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donations $donations)
    {
        //
    }
}
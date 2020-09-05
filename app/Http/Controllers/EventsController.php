<?php

namespace App\Http\Controllers;


use App\Events;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'events' => Events::all(),
        ];
        
        return view('events.index',$data);
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
       
        $validData = $request->validate([
            
            'title' => ['required'],
            'description' => ['required'], 
            'date' => ['required'],
            'category_id' => ['required'],
            'image_url' => ['mimes:png,jpg,jpeg','nullable']
        ]);
        
        if($request->hasFile('img_url')){
            $validData['image_url'] = 'storage/' . $request->file('image_url')->store('images/events', ['disk' =>
            'public']);
        }
        // dd($validData);
        $event = Events::create($validData);
        return redirect()->route('admin-events.index')->withStatus('Event Added Successfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function show(Events $events)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function edit(Events $events)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Events $event)
    {
        
        $validData = $request->validate([

        'title' => ['string','nullable'],
        'description' => ['string','nullable'],
        'date' => ['date','nullable'],
        'category_id' => ['numeric','nullable'],
        'image_url' => ['mimes:png,jpg,jpeg','nullable']
        ]);

        if($request->hasFile('img_url')){
        $validData['image_url'] = 'storage/' . $request->file('image_url')->store('images/events', ['disk' =>
        'public']);
        }
        // dd($validData);
        $event = Events::find($event);
        if($event){
            $event->update()->$request->all();
            return redirect()->back()->withStatus('Event Updated Successfully');
        }
        return redirect()->route()->withErrors('Event  Not Updated Successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Events  $events
     * @return \Illuminate\Http\Response
     */
    public function destroy(Events $events)
    {
        //
    }
}
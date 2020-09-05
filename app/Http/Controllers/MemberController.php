<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member = Member::all();
        return $member;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.member.registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=>['min:5','required'],
            'occupation'=>['required'],
            'email'=>['required','unique:members'],
            'contact'=>['required'],
            'graduation'=>['required'],
            'address'=>['min:5','required'],
            'field_of_study'=>['required'],
        ]);
        // return $request;
        if ($request->hasFile('image_url')) {

            $path = $request->file('image_url')->store('files/images',['disk' => 'public']);
            if($path){
                $doc = array(
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'occupation'=>$request->contact,
                    'graduation'=>$request->graduation,
                    'address'=>$request->address,
                    'image_url'=>$path,
                    'field_of_study'=>$path,
                );
                $member = Member::create($doc);
            }
        }
        else{
            $member = Member::create($request->all());
        }
        return redirect('welcome')->withSuccess('Member details successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        //
    }
}

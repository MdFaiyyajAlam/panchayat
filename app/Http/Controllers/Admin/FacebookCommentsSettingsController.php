<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FacebookCommentsSettings;
use Illuminate\Http\Request;

class FacebookCommentsSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $request->validate([
            'facebook_comments' => 'required',

        ]);

        $save = FacebookCommentsSettings::create([
            'facebook_comments' => $request->input('facebook_comments'),
        ]);
        if ($save) {
            return redirect()->route('admin.settings.index')->with('success', 'Facebook Comments Plugin Code  successfully created');
        } else {
            return redirect()->route('admin.settings.index')->with('error', 'Facebook Comments Plugin Code  not created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FacebookCommentsSettings  $facebookCommentsSettings
     * @return \Illuminate\Http\Response
     */
    public function show(FacebookCommentsSettings $facebookCommentsSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FacebookCommentsSettings  $facebookCommentsSettings
     * @return \Illuminate\Http\Response
     */
    public function edit(FacebookCommentsSettings $facebookCommentsSettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FacebookCommentsSettings  $facebookCommentsSettings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FacebookCommentsSettings $facebookCommentsSettings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FacebookCommentsSettings  $facebookCommentsSettings
     * @return \Illuminate\Http\Response
     */
    public function destroy(FacebookCommentsSettings $facebookCommentsSettings)
    {
        //
    }
}

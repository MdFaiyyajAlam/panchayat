<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Google_reCAPTCHA;
use Illuminate\Http\Request;

class GoogleReCAPTCHAController extends Controller
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
            'site_key' => 'required',
            'secret_key' => 'required',
            'language' => 'required',

        ]);

        $save = Google_reCAPTCHA::create([
            'site_key' => $request->input('site_key'),
            'secret_key' => $request->input('secret_key'),
            'language' => $request->input('language'),

        ]);
        if ($save) {
            return redirect()->route('admin.settings.index')->with('success',  'Google_reCAPTCHA Settings   successfully created');
        } else {
            return redirect()->route('admin.settings.index')->with('error', ' Google_reCAPTCHA Settings   not created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Google_reCAPTCHA  $google_reCAPTCHA
     * @return \Illuminate\Http\Response
     */
    public function show(Google_reCAPTCHA $google_reCAPTCHA)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Google_reCAPTCHA  $google_reCAPTCHA
     * @return \Illuminate\Http\Response
     */
    public function edit(Google_reCAPTCHA $google_reCAPTCHA)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Google_reCAPTCHA  $google_reCAPTCHA
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Google_reCAPTCHA $google_reCAPTCHA)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Google_reCAPTCHA  $google_reCAPTCHA
     * @return \Illuminate\Http\Response
     */
    public function destroy(Google_reCAPTCHA $google_reCAPTCHA)
    {
        //
    }
}

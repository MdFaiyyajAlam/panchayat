<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\ContactSettings;
use Illuminate\Http\Request;

class ContactSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin_dashboard.settings.general_settings.index');
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

            $request->validate([
                'address' => 'required',
                'email' => 'required',
               'phone' => 'required',
                'contact_taxt' => 'required',
            ]);

            $save = ContactSettings::create([
                'address' => strtolower($request->input('address')),
                'phone' => $request->input('phone'),
                'email' => trim(strtolower($request->input('email'))),
                'contact_taxt' => trim(strtolower($request->input('contact_taxt'))),
            ]);
            if ($save) {
                return redirect()->route('admin.settings.index')->with('success', 'Contact settings successfully created');
            } else {
                return redirect()->route('admin.settings.index')->with('error', 'Contact settings not created');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactSettings  $contactSettings
     * @return \Illuminate\Http\Response
     */
    public function show(ContactSettings $contactSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactSettings  $contactSettings
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactSettings $contactSettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContactSettings  $contactSettings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactSettings $contactSettings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactSettings  $contactSettings
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactSettings $contactSettings)
    {
        //
    }
}

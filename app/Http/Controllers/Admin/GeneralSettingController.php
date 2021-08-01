<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $request->validate([
            'timezone_id' => 'required',
            'cookie_prefix' => 'required',
            'application_name' => 'required',
            'footer_about_section' => 'required',
            'post_url' => 'required',
            'copyright' => 'required',
        ]);

        $save = GeneralSetting::create([
            'cookie_prefix' => strtolower($request->input('cookie_prefix')),
            'timezone_id' => $request->input('timezone_id'),
            'application_name' => trim(strtolower($request->input('application_name'))),
            'footer_about_section' => trim(strtolower($request->input('footer_about_section'))),
            'post_url' => $request->input('post_url'),
            'copyright' => $request->input('copyright'),
        ]);
        if ($save) {
            return redirect()->route('admin.settings.index')->with('success', 'General settings successfully created');
        } else {
            return redirect()->route('admin.settings.index')->with('error', 'General settings not created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GeneralSetting  $generalSetting
     * @return \Illuminate\Http\Response
     */
    public function show(GeneralSetting $generalSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GeneralSetting  $generalSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(GeneralSetting $generalSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GeneralSetting  $generalSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GeneralSetting $generalSetting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GeneralSetting  $generalSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(GeneralSetting $generalSetting)
    {
        //
    }
}

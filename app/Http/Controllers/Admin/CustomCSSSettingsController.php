<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CustomCSSSettings;
use Illuminate\Http\Request;

class CustomCSSSettingsController extends Controller
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
            'custom_css' => 'required',

        ]);

        $save = CustomCSSSettings::create([
            'custom_css' => $request->input('custom_css'),

        ]);
        if ($save) {
            return redirect()->route('admin.settings.index')->with('success', 'Custom CSS Settings   successfully created');
        } else {
            return redirect()->route('admin.settings.index')->with('error', 'Custom CSSS ettings   not created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomCSSSettings  $customCSSSettings
     * @return \Illuminate\Http\Response
     */
    public function show(CustomCSSSettings $customCSSSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomCSSSettings  $customCSSSettings
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomCSSSettings $customCSSSettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CustomCSSSettings  $customCSSSettings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomCSSSettings $customCSSSettings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomCSSSettings  $customCSSSettings
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomCSSSettings $customCSSSettings)
    {
        //
    }
}

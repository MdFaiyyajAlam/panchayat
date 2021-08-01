<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\CookiesWarnigSettings;
use Illuminate\Http\Request;

class CookiesWarnigSettingsController extends Controller
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
            'menu_cookies' => 'required',

        ]);

        $save = CookiesWarnigSettings::create([
            'menu_cookies' => $request->input('menu_cookies'),
            'cookies_text' => $request->input('cookies_text'),
        ]);
        if ($save) {
            return redirect()->route('admin.settings.index')->with('success', 'Cookies Warning   successfully created');
        } else {
            return redirect()->route('admin.settings.index')->with('error', 'Cookies Warning   not created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CookiesWarnigSettings  $cookiesWarnigSettings
     * @return \Illuminate\Http\Response
     */
    public function show(CookiesWarnigSettings $cookiesWarnigSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CookiesWarnigSettings  $cookiesWarnigSettings
     * @return \Illuminate\Http\Response
     */
    public function edit(CookiesWarnigSettings $cookiesWarnigSettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CookiesWarnigSettings  $cookiesWarnigSettings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CookiesWarnigSettings $cookiesWarnigSettings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CookiesWarnigSettings  $cookiesWarnigSettings
     * @return \Illuminate\Http\Response
     */
    public function destroy(CookiesWarnigSettings $cookiesWarnigSettings)
    {
        //
    }
}

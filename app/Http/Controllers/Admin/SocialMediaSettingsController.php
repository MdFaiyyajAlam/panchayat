<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\SocialMediaSettings;
use Illuminate\Http\Request;

class SocialMediaSettingsController extends Controller
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
            'facebook_url' => 'required',
            'twitter_url' => 'required',
            'instagram_url' => 'required',
            'pinterest_url' => 'required',
            'linkedIn_url' => 'required',
            'vk_url' => 'required',
            'telegram_url' => 'required',
            'youtube_url' => 'required',
        ]);

        $save = SocialMediaSettings::create([
            'facebook_url' => $request->input('facebook_url'),
            'twitter_url' => $request->input('twitter_url'),
            'instagram_url' => $request->input('instagram_url'),
            'pinterest_url' => $request->input('pinterest_url'),
            'linkedIn_url' => $request->input('linkedIn_url'),
            'vk_url' => $request->input('vk_url'),
            'telegram_url' => $request->input('telegram_url'),
            'youtube_url' => $request->input('youtube_url'),
        ]);
        if ($save) {
            return redirect()->route('admin.settings.index')->with('success', 'Spcial Media  successfully created');
        } else {
            return redirect()->route('admin.settings.index')->with('error', 'Spcial Media  not created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SocialMediaSettings  $socialMediaSettings
     * @return \Illuminate\Http\Response
     */
    public function show(SocialMediaSettings $socialMediaSettings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SocialMediaSettings  $socialMediaSettings
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialMediaSettings $socialMediaSettings)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SocialMediaSettings  $socialMediaSettings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocialMediaSettings $socialMediaSettings)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SocialMediaSettings  $socialMediaSettings
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialMediaSettings $socialMediaSettings)
    {
        //
    }
}

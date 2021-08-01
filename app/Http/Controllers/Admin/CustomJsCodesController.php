<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\CustomJsCodes;
use Illuminate\Http\Request;

class CustomJsCodesController extends Controller
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
            'custom_js' => 'required',

        ]);

        $save = CustomJsCodes::create([
            'custom_js' => $request->input('custom_js'),

        ]);
        if ($save) {
            return redirect()->route('admin.settings.index')->with('success', 'Custom JavaScript Settings   successfully created');
        } else {
            return redirect()->route('admin.settings.index')->with('error', 'Custom  JavaScript Settings   not created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CustomJsCodes  $customJsCodes
     * @return \Illuminate\Http\Response
     */
    public function show(CustomJsCodes $customJsCodes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CustomJsCodes  $customJsCodes
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomJsCodes $customJsCodes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CustomJsCodes  $customJsCodes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomJsCodes $customJsCodes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CustomJsCodes  $customJsCodes
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomJsCodes $customJsCodes)
    {
        //
    }
}

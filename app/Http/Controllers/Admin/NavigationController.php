<?php

namespace App\Http\Controllers\Admin;

use App\Models\Navigation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NavigationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $limit = 4;
        $navigations = Navigation::with(['category.child'])->take($limit)->orderBy('menu_order')->latest('updated_at')->get();
        // return $navigations;die;
        return view('admin_dashboard.navigation.index', compact('navigations'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Navigation  $navigation
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request, $status, Navigation $navigation)
    {
        $navigation->menu_status = $status;
        
        if ($navigation->save()) {
            if ($status == 0) {
                $request->session()->flash('success','Navigation status successfully deactivated');
            } else {
                $request->session()->flash('success','Navigation status successfully activated');
            }
        } else {
            if ($status == 0) {
                $request->session()->flash('error','Navigation status not successfully deactivated');
            } else {
                $request->session()->flash('error','Navigation status not successfully activated');
            }
        }
        return redirect()->route('admin.navigation.view');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Navigation  $navigation
     * @return \Illuminate\Http\Response
     */
    public function edit($type, Navigation $navigation)
    {
        $limit = 4;
        $navigations = Navigation::with(['category.child'])->take($limit)->orderBy('menu_order')->latest('updated_at')->get();

        return view('admin_dashboard.navigation.index', compact(['navigation', 'navigations', 'type']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Navigation  $navigation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Navigation $navigation)
    {
        $navigation->menu_order = $request->input('menu_order');
        $navigation->menu_status = $request->input('menu_status');
        $navigation->home_status = $request->input('home_status');

        if ($navigation->save()) {
            return redirect()->route('admin.navigation.view')->with('success', 'Navigation menu successfully updated');
        } else {
            return redirect()->route('admin.navigation.view')->with('error', 'Navigation menu not updated');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Navigation  $navigation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Navigation $navigation)
    {
        //
    }
}

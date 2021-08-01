<?php

namespace App\Http\Controllers\Admin;

use App\Models\PostGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PostGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postGallery = PostGallery::all();
        $url = asset('storage/images/');
        $img = '';
        foreach ($postGallery as $value) {
            $img .= '<div class="col-file-manager" id="img_col_id_136">
                        <div class="file-box" data-file-id="'.$value->id.'" data-mid-file-path="'.$url."/".$value->photo.'" data-default-file-path="'.$url."/".$value->photo.'" data-slider-file-path="'.$url."/".$value->photo.'" data-big-file-path="'.$url."/".$value->photo.'">
                            <div class="image-container">
                                <img src="'.$url."/".$value->photo.'" alt="" class="w-100">
                            </div>
                            <span class="file-name">'.$value->photo.'</span>
                        </div>
                    </div>';

            // $img .= '<div class="col" style="height:150px;">
            //             <div class="card">
            //                 <img src="'.$url."/".$value->photo.'" class="card-img-top" alt="...">
            //                 <div class="card-body">
            //                     <p class="card-text">'.$value->photo.'</p>
            //                 </div>
            //             </div>
            //         </div>';
        }
        return $img;
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
        $image = $request->file('file');
        $img = time().'.'.$image->extension();
        PostGallery::create([
            'photo' => $img,
        ]);
        $image->move(public_path('storage/images'),$img);
        return response()->json(['success'=>$img]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\postGallery  $postGallery
     * @return \Illuminate\Http\Response
     */
    public function show(postGallery $postGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\postGallery  $postGallery
     * @return \Illuminate\Http\Response
     */
    public function edit(postGallery $postGallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\postGallery  $postGallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, postGallery $postGallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\postGallery  $postGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(postGallery $postGallery)
    {
        if(Storage::exists('/public/images/'.$postGallery->photo)){
            Storage::delete(['public/images/' . $postGallery->photo]);
        }
        $postGallery->delete();

    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $sid
     * @param $data
     * @return \Illuminate\Http\Response
     */
    public function index($sid)
    {
        //
        $Service = Service::find($sid);
      //  $images = Image::where('service_id', $sid);
        $images = DB::table('images')->where('service_id' , $sid)->get();
        return view(  'admin.image.index',[
            'Service' => $Service,
            'images' => $images,
        ]);
    }

    /**
     * Show the form for creating a new resource.
    @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {

        // echo $request;


    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $sid)
    {


        $data= new Image();
        $data->service_id = $sid;
        $data->title = $request->title;
        if ($request->file('image')){
            $data->image=  $request->file('image')->store('images');
        }
        $data->status = $request->status;
        $data->save();
        return redirect()->route('admin.image.index',['sid'=>$sid]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sid ,  $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($sid, $id)
    {
        $data = Image::find($id);
        if ($data->image && Storage::disk('public')->exists($data->image));{
        Storage::delete($data->image);
    }
        $data->delete();
        return redirect()->route('admin.image.index' , ['sid'=>$sid] );
    }
}

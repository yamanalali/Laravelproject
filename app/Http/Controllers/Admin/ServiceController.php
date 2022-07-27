<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\ServiceControllerController;
use App\Models\Category;
use App\Models\service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application
     * \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */




    public function index()
    {
        //
        $data= service::all();
        return view(  'admin.service.index',[ "data" => $data ]);
    }
//[ ]
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data= Category::all();
        return view ( 'admin.service.create', [
            "data" => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       // echo $request;

        $data= new Service();
        $data->category_id = $request->category_id;
        $data->user_id = 0;  // $request->user_id;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->keywords = $request->keywords;
        $data->detail = $request->detail;
        $data->price = $request->price;
        $data->type = $request->type;
        $data->sessions = $request->sessions;
        $data->tax = $request->tax;
        if ($request->file('image')){
           $data->image=  $request->file('image')->store('images');
        }
        $data->status = $request->status;
        $data->save();
        return redirect(to:'admin/service');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(service $service, $id)
    {
        //
       // echo 'Show area: ', $id;
        $data = service::find($id);
        return view(  'admin.service.show',[ "data" => $data ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(service $service,$id)
    {
        //
        $data = service::find($id);
        $datalist = Category::all();
        return view(  'admin.service.edit',[ 'data' => $data, 'datalist' => $datalist]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, service $service,$id)
    {
        //

        $data= Service::find($id);
        $data->category_id = $request->category_id;
        $data->user_id = 0;  // $request->user_id;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->keywords = $request->keywords;
        $data->detail = $request->detail;
        $data->price = $request->price;
        $data->type = $request->type;
        $data->sessions = $request->sessions;
        $data->tax = $request->tax;
        if ($request->file('image')){
            $data->image=  $request->file('image')->store('images');
        }
        $data->status = $request->status;
        $data->save();
        return redirect(to:'admin/service');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(service $service, $id)
    {
        //
        $datalist = service::all();
        $data= service::find($id);
        if ($data->image && Storage::disk('public')->exists($data->image))
        Storage::delete($data->image);
        $data->delete();
        return redirect(to:'admin/service');
    }
}


<?php

namespace App\Http\Controllers;

use App\Models\Appoiment;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public static function maincategorylist()
    {
        return Category::where('parent_id', '=', 0 )->with('children')->get();

    }


     public function Index()

   {
       $page='home';

       $sliderdata=Service::limit(3)->get();
       $servicelist1=Service::all();
       $setting= Setting::first();
       $categorylist1=Category::limit(3)->get();

       return view( 'home.index',[
           "page" => $page ,
           "setting" => $setting ,
           "sliderdata" => $sliderdata ,
           "servicelist1" => $servicelist1,
            "categorylist1" => $categorylist1 ,

       ]);


   }
    public function service($id)

    {

        $data= Service::find($id);
        $images = DB::table('images')->where('service_id' , $id)->get();
        $reviews = Comment::where('service_id',$id)->where('status','True')->get();
        return view( 'home.service',[
            'data' => $data,
             'images' => $images,
            'reviews' => $reviews,
        ]);


    }
    public function categoryservices($id)

    {

        $category= Category::find($id);
        $services = DB::table('services')->where('category_id' , $id)->get();
        return view( 'home.categoryservices',[
            'category' => $category,
            'services' => $services

        ]);


    }
    public function about()

    {
        $setting= Setting::first();

        return view( 'home.about',[
            "setting" => $setting ,
        ]);
    }
    public function contact()

    {
        $setting= Setting::first();

        return view( 'home.contact',[
            "setting" => $setting ,
        ]);
    }
    public function storemessage(Request $request)

    {
        $data= new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip=request()->ip();
        $data->save();
        return redirect()->route('contact')->with('info','Your message has been Sent , Thank you.');

    }
    public function reference()

    {
        $setting= Setting::first();

        return view( 'home.references',[
            "setting" => $setting ,
        ]);
    }
    public function faq()

    {
        $setting= Setting::first();
        $datalist= Faq::all();
        return view( 'home.faq',[
            "setting" => $setting ,
            "datalist" => $datalist
        ]);
    }
    public function appoiment()

    {
        $setting= Appoiment::first();
        $datalist= Appoiment::all();
        return view( 'home.appoiment',[
            "setting" => $setting ,
            "datalist" => $datalist
        ]);
    }
    public function storecomment(Request $request)

    {
        $data= new Comment();
        $data->user_id = Auth::id();
        $data->service_id = $request->input('service_id');
        $data->subject = $request->input('subject');
        $data->review = $request->input('review');
        $data->rate = $request->input('rate');
        $data->ip=request()->ip();
        $data->save();
        return redirect()->route('service',['id'=>$request->input('service_id')])->with('success','Your Comment has been Sent , Thank you.');

    }

    public function storeappoiment(Request $request)

    {
        $data= new Appoiment();
        $data->user_id = Auth::id();
        $data->service_id = $request->input('service_id');
        $data->date = $request->input('date');
        $data->time = $request->input('time');
        $data->price = $request->input('price');
        $data->time = $request->input('time');
        $data->payment = $request->input('payment');
        $data->ip=request()->ip();
        $data->save();
        return redirect()->route('service',['id'=>$request->input('service_id')])->with('success','Your Appoiment has been Saved , Thank you.');

    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');

    }

    public function loginadmincheck(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Event;
use App\Models\Achievement;
use App\Models\Team;
use App\Models\Web;
use App\Models\Contact;
use App\Models\Banner;

class FrontController extends Controller
{
    public function home()
    {
        $data['count_project'] = Project::count();
        $data['count_event'] = Event::count();
        $data['count_achievement'] = Achievement::count();

        $data['profile'] = Web::first();
        $data['member'] = Team::limit(5)->get();
        $data['project'] = Project::limit(4)->get();
        $data['event'] = Event::limit(4)->get();
        $data['achievement'] = Achievement::limit(3)->get();
        $data['banner'] = Banner::limit(6)->get();

        return view('front.home', $data);
    }

    public function profile()
    {
        $data['logo'] = Web::first()->pluck('logo');
        $data['profile'] = Web::first();
        $data['banner'] = Banner::where('url', '=', 'profile')->first();

        return view('front.profile', $data);
    }

    public function member()
    {
        $data['logo'] = Web::first()->pluck('logo');
        $data['member'] = Team::all();
        $data['banner'] = Banner::where('url', '=', 'member')->first();
        
        return view('front.member',$data);
    }
    
    public function project()
    {
        $data['logo'] = Web::first()->pluck('logo');
        $data['project'] = Project::all();
        $data['banner'] = Banner::where('url', '=', 'project')->first();
        
        return view('front.project', $data);
    }
    
    public function event()
    {
        $data['logo'] = Web::first()->pluck('logo');
        $data['event'] = Event::all();
        $data['banner'] = Banner::where('url', '=', 'event')->first();
        
        return view('front.event',$data);
    }
    
    public function achievement()
    {
        $data['logo'] = Web::first()->pluck('logo');
        $data['achievement'] = Achievement::all();
        $data['banner'] = Banner::where('url', '=', 'achievement')->first();
        
        return view('front.achievement', $data);
    }
    
    public function contact()
    {
        $data['logo'] = Web::first()->pluck('logo');
        $data['banner'] = Banner::where('url', '=', 'contact')->first();

        return view('front.contact',$data);
    }
    
    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
    
    public function storeContact(Request $request)
    {
        $request->validate([
            'subject' => 'required',
            'isi' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'captcha' => 'required',
        ]);

        $insert = new Contact();
        $insert->subject = $request->subject;
        $insert->isi = $request->isi;
        $insert->nama = $request->nama;
        $insert->email = $request->email;

        if ($insert->save()) {
            return redirect('/contact')->with('success', 'Terimakasih sudah menghubungi kami, data anda sudah kami terima dan akan kami balas secepatnya :)');
        }else{
            return redirect('/contact')->with('error', 'Mohon maaf, silahkan coba lagi :(');
        }
    }
}

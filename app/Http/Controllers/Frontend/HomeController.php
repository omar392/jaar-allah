<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Counter;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Seo;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Short;
use App\Models\Team;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class HomeController extends Controller
{
    public function index()
    {
        $data['seo'] = Seo::first();
        $data['settings'] = Setting::first();
        $data['about'] = About::first();
        $data['counter'] = Counter::first();
        $data['banners'] = Banner::where(['status'=>'active'])->get();
        $data['services'] = Service::where(['status'=>'active'])->get();
        $data['faqs'] = Faq::where(['status'=>'active'])->get();
        $data['news'] = Short::where(['status'=>'active'])->get();
        $data['team'] = Team::where(['status'=>'active'])->orderBy('id', 'desc')->limit(3)->get();
        return view('frontend.home',$data);
    }
    public function contactUs(Request $request)
    {
        $data['seo'] = Seo::first();
        $data['settings'] = Setting::first();
        $data['about'] = About::first();
        $data['counter'] = Counter::first();
        $data['news'] = Short::where(['status'=>'active'])->get();
        return view('frontend.contact.index',$data);
    }
    public function faqs()
    {
        $data['seo'] = Seo::first();
        $data['settings'] = Setting::first();
        $data['about'] = About::first();
        $data['counter'] = Counter::first();
        $data['faqs'] = Faq::where(['status'=>'active'])->get();
        $data['news'] = Short::where(['status'=>'active'])->get();
        return view('frontend.faqs.index',$data);
    }
    public function aboutUs()
    {
        $data['seo'] = Seo::first();
        $data['settings'] = Setting::first();
        $data['about'] = About::first();
        $data['counter'] = Counter::first();
        $data['news'] = Short::where(['status'=>'active'])->get();
        return view('frontend.about.index',$data);
    }
    public function team()
    {
        $data['seo'] = Seo::first();
        $data['settings'] = Setting::first();
        $data['about'] = About::first();
        $data['counter'] = Counter::first();
        $data['team'] = Team::where(['status'=>'active'])->get();
        $data['news'] = Short::where(['status'=>'active'])->get();
        return view('frontend.team.index',$data);
    }
    public function gallery()
    {
        $data['seo'] = Seo::first();
        $data['settings'] = Setting::first();
        $data['about'] = About::first();
        $data['counter'] = Counter::first();
        $data['gallery'] = Gallery::where(['status'=>'active'])->get();
        $data['news'] = Short::where(['status'=>'active'])->get();
        return view('frontend.gallery.index',$data);
    }
    public function services()
    {
        $data['seo'] = Seo::first();
        $data['settings'] = Setting::first();
        $data['about'] = About::first();
        $data['counter'] = Counter::first();
        $data['services'] = Service::where(['status'=>'active'])->get();
        $data['news'] = Short::where(['status'=>'active'])->get();
        return view('frontend.services.index',$data);
    }
    public function servicesDetails($id)
    {
        $data['seo'] = Seo::first();
        $data['settings'] = Setting::first();
        $data['about'] = About::first();
        $data['counter'] = Counter::first();
        $data['services'] = Service::where(['status'=>'active'])->get();
        $service = Service::findOrFail($id);
        $data['news'] = Short::where(['status'=>'active'])->get();
        return view('frontend.services.details',$data,compact('service'));
    }
    public function blog()
    {
        $data['seo'] = Seo::first();
        $data['settings'] = Setting::first();
        $data['about'] = About::first();
        $data['counter'] = Counter::first();
        $data['blogs'] = Blog::where(['status'=>'active'])->get();
        $data['news'] = Short::where(['status'=>'active'])->get();
        // $blog = Blog::findOrFail($id);
        return view('frontend.blog.index',$data);
    }
    public function blogDetails($id)
    {
        $data['seo'] = Seo::first();
        $data['settings'] = Setting::first();
        $data['about'] = About::first();
        $data['counter'] = Counter::first();
        $data['blogs'] = Blog::where(['status'=>'active'])->get();
        $data['services'] = Service::where(['status'=>'active'])->get();
        $blog = Blog::findOrFail($id);
        $data['news'] = Short::where(['status'=>'active'])->get();
        return view('frontend.blog.details',$data,compact('blog'));
    }
}

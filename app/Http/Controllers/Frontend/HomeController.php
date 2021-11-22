<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Counter;
use App\Models\Faq;
use App\Models\Seo;
use App\Models\Setting;
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
        
        return view('frontend.home',$data);
    }
    public function contactUs(Request $request)
    {
        $data['seo'] = Seo::first();
        $data['settings'] = Setting::first();
        $data['about'] = About::first();
        $data['counter'] = Counter::first();

        return view('frontend.contact.index',$data);
    }
    public function faqs()
    {
        $data['seo'] = Seo::first();
        $data['settings'] = Setting::first();
        $data['about'] = About::first();
        $data['counter'] = Counter::first();
        $data['faqs'] = Faq::where(['status'=>'active'])->get();
        return view('frontend.faqs.index',$data);
    }
}

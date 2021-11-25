<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Counter;
use App\Models\Customer;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Opinion;
use App\Models\Seo;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Short;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\Email;
use App\Models\Decision;
use App\Models\Issue;
use App\Models\Term;
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
        $data['customers'] = Customer::where(['status'=>'active'])->get();
        $data['opinions'] = Opinion::where(['status'=>'active'])->get();
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
    public function terms()
    {
        $data['seo'] = Seo::first();
        $data['settings'] = Setting::first();
        $data['about'] = About::first();
        $data['counter'] = Counter::first();
        $data['terms'] = Term::where(['status'=>'active'])->get();
        $data['news'] = Short::where(['status'=>'active'])->get();
        return view('frontend.terms.index',$data);
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
    public function issues()
    {
        $data['seo'] = Seo::first();
        $data['settings'] = Setting::first();
        $data['about'] = About::first();
        $data['counter'] = Counter::first();
        $data['issues'] = Issue::where(['status'=>'active'])->get();
        $data['news'] = Short::where(['status'=>'active'])->get();
        return view('frontend.issues.index',$data);
    }
    public function issuesDetails($id)
    {
        $data['seo'] = Seo::first();
        $data['settings'] = Setting::first();
        $data['about'] = About::first();
        $data['counter'] = Counter::first();
        $data['issues'] = Issue::where(['status'=>'active'])->get();
        $data['services'] = Service::where(['status'=>'active'])->get();
        $issue = Issue::findOrFail($id);
        $data['news'] = Short::where(['status'=>'active'])->get();
        return view('frontend.issues.details',$data,compact('issue'));
    }
    public function decisions()
    {
        $data['seo'] = Seo::first();
        $data['settings'] = Setting::first();
        $data['about'] = About::first();
        $data['counter'] = Counter::first();
        $data['decisions'] = Decision::where(['status'=>'active'])->get();
        $data['news'] = Short::where(['status'=>'active'])->get();
        return view('frontend.decisions.index',$data);
    }
    public function decisionsDetails($id)
    {
        $data['seo'] = Seo::first();
        $data['settings'] = Setting::first();
        $data['about'] = About::first();
        $data['counter'] = Counter::first();
        $data['decisions'] = Decision::where(['status'=>'active'])->get();
        $data['services'] = Service::where(['status'=>'active'])->get();
        $decision = Decision::findOrFail($id);
        $data['news'] = Short::where(['status'=>'active'])->get();
        return view('frontend.decisions.details',$data,compact('decision'));
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
    public function email(Request $request)
    {
        $this->validate($request,[
            'email'         => 'required|email',
        ]);
        $data = $request->all();
        // dd($data);
        $status = Mail::to('omarabosamaha@gmail.com')->send(new Email($data));
        if($status){
            toastr()->success(__('website.sup0'));
            return back();
        }else{
            toastr()->success(__('website.sup0'));
            return back();
        }
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'          => 'required',
            'email'         => 'required|email',
            'phone'        => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject'       => 'required',
            'address'       => 'required',
        ]
       );
        $data = $request->all();
        // dd($data);
        $status = Mail::to('omarabosamaha@gmail.com')->send(new ContactMail($data));
        
        if($status){
            toastr()->success(__('website.sendmessage'));
            return back();
        }else{
            toastr()->success(__('website.sendmessage'));
            return back();
        }
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Seo;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:seos-read')->only(['index']);
        $this->middleware('permission:seos-update')->only(['update']);
    }
    public function index(){
        $seo = Seo::first();
        return view('admin.seo.edit',compact('seo'));
    }
    public function update(Request $request){
        $seo = Seo::findOrFail(1);
        $seo ->update([
            'key_ar'=>$request->input('key_ar'),
            'key_en'=>$request->input('key_en'),
            'site_ar'=>$request->input('site_ar'),
            'site_en'=>$request->input('site_en'),
            'description_ar'=>$request->input('description_ar'),
            'description_en'=>$request->input('description_en'),
        ]);
        $seo->save();
        toastr()->info('تم التعديل بنجاح');
        return redirect()->back();
    }
}

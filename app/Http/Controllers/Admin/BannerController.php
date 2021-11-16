<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:banners-read')->only(['index']);
        $this->middleware('permission:banners-create')->only(['create','store']);
        $this->middleware('permission:banners-update')->only(['edit','update']);
        $this->middleware('permission:banners-delete')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::get();
        return view('admin.banner.index',compact('banner'));
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
        $this->validate($request,[
            'name_ar'=>'string|required',
            'name_en'=>'string|required',
            'description_ar'=>'string|required',
            'description_en'=>'string|required',
            'image'=>'required',
            'status'=>'required|in:active,inactive',
        ]);
        $data = $request->all();
        if ($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/banner'),$filename);
            $data['image']=$filename;
        }
        $status = Banner::create($data);
        if($status){
            toastr()->success('تم الحفظ بنجاح');
            return redirect()->route('banner.index');
        }else{
            return back()->with('error','هناك خطأ ما !!');
        }

    }

    public function bannerStatus(Request $request){

        // dd($request->all());
        if($request->mode=='true'){
            DB::table('banners')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('banners')->where('id',$request->id)->update(['status'=>'inactive']);
        }
        return response()->json(['msg'=>'تم تغيير الحالة بنجاح','status'=>true]);
        
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
        $banner = Banner::find($id);
        if($banner){
            return view('admin.banner.edit',compact('banner'));
        }else{
            return back()->with('error','هذه البيانات غير موجودة');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $banner = Banner::find($id);
        if($banner){
            $this->validate($request,[
                'name_ar'=>'string|required',
                'name_en'=>'string|required',
                'description_ar'=>'string|required',
                'description_en'=>'string|required',
                'status'=>'required|in:active,inactive',
            ]);
            $data = $request->all();
            if ($request->file('image')){
                $file = $request->file('image');
                @unlink(public_path('upload/banners/'.$data->image));
                $filename =date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('upload/banner'),$filename);
                $data['image']=$filename;
            }
            $status = $banner->fill($data)->save();

            if($status){
                toastr()->info('تم التعديل بنجاح');
                return redirect()->route('banner.index');
            }else{
                return back()->with('error','هناك خطأ ما !!');
            }
        }else{
            return back()->with('error','هذه البيانات غير موجودة');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);
        if($banner){
        $status=$banner->delete();
        if($status){
            toastr()->error('تم الحذف بنجاح');
            return redirect()->route('banner.index');
        }else{
            return redirect()->with('error','هناك خطأ ما !!');
        }
        }else{
            return back()->with('error','هذه البيانات غير موجودة');
        }
    }
}
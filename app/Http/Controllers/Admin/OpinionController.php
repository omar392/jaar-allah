<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Opinion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OpinionController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:opinions-read')->only(['index']);
        $this->middleware('permission:opinions-create')->only(['create','store']);
        $this->middleware('permission:opinions-update')->only(['edit','update']);
        $this->middleware('permission:opinions-delete')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opinion = Opinion::get();
        return view('admin.opinion.index',compact('opinion'));
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
            'job_ar'=>'string|required',
            'job_en'=>'string|required',
            'description_ar'=>'string|required',
            'description_en'=>'string|required',
            'image'=>'required',
            'status'=>'nullable|in:active,inactive',
        ]);
        $data = $request->all();
        if ($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/opinion'),$filename);
            $data['image']=$filename;
        }
        $status = Opinion::create($data);
        if($status){
            toastr()->success('تم الحفظ بنجاح');
            return redirect()->route('opinion.index');
        }else{
            return back()->with('error','هناك خطأ ما !!');
        }
    }

    public function opinionStatus(Request $request){

        // dd($request->all());
        if($request->mode=='true'){
            DB::table('opinions')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('opinions')->where('id',$request->id)->update(['status'=>'inactive']);
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
        $opinion = Opinion::find($id);
        if($opinion){
            return view('admin.opinion.edit',compact('opinion'));
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
        $opinion = Opinion::find($id);
        if($opinion){
            $this->validate($request,[
                'name_ar'=>'string|required',
                'name_en'=>'string|required',
                'job_ar'=>'string|required',
                'job_en'=>'string|required',
                'description_ar'=>'string|required',
                'description_en'=>'string|required',
                'status'=>'nullable|in:active,inactive',
            ]);
            $data = $request->all();
            if ($request->file('image')){
                $file = $request->file('image');
                @unlink(public_path('upload/opinion/'.$data->image));
                $filename =date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('upload/opinion'),$filename);
                $data['image']=$filename;
            }
            $status = $opinion->fill($data)->save();
            if($status){
                toastr()->info('تم التعديل بنجاح');
                return redirect()->route('opinion.index');
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
        $opinion = Opinion::find($id);
        if($opinion){
        $status=$opinion->delete();
        if($status){
            toastr()->error('تم الحذف بنجاح');
            return redirect()->route('opinion.index');
        }else{
            return redirect()->with('error','هناك خطأ ما !!');
        }
        }else{
            return back()->with('error','هذه البيانات غير موجودة');
        }
    }
}

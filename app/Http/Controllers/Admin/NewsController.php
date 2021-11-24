<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Short;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:news-read')->only(['index']);
        $this->middleware('permission:news-create')->only(['create','store']);
        $this->middleware('permission:news-update')->only(['edit','update']);
        $this->middleware('permission:news-delete')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $new = Short::get();
        return view('admin.new.index',compact('new'));
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
            'new_ar'=>'string|required',
            'new_en'=>'string|required',
            'status'=>'nullable|in:active,inactive',
        ]);
        $data = $request->all();
        $status = Short::create($data);
        if($status){
            toastr()->success('تم الحفظ بنجاح');
            return redirect()->route('new.index');
        }else{
            return back()->with('error','هناك خطأ ما !!');
        }
    }
    
    public function newStatus(Request $request){

        // dd($request->all());
        if($request->mode=='true'){
            DB::table('shorts')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('shorts')->where('id',$request->id)->update(['status'=>'inactive']);
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
        $new = Short::find($id);
        if($new){
            return view('admin.new.edit',compact('new'));
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
        $new = Short::find($id);
        if($new){
            $this->validate($request,[
                'new_ar'=>'string|required',
                'new_en'=>'string|required',
                'status'=>'nullable|in:active,inactive',
            ]);
            $data = $request->all();
            $status = $new->fill($data)->save();
            if($status){
                toastr()->info('تم التعديل بنجاح');
                return redirect()->route('new.index');
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
        $new = Short::find($id);
        if($new){
        $status=$new->delete();
        if($status){
            toastr()->error('تم الحذف بنجاح');
            return redirect()->route('new.index');
        }else{
            return redirect()->with('error','هناك خطأ ما !!');
        }
        }else{
            return back()->with('error','هذه البيانات غير موجودة');
        }
    }
}

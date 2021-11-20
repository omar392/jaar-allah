<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Decision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DecisionController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:decisions-read')->only(['index']);
        $this->middleware('permission:decisions-create')->only(['create','store']);
        $this->middleware('permission:decisions-update')->only(['edit','update']);
        $this->middleware('permission:decisions-delete')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $decision = Decision::get();
        return view('admin.decision.index',compact('decision'));
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
            'description_en'=>'string|required',
            'description_en'=>'string|required',
            'image'=>'required',
            'url'=>'nullable',
            'status'=>'nullable|in:active,inactive',
        ]);
        $data = $request->all();
        if ($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/decision'),$filename);
            $data['image']=$filename;
        }
        $status = Decision::create($data);
        if($status){
            toastr()->success('تم الحفظ بنجاح');
            return redirect()->route('decision.index');
        }else{
            return back()->with('error','هناك خطأ ما !!');
        }
    }
    public function decisionStatus(Request $request){

        // dd($request->all());
        if($request->mode=='true'){
            DB::table('decisions')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('decisions')->where('id',$request->id)->update(['status'=>'inactive']);
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
        $decision = Decision::find($id);
        if($decision){
            return view('admin.decision.edit',compact('decision'));
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
        
        $decision = Decision::find($id);
        if($decision){
            $this->validate($request,[
                'name_ar'=>'string|required',
                'name_en'=>'string|required',
                'description_en'=>'string|required',
                'description_en'=>'string|required',
                'url'=>'nullable',
                'status'=>'nullable|in:active,inactive',
            ]);
            $data = $request->all();
            if ($request->file('image')){
                $file = $request->file('image');
                @unlink(public_path('upload/decision/'.$data->image));
                $filename =date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('upload/decision'),$filename);
                $data['image']=$filename;
            }
            $status = $decision->fill($data)->save();
            if($status){
                toastr()->info('تم التعديل بنجاح');
                return redirect()->route('decision.index');
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
        $decision = Decision::find($id);
        if($decision){
        $status=$decision->delete();
        if($status){
            toastr()->error('تم الحذف بنجاح');
            return redirect()->route('decision.index');
        }else{
            return redirect()->with('error','هناك خطأ ما !!');
        }
        }else{
            return back()->with('error','هذه البيانات غير موجودة');
        }
    }
}

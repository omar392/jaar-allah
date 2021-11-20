<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Issue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IssueController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:issues-read')->only(['index']);
        $this->middleware('permission:issues-create')->only(['create','store']);
        $this->middleware('permission:issues-update')->only(['edit','update']);
        $this->middleware('permission:issues-delete')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $issue = Issue::get();
        return view('admin.issue.index',compact('issue'));
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
            'title_ar'=>'string|required',
            'title_en'=>'string|required',
            'description_en'=>'string|required',
            'description_en'=>'string|required',
            'image'=>'required',
            'status'=>'nullable|in:active,inactive',
        ]);
        $data = $request->all();
        if ($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/issue'),$filename);
            $data['image']=$filename;
        }
        $status = Issue::create($data);
        if($status){
            toastr()->success('تم الحفظ بنجاح');
            return redirect()->route('issue.index');
        }else{
            return back()->with('error','هناك خطأ ما !!');
        }
    }

    public function issueStatus(Request $request){

        // dd($request->all());
        if($request->mode=='true'){
            DB::table('issues')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('issues')->where('id',$request->id)->update(['status'=>'inactive']);
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
        $issue = Issue::find($id);
        if($issue){
            return view('admin.issue.edit',compact('issue'));
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
        $issue = Issue::find($id);
        if($issue){
            $this->validate($request,[
                'title_ar'=>'string|required',
                'title_en'=>'string|required',
                'description_en'=>'string|required',
                'description_en'=>'string|required',
                'status'=>'nullable|in:active,inactive',
            ]);
            $data = $request->all();
            if ($request->file('image')){
                $file = $request->file('image');
                @unlink(public_path('upload/issue/'.$data->image));
                $filename =date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('upload/issue'),$filename);
                $data['image']=$filename;
            }
            $status = $issue->fill($data)->save();
            if($status){
                toastr()->info('تم التعديل بنجاح');
                return redirect()->route('issue.index');
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
        $issue = Issue::find($id);
        if($issue){
        $status=$issue->delete();
        if($status){
            toastr()->error('تم الحذف بنجاح');
            return redirect()->route('issue.index');
        }else{
            return redirect()->with('error','هناك خطأ ما !!');
        }
        }else{
            return back()->with('error','هذه البيانات غير موجودة');
        }
    }
}

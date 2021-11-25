<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Term;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TermsController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:terms-read')->only(['index']);
        $this->middleware('permission:terms-create')->only(['create','store']);
        $this->middleware('permission:terms-update')->only(['edit','update']);
        $this->middleware('permission:terms-delete')->only(['destroy']);
    }
    public function index()
    {
        $term = Term::get();
        return view('admin.term.index',compact('term'));
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
            'status'=>'required|in:active,inactive',
        ]);
        $data = $request->all();
        $status = Term::create($data);
        if($status){
            toastr()->success('تم الحفظ بنجاح');
            return redirect()->route('term.index');
        }else{
            return back()->with('error','هناك خطأ ما !!');
        }

    }

    public function termStatus(Request $request){

        // dd($request->all());
        if($request->mode=='true'){
            DB::table('terms')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('terms')->where('id',$request->id)->update(['status'=>'inactive']);
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
        $term = Term::find($id);
        if($term){
            return view('admin.term.edit',compact('term'));
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
        $term = Term::find($id);
        if($term){
            $this->validate($request,[
                'name_ar'=>'string|required',
                'name_en'=>'string|required',
                'description_ar'=>'string|required',
                'description_en'=>'string|required',
                'status'=>'required|in:active,inactive',
            ]);
            $data = $request->all();
            $status = $term->fill($data)->save();

            if($status){
                toastr()->info('تم التعديل بنجاح');
                return redirect()->route('term.index');
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
        $term = Term::find($id);
        if($term){
        $status=$term->delete();
        if($status){
            toastr()->error('تم الحذف بنجاح');
            return redirect()->route('term.index');
        }else{
            return redirect()->with('error','هناك خطأ ما !!');
        }
        }else{
            return back()->with('error','هذه البيانات غير موجودة');
        }
    }
}

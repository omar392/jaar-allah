<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class FaqController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:faqs-read')->only(['index']);
        $this->middleware('permission:faqs-create')->only(['create', 'store']);
        $this->middleware('permission:faqs-update')->only(['edit', 'update']);
        $this->middleware('permission:faqs-delete')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faq = Faq::get();
        return view('admin.faq.index',compact('faq'));
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
            'ask_ar'=>'string|required',
            'ask_en'=>'string|required',
            'answer_ar'=>'string|required',
            'answer_en'=>'string|required',
            'status'=>'nullable|in:active,inactive',
        ]);
        $data = $request->all();
        $status = Faq::create($data);
        if($status){
            toastr()->success('تم الحفظ بنجاح');
            return redirect()->route('faq.index');
        }else{
            return back()->with('error','هناك خطأ ما !!');
        }
    }


    public function faqStatus(Request $request){

        // dd($request->all());
        if($request->mode=='true'){
            DB::table('faqs')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('faqs')->where('id',$request->id)->update(['status'=>'inactive']);
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
        $faq = Faq::find($id);
        if($faq){
            return view('admin.faq.edit',compact('faq'));
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
        $faq = Faq::find($id);
        if($faq){
            $this->validate($request,[
                'ask_ar'=>'string|required',
                'ask_en'=>'string|required',
                'answer_ar'=>'string|required',
                'answer_en'=>'string|required',
                'status'=>'nullable|in:active,inactive',
            ]);
            $data = $request->all();
            
            $status = $faq->fill($data)->save();
            if($status){
                toastr()->info('تم التعديل بنجاح');
                return redirect()->route('faq.index');
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
        $faq = Faq::find($id);
        if($faq){
        $status=$faq->delete();
        if($status){
            toastr()->error('تم الحذف بنجاح');
            return redirect()->route('faq.index');
        }else{
            return redirect()->with('error','هناك خطأ ما !!');
        }
        }else{
            return back()->with('error','هذه البيانات غير موجودة');
        }
    }
}
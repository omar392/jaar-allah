<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:customers-read')->only(['index']);
        $this->middleware('permission:customers-create')->only(['create','store']);
        $this->middleware('permission:customers-update')->only(['edit','update']);
        $this->middleware('permission:customers-delete')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::get();
        return view('admin.customer.index',compact('customer'));
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
            'image'=>'required',
            'status'=>'nullable|in:active,inactive',
        ]);
        $data = $request->all();
        if ($request->file('image')){
            $file = $request->file('image');
            $filename =date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/customer'),$filename);
            $data['image']=$filename;
        }
        $status = Customer::create($data);
        if($status){
            toastr()->success('تم الحفظ بنجاح');
            return redirect()->route('customer.index');
        }else{
            return back()->with('error','هناك خطأ ما !!');
        }
    }

    public function customerStatus(Request $request){

        // dd($request->all());
        if($request->mode=='true'){
            DB::table('customers')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('customers')->where('id',$request->id)->update(['status'=>'inactive']);
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
        $customer = Customer::find($id);
        if($customer){
            return view('admin.customer.edit',compact('customer'));
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
        $customer = Customer::find($id);
        if($customer){
            $this->validate($request,[
                'name_ar'=>'string|required',
                'name_en'=>'string|required',
                'status'=>'nullable|in:active,inactive',
            ]);
            $data = $request->all();
            if ($request->file('image')){
                $file = $request->file('image');
                @unlink(public_path('upload/customer/'.$data->image));
                $filename =date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('upload/customer'),$filename);
                $data['image']=$filename;
            }
            $status = $customer->fill($data)->save();
            if($status){
                toastr()->info('تم التعديل بنجاح');
                return redirect()->route('customer.index');
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
        $customer = Customer::find($id);
        if($customer){
        $status=$customer->delete();
        if($status){
            toastr()->error('تم الحذف بنجاح');
            return redirect()->route('customer.index');
        }else{
            return redirect()->with('error','هناك خطأ ما !!');
        }
        }else{
            return back()->with('error','هذه البيانات غير موجودة');
        }
    }
}

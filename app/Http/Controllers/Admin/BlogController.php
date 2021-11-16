<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:blogs-read')->only(['index']);
        $this->middleware('permission:blogs-create')->only(['create','store']);
        $this->middleware('permission:blogs-update')->only(['edit','update']);
        $this->middleware('permission:blogs-delete')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::get();
        return view('admin.blog.index',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            $file->move(public_path('upload/blog'),$filename);
            $data['image']=$filename;
        }
        $status = Blog::create($data);
        if($status){
            toastr()->success('تم الحفظ بنجاح');
            return redirect()->route('blog.index');
        }else{
            return back()->with('error','هناك خطأ ما !!');
        }
    }
    public function blogStatus(Request $request){

        // dd($request->all());
        if($request->mode=='true'){
            DB::table('blogs')->where('id',$request->id)->update(['status'=>'active']);
        }
        else{
            DB::table('blogs')->where('id',$request->id)->update(['status'=>'inactive']);
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
        $blog = Blog::find($id);
        if($blog){
            return view('admin.blog.edit',compact('blog'));
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
        
        $blog = Blog::find($id);
        if($blog){
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
                @unlink(public_path('upload/blog/'.$data->image));
                $filename =date('YmdHi').$file->getClientOriginalName();
                $file->move(public_path('upload/blog'),$filename);
                $data['image']=$filename;
            }
            $status = $blog->fill($data)->save();
            if($status){
                toastr()->info('تم التعديل بنجاح');
                return redirect()->route('blog.index');
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
        $blog = Blog::find($id);
        if($blog){
        $status=$blog->delete();
        if($status){
            toastr()->error('تم الحذف بنجاح');
            return redirect()->route('blog.index');
        }else{
            return redirect()->with('error','هناك خطأ ما !!');
        }
        }else{
            return back()->with('error','هذه البيانات غير موجودة');
        }
    }
}

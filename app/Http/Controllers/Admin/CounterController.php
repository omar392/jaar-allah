<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Counter;
use Illuminate\Http\Request;

class CounterController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:counters-read')->only(['index']);
        $this->middleware('permission:counters-update')->only(['update']);
    }
    public function index(){
        $counter = Counter::first();
        return view('admin.counter.edit',compact('counter'));
    }
    public function update(Request $request){
        $counter = Counter::findOrFail(1);
        $counter ->update([
            'team'=>$request->input('team'),
            'issues'=>$request->input('issues'),
            'years'=>$request->input('years'),
            'branches'=>$request->input('branches'),
        ]);
        $counter->save();
        toastr()->info('تم التعديل بنجاح');
        return redirect()->back();
    }
}

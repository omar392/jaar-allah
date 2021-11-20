@extends('admin.layouts.master')
@section('content')

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <!-- Start content -->
    <div class="content">
        <div class="container-fluid">
            @include('admin.layouts.notification')
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title" style="font-family: cairo;">الاحصائيات</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="{{ route('adminhome') }}">الرئيسية</a></li>
                            <li class="breadcrumb-item active">الاحصائيات</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div>
            <!-- end page-title -->

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <form action="{{ route('updatecounter', $counter->id) }}" method="POST">
                                @csrf

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">فريق العمل</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="team" value="{{ $counter->team }}"
                                            id="example-text-input" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">الفروع</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="branches" value="{{ $counter->branches }}"
                                            id="example-text-input" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">القضايا</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="issues" value="{{ $counter->issues }}"
                                            id="example-text-input" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">سنوات العطاء</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="years" value="{{ $counter->years }}"
                                            id="example-text-input" required>
                                    </div>
                                </div>

                                @if(Auth::guard('admin')->user()->hasPermission('counters-update'))
                                <div class="form-group text-center m-t-20">
                                    <div class="col-12">
                                        <button class="btn btn-success btn-block btn-lg" name="submit"
                                            type="submit">تعديل</button>
                                    </div>
                                </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
        <!-- container-fluid -->

    </div>
    <!-- content -->



    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

@endsection
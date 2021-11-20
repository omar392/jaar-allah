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
                        <h4 class="page-title" style="font-family: cairo;">إعدادات محركات البحث</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="{{ route('adminhome') }}">الرئيسية</a></li>
                            <li class="breadcrumb-item active">إعدادات محركات البحث</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
            </div>
            <!-- end page-title -->

            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <form action="{{ route('updateseo', $seo->id) }}" method="POST">
                                @csrf

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">كلمات البحث العربية</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="key_ar" value="{{ $seo->key_ar }}"
                                            id="example-text-input" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Key Words</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="key_en" value="{{ $seo->key_en }}"
                                            id="example-text-input" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">اسم الموقع بالعربية</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="site_ar" value="{{ $seo->site_ar }}"
                                            id="example-text-input" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Site Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="site_en" value="{{ $seo->site_en }}"
                                            id="example-text-input" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">الوصف</label>
                                    <div class="col-sm-10">
                                        <textarea name="description_ar" class="form-control" id="" cols="30"
                                            rows="10">{{ $seo->description_ar }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <textarea name="description_en" class="form-control" id="" cols="30"
                                            rows="10">{{ $seo->description_en }}</textarea>
                                    </div>
                                </div>
                                @if(Auth::guard('admin')->user()->hasPermission('seos-update'))
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
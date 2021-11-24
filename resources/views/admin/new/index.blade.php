@extends('admin.layouts.master')
@section('content')

    <div class="content">
        <div class="container-fluid">
            @include('admin.layouts.notification')
            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <h4 class="page-title" style="font-family: cairo;">الاخبار و القرارت السريعه</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="{{ route('adminhome') }}">الرئيسية</a></li>
                            <li class="breadcrumb-item active">الاخبار و القرارت</li>
                        </ol>
                    </div>
                </div> <!-- end row -->
                <br>
                <div class="row align-items-center">
                    @if(Auth::guard('admin')->user()->hasPermission('news-create'))
                    <div class="text-center">
                        <!-- Large modal -->
                        <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal"
                            data-target=".bs-example-modal-lg"><i class="fas fa-plus-circle"></i>إضافة جديد </button>
                    </div>
                    @endif
                    <!--  Modal content for the above example -->
                    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0" id="myLargeModalLabel" style="font-family: cairo;">إضافة جديد</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="card-body">
                                        <form action="{{ route('new.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-group row">
                                                <label for="example-text-input"
                                                    class="col-sm-2 col-form-label">الخبر</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="new_ar"
                                                        id="example-text-input" placeholder="الخبر " required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">New</label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" name="new_en"
                                                        id="example-text-input" placeholder="New" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="example-text-input"
                                                    class="col-sm-2 col-form-label">الحالة</label>
                                                <div class="col-sm-10">
                                                    <select name="status" class="form-control show-tick">
                                                        <option value="">--الحالة--</option>
                                                        <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>
                                                            مفعل</option>
                                                        <option value="inactive"
                                                            {{ old('status') == 'inactive' ? 'selected' : '' }}>غير مفعل</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group text-center m-t-20">
                                                <div class="col-12">
                                                    <button class="btn btn-primary btn-block btn-lg" name="submit"
                                                        type="submit">إضـــافـــة</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div> <!-- end row -->
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card m-b-30">
                            <div class="card-body">
                                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>الخبر</th>
                                            <th>New</th>
                                            <th>الحالة</th>
                                            <th>التحكم</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($new as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{Str::limit($item->new_ar, 20, $end='...')}}</td>
                                                <td>{{Str::limit($item->new_en, 20, $end='...')}}</td>
                                                <td>
                                                    <input type="checkbox" name="toogle" value="{{ $item->id }}"
                                                        data-toggle="toggle" {{ $item->status == 'active' ? 'checked' : '' }}
                                                        data-on="مفعل" data-off="غير مفعل" data-size="sm"
                                                        data-onstyle="success" data-offstyle="danger">
                                                </td>
                                                <td>
                                                    @if(Auth::guard('admin')->user()->hasPermission('news-update'))
                                                    <button type="button" data-toggle="modal"
                                                    data-target="#myModal{{ $item->id }}"
                                                    class="float-left btn btn-info" data-size="sm" title="Edit"><i
                                                        class="fa fa-edit"></i></button>
                                                    @endif
                                                    &ensp;
                                                    @if(Auth::guard('admin')->user()->hasPermission('news-delete'))
                                                    <form class="float-left ml-1"
                                                        action="{{ route('new.destroy', $item->id) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <a data-toggle="tooltip" title="delete"
                                                            data-id="{{ $item->id }}" class="dltBtn"><button
                                                                type="button" data-type="confirm"
                                                                class="btn btn-danger js-sweetalert" title="Delete"><i
                                                                    class="fa fa-trash"></i></button></a>
                                                    </form>
                                                    @endif
                                                </td>
                                                
                                            </tr>
                                                <!--  Modal content for the above example -->
                                                <div id="myModal{{ $item->id }}" class="modal fade" tabindex="-1"
                                                    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title mt-0" id="myLargeModalLabel"
                                                                    style="font-family: cairo;">تعديل الاخبار </h5>
                                                                <button type="button" class="close"
                                                                    data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="card-body">
                                                                    <form action="{{ route('new.update', $item->id) }}"
                                                                        method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('patch')

                                                                        <div class="form-group row">
                                                                            <label for="example-text-input"
                                                                                class="col-sm-2 col-form-label">الخبر</label>
                                                                            <div class="col-sm-10">
                                                                                <input class="form-control" type="text" name="new_ar"
                                                                                    id="example-text-input" placeholder="الخبر" value="{{$item->new_ar}}" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="example-text-input" class="col-sm-2 col-form-label">New</label>
                                                                            <div class="col-sm-10">
                                                                                <input class="form-control" name="new_en"
                                                                                    id="example-text-input" placeholder="New" value="{{$item->new_en}}" required>
                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group text-center m-t-20">
                                                                            <div class="col-12">
                                                                                <button class="btn btn-primary btn-block btn-lg"
                                                                                    name="submit"
                                                                                    type="submit">تــعــديــل</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('scripts')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.dltBtn').click(function(e) {
            var form = $(this).closest('form');
            var dataID = $(this).data('id');
            e.preventDefault();
            swal({
                    title: "هل أنت فعلا تريد الحذف ؟",
                    text: "فى حالة الحذف لن تستطيع الإعاده مرة أخرى",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                        swal("تم الحذف بنجاح", {
                            icon: "success",
                        });
                    } else {
                        swal("تم إلغاء الحذف");
                    }
                });
        });
    </script>
    <script>
        $('input[name=toogle]').change(function() {
            var mode = $(this).prop('checked');
            var id = $(this).val();
            // alert(id);
            $.ajax({
                url: "{{ route('new.status') }}",
                type: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                    mode: mode,
                    id: id,
                },
                success: function(response) {
                    if (response.status) {
                        toastr.success(response.msg);
                    } else {
                        alert('من فضلك حاول مرة أخرى')
                    }
                }
            })
        });
    </script>
@endsection
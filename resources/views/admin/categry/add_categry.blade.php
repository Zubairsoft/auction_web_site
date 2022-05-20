@extends('admin.layouts.main')

@section('title')
    أضافة صنف

@endsection

@section('css')

@endsection
@section('breadcrumb-item')
    اصناف السيارات
@endsection
@section('breadcrumb-item2')
    إضافة صنف جديد
@endsection

@section('breadcrumb-item-active')
    الأصناف
@endsection

@section('page-title')
    أضافة صنف
@endsection

@section('content')

<div id="msg" class="alert alert-danger">
    <strong id="err-msg"></strong>
    </div>
    @if($errors->any())
    @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{$err}}</p>
        @endforeach
    @endif
    <div class="row">
        <div class="col-12">
            @include('message')
            <div class="card">
                <div class="card-body">
                    <form method="post" class="validation" action="{{route('store_categories')}}" enctype="multipart/form-data">
                        @csrf
                    <div class="row">

                            <div class="mb-3 col-md-6">
                                <label for="inputAddress" class="form-label">اسم ماركة السيارة</label>
                                <input type="text" name="name" class="form-control" id="inputAddress" placeholder="مثال تويتا..">
                            </div>
                        <div class="mb-1 col-md-3">
                            <label for="inputAddress" class="form-label">الحالة</label>
                            <select name="is_active" class="form-select mb-3">
                                <option selected>أختر احدى الانوع</option>
                                <option value="1">نشط</option>
                                <option value="-1">غير نشط</option>

                            </select>
                        </div>
                            <div class="mb-3 col-md-3">
                                <label for="inputAddress" class="form-label">شعار ماركة السيارة</label>
                                <input class="form-control" type="file" accept="image/*" name="image" id="formFileMultiple" multiple>
                            </div>
                        <button type="submit" class="btn btn-primary">إضافة</button>

                    </div>
                    </form>
                    <!-- end row -->

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>



@endsection

@section('script')
<script src="/assets/js/validation.js"></script>
@endsection



@extends('admin.layouts.main')

@section('title')
    أضافة مدينة

@endsection

@section('css')

@endsection
@section('breadcrumb-item')
المدن
@endsection
@section('breadcrumb-item2')
    إضافة مدينة جديد
@endsection

@section('breadcrumb-item-active')
    المدن
@endsection

@section('page-title')
    أضافة مدينة
@endsection

@section('content')
    @if($errors->any())
    @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{$err}}</p>
        @endforeach
    @endif
    <div class="row">
        <div class="col-12">
            <div id="msg" class="alert alert-danger">
                <strong id="err-msg"></strong>
                </div>
            @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <strong>{{ session()->get('success') }} </strong>
                            </div>
                            @elseif(session()->has('error'))
                            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                <strong>{{ session()->get('success') }} </strong>
                            </div>
                            @endif
            <div class="card">
                <div class="card-body">
                    <form method="post" class="validation"  action="{{ route("store_city") }}" enctype="multipart/form-data">
                        @csrf
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="inputAddress" class="form-label">المدينة  </label>
                            <input type="text" name="name" class="form-control" id="inputAddress" placeholder="مثال المكلا..">
                        </div>

                            <div class="mb-3 col-md-6">
                                <label for="inputAddress" class="form-label">المحافظة  </label>
                                <select required name="state_id" class="form-select mb-3">
                                    <option selected disabled>أختر  محافظة</option>
                                    @foreach($state as $state)
                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                    <!-- <option value="2">بي أم دبليو</option>
                                    <option value="3">فيراري</option> -->
                                    @endforeach
                                </select>
                            </div>
                        <div class="mb-1 col-md-3">
                            <label for="inputAddress" class="form-label">الحالة</label>
                            <select name="is_active" class="form-select mb-3">
                                <option selected>أختر احدى الانوع</option>
                                <option value="1">نشط</option>
                                <option value="-1">غير نشط</option>

                            </select>
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



@extends('header.head-detalis')
    @extends('master')
    @section('content')

    <div class="container mt-5">
        @if(session()->has('error'))
        <div class="alert alert-danger" role="alert">
            <button type="button" class="btn-close" style="color: #d30606;
                border: none;
                background: #0000;
                font-weight: bolder;
                " data-bs-dismiss="alert" aria-label="Close">X</button>
            <strong>{{ session()->get('error') }} </strong>
        </div>
        @endif
        @if(session()->has('success'))
        <div class="alert alert-danger success-dismissible bg-success text-white border-0 fade show" style="background-color: #5db961 !important;" role="alert">
            <button type="button" class="btn-close" style="color: #d30606;
                border: none;
                background: #0000;
                font-weight: bolder;
                " data-bs-dismiss="alert" aria-label="Close">X</button>
            <strong>{{ session()->get('success') }} </strong>
        </div>
        @endif
        <div class="row">

            <div class="col-12 col-md-6 section-style ">
                {{-- section car information --}}
                <section>
                    <div class="head-detail">
                        <div class="logo" style="left: 0px;">
                            <img src="@isset($auctions->category->image){{ $auctions->category->image}}@endisset" alt="" srcset="">
                        </div>
                        <div class="head-title">
                            <h4><span> @isset($auctions->category->name)
                                    {{ $auctions->category->name}}
                                    @endisset </span> - <span> @isset($auctions->name)
                                    {{ $auctions->name}}
                                    @endisset </span></h4>
                            <h4><span>
                                    @isset($auctions->name)
                                    {{ $auctions->city->state->name}} - {{ $auctions->city->name}}
                                    @endisset
                                </span></h4>

                        </div>
                    </div>
                </section>
                {{-- end section car information --}}
                {{-- start section car auction --}}
                <section>
                    <div class="auction-info-one my-3">
                        <div>السعر الحالي للمزاد :</div>
                        <span class="auction-price">
                            @isset($auctions->curren_price)
                            {{ $auctions->curren_price}}$
                            @endisset
                            <span></span> <span>
                            </span></span>

                    </div>
                    <div class="auction-info-two mb-3">
                        <div class="row">
                            <div class="col-4">
                                <h5 class="text-align"> وقت انتهاء المزاد</h5>
                                <div class="text-align"> <span>
                                        @isset($auctions->date_of_end_auction)
                                        {{ $auctions->date_of_end_auction}}
                                        @endisset</span></div>
                            </div>
                            <div class="col-4">
                                <h5 class="text-align"> عدد المشاركات</h5>
                                <div class="text-align"> <span>
                                        @isset($auctions->number_of_participate)
                                        {{ $auctions->number_of_participate}}
                                        @endisset
                                    </span> </div>
                            </div>
                            <div class="col-4">
                                <h5 class="text-align">اقل قيمة للمزايدة</h5>
                                <div class="text-align"><span>@isset($auctions->min_bid)
                                        {{ $auctions->min_bid}}$
                                        @endisset </span></div>


                            </div>


                        </div>

                    </div>
                </section>
                {{-- end section car auction --}}
                {{-- start section car images --}}
                <section>
                    <div class="main-image mb-3">
                        {{-- <div class="arrow-right"> <i id="next" class="fas fa-angle-right  "></i></div>

                <div class="arrow-left"><i id="prev" class="fas fa-angle-left "></i></div> --}}
                        @foreach($auctions->auctionImage as $image)
                        @php
                        $im = explode('_',$image->image);
                        @endphp
                        @if($im[1]=='main')
                        <img id="show-image" src="{{$image->image}}" alt="">



                    </div>
                    <div class="slider-container mb-3">
                        <div id="btn-right" class="arrow-right"> <i class="fas fa-angle-right  "></i></div>

                        <div id="btn-left" class="arrow-left"><i class="fas fa-angle-left "></i></div>
                        <div id="slider" class="image-slider-container">
                            <div class="image ">
                                <img src="{{$image->image}}" class="img_active" alt="">

                            </div>
                            @else
                            <div class="image ">
                                <img src="{{$image->image}}" class="" alt="">

                            </div>
                            @endif

                            @endforeach
                            <!--  <div class="image">
                  <img src="/assets/images/cars/car2.jpg" alt="">
                </div>
                <div class="image">
                    <img src="/assets/images/cars/car1.jpg" alt="">
                </div>
                <div class="image">
                    <img src="/assets/images/cars/car1.jpg" alt="">
                </div>
                <div class="image">
                    <img src="/assets/images/cars/car1.jpg" alt="">
                </div>

                <div class="image">
                    <img src="/assets/images/cars/car1.jpg" alt="">
                </div>
                <div class="image">
                    <img src="/assets/images/cars/car1.jpg" alt="">
                </div> -->

                        </div>
                    </div>
                </section>
            </div>

            {{-- start scection detail informarion about car --}}
            <div class="col-12 col-md-6">
                <h4 class="bold"> المعلومات الاساسية</h4>
                <div class="detail-info-container">
                    <div class="detail-info-row">
                        <span>اسم السيارة</span>
                        <span>
                            @isset($auctions->name)
                            {{ $auctions->name}}
                            @endisset
                        </span>
                    </div>
                    <div class="detail-info-row">
                        <span>الشركة المصنعة</span><span>
                            @isset($auctions->category->name)
                            {{ $auctions->category->name}}
                            @endisset
                        </span>
                    </div>
                    <div class="detail-info-row">
                        <span> الموديل</span><span>
                            @isset($auctions->model)
                            {{ $auctions->model}}
                            @endisset
                        </span>
                    </div>

                    <div class="detail-info-row">
                        <span> اللون</span><span>
                            @isset($auctions->color)
                            {{ $auctions->color}}
                            @endisset
                        </span>
                    </div>

                    <div class="detail-info-row">
                        <span> الحالة</span><span>
                            @isset($auctions->state)
                            {{$auctions->state}}
                            @endisset
                        </span>
                    </div>
                    <div class="detail-info-row">
                        <span> الاضرار</span><span>
                            @isset($auctions->damage)
                            {{ $auctions->damage}}
                            @endisset
                        </span>
                    </div>

                    <div class="detail-info-row">
                        <span> المسافات المقطوعة</span>
                        <span>@isset($auctions->odometer)
                            {{ $auctions->odometer}}
                            @endisset
                            <span>km</span></span>
                    </div>

                    <div class="detail-info-row">
                        <span> نوع القير</span><span>
                            @isset($auctions->ger_type)
                            {{$auctions->ger_type}}

                            @endisset
                        </span>
                    </div>

                    <div class="detail-info-row">
                        <span> نوع المحرك</span>
                        <span> @isset($auctions->engine_type)
                            {{ $auctions->engine_type}}
                            @endisset
                        </span>
                    </div>

                    <div class="detail-info-row">
                        <span> نوع الوقود</span><span>
                            @isset($auctions->fuel)
                            {{$auctions->fuel}}

                            @endisset
                        </span>
                    </div>

                    <div class="detail-info-row">
                        <span> ملاحظات</span>
                        <span> @isset($auctions->notes)
                            {{ $auctions->notes}}
                            @endisset
                        </span>

                    </div>

                </div>
                <div class="action-card mt-2">
                    <div class="action-head">الاشتراك في المزاد</div>
                    <div class="action-body">
                        <form id="bidding-form" name="amountForm" method="post" action="{{route('bidding')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="text" required id="amount" name="amount" placeholder="ادخل مبلغ للاشتراك في المزاد">
                            <input type="hidden" name="auction_id" value="{{$auctions->id}}">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">مزايدة</button>
                        </form>





                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel" class="">تاكيد الاشتراك </h5>
                                        <i class="fas fa-times" style="font-size: 25px" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></i>
                                    </div>
                                    <div class="modal-body">
                                        هل انت متاكد انك تريد المزايدة بمبلغ
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اللغاء</button>
                                        <button type="submit" class="btn model-btn  mx-2" form="bidding-form">تاكيد المزايدة </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="msg" class="alert alert-danger">
                    <strong id="validate-msg"></strong>
                </div>
            </div>

        </div>
        <div class="m-4">
            <div class="alert alert-danger alert-dismissible fade show">
                <h4 class="alert-heading"><i class="bi-exclamation-octagon-fill"></i> ملاحظة!</h4>
                <p> عند مشاركتك في المزاد سيتم خصم 20% من محفظتك وفي حال عدم ترسية العين  عليك يتم إعادة المبلغ إلى المحفظة.</p>
                <hr>
                <p class="mb-0"> بإمكانك الإطلاع على سياسات الموقع لتعرف كيف تجرى المزادات <a href="{{ route('view_policies') }}"> انقر هنا لمعرفة المزيد</a></p>
                
            </div>
        </div>
    </div>


    @endsection
    @extends('footer.footer-detalis')
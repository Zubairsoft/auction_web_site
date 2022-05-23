    @extends('header.head')
    @extends('master')
    @section('content')

    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Product main img -->
                <div class="col-md-5 col-md-push-2" style="direction: ltr;">
                    <div id="product-main-img">
                        <div class="product-preview">
                            <img src="assets/images/cars/car1.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="assets/images/cars/car2.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="assets/images/cars/car1.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="assets/images/cars/car2.jpg" alt="">
                        </div>
                    </div>



                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-5 " style="direction: ltr;">
                    <div id="product-imgs">
                        <div class="product-preview">
                            <img src="assets/images/cars/car1.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="assets/images/cars/car2.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="assets/images/cars/car1.jpg" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="assets/images/cars/car2.jpg" alt="">
                        </div>
                    </div>

                </div>
                <!-- /Product thumb imgs -->

                <!-- Product details -->
                <div class="col-md-5">

                     <div class="auction-title">
                        <h2>كامري</h2>
                        <h4 class="address"> حضرموت - المكلا</h4>
                        <img src="assets/images/logos/مرسيدس.png" alt="" class="brand">
                        <span class="price-title">السعر الحالي للمزاد</span> <span class="price">15000$</span>
                    </div>
                    <div class="detail-container">
                        <div class="detail-colmun">
                            <h6>  المدة المتبقية</h6>
                            <div>3 ايام 5ساعات 30دقيقة</div>
                        </div>
                        <div class="detail-colmun">
                        <h6>	عدد المشاركات	</h6>
                        <div>
                            18
                        </div>
                        </div>
                        <div class="detail-colmun" >
                    <h6>   الحد الادنى للمزاد </h6>
                    <div>1000$</div>
                        </div>

                    </div>

                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">اسم السيارة </span>
                                    <span>كامري</span>
                                </div>
                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">الشركة المصنعة</span>
                                    <span>تويوتا</span>
                                </div>

                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">الموديل</span>
                                    <span>2018</span>
                                </div>

                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">اللون</span>
                                    <span>ازرق</span>
                                </div>

                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">الحالة</span>
                                    <span>مسعمل</span>
                                </div>
                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">الاضرار</span>
                                    <span>سليم</span>
                                </div>
                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">نوع القير</span>
                                    <span>اوتماتيك</span>
                                </div>

                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">المسافات المقطوعة</span>
                                    <span>30000 km</span>
                                </div>
                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">نوع المحرك</span>
                                    <span>3.0L 6</span>
                                </div>
                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">نوع الوقود </span>
                                    <span>بترول</span>
                                </div>
                                <div class="col-11 col-md-12 first-row">
                                    <span class="description-title">الملاحظات </span>
                                    <span>بترول</span>
                                </div>
                                <div  class="col-11 col-md-12 padding-customize  ">
                                    <div class="auction">
                                        <input type="number" name="prise" placeholder="ادخل المبلغ للاشتراك في المزاد">
                                     <button class="btn btn-primary auction-btn">مزايدة</button>
                                   </div>
                                </div>


                          </div>


                </div>
                <!-- /Product details -->

                <!-- Product tab -->

                <!-- /product tab -->
            </div>


            </div>
            <!-- /row -->

        </div>

    </div>
    @extends('footer.footer')

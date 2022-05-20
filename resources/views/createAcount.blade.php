    @extends('header.head-create')
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">إنشاء حساب</h2>
                    <form method="POST" class="register-form" id="register-form">
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="name" id="name" placeholder="إسم المستخدم"/>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="الإيميل"/>
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="pass" id="pass" placeholder="كلمة المرور"/>
                        </div>
                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="re_pass" id="re_pass" placeholder="تأكيد كلمة المرور"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>بالنقر على هذا المربع , أوافق على أحكام وشروط موقع مزادي كار  <a href="#" class="term-service">شروط الخدمة الخاصة بالموقع  وسياسة الخصوصية</a></label>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="أنشاء حساب"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="assets/images/signin-image.jpg" alt="sing up image"></figure>
                
                </div>
            </div>
        </div>
    </section>





        <!-- Bootstrap JS -->
       @extends('footer.footer')
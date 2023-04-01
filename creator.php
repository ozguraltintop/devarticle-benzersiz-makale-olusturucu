  <div id="contact" class="popup-section contact-section flex-cc">
            <div class="inner-wrapper" data-ckav-smd="align-center">

                <!-- CLOSE BUTTON -->
                <div class="popup-close button button-icon color-button-dark solid color-hov-button-dark">
                    <i class="pe-7s-close"></i>
                </div>

                <!-- POPUP HEADER -->
                <div class="header-area typo-light">
                    <h2 class="heading-section medium bold-600 margin-b-0">PDF to Mail</h2>
                </div>

                <!-- POPUP CONTENT -->
                <div class="content-area">
                    
                    <div class="row gt60">
                        <div class="col-lg-6" data-ckav-smd="margin-b-40">
                            <div class="map-wrapper height-px-200 margin-b-40">
                              <img src="images/tomail.png" style="width:300px;height: 300px;">
                            </div>

                            <div class="info-obj margin-b-0 info-box-01 img-l gap-20 mini animated fadeInUp" data-ckav-smd="margin-b-30 align-left">
                                <div class="img"><span class="iconwrp"><i class="pe-7s-mail"></i></span></div>
                                <div class="info">
                                    <h3 class="heading-content tiny bold-600 margin-b-5">Email</h3>
                                    <p class="margin-b-0">altintopozgur@gmail.com</p>
                                </div>
                            </div>

                            <hr class="margin-tb-20">

                            <div class="info-obj margin-b-0 info-box-01 img-l gap-20 mini animated fadeInUp" data-ckav-smd="margin-b-30 align-left">
                                <div class="img"><span class="iconwrp"><i class="pe-7s-headphones"></i></span></div>
                                <div class="info">
                                    <h3 class="heading-content tiny bold-600 margin-b-5">Telefon</h3>
                                    <p class="margin-b-0">+44-7378-11-6244</p>
                                </div>
                            </div>

                            <hr class="margin-tb-20">

                           
                           
                        </div>
                        <div class="col-lg-6">
                            <h3 class="heading-content small margin-b-30" data-ckav-smd="medium">Hazırlanan makaleyi mail olarak gönderiniz.</h3>
                            <form action="process.php" method="post" class="form-widget form-control-op-02">
                                <div class="field-wrp">
                                    <input type="hidden" name="to" value="c.kav.art@gmail.com">
        
                                    <div class="row gt10">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control radius-10" data-label="Name" required="" data-msg="Hata" type="text" name="baslik1" placeholder="Baslik Giriniz">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input class="form-control radius-10" data-label="Konu" required="" data-msg="Hata" type="text" name="konu1" placeholder="Konu Giriniz">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input class="form-control radius-10" required="" data-label="Email" data-msg="Hata." type="Email" name="email" placeholder="E-mail adresi">
                                    </div>
                                        
                                    <div class="col-md-12">
                                            <label>Kelime Sayısı : </label>
                                            <div class="form-group">
                                                <input type="range" min="1" max="3000" value="1000" class="slider" id="myRangem" name="rangem"><span id="ciktim" style="color:red"></span>
                                            </div>
                                            
                                    </div>    
                                    
                                </div>
                                <input type="submit" class="button radius-10 button-3d solid color-button-default width-100 margin-0" name="sendMail" value="Gönder"><i class="fa fa-envelope-o"></i> 
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
      
        <div id="subscribe" class="popup-section subscribe-section flex-cc">
            <div class="inner-wrapper" data-ckav-smd="align-center">

                <!-- CLOSE BUTTON -->
                <div class="popup-close button button-icon color-button-dark solid color-hov-button-dark">
                    <i class="pe-7s-close"></i>
                </div>
                
                <!-- POPUP HEADER -->
                <div class="header-area typo-light">
                    <h2 class="heading-section medium bold-600 margin-b-0">PDF Döküm</h2>
                </div>

                <!-- POPUP CONTENT -->
                <div class="content-area">

                    <div class="row gt60 align-items-center">
                        <div class="col-lg-6" data-ckav-smd="margin-b-30">
                            <img src="images/document.png" style="width:300px;height: 300px;">
                        </div>

                        <div class="col-lg-6">
                            <div class="margin-b-40" data-ckav-smd="margin-b-40">
                                <h3 class="heading-content small bold-600">PDF</h3>
                                <p class="heading-content-sub mini bold-400 margin-b-0">Gereken bilgileri girdikten sonra pdf 'in oluşmasını bekle.</p>
                            </div>
        
                            <form action="process.php" method="post" class="form-widget form-control-op-02 margin-auto" novalidate="novalidate" data-ckav-smd="width-100">
                                <div class="field-wrp">
                                    <input type="hidden" name="to" value="c.kav.art@gmail.com">
        
                                    <div class="row gt10">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Makale Başlığı </label>
                                                <input class="form-control radius-10" data-label="Name" required="" data-msg="Hata" type="text" name="baslik" placeholder="PHP">
                                            </div>
                                        </div>
                                         <div class="col-md-12">
                                            <label>Ne Hakkında </label>
                                            <div class="form-group">
                                                <input class="form-control radius-10" data-label="Name" required="" data-msg="Hata" type="text" name="hakkinda" placeholder="SEO vb">
                                            </div>
                                        </div>
                                         <div class="col-md-12">
                                            <label>Kelime Sayısı : </label>
                                            <div class="form-group">
                                                <input type="range" min="1" max="3000" value="1000" class="slider" id="myRange" name="range"><span id="cikti" style="color:red"></span>
                                            </div>
                                            
                                        </div>
                                      
                                    </div>
                                </div>
                                <input type="submit" value="Gönder" name="pdfGonder" class="button button-3d radius-10 solid color-button-default width-100 margin-0 radius-0">
                              
                            </form>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
        <!-- ************** END : SUBSCRIBE SECTION **************  -->
        <script type="text/javascript">
            $("#myRange").click(function(){
                 var a = $('#myRange').val();
                 $('#cikti').text(a);
            });
            $("#myRangem").click(function(){
                 var b = $('#myRangem').val();
                 $('#ciktim').text(b);
            });
        </script>
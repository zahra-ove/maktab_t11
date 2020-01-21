<div id="header">
    <!-- Top Bar Start-->
    <nav id="top" class="htop">
      <div class="container">
        <div class="row"> <span class="drop-icon visible-sm visible-xs"><i class="fa fa-align-justify"></i></span>
          <div class="pull-left flip left-top">
            <div class="links">
              <ul>
                <li class="mobile"><i class="fa fa-phone"></i>+21 9898777656</li>
                <li class="email"><a href="mailto:info@marketshop.com"><i class="fa fa-envelope"></i>info@marketshop.com</a></li>
                </li>
                <li><a href="{{url('/wishlist')}}">لیست علاقه مندی (0)</a></li>
                <li><a href="{{url('/checkout')}}">تسویه حساب</a></li>
              </ul>
            </div>
          </div>
          <div id="top-links" class="nav pull-right flip">
            <ul>
              <li><a href="{{url('login')}}">ورود</a></li>
              <li><a href="{{url('register')}}">ثبت نام</a></li>
            </ul>




          </div>
        </div>
      </div>
    </nav>
    <!-- Top Bar End-->
    <!-- Header Start-->
    <header class="header-row">
      <div class="container">
        <div class="table-container">
          <!-- Logo Start -->
          <div class="col-table-cell col-lg-6 col-md-6 col-sm-12 col-xs-12 inner">
            <div id="logo"><a href="{{url('index')}}"><img class="img-responsive" src="{{asset('image/logo2.png')}}" title="MarketShop" alt="MarketShop" /></a></div>
          </div>
          <!-- Logo End -->
          <!-- Mini Cart Start-->
          <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div id="cart">
              <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="heading dropdown-toggle">
              <span class="cart-icon pull-left flip"></span>
              <span id="cart-total">2 آیتم - 132000 تومان</span></button>
              <ul class="dropdown-menu">
                <li>
                  <table class="table">
                    <tbody>
                      <tr>
                        <td class="text-center"><a href="{{url('product')}}"><img class="img-thumbnail" title="کفش راحتی مردانه" alt="کفش راحتی مردانه" src="image/product/sony_vaio_1-50x50.jpg"></a></td>
                        <td class="text-left"><a href="{{url('product')}}">کفش راحتی مردانه</a></td>
                        <td class="text-right">x 1</td>
                        <td class="text-right">32000 تومان</td>
                        <td class="text-center"><button class="btn btn-danger btn-xs remove" title="حذف" onClick="" type="button"><i class="fa fa-times"></i></button></td>
                      </tr>
                      <tr>
                        <td class="text-center"><a href="{{url('product')}}"><img class="img-thumbnail" title="تبلت ایسر" alt="تبلت ایسر" src="{{asset('image/product/samsung_tab_1-50x50.jpg')}}"></a></td>
                        <td class="text-left"><a href="{{url('product')}}">تبلت ایسر</a></td>
                        <td class="text-right">x 1</td>
                        <td class="text-right">98000 تومان</td>
                        <td class="text-center"><button class="btn btn-danger btn-xs remove" title="حذف" onClick="" type="button"><i class="fa fa-times"></i></button></td>
                      </tr>
                    </tbody>
                  </table>
                </li>
                <li>
                  <div>
                    <table class="table table-bordered">
                      <tbody>
                        <tr>
                          <td class="text-right"><strong>جمع کل</strong></td>
                          <td class="text-right">132000 تومان</td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>کسر هدیه</strong></td>
                          <td class="text-right">4000 تومان</td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>مالیات</strong></td>
                          <td class="text-right">11880 تومان</td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>قابل پرداخت</strong></td>
                          <td class="text-right">139880 تومان</td>
                        </tr>
                      </tbody>
                    </table>
                    <p class="checkout"><a href="{{url('cart')}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> مشاهده سبد</a>&nbsp;&nbsp;&nbsp;<a href="{{url('checkout')}}" class="btn btn-primary"><i class="fa fa-share"></i> تسویه حساب</a></p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!-- Mini Cart End-->
          <!-- جستجو Start-->
          <div class="col-table-cell col-lg-3 col-md-3 col-sm-6 col-xs-12 inner">
            <div id="search" class="input-group">
              <input id="filter_name" type="text" name="search" value="" placeholder="جستجو" class="form-control input-lg" />
              <button type="button" class="button-search"><i class="fa fa-search"></i></button>
            </div>
          </div>
          <!-- جستجو End-->
        </div>
      </div>
    </header>
    <!-- Header End-->
    <!-- main  menu-->
    <div class="container">
      <nav id="menu" class="navbar">
        <div class="navbar-header"> <span class="visible-xs visible-sm"> منو <b></b></span></div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a class="home_link" title="خانه" href="{{url('index')}}"><span>خانه</span></a></li>
            <li class="mega-menu dropdown"><a>دسته ها</a>
              <div class="dropdown-menu">
                <div class="column col-lg-2 col-md-3"><a href="{{url('category')}}">البسه</a>
                  <div>
                    <ul>
                      <li><a href="{{url('category')}}">آقایان <span>&rsaquo;</span></a>
                        <div class="dropdown-menu">
                          <ul>
                            <li><a href="">زیردسته ها</a></li>
                            <li><a href="{{url('category')}}">زیردسته ها</a></li>
                            <li><a href="{{url('category')}}">زیردسته ها</a></li>
                            <li><a href="{{url('category')}}">زیردسته ها</a></li>
                            <li><a href="">زیردسته جدید</a></li>
                          </ul>
                        </div>
                      </li>
                      <li><a href="{{url('category')}}" >بانوان</a> </li>
                      <li><a href="{{url('category')}}">دخترانه<span>&rsaquo;</span></a>
                        <div class="dropdown-menu">
                          <ul>
                            <li><a href="{{url('category')}}">زیردسته ها </a></li>
                            <li><a href="{{url('category')}}">زیردسته جدید</a></li>
                            <li><a href="{{url('category')}}">زیردسته جدید</a></li>
                          </ul>
                        </div>
                      </li>
                      <li><a href="{{url('category')}}">پسرانه</a></li>
                      <li><a href="{{url('category')}}">نوزاد</a></li>
                      <li><a href="{{url('category')}}">لوازم <span>&rsaquo;</span></a>
                        <div class="dropdown-menu">
                          <ul>
                            <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="column col-lg-2 col-md-3"> <a href="{{url('category')}}">الکترونیکی</a>
                  <div>
                    <ul>
                      <li> <a href="{{url('category')}}">لپ تاپ <span>&rsaquo;</span></a>
                        <div class="dropdown-menu">
                          <ul>
                            <li> <a href="{{url('category')}}">زیردسته های جدید </a> </li>
                            <li> <a href="{{url('category')}}">زیردسته های جدید </a> </li>
                            <li> <a href="{{url('category')}}">زیردسته جدید </a> </li>
                          </ul>
                        </div>
                      </li>
                      <li> <a href="{{url('category')}}">رومیزی <span>&rsaquo;</span></a>
                        <div class="dropdown-menu">
                          <ul>
                            <li> <a href="{{url('category')}}">زیردسته های جدید </a> </li>
                            <li> <a href="{{url('category')}}">زیردسته جدید </a> </li>
                            <li> <a href="{{url('category')}}">زیردسته جدید </a> </li>
                          </ul>
                        </div>
                      </li>
                      <li> <a href="{{url('category')}}">دوربین <span>&rsaquo;</span></a>
                        <div class="dropdown-menu">
                          <ul>
                            <li> <a href="{{url('category')}}">زیردسته های جدید</a></li>
                          </ul>
                        </div>
                      </li>
                      <li><a href="{{url('category')}}">موبایل و تبلت <span>&rsaquo;</span></a>
                        <div class="dropdown-menu">
                          <ul>
                            <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                            <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                          </ul>
                        </div>
                      </li>
                      <li><a href="{{url('category')}}">صوتی و تصویری <span>&rsaquo;</span></a>
                        <div class="dropdown-menu">
                          <ul>
                            <li><a href="{{url('category')}}">زیردسته های جدید </a> </li>
                            <li><a href="{{url('category')}}">زیردسته جدید </a> </li>
                          </ul>
                        </div>
                      </li>
                      <li><a href="{{url('category')}}">لوازم خانگی</a> </li>
                    </ul>
                  </div>
                </div>
                <div class="column col-lg-2 col-md-3"><a href="{{url('category')}}">کفش</a>
                  <div>
                    <ul>
                      <li><a href="{{url('category')}}">آقایان</a> </li>
                      <li><a href="{{url('category')}}">بانوان <span>&rsaquo;</span></a>
                        <div class="dropdown-menu">
                          <ul>
                            <li><a href="{{url('category')}}">زیردسته های جدید </a> </li>
                            <li><a href="{{url('category')}}">زیردسته ها </a> </li>
                          </ul>
                        </div>
                      </li>
                      <li><a href="{{url('category')}}">دخترانه</a> </li>
                      <li><a href="{{url('category')}}">پسرانه</a> </li>
                      <li><a href="{{url('category')}}">نوزاد</a> </li>
                      <li><a href="{{url('category')}}">لوازم <span>&rsaquo;</span></a>
                        <div class="dropdown-menu">
                          <ul>
                            <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                            <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                            <li><a href="{{url('category')}}">زیردسته ها</a></li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="column col-lg-2 col-md-3"> <a href="{{url('category')}}">ساعت</a>
                  <div>
                    <ul>
                      <li> <a href="{{url('category')}}">ساعت مردانه</a></li>
                      <li> <a href="{{url('category')}}">ساعت زنانه</a></li>
                      <li> <a href="{{url('category')}}">ساعت بچگانه</a></li>
                      <li> <a href="{{url('category')}}">لوازم</a></li>
                    </ul>
                  </div>
                </div>
                <div class="column col-lg-2 col-md-3"> <a href="{{url('category')}}">جواهرات</a>
                  <div>
                    <ul>
                      <li> <a href="{{url('category')}}">نقره <span>&rsaquo;</span></a>
                        <div class="dropdown-menu">
                          <ul>
                            <li> <a href="{{url('category')}}">زیردسته های جدید</a></li>
                            <li> <a href="{{url('category')}}">زیردسته های جدید</a></li>
                          </ul>
                        </div>
                      </li>
                      <li><a href="{{url('category')}}">طلا <span>&rsaquo;</span></a>
                        <div class="dropdown-menu">
                          <ul>
                            <li><a href="{{url('category')}}">تست 1</a></li>
                            <li><a href="{{url('category')}}">تست 2</a></li>
                          </ul>
                        </div>
                      </li>
                      <li><a href="{{url('category')}}">الماس</a></li>
                      <li><a href="{{url('category')}}">مروارید <span>&rsaquo;</span></a>
                        <div class="dropdown-menu">
                          <ul>
                            <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                          </ul>
                        </div>
                      </li>
                      <li><a href="{{url('category')}}">زیورآلات آقایان</a></li>
                      <li><a href="{{url('category')}}">زیورآلات کودکان <span>&rsaquo;</span></a>
                        <div class="dropdown-menu">
                          <ul>
                            <li><a href="{{url('category')}}">زیردسته های جدید </a> </li>
                          </ul>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="column col-lg-2 col-md-3"><a href="{{url('category')}}">زیبایی و سلامت</a>
                  <div>
                    <ul>
                      <li> <a href="{{url('category')}}">عطر و ادکلن</a></li>
                      <li> <a href="{{url('category')}}">آرایشی</a></li>
                      <li> <a href="{{url('category')}}">ضد آفتاب</a></li>
                      <li> <a href="{{url('category')}}">مراقبت از پوست</a></li>
                      <li> <a href="{{url('category')}}">مراقبت از چشم</a></li>
                      <li> <a href="{{url('category')}}">مراقبت از مو</a></li>
                    </ul>
                  </div>
                </div>
                <div class="column col-lg-2 col-md-3"> <a href="{{url('category')}}">کودک و نوزاد</a>
                  <div>
                    <ul>
                      <li><a href="{{url('category')}}">اسباب بازی</a></li>
                      <li><a href="{{url('category')}}">بازی <span>&rsaquo;</span></a>
                        <div class="dropdown-menu">
                          <ul>
                            <li><a href="{{url('category')}}">تست 25</a></li>
                          </ul>
                        </div>
                      </li>
                      <li><a href="{{url('category')}}">پازل</a></li>
                      <li><a href="{{url('category')}}">سرگرمی</a></li>
                      <li><a href="{{url('category')}}">متنوع</a></li>
                      <li><a href="{{url('category')}}">سلامت و امنیت</a></li>
                    </ul>
                  </div>
                </div>
                <div class="column col-lg-2 col-md-3"> <a href="{{url('category')}}">ورزشی</a>
                  <div>
                    <ul>
                      <li><a href="{{url('category')}}">دوچرخه سواری</a></li>
                      <li><a href="{{url('category')}}">دویدن</a></li>
                      <li><a href="{{url('category')}}">شنا</a></li>
                      <li><a href="{{url('category')}}">فوتبال</a></li>
                      <li><a href="{{url('category')}}">گلف</a></li>
                      <li><a href="{{url('category')}}">موج سواری</a></li>
                    </ul>
                  </div>
                </div>
                <div class="column col-lg-2 col-md-3"> <a href="{{url('category')}}">خانه و باغچه</a>
                  <div>
                    <ul>
                      <li><a href="{{url('category')}}">لوازم خواب</a></li>
                      <li><a href="{{url('category')}}">خوراک</a></li>
                      <li><a href="{{url('category')}}">لوازم منزل</a></li>
                      <li><a href="{{url('category')}}">آشپزخانه</a></li>
                      <li><a href="{{url('category')}}">روشنایی</a></li>
                      <li><a href="{{url('category')}}">ابزارها</a></li>
                    </ul>
                  </div>
                </div>
                <div class="column col-lg-2 col-md-3"> <a href="{{url('category')}}">خوراک</a>
                  <div>
                    <ul>
                      <li><a href="{{url('category')}}">نوشیدنی</a></li>
                      <li><a href="{{url('category')}}">تنقلات</a></li>
                      <li><a href="{{url('category')}}">میان وعده</a></li>
                      <li><a href="{{url('category')}}">خشک بار</a></li>
                      <li><a href="{{url('category')}}">شکلات</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <li class="menu_brands dropdown"><a href="#">برند ها</a>
              <div class="dropdown-menu">
                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"> <img  src="{{asset('image/product/apple_logo-60x60.jpg')}}" title="اپل" alt="اپل" /></a><a href="#">اپل</a></div>
                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"> <img  src="{{asset('image/product/canon_logo-60x60.jpg')}}" title="کنون" alt="کنون" /></a><a href="#">کنون</a></div>
                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"> <a href="#"><img src="{{asset('image/product/hp_logo-60x60.jpg')}}" title="اچ پی" alt="اچ پی" /></a><a href="#">اچ پی</a></div>
                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"> <img  src="{{asset('image/product/htc_logo-60x60.jpg')}}" title="اچ تی سی" alt="اچ تی سی" /></a><a href="#">اچ تی سی</a></div>
                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"> <img  src="{{asset('image/product/palm_logo-60x60.jpg')}}" title="پالم" alt="پالم" /></a><a href="#">پالم</a></div>
                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"> <img  src="{{asset('image/product/sony_logo-60x60.jpg')}}" title="سونی" alt="سونی" /></a><a href="#">سونی</a> </div>
                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"> <img  src="{{asset('image/product/canon_logo-60x60.jpg')}}" title="test" alt="test" /></a><a href="#">test</a> </div>
                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"> <img  src="{{asset('image/product/apple_logo-60x60.jpg')}}" title="test 3" alt="test 3" /></a><a href="#">test 3</a></div>
                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"> <img  src="{{asset('image/product/canon_logo-60x60.jpg')}}" title="test 5" alt="test 5" /></a><a href="#">test 5</a> </div>
                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"> <img  src="{{asset('image/product/canon_logo-60x60.jpg')}}" title="test 6" alt="test 6" /></a><a href="#">test 6</a></div>
                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"> <img  src="{{asset('image/product/apple_logo-60x60.jpg')}}" title="test 7" alt="test 7" /></a><a href="#">test 7</a> </div>
                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"> <img  src="{{asset('image/product/canon_logo-60x60.jpg')}}" title="test1" alt="test1" /></a><a href="#">test1</a></div>
                <div class="col-lg-1 col-md-2 col-sm-3 col-xs-6"><a href="#"> <img  src="{{asset('image/product/apple_logo-60x60.jpg')}}" title="test2" alt="test2" /></a><a href="#">test2</a></div>
              </div>
            </li>
            {{-- <li class="custom-link"><a href="#">لینک های دلخواه</a></li> --}}
            {{-- <li class="dropdown wrap_custom_block hidden-sm hidden-xs"><a>بلاک سفارشی</a>
              <div class="dropdown-menu custom_block">
                <ul>
                  <li>
                    <table>
                      <tbody>
                        <tr>
                          <td><img alt="" src="image/banner/cms-block.jpg"></td>
                          <td><img alt="" src="image/banner/responsive.jpg"></td>
                          <td><img alt="" src="image/banner/cms-block.jpg"></td>
                        </tr>
                        <tr>
                          <td><h4>بلاک های محتوا</h4></td>
                          <td><h4>قالب واکنش گرا</h4></td>
                          <td><h4>پشتیبانی ویژه</h4></td>
                        </tr>
                        <tr>
                          <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                          <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                          <td>این یک بلاک مدیریت محتواست. شما میتوانید هر نوع محتوای html نوشتاری یا تصویری را در آن قرار دهید.</td>
                        </tr>
                        <tr>
                          <td><strong><a class="btn btn-primary btn-sm" href="#">ادامه مطلب</a></strong></td>
                          <td><strong><a class="btn btn-primary btn-sm" href="#">ادامه مطلب</a></strong></td>
                          <td><strong><a class="btn btn-primary btn-sm" href="#">ادامه مطلب</a></strong></td>
                        </tr>
                      </tbody>
                    </table>
                  </li>
                </ul>
              </div>
            </li> --}}
            <li class="dropdown information-link"><a>برگه ها</a>
              <div class="dropdown-menu">
                <ul>
                  <li><a href="{{url('login')}}">ورود</a></li>
                  <li><a href="{{url('register')}}">ثبت نام</a></li>
                  <li><a href="{{url('category')}}">دسته بندی (شبکه/لیست)</a></li>
                  <li><a href="{{url('product')}}">محصولات</a></li>
                  <li><a href="{{url('cart')}}">سبد خرید</a></li>
                  <li><a href="{{url('checkout')}}">تسویه حساب</a></li>
                  <li><a href="{{url('compare')}}">مقایسه</a></li>
                  <li><a href="{{url('wishlist')}}">لیست آرزو</a></li>
                  <li><a href="{{url('search')}}">جستجو</a></li>
                </ul>
                {{-- <ul>
                  <li><a href="{{url('about-us')}}">درباره ما</a></li>
                  <li><a href="{{url('404')}}">404</a></li>
                  <li><a href="{{url('elements')}}">عناصر</a></li>
                  <li><a href="{{url('faq')}}">سوالات متداول</a></li>
                  <li><a href="{{url('sitemap')}}">نقشه سایت</a></li>
                  <li><a href="{{url('contact-us')}}">تماس با ما</a></li>
                </ul> --}}
              </div>
            </li>
            <li class="contact-link"><a href="{{url('contact-us')}}">تماس با ما</a></li>
            <li><a href="{{url('about-us')}}">درباره ما</a></li>
            <li><a href="{{url('sitemap')}}">نقشه سایت</a></li>
            <li><a href="{{url('faq')}}">سوالات متداول</a></li>
            {{-- <li class="custom-link-right"><a href="#" target="_blank"> همین حالا بخرید!</a></li> --}}
          </ul>
        </div>
      </nav>
    </div>
    <!-- main menu end-->
  </div>

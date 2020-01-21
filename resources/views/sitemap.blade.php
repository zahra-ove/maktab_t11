@extends('layouts.layout')

@section('title')
{{'نقشه سایت'}}
@endsection

@section('content')
<div id="container">
    <div class="container">
      <!-- Breadcrumb Start-->
      <ul class="breadcrumb">
        <li><a href="{{url('index')}}"><i class="fa fa-home"></i></a></li>
        <li><a href="{{url('sitemap')}}">نقشه سایت</a></li>
      </ul>
      <!-- Breadcrumb End-->
      <div class="row">
        <!--Middle Part Start-->
        <div id="content" class="col-sm-12">
          <h1 class="title">نقشه سایت</h1>
          <div class="row">
            <div class="col-sm-3 hidden-xs hidden-sm sitemap-icon"><i class="fa fa-sitemap"></i></div>
            <div class="col-md-5 col-sm-6">
              <ul class="sitemap">
                <li><a href="{{url('category')}}">البسه</a>
                  <ul>
                    <li><a href="{{url('category')}}">آقایان</a>
                      <ul>
                        <li><a href="{{url('category')}}">زیردسته ها</a></li>
                        <li><a href="{{url('category')}}">زیردسته ها</a></li>
                        <li><a href="{{url('category')}}">زیردسته ها</a></li>
                        <li><a href="{{url('category')}}">زیردسته ها</a></li>
                        <li><a href="{{url('category')}}">زیردسته جدید</a></li>
                      </ul>
                    </li>
                    <li><a href="{{url('category')}}">بانوان</a> </li>
                    <li><a href="{{url('category')}}">دخترانه</a>
                      <ul>
                        <li><a href="{{url('category')}}">زیردسته ها</a></li>
                        <li><a href="{{url('category')}}">زیردسته جدید</a></li>
                        <li><a href="{{url('category')}}">زیردسته جدید</a></li>
                      </ul>
                    </li>
                    <li><a href="{{url('category')}}">پسرانه</a> </li>
                    <li><a href="{{url('category')}}">نوزاد</a> </li>
                    <li><a href="{{url('category')}}">لوازم</a>
                      <ul>
                        <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="{{url('category')}}">الکترونیکی</a>
                  <ul>
                    <li><a href="{{url('category')}}">لپ تاپ</a>
                      <ul>
                        <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                        <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                        <li><a href="{{url('category')}}">زیردسته جدید</a></li>
                      </ul>
                    </li>
                    <li><a href="{{url('category')}}">رومیزی</a>
                      <ul>
                        <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                        <li><a href="{{url('category')}}">زیردسته جدید</a></li>
                        <li><a href="{{url('category')}}">زیردسته جدید</a></li>
                      </ul>
                    </li>
                    <li><a href="{{url('category')}}">دوربین</a>
                      <ul>
                        <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                      </ul>
                    </li>
                    <li><a href="{{url('category')}}">موبایل و تبلت</a>
                      <ul>
                        <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                        <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                      </ul>
                    </li>
                    <li><a href="{{url('category')}}">صوتی و تصویری</a>
                      <ul>
                        <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                        <li><a href="{{url('category')}}">زیردسته جدید</a></li>
                      </ul>
                    </li>
                    <li><a href="{{url('category')}}">لوازم خانگی</a> </li>
                  </ul>
                </li>
                <li><a href="{{url('category')}}">کفش</a>
                  <ul>
                    <li><a href="{{url('category')}}">آقایان</a> </li>
                    <li><a href="{{url('category')}}">بانوان</a>
                      <ul>
                        <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                        <li><a href="{{url('category')}}">زیردسته ها</a></li>
                      </ul>
                    </li>
                    <li><a href="{{url('category')}}">دخترانه</a> </li>
                    <li><a href="{{url('category')}}">پسرانه</a> </li>
                    <li><a href="{{url('category')}}">نوزاد</a> </li>
                    <li><a href="{{url('category')}}">لوازم</a>
                      <ul>
                        <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                        <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                        <li><a href="{{url('category')}}">زیردسته ها</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="{{url('category')}}">ساعت</a>
                  <ul>
                    <li><a href="{{url('category')}}">ساعت مردانه</a> </li>
                    <li><a href="{{url('category')}}">ساعت زنانه</a> </li>
                    <li><a href="{{url('category')}}">ساعت بچگانه</a> </li>
                    <li><a href="{{url('category')}}">لوازم</a> </li>
                  </ul>
                </li>
                <li><a href="{{url('category')}}">جواهرات</a>
                  <ul>
                    <li><a href="{{url('category')}}">نقره</a>
                      <ul>
                        <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                        <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                      </ul>
                    </li>
                    <li><a href="{{url('category')}}">طلا</a>
                      <ul>
                        <li><a href="{{url('category')}}">تست 1</a></li>
                        <li><a href="{{url('category')}}">تست 2</a></li>
                      </ul>
                    </li>
                    <li><a href="{{url('category')}}">الماس</a> </li>
                    <li><a href="{{url('category')}}">مروارید</a>
                      <ul>
                        <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                      </ul>
                    </li>
                    <li><a href="{{url('category')}}">زیورآلات آقایان</a> </li>
                    <li><a href="{{url('category')}}">زیورآلات کودکان</a>
                      <ul>
                        <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href="{{url('category')}}">زیبایی و سلامت</a>
                  <ul>
                    <li><a href="{{url('category')}}">عطر و ادکلن</a> </li>
                    <li><a href="{{url('category')}}">آرایشی</a> </li>
                    <li><a href="{{url('category')}}">ضد آفتاب</a> </li>
                    <li><a href="{{url('category')}}">مراقبت از پوست</a> </li>
                    <li><a href="{{url('category')}}">مراقبت از چشم</a> </li>
                    <li><a href="{{url('category')}}">مراقبت از مو</a> </li>
                  </ul>
                </li>
                <li><a href="{{url('category')}}">کودک و نوزاد</a>
                  <ul>
                    <li><a href="{{url('category')}}">اسباب بازی</a> </li>
                    <li><a href="{{url('category')}}">بازی</a>
                      <ul>
                        <li><a href="{{url('category')}}">تست 25</a></li>
                      </ul>
                    </li>
                    <li><a href="{{url('category')}}">پازل</a> </li>
                    <li><a href="{{url('category')}}">سرگرمی</a> </li>
                    <li><a href="{{url('category')}}">متنوع</a> </li>
                    <li><a href="{{url('category')}}">سلامت و امنیت</a> </li>
                  </ul>
                </li>
                <li><a href="{{url('category')}}">ورزشی</a>
                  <ul>
                    <li><a href="{{url('category')}}">دوچرخه سواری</a> </li>
                    <li><a href="{{url('category')}}">دویدن</a> </li>
                    <li><a href="{{url('category')}}">شنا</a> </li>
                    <li><a href="{{url('category')}}">فوتبال</a> </li>
                    <li><a href="{{url('category')}}">گلف</a> </li>
                    <li><a href="{{url('category')}}">موج سواری</a> </li>
                  </ul>
                </li>
                <li><a href="{{url('category')}}">خانه و باغچه</a>
                  <ul>
                    <li><a href="{{url('category')}}">لوازم خواب</a> </li>
                    <li><a href="{{url('category')}}">خوراک</a> </li>
                    <li><a href="{{url('category')}}">لوازم منزل</a> </li>
                    <li><a href="{{url('category')}}">آشپزخانه</a> </li>
                    <li><a href="{{url('category')}}">روشنایی</a> </li>
                    <li><a href="{{url('category')}}">ابزارها</a> </li>
                  </ul>
                </li>
                <li><a href="{{url('category')}}">خوراک</a>
                  <ul>
                    <li><a href="{{url('category')}}">نوشیدنی</a> </li>
                    <li><a href="{{url('category')}}">تنقلات</a> </li>
                    <li><a href="{{url('category')}}">میان وعده</a> </li>
                    <li><a href="{{url('category')}}">خشک بار</a> </li>
                    <li><a href="{{url('category')}}">شکلات</a> </li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="col-md-4 col-sm-6">
              <ul class="sitemap">
                <li><a href="#">پیشنهاد های ویژه</a></li>
                <li><a href="{{url('login')}}">حساب کاربری من</a>
                  <ul>
                    <li><a href="#">اطلاعات حساب</a></li>
                    <li><a href="#">رمز عبور</a></li>
                    <li><a href="#">آدرس ها</a></li>
                    <li><a href="#">تاریخچه سفارشات</a></li>
                  </ul>
                </li>
                <li><a href="{{url('cart')}}">سبد خرید</a></li>
                <li><a href="{{url('checkout')}}">تسویه حساب</a></li>
                <li><a href="{{url('search')}}">جستجو</a></li>
                <li>اطلاعات
                  <ul class="sitemap">
                    <li><a href="{{url('about-us')}}">درباره ما</a></li>
                    <li><a href="{{url('about-us')}}">اطلاعات 0 تومان</a></li>
                    <li><a href="{{url('about-us')}}">حریم خصوصی</a></li>
                    <li><a href="{{url('about-us')}}">شرایط و قوانین</a></li>
                    <li><a href="{{url('contact-us')}}">تماس با ما</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!--Middle Part End -->
      </div>
    </div>
  </div>

@endsection

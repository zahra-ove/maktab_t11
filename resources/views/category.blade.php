@extends('layouts.layout')

@section('title')
{{'دسته بندی محصولات'}}
@endsection

@section('content')

<div id="container">
    <div class="container">
      <!-- Breadcrumb Start-->
      <ul class="breadcrumb">
        <li><a href="{{url('index')}}"><i class="fa fa-home"></i></a></li>
        <li><a href="{{url('category')}}">الکترونیکی</a></li>
      </ul>
      <!-- Breadcrumb End-->
      <div class="row">
        <!--Left Part Start -->
        <aside id="column-left" class="col-sm-3 hidden-xs">
          <h3 class="subtitle">دسته ها</h3>
          <div class="box-category">
            <ul id="cat_accordion">
              <li><a href="{{url('category')}}">البسه</a> <span class="down"></span>
                <ul>
                  <li><a href="{{url('category')}}">آقایان</a> <span class="down"></span>
                    <ul>
                      <li><a href="{{url('category')}}">زیردسته ها</a></li>
                      <li><a href="{{url('category')}}">زیردسته ها</a></li>
                      <li><a href="{{url('category')}}">زیردسته ها</a></li>
                      <li><a href="{{url('category')}}">زیردسته ها</a></li>
                      <li><a href="{{url('category')}}">زیردسته جدید</a></li>
                    </ul>
                  </li>
                  <li><a href="{{url('category')}}">بانوان</a></li>
                  <li><a href="{{url('category')}}">دخترانه</a> <span class="down"></span>
                    <ul>
                      <li><a href="{{url('category')}}">زیردسته ها</a></li>
                      <li><a href="{{url('category')}}">زیردسته جدید</a></li>
                      <li><a href="{{url('category')}}">زیردسته جدید</a></li>
                    </ul>
                  </li>
                  <li><a href="{{url('category')}}">پسرانه</a></li>
                  <li><a href="{{url('category')}}">نوزاد</a></li>
                  <li><a href="{{url('category')}}">لوازم</a> <span class="down"></span>
                    <ul>
                      <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a class="active" href="{{url('category')}}">الکترونیکی</a> <span class="down"></span>
                <ul style="display:block;">
                  <li><a href="{{url('category')}}">لپ تاپ</a> <span class="down"></span>
                    <ul>
                      <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                      <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                      <li><a href="{{url('category')}}">زیردسته جدید</a></li>
                    </ul>
                  </li>
                  <li><a href="{{url('category')}}">رومیزی</a> <span class="down"></span>
                    <ul>
                      <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                      <li><a href="{{url('category')}}">زیردسته جدید</a></li>
                      <li><a href="{{url('category')}}">زیردسته جدید</a></li>
                    </ul>
                  </li>
                  <li><a href="{{url('category')}}">دوربین</a> <span class="down"></span>
                    <ul>
                      <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                    </ul>
                  </li>
                  <li><a href="{{url('category')}}">موبایل و تبلت</a> <span class="down"></span>
                    <ul>
                      <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                      <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                    </ul>
                  </li>
                  <li><a href="{{url('category')}}">صوتی و تصویری</a> <span class="down"></span>
                    <ul>
                      <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                      <li><a href="{{url('category')}}">زیردسته جدید</a></li>
                    </ul>
                  </li>
                  <li><a href="{{url('category')}}">لوازم خانگی</a></li>
                </ul>
              </li>
              <li><a href="{{url('category')}}">کفش</a> <span class="down"></span>
                <ul>
                  <li><a href="{{url('category')}}">آقایان</a></li>
                  <li><a href="{{url('category')}}">بانوان</a> <span class="down"></span>
                    <ul>
                      <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                      <li><a href="{{url('category')}}">زیردسته ها</a></li>
                    </ul>
                  </li>
                  <li><a href="{{url('category')}}">دخترانه</a></li>
                  <li><a href="{{url('category')}}">پسرانه</a></li>
                  <li><a href="{{url('category')}}">نوزاد</a></li>
                  <li><a href="{{url('category')}}">لوازم</a><span class="down"></span>
                    <ul>
                      <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                      <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                      <li><a href="{{url('category')}}">زیردسته ها</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="{{url('category')}}">ساعت</a> <span class="down"></span>
                <ul>
                  <li><a href="{{url('category')}}">ساعت مردانه</a></li>
                  <li><a href="{{url('category')}}">ساعت زنانه</a></li>
                  <li><a href="{{url('category')}}">ساعت بچگانه</a></li>
                  <li><a href="{{url('category')}}">لوازم</a></li>
                </ul>
              </li>
              <li><a href="{{url('category')}}">جواهرات</a> <span class="down"></span>
                <ul>
                  <li><a href="{{url('category')}}">نقره</a> <span class="down"></span>
                    <ul>
                      <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                      <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                    </ul>
                  </li>
                  <li><a href="{{url('category')}}">طلا</a> <span class="down"></span>
                    <ul>
                      <li><a href="{{url('category')}}">تست 1</a></li>
                      <li><a href="{{url('category')}}">تست 2</a></li>
                    </ul>
                  </li>
                  <li><a href="{{url('category')}}">الماس</a></li>
                  <li><a href="{{url('category')}}">مروارید</a> <span class="down"></span>
                    <ul>
                      <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                    </ul>
                  </li>
                  <li><a href="{{url('category')}}">زیورآلات آقایان</a></li>
                  <li><a href="{{url('category')}}">زیورآلات کودکان</a> <span class="down"></span>
                    <ul>
                      <li><a href="{{url('category')}}">زیردسته های جدید</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="{{url('category')}}">زیبایی و سلامت</a> <span class="down"></span>
                <ul>
                  <li><a href="{{url('category')}}">عطر و ادکلن</a></li>
                  <li><a href="{{url('category')}}">آرایشی</a></li>
                  <li><a href="{{url('category')}}">ضد آفتاب</a></li>
                  <li><a href="{{url('category')}}">مراقبت از پوست</a></li>
                  <li><a href="{{url('category')}}">مراقبت از چشم</a></li>
                  <li><a href="{{url('category')}}">مراقبت از مو</a></li>
                </ul>
              </li>
              <li><a href="{{url('category')}}">کودک و نوزاد</a> <span class="down"></span>
                <ul>
                  <li><a href="{{url('category')}}">اسباب بازی</a></li>
                  <li><a href="{{url('category')}}">بازی</a> <span class="down"></span>
                    <ul>
                      <li><a href="{{url('category')}}">تست 25</a></li>
                    </ul>
                  </li>
                  <li><a href="{{url('category')}}">پازل</a></li>
                  <li><a href="{{url('category')}}">سرگرمی</a></li>
                  <li><a href="{{url('category')}}">متنوع</a></li>
                  <li><a href="{{url('category')}}">سلامت و امنیت</a></li>
                </ul>
              </li>
              <li><a href="{{url('category')}}">ورزشی</a> <span class="down"></span>
                <ul>
                  <li><a href="{{url('category')}}">دوچرخه سواری</a></li>
                  <li><a href="{{url('category')}}">دویدن</a></li>
                  <li><a href="{{url('category')}}">شنا</a></li>
                  <li><a href="{{url('category')}}">فوتبال</a></li>
                  <li><a href="{{url('category')}}">گلف</a></li>
                  <li><a href="{{url('category')}}">موج سواری</a></li>
                </ul>
              </li>
              <li><a href="{{url('category')}}">خانه و باغچه</a> <span class="down"></span>
                <ul>
                  <li><a href="{{url('category')}}">لوازم خواب</a></li>
                  <li><a href="{{url('category')}}">خوراک</a></li>
                  <li><a href="{{url('category')}}">لوازم منزل</a></li>
                  <li><a href="{{url('category')}}">آشپزخانه</a></li>
                  <li><a href="{{url('category')}}">روشنایی</a></li>
                  <li><a href="{{url('category')}}">ابزارها</a></li>
                </ul>
              </li>
              <li><a href="{{url('category')}}">خوراک</a> <span class="down"></span>
                <ul>
                  <li><a href="{{url('category')}}">نوشیدنی</a></li>
                  <li><a href="{{url('category')}}">تنقلات</a></li>
                  <li><a href="{{url('category')}}">میان وعده</a></li>
                  <li><a href="{{url('category')}}">خشک بار</a></li>
                  <li><a href="{{url('category')}}">شکلات</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <h3 class="subtitle">پرفروش ها</h3>
          <div class="side-item">
            <div class="product-thumb clearfix">
              <div class="image"><a href="{{url('product')}}"><img src="image/product/apple_cinema_30-50x50.jpg" alt="تی شرت کتان مردانه" title="تی شرت کتان مردانه" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="{{url('product')}}">تی شرت کتان مردانه</a></h4>
                <p class="price"><span class="price-new">110000 تومان</span> <span class="price-old">122000 تومان</span> <span class="saving">-10%</span></p>
              </div>
            </div>
            <div class="product-thumb clearfix">
              <div class="image"><a href="{{url('product')}}"><img src="image/product/iphone_1-50x50.jpg" alt="آیفون 7" title="آیفون 7" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="{{url('product')}}">آیفون 7</a></h4>
                <p class="price"> 2200000 تومان </p>
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span></div>
              </div>
            </div>
            <div class="product-thumb clearfix">
              <div class="image"><a href="{{url('product')}}"><img src="image/product/macbook_1-50x50.jpg" alt="آیدیا پد یوگا" title="آیدیا پد یوگا" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="{{url('product')}}">آیدیا پد یوگا</a></h4>
                <p class="price"> 900000 تومان </p>
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
              </div>
            </div>
            <div class="product-thumb clearfix">
              <div class="image"><a href="{{url('product')}}"><img src="image/product/sony_vaio_1-50x50.jpg" alt="کفش راحتی مردانه" title="کفش راحتی مردانه" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="{{url('product')}}">کفش راحتی مردانه</a></h4>
                <p class="price"> <span class="price-new">32000 تومان</span> <span class="price-old">12 میلیون تومان</span> <span class="saving">-25%</span> </p>
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
              </div>
            </div>
            <div class="product-thumb clearfix">
              <div class="image"><a href="{{url('product')}}"><img src="image/product/FinePix-Long-Zoom-Camera-50x50.jpg" alt="دوربین فاین پیکس" title="دوربین فاین پیکس" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="{{url('product')}}">دوربین فاین پیکس</a></h4>
                <p class="price">122000 تومان</p>
              </div>
            </div>
          </div>
          <h3 class="subtitle">ویژه</h3>
          <div class="side-item">
            <div class="product-thumb clearfix">
              <div class="image"><a href="{{url('product')}}"><img src="image/product/macbook_pro_1-50x50.jpg" alt=" کتاب آموزش باغبانی " title=" کتاب آموزش باغبانی " class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="{{url('product')}}">کتاب آموزش باغبانی</a></h4>
                <p class="price"> <span class="price-new">98000 تومان</span> <span class="price-old">120000 تومان</span> <span class="saving">-26%</span> </p>
              </div>
            </div>
            <div class="product-thumb clearfix">
              <div class="image"><a href="{{url('product')}}"><img src="image/product/samsung_tab_1-50x50.jpg" alt="تبلت ایسر" title="تبلت ایسر" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="{{url('product')}}">تبلت ایسر</a></h4>
                <p class="price"> <span class="price-new">98000 تومان</span> <span class="price-old">240000 تومان</span> <span class="saving">-5%</span> </p>
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
              </div>
            </div>
            <div class="product-thumb clearfix">
              <div class="image"><a href="{{url('product')}}"><img src="image/product/apple_cinema_30-50x50.jpg" alt="تی شرت کتان مردانه" title="تی شرت کتان مردانه" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="http://demo.harnishdesign.net/opencart/marketshop/v1/index.php?route=product/product&amp;product_id=42">تی شرت کتان مردانه</a></h4>
                <p class="price"> <span class="price-new">110000 تومان</span> <span class="price-old">122000 تومان</span> <span class="saving">-10%</span> </p>
              </div>
            </div>
            <div class="product-thumb clearfix">
              <div class="image"><a href="{{url('product')}}"><img src="image/product/nikon_d300_1-50x50.jpg" alt="دوربین دیجیتال حرفه ای" title="دوربین دیجیتال حرفه ای" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="{{url('product')}}">دوربین دیجیتال حرفه ای</a></h4>
                <p class="price"> <span class="price-new">92000 تومان</span> <span class="price-old">98000 تومان</span> <span class="saving">-6%</span> </p>
              </div>
            </div>
            <div class="product-thumb clearfix">
              <div class="image"><a href="{{url('product')}}"><img src="image/product/nikon_d300_5-50x50.jpg" alt="محصولات مراقبت از مو" title="محصولات مراقبت از مو" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="{{url('product')}}">محصولات مراقبت از مو</a></h4>
                <p class="price"> <span class="price-new">66000 تومان</span> <span class="price-old">90000 تومان</span> <span class="saving">-27%</span> </p>
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
              </div>
            </div>
            <div class="product-thumb clearfix">
              <div class="image"><a href="{{url('product')}}"><img src="image/product/macbook_air_1-50x50.jpg" alt="لپ تاپ ایلین ور" title="لپ تاپ ایلین ور" class="img-responsive" /></a></div>
              <div class="caption">
                <h4><a href="{{url('product')}}">لپ تاپ ایلین ور</a></h4>
                <p class="price"> <span class="price-new">10 میلیون تومان</span> <span class="price-old">12 میلیون تومان</span> <span class="saving">-5%</span> </p>
              </div>
            </div>
          </div>
          <div class="banner owl-carousel">
            <div class="item"> <a href="#"><img src="image/banner/small-banner1-265x350.jpg" alt="small banner" class="img-responsive" /></a> </div>
            <div class="item"> <a href="#"><img src="image/banner/small-banner-265x350.jpg" alt="small banner1" class="img-responsive" /></a> </div>
          </div>
        </aside>
        <!--Left Part End -->
        <!--Middle Part Start-->
        <div id="content" class="col-sm-9">
          <h1 class="title">الکترونیکی</h1>
          <h3 class="subtitle">بهبود جستجو</h3>
          <div class="category-list-thumb row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4"> <a href="{{url('category')}}"><img src="image/no_image.jpg" alt="لپ تاپ (6)" /></a> <a href="{{url('category')}}">لپ تاپ (6)</a> </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4"> <a href="{{url('category')}}"><img src="image/no_image.jpg" alt="رومیزی (1)" /></a> <a href="{{url('category')}}">رومیزی (1)</a> </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4"> <a href="{{url('category')}}"><img src="image/no_image.jpg" alt="دوربین (2)" /></a> <a href="{{url('category')}}">دوربین (2)</a> </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4"> <a href="{{url('category')}}"><img src="image/no_image.jpg" alt="موبایل و تبلت (4)" /></a> <a href="{{url('category')}}">موبایل و تبلت (4)</a> </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4"> <a href="{{url('category')}}"><img src="image/no_image.jpg" alt="صوتی و تصویری (11)" /></a> <a href="{{url('category')}}">صوتی و تصویری (11)</a> </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4"> <a href="{{url('category')}}"><img src="image/no_image.jpg" alt="لوازم خانگی (2)" /></a> <a href="{{url('category')}}">لوازم خانگی (2)</a> </div>
          </div>
          <div class="product-filter">
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <div class="btn-group">
                  <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="List"><i class="fa fa-th-list"></i></button>
                  <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="Grid"><i class="fa fa-th"></i></button>
                </div>
                <a href="{{url('compare')}}" id="compare-total">محصولات مقایسه (0)</a> </div>
              <div class="col-sm-2 text-right">
                <label class="control-label" for="input-sort">مرتب سازی :</label>
              </div>
              <div class="col-md-3 col-sm-2 text-right">
                <select id="input-sort" class="form-control col-sm-3">
                  <option value="" selected="selected">پیشفرض</option>
                  <option value="">نام (الف - ی)</option>
                  <option value="">نام (ی - الف)</option>
                  <option value="">قیمت (کم به زیاد)</option></option>
                  <option value="">قیمت (زیاد به کم)</option>
                  <option value="">امتیاز (بیشترین)</option>
                  <option value="">امتیاز (کمترین)</option>
                  <option value="">مدل (A - Z)</option>
                  <option value="">مدل (Z - A)</option>
                </select>
              </div>
              <div class="col-sm-1 text-right">
                <label class="control-label" for="input-limit">نمایش :</label>
              </div>
              <div class="col-sm-2 text-right">
                <select id="input-limit" class="form-control">
                  <option value="" selected="selected">20</option>
                  <option value="">25</option>
                  <option value="">50</option>
                  <option value="">75</option>
                  <option value="">100</option>
                </select>
              </div>
            </div>
          </div>
          <br />
          <div class="row products-category">
            <div class="product-layout product-list col-xs-12">
              <div class="product-thumb">
                <div class="image"><a href="{{url('product')}}"><img src="image/product/macbook_pro_1-200x200.jpg" alt=" کتاب آموزش باغبانی " title=" کتاب آموزش باغبانی " class="img-responsive" /></a></div>
                <div>
                  <div class="caption">
                    <h4><a href="{{url('product')}}"> کتاب آموزش باغبانی </a></h4>
                    <p class="description"> آخرین دستاورد های روز دنیا

                      شامل تمام اطلاعاتی که به آن نیاز خواهید داشت ...</p>
                    <p class="price"> <span class="price-new">98000 تومان</span> <span class="price-old">120000 تومان</span> <span class="saving">-26%</span> <span class="price-tax">بدون مالیات : 90000 تومان</span> </p>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی ها" onClick=""><i class="fa fa-heart"></i> <span>افزودن به علاقه مندی ها</span></button>
                      <button type="button" data-toggle="tooltip" title="مقایسه این محصول" onClick=""><i class="fa fa-exchange"></i> <span>مقایسه این محصول</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-layout product-list col-xs-12">
              <div class="product-thumb">
                <div class="image"><a href="{{url('product')}}l"><img src="image/product/nikon_d300_1-200x200.jpg" alt="دوربین دیجیتال حرفه ای" title="دوربین دیجیتال حرفه ای" class="img-responsive" /></a></div>
                <div>
                  <div class="caption">
                    <h4><a href="{{url('product')}}l">دوربین دیجیتال حرفه ای</a></h4>
                    <p class="description"> طراحی حرفه ای با بهره گیری از آخرین تکنولوژی روز برای رسیدن به تجربه ای کاملا متفاوت در عکاسی حرفه ای ...</p>
                    <p class="price"> <span class="price-new">92000 تومان</span> <span class="price-old">98000 تومان</span> <span class="saving">-6%</span> <span class="price-tax">بدون مالیات : 75000 تومان</span> </p>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick="cart.add('31');"><span>افزودن به سبد</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی ها" onClick=""><i class="fa fa-heart"></i> <span>افزودن به علاقه مندی ها</span></button>
                      <button type="button" data-toggle="tooltip" title="مقایسه این محصول" onClick=""><i class="fa fa-exchange"></i> <span>مقایسه این محصول</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-layout product-list col-xs-12">
              <div class="product-thumb">
                <div class="image"><a href="{{url('product')}}l"><img src="image/product/FinePix-Long-Zoom-Camera-200x200.jpg" alt="دوربین فاین پیکس" title="دوربین فاین پیکس" class="img-responsive" /></a></div>
                <div>
                  <div class="caption">
                    <h4><a href="{{url('product')}}">دوربین فاین پیکس</a></h4>
                    <p class="description">محصولات 8
                      ..</p>
                    <p class="price"> 122000 تومان <span class="price-tax">بدون مالیات : 100000 تومان</span> </p>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی ها" onClick=""><i class="fa fa-heart"></i> <span>افزودن به علاقه مندی ها</span></button>
                      <button type="button" data-toggle="tooltip" title="مقایسه این محصول" onClick=""><i class="fa fa-exchange"></i> <span>مقایسه این محصول</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-layout product-list col-xs-12">
              <div class="product-thumb">
                <div class="image"><a href="{{url('product')}}"><img src="image/product/ipod_shuffle_1-200x200.jpg" alt="لپ تاپ hp پاویلیون" title="لپ تاپ hp پاویلیون" class="img-responsive" /></a></div>
                <div>
                  <div class="caption">
                    <h4><a href="{{url('product')}}">لپ تاپ hp پاویلیون</a></h4>
                    <p class="description">بهترین انتخاب.
                      در میان سیستم های میان رده. مناسب برای کارهای روزمره..</p>
                    <p class="price"> 122000 تومان <span class="price-tax">بدون مالیات : 100000 تومان</span> </p>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی ها" onClick=""><i class="fa fa-heart"></i> <span>افزودن به علاقه مندی ها</span></button>
                      <button type="button" data-toggle="tooltip" title="مقایسه این محصول" onClick=""><i class="fa fa-exchange"></i> <span>مقایسه این محصول</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-layout product-list col-xs-12">
              <div class="product-thumb">
                <div class="image"><a href="{{url('product')}}"><img src="image/product/palm_treo_pro_1-200x200.jpg" alt="موبایل HTC M7" title="موبایل HTC M7" class="img-responsive" /></a></div>
                <div>
                  <div class="caption">
                    <h4><a href="{{url('product')}}">موبایل HTC M7</a></h4>
                    <p class="description">تجربه ای جدید از به کار گیری دیوایس های موبایل در تمامی فعالیت های روزانه شما ...</p>
                    <p class="price"> 377000 تومان <span class="price-tax">بدون مالیات : 279000 تومان</span> </p>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی ها" onClick=""><i class="fa fa-heart"></i> <span>افزودن به علاقه مندی ها</span></button>
                      <button type="button" data-toggle="tooltip" title="مقایسه این محصول" onClick=""><i class="fa fa-exchange"></i> <span>مقایسه این محصول</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-layout product-list col-xs-12">
              <div class="product-thumb">
                <div class="image"><a href="{{url('product')}}"><img src="image/product/macbook_1-200x200.jpg" alt="آیدیا پد یوگا" title="آیدیا پد یوگا" class="img-responsive" /></a></div>
                <div>
                  <div class="caption">
                    <h4><a href="{{url('product')}}">آیدیا پد یوگا</a></h4>
                    <p class="description"> پردازشگر اینتل core i7

                      با به کار گیری پردازشگر قدرتمند اینتل با سرعت 2.1 گیگاهرتز ...</p>
                    <p class="price"> 900000 تومان <span class="price-tax">بدون مالیات : 800000 تومان</span> </p>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی ها" onClick=""><i class="fa fa-heart"></i> <span>افزودن به علاقه مندی ها</span></button>
                      <button type="button" data-toggle="tooltip" title="مقایسه این محصول" onClick=""><i class="fa fa-exchange"></i> <span>مقایسه این محصول</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-layout product-list col-xs-12">
              <div class="product-thumb">
                <div class="image"><a href="{{url('product')}}"><img src="image/product/iphone_1-200x200.jpg" alt="آیفون 7" title="آیفون 7" class="img-responsive" /></a></div>
                <div>
                  <div class="caption">
                    <h4><a href="{{url('product')}}">آیفون 7</a></h4>
                    <p class="description">انقلابی در تمامی مدل های آیفون تا امروز با احساسی بی نظیر از به کار گیری ...</p>
                    <p class="price"> 2200000 تومان <span class="price-tax">بدون مالیات : 2 میلیون تومان</span> </p>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی ها" onClick=""><i class="fa fa-heart"></i> <span>افزودن به علاقه مندی ها</span></button>
                      <button type="button" data-toggle="tooltip" title="مقایسه این محصول" onClick=""><i class="fa fa-exchange"></i> <span>مقایسه این محصول</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-layout product-list col-xs-12">
              <div class="product-thumb">
                <div class="image"><a href="{{url('product')}}"><img src="image/product/macbook_air_1-200x200.jpg" alt="لپ تاپ ایلین ور" title="لپ تاپ ایلین ور" class="img-responsive" /></a></div>
                <div>
                  <div class="caption">
                    <h4><a href="{{url('product')}}">لپ تاپ ایلین ور</a></h4>
                    <p class="description">لپ تاپ های نام آشنای Alien Ware محصولی بی نظیر از کمپانی دل ...</p>
                    <p class="price"> <span class="price-new">10 میلیون تومان</span> <span class="price-old">12 میلیون تومان</span> <span class="saving">-5%</span> <span class="price-tax">بدون مالیات : 9 میلیون تومان</span> </p>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی ها" onClick=""><i class="fa fa-heart"></i> <span>افزودن به علاقه مندی ها</span></button>
                      <button type="button" data-toggle="tooltip" title="مقایسه این محصول" onClick=""><i class="fa fa-exchange"></i> <span>مقایسه این محصول</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-layout product-list col-xs-12">
              <div class="product-thumb">
                <div class="image"><a href="{{url('product')}}"><img src="image/product/ipod_nano_1-200x200.jpg" alt="پخش کننده موزیک" title="پخش کننده موزیک" class="img-responsive" /></a></div>
                <div>
                  <div class="caption">
                    <h4><a href="{{url('product')}}">پخش کننده موزیک</a></h4>
                    <p class="description"> پخش کننده همراه در جیب شما.

                      کوچک و سبک با کیفیت پخش بسیار بالا و امکانات متنوع برای استفاده ی همه روزه ...</p>
                    <p class="price"> 122000 تومان <span class="price-tax">بدون مالیات : 100000 تومان</span> </p>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی ها" onClick=""><i class="fa fa-heart"></i> <span>افزودن به علاقه مندی ها</span></button>
                      <button type="button" data-toggle="tooltip" title="مقایسه این محصول" onClick=""><i class="fa fa-exchange"></i> <span>مقایسه این محصول</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-layout product-list col-xs-12">
              <div class="product-thumb">
                <div class="image"><a href="{{url('product')}}"><img src="image/product/ipod_classic_1-200x200.jpg" alt="آیپاد نسل 5" title="آیپاد نسل 5" class="img-responsive" /></a></div>
                <div>
                  <div class="caption">
                    <h4><a href="{{url('product')}}">آیپاد نسل 5</a></h4>
                    <p class="description"> و باز هم امکانات بیشتر.

                      عرضه شده در نسخه های 80 و 100 گیگابایتی در رنگ های متنوع...</p>
                    <p class="price"> 122000 تومان <span class="price-tax">بدون مالیات : 100000 تومان</span> </p>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی ها" onClick=""><i class="fa fa-heart"></i> <span>افزودن به علاقه مندی ها</span></button>
                      <button type="button" data-toggle="tooltip" title="مقایسه این محصول" onClick=""><i class="fa fa-exchange"></i> <span>مقایسه این محصول</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-layout product-list col-xs-12">
              <div class="product-thumb">
                <div class="image"><a href="{{url('product')}}"><img src="image/product/ipod_touch_1-200x200.jpg" alt="سامسونگ گلکسی s7" title="سامسونگ گلکسی s7" class="img-responsive" /></a></div>
                <div>
                  <div class="caption">
                    <h4><a href="{{url('product')}}">سامسونگ گلکسی s7</a></h4>
                    <p class="description">تکنولوژی تاچ بی نظیر و بی همتا.
                     با امکاناتی که شاید حتی تا امروز فکرشان را هم نمیکردید ...</p>
                    <p class="price"> <span class="price-new">62000 تومان</span> <span class="price-old">122000 تومان</span> <span class="saving">-50%</span> <span class="price-tax">بدون مالیات : 50000 تومان</span> </p>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی ها" onClick=""><i class="fa fa-heart"></i> <span>افزودن به علاقه مندی ها</span></button>
                      <button type="button" data-toggle="tooltip" title="مقایسه این محصول" onClick=""><i class="fa fa-exchange"></i> <span>مقایسه این محصول</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-layout product-list col-xs-12">
              <div class="product-thumb">
                <div class="image"><a href="{{url('product')}}"><img src="image/product/samsung_tab_1-200x200.jpg" alt="تبلت ایسر" title="تبلت ایسر" class="img-responsive" /></a></div>
                <div>
                  <div class="caption">
                    <h4><a href="{{url('product')}}">تبلت ایسر</a></h4>
                    <p class="description">باریک ترین تبلت دنیا با عمر باطری بسیار بالا و کاربرد در انواع فعالیت های روزانه.</p>
                    <p class="price"> <span class="price-new">98000 تومان</span> <span class="price-old">240000 تومان</span> <span class="saving">-5%</span> <span class="price-tax">بدون مالیات : 80000 تومان</span> </p>
                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                  </div>
                  <div class="button-group">
                    <button class="btn-primary" type="button" onClick=""><span>افزودن به سبد</span></button>
                    <div class="add-to-links">
                      <button type="button" data-toggle="tooltip" title="افزودن به علاقه مندی ها" onClick=""><i class="fa fa-heart"></i> <span>افزودن به علاقه مندی ها</span></button>
                      <button type="button" data-toggle="tooltip" title="مقایسه این محصول" onClick=""><i class="fa fa-exchange"></i> <span>مقایسه این محصول</span></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 text-left">
              <ul class="pagination">
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">&gt;</a></li>
                <li><a href="#">&gt;|</a></li>
              </ul>
            </div>
            <div class="col-sm-6 text-right">نمایش 1 تا 12 از 15 (مجموع 2 صفحه)</div>
          </div>
        </div>
        <!--Middle Part End -->
      </div>
    </div>
</div>
<script>
    // document.getElementsByTagName("body")[0].innerHTML=" ";
    </script>

@endsection

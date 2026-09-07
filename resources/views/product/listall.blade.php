@extends('layouts.main.master')
@section('title')
{{$title}}
@endsection
@section('description')
Danh sách {{$title}}
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('js')
<script src="{{asset('frontend/js/filter.js')}}" defer></script>
<script src="{{asset('frontend/js/mew_collection_script.js')}}" defer></script>
@endsection
@section('css')
<link rel="preload" as="style"  href="{{asset('frontend/css/collection_style.scss.css')}}" type="text/css">
<link href="{{asset('frontend/css/collection_style.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection
@section('content')
<div class="contentWarp ">
   <div class="opacity_filter"></div>
   <div class="breadcrumbs ">
      <div class="container position-relative">
         <ul class="breadcrumb align-items-center m-0 pl-0 pr-0 small pt-2 pb-2 ">
            <li class="home">
               <a href="/" title="Trang chủ">
                  <svg width="12" height="10.633">
                     <use href="#svg-home"></use>
                  </svg>
                  Trang chủ
               </a>
               <span class="slash-divider ml-2 mr-2">/</span>
            </li>
            <li> {{$title}}</li>
         </ul>
      </div>
   </div>
   <section class="collection-layout mt-3 mb-3">
      <div class="container">
         <div class="rounded p-2 p-md-3 ">
            <h1 class="collection-name font-weight-bold mb-lg-3 text-uppercase pb-2 pt-2 mb-2 d-none">
               {{$title}}
            </h1>
            <div class="row">
               <div class="col-12 col-lg-9 order-lg-2 pt-3 pt-lg-0">
                  <div class="sortPagiBar pb-2 border-bottom">
                     <ul class="aside-content filter-vendor list-unstyled mb-0 d-flex align-items-baseline gap-10">
                        <li>
                           <span class="h6 title-head m-0 pt-2 pb-2 font-weight-bold text-gold">Sắp xếp theo: </span>
                        </li>
                        <li class="filter-item filter-item--check-box">
                           <label class="d-flex align-items-baseline pt-1 pb-1 m-0">
                           <input type="radio" class="d-none sortby-default" name="sortBy" onclick="sortby()" value="default" checked="checked">
                           <span class="fa2 px-2 py-1 rounded border-gradient-gold">Mặc định</span> 
                           </label>
                        </li>
                        <li class="filter-item filter-item--check-box">
                           <label class="d-flex align-items-baseline pt-1 pb-1 m-0">
                           <input type="radio" class="d-none sortby-price-asc" name="sortBy" onclick="sortby()" value="price-asc">
                           <span class="fa2 px-2 py-1 rounded border-gradient-gold">Giá tăng dần</span> 
                           </label>
                        </li>
                        <li class="filter-item filter-item--check-box">
                           <label class="d-flex align-items-baseline pt-1 pb-1 m-0">
                           <input type="radio" class="d-none sortby-price-desc" name="sortBy" onclick="sortby()" value="price-desc">
                           <span class="fa2 px-2 py-1 rounded border-gradient-gold">Giá giảm dần</span> 
                           </label>
                        </li>
                        <li class="filter-item filter-item--check-box">
                           <label class="d-flex align-items-baseline pt-1 pb-1 m-0">
                           <input type="radio" class="d-none sortby-created-asc" name="sortBy" onclick="sortby()" value="created-asc">
                           <span class="fa2 px-2 py-1 rounded border-gradient-gold">Mới nhất </span> 
                           </label>
                        </li>
                     </ul>
                  </div>
                  <div class="collection">
                     <div class="category-products position-relative mt-3 mb-3">
                        <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
                           <input type="hidden" id="cate_slug" value="{{$cate_slug}}" />
                           <input type="hidden" id="type_slug" value="{{$type_slug}}" />
                           <input type="hidden" id="type_two_slug" value="{{$type_two_slug}}" />
                        <div class="category-products position-relative mt-4 mb-4 product-list-filter">
                           @if (count($list) > 0)
                           <div class="row slider-items ">
                              @foreach ($list as $item)
                              <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 product-grid-item-lm mb-3">
                                 @include('layouts.product.item',['pro'=>$item])
                              </div>
                              @endforeach
                           </div>
                           <div id="pagination_main" style="text-align: center;">
                              {{$list->links()}}
                           </div>
                              @else 
                              <div class="row slider-items ">
                                 <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 product-grid-item-lm mb-3">
                                    <h3>Nội dung đang được cập nhật</h3>
                                 </div>
                              </div>
                           @endif
                           
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-12 col-lg-3 order-lg-1">
                  <div class="sidebar sidebar_mobi m-0 p-2 p-lg-0 mt-lg-1 d-flex flex-column">
                     <div class="heading d-none">
                        <div class="h2 title-head font-weight-bold big text-uppercase mt-2 mb-0 text-gold">
                           Bộ lọc sản phẩm
                        </div>
                        <p class="font-italic pt-2 pb-2 mb-0 text-gold">Giúp lọc nhanh sản phẩm bạn tìm kiếm</p>
                     </div>
                     <div class="aside-filter mb-3 modal-open w-100 pr-0 pr-md-2 order-lg-3 clearfix">
                        <div class="filter-container row">
                           <aside class="aside-item filter-price mb-3 col-12 col-sm-12 col-lg-12">
                              <div class="h2 title-head m-0 pt-2 pb-2 font-weight-bold text-gold">Lọc giá</div>
                              <div class="aside-content content_price">
                                 <ul>
                     
                                    <li class="filter-item filter-item--check-box filter-item--green">
                                       <span>
                                          <label data-filter="200-000d" for="filter-duoi-200-000d">
                                             <input type="checkbox" name="filterPrice"  onclick="toggleFilterPrice(this)" id="filter-duoi-200-000d" value="(>=0AND<=200000]">
                                             <i class="fa"></i>
                                             Dưới 200.000đ
                                          </label>
                                       </span>
                                    </li>
                     
                     
                                    <li class="filter-item filter-item--check-box filter-item--green">
                                       <span>
                                          <label data-filter="500-000d" for="filter-200-000d-300-000d">
                                             <input type="checkbox" id="filter-200-000d-300-000d" name="filterPrice"  onclick="toggleFilterPrice(this)" value="(>=200000AND<=300000]">
                                             <i class="fa"></i> 
                                             Từ 200.000đ - 300.000đ							
                                          </label>
                                       </span>
                                    </li>	
                     
                                    <li class="filter-item filter-item--check-box filter-item--green">
                                       <span>
                                          <label data-filter="1-000-000d" for="filter-300-000d-400-000d">
                                             <input type="checkbox" id="filter-300-000d-400-000d" name="filterPrice"  onclick="toggleFilterPrice(this)" value="(>=300000AND<=400000]">
                                             <i class="fa"></i> 
                                             Từ 300.000đ - 400.000đ							
                                          </label>
                                       </span>
                                    </li>	
                     
                                    <li class="filter-item filter-item--check-box filter-item--green">
                                       <span>
                                          <label data-filter="2-000-000d" for="filter-400-000d-500-000d">
                                             <input type="checkbox" id="filter-400-000d-500-000d" name="filterPrice"  onclick="toggleFilterPrice(this)" value="(>=400000AND<=500000]">
                                             <i class="fa"></i> 
                                             Từ 400.000đ - 500.000đ							
                                          </label>
                                       </span>
                                    </li>	
                     
                                    <li class="filter-item filter-item--check-box filter-item--green">
                                       <span>
                                          <label data-filter="5-000-000d" for="filter-500-000d-700-000d">
                                             <input type="checkbox" id="filter-500-000d-700-000d" name="filterPrice"  onclick="toggleFilterPrice(this)" value="(>=500000AND<=700000]">
                                             <i class="fa"></i>
                                             Từ 500.000đ - 700.000đ							
                                          </label>
                                       </span>
                                    </li>	
                                    <li class="filter-item filter-item--check-box filter-item--green">
                                       <span>
                                          <label data-filter="5-000-000d" for="filter-tren700-000d-1000000">
                                             <input type="checkbox" id="filter-tren700-000d-1000000" name="filterPrice"  onclick="toggleFilterPrice(this)" value="(>=700000AND<=1000000]">
                                             <i class="fa"></i>
                                             Từ 700.000đ - 1 triệu
                                          </label>
                                       </span>
                                    </li>
                                    <li class="filter-item filter-item--check-box filter-item--green">
                                       <span>
                                          <label data-filter="5-000-000d" for="filter-tren1-000-000d">
                                             <input type="checkbox" id="filter-tren1-000-000d" name="filterPrice"  onclick="toggleFilterPrice(this)" value="(>=1000000AND<=100000000]" >
                                             <i class="fa"></i>
                                             Trên 1 triệu
                                          </label>
                                       </span>
                                    </li>
                     
                                 </ul>
                              </div>
                           </aside>
                           @foreach ($filter as $item)
                           <aside class="aside-item filter-vendor mb-3 col-12 col-sm-4 col-lg-12">
                               <div class="h2 title-head m-0 pt-2 pb-2 font-weight-bold">{{$item->name}}</div>
                               <div class="aside-content filter-group">
                                  <ul class="filter-vendor filter-grid list-unstyled m-0">
                                   @foreach ($item->tags as $tag)
                                   <li class="filter-item filter-item--check-box  ">
                                       <label class="d-flex align-items-baseline m-0 {{$tag->slug}}" >
                                       <input type="checkbox" id="filter-{{$tag->slug}}" class="d-none" name="fillter" onclick="toggleFilter(this)"  value="{{$tag->slug.'-'.$item->slug}}">
                                       <span class="fa2 px-2 py-1 border-gradient-gold">{{$tag->name}}</span>
                                       </label>
                                    </li>
                                   @endforeach
                                  </ul>
                               </div>
                            </aside>
                           @endforeach
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="restaurant-tab-area pb-40">
      <div class="container">
         <div class="section-title mb-20 text-center">
            <img class="lazy" src="{{url('frontend/images/placeholder_1x1.png')}}" data-src="{{url('frontend/images/line_top.png')}}" alt="line top">
            <h2 class="text-gold">Danh mục chính</h2>
            <img class="lazy" src="{{url('frontend/images/placeholder_1x1.png')}}" data-src="{{url('frontend/images/line_bottom.png')}}" alt="line bttom">
         </div>
         <ul class="restaurant-rood-list row justify-content-center nav nav-pills mb-30" id="restaurant-tab" role="tablist">
            @foreach ($categoryhome as $item)
            <li class="nav-item col-lg-2 col-md-3 col-sm-4 col-6">
               <a class="nav-link" data-toggle="pill" href="{{route('allListProCate',['danhmuc'=>$item->slug])}}">
               <img width="50" src="{{$item->avatar}}" alt="">
               <span class="title">{{languageName($item->name)}}</span>
               </a>
            </li>
            @endforeach
         </ul>
      </div>
   </section>
</div>
@endsection
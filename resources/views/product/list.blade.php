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
@section('script')
<link rel="preload" as="script" href="{{asset('frontend/js/col.js')}}" />
<script src="{{asset('frontend/js/col.js')}}" type="text/javascript"></script>
@endsection
@section('css')
<link href="{{asset('frontend/css/breadcrumb_style.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="preload" as="style"  href="{{asset('frontend/css/collection_style.scss.css')}}" type="text/css">
<link href="{{asset('frontend/css/collection_style.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection
@section('content')
<div class="layout-collection">
   <section class="bread-crumb">
      <div class="container">
         <ul class="breadcrumb" >
            <li class="home">
               <a  href="/" title="Trang chủ"><span >Trang chủ</span></a>						
               <span class="mr_lr">
                  &nbsp;
                  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                     <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path>
                  </svg>
                  &nbsp;
               </span>
            </li>
            <li><strong ><span> {{$title}}</span></strong></li>
         </ul>
      </div>
   </section>
   <div class="container">
      <div class="row">
         <aside class="dqdt-sidebar left-content">
            <div class="close-filters" title="Đóng bộ lọc">
               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                  <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
               </svg>
            </div>
            <div class="section-box-bg">
               <div class="filter-content">
                  <div class="filter-container">
                     <!-- Lọc giá -->
                     <aside class="aside-item filter-price">
                        <div class="aside-title">
                           <h2><span>Chọn mức giá</span></h2>
                        </div>
                        <div class="aside-content filter-group content_price">
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
                     <!-- End Lọc giá -->
                   
                     <!-- Lọc tag 3 -->
                     @foreach ($filter as $item)
                     <aside class="aside-item filter-tag">
                        <div class="aside-title">
                           <h2 class="title-head margin-top-0">
                              <span>{{$item->name}}</span>
                           </h2>
                        </div>
                        <div class="aside-content filter-group">
                           <ul>
                              @foreach ($item->tags as $tag)
                              <li class="filter-item filter-item--check-box filter-item--green">
                                 <span>
                                 <label for="filter-{{$tag->slug}}">
                                 <input type="checkbox" id="filter-{{$tag->slug}}" onclick="toggleFilter(this)" name="fillter" value="{{$tag->slug.'-'.$item->slug}}">
                                 <i class="fa"></i>
                                 {{$tag->name}}
                                 </label>
                                 </span>
                              </li>
                              @endforeach
                           </ul>
                        </div>
                        </aside>
                     @endforeach

                  </div>
               </div>
            </div>
         </aside>
         @if ($cateno->path != '')
         <div class="col-12 col-banner">
            <a href="" title="click xem ngay" class="duration-300  has-aspect-1">
               <picture>
                  <source  media="(max-width: 480px)" srcset="">
                  <img alt="Banner top" width="1250" height="306" class="lazyload" data-src="{{$cateno->path}}" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" >
               </picture>
            </a>
         </div>
         @endif
         <div class="col-12">
            <div class="col-title">
               <h1>{{$title}}</h1>
               <div class="title-separator">
                  <div class="separator-center"></div>
               </div>
            </div>
            <input type="hidden" name="hidden_page" id="hidden_page" value="1" />
            <input type="hidden" id="cate_slug" value="{{$cate_slug}}" />
            <input type="hidden" id="type_slug" value="{{$type_slug}}" />
            <input type="hidden" id="type_two_slug" value="{{$type_two_slug}}" />
            
            <div class="col-desc">
               {!!$content!!}
            </div>
         </div>
         <div class="block-collection col-lg-12 col-12">
            <div class="category-products products-view products-view-grid list_hover_pro">
               <div class="filter-containers">
                  <div class="sort-cate clearfix">
                     <div class="sudes-filter">
                        <a class="btn btn-outline btn-filter" title="Bộ lọc">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-funnel-fill" viewBox="0 0 16 16">
                              <path d="M1.5 1.5A.5.5 0 0 1 2 1h12a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.128.334L10 8.692V13.5a.5.5 0 0 1-.342.474l-3 1A.5.5 0 0 1 6 14.5V8.692L1.628 3.834A.5.5 0 0 1 1.5 3.5v-2z"/>
                           </svg>
                           Bộ lọc
                           <span class="count-filter-val"></span>
                        </a>
                     </div>
                     <div class="sort-cate-right">
                        <h3>
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sort-alpha-down" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371h-1.781zm1.57-.785L11 2.687h-.047l-.652 2.157h1.351z"/>
                              <path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645V14zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293V2.5z"/>
                           </svg>
                           Xếp theo
                        </h3>
                        <ul>
                           

                           <li class="btn-quick-sort default active" >
                              {{-- <a href="javascript:;" onclick="sortby('default')" title="Mặc định"><i></i>Mặc định</a> --}}

                              <label class="d-flex align-items-baseline pt-1 pb-1 m-0">
                                 <input type="radio" class="d-none sortby-default" name="sortBy" onclick="sortby()" value="default" checked="checked">
                                 <span class="fa2 px-2 py-1 rounded border-gradient-gold">Mặc định</span> 
                              </label>
                           </li>
                           <li class="btn-quick-sort price-asc" >
                              {{-- <a href="javascript:;" onclick="sortby('default')" title="Mặc định"><i></i>Mặc định</a> --}}

                              <label class="d-flex align-items-baseline pt-1 pb-1 m-0">
                                 <input type="radio" class="d-none sortby-default" name="sortBy" onclick="sortby()" value="price-asc">
                                 <span class="fa2 px-2 py-1 rounded border-gradient-gold">Giá tăng dần</span> 
                              </label>
                           </li>
                           <li class="btn-quick-sort price-desc" >
                              {{-- <a href="javascript:;" onclick="sortby('default')" title="Mặc định"><i></i>Mặc định</a> --}}

                              <label class="d-flex align-items-baseline pt-1 pb-1 m-0">
                                 <input type="radio" class="d-none sortby-default" name="sortBy" onclick="sortby()" value="price-desc">
                                 <span class="fa2 px-2 py-1 rounded border-gradient-gold">Giá giảm dần</span> 
                              </label>
                           </li>
                           <li class="btn-quick-sort created-asc" >
                              {{-- <a href="javascript:;" onclick="sortby('default')" title="Mặc định"><i></i>Mặc định</a> --}}

                              <label class="d-flex align-items-baseline pt-1 pb-1 m-0">
                                 <input type="radio" class="d-none sortby-default" name="sortBy" onclick="sortby()" value="created-asc">
                                 <span class="fa2 px-2 py-1 rounded border-gradient-gold">Mới nhất</span> 
                              </label>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               
               <div class="products-view products-view-grid list_hover_pro product-list-filter">
                  @if (count($list) > 0)
                  <div class="row">
                     @foreach ($list as $item)
                     <div class="col-6 col-md-3">
                        @include('layouts.product.item',['pro'=>$item])
                     </div>
                     @endforeach
                  </div>
                  @else
                  <div class="row slider-items ">
                     <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 product-grid-item-lm mb-3">
                        <h3>Nội dung đang được cập nhật</h3>
                     </div>
                  </div>
                  @endif
                  <div class="pagenav" id="pagination_main">
                     {{$list->links()}}
                  </div>
               </div>
               
              
               
            </div>
         </div>
      </div>
   </div>
</div>
<div class="backdrop__body-backdrop___1rvky"></div>
@endsection
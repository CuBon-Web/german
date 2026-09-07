@extends('layouts.main.master')
@section('title')
{{$product->name}}
@endsection
@section('description')
{{languageName($product->description)}}
@endsection
@section('image')
@php
$img = json_decode($product->images);
$thongsokythuat = json_decode($product->size);
$variant = json_decode($product->variant);
$khuyenmai = json_decode($product->preserve);
@endphp
{{url(''.$img[0])}}
@endsection
@section('css')
<link href="{{asset('frontend/css/breadcrumb_style.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="preload" as="style"  href="{{asset('frontend/css/product_style.scss.css')}}" type="text/css">
<link href="{{asset('frontend/css/swatch.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="preload" as="style"  href="{{asset('frontend/css/swatch.css')}}" type="text/css">
<link href="{{asset('frontend/css/product_style.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="preload" as="style"  href="{{asset('frontend/css/picbox.scss.css')}}" type="text/css">
<link href="{{asset('frontend/css/picbox.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
<style>
   label.laboe {
       margin-left: 23px;
   }
   label#congviec-error {
   /* position: absolute; */
   top: 0;
   margin-left: 23px;
}
   </style>
@endsection
@section('script')
<script src="{{asset('frontend/js/picbox.js')}}" defer></script>
<script src="{{asset('frontend/js/privince.js')}}" type="text/javascript"></script>
@endsection
@section('content')
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
         <li>
            <a class="changeurl"  href="" title="{{languageName($product->cate->name)}}"><span >{{languageName($product->cate->name)}}</span></a>						
            <span class="mr_lr">
               &nbsp;
               <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                  <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path>
               </svg>
               &nbsp;
            </span>
         </li>
         <li><strong><span>{{$product->name}}</span></strong>
         <li>
      </ul>
   </div>
</section>
<section class="product layout-product" itemscope itemtype="https://schema.org/Product">
   <meta itemprop="category" content="Yến nước chưng đường phèn">
   <meta itemprop="url" content="{{url()->current()}}">
   <meta itemprop="name" content="{{$product->name}}">
   <meta itemprop="image" content="{{url(''.$img[0])}}">
   <meta itemprop="description" content="">
   <div class="d-none" itemprop="brand" itemtype="https://schema.org/Brand" itemscope>
      <meta itemprop="name" content="Thượng Vy Yến đảo" />
   </div>
   <meta itemprop="model" content="">
   <div class="d-none hidden" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
      <div class="inventory_quantity hidden" itemscope itemtype="http://schema.org/ItemAvailability">
         <span class="a-stock" itemprop="supersededBy">
         Còn hàng
         </span>
      </div>
      <link itemprop="availability" href="http://schema.org/InStock">
      <meta itemprop="priceCurrency" content="VND">
      <meta itemprop="price" content="799000">
      <meta itemprop="url" content="{{url()->current()}}">
      <span itemprop="UnitPriceSpecification" itemscope itemtype="https://schema.org/Downpayment">
         <meta itemprop="priceType" content="799000">
      </span>
      <meta itemprop="priceValidUntil" content="2099-01-01">
   </div>
   <div class="d-none hidden" id="{{url()->current()}}" itemprop="seller" itemtype="http://schema.org/Organization" itemscope>
      <meta itemprop="name" content="{{$setting->company}}" />
         <meta itemprop="url" content="{{url()->current()}}" />
      <meta itemprop="logo" content="{{$setting->logo}}" />
   </div>
   <div class="container">
      <div class="details-product">
         <div class="bg-shadow margin-bottom-20">
            <div class="row">
               <div class="col-lg-6 col-md-12 col-12 product-detail-left product-images">
                  <div class="sticky">
                     <div class="product-image-block relative">
                        <div class="swiper-container gallery-top">
                           <div class="swiper-wrapper" id="lightgallery">
                              @foreach ($img as $key => $item)
                                 <a class="swiper-slide" data-hash="{{$key}}" href="{{$item}}" title="Click để xem">
                                    <img height="370" width="480" src="{{$item}}" alt="{{$product->name}}" data-image="{{$item}}" class="img-responsive mx-auto d-block swiper-lazy" />
                                 </a>
                              @endforeach
                           </div>
                        </div>
                        <div class="swiper-container gallery-thumbs ">
                           <div class="swiper-wrapper">
                              @foreach ($img as $key => $item)
                              <div class="swiper-slide" data-hash="{{$key}}">
                                 <div class="p-100">
                                    <img height="80" width="80" src="{{$item}}" alt="{{$product->name}}" data-image="{{$item}}" class="swiper-lazy" />
                                 </div>
                              </div>
                              @endforeach
                           </div>
                           <div class="swiper-button-next">
                           </div>
                           <div class="swiper-button-prev">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-12 col-12 details-pro">
                  <h1 class="title-product">{{$product->name}}</h1>
                 
                  <div class="inventory_quantity">
                     <span class="mb-break">
                     <span class="stock-brand-title">Thương hiệu:</span>
                     <span class="a-vendor">
                        German
                     </span>
                     </span>
                     <span class="line">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                     <span class="mb-break">
                     <span class="stock-brand-title">Tình trạng:</span>
                     <span class="a-stock">
                     Còn hàng
                     </span>
                     </span>
                  </div>
                  <form enctype="multipart/form-data" data-cart-form id="add-to-cart-form" action="/cart/add" method="post" class="form-inline">
                     <div class="price-box clearfix">
                        @if ($product->price > 0)
                           @if ($product->status_variant == 1)
                           <div class="product-price font-weight-bold   mb-2">
                              <i>Đơn Giá:</i>
                              <span class="special-price m-0" id="price-offical">19.790.000₫</span>
                              <input type="text" hidden name="" id="price-send-car" value="">
                              {{-- <del class="old-price ml-2">{{number_format($product->price)}}₫</del> --}}
                           </div>
                           @else 
                           <div class="product-price font-weight-bold   mb-2">
                              <i>Đơn Giá:</i>
                              <span class="special-price m-0" id="price-offical"> {{number_format($product->price)}}₫</span>
                           </div>
                           @endif
                        @else 
                        <div class="product-price font-weight-bold   mb-2">
                           <i>Đơn Giá:</i>
                           <span class="special-price m-0">Liên hệ</span>
                        </div>
                        @endif
                     </div>
                     <div class="product-summary">
                        <div class="rte">
                           {!!languageName($product->description)!!}
                        </div>
                     </div>
                     
                     <div class="form-product">
                        @if ($product->status_variant == 1)
                        @foreach ($variant as $key => $item)
                        <div class="header font-weight-bold mb-2">{{$item->display_name}} : </div>
                        <div class="d-sm-flex align-items-center swatch-color mb-2 swatch clearfix flex-wrap" data-option-index="{{$key}}" data-value="">
                           @foreach ($item->option_values as $k => $op)
                           <div data-value="{{$op->label}}" class="swatch-element color {{$op->label}} position-relative mb-2 mr-2 float-left ">
                              <input class="position-absolute w-100 m-0" type="radio" name="option-{{$key}}" value="{{$op->label}}" {{$k == 0 ? 'checked' : ''}} onclick="renderVariant()">
                              <div class="border rounded p-2 d-flex align-items-center dlabel">
                                 <small style="font-size: 15px" class="pl-1 pr-1">{{$op->label}}</small>
                              </div>
                              <div class="product-variation__tick position-absolute">
                                 <svg enable-background="new 0 0 12 12" class="icon-tick-bold">
                                    <use href="#svg-tick"></use>
                                 </svg>
                              </div>
                           </div>
                           @endforeach
                        </div>
                        @endforeach
                        @endif
                        <script>
                           function formatNumber(num) {
                              return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
                           }
                           function getValueVariant(){
                              var value = "";
                              var variant = @json($variant);
                              console.log(variant);
                              variant.forEach((element,key) => {
                                 var t = document.querySelector('input[name="option-'+key+'"]:checked').value;
                                 value += t+'-';
                              });
                              return value.substring(0, value.length-1);
                           }
                           function renderVariant(){
                              var value_option = this.getValueVariant();
                              var id = {{$product->id}};
                              jQuery.ajaxSetup({
                                 headers: {
                                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                 }
                              });
                              jQuery.ajax({
                                 url: "/get-variant.html",
                                 method: "get",
                                 data: {
                                    'value': value_option,
                                    'id':id
                                 },
                                 success: function (response) {
                                                      $("#price-offical").html(formatNumber(response.data.price)+'₫');
                                                      $("#price-send-car").val(response.data.price);
                                                   },
                              });
                           }
                        </script> 
                        <script>
                           window.onload = renderVariant();
                        </script>
                        @if ($thongsokythuat[0]->title != '')
                        <div class="block-promotion">
                           <div class="heading-promo">
                              Thông số kỹ thuật:
                           </div>
                           <div class="promo-content">
                              <ul>
                                 @foreach ($thongsokythuat as $item)
                                 <li>{{$item->title}}: {{$item->detail}}</li>
                                 @endforeach
                              </ul>
                           </div>
                        </div>
                        @endif
                        
                        {{-- <div class="boz-form ">
                           <div class="flex-quantity">
                              <div class="custom custom-btn-number show">
                                 <span>Số lượng: </span>
                                 <div class="input_number_product">									
                                    <button class="btn_num num_1 button button_qty" onclick="var result = document.getElementById('inputqty'); var qtypro = result.value; if( !isNaN( qtypro ) &amp;&amp; qtypro > 1 ) result.value--;return false;" type="button">-</button>
                                    <input type="text" id="inputqty" name="quantity" value="1" class="form-control prd_quantity" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="if(this.value == 0)this.value=1;">
                                    <button class="btn_num num_2 button button_qty" onclick="var result = document.getElementById('inputqty'); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;return false;" type="button"><span>+</span></button>
                                 </div>
                              </div>
                              <div class="btn-mua button_actions clearfix">
                                 <button type="button" class="btn-buyNow btn btn-primary" onclick="shopnow({{$product->id}},1,{{ json_encode($product->variant) }},{{$product->status_variant}})">
                                 <span class="txt-main">Mua ngay</span>
                                 </button>
                                 <button type="button"  onclick="addToCart({{$product->id}},{{ json_encode($product->variant) }},{{$product->status_variant}})" class="btn btn_base normal_button btn_add_cart add_to_cart btn-cart btn-extent">
                                 <span class="txt-main">Thêm vào giỏ</span>
                                 </button>
                              </div>
                           </div>
                        </div> --}}
                     </div>
                  </form>
                  <div class="bottom-product">
                     <ul class="social-media" role="list">
                        <li class="title">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16">
                              <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5m-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3"/>
                           </svg>
                           Chia sẻ
                        </li>
                        <li class="social-media__item social-media__item--facebook">
                           <a title="Chia sẻ lên Facebook" href="https://www.facebook.com/sharer.php?u={{url()->current()}}" target="_blank" rel="noopener" aria-label="Chia sẻ lên Facebook" >
                              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 155.139 155.139" style="enable-background:new 0 0 155.139 155.139;" xml:space="preserve">
                                 <g>
                                    <path id="f_1_" style="fill:#010002;" d="M89.584,155.139V84.378h23.742l3.562-27.585H89.584V39.184
                                       c0-7.984,2.208-13.425,13.67-13.425l14.595-0.006V1.08C115.325,0.752,106.661,0,96.577,0C75.52,0,61.104,12.853,61.104,36.452
                                       v20.341H37.29v27.585h23.814v70.761H89.584z"/>
                                 </g>
                              </svg>
                           </a>
                        </li>
                        <li class="social-media__item social-media__item--pinterest">
                           <a title="Chia sẻ lên Pinterest" href="https://pinterest.com/pin/create/button/?url={{url()->current()}}&amp;" target="_blank" rel="noopener" aria-label="Pinterest" >
                              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 511.977 511.977" style="enable-background:new 0 0 511.977 511.977;" xml:space="preserve">
                                 <g>
                                    <g>
                                       <path d="M262.948,0C122.628,0,48.004,89.92,48.004,187.968c0,45.472,25.408,102.176,66.08,120.16
                                          c6.176,2.784,9.536,1.6,10.912-4.128c1.216-4.352,6.56-25.312,9.152-35.2c0.8-3.168,0.384-5.92-2.176-8.896
                                          c-13.504-15.616-24.224-44.064-24.224-70.752c0-68.384,54.368-134.784,146.88-134.784c80,0,135.968,51.968,135.968,126.304
                                          c0,84-44.448,142.112-102.208,142.112c-31.968,0-55.776-25.088-48.224-56.128c9.12-36.96,27.008-76.704,27.008-103.36
                                          c0-23.904-13.504-43.68-41.088-43.68c-32.544,0-58.944,32.224-58.944,75.488c0,27.488,9.728,46.048,9.728,46.048
                                          S144.676,371.2,138.692,395.488c-10.112,41.12,1.376,107.712,2.368,113.44c0.608,3.168,4.16,4.16,6.144,1.568
                                          c3.168-4.16,42.08-59.68,52.992-99.808c3.968-14.624,20.256-73.92,20.256-73.92c10.72,19.36,41.664,35.584,74.624,35.584
                                          c98.048,0,168.896-86.176,168.896-193.12C463.62,76.704,375.876,0,262.948,0z"/>
                                    </g>
                                 </g>
                              </svg>
                           </a>
                        </li>
                        <li class="social-media__item social-media__item--twitter">
                           <a title="Chia sẻ lên Twitter" href="https://twitter.com/share?url={{url()->current()}}" target="_blank" rel="noopener" aria-label="Tweet on Twitter" >
                              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                 <g>
                                    <g>
                                       <path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016
                                          c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992
                                          c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056
                                          c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152
                                          c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792
                                          c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44
                                          C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568
                                          C480.224,136.96,497.728,118.496,512,97.248z"/>
                                    </g>
                                 </g>
                              </svg>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-12 margin-bottom-20">
               <div class="bg-shadow">
                  <div class="row">
                     <div class="col-12 product-review-details  col-lg-8">
                        <div class="product-tab e-tabs not-dqtab">
                           <ul class="tabs tabs-title clearfix">
                              <li class="tab-link active" data-tab="#tab-1">
                                 <h3>Mô tả sản phẩm</h3>
                              </li>
                              <li class="tab-link" data-tab="#tab-2">
                                 <h3>Hướng dẫn kích hoạt bảo hành</h3>
                              </li>
                           </ul>
                           <div class="tab-float">
                              <div id="tab-1" class="tab-content active content_extab">
                                 <div class="rte product_getcontent product-review-content">
                                    {!!languageName($product->content)!!}
                                 </div>
                              </div>
                              <div id="tab-2" class="tab-content content_extab">
                                 <div class="rte">
                                    @if ($huongdan != null)
                                    {!!$huongdan->content!!}
                                    @else 
                                    <p>Nội dung đang cập nhật</p>
                                    @endif
                                    
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-4 col-12 product-sidebar">
                        <div class="sticky-box">
                           <div class="section-viewed-product recent-page-viewed">
                              <h2>
                                 <span>
                                 Bạn đã xem
                                 </span>
                              </h2>
                              <div class="product-viewed-content">
                                @if (count($viewold) > 0)
                                    @foreach ($viewold as $item)
                                    <div class="product-view">
                                       <a class="image_thumb" href="{{route('detailProduct',['cate'=>$item['cate_slug'],'type'=>$item['type_slug'] ? $item['type_slug'] : 'loai','id'=>$item['slug']])}}" title="{{$item['name']}}">
                                       <img width="370" height="480" class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$item['image']}}" alt="{{$item['name']}}">
                                       </a>
                                       <div class="product-info">
                                          <h3 class="product-name"><a href="{{route('detailProduct',['cate'=>$item['cate_slug'],'type'=>$item['type_slug'] ? $item['type_slug'] : 'loai','id'=>$item['slug']])}}" title="{{$item['name']}}" class="line-clamp line-clamp-3-new">{{$item['name']}}</a></h3>
                                          <div class="price-box">
                                            {{number_format($item['price'])}}
                                          </div>
                                          <a class="view-more" href="{{route('detailProduct',['cate'=>$item['cate_slug'],'type'=>$item['type_slug'] ? $item['type_slug'] : 'loai','id'=>$item['slug']])}}" title="Xem chi tiết">Xem chi tiết »</a>
                                       </div>
                                    </div>
                                    @endforeach
                                @endif
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-12 product-related product-swipers">
               <div class="bg-shadow">
                  <h2>
                     <a href="/yen-nuoc-chung-duong-phen" title="Sản phẩm liên quan">
                     Sản phẩm liên quan
                     </a>
                  </h2>
                  <div class="swiper_product_related swiper-container">
                     <div class="swiper-wrapper">
                        @foreach ($productlq as $item)
                        @if ($product->id != $item->id)
                        <div class="swiper-slide">
                           @include('layouts.product.item',['pro'=>$item])
                        </div>
                        @endif
                        
                        @endforeach
                        

                     </div>
                     <div class="swiper-button-next">
                        <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff" stroke-width="2"/>
                           <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)" fill="black"/>
                           <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                           <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                     </div>
                     <div class="swiper-button-prev">
                        <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff" stroke-width="2"/>
                           <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)" fill="black"/>
                           <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                           <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                     </div>
                  </div>
               </div>
            </div>
            <script>
               var swiper_related = null;
               function initSwiperRelated() {
                  swiper_related = new Swiper('.swiper_product_related', {
                     slidesPerView: 4,
                     spaceBetween: 20,
                     slidesPerGroup: 1,
                     navigation: {
                        nextEl: '.swiper_product_related .swiper-button-next',
                        prevEl: '.swiper_product_related .swiper-button-prev',
                     },
                     breakpoints: {
                        768: {
                           slidesPerView: 4,
                           spaceBetween: 20
                        },
                        992: {
                           slidesPerView: 4,
                           spaceBetween: 20
                        },
                        1024: {
                           slidesPerView: 4,
                           spaceBetween: 20
                        }
                     }
                  });
               }
               function destroySwiperRelated() {
                  if (swiper_related) {
                     swiper_related.destroy(true, true);
                     swiper_related = null;
                  }
               }
               function toggleSwiperRelated() {
                  if ($(window).width() <= 767 && swiper_related) {
                     destroySwiperRelated();
                  } else if ($(window).width() > 767 && !swiper_related) {
                     initSwiperRelated();
                  }
               }
               toggleSwiperRelated();
               $(window).resize(toggleSwiperRelated);
            </script>
         </div>
      </div>
   </div>
</section>
<script>
   var getLimit = 6;
   var alias = 'set-6-thuong-vy-yen-dao';
   
   function activeTab(obj){
      $('.product-tab ul li').removeClass('active');
      $(obj).addClass('active');
      var id = $(obj).attr('data-tab');
      $('.tab-content').removeClass('active');
      $(id).addClass('active');
   }
   
   
   $('.product-tab ul li').click(function(){
      activeTab(this);
      return false;
   });
   var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 5,
      slidesPerView: 10,
      freeMode: true,
      lazy: true,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
      hashNavigation: true,
      slideToClickedSlide: true,
      breakpoints: {
         260: {
            slidesPerView: 3,
            spaceBetween: 10,
         },
         300: {
            slidesPerView: 4,
            spaceBetween: 10,
         },
         500: {
            slidesPerView: 4,
            spaceBetween: 10,
         },
         640: {
            slidesPerView: 4,
            spaceBetween: 10,
         },
         768: {
            slidesPerView: 5,
            spaceBetween: 10,
            direction: 'vertical'
         },
         992: {
            slidesPerView: 4,
            spaceBetween: 10,
            direction: 'vertical'
         },
         1024: {
            slidesPerView: 4,
            spaceBetween: 10,
            direction: 'vertical'
         },
         1199: {
            slidesPerView: 4,
            spaceBetween: 10,
            direction: 'vertical' 
         }
      },
      navigation: {
         nextEl: '.gallery-thumbs .swiper-button-next',
         prevEl: '.gallery-thumbs .swiper-button-prev',
      },
   });
   var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 0,
      lazy: true,
      hashNavigation: true,
      thumbs: {
         swiper: galleryThumbs
      }
   });
   var swiper = new Swiper('.product-relate-swiper', {
      slidesPerView: 4,
      loop: false,
      grabCursor: true,
      spaceBetween: 30,
      roundLengths: true,
      slideToClickedSlide: false,
      navigation: {
         nextEl: '.product-relate-swiper .swiper-button-next',
         prevEl: '.product-relate-swiper .swiper-button-prev',
      },
      autoplay: false,
      breakpoints: {
         260: {
            slidesPerView: 'auto',
            spaceBetween: 15
         },
         500: {
            slidesPerView: 2,
            spaceBetween: 15
         },
         640: {
            slidesPerView: 3,
            spaceBetween: 15
         },
         768: {
            slidesPerView: 3,
            spaceBetween: 30
         },
         991: {
            slidesPerView: 4,
            spaceBetween: 30
         },
         1200: {
            slidesPerView: 4,
            spaceBetween: 30
         }
      }
   });
   $(document).ready(function() {
      $("#lightgallery").lightGallery({
         thumbnail: false
      }); 
      $("#videolary").lightGallery({
         thumbnail: false
      }); 
   });


</script>
@endsection


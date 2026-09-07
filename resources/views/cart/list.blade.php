@extends('layouts.main.master')
@section('title')
Giỏ hàng của bạn
@endsection
@section('description')
Bún đậu mắm tôm Lynh
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
<link href="{{asset('frontend/css/breadcrumb_style.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="preload" as="style"  href="{{asset('frontend/css/cartpage.scss.css')}}" type="text/css">
<link href="{{asset('frontend/css/cartpage.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection
@section('content')
@php $total = 0; $qty = 0 ; @endphp
@foreach((array) session('cart') as $id => $details)
   @php
   if($details['status_variant'] == 1){
      $total += $details['price'] * $details['quantity'] ;
   }else{
      if ($details['discount'] > 0) {
         $total += $details['discount'] * $details['quantity'] ;
      }else{
         $total += $details['price'] * $details['quantity'] ;
      }
   }
   $qty += $details['quantity'] ;
   @endphp
@endforeach
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
         <li><strong ><span>Giỏ hàng</span></strong></li>
      </ul>
   </div>
</section>
<section class="main-cart-page main-container col1-layout">
   <div class="main container cartpcstyle">
      <div class="wrap_background_aside margin-bottom-40">
         @if (count($cartcontent) > 0)
         <div class="row">
            <div class="col-xl-8 col-lg-7 col-12 col-cart-left">
               <div class="bg-shadow margin-bottom-20">
                  <div class="header-cart">
                     <div class="title-block-page">
                        <h1 class="title_cart">
                           <span>Giỏ hàng của bạn</span>
                        </h1>
                     </div>
                  </div>
                  <div class="cart-page">
                     <div class="drawer__inner">
                        <div class="CartPageContainer">
                           <form action="" class="cart ajaxcart cartpage">
                              <div class="cart-header-info">
                                 <div>Thông tin sản phẩm</div>
                                 <div>Đơn giá</div>
                                 <div>Số lượng</div>
                              </div>
                              <div class="ajaxcart__inner ajaxcart__inner--has-fixed-footer cart_body items">
                                 @foreach ($cartcontent as $item)
                                 <div class="ajaxcart__row">
                                    <div class="ajaxcart__product cart_product" data-line="1">
                                       <a href="" class="ajaxcart__product-image cart_image" title="{{$item['name']}}">
                                       <img src="{{$item['image']}}" alt="{{$item['name']}}">
                                       </a>
                                       <div class="grid__item cart_info">
                                          <div class="ajaxcart__product-name-wrapper cart_name">
                                             <a href="" class="ajaxcart__product-name h4 line-clamp line-clamp-2-new" title="{{$item['name']}}">{{$item['name']}}</a>
                                             @if ($item['status_variant'] == 1)
                                             <span class="ajaxcart__product-meta variant-title">{{$item['variant']}}</span>
                                          @endif
                                             
                                             <a title="Xóa" class="cart__btn-remove remove-item-cart" href="javascript:;" onclick="removeCart({{$item['idpro']}})">Xóa</a>
                                          </div>
                                          <div class="grid">
                                             

                                             <div class="grid__item one-half text-right cart_prices">
                                                @if ($item['status_variant'] == 1)
                                                   <span class="cart-price">{{number_format($item['price'])}}₫</span>
                                                   @else 
                                                      @if ($item['discount'] > 0)
                                                      <span class="cart-price">{{ number_format($item['discount']) }}₫</span>
                                                      @else
                                                      <span class="cart-price">{{ number_format($item['price']) }}₫</span>
                                                      @endif
                                                   @endif
                                             </div>
                                          </div>
                                          <div class="grid">
                                             <div class="grid__item one-half cart_select">
                                                <div class="ajaxcart__qty input-group-btn">
                                                   <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--minus items-count" onclick="qtyminus({{$item['idpro']}})" onclick="qtyminus({{$item['idpro']}})"> - </button>
                                                   <input type="text" name="updates" class="ajaxcart__qty-num number-sidebar" value="{{$item['quantity']}}" id="quantity-{{$item['idpro']}}">
                                                   <button type="button" class="ajaxcart__qty-adjust ajaxcart__qty--plus items-count" onclick="qtyplus({{$item['idpro']}})"> + </button>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 @endforeach
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-12 col-cart-right">
               <div class="sticky">
                  <div class="bg-shadow margin-bottom-20">
                     <div class="ajaxcart__footer">
                        <div class="checkout-header">
                           Thông tin đơn hàng
                        </div>
                        <div class="checkout-body">
                           <div class="summary-total">
 
                              <div class="content-items">
                                <div class="item-content-left">Tổng tiền</div>
                                <div class="item-content-right"><span class="total-price">{{number_format($total)}}₫</span></div>
                              </div>
                              
                             </div>
                           <div class="summary-action">
                              <p>ĐĂNG CASE luôn đảm bảo hàng hóa ở chất lượng tốt nhất</p>
                              <p>Mọi phản ánh về hàng hóa xin liên hệ về hotline <a href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a></p>
                           </div>
                           
                           <div class="summary-button">
                              <div class="cart__btn-proceed-checkout-dt">
                                 <a href="{{route('checkout')}}" type="button" class="button btn btn-default cart__btn-proceed-checkout btn-primary duration-300" id="btn-proceed-checkout" title="Thanh toán ngay">Thanh toán ngay</a>
                              </div>
                              <a class="return_buy btn btn-extent duration-300" title="Tiếp tục mua hàng" href="{{route('home')}}">Tiếp tục mua hàng</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @else 
         <div class="row">
            <div class="col-md-12">
               <div class="alert alert-warning" role="alert">Không có sản phẩm nào. Quay lại <a href="{{route('home')}}" class="alert-link">cửa hàng</a> để tiếp tục mua sắm.</div>
            </div>
         </div>
         @endif
      </div>
   </div>
</section>
@endsection
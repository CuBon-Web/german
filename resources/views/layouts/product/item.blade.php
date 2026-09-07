
@php
$img = json_decode($pro->images);
$khuyenmai = json_decode($pro->preserve);
@endphp
<div class="item_product_main">
    <form action="" method="post" class="variants product-action item-product-main duration-300" data-cart-form data-id="product-actions-34775949" enctype="multipart/form-data">
        {{-- @if ($pro->discount > 0 && $pro->price)
        <span class="flash-sale">-
            {{100-ceil(($pro->discount/$pro->price)*100)}}%
        </span>
        @endif --}}
        @if ($khuyenmai[0]->detail != null)
        <div class="tag-promo" title="Quà tặng">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{url('frontend/images/tag_pro_icon.svg')}}" alt="Quà tặng" class="lazyload" />
            <div class="promotion-content">
               <div class="line-clamp-5-new" title="Khuyến Mãi">
                  <p>
                     <span style="letter-spacing: -0.2px;">
                      @foreach ($khuyenmai as $item)
                      {{$item->detail}} <br>
                      @endforeach
                      </span>
                  </p>
               </div>
            </div>
         </div>
        @endif
       
       <div class="product-thumbnail">
          <a class="image_thumb scale_hover position-relative" href="{{route('detailProduct',['cate'=>$pro->cate_slug,'type'=>$pro->type_slug ? $pro->type_slug : 'loai','id'=>$pro->slug])}}" title=" {{$pro->name}}">
            <img class="lazyload duration-300 product__card--thumbnail__img" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="{{$img[0]}}" alt=" {{$pro->name}}">
            @if (count($img) > 1)
            <img class="product__card--thumbnail__img product__secondary--img" src="{{$img[1]}}"  data-src="{{$img[1]}}" alt=" {{$pro->name}}">
            @endif
           
         </a>
       </div>
       
       <div class="product-info">
          <div class="name-price">
             <h3 class="product-name line-clamp-2-new">
                <a href="{{route('detailProduct',['cate'=>$pro->cate_slug,'type'=>$pro->type_slug ? $pro->type_slug : 'loai','id'=>$pro->slug])}}" title=" {{$pro->name}}"> {{$pro->name}}</a>
             </h3>
             @if ($pro->price > 0)
                @if ($pro->status_variant == 1)
                <div class="product-price-cart">
                    {{-- <span class="compare-price">{{number_format($pro->price)}}₫</span> --}}
                    <span class="price">{{get_price_variant($pro->id)}}₫</span>
                 </div>
                @else 
                <div class="product-price-cart">
                    {{-- <span class="compare-price">{{number_format($pro->price)}}₫</span> --}}
                    <span class="price">{{number_format($pro->price)}}₫</span>
                 </div>
               @endif
            @elseif($pro->price == 0 && $pro->discount > 0)
            <div class="product-price-cart">
                <span class="price">{{number_format($pro->discount)}}₫</span>
             </div>
            @else
            <div class="product-price-cart">
                <span class="price">Liên hệ</span>
             </div>
            @endif

             
          </div>
          <div class="product-button">
             <input type="hidden" name="variantId" value="111118886" />
             <a href="{{route('detailProduct',['cate'=>$pro->cate_slug,'type'=>$pro->type_slug ? $pro->type_slug : 'loai','id'=>$pro->slug])}}" class="btn-cart btn-views btn btn-primary " title="Chi tiết sản phẩm">
                <span>Xem chi tiết</span>
                <svg enable-background="new 0 0 32 32" height="512" viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg">
                   <g>
                      <g>
                         <path d="m23.8 30h-15.6c-3.3 0-6-2.7-6-6v-.2l.6-16c.1-3.3 2.8-5.8 6-5.8h14.4c3.2 0 5.9 2.5 6 5.8l.6 16c.1 1.6-.5 3.1-1.6 4.3s-2.6 1.9-4.2 1.9c0 0-.1 0-.2 0zm-15-26c-2.2 0-3.9 1.7-4 3.8l-.6 16.2c0 2.2 1.8 4 4 4h15.8c1.1 0 2.1-.5 2.8-1.3s1.1-1.8 1.1-2.9l-.6-16c-.1-2.2-1.8-3.8-4-3.8z"/>
                      </g>
                      <g>
                         <path d="m16 14c-3.9 0-7-3.1-7-7 0-.6.4-1 1-1s1 .4 1 1c0 2.8 2.2 5 5 5s5-2.2 5-5c0-.6.4-1 1-1s1 .4 1 1c0 3.9-3.1 7-7 7z"/>
                      </g>
                   </g>
                </svg>
               </a>
          </div>
       </div>
    </form>
</div>


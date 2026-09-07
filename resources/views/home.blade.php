@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
<link rel="preload" as='style'  type="text/css" href="{{asset('frontend/css/index.scss.css')}}">
<link href="{{asset('frontend/css/index.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection
@section('script')
<link rel="preload" as="script" href="{{asset('frontend/js/index.js')}}" />
<script src="{{asset('frontend/js/index.js')}}" type="text/javascript"></script>
@endsection
@section('content')
<h1 class="d-none">{{$setting->company}}</h1>
<div class="section_slider">
   <div class="swiper-container">
      <div class="swiper-wrapper">
         @foreach ($banner as $item)
         <div class="swiper-slide">
            <a href="{{$item->link}}" title="{{$item->link}}">
            <img
               src="{{$item->image}}" 
               alt="Slider 1" class=" center-block duration-300" />
            </a>
         </div>
         @endforeach
      </div>
      <div class="swiper-button-prev">
         <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff" stroke-width="2"/>
            <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)" fill="black"/>
            <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
         </svg>
      </div>
      <div class="swiper-button-next">
         <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff" stroke-width="2"/>
            <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)" fill="black"/>
            <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
         </svg>
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-progress-bar">
         <div class="progress"></div>
      </div>
   </div>
</div>
<script>
   let swiperSlider = null;
   let progressBarInterval;
   
   function initProgressBar() {
   	const progressBar = document.querySelector('.section_slider .swiper-progress-bar .progress');
   	progressBar.style.width = 0;
   }
   
   function startProgressBar() {
   	const progressBar = document.querySelector('.section_slider .swiper-progress-bar .progress');
   	const duration = 8000;
   	progressBarInterval = setInterval(function () {
   		let progress = parseFloat(progressBar.style.width) || 0;
   		progress += (100 / duration) * (1000 / 60);
   		progressBar.style.width = Math.min(progress, 100) + '%';
   	}, 1000 / 60);
   }
   
   function resetProgressBar() {
   	clearInterval(progressBarInterval);
   	initProgressBar();
   }
   
   function initSwiperSlider() {
   	swiperSlider = new Swiper('.section_slider .swiper-container', {
   		speed: 1000,
   		spaceBetween: 14,
   		effect: 'fade',
   		navigation: {
   			nextEl: '.section_slider .swiper-container .swiper-button-next',
   			prevEl: '.section_slider .swiper-container .swiper-button-prev',
   		},
   		autoplay: {
   			delay: 8000,
   			disableOnInteraction: false,
   		},
   		on: {
   			init: function () {
   				initProgressBar();
   				startProgressBar();
   			},
   			slideChangeTransitionStart: function () {
   				resetProgressBar();
   			},
   			slideChangeTransitionEnd: function () {
   				startProgressBar();
   			},
   		},
   		pagination: {
   			el: '.section_slider .swiper-container .swiper-pagination',
   			clickable: true,
   		},
   	});
   }
   
   initSwiperSlider();
   
</script>
{{-- 
<div class="section_services">
   <div class="container">
      <div class="bg-container">
         <div class="wire-left"></div>
         <div class="wire-right"></div>
         <div class="services-border">
            <div class="row promo-box">
               @foreach ($BannerSlogan as $item)
               <div class="col-lg-3 col-md-3 col-sm-6 col-6 promo-item duration-300">
                  <div class="icon aspect-1">
                     <img width="50" height="50" class="lazyload" data-src="{{$item->image}}" alt="Sudes Nest" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>
                  </div>
                  <div class="info">
                     <h3>
                        {{languageName($item->content)}}
                     </h3>
                     <span>
                     {{($item->name)}}
                     </span>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </div>
   </div>
</div>
--}}
@if (count($homePro) > 0)
<section class="section-index section_flash_sale">
   <div class="container">
      <div class="section-title">
         <h2>
            <a href="{{route('flashSale')}}" title="Khuyến mãi đặc biệt">
            {{getLanguage('hot_discount')}}
            </a>
         </h2>
         <div class="title-separator">
            <div class="separator-center"></div>
         </div>
      </div>
      <div class="block-product-sale">
         <div class="swiper_sale swiper-container">
            <div class="swiper-wrapper load-after" data-section="section_flash_sale">
               @foreach ($homePro as $item)
               <div class="swiper-slide">
                  @include('layouts.product.item',['pro'=>$item])
               </div>
               @endforeach
            </div>
            <div class="swiper-button-prev">
               <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff" stroke-width="2"/>
                  <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)" fill="black"/>
                  <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
               </svg>
            </div>
            <div class="swiper-button-next">
               <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff" stroke-width="2"/>
                  <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)" fill="black"/>
                  <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
               </svg>
            </div>
         </div>
         <div class="view-more clearfix">
            <a href="{{route('flashSale')}}" title="Xem tất cả" class="btn btn-primary frame">
            Xem tất cả 
            </a>
         </div>
      </div>
   </div>
</section>
<script>
   $(document).ready(function ($) {
   	function runSwiperSale() {
   		var swiper_sale = null;
   		function initSwiperSale() {
   			swiper_sale = new Swiper('.swiper_sale', {
   				slidesPerView: 4,
   				spaceBetween: 20,
   				slidesPerGroup: 1,
               slidesPerColumnFill: 'row',
               slidesPerColumn: 2,
   				navigation: {
   					nextEl: '.swiper_sale .swiper-button-next',
   					prevEl: '.swiper_sale .swiper-button-prev',
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
   		function destroySwiperSale() {
   			if (swiper_sale) {
   				swiper_sale.destroy(true, true);
   				swiper_sale = null;
   			}
   		}
   		function toggleSwiperSale() {
   			if ($(window).width() <= 767 && swiper_sale) {
   				destroySwiperSale();
   			} else if ($(window).width() > 767 && !swiper_sale) {
   				initSwiperSale();
   			}
   		}
   		toggleSwiperSale();
   		$(window).resize(toggleSwiperSale);
   	}
   	lazyBlockProduct('section_flash_sale','0px 0px -250px 0px',runSwiperSale);
   });
   
</script>
@endif


<section class=" section_4_banner">
   <div class="row banslog" data-section="section_4_banner">
      @foreach ($BannerAds as $item)
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding: 30px 0;">
         <div class="single-hover-banner single-hover-banner--middlesize-text">
            <div class="single-hover-banner__image">
               <a href="{{$item->name}}">
               <img width="945" height="430" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  
                  data-src="{{$item->image}}" class="lazyload img-fluid" alt="">
               </a>
            </div>
         </div>
         {{-- 
         <div class="three_banner mt-30">
            <a class="duration-300" href="{{$item->name}}" title="Bộ quà 4 mùa">
               <picture>
                  <source  media="(max-width: 480px)" srcset="{{$item->image}}"/>
                  <img width="382" height="574" loading="lazy" class="lazyload duration-300" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  
                     data-src="{{$item->image}}" alt="Bộ quà 4 mùa"/>
               </picture>
               <div class="banner-info duration-300">
                  <h3>
                     {{languageName($item->content)}}
                  </h3>
               </div>
            </a>
         </div>
         --}}
      </div>
      @endforeach
   </div>
</section>
<script>
   $(document).ready(function ($) {
   	lazyBlockProduct('section_4_banner','0px 0px -300px 0px');
   });
</script>


@foreach ($categoryhome as $keyw => $item)
   @if ($item->id != 2)
   <section class="section-index section_product_tab section_product_tab_{{$keyw}}">
      <div class="container">
         <div class="wrap_tab_index not-dqtab e-tabs ajax-tab-1" data-section-2="ajax-tab-1">
            <div class="section-title">
               <h2>
                  <a href="" title="">{{languageName($item->name)}}</a>
               </h2>
               <div class="title-separator">
                  <div class="separator-center"></div>
               </div>
               @if (count($item->typeCate) > 0)
               <div class="tab_big">
                  <div class="tab_ul">
                     <ul class="tabs tabs-title tab-pc tabtitle2 ajax clearfix">
                        @foreach ($item->typeCate as $key => $type)
                        <li class="tab-link tab_cate {{$key == 0 ? 'has-content' : ''}} " data-tab="tab1-{{$type->slug}}-{{$key}}">
                           <span>{{languageName($type->name)}}</span>
                        </li>
                        @endforeach
                     </ul>
                     <div class="grad-left">
                        <a href="javascript:;" class="prev button" title="prev" style="display: none;">
                           <svg width="24" height="24" viewBox="0 0 61 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <rect x="31.7349" y="3.02869" width="40.2232" height="4" transform="rotate(45 31.7349 3.02869)" fill="black"/>
                              <rect x="28.9717" y="62.9694" width="22.3263" height="4" transform="rotate(-135 28.9717 62.9694)" fill="black"/>
                              <rect x="28.0605" y="58.2244" width="41.6244" height="4" transform="rotate(-45 28.0605 58.2244)" fill="black"/>
                              <rect x="31.9126" y="3.20361" width="22.4441" height="4" transform="rotate(135 31.9126 3.20361)" fill="black"/>
                              <path d="M2 31.0007H38" stroke="black" stroke-width="4" stroke-linecap="square" stroke-linejoin="round"/>
                              <path d="M31 22.0007L40 31.0007L31 40.0007" stroke="black" stroke-width="4" stroke-linecap="square" stroke-linejoin="round"/>
                           </svg>
                        </a>
                     </div>
                     <div class="grad-right">
                        <a href="javascript:;" class="next button" title="next" style="display: none;">
                           <svg width="24" height="24" viewBox="0 0 61 63" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <rect x="31.7349" y="3.02869" width="40.2232" height="4" transform="rotate(45 31.7349 3.02869)" fill="black"/>
                              <rect x="28.9717" y="62.9694" width="22.3263" height="4" transform="rotate(-135 28.9717 62.9694)" fill="black"/>
                              <rect x="28.0605" y="58.2244" width="41.6244" height="4" transform="rotate(-45 28.0605 58.2244)" fill="black"/>
                              <rect x="31.9126" y="3.20361" width="22.4441" height="4" transform="rotate(135 31.9126 3.20361)" fill="black"/>
                              <path d="M2 31.0007H38" stroke="black" stroke-width="4" stroke-linecap="square" stroke-linejoin="round"/>
                              <path d="M31 22.0007L40 31.0007L31 40.0007" stroke="black" stroke-width="4" stroke-linecap="square" stroke-linejoin="round"/>
                           </svg>
                        </a>
                     </div>
                  </div>
               </div>
               @endif
            </div>
            <div class="">
               @if (count($item->typeCate) > 0)
                  @foreach ($item->typeCate as $key => $type)
                  <div class="tab1-{{$type->slug}}-{{$key}} tab-content">
                     <div class="row load-after">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3 {{$item->location_banner == 0 ? 'order-lg-2' : ''}}">
                           <div class="swiper_product_banner_{{$keyw}} swiper-container" style="border-radius:5px;">
                              <div class="swiper-wrapper" >
                                 @php
                                    $imgslide1 = json_decode($item->imagehome);
                                 @endphp
                                 @foreach ($imgslide1 as $i)
                                 <div class="swiper-slide">
                                    <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="{{$i}}" alt="">
                                 </div>
                                 @endforeach
                              </div>
                              <div class="swiper-button-prev">
                              </div>
                              <div class="swiper-button-next">
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 {{$item->location_banner == 0 ? 'order-lg-1' : ''}}">
                           <div class="swiper_product_{{$keyw}} swiper-container">
                              <div class="swiper-wrapper" >
                                 @foreach ($type->products as $proty)
                                 <div class="swiper-slide">
                                    @include('layouts.product.item',['pro'=>$proty])
                                 </div>
                                 @endforeach
                              </div>
                              <div class="swiper-button-prev">
                              </div>
                              <div class="swiper-button-next">
                              </div>
                           </div>
                        </div>
                     </div>
                     @if (count($type->products) > 8)
                     <div class="view-more clearfix">
                        <a href="{{route('allListType',['danhmuc'=>$item->slug,'loaidanhmuc'=>$type->slug])}}" title="Xem tất cả" class="btn btn-primary frame">
                        
                           Xem thêm
                        </a>
                     </div>
                     @endif
                  </div>
                  @endforeach
               @else 
               <div class=" tab-content">
                  <div class="row load-after">
                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-3 {{$item->location_banner == 0 ? 'order-lg-2' : ''}}">
                        <div class="swiper_product_banner_{{$keyw}} swiper-container" style="border-radius:5px;">
                           <div class="swiper-wrapper" >
                              @php
                                 $imgslide = json_decode($item->imagehome);
                              @endphp
                              @foreach ($imgslide as $img)
                              <div class="swiper-slide">
                                 <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"  data-src="{{$img}}" alt="">
                              </div>
                              @endforeach
                           </div>
                           <div class="swiper-button-prev">
                           </div>
                           <div class="swiper-button-next">
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 {{$item->location_banner == 0 ? 'order-lg-1' : ''}}">
                        <div class="swiper_product_{{$keyw}} swiper-container" >
                           <div class="swiper-wrapper" >
                              @foreach ($item->product as $proty)
                              <div class="swiper-slide">
                                 @include('layouts.product.item',['pro'=>$proty])
                              </div>
                              @endforeach
                           </div>
                           <div class="swiper-button-prev">
                           </div>
                           <div class="swiper-button-next">
                           </div>
                        </div>
                     </div>
                  </div>
                  @if (count($item->product) > 7)
                  <div class="view-more clearfix">
                     <a href="{{route('allListProCate',['danhmuc'=>$item->slug])}}" title="Xem tất cả" class="btn btn-primary frame">
                        
                        Xem thêm
                     </a>
                  </div>
                  @endif
               </div>
               @endif
            </div>
         </div>
         <script>
            var key = {{$keyw}};
            var swiper_sale_banner = new Swiper('.swiper_product_banner_'+key, {
               spaceBetween: 20,
               loop: false,
               speed: 1000,
               autoplay: true,
               navigation: {
                     nextEl: '.swiper-button-next',
                     prevEl: '.swiper-button-prev',
                  },
               breakpoints: {
                  320: {
                     slidesPerView: 1
                  },
                  768: {
                     slidesPerView: 1
                  },
                  992: {
                     slidesPerView:1
                  },
                  1200: {
                     slidesPerView: 1
                  }
               }
               });
               var swiper_sale = new Swiper('.swiper_product_'+key, {
                  spaceBetween: 20,
                  loop: false,
                  speed: 1000,
                  autoplay: true,
                  slidesPerColumnFill: 'row',
                  slidesPerColumn: 2,
                  navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                     },
                  breakpoints: {
                     320: {
                        slidesPerView: 2
                     },
                     768: {
                        slidesPerView: 2
                     },
                     992: {
                        slidesPerView:2
                     },
                     1200: {
                        slidesPerView: 2
                     }
                  }
                  });
         </script>
      </div>
   </section>
   @else 
   <section class="section-index section_product_tab section_product_tab_{{$keyw}}">
      <div class="container">
         <div class="wrap_tab_index not-dqtab e-tabs ajax-tab-1" data-section-2="ajax-tab-1">
            <div class="section-title">
               <h2>
                  <a href="" title="">{{languageName($item->name)}}</a>
               </h2>
               <div class="title-separator">
                  <div class="separator-center"></div>
               </div>
            </div>
            <div class="">
                  <div class="tab1-123123 tab-content">
                     <div class="row load-after">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <div class="swiper_product_phu_kien swiper-container" style="border-radius:5px;">
                              <div class="swiper-wrapper" >
                                 @foreach ($item->product as $proty)
                                 <div class="swiper-slide">
                                    @include('layouts.product.item',['pro'=>$proty])
                                 </div>
                                 @endforeach
                              </div>
                              <div class="swiper-button-prev">
                              </div>
                              <div class="swiper-button-next">
                              </div>
                           </div>
                        </div>
                     </div>
                     @if (count($item->product) > 8)
                     <div class="view-more clearfix">
                        <a href="{{route('allListProCate',['danhmuc'=>$item->slug])}}" title="Xem tất cả" class="btn btn-primary frame">
                           Xem thêm
                        </a>
                     </div>
                     @endif
                  </div>
            </div>
         </div>
         <script>
            var swiper_sale_banner = new Swiper('.swiper_product_phu_kien', {
               spaceBetween: 20,
               loop: false,
               speed: 1000,
               autoplay: true,
               slidesPerColumnFill: 'row',
                  slidesPerColumn: 2,
               navigation: {
                     nextEl: '.swiper-button-next',
                     prevEl: '.swiper-button-prev',
                  },
               breakpoints: {
                  320: {
                     slidesPerView: 2
                  },
                  768: {
                     slidesPerView: 2
                  },
                  992: {
                     slidesPerView:2
                  },
                  1200: {
                     slidesPerView: 4
                  }
               }
               });

         </script>
      </div>
   </section>
   @endif
@endforeach
<section class="section-index section_blog_new">
   <div class="container">
      <div class="section-title">
         <h2>
            <a href="" title="Tin tức sự kiện">
            Tin tức sự kiện
            </a>
         </h2>
         <div class="title-separator">
            <div class="separator-center"></div>
         </div>
      </div>
      <div class="block-product-sale">
         <div class="swiper_blog swiper-container">
            <div class="swiper-wrapper load-after" data-section="section_blog_new">
               @foreach ($hotnews as $key => $item)
               <div class="swiper-slide">
                  <a href="{{route('detailBlog',['slug'=>$item->slug])}}" title="{{languageName($item->title)}}" class="news-top_item_img">
                     <div class="grow-0">
                        <div class="item-img">
                           <img src="{{$item->image}}" data-src="{{$item->image}}" alt="{{languageName($item->title)}}" class="lazyload duration-300" />
                        </div>
                     </div>
                     <div class="item-img-content">
                        <h3 class="line-clamp-2-new" style="margin-top:10px;">{{languageName($item->title)}}</h3>
                        {{-- 
                        <p class="time-post">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                              <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                           </svg>
                           <span>
                           {{date_format($item->created_at,'d/m/Y')}}
                           </span>
                        </p>
                        --}}
                     </div>
                  </a>
               </div>
               @endforeach
            </div>
            <div class="swiper-button-prev">
               <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff" stroke-width="2"/>
                  <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)" fill="black"/>
                  <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
               </svg>
            </div>
            <div class="swiper-button-next">
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
</section>
<script>
   $(document).ready(function ($) {
   	function runSwiperBlog() {
   		var swiper_blog = null;
   		function initSwiperBlog() {
   			swiper_blog = new Swiper('.swiper_blog', {
   				slidesPerView: 3,
   				spaceBetween: 20,
   				slidesPerGroup: 1,
   				navigation: {
   					nextEl: '.swiper_blog .swiper-button-next',
   					prevEl: '.swiper_blog .swiper-button-prev',
   				},
   				breakpoints: {
   					768: {
   						slidesPerView: 3,
   						spaceBetween: 20
   					},
   					992: {
   						slidesPerView: 3,
   						spaceBetween: 20
   					},
   					1024: {
   						slidesPerView: 3,
   						spaceBetween: 20
   					}
   				}
   			});
   		}
   		function destroySwiperBlog() {
   			if (swiper_blog) {
   				swiper_blog.destroy(true, true);
   				swiper_blog = null;
   			}
   		}
   		function toggleSwiperBlog() {
   			if ($(window).width() <= 767 && swiper_blog) {
   				destroySwiperBlog();
   			} else if ($(window).width() > 767 && !swiper_blog) {
   				initSwiperBlog();
   			}
   		}
   		toggleSwiperBlog();
   		$(window).resize(toggleSwiperBlog);
   	}
   	lazyBlockProduct('section_blog_new','0px 0px -250px 0px',runSwiperBlog);
   });
   
</script>
{{-- 
<section class="section-index section_brands">
   <div class="container">
      <div class="section-title">
         <h2>
            Đối tác của chúng tôi
         </h2>
         <div class="title-separator">
            <div class="separator-center"></div>
         </div>
      </div>
      <div class="swiper_brands swiper-container">
         <div class="swiper-wrapper">
            @foreach ($partner as $item)
            <div class="swiper-slide">
               <a href="{{$item->link}}" title="Brand 1" class="brand-item">
               <img data-src="{{$item->image}}" alt="Brand 1" width="225" height="113" class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC"/>
               </a>
            </div>
            @endforeach
         </div>
         <div class="swiper-button-prev">
            <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
               <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff" stroke-width="2"/>
               <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)" fill="black"/>
               <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
               <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
         </div>
         <div class="swiper-button-next">
            <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
               <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff" stroke-width="2"/>
               <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)" fill="black"/>
               <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
               <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
         </div>
      </div>
   </div>
</section>
<script>
   var swiper_brand = null;
   function initSwiperBrand() {
   	swiper_brand = new Swiper('.swiper_brands', {
   		slidesPerView: 6,
   		spaceBetween: 20,
   		watchOverflow: true,
   		slidesPerGroup: 1,
   		navigation: {
   			nextEl: '.swiper_brands .swiper-button-next',
   			prevEl: '.swiper_brands .swiper-button-prev',
   		},
   		breakpoints: {
   			640: {
   				slidesPerView: 4,
   				spaceBetween: 14
   			},
   			768: {
   				slidesPerView: 5,
   				spaceBetween: 14
   			},
   			992: {
   				slidesPerView: 6,
   				spaceBetween: 20
   			},
   			1024: {
   				slidesPerView: 6,
   				spaceBetween: 20
   			},
   			1200: {
   				slidesPerView: 8,
   				spaceBetween: 20
   			}
   		}
   	});
   }
   function destroySwiperBrand() {
   	if (swiper_brand) {
   		swiper_brand.destroy(true, true);
   		swiper_brand = null;
   	}
   }
   function toggleSwiperBrand() {
   	if ($(window).width() <= 767 && swiper_brand) {
   		destroySwiperBrand();
   	} else if ($(window).width() > 767 && !swiper_brand) {
   		initSwiperBrand();
   	}
   }
   toggleSwiperBrand();
   $(window).on('resize', function() {
   	toggleSwiperBrand();
   });
</script> --}}
@endsection
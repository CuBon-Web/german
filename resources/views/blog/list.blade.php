@extends('layouts.main.master')
@section('title')
{{$title_page}} 
@endsection
@section('description')
Tin tức cập nhật
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
<link rel="preload" as="style"  href="{{asset('frontend/css/mew_blog.scss.css')}}" type="text/css">
<link href="{{asset('frontend/css/mew_blog.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection
@section('content')
<div class="contentWarp ">
   <div class="breadcrumbs">
      <div class="container position-relative">
         <ul class="breadcrumb align-items-center m-0 pl-0 pr-0 small pt-2 pb-2">
            <li class="home">
               <a href="/" title="Trang chủ">
                  <svg width="12" height="10.633">
                     <use href="#svg-home"></use>
                  </svg>
                  Trang chủ
               </a>
               <span class="slash-divider ml-2 mr-2">/</span>
            </li>
            <li>Tin tức</li>
         </ul>
      </div>
   </div>
   <section class="blog-layout" itemscope="" itemtype="http://schema.org/Blog">
      <meta itemprop="name" content="Tin tức">
      <meta itemprop="description" content="
         &nbsp;">
      @if (count($blog) > 0)
      <div class="container mt-3 mb-3 lastest-articles">
         <div class="rounded p-3">
            <div class="row">
               @foreach ($blog as $key => $item)
                   @if ($key == 0)
                   <div class="col-md-7 col-12">
                     <div class="position-relative modal-open rounded-10 mb-3 mb-md-0">
                        <picture class="position-relative w-100 m-0 be_opa modal-open ratio3by2 aspect large-article rounded-10 d-block">
                           <source media="(min-width: 1200px)" srcset="{{$item->image}}">
                           <source media="(min-width: 992px)" srcset="{{$item->image}}">
                           <source media="(max-width: 569px)" srcset="{{$item->image}}">
                           <source media="(max-width: 480px)" srcset="{{$item->image}}">
                           <img src="{{$item->image}}" class=" d-block img img-cover position-absolute" alt="{{languageName($item->title)}}">
                        </picture>
                        <div class="position-absolute large-article-info p-0 p-lg-4 p-md-3">
                           <h3 class="title_blo font-weight-bold mt-2 mt-md-0 mb-0 mb-md-3 ">
                              <a class="line_2" href="{{route('detailBlog',['slug'=>$item->slug])}}" title="{{languageName($item->title)}}">{{languageName($item->title)}}</a>
                           </h3>
                           <span class="d-block d-md-none text-gray small mt-1 mb-1">{{date_format($item->created_at,'d/m/Y')}}</span>
                           <span class="d-block line_2">{{languageName($item->description)}}</span>
                        </div>
                     </div>
                  </div>
                  @endif
               @endforeach
               <div class="col-12 col-md-5">
                  @foreach ($blog as $key => $item)
                     @if ($key > 0 && $key < 6)
                        <article class="blog-item-list clearfix mb-3 row">
                           <div class="col-4 col-lg-3 pr-0 pl-md-0">
                              <a href="{{route('detailBlog',['slug'=>$item->slug])}}" title="{{languageName($item->title)}}" class=" d-block modal-open thumb_img_blog_list thumb rounded" title="{{languageName($item->title)}}"> 
                              <span class="modal-open position-relative d-block w-100 m-0 ratio3by2 has-edge aspect zoom">
                              <img src="{{url('frontend/images/placeholder_1x1.png')}}" data-src="{{$item->image}}" decoding="async" alt="{{languageName($item->title)}}" class="lazy d-block img img-cover position-absolute loaded">
                              </span>
                              </a>
                           </div>
                           <div class="blogs-rights col-8 col-lg-9">
                              <h3 class="blog-item-name font-weight-bold mb-1 title_blo text-gold">
                                 <a class="line_1" href="{{route('detailBlog',['slug'=>$item->slug])}}" title="{{languageName($item->title)}}" title="{{languageName($item->title)}}">{{languageName($item->title)}}</a>
                              </h3>
                              <div class="post-time small">{{date_format($item->created_at,'d/m/Y')}}</div>
                              <div class="sum line_2 h-auto text-justify">{{languageName($item->description)}}</div>
                           </div>
                        </article>
                     @endif
                     @endforeach
               </div>
            </div>
         </div>
      </div>
      @else 
      <div class="container mt-3 mb-3 lastest-articles">
         <div class="rounded p-3">
            <div class="row">
               <div class="col-12">
                  <p class="text-center alert alert-warning mb-0">Hiện tại danh mục không có bài viết</p>
               </div>
            </div>
         </div>
      </div>
      @endif
      

      

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
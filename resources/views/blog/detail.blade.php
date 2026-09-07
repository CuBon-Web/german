@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
@endsection
@section('css')
<link href="{{asset('frontend/css/breadcrumb_style.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="preload" as="style"  href="{{asset('frontend/css/blog_article_style.scss.css')}}" type="text/css">
<link href="{{asset('frontend/css/blog_article_style.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection
@section('js')
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
            <a href="" title="Tin Tức"><span>Tin Tức</span></a>	
            <span class="mr_lr">
               &nbsp;
               <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-chevron-right fa-w-10">
                  <path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" class=""></path>
               </svg>
               &nbsp;
            </span>
         </li>
         <li><strong><span >{{languageName($blog_detail->title)}}</span></strong></li>
      </ul>
   </div>
</section>
<section class="blogpage">
   <div class="container layout-article" itemscope itemtype="https://schema.org/Article">
      <div class="bg_blog">
         <meta itemprop="mainEntityOfPage" content="{{url()->current()}}">
         <meta itemprop="description" content="">
         <meta itemprop="headline" content="{{languageName($blog_detail->title)}}">
         <meta itemprop="image" content="{{url(''.$blog_detail->image)}}">
         <meta itemprop="datePublished" content="05-01-2024">
         <meta itemprop="dateModified" content="05-01-2024">

         <article class="article-main">
            <div class="row">
               <div class="right-content col-lg-9 col-12">
                  <div class="article-details bg-shadow clearfix">
                     <h1 class="article-title">{{languageName($blog_detail->title)}}</h1>
                     <div class="posts">
                        <div class="time-post f">
                           <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="clock" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-clock fa-w-16">
                              <path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm216 248c0 118.7-96.1 216-216 216-118.7 0-216-96.1-216-216 0-118.7 96.1-216 216-216 118.7 0 216 96.1 216 216zm-148.9 88.3l-81.2-59c-3.1-2.3-4.9-5.9-4.9-9.7V116c0-6.6 5.4-12 12-12h14c6.6 0 12 5.4 12 12v146.3l70.5 51.3c5.4 3.9 6.5 11.4 2.6 16.8l-8.2 11.3c-3.9 5.3-11.4 6.5-16.8 2.6z" class=""></path>
                           </svg>
                           Thứ Sáu,
                          {{date_format($blog_detail->created_at,'d/m/Y')}}
                        </div>
                        <div class="time-post">
                           <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-user fa-w-14">
                              <path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z" class=""></path>
                           </svg>
                           <span>Admin</span>
                        </div>
                     </div>
                     <div class="article-image">
                        <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{url(''.$blog_detail->image)}}" alt="{{languageName($blog_detail->title)}}">
                     </div>
                     
                     <div class="rte article-content-main">
                        {!!languageName($blog_detail->content)!!}
                     </div>
                     <div class="social-sharing">
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
                  <div class="blog_related">
                     <div class="title">Tin tức liên quan</div>
                     <div class="row">
                        @foreach ($bloglq as $item)
                        <div class="col-lg-4 col-md-4 col-sm-6">
                           <div class="item-blog">
                              <div class="wrapper">
                                 <a class="block-thumb thumb" href="{{route('detailBlog',['slug'=>$item->slug])}}" title="{{languageName($item->title)}}">
                                 <img width="400" height="240" class="lazyload duration-300" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" 
                                    data-src="{{$item->image}}"  alt="{{languageName($item->title)}}">
                                 </a>
                                 <div class="block-content">
                                    <h3>
                                       <a href="{{route('detailBlog',['slug'=>$item->slug])}}" title="{{languageName($item->title)}}" class="line-clamp-2-new"{{languageName($item->title)}}</a>
                                    </h3>
                                    <div class="article-content">
                                       <p class="justify line-clamp line-clamp-3">
                                          {{languageName($item->description)}}
                                       </p>
                                       <div class="article-info">
                                          <p class="time-post">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                                             </svg>
                                             <span>
                                                {{date_format($item->created_at,'d/m/Y')}}
                                             </span>
                                          </p>
                                          <a href="{{route('detailBlog',['slug'=>$item->slug])}}" title="Đọc thêm" class="read-more">Đọc thêm »</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        @endforeach
                     </div>
                  </div>
               </div>
               <div class="blog_left_base col-lg-3 col-12">
                  <div class="side-right-stick">
                     <div class="aside-content aside-content-blog">
                        <h2 class="title-head">
                           <span>Danh mục tin tức</span>
                        </h2>
                        <nav class="nav-category">
                           <ul class="nav navbar-pills">
                              @foreach ($blogCate as $item)
                              <li class="nav-item  relative">
                                 <a title="{{languageName($item->name)}}" class="nav-link" href="{{route('listCateBlog',['slug'=>$item->slug])}}">{{languageName($item->name)}}</a>
                              </li>
                              @endforeach
                           </ul>
                        </nav>
                     </div>
                     <script>
                        $(".aside-content-blog .nav-category .open_mnu").click(function(){
                           $(this).toggleClass('cls_mn').next().slideToggle();
                        });
                     </script>	
                     <div class="blog_noibat">
                        <h2 class="h2_sidebar_blog">
                           <a href="kien-thuc" title="Tin tức nổi bật">Tin tức nổi bật</a>
                        </h2>
                        <div class="blog_content">
                           @foreach ($blognew as $blgnew)
                           <div class="item clearfix">
                              <div class="post-thumb">
                                 <a class="image-blog scale_hover" href="{{route('detailBlog',['slug'=>$blgnew->slug])}}" title="{{languageName($blgnew->title)}}">
                                 <img class="img_blog lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$blgnew->image}}"  alt="{{languageName($blgnew->title)}}">
                                 </a>
                              </div>
                              <div class="contentright">
                                 <h3><a title="{{languageName($blgnew->title)}}" href="{{route('detailBlog',['slug'=>$item->slug])}}">{{languageName($blgnew->title)}}</a></h3>
                                 {{-- <p class="time-post">
                                    <span>
                                       {{date_format($blgnew->created_at,'d/m/Y')}}
                                    </span>
                                 </p> --}}
                              </div>
                           </div>
                           @endforeach
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </article>
      </div>
   </div>
</section>
@endsection
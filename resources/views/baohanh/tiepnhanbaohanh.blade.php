@extends('layouts.main.master')
@section('title')
Tiếp nhận bảo hành
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('css')
<link href="{{asset('frontend/css/breadcrumb_style.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="preload" as="style"  href="{{asset('frontend/css/blog_article_style.scss.css')}}" type="text/css">
<link href="{{asset('frontend/css/blog_article_style.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
<style>
    .aside-content-blog .nav-category ul .nav-item .nav-link.active {
    background: #ee1b23;
    color: white;
}
</style>
@endsection
@section('script')

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
          <li><strong ><span>Tiếp nhận bảo hành</span></strong></li>
       </ul>
    </div>
 </section>
 <div class="blog_wrapper layout-blog mt-3" itemscope itemtype="https://schema.org/Blog">
    <meta itemprop="name" content="Tiếp nhận bảo hành">
     <div class="container">
       <div class="row">
          <div class="right-content col-lg-12 col-12">
            
             <div class="row list-news">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="side-right-stick">
                        <div class="aside-content aside-content-blog">
                           <h2 class="title-head">
                              <span>Bảo Hành</span>
                           </h2>
                           <nav class="nav-category">
                                <ul class="nav navbar-pills">
                                    <li class="nav-item  relative">
                                        <a title="Tin tức" class="nav-link " href="{{route('dangkybaohanh')}}">Đăng ký bảo hành</a>
                                    </li>
                                    <li class="nav-item  relative">
                                        <a title="Tin tức" class="nav-link " href="{{route('tracuubaohanh')}}">Tra cứu bảo hành</a>
                                    </li>
                                    <li class="nav-item  relative">
                                        <a title="Tin tức" class="nav-link active" href="{{route('tiepnhanbaohanh')}}">Tiếp nhận bảo hành</a>
                                    </li>
                                    {{-- <li class="nav-item  relative">
                                        <a title="Tin tức" class="nav-link" href="{{route('daiLy')}}">Trạm bảo hành</a>
                                    </li> --}}
                                </ul>
                           </nav>
                        </div>
                     </div>
                </div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12">
                    <div class="page-full">
                        <iframe src="https://verify.icheck.vn/n/add-on/warranty_receipt?domain=german.vn" width="100%" height="500px"
                        class="border-0" style="box-shadow: 0px 0px 10px 0px rgb(0 0 0 / 94%);"></iframe>
                    </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>

@endsection
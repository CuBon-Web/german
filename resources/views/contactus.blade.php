@extends('layouts.main.master')
@section('title')
Liên hệ với chúng tôi
@endsection
@section('description')
Liên hệ với chúng tôi
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
<link href="{{asset('frontend/css/breadcrumb_style.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="preload" as="style"  href="{{asset('frontend/css/contact_style.scss.css')}}" type="text/css">
<link href="{{asset('frontend/css/contact_style.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
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
		  <li><strong ><span>Liên hệ</span></strong></li>
	   </ul>
	</div>
 </section>
 <h1 class="title-head-contact a-left d-none">Liên hệ</h1>
 <div class="layout-contact">
	<div class="container">
	   <div class="bg-shadow">
		  <div class="row">
			 <div class="col-lg-12 col-12">
				<div class="contact">
				   <h4>
					  {{$setting->company}}
				   </h4>
				   <div class="des_foo">
				   </div>
				   <div class="time_work">
					  <div class="item">
						 <b>Địa chỉ:</b> 
						 {{$setting->address1}}
					  </div>
					  <div class="item">
						 <b>Hotline:</b> <a class="fone" href="tel:{{$setting->phone1}}" title="{{$setting->phone1}}">{{$setting->phone1}}</a>
					  </div>
					  <div class="item">
						 <b>Email:</b> <a href="mailto:{{$setting->email}}"  title="{{$setting->email}}">{{$setting->email}}</a>
					  </div>
				   </div>
				</div>
				<div class="form-contact">
				   <h4>
					  Liên hệ với chúng tôi
				   </h4>
				   <div id="pagelogin">
					  <form action="{{route('postcontact')}}" method="POST" id="contact" accept-charset="UTF-8">
						@csrf
						 <div class="group_contact">
							<div class="row">
							   <div class="col-lg-6 col-md-6 col-sm-12 col-12">
								  <input placeholder="Họ và tên" type="text" class="form-control  form-control-lg" required value="" name="name">
							   </div>
							   <div class="col-lg-6 col-md-6 col-sm-12 col-12">
								  <input placeholder="Email" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required id="email1" class="form-control form-control-lg" value="" name="email">
							   </div>
							   <div class="col-lg-12 col-md-12 col-sm-12 col-12">
								  <input type="number" placeholder="Điện thoại" name="phone"  class="form-control form-control-lg" required>
							   </div>
							   <div class="col-lg-12 col-md-12 col-sm-12 col-12">
								  <textarea placeholder="Nội dung" name="mess" id="comment" class="form-control content-area form-control-lg" rows="5" Required></textarea>
								  <button type="submit" class="btn btn-primary">
									 Gửi tin nhắn 
									 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
										<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"></path>
									 </svg>
								  </button>
							   </div>
							</div>
						 </div>
					  </form>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</div>
 </div>



@endsection
@extends('layouts.main.master')
@section('title')
{{$setting->company}}
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('css')
<link href="{{asset('frontend/css/breadcrumb_style.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="preload" as="style"  href="{{asset('frontend/css/blog_article_style.scss.css')}}" type="text/css">
<link href="{{asset('frontend/css/blog_article_style.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection
@section('script')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCW4raP0KCFA-xGWojKLqho8_5-_wv3uoM&libraries=geometry,places"></script>
@php
        $daily = json_decode($setting->daily);
    @endphp
<script>
    
    //Map
    var geocoder, location1, location2;
    var map;
    var position = [];
    var markers = [];
    var infowindow;
    var radius = 10;
    var input_address;
    var count_list_shop = 0;
    var img_base = '/frontend/images/';
    var html_list_shop = "";
    const obj = {};
    var arr = @json($daily);
    var shop = [obj].concat(arr);


    function initialize() {
        geocoder = new google.maps.Geocoder();
        var latlng = new google.maps.LatLng(14.058324, 108.277199);
        var mapOptions = {
            zoom: 5,
            center: latlng
        }
        map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    }

    function setAllMap(map) {
        console.log(shop);
        for (i = 1; i < shop.length; i++) {
            image = img_base + "m_store_"+i+".png";
                                    console.log(image);
            position[i] = new google.maps.LatLng(shop[i].lat, shop[i].lng);
            markers[i] = new google.maps.Marker({
                position: position[i],
                icon: image
            });
            markers[i].setMap(map);
            callback(i);
        }
    }

    function callback(i) {
        google.maps.event.addListener(markers[i], 'click', function () {
            if (infowindow) infowindow.close();
            content = "<div class='shop_info_marker'><b>" + shop[i].name + "</b><br><span class='summary_marker'>" + shop[i].summary + "</span></div>";
            infowindow = new google.maps.InfoWindow({
                content: content
            });
            infowindow.open(map, markers[i]);
            map.setZoom(13);
            map.setCenter(position[i]);
        });
    }

    //func show info marker
    function show_info(marker) {
        google.maps.event.trigger(marker, 'click');
    }
    jQuery(function () {
        initialize();
        setAllMap(map);

        for (i = 1; i < shop.length; i++) {
            shopCount = i;
            jQuery("#list_shop .list").append("<div class='item' onclick='show_info(markers[" + i + "])'><h3>" + shopCount + "." + shop[i].name + "</h3><p class='address'>" + shop[i].address + "</p></div>");
        }

        $('.js-doidiadiem').on('change',function(){
          var city = this.value ;
          var html2 = "";
          var count2 = 0 ;

          for (i = 1; i < shop.length; i++) {
            if (shop[i].city == city){
            count2++;
            html2+="<div class='item' onclick='show_info(markers[" + i + "])'><h3>" + count2 + "." + shop[i].name + "</h3><p class='address'>" + shop[i].address + "</p></div>";
            jQuery("#list_shop .list").html(html2);
            }
          }
        })
    });

</script>
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
          <li><strong ><span>Hệ Thống Đại Lý</span></strong></li>
       </ul>
    </div>
 </section>
 <div class="blog_wrapper layout-blog" itemscope itemtype="https://schema.org/Blog">
    <meta itemprop="name" content="Hệ Thống Đại Lý">
     <div class="container">
       <div class="row">
          <div class="right-content col-lg-12 col-12">
             <div class="title-page">
                <h1>Hệ Thống Đại Lý </h1>
                <div class="title-separator">
                   <div class="separator-center"></div>
                </div>
             </div>
             <div class="row list-news">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="change-location">
                        <select name="drlCity" id="drlCity" class="form-control js-doidiadiem" >
                            <option value="">Chọn tỉnh thành ...</option>
                            <option value="1">Hà Nội</option>
                            <option value="2">Tp Hồ Chí Minh</option>
                            <option value="3">Đà Nẵng</option>
                            <option value="4">Bắc Ninh</option>
                            <option value="5">Quảng Trị</option>
                            <option value="6">Bình Dương</option>
                            <option value="7">Đồng Nai</option>
                            <option value="8">Lâm Đồng</option>
                            <option value="9">Khánh Hòa</option>
                            <option value="10">Đăk Lăk</option>
                            <option value="11">Nam Định</option>
                            <option value="12">Bình Định</option>
                            <option value="13">Hải Dương</option>
                            <option value="14">Phú Thọ</option>
                            <option value="15">Vĩnh Phúc</option>
                            <option value="16">Long An</option>
                            <option value="17">Bà Rịa - Vũng Tàu</option>
                            <option value="18">Thái Bình</option>
                            <option value="19">Quảng Nam</option>
                            <option value="20">Hòa Bình</option>
                            <option value="21">Thừa Thiên - Huế</option>
                            <option value="22">Thái Nguyên</option>
                            <option value="23">Nghệ An</option>
                            <option value="24">Thanh Hóa</option>
                            <option value="25">Quảng Bình</option>
                        </select>
                    </div>
                    <div id="list_shop">        
                        <span class="list"></span>
                    </div><!--list_shop-->
                </div>
                <div class="col-lg-9 col-md-8 col-sm-6 col-xs-12">
                    <div class="page-full">
                        <div id="map-canvas" style="width:100%; height:600px; float:right;"></div>
                  
                       
                  
                        <div style="clear:both;"></div>
                    </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>

@endsection
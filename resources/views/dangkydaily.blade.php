@extends('layouts.main.master')
@section('title')
Tiếp nhận bảo hành
@endsection
@section('description')
{{$setting->webname}}
@endsection
@section('css')
<link href="{{asset('frontend/css/breadcrumb_style.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="preload" as="style"  href="{{asset('frontend/css/product_style.scss.css')}}" type="text/css">

<link href="{{asset('frontend/css/product_style.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('frontend/css/breadcrumb_style.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="preload" as="style"  href="{{asset('frontend/css/blog_article_style.scss.css')}}" type="text/css">
<link href="{{asset('frontend/css/blog_article_style.scss.css')}}" rel="stylesheet" type="text/css" media="all" />
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
<script>
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
</script>
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
          <li><strong ><span>Tiếp nhận bảo hành</span></strong></li>
       </ul>
    </div>
 </section>
 <div class="blog_wrapper layout-blog mt-3" itemscope itemtype="https://schema.org/Blog">
    <meta itemprop="name" content="Tiếp nhận bảo hành">
     <div class="container">
        <div class="row">
            <div class="col-12 product-review-details  col-lg-12">
               <div class="product-tab e-tabs not-dqtab">
                  <ul class="tabs tabs-title clearfix " style="text-align: center;display:block;">
                     <li class="tab-link active" data-tab="#tab-1">
                        <h3>Đăng ký đại lý</h3>
                     </li>
                     <li class="tab-link" data-tab="#tab-2">
                        <h3>Danh sách đại lý</h3>
                     </li>
                  </ul>
                  <div class="tab-float">
                     <div id="tab-1" class="tab-content active content_extab">
                        <div class="rte product_getcontent product-review-content">
                            <div id="pagelogin">
                                <form id="dangkydaily" action="{{route('postdangkydaily')}}" accept-charset="UTF-8" method="post">
                                  @csrf
                                   <div class="group_contact">
                                      <div class="row">
                                         <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <label for="">Họ và tên *</label>
                                            <input placeholder="Họ và tên" type="text" class="form-control  form-control-lg" required value="" name="name">
                                         </div>
                                         <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <label for="">Số điện thoại *</label>
                                            <input placeholder="0961455***" type="text" required  class="form-control form-control-lg" value="" name="phone">
                                         </div>
                                         <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                                            <label for="">Email</label>
                                            <input placeholder="myemail@gmail.com" type="text"  class="form-control form-control-lg" value="" name="email">
                                         </div>
                                         <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                            <label for="">Địa chỉ *</label>
                                            <input placeholder="Số 1, Nguyễn Văn Trỗi" type="text" required  class="form-control form-control-lg" value="" name="address">
                                         </div>
                                         <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                            <label for="">Tỉnh/Thành phố *</label>
                                            <input hidden type="text" id="valueprovince" name="province">
                                            <select name="selectprovince" id="province" class="form-control form-control-lg" onchange="choiseProvince()">
                                                <option value="">--Chọn--</option>
                                                @foreach ($province as $item)
                                                    <option value="{{$item->province_id}}">{{$item->name}}</option>  
                                                @endforeach
                                            </select>
                                         </div>
                                         <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                            <label for="">Quận/Huyện *</label>
                                            <input hidden type="text" id="valuedistrict" name="district">
                                            <select name="selectdistrict" id="district" class="form-control form-control-lg" disabled onchange="choiseDistrrict()">
                                                <option value="">--Chọn--</option>
                                            </select>
                                         </div>
                                         <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                            <label for="">Phường/Xã *</label>
                                            <input hidden type="text" id="valuewards" name="wards">
                                            <select name="selectwards" id="wards" class="form-control form-control-lg" disabled onchange="choiseWards()">
                                                <option value="">--Chọn--</option>
                                            </select>
                                         </div>
                                         <script>
                                            
                                         </script>
                                         <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                            <h3 for="" style="font-size: 1.6rem; font-weight: 600;">Công việc hiện tại của bạn *</h3>
                                            <div class="checkboxe" >
                                                <input type="checkbox" id="vehicle1" name="congviec[]" value="Chủ cửa hàng đại lý đã và đang phân phối các sản phẩm thiết bị gia dụng, thiết bị nhà bếp ...">
                                                <label for="vehicle1" class="laboe" > Chủ cửa hàng đại lý đã và đang phân phối các sản phẩm thiết bị gia dụng, thiết bị nhà bếp ...</label>
                                            </div>
                                            <div class="checkboxe" >
                                                <input type="checkbox" id="vehicle2" name="congviec[]" value="Chủ các xưởng sản xuất nội thất">
                                                <label for="vehicle2" class="laboe"> Chủ các xưởng sản xuất nội thất</label>
                                            </div>
                                            <div class="checkboxe" >
                                                <input type="checkbox" id="vehicle3" name="congviec[]" value="Kinh doanh tự do trên các nền TMDT">
                                                <label for="vehicle3" class="laboe"> Kinh doanh tự do trên các nền TMDT</label>
                                            </div>
                                            <div class="checkboxe" >
                                                <input type="checkbox" id="vehicle4" name="congviec[]" value="Danh mục khác. Sẽ trao đổi trực tiếp khi liên hệ">
                                                <label for="vehicle4" class="laboe"> Danh mục khác. Sẽ trao đổi trực tiếp khi liên hệ</label>
                                            </div>
                                         </div>
                                         <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                            <h3 for="" style="font-size: 1.6rem; font-weight: 600;">Nhu cầu quý Khách hàng</h3>
                                            <div class="checkboxe" >
                                                <input type="radio" checked id="nhucau1" name="nhucau" value="Chủ cửa hàng đại lý đã và đang phân phối các sản phẩm thiết bị gia dụng, thiết bị nhà bếp ...">
                                                <label for="nhucau1" class="laboe" > Chủ cửa hàng đại lý đã và đang phân phối các sản phẩm thiết bị gia dụng, thiết bị nhà bếp ...</label>
                                            </div>
                                            <div class="checkboxe" >
                                                <input type="radio" id="nhucau2" name="nhucau" value="Chủ các xưởng sản xuất nội thất">
                                                <label for="nhucau2" class="laboe"> Chủ các xưởng sản xuất nội thất</label>
                                            </div>
                                           
                                         </div>
                                         <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                            <label for="">Ghi chú</label>
                                            <textarea placeholder="Nội dung" name="mess" id="comment" class="form-control content-area form-control-lg" rows="3"></textarea>
                                         </div>
                                         
                                         <div class="col-lg-12 col-md-12 col-sm-12 col-12" style="text-align: center;margin-top:20px;">
                                            <button type="submit" class="btn btn-primary">
                                                <span class="loader ml-15 spin-icon"></span>  Đăng ký
                                              
                                            </button>
                                         </div>
                                      </div>
                                   </div>
                                </form>
                                <script>
                                    $('#dangkydaily').validate({
                                        rules: {
                                        "name": {
                                            required: true,
                                        },
                                        "phone": {
                                            required: true,
                                            minlength: 8
                                        },
                                        "congviec":{
                                            required: true,
                                        },
                                        "selectprovince":{
                                            required: true,
                                        },
                                        "selectdistrict":{
                                            required: true,
                                        },
                                        "selectwards":{
                                            required: true,
                                        },
                                        "address":{
                                            required: true,
                                        }
                                        },
                                        messages: {
                                        "name": {
                                            required: "Tên bạn là gì?",
                                        },
                                        "phone": {
                                            required: "Nhập sdt liên hệ",
                                        },
                                        "congviec":{
                                            required: "Chọn công việc hiện tại",
                                        },
                                        "selectprovince":{
                                            required: "Chọn tỉnh thành",
                                        },
                                        "selectdistrict":{
                                            required: "Chọn quận/huyện",
                                        },
                                        "selectwards":{
                                            required: "Chọn phường/xã",
                                        },
                                        "address":{
                                            required: 'Nhập địa chỉ như số nhà, tên đường..',
                                        }
                                        },
                                    submitHandler: function(form) {
                                        document.getElementById("dangkydaily").submit();
                                    }
                                    });
                                </script>
                             </div>
                        </div>
                     </div>
                     <div id="tab-2" class="tab-content content_extab">
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
        </div>
       
    </div>
 </div>

@endsection
@php $total = 0; $qty = 0 ; @endphp
@foreach((array) session('cart') as $id => $details)
      @php 
      $total += ($details['price'] - ($details['price']*($details['discount']/100))) * $details['quantity'] ;
      $qty += $details['quantity'] ;
      @endphp
@endforeach
<header class="header">
    <div class="main-header">
       <div class="container">
          <div class="box-hearder">
             <div class="row align-items-center">
               <div class="col-6 col-lg-4 col-md-4 header-logo text-left">
                  <a href="{{route('home')}}" class="logo-wrapper" title="Sudes Nest">
                  <img width="360" height="96" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$setting->logo}}" alt="Sudes Nest" class="lazyload">
                  </a>
               </div>
               <div class="col-6 col-lg-8 col-md-8 header-right">
                  <div class="navholder d-none d-lg-block">
                     <nav id="subnav">
                        <ul>
                           
                           <li>
                              <a href="#">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                 <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                              </svg> Hotline: {{$setting->phone1}} / CSKH - Bảo Hành: {{$setting->phone2}}</a>
                           </li>
                           
                        </ul>
                     </nav>
                     <div class="header_line"><p class="text-center"><span class="mar-l5">GERMAN HOME WARE AND ACCESSORIES</span></p></div>
                  </div>
                  <div class="sudes-header-stores">
                     <div class="lang-wrap">
                        <a href="javascript:;" onclick="translateheader('vi')"><img width="40" src="{{url('frontend/images/vn.png')}}" alt=""></a>
                        {{-- <span>/</span> --}}
                        <a href="javascript:;" onclick="translateheader('en')"><img width="40" src="{{url('frontend/images/eng.png')}}" alt=""></a>
                     </div>
						</div>
                   <button class="menu-icon md-hidden" aria-label="Menu" id="btn-menu-mobile" title="Menu">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                         <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
                      </svg>
                   </button>
               </div>
                
                {{-- <div class="col-12 col-md-12 col-lg-3 header-mid">
                  
                </div> --}}
                
             </div>
          </div>
       </div>
    </div>
    <div class="header-menu">
       <div class="container">
          <div class="navigation-horizontal">
             <div class="title_menu md-hidden">
                <ul id="tabs-menu-mb">
                   <li class="tab-link" data-tab="tab-menu-1">Danh mục</li>
                   <li class="tab-link" data-tab="tab-menu-2">Menu</li>
                </ul>
                <div class="close-mb-menu"></div>
             </div>
             <div class="row">
                <div class="col-lg-3 col-sm-12 col-xs-12 col-12 sudes-cate-header tab-content-mb" id="tab-menu-1">
                   <div class="title">
                      <svg class="icon-left" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M7 0H1C0.734784 0 0.48043 0.105357 0.292893 0.292893C0.105357 0.48043 0 0.734784 0 1V7C0 7.26522 0.105357 7.51957 0.292893 7.70711C0.48043 7.89464 0.734784 8 1 8H7C7.26522 8 7.51957 7.89464 7.70711 7.70711C7.89464 7.51957 8 7.26522 8 7V1C8 0.734784 7.89464 0.48043 7.70711 0.292893C7.51957 0.105357 7.26522 0 7 0V0ZM6 6H2V2H6V6ZM17 0H11C10.7348 0 10.4804 0.105357 10.2929 0.292893C10.1054 0.48043 10 0.734784 10 1V7C10 7.26522 10.1054 7.51957 10.2929 7.70711C10.4804 7.89464 10.7348 8 11 8H17C17.2652 8 17.5196 7.89464 17.7071 7.70711C17.8946 7.51957 18 7.26522 18 7V1C18 0.734784 17.8946 0.48043 17.7071 0.292893C17.5196 0.105357 17.2652 0 17 0V0ZM16 6H12V2H16V6ZM7 10H1C0.734784 10 0.48043 10.1054 0.292893 10.2929C0.105357 10.4804 0 10.7348 0 11V17C0 17.2652 0.105357 17.5196 0.292893 17.7071C0.48043 17.8946 0.734784 18 1 18H7C7.26522 18 7.51957 17.8946 7.70711 17.7071C7.89464 17.5196 8 17.2652 8 17V11C8 10.7348 7.89464 10.4804 7.70711 10.2929C7.51957 10.1054 7.26522 10 7 10ZM6 16H2V12H6V16ZM14 10C11.794 10 10 11.794 10 14C10 16.206 11.794 18 14 18C16.206 18 18 16.206 18 14C18 11.794 16.206 10 14 10ZM14 16C12.897 16 12 15.103 12 14C12 12.897 12.897 12 14 12C15.103 12 16 12.897 16 14C16 15.103 15.103 16 14 16Z" fill="#F4342A"></path>
                      </svg>
                      <span>Danh mục sản phẩm</span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right icon-right" viewBox="0 0 16 16">
                         <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
                      </svg>
                   </div>
                   <div class="sudes-list-cate" data-section="header_nav_cate">
                      <ul class="sudes-main-cate">
                        @foreach ($categoryhome as $item)
                         <li class="{{count($item->typeCate) > 0 ? 'sudes-main-cate-has-child' : ''}} menu-item-count ">
                            <a href="{{route('allListProCate',['danhmuc'=>$item->slug])}}" title="{{languageName($item->name)}}">
                            <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAYAAAAfFcSJAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAANSURBVBhXYzh8+PB/AAffA0nNPuCLAAAAAElFTkSuQmCC" data-src="{{$item->avatar}}" alt="{{languageName($item->name)}}" />
                            {{languageName($item->name)}}
                            </a>
                            @if (count($item->typeCate) > 0)
                            <i class="open_mnu down_icon"></i>
                            <ul class="menu-child sub-menu sudes-sub-mega-menu">
                                @foreach ($item->typeCate as $type)
                                <li class="{{count($item->typeCate) > 0 ? 'sudes-main-cate-has-child' : ''}} clearfix">
                                    <a href="{{route('allListType',['danhmuc'=>$item->slug,'loaidanhmuc'=>$type->slug])}}" title="{{languageName($type->name)}}">{{languageName($type->name)}}</a>
                                    @if (count($type->typetwo) > 0)
                                    <i class="open_mnu down_icon"></i>
                                    <ul class="menu-child menu-child-2 sub-menu clearfix">
                                        @foreach ($type->typetwo as $ttwo)
                                        @if ($ttwo->status == 1)
                                       <li>
                                          <a href="{{route('allListTypeTwo',['danhmuc'=>$item->slug,'loaidanhmuc'=>$type->slug,'loai2'=>$ttwo->slug])}}" title="{{languageName($ttwo->name)}}">{{languageName($ttwo->name)}}</a>
                                       </li>
                                       @endif
                                       @endforeach
                                    </ul>
                                    @endif
                                 </li>
                                @endforeach
                               
                            </ul>
                            @endif
                         </li>
                         @endforeach
                      </ul>
                   </div>
                   <script>
                      if ($(window).width() >= 992) {
                          var menu_limit = "10";
                          if (isNaN(menu_limit)){
                              menu_limit = 10;
                          } else {
                              menu_limit = 9;
                          }
                          var sidebar_length = $('.menu-item-count').length;
                          if (sidebar_length > (menu_limit + 1) ){
                              $('.sudes-list-cate > ul').each(function(){
                                  $('.menu-item-count',this).eq(menu_limit).nextAll().hide().addClass('toggleable');
                                  $(this).append('<li class="more"><a title="Xem thêm...">Xem thêm...</a></li>');
                              });
                              $('.sudes-list-cate > ul').on('click','.more', function(){
                                  if($(this).hasClass('less')){
                                      $(this).html('<a title="Xem thêm...">Xem thêm...</a>').removeClass('less');
                                  } else {
                                      $(this).html('<a title="Thu gọn...">Thu gọn...</a>').addClass('less');;
                                  }
                                  $(this).siblings('li.toggleable').slideToggle({
                                      complete: function () {
                                          var divHeight = $('.sudes-main-cate').height(); 
                                      }
                                  });
                              });
                          }
                      }
                   </script>
                </div>
                <div class="col-lg-9 col-sm-12 col-xs-12 col-12 sudes-main-header tab-content-mb" id="tab-menu-2">
                   <div class="col-menu has-promo-btn">
                      <ul id="nav" class="nav">
                         <li class="nav-item active">
                            <a class="nav-link" href="{{route('home')}}" title="Trang chủ">Trang chủ</a>
                         </li>
                         <li class="nav-item has-childs " data-section="header_nav">
                           <a href="" class="nav-link" title="Chính sách">
                              Giới thiệu
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                 <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
                              </svg>
                           </a>
                           <i class="open_mnu down_icon"></i>
                           <ul class="dropdown-menu">
                               @foreach ($pageContent as $item)
                                   @if ($item->type == 've-chung-toi')
                                   <li class="nav-item-lv2">
                                       <a class="nav-link" href="{{route('pagecontent',['slug'=>$item->slug])}}" title="{{$item->title}}">{{$item->title}}</a>
                                    </li>
                                   @endif
                               @endforeach
                               <li class="nav-item-lv2">
                                 <a class="nav-link" href="{{route('lienHe')}}" title="Liên Hệ">Liên Hệ</a>
                              </li>
                           </ul>
                        </li>
                         
                         <li class="nav-item has-childs " data-section="header_nav">
                            <a href="" class="nav-link" title="Chính sách">
                              Đại lý
                               <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                  <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
                               </svg>
                            </a>
                            <i class="open_mnu down_icon"></i>
                            <ul class="dropdown-menu">
                                @foreach ($pageContent as $item)
                                    @if ($item->type == 'ho-tro-khanh-hang')
                                    <li class="nav-item-lv2">
                                        <a class="nav-link" href="{{route('pagecontent',['slug'=>$item->slug])}}" title="{{$item->title}}">{{$item->title}}</a>
                                     </li>
                                    @endif
                                @endforeach
                                <li class="nav-item-lv2">
                                 <a class="nav-link" href="{{route('daiLy')}}" title="Danh sách đại lý">Danh sách đại lý</a>
                              </li>
                                <li class="nav-item-lv2">
                                    <a class="nav-link" href="{{route('dangkydaily')}}" title="Đăng ký đại lý ủy quyền">Đăng ký đại lý ủy quyền</a>
                                 </li>
                            </ul>
                         </li>
                         <li class="nav-item has-childs " data-section="header_nav">
                           <a href="javascript:;" class="nav-link" title="Tin tức">
                              Hỗ trợ sản phẩm
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                 <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
                              </svg>
                           </a>
                           <i class="open_mnu down_icon"></i>
                           <ul class="dropdown-menu">
                               @foreach ($blogCate as $item)
                               <li class="nav-item-lv2">
                                   <a class="nav-link" href="{{route('listCateBlog',['slug'=>$item->slug])}}" title="{{languageName($item->name)}}">{{languageName($item->name)}}</a>
                                </li>
                               @endforeach
                           </ul>
                        </li>
                        <li class="nav-item has-childs " data-section="header_nav">
                           <a href="javascript:;" class="nav-link" title="Tin tức">
                              Bảo hành điện tử
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                 <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
                              </svg>
                           </a>
                           <i class="open_mnu down_icon"></i>
                           <ul class="dropdown-menu">
                               <li class="nav-item-lv2">
                                   <a class="nav-link" href="{{route('dangkybaohanh')}}" title="Kích hoạt bảo hành">Kích hoạt bảo hành</a>
                                </li>
                                <li class="nav-item-lv2">
                                 <a class="nav-link" href="{{route('tracuubaohanh')}}" title="Tra cứu bảo hành">Tra cứu bảo hành</a>
                              </li>
                              <li class="nav-item-lv2">
                                 <a class="nav-link" href="{{route('tiepnhanbaohanh')}}" title="Tiếp nhận bảo hành">Tiếp nhận bảo hành</a>
                              </li>
                           </ul>
                        </li>
                         {{-- <li class="nav-item ">
                            <a class="nav-link" href="{{route('lienHe')}}" title="Liên hệ">Liên hệ</a>
                         </li> --}}
                      </ul>
                   </div>
                   <div class="control-menu">
                      <a href="#" id="prev">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path fill="#fff" d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"/>
                         </svg>
                      </a>
                      <a href="#" id="next">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path fill="#fff" d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/>
                         </svg>
                      </a>
                   </div>
                   <div class="button-promo">
                     <div class="list-top-item header_tim_kiem">
                        <form action="{{route('search_result')}}" method="post" class="header-search-form input-group search-bar d-flex" role="search">
                          @csrf
                           <input name="keywordsearch" onkeyup="keyinputsearch()" required class="input-group-field auto-search search-auto form-control" placeholder="Tìm sản phẩm..." autocomplete="off" type="text">
                           <input type="hidden" name="type" value="product">
                           <button type="submit" class="btn icon-fallback-text" aria-label="Tìm kiếm" title="Tìm kiếm">
                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                 <path style="fill: white;" d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                              </svg>
                           </button>
                           <div class="search-suggest">
                              
                              <div class="list-search">
                                 
                               </div>
                           </div>
                        </form>
                     </div>
						</div>
                </div>
             </div>
             <ul class="md-hidden list-menu-account">
               
                <li class="li-account">
                   <a href="{{route('daiLy')}}" title="Đại lý">
                      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M10 0C6.12297 0 2.96875 3.15422 2.96875 7.03125C2.96875 8.34117 3.3316 9.61953 4.01832 10.7286L9.59977 19.723C9.70668 19.8953 9.89504 20 10.0976 20C10.0992 20 10.1007 20 10.1023 20C10.3066 19.9984 10.4954 19.8905 10.6003 19.7152L16.0395 10.6336C16.6883 9.54797 17.0312 8.3023 17.0312 7.03125C17.0312 3.15422 13.877 0 10 0ZM15.0338 10.032L10.0888 18.2885L5.01434 10.1112C4.44273 9.18805 4.13281 8.12305 4.13281 7.03125C4.13281 3.80039 6.76914 1.16406 10 1.16406C13.2309 1.16406 15.8633 3.80039 15.8633 7.03125C15.8633 8.09066 15.5738 9.12844 15.0338 10.032Z" fill="white"/>
                         <path d="M10 3.51562C8.06148 3.51562 6.48438 5.09273 6.48438 7.03125C6.48438 8.95738 8.03582 10.5469 10 10.5469C11.9884 10.5469 13.5156 8.93621 13.5156 7.03125C13.5156 5.09273 11.9385 3.51562 10 3.51562ZM10 9.38281C8.7009 9.38281 7.64844 8.32684 7.64844 7.03125C7.64844 5.73891 8.70766 4.67969 10 4.67969C11.2923 4.67969 12.3477 5.73891 12.3477 7.03125C12.3477 8.30793 11.3197 9.38281 10 9.38281Z" fill="white"/>
                      </svg>
                      Đại lý
                   </a>
                </li>
                <li class="li-account">
                   <a title="Điện thoại: {{$setting->phone1}}" href="tel:{{$setting->phone1}}">
                      <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <g clip-path="url(#clip0_509_108)">
                            <path d="M18.1771 14.2476C17.7063 13.7573 17.1383 13.4952 16.5364 13.4952C15.9393 13.4952 15.3665 13.7525 14.8762 14.2428L13.3422 15.7719C13.216 15.7039 13.0898 15.6408 12.9685 15.5777C12.7937 15.4903 12.6287 15.4078 12.4879 15.3204C11.051 14.4078 9.74519 13.2185 8.49278 11.6797C7.88599 10.9127 7.47823 10.2671 7.18212 9.61177C7.58017 9.2477 7.9491 8.86906 8.30832 8.50499C8.44424 8.36907 8.58016 8.22829 8.71608 8.09237C9.73548 7.07297 9.73548 5.7526 8.71608 4.73319L7.39085 3.40797C7.24037 3.25748 7.08503 3.10214 6.9394 2.94681C6.64814 2.64584 6.34232 2.33516 6.02679 2.04391C5.55592 1.57789 4.99282 1.33032 4.4006 1.33032C3.80837 1.33032 3.23556 1.57789 2.75013 2.04391C2.74528 2.04876 2.74528 2.04876 2.74043 2.05361L1.08996 3.71864C0.46861 4.33999 0.114245 5.09726 0.0365763 5.97589C-0.0799271 7.39335 0.337543 8.71372 0.657928 9.57779C1.44433 11.6991 2.61907 13.6651 4.37147 15.7719C6.49766 18.3107 9.05588 20.3155 11.9782 21.7281C13.0947 22.2572 14.5849 22.8834 16.25 22.9902C16.3519 22.9951 16.4587 22.9999 16.5558 22.9999C17.6771 22.9999 18.6189 22.597 19.3567 21.7961C19.3616 21.7864 19.3713 21.7815 19.3761 21.7718C19.6286 21.466 19.9198 21.1893 20.2256 20.8932C20.4344 20.6942 20.648 20.4854 20.8567 20.267C21.3373 19.767 21.5897 19.1845 21.5897 18.5874C21.5897 17.9855 21.3324 17.4078 20.8421 16.9224L18.1771 14.2476ZM19.915 19.3592C19.9101 19.3641 19.9101 19.3592 19.915 19.3592C19.7256 19.5631 19.5315 19.7476 19.3227 19.9514C19.0072 20.2524 18.6868 20.5679 18.3859 20.9223C17.8956 21.4466 17.3179 21.6941 16.5606 21.6941C16.4878 21.6941 16.4102 21.6941 16.3373 21.6893C14.8956 21.5971 13.5558 21.034 12.551 20.5534C9.80344 19.2233 7.39085 17.335 5.38602 14.9418C3.7307 12.9467 2.62392 11.102 1.89092 9.12149C1.43947 7.91276 1.27442 6.97103 1.34724 6.08269C1.39578 5.51474 1.61423 5.04387 2.01713 4.64096L3.67245 2.98564C3.91031 2.76234 4.16274 2.64099 4.41031 2.64099C4.71613 2.64099 4.9637 2.82545 5.11904 2.98079C5.12389 2.98564 5.12874 2.9905 5.1336 2.99535C5.42971 3.27205 5.71126 3.55845 6.00737 3.86427C6.15786 4.01961 6.3132 4.17495 6.46853 4.33514L7.79376 5.66036C8.30832 6.17492 8.30832 6.65064 7.79376 7.1652C7.65298 7.30597 7.51706 7.44675 7.37629 7.58267C6.96853 8.00014 6.58018 8.38848 6.15786 8.76712C6.14815 8.77683 6.13844 8.78168 6.13359 8.79139C5.71612 9.20886 5.79378 9.61662 5.88116 9.89332C5.88602 9.90788 5.89087 9.92245 5.89573 9.93701C6.24038 10.7719 6.72581 11.5583 7.46367 12.4952L7.46852 12.5001C8.80831 14.1505 10.2209 15.4369 11.7791 16.4224C11.9782 16.5486 12.1821 16.6505 12.3762 16.7476C12.551 16.835 12.716 16.9175 12.8568 17.0049C12.8762 17.0146 12.8956 17.0292 12.9151 17.0389C13.0801 17.1214 13.2354 17.1602 13.3956 17.1602C13.7985 17.1602 14.051 16.9078 14.1335 16.8253L15.7937 15.1651C15.9587 15.0001 16.2208 14.801 16.5267 14.801C16.8276 14.801 17.0752 14.9903 17.2257 15.1554C17.2305 15.1602 17.2305 15.1602 17.2354 15.1651L19.9101 17.8398C20.4101 18.335 20.4101 18.8447 19.915 19.3592Z" fill="white"/>
                            <path d="M12.4296 5.47116C13.7014 5.68475 14.8567 6.28669 15.779 7.209C16.7013 8.13132 17.2984 9.28665 17.5169 10.5585C17.5703 10.8789 17.847 11.1022 18.1625 11.1022C18.2013 11.1022 18.2353 11.0973 18.2741 11.0924C18.6334 11.0342 18.8712 10.6944 18.813 10.3352C18.5508 8.79636 17.8227 7.39347 16.7111 6.28183C15.5994 5.17019 14.1965 4.44205 12.6577 4.17992C12.2985 4.12166 11.9635 4.35953 11.9004 4.71389C11.8373 5.06825 12.0703 5.41291 12.4296 5.47116Z" fill="white"/>
                            <path d="M22.9732 10.1458C22.5411 7.61184 21.347 5.30604 19.512 3.47111C17.6771 1.63618 15.3713 0.442024 12.8374 0.00999088C12.483 -0.0531151 12.148 0.1896 12.0849 0.543965C12.0267 0.903183 12.2646 1.23813 12.6238 1.30124C14.8859 1.68473 16.949 2.75753 18.5897 4.39343C20.2305 6.03419 21.2984 8.09727 21.6819 10.3594C21.7353 10.6798 22.012 10.9031 22.3275 10.9031C22.3664 10.9031 22.4003 10.8982 22.4392 10.8933C22.7935 10.84 23.0363 10.5001 22.9732 10.1458Z" fill="white"/>
                         </g>
                         <defs>
                            <clipPath id="clip0_509_108">
                               <rect width="23" height="23" fill="white"/>
                            </clipPath>
                         </defs>
                      </svg>
                      Hotline: <span class="acc-text">{{$setting->phone1}}</span>
                   </a>
                </li>
             </ul>
          </div>
       </div>
    </div>
    <div class="mobile-nav-overflow"></div>
 </header>
 <script>
    const header = document.querySelector('header.header');
    let headerHeight = header.offsetHeight;
    let resizeWindow = window.innerWidth;
    let offsetStickyHeader = header.offsetHeight;
    let offsetStickyDown = 0;
    let resizeTimer;
    
    const tabLinks = document.querySelectorAll('.tab-link');
    const tabContents = document.querySelectorAll('.tab-content-mb');
    
    const handleResize = () => {
        if (resizeTimer) clearTimeout(resizeTimer);
    
        resizeTimer = setTimeout(() => {
            const newWidth = window.innerWidth;
    
            if (resizeWindow !== newWidth) {
                header.classList.remove('hSticky');
                header.style.minHeight = '';
    
                headerHeight = header.offsetHeight;
                header.style.minHeight = `${headerHeight}px`;
    
                resizeWindow = newWidth;
            }
        }, 200);
    };
    
    const handleScroll = () => {
        const scrollTop = window.scrollY;
    
        if (scrollTop > offsetStickyHeader && scrollTop > offsetStickyDown) {
            header.classList.add('hSticky');
        }
    
        if (scrollTop <= offsetStickyDown && scrollTop <= offsetStickyHeader) {
            header.classList.remove('hSticky');
        }
    
        offsetStickyDown = scrollTop;
    };
    
    const handleTabClick = (tabLink) => {
        const tabId = tabLink.dataset.tab;
    
        tabLinks.forEach((link) => link.classList.remove('active'));
        tabLink.classList.add('active');
    
        tabContents.forEach((tabContent) => tabContent.classList.remove('active'));
        document.getElementById(tabId).classList.add('active');
    };
    
    const initializeTabs = () => {
        if (window.innerWidth <= 991) {
            const tabMenu1 = document.getElementById('tab-menu-1');
            const tabLinkMenu1 = document.querySelector('.tab-link[data-tab="tab-menu-1"]');
    
            tabMenu1.classList.add('active');
            tabLinkMenu1.classList.add('active');
    
            tabLinks.forEach((tabLink) => {
                tabLink.addEventListener('click', () => handleTabClick(tabLink));
            });
        }
    };
    
    window.addEventListener('resize', handleResize);
    window.addEventListener('scroll', handleScroll);
    
    tabLinks.forEach((tabLink) => {
        tabLink.addEventListener('click', () => handleTabClick(tabLink));
    });
    
    document.addEventListener('DOMContentLoaded', initializeTabs);
 </script>
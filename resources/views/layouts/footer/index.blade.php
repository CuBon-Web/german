<footer class="footer">
    <div class="mid-footer">
       <div class="container">
          <div class="row">
             <div class="col-xs-12 col-md-12 col-lg-cus-30 footer-info">
               <h4 class="title-menu clicked">
                  <span>Công ty cổ phần đầu tư German Việt Nam</span>
               </h4>
                <div class="list-menu toggle-mn">
                 
                  <div class="content-contact clearfix">
                     <span class="list_footer">
                       
                        <b>MST:</b>
                        0110387536
                     </span>
                  </div>
                   <div class="content-contact clearfix">
                      <span class="list_footer">
                         <b>Địa chỉ: </b>
                         {{$setting->address1}}
                      </span>
                   </div>
                   <div class="content-contact clearfix">
                      <span class="list_footer">
                         <b>Hotline: </b>
                         <a title="{{$setting->phone1}}" href="tel:{{$setting->phone1}}">
                         {{$setting->phone1}} - {{$setting->phone2}}
                         </a> 
                      </span>
                   </div>
                   <div class="content-contact clearfix">
                      <span class="list_footer">
                         <b>Email: </b>
                         <a title="{{$setting->email}}" href="mailto:{{$setting->email}}">
                           {{$setting->email}}
                         </a>
                      </span>
                   </div>
                  
                </div>
             </div>
             <div class="col-xs-12 col-md-4 col-lg-cus-20 footer-click">
                <h4 class="title-menu clicked">
                   <span>Chính sách</span>
                </h4>
                <ul class="list-menu toggle-mn hidden-mob" >
                  @foreach ($pageContent as $item)
                  @if ($item->type == 'ho-tro-khanh-hang')
                  <li class="li_menu">
                     <a href="{{route('pagecontent',['slug'=>$item->slug])}}" title="{{$item->title}}">{{$item->title}}</a>
                  </li>
                  @endif
                  @endforeach
                </ul>
             </div>
             <div class="col-xs-12 col-md-4 col-lg-cus-20 footer-click">
               <div class="block-payment">
						<h4 class="title-menu">
							<span>Về Chúng Tôi</span>
						</h4>
						
						<ul class="list-menu toggle-mn hidden-mob" >
                     @foreach ($pageContent as $item)
                     @if ($item->type == 've-chung-toi')
                     <li class="li_menu">
                        <a href="{{route('pagecontent',['slug'=>$item->slug])}}" title="{{$item->title}}">{{$item->title}}</a>
                     </li>
                     @endif
                     @endforeach
                   </ul>
						
					</div>
             </div>
             <div class="col-xs-12 col-md-4 col-lg-cus-30">
                <div class="block-payment">
                   <h4 class="title-menu">
                      <span>Fanpage</span>
                   </h4>
                   <div class="payment-footer list-menu">
                     <iframe src="https://www.facebook.com/plugins/page.php?href=https://www.facebook.com/German.com.vn&tabs&width=340&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=985374385649893" width="340" height="230" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" title="Thiết bị nhà bếp German"></iframe>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="bg-footer-bottom copyright clearfix">
       <div class="container">
          <div class="row tablet">
             <div id="copyright" class="col-lg-12 col-md-12 col-xs-12 fot_copyright">
                <span class="wsp">
                <span class="mobile">© Bản quyền thuộc về <b>Công ty CP Đầu Tư German Việt Nam</b>
                <span class="dash"> | </span>
                </span>
                <span class="opacity1">Cung cấp bởi</span>
                LTA DEV
                </span>
             </div>
          </div>
          <a href="#"  class="backtop"  title="Lên đầu trang">
             <svg width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="2.13003" y="29" width="38" height="38" transform="rotate(-45 2.13003 29)" stroke="black" fill="#fff" stroke-width="2"/>
                <rect x="8" y="29.2133" width="30" height="30" transform="rotate(-45 8 29.2133)" fill="black"/>
                <path d="M18.5 29H39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M29 18.5L39.5 29L29 39.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
             </svg>
          </a>
       </div>
    </div>
 </footer>
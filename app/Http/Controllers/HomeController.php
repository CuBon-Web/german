<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\product\Category;
use App\models\product\Product;
use App\models\blog\Blog;
use Session;
use App\models\website\Partner;
use App\models\blog\BlogCategory;
use App\models\BannerAds;
use App\models\ReviewCus;
use App\models\PageContent;

class HomeController extends Controller
{
    public function home()
    {
        $data['hotnews'] = Blog::where([
            ['status','=',1]
        ])->orderBy('id','DESC')->limit(7)->get(['id','title','slug','created_at','image','description']);
        $data['BannerAds'] = BannerAds::where(['status'=>1,'status_show'=>'banner_ads'])->get();
        $data['BannerSlogan'] = BannerAds::where(['status'=>1,'status_show'=>'banner_slogan'])->get();
        $data['gioithieu'] = PageContent::where(['slug'=>'gioi-thieu','language'=>'vi'])->first(['id','title','content','image']);
        $data['ReviewCus'] = ReviewCus::where('status',1)->get();
        $data['partner'] = Partner::where('status',1)->get();
        $data['homePro'] = Product::where(['status'=>1,'discountStatus'=>1])
            ->orderBy('id','DESC')
            ->select('id','category','name','discount','price','images','slug','cate_slug','type_slug','description','status_variant','variant','preserve')
            ->limit(15)->get();
        return view('home',$data);
    }
}

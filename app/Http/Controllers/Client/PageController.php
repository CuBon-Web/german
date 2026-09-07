<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\product\Product;
use Session;
use App\models\product\Category;
use App\models\product\TypeProduct;
use DB,stdClass,File;
use App\models\District;
use Goutte\Client;
use App\models\blog\Blog;
use App\models\MessContact;
use App\models\Services;
use App\models\ServiceCate;
use App\models\website\Prize;
use App\models\website\Founder;
use App\models\website\Partner;
use App\models\PageContent;
use App\models\Project;
use App\models\website\Video;
use App\models\Province;
use App\models\Wards;
use Illuminate\Support\Facades\Http;
use Revolution\Google\Sheets\Facades\Sheets;
class PageController extends Controller
{
    public function orderNow()
    { 
        return view('orderNow');
    }
    public function baogia()
    {
        return view('baogia');
    }
    public function videoReview() {
        $data['video'] = Video::where('status',1)->paginate(20);
        return view('video',$data);
    }
    public function daiLy(){
        return view('hethongdaily');
    }
    public function menu()
    {
        
        $data['allproduct'] = Product::where([
            ['status', '=', 1]
        ])->limit(9)->orderBy('id','DESC')->get(['id','name','discount','price','images','slug']);
        $data['hotnews'] = Blog::where([
            ['status','=',1],
            ['type_news','=','tin-hot']
        ])->orderBy('id','DESC')->limit(7)->get(['id','title','slug','created_at','image']);
        return view('menu',$data);
    }
    public function quickview(Request $request){
        $pro = Product::with('cate')->where('id',$request->id)->first();
        $view = view("layouts.product.quickview",compact('pro'))->render();
        // dd($product->count());
        return response()->json([
            'html'=>$view
        ]);
    }
    public function aboutUs(){
        $data['partner'] = Partner::where(['status'=>1])->get(['id','image','name','link']);
        $data['founder'] = Founder::where(['status'=>1])->get(['id','name','position','image']);
        $data['album'] = Prize::where(['status'=>1])->get(['id','name','image']);
        $data['gioithieu'] = PageContent::where(['slug'=>'gioi-thieu','language'=>'vi'])->first(['id','title','content','image']);
        $data['founder'] = Founder::where(['status'=>1])->get(['id','image','name']);
        $data['services'] = Services::where([
            ['status','=',1]
        ])->orderBy('id','DESC')->limit(6)->get(['id','name','slug','description','image']);
        return view('aboutus',$data);
    }
    public function contact()
    {
        return view('contactus');
    }
    public function getPostInfor()
    {
        $data['category_product'] = Category::where('status',1)->get();
        return view('post_info.index',$data);
    }
    public function postPostInfor(Request $request,Product $product )
    {
        $data = $product->createClient($request);
        $data['category'] = Category::where(['status'=> 1])->orderBy('id','ASC')->get();
        $data['categoryFirst'] = Category::where(['status'=> 1])->orderBy('id','ASC')->first();
        $productNewFirstTab = Product::where([
            'category'=> $data['categoryFirst'] ? $data['categoryFirst']->id : 0,
            'status' => 0
        ])->with('customer')
        ->orderBy('id','ASC')
        ->limit(10)->get()->toArray();
        $data['productNewFirstTab'] = array_chunk($productNewFirstTab,2);
        return view('home',$data)->with('success','Tin của bạn đang được xét duyệt!');
    }
    public function typeproduct($id)
    {
        $arr = [];
        $data = TypeProduct::where('cate_id',$id)->get();
        $lang = Session::get('locale');
        foreach($data as $item){
            $obj = new stdClass();
            $obj->name = languageName($item->name);
            $obj->id = $item->id;
            $arr[] = $obj;
        }
        return response()->json([
    		'message' => 'get data Success',
    		'data'=> $arr
    	],200);
    }
    public function district(Request $request)
    {
        $province = Province::where('province_id',$request->id)->first();
        $province_name = $province->name;
        $data = District::where('province_id',$request->id)->get();
        return response()->json([
    		'message' => 'get data Success',
    		'data'=> $data,
            'province_name' => $province_name,
    	],200);
    }
    public function wards(Request $request)
    {
        $data = Wards::where('district_id',$request->id)->get();
        $district = District::where('district_id',$request->id)->first();
        $district_name = $district->name;
        return response()->json([
    		'message' => 'get data Success',
    		'data'=> $data,
            'district_name' => $district_name,
    	],200);
    }
    public function findwards(Request $request)
    {
        $data = Wards::where('wards_id',$request->id)->first();
        $wards_name = $data->name;
        return response()->json([
    		'message' => 'get data Success',
    		'data'=> $wards_name
    	],200);
    }
    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $code = Session::get('locale');
        $arr = [];
        $arrb = [];
        $arrOpt = [];
        //search option
        $productOpt =  Product::with('cate')
        ->where('status',1)
        ->get()
        ->toArray();
        foreach($productOpt as $key => $item){
            $fielName = json_decode($item['name']);
            foreach($fielName as $i){
                if(strpos(strtolower(stripVN($i->content)), strtolower(stripVN($keyword))) !== false && $i->lang_code == $code){
                    array_push($arr,$productOpt[$key]);
                }
            }
        }
        $data['keyword'] = $request->keyword;
        $data['countproduct'] = count($arr);
        $data['resultPro'] = $arr;
        return view('search_result',$data);
    }
    public function postcontact(Request $request){
        $data = new MessContact();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->mess = $request->mess;
        $data->save();
        if($data){
            return \Redirect::to('/')->with('success', 'Gửi tin thành công');
        }else{
            return back()->with('error', 'Gửi tin thất bại');
        }
        
    }
    public function serviceDetail($danhmuc, $slug)
    {
        $data['detail_service'] = Services::where(['cate_slug'=>$danhmuc, 'slug'=>$slug])->first();
        $data['servicelq'] = Services::where(['cate_slug'=>$danhmuc])->get();
        $data['servicelqcate'] = ServiceCate::where(['slug'=>$danhmuc])->first();
        $data['productlq'] = Product::where('service_id',$data['servicelqcate']->id)->get();
        return view('servicedetail',$data);
    }
    public function serviceList($slug)
    {
        $data['list'] = Services::where('cate_slug',$slug)->paginate(9);
        $data['cateService'] = ServiceCate::where('slug',$slug)->first();
        
        return view('servicelist',$data);
    }
    public function duanTieuBieu()
    {
        $data['duan'] = Project::where('status',1)->paginate(12);
        $data['album'] = Prize::where(['status'=>1])->get(['id','image','name','link']);
        return view('album',$data);
    }
    public function duanTieuBieuDetail($slug)
    {
        $data['detail'] = Project::where('slug',$slug)->first();
        return view('detailProject',$data);
    }
    public function fag()
    {
        return view('faq');
    }
    public function tracuubaohanh(){
        return view('baohanh.tracuu');
    }
    public function dangkybaohanh(){
        return view('baohanh.dangkybaohanh');
    }
    public function tiepnhanbaohanh(){
        return view('baohanh.tiepnhanbaohanh');
    }
    public function dangkydaily(){
        $data['province'] = Province::get();
        return view('dangkydaily',$data);
    }
    public function postdangkydaily(Request $request)
    {
        $idsheet = '1PZMK8Re30CK_ljVnQ3wWsPIyZc5SiNThw5kvbfjNqz4';
         /** generate sheet name **/
         $sheetName = 'Sheet1';
        // dd($request->all());
         /** prepare the data in array **/
         $congviec = '';
         foreach($request->congviec as $item){
            $congviec .= '--';
            $congviec .= $item;
         }
         $data = [
             [
                 $request->email != null ? $request->email : 'null',
                 $request->phone != null ? $request->phone : 'null',
                 $request->email != null ? $request->email : 'null',
                 $request->address != null ? $request->address : 'null',
                 $request->province != null ? $request->province : 'null',
                 $request->district != null ? $request->district : 'null',
                 $request->wards != null ? $request->wards : 'null',
                 $request->congviec != null ? $congviec : 'null',
                 $request->nhucau != null ? $request->nhucau : 'null',
                 $request->mess != null ? $request->mess : 'null'
             ]
         ];
        //  dd($data);
         /** generate a new sheet in a specific spread sheet **/
         Sheets::spreadsheet($idsheet)->sheet($sheetName)->append($data);

       
         return redirect()->route('home')->with('success', 'Đăng ký thành công');

         /** write the data in the newly generated sheet **/
        //  Sheets::sheet($sheetName)->append($data);

    }
}

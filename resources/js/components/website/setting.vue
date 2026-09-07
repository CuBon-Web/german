<template>
  <div>
      <h3 class="page-title">Cài đặt chung</h3>
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body" >
                <div class="form-group">
                  <label>Tên doanh nghiệp</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.company"
                  />
                </div>
                <div class="form-group">
                  <label>Tên website</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.webname"
                  />
                </div>
                <div class="form-group">
                  <label>Văn phòng đại diện</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.address1"
                  />
                </div>
                <div class="form-group">
                  <label>Địa chỉ</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.address2"
                  />
                </div>
                <div class="form-group">
                  <label>Số điện thoại 1</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.phone1"
                  />
                </div>
                <div class="form-group">
                  <label>Số điện thoại 2</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.phone2"
                  />
                </div>
                <div class="form-group">
                  <label>Fax</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.fax"
                  />
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.email"
                  />
                </div>
                <div class="form-group">
                  <label>Facebook</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.facebook"
                  />
                </div>
                <div class="form-group">
                  <label>Google</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.google"
                  />
                </div>
                <div class="form-group">
                  <label>Code Google analytics</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.GA"
                  />
                </div>
                <div class="form-group">
                  <label>Iframe GG map</label>
                  <vs-input
                    type="text"
                    size="default"
                    class="w-100"
                    v-model="objData.iframe_map"
                  />
                </div>
                <div class="form-group">
                  <label>Favicon</label>
                  <image-upload type="avatar" v-model="objData.favicon" :title="'favicon'"></image-upload>
                </div>
                <div class="form-group">
                  <label>Logo</label>
                  <image-upload type="avatar" v-model="objData.logo" :title="'logo'"></image-upload>
                </div>
                <div class="form-group">
                  <label>Logo chân trang</label>
                  <image-upload type="avatar" v-model="objData.logo_footer" :title="'logo_footer'"></image-upload>
                </div>
                <div class="form-group">
                  <label>Danh sách đại lý</label>
                  <div class="daily" v-for="(item, i) in objData.daily" :key="i">
                    <span>Đại Lý {{ i+1 }}</span>
                    <div class="row mt-10">
                        <div class="col-4">
                          <vs-input
                            type="text"
                            size="default"
                            class="w-100"
                            v-model="objData.daily[i].name"
                            placeholder="Tên"
                          />
                        </div>
                        <div class="col-4">
                          <vs-select
                            class="selectExample"
                            v-model="objData.daily[i].city"
                            placeholder="Tỉnh thành"
                          >
                          <vs-select-item
                              value="0"
                              text="Không danh mục"
                            />
                            <vs-select-item
                              :value="item.value"
                              :text="item.name"
                              v-for="(item, index) in city"
                              :key="'f' + index"
                            />
                          </vs-select>
                        </div>
                        <div class="col-4">
                          <vs-input
                            type="text"
                            size="default"
                            class="w-100"
                            v-model="objData.daily[i].address"
                             placeholder="Địa chỉ"
                          />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                          <vs-input
                            type="text"
                            size="default"
                            class="w-100"
                            v-model="objData.daily[i].lat"
                             placeholder="Tọa độ LAT"
                          />
                        </div>
                        <div class="col-4">
                          <vs-input
                            type="text"
                            size="default"
                            class="w-100"
                            v-model="objData.daily[i].lng"
                             placeholder="Tọa động LNG"
                          />
                        </div>
                        <div class="col-4">
                          <vs-input
                            type="text"
                            size="default"
                            class="w-100"
                            v-model="objData.daily[i].summary"
                             placeholder="Mô Tả"
                          />
                        </div>
                    </div>
                    <a class="dotremove" 
                        href="javascript:;"
                        v-if="i != 0"
                        @click="remoteAr(index,'daily')"
                      >
                        <img v-bind:src="'/media/' + joke.avatar" width="25" />
                      </a>
                  </div>
                  <el-button size="small" @click="addInput('daily')"
                    >Thêm đại lý</el-button
                  >
                  <!-- <image-upload type="avatar" v-model="objData.logo_footer" :title="'logo_footer'"></image-upload> -->
                </div>
              <vs-button color="primary" @click="saveSetting">Lưu</vs-button>
            </div>
          </div>
        </div>
      </div>
    <!-- content-wrapper ends -->
  </div>
</template>


<script>
import { mapActions } from "vuex";
import { required } from "vuelidate/lib/validators";
import ImageMulti from "../_common/upload_image_multi";
import TinyMce from "../_common/tinymce";
export default {
  name: "setting",
  data() {
    return {
      joke: {
        avatar: "delete-sign--v2.png",
      },
      city:[
        {
          name:'Hà Nội',
          value:1
        },
        {
          name:'Tp Hồ Chí Minh',
          value:2
        },
        {
          name:'Đà Nẵng',
          value:3
        },
        {
          name:'Bắc Ninh',
          value:4
        },
        {
          name:'Quảng Trị',
          value:5
        },
        {
          name:'Bình Dương',
          value:6
        },
        {
          name:'Đồng Nai',
          value:7
        },
        {
          name:'Lâm Đồng',
          value:8
        },
        {
          name:'Khánh Hòa',
          value:9
        },
        {
          name:'Đăk Lăk',
          value:10
        },
        {
          name:'Nam Định',
          value:11
        },
        {
          name:'Bình Định',
          value:12
        },
        {
          name:'Hải Dương',
          value:13
        },
        {
          name:'Phú Thọ',
          value:14
        },
        {
          name:'Vĩnh Phúc',
          value:15
        },
        {
          name:'Long An',
          value:16
        },
        {
          name:'Bà Rịa - Vũng Tàu',
          value:17
        },
        {
          name:'Thái Bình',
          value:18
        },
        {
          name:'Quảng Nam',
          value:19
        },
        {
          name:'Hòa Bình',
          value:20
        },
        {
          name:'Thừa Thiên - Huế',
          value:21
        },
        {
          name:'Thái Nguyên',
          value:22
        },
        {
          name:'Nghệ An',
          value:23
        }
        ,
        {
          name:'Thanh Hóa',
          value:24
        },
        {
          name:'Quảng Bình',
          value:25
        }
      ],
      objData:
        {
            webname : "",
            company : "",
            address1: "",
            address2 : "",
            phone1 : "",
            phone2 : "",
            fax : "",
            email : "",
            facebook : "",
            google : "",
            GA : "",
            fbPixel : "",
            iframe_map : "",
            favicon : "",
            logo : "",
            logo_mobi : "",
            logo_footer: "",
            footer_content:"",
            popupimage:[],
            statusPopup:0,
            linkpopup:"",
            statusImgHeader:0,
            imgHeader:"",
            linkImgHeader:"",
            daily:[
                    {   
                    name: "", 
                    city: "",
                    address: "", 
                    lat: "", 
                    lng: "", 
                    summary: ""
                }
            ]
        }
    };
  },
  components: {
    TinyMce,ImageMulti
  },
  computed: {},
  watch: {},
  methods: {
    ...mapActions(["postSetting", "loadings","getSetting"]),
    remoteAr(index,key) {
      if(key == 'daily'){
        this.objData.daily.splice(index, 1);
      }
    },
    addInput(key) {
        var oj = {};
        if(key =='daily'){
          oj.name = "";
          oj.city = "";
          oj.address = "";
          oj.lat = "";
          oj.lng = "";
          oj.summary = "";
          this.objData.daily.push(oj);
        }
    },
    saveSetting(){
      this.loadings(true);
      this.postSetting(this.objData).then(response => {
        this.loadings(false);
        this.$success('Cài đặt thành công');
      }).catch(error => {
        this.loadings(false);
        this.$error('Cài đặt thất bại');
      })
    },
    listSettings(){
      this.loadings(true);
      this.getSetting().then(response => {
        
        this.loadings(false);
        this.objData = response.data;
        this.objData.popupimage = JSON.parse(response.data.popupimage);
        this.objData.daily = JSON.parse(response.data.daily);
      }).catch(error => {
        this.loadings(false);;
      })
    }
  },
  mounted() {
    this.listSettings();
  }
};
</script>
<style>
.daily {
    border: 1px dashed #2a2727;
    padding: 15px;
    margin-bottom: 15px;
    position: relative;
}
.mt-10{
  margin-bottom: 10px;
}
a.dotremove {
    position: absolute;
    right: 13px;
    top: 5px;
    z-index: 99;
}
</style>
(window.webpackJsonp=window.webpackJsonp||[]).push([[2],{"+Awk":function(t,e,o){"use strict";o.d(e,"a",(function(){return s}));var a=o("lwsE"),r=o.n(a),n=o("W8MJ"),i=o.n(n),l=o("rywy"),s=function(){function t(e){r()(this,t),this.uri=e}return i()(t,[{key:"list",value:function(t){return Object(l.a)({url:"/"+this.uri,method:"get",params:t})}},{key:"get",value:function(t){return Object(l.a)({url:"/"+this.uri+"/"+t,method:"get"})}},{key:"store",value:function(t){return Object(l.a)({url:"/"+this.uri,method:"post",data:t})}},{key:"update",value:function(t,e){return Object(l.a)({url:"/"+this.uri+"/"+t,method:"put",data:e})}},{key:"destroy",value:function(t){return Object(l.a)({url:"/"+this.uri+"/"+t,method:"delete"})}}]),t}()},"29sD":function(t,e,o){var a=o("TcCQ");"string"==typeof a&&(a=[[t.i,a,""]]);var r={hmr:!0,transform:void 0,insertInto:void 0};o("aET+")(a,r);a.locals&&(t.exports=a.locals)},"6hpv":function(t,e,o){(e=o("JPst")(!1)).push([t.i,'.upload-container[data-v-7929d548] {\n  position: relative;\n}\n.upload-container[data-v-7929d548]:after {\n  content: "";\n  display: table;\n  clear: both;\n}\n.upload-container .image-uploader[data-v-7929d548] {\n  margin: 10px;\n}\n.board-item ul[data-v-7929d548] {\n  list-style: none;\n  width: 100%;\n  clear: both;\n}\n.board-item[data-v-7929d548] {\n  position: relative;\n  float: left;\n  border: 1px solid #f3f3f3;\n  width: 150px;\n  margin: 5px;\n}\n.board-item .img[data-v-7929d548] {\n  height: 150px;\n}\n.board-item img[data-v-7929d548] {\n  height: 100%;\n  -o-object-fit: cover;\n     object-fit: cover;\n  width: 100%;\n}\n.sortable-ghost[data-v-7929d548] {\n  background: #f3f3f3;\n}\n',""]),t.exports=e},"9GhV":function(t,e,o){"use strict";var a=o("29sD");o.n(a).a},CMRX:function(t,e,o){"use strict";var a=o("fBjy");o.n(a).a},Gjer:function(t,e,o){"use strict";var a=o("U/OM");o.n(a).a},LNFK:function(t,e,o){(e=o("JPst")(!1)).push([t.i,"\n.createPost-container label.el-form-item__label {\n  text-align: left;\n}\n",""]),t.exports=e},P19A:function(t,e,o){"use strict";o.d(e,"b",(function(){return r})),o.d(e,"a",(function(){return n})),o.d(e,"c",(function(){return i}));var a=o("rywy");function r(t){return Object(a.a)({url:"/property/"+t+"/edit",method:"get"})}function n(t){return Object(a.a)({url:"/property/create",method:"post",data:t})}function i(t,e){return Object(a.a)({url:"/property/"+t+"/update",method:"post",data:e})}},RbKE:function(t,e,o){"use strict";var a=o("gCKy");o.n(a).a},TcCQ:function(t,e,o){(e=o("JPst")(!1)).push([t.i,'.createPost-container label.el-form-item__label[data-v-532c0a4c] {\n  width: 100% !important;\n}\n.createPost-container[data-v-532c0a4c] {\n  position: relative;\n}\n.createPost-container .createPost-main-container[data-v-532c0a4c] {\n  padding: 0 45px 20px 50px;\n}\n.createPost-container .createPost-main-container .postInfo-container[data-v-532c0a4c] {\n  position: relative;\n  margin-bottom: 10px;\n}\n.createPost-container .createPost-main-container .postInfo-container[data-v-532c0a4c]:after {\n  content: "";\n  display: table;\n  clear: both;\n}\n.createPost-container .createPost-main-container .postInfo-container .postInfo-container-item[data-v-532c0a4c] {\n  float: left;\n}\n.createPost-container .word-counter[data-v-532c0a4c] {\n  width: 40px;\n  position: absolute;\n  right: -10px;\n  top: 0px;\n}\n',""]),t.exports=e},"U/OM":function(t,e,o){var a=o("6hpv");"string"==typeof a&&(a=[[t.i,a,""]]);var r={hmr:!0,transform:void 0,insertInto:void 0};o("aET+")(a,r);a.locals&&(t.exports=a.locals)},fBjy:function(t,e,o){var a=o("LNFK");"string"==typeof a&&(a=[[t.i,a,""]]);var r={hmr:!0,transform:void 0,insertInto:void 0};o("aET+")(a,r);a.locals&&(t.exports=a.locals)},gCKy:function(t,e,o){var a=o("oeIJ");"string"==typeof a&&(a=[[t.i,a,""]]);var r={hmr:!0,transform:void 0,insertInto:void 0};o("aET+")(a,r);a.locals&&(t.exports=a.locals)},oeIJ:function(t,e,o){(e=o("JPst")(!1)).push([t.i,"\n.board-item .el-table thead {\n  display: none!important;\n}\n.el-table__empty-block {\n  display: none!important;\n}\n.el-upload-dragger {\n  height: unset;\n}\n.upload-container .el-upload .el-upload-dragger {\n  height: unset;\n}\n",""]),t.exports=e},"v/0D":function(t,e,o){"use strict";var a=o("oCYn"),r=o("rywy");var n=o("MQ60"),i={name:"SingleImageUpload3",components:{draggable:o.n(n).a},props:{fileList:{type:Array,default:function(){return[]}},uploadUrl:{type:String,default:""},model:{type:String,default:""},modelId:{type:Number,default:0}},data:function(){return{options:{group:"mission"},tempUrl:"",additionalData:{id:40},listLoading:!0,upHere:null}},created:function(){},methods:{handleChange:function(t){var e=t.relatedContext.list;console.log(e),setTimeout((function(){var t;t=e,console.log("111"),Object(r.a)({url:"/property/upload/save-image-order",method:"post",data:t})}),500)},handleRemove:function(t){for(var e in this.fileList)this.fileList[e].id===t&&delete this.fileList[e];var o=this.fileList.filter((function(t){return void 0!==t}));this.fileList=o,function(t,e,o){var a={id:o};Object(r.a)({url:"/property/upload/"+t+"/"+e+"/delete-image",method:"post",data:a})}(this.model,this.modelId,t)},emitInput:function(t){var e="000-"+this.fileList.length;this.fileList.push({id:e,name:t.data.name,path:t.data.file}),this.$emit("input",this.fileList)},handleImageSuccess:function(t){this.emitInput(t)}}},l=(o("RbKE"),o("Gjer"),o("KHd+")),s=Object(l.a)(i,(function(){var t=this,e=t.$createElement,o=t._self._c||e;return o("div",{staticClass:"upload-container"},[o("el-upload",{staticClass:"image-uploader",attrs:{data:t.additionalData,multiple:!0,"show-file-list":!1,"on-success":t.handleImageSuccess,"on-remove":t.handleRemove,drag:"",action:t.uploadUrl}},[o("div",{staticClass:"el-upload__text"},[t._v("\n      Drag files here or "),o("em",[t._v("Click to upload")])])]),t._v(" "),o("draggable",{staticClass:"board-column-content",attrs:{list:t.fileList,options:t.options}},t._l(t.fileList,(function(e,a){return o("div",{key:e.file_name,staticClass:"board-item",on:{mouseover:function(o){t.upHere=e.credit},mouseleave:function(e){t.upHere=null}}},[o("div",{staticClass:"img"},[o("img",{attrs:{src:e.path}})]),t._v(" "),o("el-input",{attrs:{type:"text",placeholder:"Alt text"},model:{value:t.fileList[a].alttext,callback:function(e){t.$set(t.fileList[a],"alttext",e)},expression:"fileList[index].alttext"}}),t._v(" "),o("el-input",{attrs:{type:"text",placeholder:"Credit"},model:{value:t.fileList[a].credit,callback:function(e){t.$set(t.fileList[a],"credit",e)},expression:"fileList[index].credit"}}),t._v(" "),o("el-button",{directives:[{name:"show",rawName:"v-show",value:t.upHere===e.credit,expression:"upHere === element.credit"}],staticStyle:{position:"absolute",top:"0px",right:"0px",color:"red"},attrs:{type:"",size:"small",icon:"el-icon-delete"},on:{click:function(e){return t.handleRemove(t.fileList[a].id)}}})],1)})),0)],1)}),[],!1,null,"7929d548",null).exports,c={name:"Sticky",props:{stickyTop:{type:Number,default:0},zIndex:{type:Number,default:1},className:{type:String,default:""}},data:function(){return{active:!1,position:"",width:void 0,height:void 0,isSticky:!1}},mounted:function(){this.height=this.$el.getBoundingClientRect().height,window.addEventListener("scroll",this.handleScroll),window.addEventListener("resize",this.handleReize)},activated:function(){this.handleScroll()},destroyed:function(){window.removeEventListener("scroll",this.handleScroll),window.removeEventListener("resize",this.handleReize)},methods:{sticky:function(){this.active||(this.position="fixed",this.active=!0,this.width=this.width+"px",this.isSticky=!0)},handleReset:function(){this.active&&this.reset()},reset:function(){this.position="",this.width="auto",this.active=!1,this.isSticky=!1},handleScroll:function(){var t=this.$el.getBoundingClientRect().width;this.width=t||"auto",this.$el.getBoundingClientRect().top<this.stickyTop?this.sticky():this.handleReset()},handleReize:function(){this.isSticky&&(this.width=this.$el.getBoundingClientRect().width+"px")}}},p=Object(l.a)(c,(function(){var t=this,e=t.$createElement,o=t._self._c||e;return o("div",{style:{height:t.height+"px",zIndex:t.zIndex}},[o("div",{class:t.className,style:{top:t.isSticky?t.stickyTop+"px":"",zIndex:t.zIndex,position:t.position,width:t.width,height:t.height+"px"}},[t._t("default",[o("div",[t._v("sticky")])])],2)])}),[],!1,null,null,null).exports,u=o("P19A"),m={props:{value:{type:Boolean,default:!1}},computed:{comment_disabled:{get:function(){return this.value},set:function(t){this.$emit("input",t)}}}},d=(Object(l.a)(m,(function(){var t=this,e=t.$createElement,o=t._self._c||e;return o("el-dropdown",{attrs:{"show-timeout":100,trigger:"click"}},[o("el-button",{attrs:{plain:""}},[t._v("\n    "+t._s(t.comment_disabled?"Comment closed":"Comment opened")+"\n    "),o("i",{staticClass:"el-icon-caret-bottom el-icon--right"})]),t._v(" "),o("el-dropdown-menu",{staticClass:"no-padding",attrs:{slot:"dropdown"},slot:"dropdown"},[o("el-dropdown-item",[o("el-radio-group",{staticStyle:{padding:"10px"},model:{value:t.comment_disabled,callback:function(e){t.comment_disabled=e},expression:"comment_disabled"}},[o("el-radio",{attrs:{label:!0}},[t._v("\n          Close comment\n        ")]),t._v(" "),o("el-radio",{attrs:{label:!1}},[t._v("\n          Open comment\n        ")])],1)],1)],1)],1)}),[],!1,null,null,null).exports,o("o0o1")),f=o.n(d),g=o("yXPU"),h=o.n(g),v=o("+Awk"),b=new v.a("country-list"),y={props:{value:{required:!0,default:function(){return[]},type:Array}},data:function(){return{countryOptions:[]}},computed:{countries:{get:function(){return this.value},set:function(t){this.$emit("input",t)}}},created:function(){this.getCountries()},methods:{getCountries:function(){var t=this;return h()(f.a.mark((function e(){var o;return f.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,b.list([]);case 2:o=e.sent,console.log(o),t.countryOptions=o;case 5:case"end":return e.stop()}}),e)})))()}}},_=(Object(l.a)(y,(function(){var t=this,e=t.$createElement,o=t._self._c||e;return o("el-checkbox-group",{staticStyle:{padding:"5px 15px"},model:{value:t.countries,callback:function(e){t.countries=e},expression:"countries"}},t._l(t.countryOptions,(function(e){return o("el-checkbox",{key:e.id,staticStyle:{display:"block"},attrs:{label:e.id}},[t._v("\n    "+t._s(e.name)+"\n  ")])})),1)}),[],!1,null,null,null).exports,new v.a("location-list")),x={props:{value:{required:!0,default:function(){return String},type:String}},data:function(){return{selected:null,locationOptions:[]}},computed:{locations:{get:function(){return this.selected},set:function(t){console.log(t),this.$emit("input",t)}}},created:function(){var t=this;setTimeout((function(){t.getLocations()}),1e3)},methods:{getLocations:function(){var t=this;return h()(f.a.mark((function e(){var o;return f.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,_.list([]);case 2:o=e.sent,t.locationOptions=o,void 0!==o[t.value]&&(t.selected=o[t.value].id);case 5:case"end":return e.stop()}}),e)})))()},changeLocation:function(t){this.$emit("catchLocation",t)}}},F=Object(l.a)(x,(function(){var t=this,e=t.$createElement,o=t._self._c||e;return o("el-form-item",{attrs:{label:"Location"}},[o("el-select",{attrs:{"value-key":"selected",placeholder:"Select"},on:{change:function(e){return t.changeLocation(e)}},model:{value:t.selected,callback:function(e){t.selected=e},expression:"selected"}},t._l(t.locationOptions,(function(e){return o("el-option",{key:e.id,attrs:{label:e.name,value:e.id,"selected-label":e.name}},[t._v(t._s(e.name))])})),1)],1)}),[],!1,null,null,null).exports,k={props:{value:{type:String,default:""}},computed:{source_uri:{get:function(){return this.value},set:function(t){this.$emit("input",t)}}}},w=(Object(l.a)(k,(function(){var t=this,e=t.$createElement,o=t._self._c||e;return o("el-dropdown",{attrs:{"show-timeout":100,trigger:"click"}},[o("el-button",{attrs:{plain:""}},[t._v("\n    External URL\n    "),o("i",{staticClass:"el-icon-caret-bottom el-icon--right"})]),t._v(" "),o("el-dropdown-menu",{staticClass:"no-padding no-border",staticStyle:{width:"400px"},attrs:{slot:"dropdown"},slot:"dropdown"},[o("el-form-item",{staticStyle:{"margin-bottom":"0px"},attrs:{"label-width":"0px",prop:"source_uri"}},[o("el-input",{attrs:{placeholder:"Enter the content"},model:{value:t.source_uri,callback:function(e){t.source_uri=e},expression:"source_uri"}},[o("template",{slot:"prepend"},[t._v("\n          Fill in the URL\n        ")])],2)],1)],1)],1)}),[],!1,null,null,null).exports,o("dV7z")),S={status:"draft",name:"",contract:"",type:"",location_id:"",translations:[],images:[],price:"",floor:"",total_area_int:"",total_area_ext:"",year_built:"",garage_no:"",no_bath:"",bedrooms:"",year_reno:"",garage_area:"",kitchen_type:"",orientation:"",lift:"",security_door:"",double_glazing:"",garage:"",garden:"",parking:"",terrase:"",newLocation:"",key_feature_1:"",key_feature_2:"",key_feature_3:"",source_uri:"",image_uri:"",resource:"",display_time:void 0,active:"",featured:"",name_eng:"",name_fre:"",shortdesceng:"",shortdescfre:"",keyfeature1eng:"",keyfeature1fre:"",keyfeature2eng:"",keyfeature2fre:"",keyfeature3eng:"",keyfeature3fre:""};a.default.use(w,{load:{key:"AIzaSyBw2hGYE25AKiiCS8lU_84HOJlEdJ-6PBM",libraries:"places"},installComponents:!1}),a.default.component("gmap-autocomplete",w.Autocomplete),a.default.component("google-marker",w.Marker),a.default.component("google-map",w.Map),a.default.component("ground-overlay",a.default.extend({mixins:[w.MapElementMixin],props:{source:{type:String,default:""},bounds:{type:Object,default:function(){return[]}},opacity:{type:Number,default:0}},created:function(){},destroyed:function(){this.$overlay.setMap(null)},render:function(){return""}}));var $={name:"PropertyDetail",components:{MediaLibrary:s,Sticky:p,LocationList:F},props:{isEdit:{type:Boolean,default:!1}},data:function(){return{postForm:Object.assign({},S),loading:!1,countries:[],countriesProps:{value:"id",label:"name",disabled:"disabled"},rules:{},tempRoute:{},currentPlace:null,center:{lat:45.508,lng:-73.587},markers:[{position:{lat:50.8476424,lng:4.3571696}}],place:"",mapCenter:{lat:50.8476424,lng:4.3571696},address:""}},computed:{contentShortLength:function(){return this.postForm.content_short.length},lang:function(){return this.$store.getters.language}},watch:{$route:"reInitialize"},created:function(){if(this.isEdit){var t=this.$route.params&&this.$route.params.id;this.fetchData(t)}else this.postForm=Object.assign({},S);this.tempRoute=Object.assign({},this.$route)},methods:{getAddressData:function(t,e,o){this.mapCenter={lat:t.geometry.location.lat(),lng:t.geometry.location.lng()},this.markers[0].position.lat=t.geometry.location.lat(),this.markers[0].position.lng=t.geometry.location.lng(),console.log(this.markers)},setFileList:function(t){this.postForm.images=t,console.log(this.postForm.images)},setPlace:function(t){this.currentPlace=t},updateCenter:function(t){this.mapCenter={lat:t.lat(),lng:t.lng()}},updatePlace:function(t){console.log(t),this.updateCenter(t.geometry.location)},updateCoordinates:function(t){this.mapCenter={lat:t.latLng.lat(),lng:t.latLng.lng()}},onLocationChange:function(t){this.newLocation=t},reInitialize:function(){this.$router.go()},fetchData:function(t){var e=this;Object(u.b)(t).then((function(t){e.postForm=t.data[0],e.postForm.id,e.mapCenter={lat:parseFloat(e.postForm.lat),lng:parseFloat(e.postForm.lng)},e.markers[0].position.lat=parseFloat(e.postForm.lat),e.markers[0].position.lng=parseFloat(e.postForm.lng),console.log(e.markers),0===e.postForm.price&&(e.postForm.price=""),e.setTagsViewName()})).catch((function(t){console.log(t)}))},setTagsViewName:function(){},submitForm:function(){var t=this;this.loading=!0,void 0===this.newLocation&&(this.newLocation=this.postForm.location_id),this.postForm.mapCenter=this.mapCenter,this.postFormlocation_id=this.newLocation,void 0!==this.postForm.id?Object(u.c)(this.postForm.id,this.postForm).then((function(e){t.$message({message:"Property has been updated successfully",type:"success",duration:5e3}),t.loading=!1,t.dialogPermissionLoading=!1,t.dialogPermissionVisible=!1})):(console.log("Created"),Object(u.a)(this.postForm).then((function(e){t.$message({message:"Property has been created successfully",type:"success",duration:5e3}),t.loading=!1,t.dialogPermissionLoading=!1,t.dialogPermissionVisible=!1,t.$router.push({path:"/administrator/properties"},(function(t){}))})))}}},L=(o("9GhV"),o("CMRX"),Object(l.a)($,(function(){var t=this,e=t.$createElement,o=t._self._c||e;return o("div",{staticClass:"createPost-container"},[o("el-form",{ref:"postForm",staticClass:"form-container",attrs:{model:t.postForm,rules:t.rules}},[o("sticky",{attrs:{"class-name":"sub-navbar "+t.postForm.status}},[o("el-button",{directives:[{name:"loading",rawName:"v-loading",value:t.loading,expression:"loading"}],staticStyle:{"margin-left":"10px"},attrs:{type:"success"},on:{click:t.submitForm}},[t._v("\n        Submit\n      ")])],1),t._v(" "),o("div",{staticClass:"createPost-main-container",staticStyle:{"margin-top":"40px"}},[o("el-row",[o("el-col",{attrs:{span:6}},[o("el-form-item",{staticStyle:{"margin-bottom":"20px"},attrs:{prop:"active"}},[o("el-checkbox",{attrs:{"true-label":1,"false-label":0,label:"1",name:"active"},model:{value:t.postForm.active,callback:function(e){t.$set(t.postForm,"active",e)},expression:"postForm.active"}},[t._v("Active")])],1),t._v(" "),o("el-form-item",{staticStyle:{"margin-bottom":"20px"},attrs:{prop:"featured"}},[o("el-checkbox",{attrs:{"true-label":1,"false-label":0,label:"1",name:"featured"},model:{value:t.postForm.featured,callback:function(e){t.$set(t.postForm,"featured",e)},expression:"postForm.featured"}},[t._v("Featured")])],1)],1),t._v(" "),o("el-col",{attrs:{span:6}},[o("el-form-item",{attrs:{label:"For"}},[o("el-select",{attrs:{placeholder:"For",name:"contract"},model:{value:t.postForm.contract,callback:function(e){t.$set(t.postForm,"contract",e)},expression:"postForm.contract"}},[o("el-option",{attrs:{label:"Sale",value:"sale"}}),t._v(" "),o("el-option",{attrs:{label:"Rent",value:"rent"}})],1)],1)],1),t._v(" "),o("el-col",{attrs:{span:6}},[o("el-form-item",{attrs:{label:"Type"}},[o("el-select",{attrs:{placeholder:"Type",name:"type"},model:{value:t.postForm.type,callback:function(e){t.$set(t.postForm,"type",e)},expression:"postForm.type"}},[o("el-option",{attrs:{label:"House",value:"House"}}),t._v(" "),o("el-option",{attrs:{label:"Apartment",value:"Apartment"}}),t._v(" "),o("el-option",{attrs:{label:"Commercial",value:"Commercial"}})],1)],1)],1),t._v(" "),o("el-col",{attrs:{span:6}},[o("LocationList",{attrs:{value:"postForm.location_id"},on:{catchLocation:t.onLocationChange},model:{value:t.postForm.location_id,callback:function(e){t.$set(t.postForm,"location_id",e)},expression:"postForm.location_id"}})],1)],1),t._v(" "),o("el-row",[o("el-col",{attrs:{span:24}},[o("el-row",[o("el-col",{attrs:{span:12}},[o("el-form-item",{staticStyle:{"margin-bottom":"20px",padding:"7px"},attrs:{label:"Property Name",prop:"name"}},[o("el-input",{attrs:{maxlength:100,name:"nameEng",required:""},model:{value:t.postForm.name_eng,callback:function(e){t.$set(t.postForm,"name_eng",e)},expression:"postForm.name_eng"}})],1)],1),t._v(" "),o("el-col",{attrs:{span:12}},[o("el-form-item",{staticStyle:{"margin-bottom":"20px",padding:"7px"},attrs:{label:"Property Name French",prop:"name"}},[o("el-input",{attrs:{maxlength:100,name:"nameFre",required:""},model:{value:t.postForm.name_fre,callback:function(e){t.$set(t.postForm,"name_fre",e)},expression:"postForm.name_fre"}})],1)],1)],1),t._v(" "),o("el-row",[o("el-col",{attrs:{span:12}},[o("el-form-item",{staticStyle:{"margin-bottom":"20px",padding:"7px"},attrs:{label:"Short Description English"}},[o("el-input",{attrs:{type:"textarea"},model:{value:t.postForm.shortdesceng,callback:function(e){t.$set(t.postForm,"shortdesceng",e)},expression:"postForm.shortdesceng"}})],1)],1),t._v(" "),o("el-col",{attrs:{span:12}},[o("el-form-item",{staticStyle:{"margin-bottom":"20px",padding:"7px"},attrs:{label:"Short Description French"}},[o("el-input",{attrs:{type:"textarea"},model:{value:t.postForm.shortdescfre,callback:function(e){t.$set(t.postForm,"shortdescfre",e)},expression:"postForm.shortdescfre"}})],1)],1)],1),t._v(" "),o("el-row",[o("el-col",{attrs:{span:6}},[o("el-form-item",{staticStyle:{"margin-bottom":"20px",padding:"7px"},attrs:{prop:"price",label:"Price"}},[o("el-input",{attrs:{maxlength:100,name:"price",required:""},model:{value:t.postForm.price,callback:function(e){t.$set(t.postForm,"price",e)},expression:"postForm.price"}})],1)],1),t._v(" "),o("el-col",{attrs:{span:6}},[o("el-form-item",{staticStyle:{"margin-bottom":"20px",padding:"7px"},attrs:{prop:"floor",label:"Floor"}},[o("el-input",{attrs:{maxlength:100,name:"floor",required:""},model:{value:t.postForm.floor,callback:function(e){t.$set(t.postForm,"floor",e)},expression:"postForm.floor"}})],1)],1),t._v(" "),o("el-col",{attrs:{span:6}},[o("el-form-item",{staticStyle:{"margin-bottom":"20px",padding:"7px"},attrs:{prop:"total_area_int",label:"Interior Area"}},[o("el-input",{attrs:{maxlength:100,name:"total_area_int",required:""},model:{value:t.postForm.total_area_int,callback:function(e){t.$set(t.postForm,"total_area_int",e)},expression:"postForm.total_area_int"}})],1)],1),t._v(" "),o("el-col",{attrs:{span:6}},[o("el-form-item",{staticStyle:{"margin-bottom":"20px",padding:"7px"},attrs:{prop:"total_area_ext",label:"Exterior Area"}},[o("el-input",{attrs:{maxlength:100,name:"total_area_ext",required:""},model:{value:t.postForm.total_area_ext,callback:function(e){t.$set(t.postForm,"total_area_ext",e)},expression:"postForm.total_area_ext"}})],1)],1)],1),t._v(" "),o("el-row",[o("el-col",{attrs:{span:6}},[o("el-form-item",{staticStyle:{"margin-bottom":"20px",padding:"7px"},attrs:{prop:"year_built",label:"Year Buit"}},[o("el-input",{attrs:{maxlength:100,name:"year_built",required:""},model:{value:t.postForm.year_built,callback:function(e){t.$set(t.postForm,"year_built",e)},expression:"postForm.year_built"}})],1)],1),t._v(" "),o("el-col",{attrs:{span:6}},[o("el-form-item",{staticStyle:{"margin-bottom":"20px",padding:"7px"},attrs:{prop:"garage_no",label:"No. Garages"}},[o("el-input",{attrs:{maxlength:100,name:"garage_no",required:""},model:{value:t.postForm.garage_no,callback:function(e){t.$set(t.postForm,"garage_no",e)},expression:"postForm.garage_no"}})],1)],1),t._v(" "),o("el-col",{attrs:{span:6}},[o("el-form-item",{staticStyle:{"margin-bottom":"20px",padding:"7px"},attrs:{prop:"no_bath",label:"No. Bathrooms"}},[o("el-input",{attrs:{maxlength:100,name:"no_bath",required:""},model:{value:t.postForm.no_bath,callback:function(e){t.$set(t.postForm,"no_bath",e)},expression:"postForm.no_bath"}})],1)],1),t._v(" "),o("el-col",{attrs:{span:6}},[o("el-form-item",{staticStyle:{"margin-bottom":"20px",padding:"7px"},attrs:{prop:"bedrooms",label:"No. Beadrooms"}},[o("el-input",{attrs:{maxlength:100,name:"bedrooms",required:""},model:{value:t.postForm.bedrooms,callback:function(e){t.$set(t.postForm,"bedrooms",e)},expression:"postForm.bedrooms"}})],1)],1)],1),t._v(" "),o("el-row",[o("el-col",{attrs:{span:6}},[o("el-form-item",{staticStyle:{"margin-bottom":"20px",padding:"7px"},attrs:{prop:"year_reno",label:"Year Renovated"}},[o("el-input",{attrs:{maxlength:100,name:"year_reno",required:""},model:{value:t.postForm.year_reno,callback:function(e){t.$set(t.postForm,"year_reno",e)},expression:"postForm.year_reno"}})],1)],1),t._v(" "),o("el-col",{attrs:{span:6}},[o("el-form-item",{staticStyle:{"margin-bottom":"20px",padding:"7px"},attrs:{prop:"garage_area",label:"No. of Outdoor parking spots"}},[o("el-input",{attrs:{maxlength:100,name:"garage_area",required:""},model:{value:t.postForm.garage_area,callback:function(e){t.$set(t.postForm,"garage_area",e)},expression:"postForm.garage_area"}})],1)],1),t._v(" "),o("el-col",{attrs:{span:6}},[o("el-form-item",{staticStyle:{"margin-bottom":"20px",padding:"7px"},attrs:{prop:"kitchen_type",label:"Kitchen Type"}},[o("el-input",{attrs:{maxlength:100,name:"kitchen_type",required:""},model:{value:t.postForm.kitchen_type,callback:function(e){t.$set(t.postForm,"kitchen_type",e)},expression:"postForm.kitchen_type"}})],1)],1),t._v(" "),o("el-col",{attrs:{span:6}},[o("el-form-item",{attrs:{label:"Orientation"}},[o("el-select",{attrs:{placeholder:"Orientation",name:"type"},model:{value:t.postForm.orientation,callback:function(e){t.$set(t.postForm,"orientation",e)},expression:"postForm.orientation"}},[o("el-option",{attrs:{label:"North",value:"N"}}),t._v(" "),o("el-option",{attrs:{label:"Northeast",value:"NE"}}),t._v(" "),o("el-option",{attrs:{label:"Northwest",value:"NW"}}),t._v(" "),o("el-option",{attrs:{label:"East",value:"East"}}),t._v(" "),o("el-option",{attrs:{label:"South",value:"South"}}),t._v(" "),o("el-option",{attrs:{label:"Southeast",value:"Southeast"}}),t._v(" "),o("el-option",{attrs:{label:"Southwest",value:"Southwest"}}),t._v(" "),o("el-option",{attrs:{label:"West",value:"West"}})],1)],1)],1)],1),t._v(" "),o("el-row",[o("el-col",{attrs:{span:24}},[o("el-form-item",{attrs:{label:"Options"}},[o("br"),t._v(" "),o("el-checkbox",{attrs:{"true-label":1,"false-label":0,label:"1",name:"lift"},model:{value:t.postForm.lift,callback:function(e){t.$set(t.postForm,"lift",e)},expression:"postForm.lift"}},[t._v("Lift")]),t._v(" "),o("el-checkbox",{attrs:{"true-label":1,"false-label":0,name:"security_door",value:"1"},model:{value:t.postForm.security_door,callback:function(e){t.$set(t.postForm,"security_door",e)},expression:"postForm.security_door"}},[t._v("Security Door")]),t._v(" "),o("el-checkbox",{attrs:{"true-label":1,"false-label":0,name:"double_glazing",value:"1"},model:{value:t.postForm.double_glazing,callback:function(e){t.$set(t.postForm,"double_glazing",e)},expression:"postForm.double_glazing"}},[t._v("Double Glazing")]),t._v(" "),o("el-checkbox",{attrs:{"true-label":1,"false-label":0,name:"garage",value:"1"},model:{value:t.postForm.garage,callback:function(e){t.$set(t.postForm,"garage",e)},expression:"postForm.garage"}},[t._v("Garage")]),t._v(" "),o("el-checkbox",{attrs:{"true-label":1,"false-label":0,name:"garden",value:"1"},model:{value:t.postForm.garden,callback:function(e){t.$set(t.postForm,"garden",e)},expression:"postForm.garden"}},[t._v("Garden")]),t._v(" "),o("el-checkbox",{attrs:{"true-label":1,"false-label":0,name:"parking",value:"1"},model:{value:t.postForm.parking,callback:function(e){t.$set(t.postForm,"parking",e)},expression:"postForm.parking"}},[t._v("Parking")]),t._v(" "),o("el-checkbox",{attrs:{"true-label":1,"false-label":0,name:"terrase",value:"1"},model:{value:t.postForm.terrase,callback:function(e){t.$set(t.postForm,"terrase",e)},expression:"postForm.terrase"}},[t._v("Terrase")])],1)],1)],1),t._v(" "),o("el-row",[o("el-col",{attrs:{span:12}},[o("el-form-item",{staticStyle:{"margin-bottom":"20px",padding:"7px"},attrs:{label:"Key Feature 1: English"}},[o("el-input",{attrs:{type:"textarea"},model:{value:t.postForm.keyfeature1eng,callback:function(e){t.$set(t.postForm,"keyfeature1eng",e)},expression:"postForm.keyfeature1eng"}})],1)],1),t._v(" "),o("el-col",{attrs:{span:12}},[o("el-form-item",{staticStyle:{"margin-bottom":"20px",padding:"7px"},attrs:{label:"Key Feature 1: French"}},[o("el-input",{attrs:{type:"textarea"},model:{value:t.postForm.keyfeature1fre,callback:function(e){t.$set(t.postForm,"keyfeature1fre",e)},expression:"postForm.keyfeature1fre"}})],1)],1)],1),t._v(" "),o("el-row",[o("el-col",{attrs:{span:12}},[o("el-form-item",{staticStyle:{"margin-bottom":"20px",padding:"7px"},attrs:{label:"Key Feature 2: English"}},[o("el-input",{attrs:{type:"textarea"},model:{value:t.postForm.keyfeature2eng,callback:function(e){t.$set(t.postForm,"keyfeature2eng",e)},expression:"postForm.keyfeature2eng"}})],1)],1),t._v(" "),o("el-col",{attrs:{span:12}},[o("el-form-item",{staticStyle:{"margin-bottom":"20px",padding:"7px"},attrs:{label:"Key Feature 2: French"}},[o("el-input",{attrs:{type:"textarea"},model:{value:t.postForm.keyfeature2fre,callback:function(e){t.$set(t.postForm,"keyfeature2fre",e)},expression:"postForm.keyfeature2fre"}})],1)],1)],1),t._v(" "),o("el-row",[o("el-col",{attrs:{span:12}},[o("el-form-item",{staticStyle:{"margin-bottom":"20px",padding:"7px"},attrs:{label:"Key Feature 3: English"}},[o("el-input",{attrs:{name:"key_feature_3_eng",type:"textarea"},model:{value:t.postForm.keyfeature3eng,callback:function(e){t.$set(t.postForm,"keyfeature3eng",e)},expression:"postForm.keyfeature3eng"}})],1)],1),t._v(" "),o("el-col",{attrs:{span:12}},[o("el-form-item",{staticStyle:{"margin-bottom":"20px",padding:"7px"},attrs:{label:"Key Feature 3: French"}},[o("el-input",{attrs:{name:"key_feature_3_fre",type:"textarea"},model:{value:t.postForm.keyfeature3fre,callback:function(e){t.$set(t.postForm,"keyfeature3fre",e)},expression:"postForm.keyfeature3fre"}})],1)],1)],1)],1)],1),t._v(" "),o("el-row",[o("el-col",{attrs:{span:24}},[o("el-form-item",{staticStyle:{"margin-bottom":"30px"},attrs:{prop:"image_uri"}},[o("media-library",{attrs:{"file-list":t.postForm.images,"upload-url":"/api/property/"+t.postForm.id+"/upload",model:"Property","model-id":t.postForm.id},on:{input:t.setFileList},model:{value:t.postForm.property,callback:function(e){t.$set(t.postForm,"property",e)},expression:"postForm.property"}})],1)],1),t._v(" "),o("el-col",{attrs:{span:24}},[o("gmap-autocomplete",{ref:"toAddress",staticStyle:{width:"40%"},attrs:{id:"map",classname:"form-control",placeholder:"Start typing address",country:"us"},on:{place_changed:t.getAddressData}}),t._v(" "),o("google-map",{staticStyle:{width:"100%",height:"500px"},attrs:{center:t.mapCenter,zoom:12}},[o("ground-overlay",{attrs:{source:"//xkjyeah.github.io/vue-google-maps/overlay.png",bounds:{north:1.502,south:1.185,east:104.0262,west:103.5998},opacity:.5}}),t._v(" "),t._l(t.markers,(function(e){return o("google-marker",{key:e.position,attrs:{position:e.position,clickable:!0,draggable:!0,volatility:!0},on:{drag:t.updateCoordinates,click:function(o){t.center=e.position}}})}))],2)],1)],1)],1)],1)],1)}),[],!1,null,"532c0a4c",null));e.a=L.exports}}]);
(window.webpackJsonp=window.webpackJsonp||[]).push([[2],{"2X39":function(t,e,n){"use strict";n("7G//")},"3i0d":function(t,e,n){(e=n("JPst")(!1)).push([t.i,"\n.createPost-container label.el-form-item__label {\r\n  text-align: left;\n}\r\n",""]),t.exports=e},"6mPD":function(t,e,n){"use strict";var a={name:"MdInput",props:{icon:String,name:String,type:{type:String,default:"text"},value:[String,Number],placeholder:String,readonly:Boolean,disabled:Boolean,min:String,max:String,step:String,minlength:Number,maxlength:Number,required:{type:Boolean,default:!0},autoComplete:{type:String,default:"off"},validateEvent:{type:Boolean,default:!0}},data:function(){return{currentValue:this.value,focus:!1,fillPlaceHolder:null}},computed:{computedClasses:function(){return{"material--active":this.focus,"material--disabled":this.disabled,"material--raised":Boolean(this.focus||this.currentValue)}}},watch:{value:function(t){this.currentValue=t}},methods:{handleModelInput:function(t){var e=t.target.value;this.$emit("input",e),"ElFormItem"===this.$parent.$options.componentName&&this.validateEvent&&this.$parent.$emit("el.form.change",[e]),this.$emit("change",e)},handleMdFocus:function(t){this.focus=!0,this.$emit("focus",t),this.placeholder&&""!==this.placeholder&&(this.fillPlaceHolder=this.placeholder)},handleMdBlur:function(t){this.focus=!1,this.$emit("blur",t),this.fillPlaceHolder=null,"ElFormItem"===this.$parent.$options.componentName&&this.validateEvent&&this.$parent.$emit("el.form.blur",[this.currentValue])}}},i=(n("nTgC"),n("KHd+")),o=Object(i.a)(a,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"material-input__component",class:t.computedClasses},[n("div",{class:{iconClass:t.icon}},[t.icon?n("i",{staticClass:"el-input__icon material-input__icon",class:["el-icon-"+t.icon]}):t._e(),t._v(" "),"email"===t.type?n("input",{directives:[{name:"model",rawName:"v-model",value:t.currentValue,expression:"currentValue"}],staticClass:"material-input",attrs:{name:t.name,placeholder:t.fillPlaceHolder,readonly:t.readonly,disabled:t.disabled,autoComplete:t.autoComplete,required:t.required,type:"email"},domProps:{value:t.currentValue},on:{focus:t.handleMdFocus,blur:t.handleMdBlur,input:[function(e){e.target.composing||(t.currentValue=e.target.value)},t.handleModelInput]}}):t._e(),t._v(" "),"url"===t.type?n("input",{directives:[{name:"model",rawName:"v-model",value:t.currentValue,expression:"currentValue"}],staticClass:"material-input",attrs:{name:t.name,placeholder:t.fillPlaceHolder,readonly:t.readonly,disabled:t.disabled,autoComplete:t.autoComplete,required:t.required,type:"url"},domProps:{value:t.currentValue},on:{focus:t.handleMdFocus,blur:t.handleMdBlur,input:[function(e){e.target.composing||(t.currentValue=e.target.value)},t.handleModelInput]}}):t._e(),t._v(" "),"number"===t.type?n("input",{directives:[{name:"model",rawName:"v-model",value:t.currentValue,expression:"currentValue"}],staticClass:"material-input",attrs:{name:t.name,placeholder:t.fillPlaceHolder,step:t.step,readonly:t.readonly,disabled:t.disabled,autoComplete:t.autoComplete,max:t.max,min:t.min,minlength:t.minlength,maxlength:t.maxlength,required:t.required,type:"number"},domProps:{value:t.currentValue},on:{focus:t.handleMdFocus,blur:t.handleMdBlur,input:[function(e){e.target.composing||(t.currentValue=e.target.value)},t.handleModelInput]}}):t._e(),t._v(" "),"password"===t.type?n("input",{directives:[{name:"model",rawName:"v-model",value:t.currentValue,expression:"currentValue"}],staticClass:"material-input",attrs:{name:t.name,placeholder:t.fillPlaceHolder,readonly:t.readonly,disabled:t.disabled,autoComplete:t.autoComplete,max:t.max,min:t.min,required:t.required,type:"password"},domProps:{value:t.currentValue},on:{focus:t.handleMdFocus,blur:t.handleMdBlur,input:[function(e){e.target.composing||(t.currentValue=e.target.value)},t.handleModelInput]}}):t._e(),t._v(" "),"tel"===t.type?n("input",{directives:[{name:"model",rawName:"v-model",value:t.currentValue,expression:"currentValue"}],staticClass:"material-input",attrs:{name:t.name,placeholder:t.fillPlaceHolder,readonly:t.readonly,disabled:t.disabled,autoComplete:t.autoComplete,required:t.required,type:"tel"},domProps:{value:t.currentValue},on:{focus:t.handleMdFocus,blur:t.handleMdBlur,input:[function(e){e.target.composing||(t.currentValue=e.target.value)},t.handleModelInput]}}):t._e(),t._v(" "),"text"===t.type?n("input",{directives:[{name:"model",rawName:"v-model",value:t.currentValue,expression:"currentValue"}],staticClass:"material-input",attrs:{name:t.name,placeholder:t.fillPlaceHolder,readonly:t.readonly,disabled:t.disabled,autoComplete:t.autoComplete,minlength:t.minlength,maxlength:t.maxlength,required:t.required,type:"text"},domProps:{value:t.currentValue},on:{focus:t.handleMdFocus,blur:t.handleMdBlur,input:[function(e){e.target.composing||(t.currentValue=e.target.value)},t.handleModelInput]}}):t._e(),t._v(" "),n("span",{staticClass:"material-input-bar"}),t._v(" "),n("label",{staticClass:"material-label"},[t._t("default")],2)])])}),[],!1,null,"3c53f318",null);e.a=o.exports},"7G//":function(t,e,n){var a=n("3i0d");"string"==typeof a&&(a=[[t.i,a,""]]);var i={hmr:!0,transform:void 0,insertInto:void 0};n("aET+")(a,i);a.locals&&(t.exports=a.locals)},BC1d:function(t,e,n){(e=n("JPst")(!1)).push([t.i,"\n.tinymce-container[data-v-54c54472] {\r\n  position: relative;\r\n  line-height: normal;\n}\n.tinymce-container[data-v-54c54472] .mce-fullscreen {\r\n  z-index: 10000;\n}\n.tinymce-textarea[data-v-54c54472] {\r\n  visibility: hidden;\r\n  z-index: -1;\n}\n.editor-custom-btn-container[data-v-54c54472] {\r\n  position: absolute;\r\n  right: 4px;\r\n  top: 4px;\r\n  /*z-index: 2005;*/\n}\n.fullscreen .editor-custom-btn-container[data-v-54c54472] {\r\n  z-index: 10000;\r\n  position: fixed;\n}\n.editor-upload-btn[data-v-54c54472] {\r\n  display: inline-block;\n}\r\n",""]),t.exports=e},EQeb:function(t,e,n){"use strict";n("bLpj")},FS72:function(t,e,n){"use strict";n("JRRk")},Hnpz:function(t,e,n){"use strict";n.d(e,"a",(function(){return i}));var a=n("rywy");function i(t){return Object(a.a)({url:"/search/user",method:"get",params:{name:t}})}},JRRk:function(t,e,n){var a=n("cyU5");"string"==typeof a&&(a=[[t.i,a,""]]);var i={hmr:!0,transform:void 0,insertInto:void 0};n("aET+")(a,i);a.locals&&(t.exports=a.locals)},TM6A:function(t,e,n){(e=n("JPst")(!1)).push([t.i,".material-input__component .material-input-bar[data-v-3c53f318]:before, .material-input__component .material-input-bar[data-v-3c53f318]:after {\n  content: '';\n  height: 1px;\n  width: 0;\n  bottom: 0;\n  position: absolute;\n  -webkit-transition: 0.2s ease all;\n  transition: 0.2s ease all;\n}\n.material-input__component[data-v-3c53f318] {\n  margin-top: 36px;\n  position: relative;\n}\n.material-input__component *[data-v-3c53f318] {\n  -webkit-box-sizing: border-box;\n          box-sizing: border-box;\n}\n.material-input__component .iconClass .material-input__icon[data-v-3c53f318] {\n  position: absolute;\n  left: 0;\n  line-height: 16px;\n  color: #2196F3;\n  top: 12px;\n  width: 30px;\n  height: 16px;\n  font-size: 16px;\n  font-weight: normal;\n  pointer-events: none;\n}\n.material-input__component .iconClass .material-label[data-v-3c53f318] {\n  left: 30px;\n}\n.material-input__component .iconClass .material-input[data-v-3c53f318] {\n  text-indent: 30px;\n}\n.material-input__component .material-input[data-v-3c53f318] {\n  font-size: 16px;\n  padding: 12px 12px 2px 6px;\n  display: block;\n  width: 100%;\n  border: none;\n  line-height: 1;\n  border-radius: 0;\n}\n.material-input__component .material-input[data-v-3c53f318]:focus {\n  outline: none;\n  border: none;\n  border-bottom: 1px solid transparent;\n}\n.material-input__component .material-label[data-v-3c53f318] {\n  font-weight: normal;\n  position: absolute;\n  pointer-events: none;\n  left: 0px;\n  top: 0;\n  -webkit-transition: 0.2s ease all;\n  transition: 0.2s ease all;\n  font-size: 18px;\n}\n.material-input__component .material-input-bar[data-v-3c53f318] {\n  position: relative;\n  display: block;\n  width: 100%;\n}\n.material-input__component .material-input-bar[data-v-3c53f318]:before {\n  left: 50%;\n}\n.material-input__component .material-input-bar[data-v-3c53f318]:after {\n  right: 50%;\n}\n.material-input__component.material--disabled .material-input[data-v-3c53f318] {\n  border-bottom-style: dashed;\n}\n.material-input__component.material--raised .material-label[data-v-3c53f318] {\n  top: -28px;\n  left: 0;\n  font-size: 16px;\n  font-weight: bold;\n}\n.material-input__component.material--active .material-input-bar[data-v-3c53f318]:before, .material-input__component.material--active .material-input-bar[data-v-3c53f318]:after {\n  width: 50%;\n}\n.material-input__component[data-v-3c53f318] {\n  background: white;\n}\n.material-input__component .material-input[data-v-3c53f318] {\n  background: none;\n  color: black;\n  text-indent: 0px;\n  border-bottom: 1px solid #E0E0E0;\n}\n.material-input__component .material-label[data-v-3c53f318] {\n  color: #9E9E9E;\n}\n.material-input__component .material-input-bar[data-v-3c53f318]:before, .material-input__component .material-input-bar[data-v-3c53f318]:after {\n  background: #2196F3;\n}\n.material-input__component.material--active .material-label[data-v-3c53f318] {\n  color: #2196F3;\n}\n.material-input__component.material--has-errors.material--active .material-label[data-v-3c53f318] {\n  color: #F44336;\n}\n.material-input__component.material--has-errors .material-input-bar[data-v-3c53f318]:before, .material-input__component.material--has-errors .material-input-bar[data-v-3c53f318]:after {\n  background: transparent;\n}\n",""]),t.exports=e},VM1W:function(t,e,n){"use strict";n("dndL")},bLpj:function(t,e,n){var a=n("g2Nw");"string"==typeof a&&(a=[[t.i,a,""]]);var i={hmr:!0,transform:void 0,insertInto:void 0};n("aET+")(a,i);a.locals&&(t.exports=a.locals)},cby5:function(t,e,n){var a=n("TM6A");"string"==typeof a&&(a=[[t.i,a,""]]);var i={hmr:!0,transform:void 0,insertInto:void 0};n("aET+")(a,i);a.locals&&(t.exports=a.locals)},cyU5:function(t,e,n){(e=n("JPst")(!1)).push([t.i,".editor-slide-upload[data-v-301379a8] {\n  margin-bottom: 20px;\n}\n.editor-slide-upload[data-v-301379a8] .el-upload--picture-card {\n  width: 100%;\n}\n",""]),t.exports=e},dndL:function(t,e,n){var a=n("BC1d");"string"==typeof a&&(a=[[t.i,a,""]]);var i={hmr:!0,transform:void 0,insertInto:void 0};n("aET+")(a,i);a.locals&&(t.exports=a.locals)},g2Nw:function(t,e,n){(e=n("JPst")(!1)).push([t.i,'.createPost-container[data-v-3f0933b2] {\n  position: relative;\n}\n.createPost-container .createPost-main-container[data-v-3f0933b2] {\n  padding: 0 45px 20px 50px;\n}\n.createPost-container .createPost-main-container .postInfo-container[data-v-3f0933b2] {\n  position: relative;\n  margin-bottom: 10px;\n}\n.createPost-container .createPost-main-container .postInfo-container[data-v-3f0933b2]:after {\n  content: "";\n  display: table;\n  clear: both;\n}\n.createPost-container .createPost-main-container .postInfo-container .postInfo-container-item[data-v-3f0933b2] {\n  float: left;\n}\n.createPost-container .word-counter[data-v-3f0933b2] {\n  width: 40px;\n  position: absolute;\n  right: -10px;\n  top: 0px;\n}\n',""]),t.exports=e},if69:function(t,e,n){"use strict";var a={name:"Sticky",props:{stickyTop:{type:Number,default:0},zIndex:{type:Number,default:1},className:{type:String,default:""}},data:function(){return{active:!1,position:"",width:void 0,height:void 0,isSticky:!1}},mounted:function(){this.height=this.$el.getBoundingClientRect().height,window.addEventListener("scroll",this.handleScroll),window.addEventListener("resize",this.handleReize)},activated:function(){this.handleScroll()},destroyed:function(){window.removeEventListener("scroll",this.handleScroll),window.removeEventListener("resize",this.handleReize)},methods:{sticky:function(){this.active||(this.position="fixed",this.active=!0,this.width=this.width+"px",this.isSticky=!0)},handleReset:function(){this.active&&this.reset()},reset:function(){this.position="",this.width="auto",this.active=!1,this.isSticky=!1},handleScroll:function(){var t=this.$el.getBoundingClientRect().width;this.width=t||"auto",this.$el.getBoundingClientRect().top<this.stickyTop?this.sticky():this.handleReset()},handleReize:function(){this.isSticky&&(this.width=this.$el.getBoundingClientRect().width+"px")}}},i=n("KHd+"),o=Object(i.a)(a,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{style:{height:t.height+"px",zIndex:t.zIndex}},[n("div",{class:t.className,style:{top:t.isSticky?t.stickyTop+"px":"",zIndex:t.zIndex,position:t.position,width:t.width,height:t.height+"px"}},[t._t("default",[n("div",[t._v("sticky")])])],2)])}),[],!1,null,null,null);e.a=o.exports},nTgC:function(t,e,n){"use strict";n("cby5")},u8jo:function(t,e,n){"use strict";var a={name:"EditorSlideUpload",props:{color:{type:String,default:"#1890ff"}},data:function(){return{dialogVisible:!1,listObj:{},fileList:[]}},methods:{checkAllSuccess:function(){var t=this;return Object.keys(this.listObj).every((function(e){return t.listObj[e].hasSuccess}))},handleSubmit:function(){var t=this,e=Object.keys(this.listObj).map((function(e){return t.listObj[e]}));this.checkAllSuccess()?(this.$emit("successCBK",e),this.listObj={},this.fileList=[],this.dialogVisible=!1):this.$message("Please wait for all images to be uploaded successfully or there is a network problem, please refresh the page and re-upload!")},handleSuccess:function(t,e){for(var n=e.uid,a=Object.keys(this.listObj),i=0,o=a.length;i<o;i++)if(this.listObj[a[i]].uid===n)return this.listObj[a[i]].url=t.files.file,void(this.listObj[a[i]].hasSuccess=!0)},handleRemove:function(t){for(var e=t.uid,n=Object.keys(this.listObj),a=0,i=n.length;a<i;a++)if(this.listObj[n[a]].uid===e)return void delete this.listObj[n[a]]},beforeUpload:function(t){var e=this,n=window.URL||window.webkitURL,a=t.uid;return this.listObj[a]={},new Promise((function(i,o){var r=new Image;r.src=n.createObjectURL(t),r.onload=function(){e.listObj[a]={hasSuccess:!1,uid:t.uid,width:this.width,height:this.height}},i(!0)}))}}},i=(n("FS72"),n("KHd+")),o=Object(i.a)(a,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"upload-container"},[n("el-button",{style:{background:t.color,borderColor:t.color},attrs:{icon:"el-icon-upload",size:"mini",type:"primary"},on:{click:function(e){t.dialogVisible=!0}}},[t._v("\n    Upload Image\n  ")]),t._v(" "),n("el-dialog",{attrs:{visible:t.dialogVisible},on:{"update:visible":function(e){t.dialogVisible=e}}},[n("el-upload",{staticClass:"editor-slide-upload",attrs:{multiple:!0,"file-list":t.fileList,"show-file-list":!0,"on-remove":t.handleRemove,"on-success":t.handleSuccess,"before-upload":t.beforeUpload,action:"https://httpbin.org/post","list-type":"picture-card"}},[n("el-button",{attrs:{size:"small",type:"primary"}},[t._v("\n        Click here to upload\n      ")])],1),t._v(" "),n("el-button",{on:{click:function(e){t.dialogVisible=!1}}},[t._v("\n      Cancel\n    ")]),t._v(" "),n("el-button",{attrs:{type:"primary"},on:{click:t.handleSubmit}},[t._v("\n      Confirm\n    ")])],1)],1)}),[],!1,null,"301379a8",null).exports,r=["advlist anchor autolink autosave code codesample colorpicker colorpicker contextmenu directionality emoticons fullscreen hr image imagetools insertdatetime link lists media nonbreaking noneditable pagebreak paste preview print save searchreplace spellchecker tabfocus table template textcolor textpattern visualblocks visualchars wordcount"],s=["searchreplace bold italic underline strikethrough alignleft aligncenter alignright outdent indent  blockquote undo redo removeformat subscript superscript code codesample","hr bullist numlist link image charmap preview anchor pagebreak insertdatetime media table emoticons forecolor backcolor fullscreen"],l={name:"Tinymce",components:{editorImage:o},props:{id:{type:String,default:function(){return"vue-tinymce-"+ +new Date+(1e3*Math.random()).toFixed(0)}},value:{type:String,default:""},toolbar:{type:Array,required:!1,default:function(){return[]}},menubar:{type:String,default:"file edit insert view format table"},height:{type:Number,required:!1,default:360}},data:function(){return{hasChange:!1,hasInit:!1,tinymceId:this.id,fullscreen:!1,languageTypeList:{en:"en",zh:"zh_CN"}}},computed:{language:function(){return this.languageTypeList[this.$store.getters.language]}},watch:{value:function(t){var e=this;!this.hasChange&&this.hasInit&&this.$nextTick((function(){return window.tinymce.get(e.tinymceId).setContent(t||"")}))},language:function(){var t=this;this.destroyTinymce(),this.$nextTick((function(){return t.initTinymce()}))}},mounted:function(){this.initTinymce()},activated:function(){this.initTinymce()},deactivated:function(){this.destroyTinymce()},destroyed:function(){this.destroyTinymce()},methods:{initTinymce:function(){var t=this,e=this;window.tinymce.init({language:this.language,selector:"#".concat(this.tinymceId),height:this.height,body_class:"panel-body ",object_resizing:!1,toolbar:this.toolbar.length>0?this.toolbar:s,menubar:this.menubar,plugins:r,end_container_on_empty_block:!0,powerpaste_word_import:"clean",code_dialog_height:450,code_dialog_width:1e3,advlist_bullet_styles:"square",advlist_number_styles:"default",imagetools_cors_hosts:["www.tinymce.com","codepen.io"],default_link_target:"_blank",link_title:!1,nonbreaking_force_tab:!0,init_instance_callback:function(n){e.value&&n.setContent(e.value),e.hasInit=!0,n.on("NodeChange Change KeyUp SetContent",(function(){t.hasChange=!0,t.$emit("input",n.getContent())}))},setup:function(t){t.on("FullscreenStateChanged",(function(t){e.fullscreen=t.state}))}})},destroyTinymce:function(){var t=window.tinymce.get(this.tinymceId);this.fullscreen&&t.execCommand("mceFullScreen"),t&&t.destroy()},setContent:function(t){window.tinymce.get(this.tinymceId).setContent(t)},getContent:function(){window.tinymce.get(this.tinymceId).getContent()},imageSuccessCBK:function(t){var e=this;t.forEach((function(t){window.tinymce.get(e.tinymceId).insertContent('<img class="wscnph" src="'.concat(t.url,'" >'))}))}}},c=(n("VM1W"),Object(i.a)(l,(function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"tinymce-container editor-container",class:{fullscreen:this.fullscreen}},[e("textarea",{staticClass:"tinymce-textarea",attrs:{id:this.tinymceId}}),this._v(" "),e("div",{staticClass:"editor-custom-btn-container"},[e("editorImage",{staticClass:"editor-upload-btn",attrs:{color:"#1890ff"},on:{successCBK:this.imageSuccessCBK}})],1)])}),[],!1,null,"54c54472",null).exports),u=n("6mPD"),d=n("if69"),m=n("rywy");var p=n("Hnpz"),h={title:"",content:"",summary:"",translations:[{title:"",content:""},{title:"",content:""}],id:void 0},f={name:"BlockDetail",components:{Tinymce:c,MDinput:u.a,Sticky:d.a},props:{isEdit:{type:Boolean,default:!1}},data:function(){return{postForm:Object.assign({},h),loading:!1,userListOptions:[],rules:{},tempRoute:{}}},computed:{contentShortLength:function(){return this.postForm.content?this.postForm.content.length:0},lang:function(){return this.$store.getters.language}},created:function(){if(this.isEdit){var t=this.$route.params&&this.$route.params.id;this.fetchData(t)}else this.postForm=Object.assign({},h);this.tempRoute=Object.assign({},this.$route)},methods:{fetchData:function(t){var e=this;(function(t){return Object(m.a)({url:"/block/"+t,method:"get"})})(t).then((function(t){e.postForm=t.data[0][0],e.postForm.id,e.postForm.translations,console.log(e.postForm)})).catch((function(t){console.log(t)}))},submitForm:function(){var t=this;this.loading=!0;var e,n={id:this.postForm.id,translations:this.postForm.translations};this.postForm.id?function(t,e){return Object(m.a)({url:"/block/"+t+"/update",method:"post",data:e})}(this.postForm.id,n).then((function(e){t.$message({message:"Block has been updated successfully",type:"success",duration:5e3}),t.loading=!1,t.dialogPermissionLoading=!1,t.dialogPermissionVisible=!1})):(console.log(n),(e=n,Object(m.a)({url:"/block/create",method:"post",data:e})).then((function(e){t.$message({message:"Block has been added successfully",type:"success",duration:5e3}),t.loading=!1,t.dialogPermissionLoading=!1,t.dialogPermissionVisible=!1,t.$router.push({path:"/administrator/blocks"})})))},draftForm:function(){0!==this.postForm.content.length&&0!==this.postForm.title.length?(this.$message({message:"Successfully saved",type:"success",showClose:!0,duration:1e3}),this.postForm.status="draft"):this.$message({message:"Please enter required title and content",type:"warning"})},getRemoteUserList:function(t){var e=this;Object(p.a)(t).then((function(t){t.data.items&&(e.userListOptions=t.data.items.map((function(t){return t.name})))}))}}},v=(n("EQeb"),n("2X39"),Object(i.a)(f,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"createPost-container"},[n("el-form",{ref:"postForm",staticClass:"form-container",attrs:{model:t.postForm,rules:t.rules}},[n("sticky",{attrs:{"class-name":"sub-navbar "+t.postForm.status}},[n("el-button",{directives:[{name:"loading",rawName:"v-loading",value:t.loading,expression:"loading"}],staticStyle:{"margin-left":"10px"},attrs:{type:"success"},on:{click:t.submitForm}},[t._v("\n        Submit\n      ")])],1),t._v(" "),n("div",{staticClass:"createPost-main-container"},[n("el-row",[n("el-col",{attrs:{span:24}},[n("el-form-item",{staticStyle:{"margin-bottom":"40px"},attrs:{prop:"title"}},[n("MDinput",{attrs:{maxlength:100,name:"name",required:""},model:{value:t.postForm.translations[0].title,callback:function(e){t.$set(t.postForm.translations[0],"title",e)},expression:"postForm.translations[0].title"}},[t._v("\n              EN Title\n            ")])],1),t._v(" "),n("el-form-item",{staticStyle:{"margin-bottom":"40px"},attrs:{prop:"title"}},[n("MDinput",{attrs:{maxlength:100,name:"name",required:""},model:{value:t.postForm.translations[1].title,callback:function(e){t.$set(t.postForm.translations[1],"title",e)},expression:"postForm.translations[1].title"}},[t._v("\n              FR Title\n            ")])],1)],1)],1),t._v(" "),n("el-form-item",{staticStyle:{"margin-bottom":"40px"},attrs:{"label-width":"80px",label:"EN Summary:"}},[n("el-input",{staticClass:"block-textarea",attrs:{rows:1,type:"textarea",autosize:"",placeholder:"Please enter the summary"},model:{value:t.postForm.translations[0].summary,callback:function(e){t.$set(t.postForm.translations[0],"summary",e)},expression:"postForm.translations[0].summary"}}),t._v(" "),n("span",{directives:[{name:"show",rawName:"v-show",value:t.contentShortLength,expression:"contentShortLength"}],staticClass:"word-counter"},[t._v(t._s(t.contentShortLength)+" word")])],1),t._v(" "),n("el-form-item",{staticStyle:{"margin-bottom":"40px"},attrs:{"label-width":"80px",label:"FR Summary:"}},[n("el-input",{staticClass:"block-textarea",attrs:{rows:1,type:"textarea",autosize:"",placeholder:"Please enter the summary"},model:{value:t.postForm.translations[1].summary,callback:function(e){t.$set(t.postForm.translations[1],"summary",e)},expression:"postForm.translations[1].summary"}}),t._v(" "),n("span",{directives:[{name:"show",rawName:"v-show",value:t.contentShortLength,expression:"contentShortLength"}],staticClass:"word-counter"},[t._v(t._s(t.contentShortLength)+" word")])],1),t._v(" "),n("el-form-item",{staticStyle:{"margin-bottom":"30px"},attrs:{prop:"content"}},[n("label",[t._v("EN Content")]),t._v(" "),n("Tinymce",{ref:"editor",attrs:{height:400},model:{value:t.postForm.translations[0].content,callback:function(e){t.$set(t.postForm.translations[0],"content",e)},expression:"postForm.translations[0].content"}})],1),t._v(" "),n("el-form-item",{staticStyle:{"margin-bottom":"30px"},attrs:{prop:"content"}},[n("label",[t._v("FR Content")]),t._v(" "),n("Tinymce",{ref:"editor",attrs:{height:400},model:{value:t.postForm.translations[1].content,callback:function(e){t.$set(t.postForm.translations[1],"content",e)},expression:"postForm.translations[1].content"}})],1)],1)],1)],1)}),[],!1,null,"3f0933b2",null));e.a=v.exports}}]);
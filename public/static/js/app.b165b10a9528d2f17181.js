webpackJsonp([1,2],Array(37).concat([function(t,s,e){e(104);var a=e(1)(e(65),e(116),"data-v-9e3feb44",null);t.exports=a.exports},function(t,s,e){e(101);var a=e(1)(e(66),e(113),"data-v-511dc501",null);t.exports=a.exports},function(t,s,e){e(103);var a=e(1)(e(67),e(115),"data-v-8d3bca9c",null);t.exports=a.exports},function(t,s,e){e(100);var a=e(1)(e(69),e(112),"data-v-479e4efc",null);t.exports=a.exports},function(t,s,e){"use strict";var a=e(9),n=e(118),i=e(107),o=e.n(i),c=e(38),l=e.n(c),d=e(108),r=e.n(d),u=e(40),v=e.n(u),f=e(37),m=e.n(f);a.default.use(n.a),s.a=new n.a({routes:[{path:"/",name:"index",component:o.a},{path:"/soft",name:"Soft",component:l.a},{path:"/soft_info/:id",name:"SoftInfo",component:r.a},{path:"/study",name:"Study",component:v.a},{path:"/question",name:"Interlocution",component:m.a}]})},function(t,s){},,function(t,s,e){e(102);var a=e(1)(e(63),e(114),null,null);t.exports=a.exports},,,,,,,,,,,,,,,,,,,function(t,s,e){"use strict";Object.defineProperty(s,"__esModule",{value:!0}),s.default={name:"app"}},function(t,s,e){"use strict";Object.defineProperty(s,"__esModule",{value:!0});var a=e(109),n=e.n(a),i=e(38),o=e.n(i),c=e(40),l=e.n(c),d=e(37),r=e.n(d);s.default={name:"index",data:function(){return{msg:"",value:"",show:{soft:!0,study:!1,question:!1}}},methods:{handleChange:function(t){}},components:{sear:n.a,soft:o.a,study:l.a,question:r.a}}},function(t,s,e){"use strict";Object.defineProperty(s,"__esModule",{value:!0}),s.default={name:"interlocution",data:function(){return{msg:""}}}},function(t,s,e){"use strict";Object.defineProperty(s,"__esModule",{value:!0});var a=e(24),n=e.n(a),i=e(18),o=e.n(i),c=e(39),l=e.n(c),d=[],r=[];s.default={name:"soft",data:function(){return{msg:"",list:d,tPage:1,allLoaded:!1,bottomStatus:"",loading:!1,did:1e5,show:{desc:!1}}},created:function(){this.loadMore()},methods:{handleBottomChange:function(t){this.bottomStatus=t},catDesc:function(t){this.did=t,console.log(t),this.show.desc=!0},closeDesc:function(){this.show.desc=!1},loadBottom:function(){},loadMore:function(){var t=this;setTimeout(function(){var s=t;s.loading=!0,console.log(s.tPage),o()({method:"post",url:"/api/soft/list",headers:{},data:{page:s.tPage}}).then(function(t){console.log(t),r=t.data.data,s.tPage+=1,d=s.list.length>0?[].concat(n()(d),n()(r)):r,s.loading=!1,setTimeout(function(){s.list=d},20)}).catch(function(t){console.log(t)})},300)}},components:{softDesc:l.a}}},function(t,s,e){"use strict";Object.defineProperty(s,"__esModule",{value:!0});var a=e(18),n=e.n(a);s.default={name:"softDesc",data:function(){return{descId:1e5,descInfo:{},images:[],share:""}},props:["did"],created:function(){this.loadDesc(this.did)},methods:{loadDesc:function(t){var s=window.location.host,e=this;e.descId=t,console.log(e.descId),n()({method:"post",url:"/api/soft/desc",headers:{Accept:"application/json","Content-Type":"application/json"},data:{id:e.descId}}).then(function(t){console.log(t.data.data),e.descInfo=t.data.data;for(var a=JSON.parse(e.descInfo.images).img,n=0;n<a.length;n++){var i="/imgs/"+e.descInfo.img_dir+"/"+a[n]+".jpg";e.images.push(i)}e.share=s+e.descInfo.share})}}}},function(t,s,e){"use strict";Object.defineProperty(s,"__esModule",{value:!0});var a=e(39),n=e.n(a);s.default={name:"soft",data:function(){return{did:1e5,show:{desc:!1}}},created:function(){this.catDesc(this.$route.params.id)},methods:{catDesc:function(t){this.did=t,this.show.desc=!0}},components:{softDesc:n.a}}},function(t,s,e){"use strict";Object.defineProperty(s,"__esModule",{value:!0});var a=e(24),n=e.n(a),i=[],o=[];s.default={name:"study",data:function(){return{msg:"",list:i,tPage:1,allLoaded:!1,bottomStatus:""}},methods:{handleBottomChange:function(t){this.bottomStatus=t},loadBottom:function(){var t=this;t.tPage+=1,console.log(t.tPage),fetch("https://api.github.com/users",{params:{}}).then(function(t){return t.text()}).then(function(s){o=JSON.parse(s),console.log(t.list.length),t.list.length>0?i=[].concat(n()(i),n()(o)):(i=o,console.log(i)),console.log(t.tik),t.loading=!0,setTimeout(function(){t.list=i,t.loading=!1},20)}),this.$refs.loadmore.onBottomLoaded()}}}},function(t,s){},,,,,,,,,,,,,,,,,,,,,,,,,,,,function(t,s){},function(t,s){},function(t,s){},function(t,s){},function(t,s){},function(t,s){},function(t,s){},function(t,s){},,function(t,s,e){e(98);var a=e(1)(e(64),e(110),null,null);t.exports=a.exports},function(t,s,e){e(105);var a=e(1)(e(68),e(117),"data-v-f14bab62",null);t.exports=a.exports},function(t,s,e){e(99);var a=e(1)(e(70),e(111),"data-v-279b979f",null);t.exports=a.exports},function(t,s){t.exports={render:function(){var t=this,s=t.$createElement,e=t._self._c||s;return e("div",{staticClass:"app-index"},[e("div",{staticClass:"app-header"},[e("mt-swipe",{attrs:{auto:4e3}},[e("mt-swipe-item"),t._v(" "),e("mt-swipe-item")],1)],1),t._v(" "),e("div",{staticClass:"app-sear"},[e("sear")],1),t._v(" "),e("div",{staticClass:"app-blank"}),t._v(" "),t.show.soft?e("soft"):t._e(),t._v(" "),t.show.study?e("study"):t._e(),t._v(" "),t.show.question?e("question"):t._e()],1)},staticRenderFns:[]}},function(t,s){t.exports={render:function(){var t=this,s=t.$createElement;t._self._c;return t._m(0)},staticRenderFns:[function(){var t=this,s=t.$createElement,e=t._self._c||s;return e("div",{staticClass:"app-search"},[e("div",{staticStyle:{"text-align":"center","line-height":"50px","font-size":"20px",color:"#CCC"}},[e("p",[t._v("专业下载平台")])])])}]}},function(t,s){t.exports={render:function(){var t=this,s=t.$createElement,e=t._self._c||s;return e("div",{staticClass:"app-list",attrs:{id:"lists"}},[e("mt-loadmore",{ref:"loadmore",attrs:{"bottom-method":t.loadBottom,"bottom-all-loaded":t.allLoaded},on:{"bottom-status-change":t.handleBottomChange}},[e("ul",t._l(t.list,function(s){return e("li",{staticClass:"list"},[e("div",{staticClass:"list-item list-l"},[e("img",{directives:[{name:"lazy",rawName:"v-lazy.list",value:s.avatar_url,expression:"item.avatar_url",modifiers:{list:!0}}],staticClass:"list-img"})]),t._v(" "),e("div",{staticClass:"list-item list-c"},[e("div",{staticClass:"intro-title"},[t._v("最好的应用")]),t._v(" "),e("div",{staticClass:"intro-count"},[t._v("100W次下载"),e("span",{staticClass:"blank-20"}),t._v("12M")]),t._v(" "),e("div",{staticClass:"intro-content"},[t._v("超过100W用户超过100W用户超过100W用户超过100W用户")])]),t._v(" "),e("div",{staticClass:"list-item list-r"},[e("mt-button",{attrs:{plain:"",size:"small"}},[e("p",{staticClass:"down-text"},[t._v("下载")])])],1)])})),t._v(" "),e("div",{staticStyle:{height:"50px",width:"100%","line-height":"50px","text-align":"center"}},[t._v("上滑加载更多...")]),t._v(" "),e("div",{staticClass:"mint-loadmore-bottom",slot:"bottom"},[e("span",{directives:[{name:"show",rawName:"v-show",value:"loading"!==t.bottomStatus,expression:"bottomStatus !== 'loading'"}],class:{rotate:"drop"===t.bottomStatus}},[t._v("↓")]),t._v(" "),e("span",{directives:[{name:"show",rawName:"v-show",value:"loading"===t.bottomStatus,expression:"bottomStatus === 'loading'"}]},[t._v("Loading...")])])])],1)},staticRenderFns:[]}},function(t,s){t.exports={render:function(){var t=this,s=t.$createElement,e=t._self._c||s;return e("div",{staticClass:"app-list",attrs:{id:"lists"}},[e("mt-loadmore",{ref:"loadmore",attrs:{"bottom-method":t.loadBottom,"bottom-all-loaded":t.allLoaded},on:{"bottom-status-change":t.handleBottomChange}},[e("ul",t._l(t.list,function(s){return e("li",{staticClass:"list"},[e("div",{staticClass:"list-item list-l",on:{click:function(e){t.catDesc(s.id)}}},[e("img",{directives:[{name:"lazy",rawName:"v-lazy.list",value:s.img,expression:"item.img",modifiers:{list:!0}}],staticClass:"list-img"})]),t._v(" "),e("div",{staticClass:"list-item list-c"},[e("div",{staticClass:"intro-title"},[t._v(t._s(s.name))]),t._v(" "),e("div",{staticClass:"intro-count"},[t._v(t._s(s.count)+"次下载  "),e("span",{staticClass:"blank-20"}),t._v(t._s(s.size/1e3)+"M\n            ")]),t._v(" "),e("div",{staticClass:"intro-content",on:{click:function(e){t.catDesc(s.id)}}},[t._v(t._s(s.intro))])]),t._v(" "),e("a",{attrs:{href:s.down}},[e("div",{staticClass:"list-item list-r"},[e("mt-button",{attrs:{plain:"",size:"small"}},[e("p",{staticClass:"down-text"},[t._v("下载")])])],1)])])}))]),t._v(" "),t.show.desc?e("div",{staticClass:"desc"},[e("mt-switch",{staticClass:"close",model:{value:t.show.desc,callback:function(s){t.show.desc=s},expression:"show.desc"}},[t._v("关闭")]),t._v(" "),e("softDesc",{attrs:{did:t.did}})],1):t._e()],1)},staticRenderFns:[]}},function(t,s){t.exports={render:function(){var t=this,s=t.$createElement,e=t._self._c||s;return e("div",{attrs:{id:"app"}},[e("router-view")],1)},staticRenderFns:[]}},function(t,s){t.exports={render:function(){var t=this,s=t.$createElement,e=t._self._c||s;return e("div",{staticClass:"app-desc",attrs:{id:""}},[e("div",{staticClass:"desc-title"},[t._m(0),t._v(" "),e("div",{staticClass:"desc-name"},[t._v("\n      "+t._s(t.descInfo.name)+"\n    ")]),t._v(" "),e("p",{staticClass:"desc-count"},[t._v(" "+t._s(t.descInfo.count)+"次下载 "),e("span",{staticClass:"desc-size"},[t._v(t._s(t.descInfo.size/1e3)+"M ")])]),t._v(" "),e("div",{staticClass:"desc-share"},[e("p",[t._v("分享： "+t._s(t.share))])]),t._v(" "),e("div",{staticClass:"desc-detail"},[e("p",[t._v(t._s(t.descInfo.desc))])]),t._v(" "),e("div",{staticClass:"h-15"}),t._v(" "),e("div",{staticClass:"desc-down"},[e("a",{attrs:{href:t.descInfo.down}},[e("mt-button",{attrs:{size:"large",type:"primary"}},[t._v("点击下载")])],1)]),t._v(" "),e("div",{staticClass:"h-15"})]),t._v(" "),e("div",{staticClass:"desc-body"},[e("div",{staticClass:"h-15"}),t._v(" "),e("div",{staticClass:"desc-pic"},[e("div",{staticClass:"h-15"}),t._v(" "),e("div",{staticClass:"desc-pic-wrapper"},[e("mt-swipe",{attrs:{auto:4e3}},t._l(t.images,function(t){return e("mt-swipe-item",{key:"index"},[e("img",{staticClass:"desc-img",attrs:{src:t,alt:""}})])}))],1),t._v(" "),e("div",{staticClass:"h-15"}),t._v(" "),t._m(1)]),t._v(" "),e("div",{staticClass:"h-15"})])])},staticRenderFns:[function(){var t=this,s=t.$createElement,e=t._self._c||s;return e("div",{staticClass:"h-50"},[e("p")])},function(){var t=this,s=t.$createElement,e=t._self._c||s;return e("div",{staticClass:"desc-update"},[e("p",[t._v("版本")]),t._v(" "),e("p",[t._v("更新时间")])])}]}},function(t,s){t.exports={render:function(){var t=this,s=t.$createElement;return(t._self._c||s)("div",{})},staticRenderFns:[]}},function(t,s){t.exports={render:function(){var t=this,s=t.$createElement,e=t._self._c||s;return e("div",{staticClass:"app-list"},[t.show.desc?e("div",{staticClass:"desc"},[e("softDesc",{attrs:{did:t.did}})],1):t._e()])},staticRenderFns:[]}},,,,function(t,s,e){"use strict";Object.defineProperty(s,"__esModule",{value:!0});var a=e(42),n=(e.n(a),e(43)),i=e.n(n),o=e(9),c=e(44),l=e.n(c),d=e(41),r=e(45),u=e.n(r);o.default.config.productionTip=!1,o.default.use(i.a);var v=document.querySelector("#tik").getAttribute("value");new o.default({el:"#app",router:d.a,fetch:u.a,tik:v,template:"<App/>",components:{App:l.a}})}]),[121]);
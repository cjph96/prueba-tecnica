(function(t){function e(e){for(var n,o,c=e[0],i=e[1],u=e[2],d=0,p=[];d<c.length;d++)o=c[d],Object.prototype.hasOwnProperty.call(s,o)&&s[o]&&p.push(s[o][0]),s[o]=0;for(n in i)Object.prototype.hasOwnProperty.call(i,n)&&(t[n]=i[n]);l&&l(e);while(p.length)p.shift()();return a.push.apply(a,u||[]),r()}function r(){for(var t,e=0;e<a.length;e++){for(var r=a[e],n=!0,c=1;c<r.length;c++){var i=r[c];0!==s[i]&&(n=!1)}n&&(a.splice(e--,1),t=o(o.s=r[0]))}return t}var n={},s={app:0},a=[];function o(e){if(n[e])return n[e].exports;var r=n[e]={i:e,l:!1,exports:{}};return t[e].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=t,o.c=n,o.d=function(t,e,r){o.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:r})},o.r=function(t){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},o.t=function(t,e){if(1&e&&(t=o(t)),8&e)return t;if(4&e&&"object"===typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(o.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var n in t)o.d(r,n,function(e){return t[e]}.bind(null,n));return r},o.n=function(t){var e=t&&t.__esModule?function(){return t["default"]}:function(){return t};return o.d(e,"a",e),e},o.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},o.p="/";var c=window["webpackJsonp"]=window["webpackJsonp"]||[],i=c.push.bind(c);c.push=e,c=c.slice();for(var u=0;u<c.length;u++)e(c[u]);var l=i;a.push([0,"chunk-vendors"]),r()})({0:function(t,e,r){t.exports=r("56d7")},"034f":function(t,e,r){"use strict";r("85ec")},"1ed0":function(t,e,r){"use strict";r("6089")},"56d7":function(t,e,r){"use strict";r.r(e);r("e260"),r("e6cf"),r("cca6"),r("a79d");var n=r("2b0e"),s=function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{attrs:{id:"app"}},[r("div",{staticClass:"nav mt-2",attrs:{id:"nav"}},[r("router-link",{staticClass:"text-dark pl-4",attrs:{to:"/"}},[t._v("Create process")]),r("router-link",{staticClass:"text-dark pl-4",attrs:{to:"/list_processes"}},[t._v("List processes")])],1),r("hr"),r("router-view")],1)},a=[],o=(r("034f"),r("2877")),c={},i=Object(o["a"])(c,s,a,!1,null,null,null),u=i.exports,l=r("8c4f"),d=function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"container-fluid m-4"},[r("div",{staticClass:"row"},[r("div",{staticClass:"col-10 offset-1 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-xl-4 offset-xl-2  border border-dark"},[r("div",{staticClass:"container"},[r("div",{staticClass:"row"},[t._m(0),r("div",{staticClass:"col-4 font-weight-bold"},[t._v(" Type ")]),r("div",{staticClass:"col-4 "},[r("select",{directives:[{name:"model",rawName:"v-model",value:t.type,expression:"type"}],staticClass:"custom-select",on:{change:function(e){var r=Array.prototype.filter.call(e.target.options,(function(t){return t.selected})).map((function(t){var e="_value"in t?t._value:t.value;return e}));t.type=e.target.multiple?r:r[0]}}},[r("option",{attrs:{disabled:"",value:""}}),r("option",{attrs:{value:"1"}},[t._v("VOWELS_COUNT")])])]),r("div",{staticClass:"col-12 mt-4 font-weight-bold"},[t._v(" Input ")]),r("div",{staticClass:"col-12 mt-2 mb-3"},[r("textarea",{directives:[{name:"model",rawName:"v-model",value:t.input,expression:"input"}],attrs:{name:"input",rows:"5"},domProps:{value:t.input},on:{input:function(e){e.target.composing||(t.input=e.target.value)}}})]),r("div",{staticClass:"col-3"},[r("button",{on:{click:t.post_process}},[t._v("Create")])]),t._m(1),r("div",{staticClass:"col-12 mt-3",class:t.text_color,attrs:{id:"respone"}},[t._v(" "+t._s(t.resp)+" ")])])])])])])},p=[function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"col-12 font-weight-bold pt-3"},[t._v(" Create Process "),r("hr",{staticClass:"text-dark"})])},function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"col-8"},[r("button",[t._v("Create and Run")])])}],f=r("1da1"),v=(r("96cf"),r("a9e3"),r("d3b7"),{name:"Create_process",data:function(){return{type:Number,resp:"",input:"",text_color:"text-dark"}},methods:{post_process:function(){var t=this;return Object(f["a"])(regeneratorRuntime.mark((function e(){var r;return regeneratorRuntime.wrap((function(e){while(1)switch(e.prev=e.next){case 0:return r={type:t.type,input:t.input},e.next=3,fetch("http://127.0.0.1:8081/api/process",{method:"POST",cache:"no-cache",headers:{},body:JSON.stringify(r)}).then((function(t){return t.json()})).then((function(e){return e.error?(t.text_color="text-danger",e.message):(t.text_color="text-success","Proceso creado correctamente: "+e.id)}));case 3:t.resp=e.sent,console.log(t.resp);case 5:case"end":return e.stop()}}),e)})))()}}}),_=v,h=(r("87f7"),Object(o["a"])(_,d,p,!1,null,null,null)),m=h.exports,b=function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"container-fluid"},[0==t.processes.length?r("div",[t._m(0)]):r("div",[r("table",{staticClass:"table table-hover"},[t._m(1),t._l(t.processes,(function(e){return r("tbody",{key:e.id},[r("tr",[r("td",[t._v(t._s(e.id))]),r("td",[t._v(t._s(e.input))]),r("td",[t._v(t._s(e.output))]),r("td",[t._v(t._s(e.created_at.date))]),null!==e.started_at?r("td",[t._v(" "+t._s(e.started_at.data)+" ")]):r("td"),null!==e.finished_at?r("td",[t._v(" "+t._s(e.finished_at.data)+" ")]):r("td"),1==e.status?r("td",[t._v(" NOT STARTED ")]):t._e(),2==e.status?r("td",[t._v(" PROCESSING ")]):t._e(),3==e.status?r("td",[t._v(" FINISHED ")]):t._e(),1==e.status?r("td",[r("button",[t._v("▶ Start")])]):r("td")])])}))],2)])])},g=[function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"row text-center"},[r("div",{staticClass:"col-6 offset-3"},[r("div",{staticClass:"loader"}),r("div",[t._v("Loading list ...")])])])},function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("thead",[r("tr",[r("th",[t._v("Process ID")]),r("th",[t._v("Input")]),r("th",[t._v("Output")]),r("th",[t._v("Created at")]),r("th",[t._v("Started at")]),r("th",[t._v("Finished at")]),r("th",[t._v("Status")]),r("th",[t._v("Action")])])])}],C={name:"List_processes",data:function(){return{processes:[]}},methods:{get_processes:function(){var t=this;return Object(f["a"])(regeneratorRuntime.mark((function e(){return regeneratorRuntime.wrap((function(e){while(1)switch(e.prev=e.next){case 0:return e.next=2,fetch("http://127.0.0.1:8081/api/process",{}).then((function(t){return t.json()})).then((function(t){return t}));case 2:t.processes=e.sent;case 3:case"end":return e.stop()}}),e)})))()}},created:function(){this.get_processes()}},y=C,x=(r("1ed0"),Object(o["a"])(y,b,g,!1,null,null,null)),w=x.exports;n["a"].use(l["a"]);var O=[{path:"/",name:"Create_process",component:m},{path:"/list_processes",name:"List_processes",component:w}],j=new l["a"]({routes:O}),S=j;n["a"].config.productionTip=!1,new n["a"]({router:S,render:function(t){return t(u)}}).$mount("#app")},6089:function(t,e,r){},"85ec":function(t,e,r){},"87f7":function(t,e,r){"use strict";r("fca5")},fca5:function(t,e,r){}});
//# sourceMappingURL=app.faa5e8ef.js.map
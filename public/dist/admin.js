var adminTodotastic_admin=function(t){function e(e){for(var r,i,u=e[0],c=e[1],s=e[2],d=0,f=[];d<u.length;d++)i=u[d],Object.prototype.hasOwnProperty.call(o,i)&&o[i]&&f.push(o[i][0]),o[i]=0;for(r in c)Object.prototype.hasOwnProperty.call(c,r)&&(t[r]=c[r]);for(l&&l(e);f.length;)f.shift()();return a.push.apply(a,s||[]),n()}function n(){for(var t,e=0;e<a.length;e++){for(var n=a[e],r=!0,u=1;u<n.length;u++){var c=n[u];0!==o[c]&&(r=!1)}r&&(a.splice(e--,1),t=i(i.s=n[0]))}return t}var r={},o={0:0},a=[];function i(e){if(r[e])return r[e].exports;var n=r[e]={i:e,l:!1,exports:{}};return t[e].call(n.exports,n,n.exports,i),n.l=!0,n.exports}i.m=t,i.c=r,i.d=function(t,e,n){i.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:n})},i.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},i.t=function(t,e){if(1&e&&(t=i(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(i.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var r in t)i.d(n,r,function(e){return t[e]}.bind(null,r));return n},i.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return i.d(e,"a",e),e},i.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},i.p="";var u=window.webpackJsonpadminTodotastic_name_=window.webpackJsonpadminTodotastic_name_||[],c=u.push.bind(u);u.push=e,u=u.slice();for(var s=0;s<u.length;s++)e(u[s]);var l=c;return a.push([147,3]),n()}({0:function(t,e){t.exports=React},10:function(t,e){t.exports=wpnotes_utils},117:function(t,e,n){},144:function(t,e,n){"use strict";n.d(e,"a",(function(){return p}));var r=n(0),o=n.n(r),a=n(60),i=n(116),u=n(119),c=n(93),s=n(120),l=n(43),d=n(82),f=n.n(d),p=Object(a.a)((function(){var t=Object(l.b)().todoStore;Object(r.useEffect)((function(){t.getTodos({is_done:0,is_mine_only:1,with:"post",limit:5})}),[]);return o.a.createElement("div",{className:"wp-styleguide"},o.a.createElement(i.b,{itemLayout:"horizontal",size:"small",dataSource:t.todos,renderItem:function(t){return o.a.createElement(i.b.Item,{key:t.id},o.a.createElement("a",{href:t.post.link},o.a.createElement("span",{dangerouslySetInnerHTML:{__html:f.a.sanitize(t.description)}})))}}),t.todos.length>0&&o.a.createElement(u.a,{justify:"end",wrap:!1},o.a.createElement(c.a,{simple:!0,defaultCurrent:1,current:t.currentPage,onChange:function(e,n){t.getTodos({is_done:0,is_mine_only:1,with:"post",limit:5,page:e})},pageSize:5,total:t.total})),t.errors.length>0&&t.errors.map((function(e,n){return o.a.createElement(s.a,{key:n,message:e,type:t.errorType})})))}))},145:function(t,e,n){"use strict";n.d(e,"a",(function(){return E}));var r=n(66),o=n.n(r),a=n(0),i=n.n(a),u=n(60),c=n(120),s=n(119),l=n(43),d=n(94),f=n(49),p=n(30),b=n(6),h=n.n(b),m=n(149),v=n(153),g=n(154),y=n(82),O=n.n(y),S=Object(u.a)((function(t){var e=t.todo,n=Object(l.b)().todoStore,r=Object(a.useState)(!1),u=o()(r,2),c=u[0],d=u[1];return i.a.createElement("li",{key:e.id,onMouseEnter:function(){return d(!0)},onMouseLeave:function(){return d(!1)}},i.a.createElement(s.a,{className:c&&"todo-active",wrap:!1},i.a.createElement(m.a,{className:"gutter-row",flex:"auto"},i.a.createElement("label",{className:h()(e.status.isDone&&"checked-todo")},i.a.createElement(v.a,{onChange:function(t){n.updateTodo(e,t.target.checked)},checked:e.status.isDone},i.a.createElement("span",{dangerouslySetInnerHTML:{__html:O.a.sanitize(e.description)}})))),i.a.createElement(m.a,{className:"gutter-row",flex:"none"},c&&i.a.createElement("span",{className:"todo-actions",onClick:function(){n.deleteTodo(e)}},i.a.createElement(g.a,null)))))})),j=n(95),x={backgroundColor:"#cee4e5"},w={control:{backgroundColor:"#fff",fontSize:14,fontWeight:"normal"},"&multiLine":{control:{fontFamily:"monospace",minHeight:63},highlighter:{padding:9,border:"1px solid transparent"},input:{padding:9,border:"1px solid silver"}},"&singleLine":{display:"inline-block",width:180,highlighter:{padding:1,border:"2px inset transparent"},input:{padding:1,border:"2px inset"}},suggestions:{list:{backgroundColor:"white",fontSize:14},item:{padding:"5px 15px",borderBottom:"1px solid rgba(0,0,0,0.15)",marginBottom:"0px","&focused":{backgroundColor:"#cee4e5"}}}},E=(n(117),Object(u.a)((function(){var t=Object(l.b)(),e=t.userStore,n=t.todoStore,r=Object(a.useState)(""),u=o()(r,2),b=u[0],h=u[1],m=Object(a.useState)(!1),v=o()(m,2),g=v[0],y=v[1],O=Object(a.useState)([]),E=o()(O,2),k=E[0],T=E[1];Object(a.useEffect)((function(){n.getTodos({entity_id:Object(f.a)()})}),[]);var _=function(){var t=k.map((function(t){return t.id}));n.addTodo(b,t),h(""),y(!g),T([])};return i.a.createElement("div",{className:"wp-styleguide"},i.a.createElement("ul",null,n.todos.map((function(t){return i.a.createElement(S,{key:t.id,todo:t})})),n.todos.length||n.loading?"":Object(p.a)("No entries")),n.loading&&i.a.createElement(j.a,null),n.errors.length>0&&n.errors.map((function(t,e){return i.a.createElement(c.a,{key:e,message:t,type:n.errorType})})),i.a.createElement(d.b,{value:b,onChange:function(t,e,n,r){h(e),T(r)},disabled:!Object(f.a)(),className:"mentions-input",style:w,placeholder:Object(f.a)()?"Mention user by typing `@`":"Cannot add any todo item before having this post created",onKeyDown:function(t){t.ctrlKey&&"Enter"===t.key&&(_(),y(!1))},allowSuggestionsAboveCursor:!0},i.a.createElement(d.a,{trigger:"@",data:function(t,n){return e.getUsers(t),e.users},style:x,markup:'<span style="background-color:#cee4e5" data-id="__id__">@__display__</span>'})),i.a.createElement("div",{className:"metabox-footer"},i.a.createElement(s.a,{justify:"end"},g&&i.a.createElement("span",null,"Tip: ",i.a.createElement("span",{className:"todo-tooltip"},"Ctrl + Enter")," to add  "),i.a.createElement("button",{type:"button",className:"button add-todo",onClick:_},Object(p.a)("Add")))))})))},147:function(t,e,n){"use strict";n.r(e);var r=n(10),o=n(27),a=n(144),i=n(43),u=n(0),c=n.n(u),s=n(145);n(148);for(var l in r)"default"!==l&&function(t){n.d(e,t,(function(){return r[t]}))}(l);var d=n(55);n.d(e,"locationRestUserGet",(function(){return d.e})),n.d(e,"locationRestTodoGet",(function(){return d.b})),n.d(e,"locationRestTodoPut",(function(){return d.d})),n.d(e,"locationRestTodoDelete",(function(){return d.a})),n.d(e,"locationRestTodoPost",(function(){return d.c}));var f=n(38);n.d(e,"TodoStore",(function(){return f.c})),n.d(e,"RootStore",(function(){return f.b})),n.d(e,"useStores",(function(){return f.e})),n.d(e,"OptionStore",(function(){return f.a})),n.d(e,"UserStore",(function(){return f.d}));var p=document.getElementById("bdotstd-dashboard-list-component"),b=document.getElementById("bdotstd-metabox-component");p&&Object(o.render)(c.a.createElement(i.a.StoreProvider,null,c.a.createElement(a.a,null)),p),b&&Object(o.render)(c.a.createElement(i.a.StoreProvider,null,c.a.createElement(s.a,null)),b)},148:function(t,e,n){},27:function(t,e){t.exports=ReactDOM},30:function(t,e,n){"use strict";n.d(e,"b",(function(){return l})),n.d(e,"a",(function(){return d}));var r=n(20),o=n.n(r),a=n(25),i=n.n(a),u=n(10),c=n(43),s=function(){function t(){o()(this,t),this.requestMemo=void 0,this.localizationMemo=void 0}return i()(t,[{key:"request",get:function(){return this.requestMemo?this.requestMemo:this.requestMemo=Object(u.createRequestFactory)(c.a.get.optionStore)}},{key:"localization",get:function(){return this.localizationMemo?this.localizationMemo:this.localizationMemo=Object(u.createLocalizationFactory)(c.a.get.optionStore.pureSlug)}}],[{key:"get",get:function(){return t.me?t.me:t.me=new t}}]),t}();s.me=void 0;var l=function(){var t;return(t=s.get.request).request.apply(t,arguments)},d=function(){var t;return(t=s.get.localization).__.apply(t,arguments)}},38:function(t,e,n){"use strict";var r=n(56);n.d(e,"c",(function(){return r.a}));var o=n(43);n.d(e,"b",(function(){return o.a})),n.d(e,"e",(function(){return o.b}));var a=n(57);n.d(e,"a",(function(){return a.a}));var i=n(58);n.d(e,"d",(function(){return i.a}))},43:function(t,e,n){"use strict";n.d(e,"a",(function(){return f})),n.d(e,"b",(function(){return p}));var r=n(20),o=n.n(r),a=n(25),i=n.n(a),u=n(5),c=n(10),s=n(56),l=n(57),d=n(58);Object(u.configure)({enforceActions:"always"});var f=function(){function t(){o()(this,t),this.todoStore=void 0,this.optionStore=void 0,this.userStore=void 0,this.contextMemo=void 0,this.todoStore=new s.a(this),this.optionStore=new l.a(this),this.userStore=new d.a(this)}return i()(t,[{key:"context",get:function(){return this.contextMemo?this.contextMemo:this.contextMemo=Object(c.createContextFactory)(this)}}]),i()(t,null,[{key:"StoreProvider",get:function(){return t.get.context.StoreProvider}},{key:"get",get:function(){return t.me?t.me:t.me=new t}}]),t}();f.me=void 0;var p=function(){return f.get.context.useStores()}},49:function(t,e,n){"use strict";n.d(e,"a",(function(){return r}));var r=function(){var t=window.location.search,e=new URLSearchParams(t);return e.get("post")?e.get("post"):0}},5:function(t,e){t.exports=mobx},55:function(t,e,n){"use strict";var r=n(80);n.d(e,"e",(function(){return r.a}));var o=n(76);n.d(e,"b",(function(){return o.a}));var a=n(78);n.d(e,"d",(function(){return a.a}));var i=n(79);n.d(e,"a",(function(){return i.a}));var u=n(77);n.d(e,"c",(function(){return u.a}))},56:function(t,e,n){"use strict";n.d(e,"a",(function(){return M}));var r,o,a=n(23),i=n.n(a),u=n(35),c=n.n(u),s=n(21),l=n.n(s),d=n(20),f=n.n(d),p=n(25),b=n.n(p),h=n(33),m=n.n(h),v=n(39),g=n.n(v),y=n(40),O=n.n(y),S=n(29),j=n.n(S),x=n(22),w=n.n(x),E=(n(54),n(5)),k=n(59),T=n(76),_=n(77),R=n(78),I=n(79),P=n(30),A=n(49);function z(t){var e=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Date.prototype.toString.call(Reflect.construct(Date,[],(function(){}))),!0}catch(t){return!1}}();return function(){var n,r=j()(t);if(e){var o=j()(this).constructor;n=Reflect.construct(r,arguments,o)}else n=r.apply(this,arguments);return O()(this,n)}}var M=(r=function(t){g()(s,t);var e,n,r,a,u=z(s);function s(t){var e;return f()(this,s),e=u.call(this,t),l()(e,"todos",o,m()(e)),e}return b()(s,[{key:"getTodos",value:(a=c()(i.a.mark((function t(e){var n,r=this;return i.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return Object(E.runInAction)((function(){r.initAPIRequestUIStatuses(!0)})),t.prev=1,t.next=4,Object(P.b)({location:T.a,params:e});case 4:n=t.sent,Object(E.runInAction)((function(){r.todos=n.data,r.currentPage=n.currentPage,r.total=n.total})),t.next=11;break;case 8:t.prev=8,t.t0=t.catch(1),Object(E.runInAction)((function(){r.handleException(t.t0)}));case 11:return t.prev=11,Object(E.runInAction)((function(){r.loading=!1})),t.finish(11);case 14:case"end":return t.stop()}}),t,null,[[1,8,11,14]])}))),function(t){return a.apply(this,arguments)})},{key:"addTodo",value:(r=c()(i.a.mark((function t(e,n){var r,o=this;return i.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return Object(E.runInAction)((function(){o.initAPIRequestUIStatuses(!0)})),t.prev=1,t.next=4,Object(P.b)({location:_.a,request:{description:e,entity_id:Object(A.a)(),mentions:n}});case 4:r=t.sent,Object(E.runInAction)((function(){o.todos.push(r.data[0]),o.errors=r.errors?r.errors:[],o.errorType=r.errors?"warning":"success"})),t.next=11;break;case 8:t.prev=8,t.t0=t.catch(1),Object(E.runInAction)((function(){o.handleException(t.t0)}));case 11:return t.prev=11,Object(E.runInAction)((function(){o.loading=!1})),t.finish(11);case 14:case"end":return t.stop()}}),t,null,[[1,8,11,14]])}))),function(t,e){return r.apply(this,arguments)})},{key:"updateTodo",value:(n=c()(i.a.mark((function t(e,n){var r,o=this;return i.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return Object(E.runInAction)((function(){o.initAPIRequestUIStatuses()})),t.prev=1,t.next=4,Object(P.b)({location:R.a,params:{id:e.id},request:{status:this.tranformStatus(n)}});case 4:r=t.sent,Object(E.runInAction)((function(){var t=r.data[0],n=o.todos.indexOf(e);-1!==n&&(o.todos[n]=t)})),t.next=11;break;case 8:t.prev=8,t.t0=t.catch(1),Object(E.runInAction)((function(){o.handleException(t.t0)}));case 11:case"end":return t.stop()}}),t,this,[[1,8]])}))),function(t,e){return n.apply(this,arguments)})},{key:"deleteTodo",value:(e=c()(i.a.mark((function t(e){var n=this;return i.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return Object(E.runInAction)((function(){n.initAPIRequestUIStatuses()})),t.prev=1,t.next=4,Object(P.b)({location:I.a,params:{id:e.id}});case 4:Object(E.runInAction)((function(){var t=n.todos.indexOf(e);-1!==t&&n.todos.splice(t,1)})),t.next=10;break;case 7:t.prev=7,t.t0=t.catch(1),Object(E.runInAction)((function(){n.handleException(t.t0)}));case 10:case"end":return t.stop()}}),t,null,[[1,7]])}))),function(t){return e.apply(this,arguments)})},{key:"tranformStatus",value:function(t){return t?{text:"Done",label:"done",isDone:!0}:{text:"Open",label:"open",isDone:!1}}}]),s}(k.a),o=w()(r.prototype,"todos",[E.observable],{configurable:!0,enumerable:!0,writable:!0,initializer:function(){return[]}}),r)},57:function(t,e,n){"use strict";n.d(e,"a",(function(){return j}));var r,o,a=n(21),i=n.n(a),u=n(20),c=n.n(u),s=n(33),l=n.n(s),d=n(39),f=n.n(d),p=n(40),b=n.n(p),h=n(29),m=n.n(h),v=n(22),g=n.n(v),y=(n(54),n(5)),O=n(10);function S(t){var e=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Date.prototype.toString.call(Reflect.construct(Date,[],(function(){}))),!0}catch(t){return!1}}();return function(){var n,r=m()(t);if(e){var o=m()(this).constructor;n=Reflect.construct(r,arguments,o)}else n=r.apply(this,arguments);return b()(this,n)}}var j=(r=function(t){f()(n,t);var e=S(n);function n(t){var r;return c()(this,n),r=e.call(this),i()(r,"others",o,l()(r)),r.pureSlug=void 0,r.pureSlugCamelCased=void 0,r.rootStore=void 0,r.rootStore=t,r.pureSlug=O.BaseOptions.getPureSlug(Object({NODE_ENV:"production",env:"production",rootSlug:"wpnotes",slug:"admin-todotastic"})),r.pureSlugCamelCased=O.BaseOptions.getPureSlug(Object({NODE_ENV:"production",env:"production",rootSlug:"wpnotes",slug:"admin-todotastic"}),!0),Object(y.runInAction)((function(){return Object.assign(l()(r),window[r.pureSlugCamelCased])})),r}return n}(O.BaseOptions),o=g()(r.prototype,"others",[y.observable],{configurable:!0,enumerable:!0,writable:!0,initializer:function(){return{}}}),r)},58:function(t,e,n){"use strict";n.d(e,"a",(function(){return R}));var r,o,a=n(23),i=n.n(a),u=n(35),c=n.n(u),s=n(21),l=n.n(s),d=n(20),f=n.n(d),p=n(25),b=n.n(p),h=n(33),m=n.n(h),v=n(39),g=n.n(v),y=n(40),O=n.n(y),S=n(29),j=n.n(S),x=n(22),w=n.n(x),E=(n(54),n(5)),k=n(80),T=n(30);function _(t){var e=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Date.prototype.toString.call(Reflect.construct(Date,[],(function(){}))),!0}catch(t){return!1}}();return function(){var n,r=j()(t);if(e){var o=j()(this).constructor;n=Reflect.construct(r,arguments,o)}else n=r.apply(this,arguments);return O()(this,n)}}var R=(r=function(t){g()(r,t);var e,n=_(r);function r(t){var e;return f()(this,r),e=n.call(this,t),l()(e,"users",o,m()(e)),e}return b()(r,[{key:"getUsers",value:(e=c()(i.a.mark((function t(e){var n,r=this;return i.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return Object(E.runInAction)((function(){r.loading=!0})),t.prev=1,t.next=4,Object(T.b)({location:k.a,params:{s:e}});case 4:n=t.sent,Object(E.runInAction)((function(){r.users=n.data,r.errors=n.errors,r.errorType="warning"})),t.next=10;break;case 8:t.prev=8,t.t0=t.catch(1);case 10:return t.prev=10,Object(E.runInAction)((function(){r.loading=!1})),t.finish(10);case 13:case"end":return t.stop()}}),t,null,[[1,8,10,13]])}))),function(t){return e.apply(this,arguments)})}]),r}(n(59).a),o=w()(r.prototype,"users",[E.observable],{configurable:!0,enumerable:!0,writable:!0,initializer:function(){return[]}}),r)},59:function(t,e,n){"use strict";n.d(e,"a",(function(){return g}));var r,o,a,i,u,c,s=n(21),l=n.n(s),d=n(20),f=n.n(d),p=n(25),b=n.n(p),h=n(22),m=n.n(h),v=(n(54),n(5)),g=(r=function(){function t(e){f()(this,t),l()(this,"errors",o,this),l()(this,"errorType",a,this),l()(this,"currentPage",i,this),l()(this,"total",u,this),l()(this,"loading",c,this),this.rootStore=void 0,this.rootStore=e}return b()(t,[{key:"handleException",value:function(t){t.status>=500&&(this.errorType="error"),t.status>=400&&(this.errorType="warning"),this.errors=t.responseJSON.errors}},{key:"initAPIRequestUIStatuses",value:function(){var t=arguments.length>0&&void 0!==arguments[0]&&arguments[0];t&&(this.loading=!0),this.errors=[],this.errorType="success"}}]),t}(),o=m()(r.prototype,"errors",[v.observable],{configurable:!0,enumerable:!0,writable:!0,initializer:function(){return[]}}),a=m()(r.prototype,"errorType",[v.observable],{configurable:!0,enumerable:!0,writable:!0,initializer:null}),i=m()(r.prototype,"currentPage",[v.observable],{configurable:!0,enumerable:!0,writable:!0,initializer:null}),u=m()(r.prototype,"total",[v.observable],{configurable:!0,enumerable:!0,writable:!0,initializer:null}),c=m()(r.prototype,"loading",[v.observable],{configurable:!0,enumerable:!0,writable:!0,initializer:null}),r)},76:function(t,e,n){"use strict";n.d(e,"a",(function(){return o}));var r=n(10),o={path:"/todo",method:r.RouteHttpVerb.GET}},77:function(t,e,n){"use strict";n.d(e,"a",(function(){return o}));var r=n(10),o={path:"/todo",method:r.RouteHttpVerb.POST}},78:function(t,e,n){"use strict";n.d(e,"a",(function(){return o}));var r=n(10),o={path:"/todo/:id",method:r.RouteHttpVerb.PUT}},79:function(t,e,n){"use strict";n.d(e,"a",(function(){return o}));var r=n(10),o={path:"/todo/:id",method:r.RouteHttpVerb.DELETE}},80:function(t,e,n){"use strict";n.d(e,"a",(function(){return o}));var r=n(10),o={path:"/user",method:r.RouteHttpVerb.GET}}});
//# sourceMappingURL=admin.js.map
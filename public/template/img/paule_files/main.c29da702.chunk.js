(this["webpackJsonpnpower-application-portal"]=this["webpackJsonpnpower-application-portal"]||[]).push([[0],{1:function(e,t,a){"use strict";a.d(t,"b",(function(){return n})),a.d(t,"a",(function(){return r}));var n="LOADING_TRUE",r="LOADING_FALSE"},10:function(e,t,a){"use strict";a.d(t,"d",(function(){return n})),a.d(t,"f",(function(){return r})),a.d(t,"c",(function(){return c})),a.d(t,"a",(function(){return o})),a.d(t,"b",(function(){return s})),a.d(t,"e",(function(){return u})),a.d(t,"j",(function(){return i})),a.d(t,"h",(function(){return l})),a.d(t,"i",(function(){return p})),a.d(t,"g",(function(){return d})),a.d(t,"k",(function(){return m}));var n="DASHBOARD_REGISTRATION_INSIGHT",r="DASHBOARD_STATUS_INSIGHT",c="DASHBOARD_PROGRAMME_INSIGHT",o="DASHBOARD_GENDER_INSIGHT",s="DASHBOARD_GEOZONE_INSIGHT",u="DASHBOARD_STATE_INSIGHT",i="PAYMENT_PROGRAMME_INSIGHT",l="PAYMENT_GENDER_INSIGHT",p="PAYMENT_GEOZONE_INSIGHT",d="PAYMENT_COUNT_INSIGHT",m="PAYMENT_STATE_INSIGHT"},110:function(e,t,a){},117:function(e,t,a){e.exports=a(150)},12:function(e,t,a){"use strict";a.d(t,"b",(function(){return n})),a.d(t,"f",(function(){return r})),a.d(t,"i",(function(){return c})),a.d(t,"h",(function(){return o})),a.d(t,"a",(function(){return s})),a.d(t,"d",(function(){return u})),a.d(t,"c",(function(){return i})),a.d(t,"e",(function(){return l})),a.d(t,"g",(function(){return p}));var n="CURRENT_USER",r="FETCH_ALL_ADMIN_USERS",c="USER_ONBOARDING",o="UPDATE_PROFILE",s="CREATE_ADMIN_USER",u="EDIT_ADMIN_USER",i="DELETE_ADMIN_USER",l="FETCH_ADMIN_USER",p="SEARCH_ADMIN_USER"},122:function(e,t,a){},127:function(e,t,a){},148:function(e,t,a){},149:function(e,t,a){},150:function(e,t,a){"use strict";a.r(t);var n=a(0),r=a.n(n),c=a(30),o=a.n(c),s=(a(122),a(15)),u=a(64),i=a(95),l=(a(126),a(127),a(24)),p=function(e){var t=e.message;return r.a.createElement("div",null,r.a.createElement(i.a,{style:{fontSize:"2rem",marginRight:"10px"}}),r.a.createElement("span",{"data-testid":"message"},t))},d=function(e){var t=e.message;return r.a.createElement("div",null,r.a.createElement(i.b,{style:{fontSize:"2rem",marginRight:"10px"}}),r.a.createElement("span",{"data-testid":"message"},t))},m=Object(s.b)((function(e){return{msg:e.message.message}}),l)((function(e){var t=e.clearMessage,a=e.msg||"",n=a.success,c=a.message;return n&&c?u.c.success(r.a.createElement(p,{message:c}),{hideProgressBar:!0}):!n&&c&&u.c.error(r.a.createElement(d,{message:c}),{hideProgressBar:!0}),t(),r.a.createElement(r.a.Fragment,null,r.a.createElement(u.b,{autoClose:3e3,pauseOnHover:!0,position:"top-center",transition:u.a}))})),f=a(75),h={currentUser:l.currentUser},y=Object(s.b)(null,h)((function(e){var t=e.children,a=e.currentUser;return Object(n.useEffect)((function(){localStorage.getItem("token")&&(Object(f.a)(localStorage.getItem("token")),a())}),[]),r.a.createElement(r.a.Fragment,null,r.a.createElement(m,null),t)})),b=a(48),g=a(32),v=a(5),E=a(33),w={isAuthenticated:"",refreshToken:null,ip:""},O=a(37),j=a(12),P={users:"",user:"",current:"",pageCount:0},_=a(22),k=a(1),x={loading:!1},S={payments:[],charges:[],rates:[],rate:"",payment:{},totalTransactions:0,totalRevenue:0,pageCount:0},N=a(10),A={registration:0,status:0,programme:0,gender:[],geozone:[],states:[],labels:[],counts:[],geozonePayment:[],insight:""},T={statesPayment:[],programmesPayment:[],totalProgrammesPayment:0,genderPayment:[],totalGenderPayment:0,geozonePayment:[],totalGeozonePayment:0,insightPayment:"",labelsPayment:[],countsPayment:[]},R=Object(g.combineReducers)({auth:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:w,t=arguments.length>1?arguments[1]:void 0;switch(t.type){case E.a:return Object(v.a)({},e,{isAuthenticated:t.payload.token});case E.b:return Object(v.a)({},e,{ip:t.payload.ip});default:return e}},users:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:P,t=arguments.length>1?arguments[1]:void 0;switch(t.type){case j.h:case j.i:case j.b:return Object(v.a)({},e,{current:t.payload.user});case j.f:return Object(v.a)({},e,{users:t.payload.users,pageCount:t.payload.pageCount});case j.a:return Object(v.a)({},e,{users:Object(O.a)(e.users.concat(t.payload.user))});case j.d:return{users:Object(O.a)(e.users.map((function(e){return e._id===t.payload.user._id?Object(v.a)({},e,{},t.payload.user):e})))};case j.c:return Object(v.a)({},e,{users:Object(O.a)(e.users.filter((function(e){return e._id!==t.payload.user._id})))});case j.e:return Object(v.a)({},e,{user:t.payload.user});case j.g:return Object(v.a)({},e,{users:t.payload.users});default:return e}},message:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{errors:[],success:!1},t=arguments.length>1?arguments[1]:void 0;switch(t.type){case _.b:case _.d:return Object(v.a)({},e,{message:t.payload});case _.a:return Object(v.a)({},e,{message:"",errors:[],success:!1});case _.c:return Object(v.a)({},e,{errors:t.payload,success:!1});default:return e}},request:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:x,t=arguments.length>1?arguments[1]:void 0;switch(t.type){case k.b:return Object(v.a)({},e,{loading:!0});case k.a:return Object(v.a)({},e,{loading:!1});default:return e}},payments:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:S,t=arguments.length>1?arguments[1]:void 0;switch(t.type){case"GET_ALL_PAYMENTS":return Object(v.a)({},e,{payments:t.payload.payments,pageCount:t.payload.totalCount});case"GET_PAYMENT":return Object(v.a)({},e,{payment:t.payload.payment});case"SEARCH_PAYMENT":case"FILTER_PAYMENT":return Object(v.a)({},e,{payments:t.payload.payments});case"TOTAL_PAYMENT_TRANSACTION_VALUE":return Object(v.a)({},e,{totalTransactions:t.payload.totalTransactions});case"TOTAL_PAYMENT_REVENUE":return Object(v.a)({},e,{totalRevenue:t.payload.totalRevenue});case"GET_ALL_CHARGES":return Object(v.a)({},e,{charges:t.payload.charges});case"CREATE_NEW_DELIVERY_CHARGE":return Object(v.a)({},e,{charges:Object(O.a)(e.charges.concat(t.payload.charge))});case"EDIT_DELIVERY_CHARGE":return{charges:Object(O.a)(e.charges.map((function(e){return e._id===t.payload.charge._id?Object(v.a)({},e,{},t.payload.charge):e})))};case"DELETE_DELIVERY_CHARGE":return Object(v.a)({},e,{charges:Object(O.a)(e.charges.filter((function(e){return e._id!==t.payload.charge._id})))});case"GET_ALL_RATES":return Object(v.a)({},e,{rates:t.payload.rates});case"CREATE_NEW_DELIVERY_RATE":return Object(v.a)({},e,{rates:Object(O.a)(e.rates.concat(t.payload.rate))});case"GET_RATES_FROM_TO":return Object(v.a)({},e,{rate:t.payload.rate});default:return e}},statsDashbaord:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:A,t=arguments.length>1?arguments[1]:void 0;switch(t.type){case N.d:return Object(v.a)({},e,{registration:t.payload.registration,totalRegistration:t.payload.totalRegistration});case N.f:return Object(v.a)({},e,{status:t.payload.status,totalStatus:t.payload.totalStatus});case N.c:return Object(v.a)({},e,{programme:t.payload.programme,totalProgramme:t.payload.totalProgramme});case N.a:return Object(v.a)({},e,{gender:t.payload.gender,totalGender:t.payload.totalGender});case N.b:return Object(v.a)({},e,{geozone:t.payload.geozone,totalGeozone:t.payload.totalGeozone});case N.e:return Object(v.a)({},e,{states:t.payload.states,labels:t.payload.labels,counts:t.payload.counts,totalStates:t.payload.totalStates});default:return e}},statsPayment:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:T,t=arguments.length>1?arguments[1]:void 0;switch(t.type){case N.k:return Object(v.a)({},e,{statesPayment:t.payload.statesPayment,totalStatesPayment:t.payload.totalStatesPayment,labelsPayment:t.payload.labelsPayment,countsPayment:t.payload.countsPayment});case N.j:return Object(v.a)({},e,{programmesPayment:t.payload.programmesPayment,totalProgrammesPayment:t.payload.totalProgrammesPayment});case N.h:return Object(v.a)({},e,{genderPayment:t.payload.genderPayment,totalGenderPayment:t.payload.totalGenderPayment});case N.i:return Object(v.a)({},e,{geozonePayment:t.payload.geozonePayment,totalGeozonePayment:t.payload.totalGeozonePayment});case N.g:return Object(v.a)({},e,{insightPayment:t.payload.insightPayment});default:return e}}}),I=function(e,t){return t.type===E.c&&(e=void 0),R(e,t)},C=a(108),G=a(109),D=a(91),H=function(e){var t,a=e.initialState,n=void 0===a?{auth:{isAuthenticated:localStorage.getItem("token")}}:a,c=e.children;return t=window.location.href.includes("localhost")?Object(g.createStore)(I,n,Object(C.composeWithDevTools)(Object(g.applyMiddleware)(G.logger,D.a))):Object(g.createStore)(I,n,Object(g.applyMiddleware)(D.a)),r.a.createElement(s.a,{store:t},c)},L=a(47),M=a(51),z=(a(76),a(77),a(115),a(116),a(110),Object(s.b)((function(e){return{isAuthenticated:!!localStorage.token}}))((function(e){var t=e.isAuthenticated,a=e.component,n=Object(M.a)(e,["isAuthenticated","component"]);return r.a.createElement(L.b,Object.assign({},n,{render:function(e){return t?r.a.createElement(a,e):r.a.createElement(L.a,{to:"/"})}}))}))),U=Object(s.b)((function(e){return{isAuthenticated:!!localStorage.token}}))((function(e){var t=e.isAuthenticated,a=e.component,n=Object(M.a)(e,["isAuthenticated","component"]);return r.a.createElement(L.b,Object.assign({},n,{render:function(e){return t?r.a.createElement(L.a,{to:"/start/application"}):r.a.createElement(a,e)}}))})),V=a(3),B=a.n(V),F=a(7),Y=a(96),q=a(34),W=a(65),Z=a(39),J=a(66),$=a(71),K=Object(q.c)({mapPropsToValues:function(e){return{confirmPassword:e.confirmPassword||"",password:e.password||""}},validationSchema:Z.a().shape({password:Z.c().min(5,"Password must be at least 5 characters").required("Password is required"),confirmPassword:Z.c().oneOf([Z.b("password","")],"Password not matched").required("Confirm Password is required")}),handleSubmit:function(){var e=Object(F.a)(B.a.mark((function e(t,a){var n,r,c;return B.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:n=a.props,a.resetForm,a.setErrors,a.setSubmitting,r=new URLSearchParams(n.location.search),c=r.get("token"),n.resetPassword({password:t.password,token:c},n);case 4:case"end":return e.stop()}}),e)})));return function(t,a){return e.apply(this,arguments)}}()}),Q=Object(s.b)((function(e){return{loading:e.request.loading}}),l)(K((function(e){var t=e.loading;new URLSearchParams(e.location.search).get("token")||e.history.push("/login");var a=Object(n.useState)({showPassword:!1,confirmPassword:!1}),c=Object(Y.a)(a,2),o=c[0],s=c[1];return r.a.createElement($.a,{title:"Reset Password"},r.a.createElement(q.b,{className:"auth-form"},r.a.createElement(q.a,{name:"password",title:"Password",icon:J.b,showEye:!0,doShowEntries:function(){s({showPassword:!o.showPassword})},type:o.showPassword?"text":"password",showPassword:o.showPassword,component:W.a}),r.a.createElement(q.a,{name:"confirmPassword",title:"Confirm Password",icon:J.b,showEye:!0,doShowEntries:function(){s({confirmPassword:!o.confirmPassword})},type:o.confirmPassword?"text":"password",confirmPassword:o.confirmPassword,component:W.a}),r.a.createElement("button",{className:"btn btn--primary auth-btn",disabled:t},t?r.a.createElement("span",{className:"text-lower"},r.a.createElement("i",{className:"fa fa-spinner fa-spin"})," please wait..."):r.a.createElement(r.a.Fragment,null,r.a.createElement("span",null,"Reset Password")))))}))),X=Object(q.c)({mapPropsToValues:function(e){return{email:e.email||""}},validationSchema:Z.a().shape({email:Z.c().email("Invalid email, please provide a valid email.").required("Email is required")}),handleSubmit:function(){var e=Object(F.a)(B.a.mark((function e(t,a){var n;return B.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:n=a.props,a.resetForm,a.setErrors,a.setSubmitting,n.forgotPassword(t,n);case 2:case"end":return e.stop()}}),e)})));return function(t,a){return e.apply(this,arguments)}}()}),ee=Object(s.b)((function(e){return{loading:e.request.loading}}),l)(X((function(e){var t=e.loading,a=r.a.createElement(r.a.Fragment,null,r.a.createElement("p",{className:"d-flx"},r.a.createElement("svg",null,r.a.createElement("use",{href:"/uploads/icons.svg#forward"})),r.a.createElement("span",{class:"ml-h"},"Fill in your email address and we will send you a link to reset your password. Ensure you have access to this email address.")));return r.a.createElement($.a,{title:"Forgot Password",hint:a},r.a.createElement(q.b,{className:"auth-form"},r.a.createElement(q.a,{name:"email",title:"Email Address",type:"email",icon:J.a,component:W.a}),r.a.createElement("button",{className:"btn btn--primary auth-btn",disabled:t},t?r.a.createElement("span",{className:"text-lower"},r.a.createElement("i",{className:"fa fa-spinner fa-spin"})," please wait..."):r.a.createElement(r.a.Fragment,null,r.a.createElement("span",null,"Reset my password")))),r.a.createElement("p",{className:"other-link"},"I remember my password? ",r.a.createElement(b.b,{to:"/login"},"Log into Portal")))}))),te=a(74),ae=Object(s.b)((function(e){return{loading:e.request.loading}}),l)((function(e){var t=new URLSearchParams(e.location.search).get("token");return Object(n.useEffect)((function(){e.verifyAndLogin(t,e)}),[]),r.a.createElement("div",{className:"verify-email"},r.a.createElement(te.a,null),r.a.createElement("p",{className:"loading_text"},"Email verification in progress, please wait..."))})),ne=(a(149),function(){return r.a.createElement("div",{className:"loader-overlay"},r.a.createElement("div",{className:"lds-ring"},r.a.createElement("div",null),r.a.createElement("div",null),r.a.createElement("div",null),r.a.createElement("div",null)))}),re=Object(s.b)(null,{refreshToken:l.refreshToken})((function(e){var t=localStorage.getItem("token");return Object(n.useEffect)((function(){if(!t||null===t)return window.location.href.includes("npower.fmhds.gov.ng")&&(window.location="https://npower.fmhds.gov.ng/site/"),window.location.href.includes("npowerapplication.bluegreensoft.com")&&(window.location="https://npowerapplication.bluegreensoft.com/site/"),void(window.location.href.includes("localhost:3000")&&(window.location="/signup"));try{e.refreshToken({token:t,props:e})}catch(a){localStorage.removeItem("token"),e.history.push("/login")}}),[e,t]),r.a.createElement(r.a.Fragment,null,r.a.createElement(ne,null))})),ce=Object(n.lazy)((function(){return a.e(6).then(a.bind(null,160))})),oe=Object(n.lazy)((function(){return a.e(7).then(a.bind(null,161))})),se=Object(n.lazy)((function(){return a.e(8).then(a.bind(null,162))})),ue=(Object(n.lazy)((function(){return a.e(9).then(a.bind(null,165))})),Object(n.lazy)((function(){return a.e(4).then(a.bind(null,163))}))),ie=Object(n.lazy)((function(){return Promise.all([a.e(3),a.e(5)]).then(a.bind(null,164))})),le=function(){return r.a.createElement(n.Suspense,{fallback:r.a.createElement(te.a,null)},r.a.createElement(L.d,null,r.a.createElement(z,{exact:!0,path:"/start/application",component:ie}),r.a.createElement(L.b,{exact:!0,path:"/",component:re}),r.a.createElement(U,{exact:!0,path:"/login",component:ce}),r.a.createElement(U,{exact:!0,path:"/signup",component:oe}),r.a.createElement(U,{exact:!0,path:"/forgot-password",component:ee}),r.a.createElement(U,{exact:!0,path:"/reset-password",component:Q}),r.a.createElement(U,{exact:!0,path:"/verify-email",component:ae}),r.a.createElement(U,{exact:!0,path:"/success",component:se}),r.a.createElement(U,{component:ue})))};Boolean("localhost"===window.location.hostname||"[::1]"===window.location.hostname||window.location.hostname.match(/^127(?:\.(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)){3}$/));o.a.render(r.a.createElement(H,null,r.a.createElement(b.a,null,r.a.createElement(y,null,r.a.createElement(le,null)))),document.getElementById("root")),"serviceWorker"in navigator&&navigator.serviceWorker.ready.then((function(e){e.unregister()})).catch((function(e){console.error(e.message)}))},22:function(e,t,a){"use strict";a.d(t,"b",(function(){return n})),a.d(t,"d",(function(){return r})),a.d(t,"c",(function(){return c})),a.d(t,"a",(function(){return o}));var n="ERROR_MESSAGE",r="SUCCESS_MESSAGE",c="ERROR_MESSAGE_MULTIPLE",o="CLEAR_MESSAGE"},24:function(e,t,a){"use strict";a.r(t),a.d(t,"signout",(function(){return b})),a.d(t,"signup",(function(){return A})),a.d(t,"signin",(function(){return _})),a.d(t,"forgotPassword",(function(){return x})),a.d(t,"resetPassword",(function(){return S})),a.d(t,"getUserIPAddress",(function(){return j})),a.d(t,"clearMessage",(function(){return R})),a.d(t,"currentUser",(function(){return g})),a.d(t,"updateProfile",(function(){return v})),a.d(t,"updatePassword",(function(){return E})),a.d(t,"refreshToken",(function(){return P})),a.d(t,"verifyAndLogin",(function(){return k})),a.d(t,"changePassword",(function(){return N})),a.d(t,"getDashboardRegistrationInsight",(function(){return G})),a.d(t,"getDashboardStatusInsight",(function(){return D})),a.d(t,"getDashboardProgrammeInsight",(function(){return H})),a.d(t,"getDashboardGenderInsight",(function(){return L})),a.d(t,"getDashboardGeozoneInsight",(function(){return M})),a.d(t,"getDashboardStateInsight",(function(){return z})),a.d(t,"getPaymentProgrammeInsight",(function(){return U})),a.d(t,"getPaymentGenderInsight",(function(){return V})),a.d(t,"getPaymentGeozoneInsight",(function(){return B})),a.d(t,"getPaymentCountInsight",(function(){return F})),a.d(t,"getPaymentStateInsight",(function(){return Y})),a.d(t,"startApplicatioProcess",(function(){return w})),a.d(t,"validateBVN",(function(){return O}));var n,r=a(3),c=a.n(r),o=a(7),s=a(33),u=a(8),i=a.n(u);window.location.href.includes("localhost")&&(n="https://api-npower-application.bluegreensoft.com/api/v1/trainee/"),window.location.href.includes("npowerapplication.bluegreensoft.com")&&(n="https://api-npower-application.bluegreensoft.com/api/v1/trainee/"),window.location.href.includes("npower.fmhds.gov.ng")&&(n="https://api.npower.fmhds.gov.ng/api/v1/trainee/");var l=a(1),p=a(75),d=a(6),m=a(12),f=a(76),h=a(77),y=function(){function e(){Object(f.a)(this,e)}return Object(h.a)(e,null,[{key:"setTime",value:function(e,t){this.timeout=setTimeout(e,t)}},{key:"clearTime",value:function(){clearTimeout(this.timeout)}}]),e}();y.timeout=null;var b=function(e){return function(e){e({type:s.c}),localStorage.removeItem("token"),window.location="/login"}},g=function(){return function(){var e=Object(o.a)(c.a.mark((function e(t){var a;return c.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.prev=0,t({type:l.b}),e.next=4,i.a.get(n+"auth/me");case 4:a=e.sent,t({type:m.b,payload:{success:!0,user:a.data.user}}),t({type:l.a}),e.next=14;break;case 9:e.prev=9,e.t0=e.catch(0),t(Object(d.d)(e.t0)),t(b()),t({type:l.a});case 14:case"end":return e.stop()}}),e,null,[[0,9]])})));return function(t){return e.apply(this,arguments)}}()},v=function(e){return function(){var t=Object(o.a)(c.a.mark((function t(a){var r;return c.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.prev=0,a({type:l.b}),t.next=4,i.a.put(n+"user",e);case 4:r=t.sent,a(Object(d.e)(r)),a({type:m.h,payload:{user:r.data.data}}),a({type:l.a}),t.next=14;break;case 10:t.prev=10,t.t0=t.catch(0),a(Object(d.d)(t.t0)),a({type:l.a});case 14:case"end":return t.stop()}}),t,null,[[0,10]])})));return function(e){return t.apply(this,arguments)}}()},E=function(e){return function(){var t=Object(o.a)(c.a.mark((function t(a){var r;return c.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.prev=0,a({type:l.b}),t.next=4,i.a.post(n+"auth/change/password",e);case 4:r=t.sent,a(Object(d.e)(r)),a({type:l.a}),t.next=13;break;case 9:t.prev=9,t.t0=t.catch(0),a(Object(d.d)(t.t0)),a({type:l.a});case 13:case"end":return t.stop()}}),t,null,[[0,9]])})));return function(e){return t.apply(this,arguments)}}()},w=function(e,t){return function(){var a=Object(o.a)(c.a.mark((function a(r){var o;return c.a.wrap((function(a){for(;;)switch(a.prev=a.next){case 0:return a.prev=0,r({type:l.b}),a.next=4,i.a.put(n+"update?stage=".concat(t),e);case 4:o=a.sent,r(Object(d.e)(o)),r({type:m.h,payload:{user:o.data.user}}),r({type:l.a}),a.next=14;break;case 10:a.prev=10,a.t0=a.catch(0),r({type:l.a}),r(Object(d.d)(a.t0));case 14:case"end":return a.stop()}}),a,null,[[0,10]])})));return function(e){return a.apply(this,arguments)}}()},O=function(e){return function(){var t=Object(o.a)(c.a.mark((function t(a){var r;return c.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.prev=0,a({type:l.b}),t.next=4,i.a.put(n+"bvn/validate",e);case 4:r=t.sent,a(Object(d.e)(r)),a({type:m.h,payload:{user:r.data.user}}),a({type:l.a}),t.next=15;break;case 10:t.prev=10,t.t0=t.catch(0),a(g()),a(Object(d.d)(t.t0)),a({type:l.a});case 15:case"end":return t.stop()}}),t,null,[[0,10]])})));return function(e){return t.apply(this,arguments)}}()},j=function(){return function(){var e=Object(o.a)(c.a.mark((function e(t){var a;return c.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.prev=0,e.next=3,i.a.get("https://www.cloudflare.com/cdn-cgi/trace");case 3:if(!(a=e.sent).data){e.next=7;break}return t({type:s.b,payload:{ip:a.data.split(" ")[0].split("=")[3].split("ts")[0].trim()}}),e.abrupt("return",a.data);case 7:e.next=12;break;case 9:return e.prev=9,e.t0=e.catch(0),e.abrupt("return",e.t0);case 12:case"end":return e.stop()}}),e,null,[[0,9]])})));return function(t){return e.apply(this,arguments)}}()},P=function(e){var t=e.props;return function(){var e=Object(o.a)(c.a.mark((function e(a){var r;return c.a.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.prev=0,a({type:l.b}),e.next=4,i.a.get(n+"auth/token/refresh");case 4:return r=e.sent,localStorage.setItem("token",r.data.refreshToken),a({type:l.a}),t.history.push("/start/application"),e.abrupt("return",r.data.refreshToken);case 11:return e.prev=11,e.t0=e.catch(0),a({type:l.a}),t.history.push("/login"),e.abrupt("return",e.t0);case 16:case"end":return e.stop()}}),e,null,[[0,11]])})));return function(t){return e.apply(this,arguments)}}()},_=function(e,t){return function(){var t=Object(o.a)(c.a.mark((function t(a){var r;return c.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.prev=0,a({type:l.b}),t.next=4,i.a.post(n+"auth/login",e);case 4:return r=t.sent,Object(p.a)(r.data.token),a({type:s.a,payload:{token:r.data.token}}),a(g()),localStorage.setItem("token",r.data.token),a(Object(d.e)(r)),a({type:l.a}),t.abrupt("return",r.data);case 14:return t.prev=14,t.t0=t.catch(0),a(Object(d.d)(t.t0)),a({type:l.a}),t.abrupt("return",t.t0);case 19:case"end":return t.stop()}}),t,null,[[0,14]])})));return function(e){return t.apply(this,arguments)}}()},k=function(e,t){return function(){var a=Object(o.a)(c.a.mark((function a(r){var o;return c.a.wrap((function(a){for(;;)switch(a.prev=a.next){case 0:return a.prev=0,r({type:l.b}),a.next=4,i.a.post(n+"auth/email/validate",{token:e});case 4:return o=a.sent,t.history.push("/login"),r(Object(d.e)(o)),r({type:l.a}),a.abrupt("return",o.data);case 11:return a.prev=11,a.t0=a.catch(0),r(Object(d.d)(a.t0)),r({type:l.a}),t.history.push("/login"),a.abrupt("return",a.t0);case 17:case"end":return a.stop()}}),a,null,[[0,11]])})));return function(e){return a.apply(this,arguments)}}()},x=function(e,t){return function(){var a=Object(o.a)(c.a.mark((function a(r){var o;return c.a.wrap((function(a){for(;;)switch(a.prev=a.next){case 0:return a.prev=0,r({type:l.b}),a.next=4,i.a.post(n+"auth/forgot/password",e);case 4:return o=a.sent,r(Object(d.e)(o)),r({type:l.a}),t.history.push("/login"),a.abrupt("return",o.data);case 11:return a.prev=11,a.t0=a.catch(0),r(Object(d.d)(a.t0)),r({type:l.a}),a.abrupt("return",a.t0);case 16:case"end":return a.stop()}}),a,null,[[0,11]])})));return function(e){return a.apply(this,arguments)}}()},S=function(e,t){return function(){var a=Object(o.a)(c.a.mark((function a(r){var o;return c.a.wrap((function(a){for(;;)switch(a.prev=a.next){case 0:return a.prev=0,r({type:l.b}),a.next=4,i.a.post(n+"auth/reset/password",e);case 4:return o=a.sent,r(Object(d.e)(o)),r({type:l.a}),t.history.push("/login"),a.abrupt("return",o.data);case 11:return a.prev=11,a.t0=a.catch(0),r(Object(d.d)(a.t0)),r({type:l.a}),a.abrupt("return",a.t0);case 16:case"end":return a.stop()}}),a,null,[[0,11]])})));return function(e){return a.apply(this,arguments)}}()},N=function(e){return function(){var t=Object(o.a)(c.a.mark((function t(a){var r;return c.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.prev=0,a({type:l.b}),t.next=4,i.a.post(n+"auth/change/password",e);case 4:return r=t.sent,a(Object(d.e)(r)),a({type:l.a}),t.abrupt("return",r.data);case 10:return t.prev=10,t.t0=t.catch(0),a(Object(d.d)(t.t0)),a({type:l.a}),t.abrupt("return",t.t0);case 15:case"end":return t.stop()}}),t,null,[[0,10]])})));return function(e){return t.apply(this,arguments)}}()},A=function(e,t){return function(){var a=Object(o.a)(c.a.mark((function a(r){var o;return c.a.wrap((function(a){for(;;)switch(a.prev=a.next){case 0:return a.prev=0,r({type:l.b}),a.next=4,i.a.post(n+"auth/register",e);case 4:return o=a.sent,r(Object(d.e)(o)),r({type:l.a}),t.history.push("/success"),a.abrupt("return",o.data);case 11:return a.prev=11,a.t0=a.catch(0),r(Object(d.d)(a.t0)),r({type:l.a}),a.abrupt("return",a.t0);case 16:case"end":return a.stop()}}),a,null,[[0,11]])})));return function(e){return a.apply(this,arguments)}}()},T=a(22),R=function(){return function(e){e({type:T.a,payload:""})}},I=a(10),C=[{sn:1,color:"#268F32"},{sn:2,color:"#DD3629"},{sn:3,color:"#BB6BD9"},{sn:4,color:"#3DB54A"},{sn:5,color:"#FBB03B"},{sn:6,color:"#CCE5CF"}],G=function(e){return function(){var t=Object(o.a)(c.a.mark((function t(a){var r;return c.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.prev=0,a({type:l.b}),t.next=4,i.a.get(n+"home/registration/insights?program=".concat(e));case 4:r=t.sent,a({type:I.d,payload:{success:!0,registration:r.data.data.status,totalRegistration:r.data.data.total}}),a({type:l.a}),t.next=13;break;case 9:t.prev=9,t.t0=t.catch(0),a(Object(d.d)(t.t0)),a({type:l.a});case 13:case"end":return t.stop()}}),t,null,[[0,9]])})));return function(e){return t.apply(this,arguments)}}()},D=function(e){return function(){var t=Object(o.a)(c.a.mark((function t(a){var r;return c.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.prev=0,a({type:l.b}),t.next=4,i.a.get(n+"home/status/insights?program=".concat(e));case 4:r=t.sent,a({type:I.f,payload:{success:!0,status:r.data.data.status,totalStatus:r.data.data.total}}),a({type:l.a}),t.next=13;break;case 9:t.prev=9,t.t0=t.catch(0),a(Object(d.d)(t.t0)),a({type:l.a});case 13:case"end":return t.stop()}}),t,null,[[0,9]])})));return function(e){return t.apply(this,arguments)}}()},H=function(e){return function(){var t=Object(o.a)(c.a.mark((function t(a){var r;return c.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.prev=0,a({type:l.b}),t.next=4,i.a.get(n+"home/program/insights?program=".concat(e));case 4:r=t.sent,a({type:I.c,payload:{success:!0,programme:r.data.data.status,totalProgramme:r.data.data.total}}),a({type:l.a}),t.next=13;break;case 9:t.prev=9,t.t0=t.catch(0),a(Object(d.d)(t.t0)),a({type:l.a});case 13:case"end":return t.stop()}}),t,null,[[0,9]])})));return function(e){return t.apply(this,arguments)}}()},L=function(e){return function(){var t=Object(o.a)(c.a.mark((function t(a){var r,o,s,u,p;return c.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.prev=0,a({type:l.b}),t.next=4,i.a.get(n+"home/gender/insights?program=".concat(e));case 4:r=t.sent,o=r.data.data.genders,s=Object.keys(o),u=Object.values(o),p=[],u.map((function(e,t){s.map((function(a,n){t===n&&p.push({id:t+1,label:Object(d.b)(a),value:e,color:C[t].color})}))})),a({type:I.a,payload:{success:!0,gender:p,totalGender:r.data.data.total}}),a({type:l.a}),t.next=17;break;case 14:t.prev=14,t.t0=t.catch(0),a({type:l.a});case 17:case"end":return t.stop()}}),t,null,[[0,14]])})));return function(e){return t.apply(this,arguments)}}()},M=function(e){return function(){var t=Object(o.a)(c.a.mark((function t(a){var r,o,s,u,p;return c.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.prev=0,a({type:l.b}),t.next=4,i.a.get(n+"home/geozone/insights?program=".concat(e));case 4:r=t.sent,o=r.data.data.geozones,s=Object.keys(o),u=Object.values(o),p=[],u.map((function(e,t){s.map((function(a,n){t===n&&p.push({id:t+1,label:Object(d.b)(a),value:e,color:C[t].color})}))})),a({type:I.b,payload:{success:!0,geozone:p,totalGeozone:r.data.data.total}}),a({type:l.a}),t.next=17;break;case 14:t.prev=14,t.t0=t.catch(0),a({type:l.a});case 17:case"end":return t.stop()}}),t,null,[[0,14]])})));return function(e){return t.apply(this,arguments)}}()},z=function(e){return function(){var t=Object(o.a)(c.a.mark((function t(a){var r,o,s,u,p,m,f;return c.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.prev=0,a({type:l.b}),t.next=4,i.a.get(n+"home/state/insights?program=".concat(e));case 4:r=t.sent,o=r.data.data.states,s=Object.keys(o),u=Object.values(o),p=[],m=[],f=[],u.map((function(e,t){s.map((function(a,n){t===n&&(p.push({id:t+1,label:Object(d.b)(a),value:e,color:C[0].color}),m.push({label:Object(d.b)(a)}),f.push({value:e}))}))})),a({type:I.e,payload:{success:!0,states:p,labels:m,counts:f,totalStates:r.data.data.total}}),a({type:l.a}),t.next=19;break;case 16:t.prev=16,t.t0=t.catch(0),a({type:l.a});case 19:case"end":return t.stop()}}),t,null,[[0,16]])})));return function(e){return t.apply(this,arguments)}}()},U=function(e){return function(){var t=Object(o.a)(c.a.mark((function t(a){var r,o,s,u,p;return c.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.prev=0,a({type:l.b}),t.next=4,i.a.get(n+"payment/program/insights?program=".concat(e));case 4:r=t.sent,o=r.data.data.programs,s=Object.keys(o),u=Object.values(o),p=[],u.map((function(e,t){s.map((function(a,n){t===n&&p.push({id:t+1,label:Object(d.b)(a),value:e,color:C[t].color})}))})),a({type:I.j,payload:{success:!0,programmesPayment:p,totalProgrammesPayment:r.data.data.total}}),a({type:l.a}),t.next=17;break;case 14:t.prev=14,t.t0=t.catch(0),a({type:l.a});case 17:case"end":return t.stop()}}),t,null,[[0,14]])})));return function(e){return t.apply(this,arguments)}}()},V=function(e){return function(){var t=Object(o.a)(c.a.mark((function t(a){var r,o,s,u,p;return c.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.prev=0,a({type:l.b}),t.next=4,i.a.get(n+"payment/gender/insights?program=".concat(e));case 4:r=t.sent,o=r.data.data.genders,s=Object.keys(o),u=Object.values(o),p=[],u.map((function(e,t){s.map((function(a,n){t===n&&p.push({id:t+1,label:Object(d.b)(a),value:e,color:C[t].color})}))})),a({type:I.h,payload:{success:!0,genderPayment:p,totalGenderPayment:r.data.data.total}}),a({type:l.a}),t.next=17;break;case 14:t.prev=14,t.t0=t.catch(0),a({type:l.a});case 17:case"end":return t.stop()}}),t,null,[[0,14]])})));return function(e){return t.apply(this,arguments)}}()},B=function(e){return function(){var t=Object(o.a)(c.a.mark((function t(a){var r,o,s,u,p;return c.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.prev=0,a({type:l.b}),t.next=4,i.a.get(n+"payment/geozone/insights?program=".concat(e));case 4:r=t.sent,o=r.data.data.geozones,s=Object.keys(o),u=Object.values(o),p=[],u.map((function(e,t){s.map((function(a,n){t===n&&p.push({id:t+1,label:Object(d.b)(a),value:e,color:C[t].color})}))})),a({type:I.i,payload:{success:!0,geozonePayment:p,totalGeozonePayment:r.data.data.total}}),a({type:l.a}),t.next=17;break;case 14:t.prev=14,t.t0=t.catch(0),a({type:l.a});case 17:case"end":return t.stop()}}),t,null,[[0,14]])})));return function(e){return t.apply(this,arguments)}}()},F=function(e){return function(){var t=Object(o.a)(c.a.mark((function t(a){var r;return c.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.prev=0,a({type:l.b}),t.next=4,i.a.get(n+"payment/total/insights?program=".concat(e));case 4:r=t.sent,a({type:I.g,payload:{success:!0,insightPayment:r.data.data.insight}}),a({type:l.a}),t.next=12;break;case 9:t.prev=9,t.t0=t.catch(0),a({type:l.a});case 12:case"end":return t.stop()}}),t,null,[[0,9]])})));return function(e){return t.apply(this,arguments)}}()},Y=function(e){return function(){var t=Object(o.a)(c.a.mark((function t(a){var r,o,s,u,p,m,f;return c.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return t.prev=0,a({type:l.b}),t.next=4,i.a.get(n+"payment/state/insights?program=".concat(e));case 4:r=t.sent,o=r.data.data.states,s=Object.keys(o),u=Object.values(o),p=[],m=[],f=[],u.map((function(e,t){s.map((function(a,n){t===n&&(p.push({id:t+1,label:Object(d.b)(a),value:e,color:C[0].color}),m.push({label:Object(d.b)(a)}),f.push({value:e}))}))})),a({type:I.k,payload:{success:!0,statesPayment:p,labelsPayment:m,countsPayment:f,totalStatesPayment:r.data.data.total}}),a({type:l.a}),t.next=19;break;case 16:t.prev=16,t.t0=t.catch(0),a({type:l.a});case 19:case"end":return t.stop()}}),t,null,[[0,16]])})));return function(e){return t.apply(this,arguments)}}()}},33:function(e,t,a){"use strict";a.d(t,"a",(function(){return n})),a.d(t,"c",(function(){return r})),a.d(t,"b",(function(){return c}));var n="AUTH_USER",r="SIGN_OUT",c="GET_USER_IP_ADDRESS"},6:function(e,t,a){"use strict";a.d(t,"c",(function(){return s})),a.d(t,"b",(function(){return u})),a.d(t,"d",(function(){return i})),a.d(t,"e",(function(){return l})),a.d(t,"a",(function(){return p}));var n=a(3),r=a.n(n),c=a(7),o=a(22),s=new Intl.NumberFormat("en-NG",{style:"currency",currency:"NGN"}),u=(new Intl.NumberFormat("en-NG",{}),function(e){if(e){for(var t=0,a=(e=e.split(" ")).length;t<a;t++)e[t]=e[t][0].toUpperCase()+e[t].substr(1);return e.join(" ")}}),i=function(e){return function(){var t=Object(c.a)(r.a.mark((function t(a){return r.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:void 0!==e.response?e.response.data.message.details&&e.response.data.message.details.length>0?a({type:o.c,payload:{success:!1,errors:e.response.data.message.details}}):a({type:o.b,payload:{success:!1,message:e.response.data.message}}):a({type:o.b,payload:{success:!1,message:"".concat(e,". please check your internet connect.")}});case 1:case"end":return t.stop()}}),t)})));return function(e){return t.apply(this,arguments)}}()},l=function(e){return function(){var t=Object(c.a)(r.a.mark((function t(a){return r.a.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:void 0!==e.data?a({type:o.d,payload:{success:!0,message:e.data.message}}):a({type:o.d,payload:{success:!0,message:e}});case 1:case"end":return t.stop()}}),t)})));return function(e){return t.apply(this,arguments)}}()},p=function(e,t){for(var a=[],n=e;n<=t;n++)a.push(n);return a}},65:function(e,t,a){"use strict";a.d(t,"a",(function(){return o}));var n=a(51),r=a(0),c=a.n(r),o=function(e){var t=e.field,a=e.form,r=a.touched,o=a.errors,s=Object(n.a)(e,["field","form"]);return c.a.createElement("label",{className:"form-input"},c.a.createElement("span",{className:"form-input__label"},s.title),c.a.createElement("div",{className:"form-input__input"},c.a.createElement("input",Object.assign({},t,s)),s.showEye&&c.a.createElement("button",{type:"button",onClick:function(){return s.doShowEntries()},className:"form-input__toggle-password"},s.showPassword?"hide":"show")),r[t.name]&&o[t.name]&&c.a.createElement("span",{className:"form-input__error-msg"},o[t.name]))}},66:function(e,t,a){"use strict";a.d(t,"b",(function(){return c})),a.d(t,"c",(function(){return o})),a.d(t,"a",(function(){return s})),a.d(t,"d",(function(){return u}));var n=a(0),r=a.n(n),c=r.a.createElement("svg",{width:"20",height:"20",viewBox:"0 0 20 20",fill:"currentColor",xmlns:"http://www.w3.org/2000/svg"},r.a.createElement("path",{d:"M14.6875 7.26562H13.9062V5.70312C13.9062 3.55469 12.1484 1.79688 10 1.79688C7.85156 1.79688 6.09375 3.55469 6.09375 5.70312V7.26562H5.3125C4.45305 7.26562 3.75 7.96867 3.75 8.82812V16.6406C3.75 17.5001 4.45305 18.2031 5.3125 18.2031H14.6875C15.547 18.2031 16.25 17.5001 16.25 16.6406V8.82812C16.25 7.96867 15.547 7.26562 14.6875 7.26562ZM10 14.375C9.14055 14.375 8.4375 13.672 8.4375 12.8125C8.4375 11.953 9.14055 11.25 10 11.25C10.8595 11.25 11.5625 11.953 11.5625 12.8125C11.5625 13.672 10.8595 14.375 10 14.375ZM12.422 7.26562H7.57805V5.70312C7.57805 4.37484 8.67191 3.28117 10 3.28117C11.3283 3.28117 12.422 4.37484 12.422 5.70312V7.26562Z"})),o=r.a.createElement("svg",{width:"20",height:"15",viewBox:"0 0 20 15",fill:"#999999",xmlns:"http://www.w3.org/2000/svg"},r.a.createElement("path",{d:"M0.5 0V3H5.5V15H8.5V3H13.5V0H0.5ZM19.5 5H10.5V8H13.5V15H16.5V8H19.5V5Z"})),s=r.a.createElement("svg",{width:"20",height:"24",viewBox:"0 0 24 24",fill:"none",stroke:"#999",xmlns:"http://www.w3.org/2000/svg"},r.a.createElement("path",{d:"M4.8 5H19.2C20.19 5 21 5.81 21 6.8V17.6C21 18.59 20.19 19.4 19.2 19.4H4.8C3.81 19.4 3 18.59 3 17.6V6.8C3 5.81 3.81 5 4.8 5Z",strokeWidth:"2",strokeLinecap:"round",strokeLinejoin:"round"}),r.a.createElement("path",{d:"M21 6.80005L12 13.1L3 6.80005",strokeWidth:"2",strokeLinecap:"round",strokeLinejoin:"round"})),u=r.a.createElement("svg",{width:"20",height:"20",viewBox:"0 0 20 20",fill:"none",stroke:"currentColor",xmlns:"http://www.w3.org/2000/svg"},r.a.createElement("path",{d:"M4.16667 9.16667H15.8333C16.7538 9.16667 17.5 9.91286 17.5 10.8333V16.6667C17.5 17.5871 16.7538 18.3333 15.8333 18.3333H4.16667C3.24619 18.3333 2.5 17.5871 2.5 16.6667V10.8333C2.5 9.91286 3.24619 9.16667 4.16667 9.16667Z",strokeWidth:"2",strokeLinecap:"round",strokeLinejoin:"round"}),r.a.createElement("path",{d:"M14.1666 9.16667V5.83334C14.1677 4.80005 13.7847 3.80323 13.0921 3.03639C12.3996 2.26956 11.4468 1.78742 10.4187 1.68358C9.39064 1.57974 8.36067 1.86159 7.52873 2.47443C6.69679 3.08728 6.12224 3.98738 5.91662 5.00001",strokeWidth:"2",strokeLinecap:"round",strokeLinejoin:"round"}))},71:function(e,t,a){"use strict";var n=a(0),r=a.n(n);t.a=function(e){var t=e.children,a=e.title,n=e.hint;return r.a.createElement("main",{id:"main"},r.a.createElement("div",{className:"d-flx-fw auth-wrapper"},r.a.createElement("section",{className:"auth-wrapper__left width-1-3"},r.a.createElement("img",{className:"auth-wrapper__left__logo",src:"/uploads/logo.svg",alt:"Npower logo"}),r.a.createElement("h2",{className:"auth-wrapper__left__title auth-title"},"N-Power has changed the lives of over 500,000 youths in all 6 geo-political zones."),r.a.createElement("img",{className:"auth-wrapper__left__image",src:"/uploads/auth.png",alt:"Npower beneficiary snapshot"})),r.a.createElement("section",{className:"auth-wrapper__right width-2-3"},r.a.createElement("div",{className:"right-main"},r.a.createElement("h2",{className:"right-main__title auth-title"},a),r.a.createElement("div",{className:"right-main__instruction-list"},n),t),r.a.createElement("p",{className:"copywrite"},"\xa9 Copyright 2020, Federal Republic of Nigeria . All rights reserved"))))}},74:function(e,t,a){"use strict";var n=a(0),r=a.n(n);a(148);t.a=function(e){return r.a.createElement("div",{className:"loader-container"},r.a.createElement("div",{className:"lds-spinner"},r.a.createElement("div",null),r.a.createElement("div",null),r.a.createElement("div",null),r.a.createElement("div",null),r.a.createElement("div",null),r.a.createElement("div",null),r.a.createElement("div",null),r.a.createElement("div",null),r.a.createElement("div",null),r.a.createElement("div",null),r.a.createElement("div",null),r.a.createElement("div",null)))}},75:function(e,t,a){"use strict";var n=a(8),r=a.n(n);t.a=function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:null;e?r.a.defaults.headers.common.authorization="Bearer ".concat(e):delete r.a.defaults.headers.common.authorization}}},[[117,1,2]]]);
//# sourceMappingURL=main.c29da702.chunk.js.map
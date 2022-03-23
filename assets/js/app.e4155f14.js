(function(){"use strict";var t={4772:function(t,e,n){n.d(e,{db:function(){return U}});var a=n(144),o=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("v-app",[n("v-main",[n("MyCalendar")],1)],1)},i=[],l=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("v-row",[n("v-col",[n("v-sheet",{attrs:{height:"64"}},[n("v-toolbar",[n("v-btn",{attrs:{color:"yellow darken-2 black--text",dark:""},on:{click:function(e){e.stopPropagation(),t.dialog=!0}}},[t._v(" Nueva clase ")]),n("v-btn",{staticClass:"mr-4 black",attrs:{outlined:""},on:{click:t.setToday}},[t._v(" Hoy ")]),n("v-btn",{attrs:{fab:"",text:"",small:""},on:{click:t.prev}},[n("v-icon",{attrs:{small:""}},[t._v("mdi-arrow-left")])],1),n("v-btn",{attrs:{fab:"",text:"",small:""},on:{click:t.next}},[n("v-icon",{attrs:{small:""}},[t._v("mdi-arrow-right")])],1),n("v-toolbar-title",{staticClass:"amber--text"},[t._v(t._s(t.title))]),n("div",{staticClass:"flex-grow-1"}),n("v-menu",{attrs:{bottom:"",right:""},scopedSlots:t._u([{key:"activator",fn:function(e){var a=e.on;return[n("v-btn",t._g({staticClass:"amber black--text",attrs:{outlined:""}},a),[n("span",[t._v(t._s(t.typeToLabel[t.type]))]),n("v-icon",{attrs:{right:""}},[t._v("mdi-menu-down")])],1)]}}])},[n("v-list",{staticClass:"amber"},[n("v-list-item",{staticClass:"black--text",on:{click:function(e){t.type="day"}}},[n("v-list-item-title",[t._v("Dia")])],1),n("v-list-item",{staticClass:"black--text",on:{click:function(e){t.type="week"}}},[n("v-list-item-title",[t._v("Semana")])],1),n("v-list-item",{staticClass:"black--text",on:{click:function(e){t.type="month"}}},[n("v-list-item-title",[t._v("Mes")])],1),n("v-list-item",{staticClass:"black--text",on:{click:function(e){t.type="4day"}}},[n("v-list-item-title",[t._v("4 Dias")])],1)],1)],1)],1)],1),n("v-dialog",{attrs:{"max-width":"500"},model:{value:t.dialog,callback:function(e){t.dialog=e},expression:"dialog"}},[n("v-card",[n("v-container",[n("v-form",{on:{submit:function(e){return e.preventDefault(),t.addEvent.apply(null,arguments)}}},[n("v-text-field",{attrs:{type:"text",label:"Nombre de la clase (requerido)"},model:{value:t.name,callback:function(e){t.name=e},expression:"name"}}),n("v-text-field",{attrs:{type:"date",label:"Fecha de inicio (requerido)"},model:{value:t.start,callback:function(e){t.start=e},expression:"start"}}),n("v-text-field",{attrs:{type:"date",label:"Fecha de finalizacion (Requerido)"},model:{value:t.end,callback:function(e){t.end=e},expression:"end"}}),n("v-card-text",[n("v-row",{attrs:{align:"center",justify:"center"}},[n("v-col",[t._v(" Color ")]),n("v-col",[n("v-btn-toggle",[n("v-btn",{attrs:{color:"#FFBF00"},on:{click:function(e){t.color="#FFBF00"}}},[n("v-icon",[t._v("mdi-star")])],1),n("v-btn",{attrs:{color:"#4590C9"},on:{click:function(e){t.color="#4590C9"}}},[n("v-icon",[t._v("mdi-speaker")])],1),n("v-btn",{attrs:{color:"#730f0f"},on:{click:function(e){t.color="#730f0f"}}},[n("v-icon",[t._v("mdi-school-outline")])],1),n("v-btn",{attrs:{color:"#7FFFD4"},on:{click:function(e){t.color="#7FFFD4"}}},[n("v-icon",[t._v("mdi-play")])],1),n("v-btn",{attrs:{color:"#9F2B68"},on:{click:function(e){t.color="#9F2B68"}}},[n("v-icon",[t._v("mdi-palette-outline")])],1)],1)],1)],1)],1),n("v-btn",{staticClass:"mr-4",attrs:{type:"submit",color:"amber black--text"},on:{click:function(e){e.stopPropagation(),t.dialog=!1}}},[t._v(" Crear clase ")])],1)],1)],1)],1),n("v-dialog",{attrs:{"max-width":"500"},model:{value:t.dialogDate,callback:function(e){t.dialogDate=e},expression:"dialogDate"}},[n("v-card",[n("v-container",[n("v-form",{on:{submit:function(e){return e.preventDefault(),t.addEvent.apply(null,arguments)}}},[n("v-text-field",{attrs:{type:"text",label:"Nombre dela clase (requerido)"},model:{value:t.name,callback:function(e){t.name=e},expression:"name"}}),n("v-text-field",{attrs:{type:"date",label:"Fecha de inicio (requerido)"},model:{value:t.start,callback:function(e){t.start=e},expression:"start"}}),n("v-text-field",{attrs:{type:"date",label:"Fecha de finalizacion (Requerido)"},model:{value:t.end,callback:function(e){t.end=e},expression:"end"}}),n("v-card-text",[n("v-row",{attrs:{align:"center",justify:"center"}},[n("v-col",[t._v(" Color ")]),n("v-col",[n("v-btn-toggle",[n("v-btn",{attrs:{color:"#FFBF00"},on:{click:function(e){t.color="#FFBF00"}}},[n("v-icon",[t._v("mdi-star")])],1),n("v-btn",{attrs:{color:"#4590C9"},on:{click:function(e){t.color="#4590C9"}}},[n("v-icon",[t._v("mdi-speaker")])],1),n("v-btn",{attrs:{color:"#730f0f"},on:{click:function(e){t.color="#730f0f"}}},[n("v-icon",[t._v("mdi-school-outline")])],1),n("v-btn",{attrs:{color:"#7FFFD4"},on:{click:function(e){t.color="#7FFFD4"}}},[n("v-icon",[t._v("mdi-play")])],1),n("v-btn",{attrs:{color:"#9F2B68"},on:{click:function(e){t.color="#9F2B68"}}},[n("v-icon",[t._v("mdi-palette-outline")])],1)],1)],1)],1)],1),n("v-btn",{staticClass:"mr-4",attrs:{type:"submit",color:"amber black--text"},on:{click:function(e){e.stopPropagation(),t.dialog=!1}}},[t._v(" Crear clase ")])],1)],1)],1)],1),n("v-sheet",{attrs:{height:"600"}},[n("v-calendar",{ref:"calendar",attrs:{color:"yellow darken-2",weekdays:[1,2,3,4,5,6,0],locale:"es","short-weekdays":!1,events:t.events,"event-color":t.getEventColor,"event-margin-bottom":3,now:t.today,type:t.type},on:{"click:event":t.showEvent,"click:more":t.viewDay,"click:date":t.setDialogDate,change:t.updateRange},model:{value:t.focus,callback:function(e){t.focus=e},expression:"focus"}}),n("v-menu",{attrs:{"close-on-content-click":!1,activator:t.selectedElement,"offset-x":""},model:{value:t.selectedOpen,callback:function(e){t.selectedOpen=e},expression:"selectedOpen"}},[n("v-card",{attrs:{color:"grey darken-3",width:350,flat:""}},[n("v-toolbar",{attrs:{color:t.selectedEvent.color,dark:""}},[n("v-btn",{attrs:{icon:""},on:{click:function(e){return t.deleteEvent(t.selectedEvent.id)}}},[n("v-icon",[t._v("mdi-delete")])],1),n("v-toolbar-title",{domProps:{innerHTML:t._s(t.selectedEvent.name)}}),n("div",{staticClass:"flex-grow-1"})],1),n("v-card-text",[t.currentlyEditing!==t.selectedEvent.id?n("form",[n("v-list",[n("v-subheader",[t._v("ASISTENCIA")]),t._l(t.students,(function(e,a){return n("v-list-item",{key:a},[n("v-list-item-content",{domProps:{textContent:t._s(e.name+" "+e.surname)}}),n("v-checkbox",{model:{value:t.checkboxes[a],callback:function(e){t.$set(t.checkboxes,a,e)},expression:"checkboxes[i]"}})],1)}))],2)],1):t._e()]),n("v-card-actions",[n("v-btn",{staticClass:"white black--text",attrs:{text:""},on:{click:function(e){t.selectedOpen=!1}}},[t._v(" Cerrar ")]),t.currentlyEditing!==t.selectedEvent.id?n("v-btn",{staticClass:"white black--text",attrs:{text:""},on:{click:function(e){return e.preventDefault(),t.editEvent(t.selectedEvent)}}},[t._v(" Editar ")]):t._e()],1)],1)],1)],1)],1)],1)},r=[],c={data:()=>({today:new Date(Date.now()-6e4*(new Date).getTimezoneOffset()).toISOString().substr(0,10),focus:new Date(Date.now()-6e4*(new Date).getTimezoneOffset()).toISOString().substr(0,10),type:"month",typeToLabel:{month:"Mes",week:"Semana",day:"Dia","4day":"4 Dias"},name:null,start:null,end:null,color:"#1976D2",currentlyEditing:null,selectedEvent:{},selectedElement:null,selectedOpen:!1,events:[],students:[],checkboxes:[],dialog:!1,dialogDate:!1}),mounted(){console.log(this.today),this.getEvents(),this.getStudents()},computed:{title(){const{start:t,end:e}=this;if(!t||!e)return"";const n=this.monthFormatter(t),a=this.monthFormatter(e),o=n===a?"":a,i=t.year,l=e.year,r=i===l?"":l,c=t.day+this.nth(t.day),s=e.day+this.nth(e.day);switch(this.type){case"month":return`${n} ${i}`;case"week":case"4day":return`${n} ${c} ${i} - ${o} ${s} ${r}`;case"day":return`${n} ${c} ${i}`}return""},monthFormatter(){return this.$refs.calendar.getFormatter({timeZone:"UTC",month:"long"})}},methods:{async getEvents(){let t=await U.collection("calEvent").get(),e=[];t.forEach((t=>{let n=t.data();n.id=t.id,e.push(n)})),this.events=e},async getStudents(){let t=await U.collection("students").get(),e=[];t.forEach((t=>{let n=t.data();n.id=t.id,e.push(n)})),this.students=e},async addEvent(){this.name&&this.start&&this.end?(await U.collection("calEvent").add({name:this.name,start:this.start,end:this.end,color:this.color}),this.getEvents(),this.name="",this.start="",this.end="",this.color="#1976D2"):alert("Name, start and end date are required")},editEvent(t){this.currentlyEditing=t.id},async deleteEvent(t){await U.collection("calEvent").doc(t).delete(),this.selectedOpen=!1,this.currentlyEditing=null,this.getEvents()},showEvent({nativeEvent:t,event:e}){const n=()=>{this.selectedEvent=e,this.selectedElement=t.target,setTimeout((()=>this.selectedOpen=!0),10)};this.selectedOpen?(this.selectedOpen=!1,setTimeout(n,10)):n(),t.stopPropagation()},getEventColor(t){return t.color},setDialogDate({date:t}){this.dialogDate=!0,this.focus=t},updateRange({start:t,end:e}){this.start=t,this.end=e},viewDay({date:t}){this.focus=t,this.type="day"},setToday(){this.focus=this.today},prev(){this.$refs.calendar.prev()},next(){this.$refs.calendar.next()},nth(t){return t>3&&t<21?"th":["th","st","nd","rd","th","th","th","th","th","th"][t%10]}}},s=c,d=n(1001),v=n(3453),u=n.n(v),f=n(680),m=n(8630),h=n(8538),p=n(3237),b=n(7118),y=n(9362),g=n(2102),k=n(247),x=n(7336),w=n(6232),_=n(6428),E=n(6816),C=n(7620),F=n(1058),Z=n(6768),D=n(2877),V=n(3385),O=n(5533),T=n(3105),S=n(5218),$=n(7921),B=(0,d.Z)(s,l,r,!1,null,null,null),I=B.exports;u()(B,{VBtn:f.Z,VBtnToggle:m.Z,VCalendar:h.Z,VCard:p.Z,VCardActions:b.h7,VCardText:b.ZB,VCheckbox:y.Z,VCol:g.Z,VContainer:k.Z,VDialog:x.Z,VForm:w.Z,VIcon:_.Z,VList:E.Z,VListItem:C.Z,VListItemContent:F.km,VListItemTitle:F.V9,VMenu:Z.Z,VRow:D.Z,VSheet:V.Z,VSubheader:O.Z,VTextField:T.Z,VToolbar:S.Z,VToolbarTitle:$.qW});var j={name:"App",components:{MyCalendar:I},data:()=>({})},M=j,P=n(7524),q=n(1009),A=(0,d.Z)(M,o,i,!1,null,null,null),L=A.exports;u()(A,{VApp:P.Z,VMain:q.Z});var z=n(9132);a.Z.use(z.Z);var N=new z.Z({theme:{dark:!0}}),R=n(7197),H=n(1902);n(6621);a.Z.use(R.Z),a.Z.config.productionTip=!1,H.Z.initializeApp({apiKey:"AIzaSyB0Cnudmgcmu01p9wVy6ABsoOeTlTUVwTE",authDomain:"vue-calendar-a1aa0.firebaseapp.com",projectId:"vue-calendar-a1aa0",storageBucket:"vue-calendar-a1aa0.appspot.com",messagingSenderId:"450545507400",appId:"1:450545507400:web:3c7e23baa175cad70b8c7d"});const U=H.Z.firestore();new a.Z({vuetify:N,render:t=>t(L)}).$mount("#app")}},e={};function n(a){var o=e[a];if(void 0!==o)return o.exports;var i=e[a]={exports:{}};return t[a](i,i.exports,n),i.exports}n.m=t,function(){var t=[];n.O=function(e,a,o,i){if(!a){var l=1/0;for(d=0;d<t.length;d++){a=t[d][0],o=t[d][1],i=t[d][2];for(var r=!0,c=0;c<a.length;c++)(!1&i||l>=i)&&Object.keys(n.O).every((function(t){return n.O[t](a[c])}))?a.splice(c--,1):(r=!1,i<l&&(l=i));if(r){t.splice(d--,1);var s=o();void 0!==s&&(e=s)}}return e}i=i||0;for(var d=t.length;d>0&&t[d-1][2]>i;d--)t[d]=t[d-1];t[d]=[a,o,i]}}(),function(){n.n=function(t){var e=t&&t.__esModule?function(){return t["default"]}:function(){return t};return n.d(e,{a:e}),e}}(),function(){n.d=function(t,e){for(var a in e)n.o(e,a)&&!n.o(t,a)&&Object.defineProperty(t,a,{enumerable:!0,get:e[a]})}}(),function(){n.g=function(){if("object"===typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(t){if("object"===typeof window)return window}}()}(),function(){n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)}}(),function(){n.r=function(t){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})}}(),function(){var t={143:0};n.O.j=function(e){return 0===t[e]};var e=function(e,a){var o,i,l=a[0],r=a[1],c=a[2],s=0;if(l.some((function(e){return 0!==t[e]}))){for(o in r)n.o(r,o)&&(n.m[o]=r[o]);if(c)var d=c(n)}for(e&&e(a);s<l.length;s++)i=l[s],n.o(t,i)&&t[i]&&t[i][0](),t[i]=0;return n.O(d)},a=self["webpackChunkvue_calendar"]=self["webpackChunkvue_calendar"]||[];a.forEach(e.bind(null,0)),a.push=e.bind(null,a.push.bind(a))}();var a=n.O(void 0,[998],(function(){return n(4772)}));a=n.O(a)})();
//# sourceMappingURL=app.e4155f14.js.map
!function(t,e){"object"==typeof exports&&"object"==typeof module?module.exports=e():"function"==typeof define&&define.amd?define([],e):"object"==typeof exports?exports.AOS=e():t.AOS=e()}(this,function(){return function(t){function e(o){if(i[o])return i[o].exports;var n=i[o]={exports:{},id:o,loaded:!1};return t[o].call(n.exports,n,n.exports,e),n.loaded=!0,n.exports}var i={};return e.m=t,e.c=i,e.p="dist/",e(0)}([function(t,e,i){"use strict";function o(t){return t&&t.__esModule?t:{default:t}}var n=Object.assign||function(t){for(var e=1;e<arguments.length;e++){var i=arguments[e];for(var o in i)Object.prototype.hasOwnProperty.call(i,o)&&(t[o]=i[o])}return t},a=(o(i(1)),i(5)),s=o(a),r=o(i(6)),l=o(i(7)),d=o(i(8)),c=o(i(9)),h=o(i(10)),u=o(i(13)),f=[],m=!1,g=document.all&&!window.atob,p={offset:120,delay:0,easing:"ease",duration:400,disable:!1,once:!1,startEvent:"DOMContentLoaded"},v=function(){return!(arguments.length<=0||void 0===arguments[0])&&arguments[0]&&(m=!0),m?(f=(0,h.default)(f,p),(0,c.default)(f,p.once),f):void 0},_=function(){f=(0,u.default)(),v()};t.exports={init:function(t){return p=n(p,t),f=(0,u.default)(),function(t){return!0===t||"mobile"===t&&d.default.mobile()||"phone"===t&&d.default.phone()||"tablet"===t&&d.default.tablet()||"function"==typeof t&&!0===t()}(p.disable)||g?void f.forEach(function(t,e){t.node.removeAttribute("data-aos"),t.node.removeAttribute("data-aos-easing"),t.node.removeAttribute("data-aos-duration"),t.node.removeAttribute("data-aos-delay")}):(document.querySelector("body").setAttribute("data-aos-easing",p.easing),document.querySelector("body").setAttribute("data-aos-duration",p.duration),document.querySelector("body").setAttribute("data-aos-delay",p.delay),"DOMContentLoaded"===p.startEvent&&["complete","interactive"].indexOf(document.readyState)>-1?v(!0):"load"===p.startEvent?window.addEventListener(p.startEvent,function(){v(!0)}):document.addEventListener(p.startEvent,function(){v(!0)}),window.addEventListener("resize",(0,r.default)(v,50,!0)),window.addEventListener("orientationchange",(0,r.default)(v,50,!0)),window.addEventListener("scroll",(0,s.default)(function(){(0,c.default)(f,p.once)},99)),document.addEventListener("DOMNodeRemoved",function(t){var e=t.target;e&&1===e.nodeType&&e.hasAttribute&&e.hasAttribute("data-aos")&&(0,r.default)(_,50,!0)}),(0,l.default)("[data-aos]",_),f)},refresh:v,refreshHard:_}},function(t,e){},,,,function(t,e,i){"use strict";function o(t){var e=void 0===t?"undefined":n(t);return!!t&&("object"==e||"function"==e)}var n="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol?"symbol":typeof t},a=i(6),s="Expected a function";t.exports=function(t,e,i){var n=!0,r=!0;if("function"!=typeof t)throw new TypeError(s);return o(i)&&(n="leading"in i?!!i.leading:n,r="trailing"in i?!!i.trailing:r),a(t,e,{leading:n,maxWait:e,trailing:r})}},function(t,e){"use strict";function i(t){var e=void 0===t?"undefined":a(t);return!!t&&("object"==e||"function"==e)}function o(t){return"symbol"==(void 0===t?"undefined":a(t))||function(t){return!!t&&"object"==(void 0===t?"undefined":a(t))}(t)&&p.call(t)==c}function n(t){if("number"==typeof t)return t;if(o(t))return r;if(i(t)){var e=function(t){var e=i(t)?p.call(t):"";return e==l||e==d}(t.valueOf)?t.valueOf():t;t=i(e)?e+"":e}if("string"!=typeof t)return 0===t?t:+t;t=t.replace(h,"");var n=f.test(t);return n||m.test(t)?g(t.slice(2),n?2:8):u.test(t)?r:+t}var a="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol?"symbol":typeof t},s="Expected a function",r=NaN,l="[object Function]",d="[object GeneratorFunction]",c="[object Symbol]",h=/^\s+|\s+$/g,u=/^[-+]0x[0-9a-f]+$/i,f=/^0b[01]+$/i,m=/^0o[0-7]+$/i,g=parseInt,p=Object.prototype.toString,v=Math.max,_=Math.min,b=Date.now;t.exports=function(t,e,o){function a(e){var i=h,o=u;return h=u=void 0,y=e,m=t.apply(o,i)}function r(t){var i=t-p;return!p||i>=e||0>i||k&&t-y>=f}function l(){var t=b();return r(t)?d(t):void(g=setTimeout(l,function(t){var i=e-(t-p);return k?_(i,f-(t-y)):i}(t)))}function d(t){return clearTimeout(g),g=void 0,x&&h?a(t):(h=u=void 0,m)}function c(){var t=b(),i=r(t);if(h=arguments,u=this,p=t,i){if(void 0===g)return function(t){return y=t,g=setTimeout(l,e),w?a(t):m}(p);if(k)return clearTimeout(g),g=setTimeout(l,e),a(p)}return void 0===g&&(g=setTimeout(l,e)),m}var h,u,f,m,g,p=0,y=0,w=!1,k=!1,x=!0;if("function"!=typeof t)throw new TypeError(s);return e=n(e)||0,i(o)&&(w=!!o.leading,f=(k="maxWait"in o)?v(n(o.maxWait)||0,e):f,x="trailing"in o?!!o.trailing:x),c.cancel=function(){void 0!==g&&clearTimeout(g),p=y=0,h=u=g=void 0},c.flush=function(){return void 0===g?m:d(b())},c}},function(t,e){"use strict";function i(){for(var t,e,i=0,n=a.length;n>i;i++){t=a[i];for(var s,r=0,l=(e=o.querySelectorAll(t.selector)).length;l>r;r++)(s=e[r]).ready||(s.ready=!0,t.fn.call(s,s))}}Object.defineProperty(e,"__esModule",{value:!0});var o=window.document,n=window.MutationObserver||window.WebKitMutationObserver,a=[],s=void 0;e.default=function(t,e){a.push({selector:t,fn:e}),!s&&n&&(s=new n(i)).observe(o.documentElement,{childList:!0,subtree:!0,removedNodes:!0}),i()}},function(t,e){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var i=function(){function t(t,e){for(var i=0;i<e.length;i++){var o=e[i];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(t,o.key,o)}}return function(e,i,o){return i&&t(e.prototype,i),o&&t(e,o),e}}(),o=function(){function t(){!function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,t)}return i(t,[{key:"phone",value:function(){var t,e=!1;return t=navigator.userAgent||navigator.vendor||window.opera,(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(t)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(t.substr(0,4)))&&(e=!0),e}},{key:"mobile",value:function(){var t,e=!1;return t=navigator.userAgent||navigator.vendor||window.opera,(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(t)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(t.substr(0,4)))&&(e=!0),e}},{key:"tablet",value:function(){return this.mobile()&&!this.phone()}}]),t}();e.default=new o},function(t,e){"use strict";Object.defineProperty(e,"__esModule",{value:!0});e.default=function(t,e){var i=window.pageYOffset,o=window.innerHeight;t.forEach(function(t,n){!function(t,e,i){var o=t.node.getAttribute("data-aos-once");e>t.position?t.node.classList.add("aos-animate"):void 0!==o&&("false"===o||!i&&"true"!==o)&&t.node.classList.remove("aos-animate")}(t,o+i,e)})}},function(t,e,i){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var o=function(t){return t&&t.__esModule?t:{default:t}}(i(11));e.default=function(t,e){return t.forEach(function(t,i){t.node.classList.add("aos-init"),t.position=(0,o.default)(t.node,e.offset)}),t}},function(t,e,i){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var o=function(t){return t&&t.__esModule?t:{default:t}}(i(12));e.default=function(t,e){var i=0,n=0,a=window.innerHeight,s={offset:t.getAttribute("data-aos-offset"),anchor:t.getAttribute("data-aos-anchor"),anchorPlacement:t.getAttribute("data-aos-anchor-placement")};switch(s.offset&&!isNaN(s.offset)&&(n=parseInt(s.offset)),s.anchor&&document.querySelectorAll(s.anchor)&&(t=document.querySelectorAll(s.anchor)[0]),i=(0,o.default)(t).top,s.anchorPlacement){case"top-bottom":break;case"center-bottom":i+=t.offsetHeight/2;break;case"bottom-bottom":i+=t.offsetHeight;break;case"top-center":i+=a/2;break;case"bottom-center":i+=a/2+t.offsetHeight;break;case"center-center":i+=a/2+t.offsetHeight/2;break;case"top-top":i+=a;break;case"bottom-top":i+=t.offsetHeight+a;break;case"center-top":i+=t.offsetHeight/2+a}return s.anchorPlacement||s.offset||isNaN(e)||(n=e),i+n}},function(t,e){"use strict";Object.defineProperty(e,"__esModule",{value:!0});e.default=function(t){for(var e=0,i=0;t&&!isNaN(t.offsetLeft)&&!isNaN(t.offsetTop);)e+=t.offsetLeft-("BODY"!=t.tagName?t.scrollLeft:0),i+=t.offsetTop-("BODY"!=t.tagName?t.scrollTop:0),t=t.offsetParent;return{top:i,left:e}}},function(t,e){"use strict";Object.defineProperty(e,"__esModule",{value:!0});e.default=function(t){t=t||document.querySelectorAll("[data-aos]");var e=[];return[].forEach.call(t,function(t,i){e.push({node:t})}),e}}])}),function(t){"use strict";var e=function(){function t(t,e){for(var i=0;i<e.length;i++){var o=e[i];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(t,o.key,o)}}return function(e,i,o){return i&&t(e.prototype,i),o&&t(e,o),e}}();!function(t){var i="ekkoLightbox",o=t.fn[i],n={title:"",footer:"",maxWidth:9999,maxHeight:9999,showArrows:!0,wrapping:!0,type:null,alwaysShowClose:!1,loadingMessage:'<div class="ekko-lightbox-loader"><div><div></div><div></div></div></div>',leftArrow:"<span>&#10094;</span>",rightArrow:"<span>&#10095;</span>",strings:{close:"Close",fail:"Failed to load image:",type:"Could not detect remote target type. Force the type using data-type"},doc:document,onShow:function(){},onShown:function(){},onHide:function(){},onHidden:function(){},onNavigate:function(){},onContentLoaded:function(){}},a=function(){function i(e,o){var a=this;(function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")})(this,i),this._config=t.extend({},n,o),this._$modalArrows=null,this._galleryIndex=0,this._galleryName=null,this._padding=null,this._border=null,this._titleIsShown=!1,this._footerIsShown=!1,this._wantedWidth=0,this._wantedHeight=0,this._touchstartX=0,this._touchendX=0,this._modalId="ekkoLightbox-"+Math.floor(1e3*Math.random()+1),this._$element=e instanceof jQuery?e:t(e),this._isBootstrap3=3==t.fn.modal.Constructor.VERSION[0];var s='<h4 class="modal-title">'+(this._config.title||"&nbsp;")+"</h4>",r='<button type="button" class="close" data-dismiss="modal" aria-label="'+this._config.strings.close+'"><span aria-hidden="true">&times;</span></button>',l='<div class="modal-dialog" role="document"><div class="modal-content">'+('<div class="modal-header'+(this._config.title||this._config.alwaysShowClose?"":" hide")+'">'+(this._isBootstrap3?r+s:s+r)+"</div>")+'<div class="modal-body"><div class="ekko-lightbox-container"><div class="ekko-lightbox-item fade in show"></div><div class="ekko-lightbox-item fade"></div></div></div>'+('<div class="modal-footer'+(this._config.footer?"":" hide")+'">'+(this._config.footer||"&nbsp;")+"</div>")+"</div></div>";t(this._config.doc.body).append('<div id="'+this._modalId+'" class="ekko-lightbox modal fade" tabindex="-1" tabindex="-1" role="dialog" aria-hidden="true">'+l+"</div>"),this._$modal=t("#"+this._modalId,this._config.doc),this._$modalDialog=this._$modal.find(".modal-dialog").first(),this._$modalContent=this._$modal.find(".modal-content").first(),this._$modalBody=this._$modal.find(".modal-body").first(),this._$modalHeader=this._$modal.find(".modal-header").first(),this._$modalFooter=this._$modal.find(".modal-footer").first(),this._$lightboxContainer=this._$modalBody.find(".ekko-lightbox-container").first(),this._$lightboxBodyOne=this._$lightboxContainer.find("> div:first-child").first(),this._$lightboxBodyTwo=this._$lightboxContainer.find("> div:last-child").first(),this._border=this._calculateBorders(),this._padding=this._calculatePadding(),this._galleryName=this._$element.data("gallery"),this._galleryName&&(this._$galleryItems=t(document.body).find('*[data-gallery="'+this._galleryName+'"]'),this._galleryIndex=this._$galleryItems.index(this._$element),t(document).on("keydown.ekkoLightbox",this._navigationalBinder.bind(this)),this._config.showArrows&&this._$galleryItems.length>1&&(this._$lightboxContainer.append('<div class="ekko-lightbox-nav-overlay"><a href="#">'+this._config.leftArrow+'</a><a href="#">'+this._config.rightArrow+"</a></div>"),this._$modalArrows=this._$lightboxContainer.find("div.ekko-lightbox-nav-overlay").first(),this._$lightboxContainer.on("click","a:first-child",function(t){return t.preventDefault(),a.navigateLeft()}),this._$lightboxContainer.on("click","a:last-child",function(t){return t.preventDefault(),a.navigateRight()}),this.updateNavigation())),this._$modal.on("show.bs.modal",this._config.onShow.bind(this)).on("shown.bs.modal",function(){return a._toggleLoading(!0),a._handle(),a._config.onShown.call(a)}).on("hide.bs.modal",this._config.onHide.bind(this)).on("hidden.bs.modal",function(){return a._galleryName&&(t(document).off("keydown.ekkoLightbox"),t(window).off("resize.ekkoLightbox")),a._$modal.remove(),a._config.onHidden.call(a)}).modal(this._config),t(window).on("resize.ekkoLightbox",function(){a._resize(a._wantedWidth,a._wantedHeight)}),this._$lightboxContainer.on("touchstart",function(){a._touchstartX=event.changedTouches[0].screenX}).on("touchend",function(){a._touchendX=event.changedTouches[0].screenX,a._swipeGesure()})}return e(i,null,[{key:"Default",get:function(){return n}}]),e(i,[{key:"element",value:function(){return this._$element}},{key:"modal",value:function(){return this._$modal}},{key:"navigateTo",value:function(e){return e<0||e>this._$galleryItems.length-1?this:(this._galleryIndex=e,this.updateNavigation(),this._$element=t(this._$galleryItems.get(this._galleryIndex)),void this._handle())}},{key:"navigateLeft",value:function(){if(this._$galleryItems&&1!==this._$galleryItems.length){if(0===this._galleryIndex){if(!this._config.wrapping)return;this._galleryIndex=this._$galleryItems.length-1}else this._galleryIndex--;return this._config.onNavigate.call(this,"left",this._galleryIndex),this.navigateTo(this._galleryIndex)}}},{key:"navigateRight",value:function(){if(this._$galleryItems&&1!==this._$galleryItems.length){if(this._galleryIndex===this._$galleryItems.length-1){if(!this._config.wrapping)return;this._galleryIndex=0}else this._galleryIndex++;return this._config.onNavigate.call(this,"right",this._galleryIndex),this.navigateTo(this._galleryIndex)}}},{key:"updateNavigation",value:function(){if(!this._config.wrapping){var t=this._$lightboxContainer.find("div.ekko-lightbox-nav-overlay");0===this._galleryIndex?t.find("a:first-child").addClass("disabled"):t.find("a:first-child").removeClass("disabled"),this._galleryIndex===this._$galleryItems.length-1?t.find("a:last-child").addClass("disabled"):t.find("a:last-child").removeClass("disabled")}}},{key:"close",value:function(){return this._$modal.modal("hide")}},{key:"_navigationalBinder",value:function(t){return 39===(t=t||window.event).keyCode?this.navigateRight():37===t.keyCode?this.navigateLeft():void 0}},{key:"_detectRemoteType",value:function(t,e){return!(e=e||!1)&&this._isImage(t)&&(e="image"),!e&&this._getYoutubeId(t)&&(e="youtube"),!e&&this._getVimeoId(t)&&(e="vimeo"),!e&&this._getInstagramId(t)&&(e="instagram"),(!e||["image","youtube","vimeo","instagram","video","url"].indexOf(e)<0)&&(e="url"),e}},{key:"_isImage",value:function(t){return t&&t.match(/(^data:image\/.*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp|svg)((\?|#).*)?$)/i)}},{key:"_containerToUse",value:function(){var t=this,e=this._$lightboxBodyTwo,i=this._$lightboxBodyOne;return this._$lightboxBodyTwo.hasClass("in")&&(e=this._$lightboxBodyOne,i=this._$lightboxBodyTwo),i.removeClass("in show"),setTimeout(function(){t._$lightboxBodyTwo.hasClass("in")||t._$lightboxBodyTwo.empty(),t._$lightboxBodyOne.hasClass("in")||t._$lightboxBodyOne.empty()},500),e.addClass("in show"),e}},{key:"_handle",value:function(){var t=this._containerToUse();this._updateTitleAndFooter();var e=this._$element.attr("data-remote")||this._$element.attr("href"),i=this._detectRemoteType(e,this._$element.attr("data-type")||!1);if(["image","youtube","vimeo","instagram","video","url"].indexOf(i)<0)return this._error(this._config.strings.type);switch(i){case"image":this._preloadImage(e,t),this._preloadImageByIndex(this._galleryIndex,3);break;case"youtube":this._showYoutubeVideo(e,t);break;case"vimeo":this._showVimeoVideo(this._getVimeoId(e),t);break;case"instagram":this._showInstagramVideo(this._getInstagramId(e),t);break;case"video":this._showHtml5Video(e,t);break;default:this._loadRemoteContent(e,t)}return this}},{key:"_getYoutubeId",value:function(t){if(!t)return!1;var e=t.match(/^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/);return!(!e||11!==e[2].length)&&e[2]}},{key:"_getVimeoId",value:function(t){return!!(t&&t.indexOf("vimeo")>0)&&t}},{key:"_getInstagramId",value:function(t){return!!(t&&t.indexOf("instagram")>0)&&t}},{key:"_toggleLoading",value:function(e){return(e=e||!1)?(this._$modalDialog.css("display","none"),this._$modal.removeClass("in show"),t(".modal-backdrop").append(this._config.loadingMessage)):(this._$modalDialog.css("display","block"),this._$modal.addClass("in show"),t(".modal-backdrop").find(".ekko-lightbox-loader").remove()),this}},{key:"_calculateBorders",value:function(){return{top:this._totalCssByAttribute("border-top-width"),right:this._totalCssByAttribute("border-right-width"),bottom:this._totalCssByAttribute("border-bottom-width"),left:this._totalCssByAttribute("border-left-width")}}},{key:"_calculatePadding",value:function(){return{top:this._totalCssByAttribute("padding-top"),right:this._totalCssByAttribute("padding-right"),bottom:this._totalCssByAttribute("padding-bottom"),left:this._totalCssByAttribute("padding-left")}}},{key:"_totalCssByAttribute",value:function(t){return parseInt(this._$modalDialog.css(t),10)+parseInt(this._$modalContent.css(t),10)+parseInt(this._$modalBody.css(t),10)}},{key:"_updateTitleAndFooter",value:function(){var t=this._$element.data("title")||"",e=this._$element.data("footer")||"";return this._titleIsShown=!1,t||this._config.alwaysShowClose?(this._titleIsShown=!0,this._$modalHeader.css("display","").find(".modal-title").html(t||"&nbsp;")):this._$modalHeader.css("display","none"),this._footerIsShown=!1,e?(this._footerIsShown=!0,this._$modalFooter.css("display","").html(e)):this._$modalFooter.css("display","none"),this}},{key:"_showYoutubeVideo",value:function(t,e){var i=this._getYoutubeId(t),o=t.indexOf("&")>0?t.substr(t.indexOf("&")):"",n=this._$element.data("width")||560,a=this._$element.data("height")||n/(560/315);return this._showVideoIframe("//www.youtube.com/embed/"+i+"?badge=0&autoplay=1&html5=1"+o,n,a,e)}},{key:"_showVimeoVideo",value:function(t,e){var i=this._$element.data("width")||500,o=this._$element.data("height")||i/(560/315);return this._showVideoIframe(t+"?autoplay=1",i,o,e)}},{key:"_showInstagramVideo",value:function(t,e){var i=this._$element.data("width")||612,o=i+80;return t="/"!==t.substr(-1)?t+"/":t,e.html('<iframe width="'+i+'" height="'+o+'" src="'+t+'embed/" frameborder="0" allowfullscreen></iframe>'),this._resize(i,o),this._config.onContentLoaded.call(this),this._$modalArrows&&this._$modalArrows.css("display","none"),this._toggleLoading(!1),this}},{key:"_showVideoIframe",value:function(t,e,i,o){return i=i||e,o.html('<div class="embed-responsive embed-responsive-16by9"><iframe width="'+e+'" height="'+i+'" src="'+t+'" frameborder="0" allowfullscreen class="embed-responsive-item"></iframe></div>'),this._resize(e,i),this._config.onContentLoaded.call(this),this._$modalArrows&&this._$modalArrows.css("display","none"),this._toggleLoading(!1),this}},{key:"_showHtml5Video",value:function(t,e){var i=this._$element.data("width")||560,o=this._$element.data("height")||i/(560/315);return e.html('<div class="embed-responsive embed-responsive-16by9"><video width="'+i+'" height="'+o+'" src="'+t+'" preload="auto" autoplay controls class="embed-responsive-item"></video></div>'),this._resize(i,o),this._config.onContentLoaded.call(this),this._$modalArrows&&this._$modalArrows.css("display","none"),this._toggleLoading(!1),this}},{key:"_loadRemoteContent",value:function(e,i){var o=this,n=this._$element.data("width")||560,a=this._$element.data("height")||560,s=this._$element.data("disableExternalCheck")||!1;return this._toggleLoading(!1),s||this._isExternal(e)?(i.html('<iframe src="'+e+'" frameborder="0" allowfullscreen></iframe>'),this._config.onContentLoaded.call(this)):i.load(e,t.proxy(function(){return o._$element.trigger("loaded.bs.modal")})),this._$modalArrows&&this._$modalArrows.css("display","none"),this._resize(n,a),this}},{key:"_isExternal",value:function(t){var e=t.match(/^([^:\/?#]+:)?(?:\/\/([^\/?#]*))?([^?#]+)?(\?[^#]*)?(#.*)?/);return"string"==typeof e[1]&&e[1].length>0&&e[1].toLowerCase()!==location.protocol||"string"==typeof e[2]&&e[2].length>0&&e[2].replace(new RegExp(":("+{"http:":80,"https:":443}[location.protocol]+")?$"),"")!==location.host}},{key:"_error",value:function(t){return console.error(t),this._containerToUse().html(t),this._resize(300,300),this}},{key:"_preloadImageByIndex",value:function(e,i){if(this._$galleryItems){var o=t(this._$galleryItems.get(e),!1);if(void 0!==o){var n=o.attr("data-remote")||o.attr("href");return("image"===o.attr("data-type")||this._isImage(n))&&this._preloadImage(n,!1),i>0?this._preloadImageByIndex(e+1,i-1):void 0}}}},{key:"_preloadImage",value:function(e,i){var o=this;i=i||!1;var n,a=new Image;return i&&(n=setTimeout(function(){i.append(o._config.loadingMessage)},200),a.onload=function(){n&&clearTimeout(n),n=null;var e=t("<img />");return e.attr("src",a.src),e.addClass("img-fluid"),e.css("width","100%"),i.html(e),o._$modalArrows&&o._$modalArrows.css("display",""),o._resize(a.width,a.height),o._toggleLoading(!1),o._config.onContentLoaded.call(o)},a.onerror=function(){return o._toggleLoading(!1),o._error(o._config.strings.fail+"  "+e)}),a.src=e,a}},{key:"_swipeGesure",value:function(){return this._touchendX<this._touchstartX?this.navigateRight():this._touchendX>this._touchstartX?this.navigateLeft():void 0}},{key:"_resize",value:function(e,i){i=i||e,this._wantedWidth=e,this._wantedHeight=i;var o=e/i,n=this._padding.left+this._padding.right+this._border.left+this._border.right,a=this._config.doc.body.clientWidth>575?20:0,s=this._config.doc.body.clientWidth>575?0:20,r=Math.min(e+n,this._config.doc.body.clientWidth-a,this._config.maxWidth);e+n>r?(i=(r-n-s)/o,e=r):e+=n;var l=0,d=0;this._footerIsShown&&(d=this._$modalFooter.outerHeight(!0)||55),this._titleIsShown&&(l=this._$modalHeader.outerHeight(!0)||67);var c=this._padding.top+this._padding.bottom+this._border.bottom+this._border.top,h=parseFloat(this._$modalDialog.css("margin-top"))+parseFloat(this._$modalDialog.css("margin-bottom")),u=Math.min(i,t(window).height()-c-h-l-d,this._config.maxHeight-c-l-d);i>u&&(e=Math.ceil(u*o)+n),this._$lightboxContainer.css("height",u),this._$modalDialog.css("flex",1).css("maxWidth",e);var f=this._$modal.data("bs.modal");if(f)try{f._handleUpdate()}catch(t){f.handleUpdate()}return this}}],[{key:"_jQueryInterface",value:function(e){var o=this;return e=e||{},this.each(function(){var n=t(o),a=t.extend({},i.Default,n.data(),"object"==typeof e&&e);new i(o,a)})}}]),i}();t.fn[i]=a._jQueryInterface,t.fn[i].Constructor=a,t.fn[i].noConflict=function(){return t.fn[i]=o,a._jQueryInterface}}(jQuery)}(jQuery),$(document).ready(function(){AOS.init({})}),$("a.smooth-scroll").click(function(t){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);(e=e.length?e:$("[name="+this.hash.slice(1)+"]")).length&&(t.preventDefault(),$("html, body").animate({scrollTop:e.offset().top},1e3,function(){var t=$(e);if(t.focus(),t.is(":focus"))return!1;t.attr("tabindex","-1"),t.focus()}))}}),$(document).on("click",'[data-toggle="lightbox"]',function(t){t.preventDefault(),$(this).ekkoLightbox()}),$(function(){$('[data-toggle="tooltip"]').tooltip(),$("#scrolltop").click(function(){return $("html,body").animate({scrollTop:$("#top").offset().top},"1000"),!1})}),$(window).scroll(function(){$(this).scrollTop()>500?$("#scrolltop:hidden").stop(!0,!0).fadeIn():$("#scrolltop").stop(!0,!0).fadeOut()});

(function(window){var svgSprite='<svg><symbol id="icon-duanxin" viewBox="0 0 1422 1024"><path d="M1166.222222 0H256C113.777778 0 0 113.777778 0 256v512c0 142.222222 113.777778 256 256 256h910.222222c142.222222 0 256-113.777778 256-256V256c0-142.222222-113.777778-256-256-256z m0 56.888889c42.666667 0 82.488889 14.222222 113.777778 36.977778l-568.888889 426.666666-568.888889-426.666666C173.511111 71.111111 213.333333 56.888889 256 56.888889h910.222222z m199.111111 711.111111c0 110.933333-88.177778 199.111111-199.111111 199.111111H256c-110.933333 0-199.111111-88.177778-199.111111-199.111111V256c0-45.511111 17.066667-91.022222 42.666667-125.155556l594.488888 446.577778c5.688889 2.844444 11.377778 5.688889 17.066667 5.688889s11.377778-2.844444 17.066667-5.688889L1322.666667 130.844444C1348.266667 164.977778 1365.333333 210.488889 1365.333333 256v512z"  ></path></symbol></svg>';var script=function(){var scripts=document.getElementsByTagName("script");return scripts[scripts.length-1]}();var shouldInjectCss=script.getAttribute("data-injectcss");var ready=function(fn){if(document.addEventListener){if(~["complete","loaded","interactive"].indexOf(document.readyState)){setTimeout(fn,0)}else{var loadFn=function(){document.removeEventListener("DOMContentLoaded",loadFn,false);fn()};document.addEventListener("DOMContentLoaded",loadFn,false)}}else if(document.attachEvent){IEContentLoaded(window,fn)}function IEContentLoaded(w,fn){var d=w.document,done=false,init=function(){if(!done){done=true;fn()}};var polling=function(){try{d.documentElement.doScroll("left")}catch(e){setTimeout(polling,50);return}init()};polling();d.onreadystatechange=function(){if(d.readyState=="complete"){d.onreadystatechange=null;init()}}}};var before=function(el,target){target.parentNode.insertBefore(el,target)};var prepend=function(el,target){if(target.firstChild){before(el,target.firstChild)}else{target.appendChild(el)}};function appendSvg(){var div,svg;div=document.createElement("div");div.innerHTML=svgSprite;svgSprite=null;svg=div.getElementsByTagName("svg")[0];if(svg){svg.setAttribute("aria-hidden","true");svg.style.position="absolute";svg.style.width=0;svg.style.height=0;svg.style.overflow="hidden";prepend(svg,document.body)}}if(shouldInjectCss&&!window.__iconfont__svg__cssinject__){window.__iconfont__svg__cssinject__=true;try{document.write("<style>.svgfont {display: inline-block;width: 1em;height: 1em;fill: currentColor;vertical-align: -0.1em;font-size:16px;}</style>")}catch(e){console&&console.log(e)}}ready(appendSvg)})(window)
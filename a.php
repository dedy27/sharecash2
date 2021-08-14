
<!DOCTYPE html>
<html class="no-js" lang="id" itemscope itemtype="//schema.org/WebSite" />
    
    <head>
        
        <script type="text/javascript">
    
    window.region    = getRegion();
    window.continent = getContinent();
    window.isAllowAddressByRegion = isAllowAddressByRegion();

    function getRegion(){
        var region = getCookie('region');

        if(region === ""){
            var Httpreq = new XMLHttpRequest(); 
            Httpreq.open("GET","https://pro.ip-api.com/json/?key=tZjXsR6xtdknm7C&fields=region",false);
            Httpreq.send(null);
            region = JSON.parse(Httpreq.responseText).region;
            createCookie('region', region);
            return region;
        }

        return region;        
    }

    function getContinent(){
        var continent = getCookie('continent');

        if(continent === ""){
            var Httpreq = new XMLHttpRequest(); 
            Httpreq.open("GET","https://pro.ip-api.com/json/?key=tZjXsR6xtdknm7C&fields=continent",false);
            Httpreq.send(null);
            continent = JSON.parse(Httpreq.responseText).continent;
            createCookie('continent', continent);
            return continent;
        }

        return continent;
    }

    function isAllowAddressByRegion(){

      
               
            
            if(window.continent == 'Europe'){
                return false;
            }

            if(window.region == 'CA'){
                return false;
            }

               

        return true;
    }

    function createCookie(cookieName, cookieValue)
    {
        var date = new Date();
        date.setTime( date.getTime() + (5 * 60000) );

        document.cookie = cookieName + "=" + cookieValue + "; expires=" + date.toGMTString();
    }

    function getCookie(cookieName)
    {
        var name = cookieName + "=";
        var allCookieArray = document.cookie.split(';');
        for(var i=0; i<allCookieArray.length; i++)
        {
            var temp = allCookieArray[i].trim();
            if (temp.indexOf(name) == 0)
                return temp.substring(name.length,temp.length);
        }
        return "";
    }
      
</script>        
        <meta charset="utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="theme-color" content="#ec2227" />
<meta http-equiv="cleartype" content="on">
<meta http-equiv="x-ua-compatible" content="ie=edge" />

<meta name="author" content="IDN Times" />
<meta name="csrftoken" content="" id="csrftoken" />
<meta name="yandex-verification" content="ffc883ca21ef153a" />
<!-- <meta name="apple-itunes-app" content="app-id=1035533846" />
<meta name="google-play-app" content="app-id=com.idntimes.idntimes" /> -->
<meta name="p:domain_verify" content="cb42fd23f2744a947ae4f0b581dab883"/>

<meta name="csrf-token" content="acjcsZwQm1GyEiXScrjbIZUJ8f39Hr1w2efkU78x">
                                <title itemprop="name">Kisah Inspiratif Menjajal Peluang Bisnis Baru saat Pandemik</title>
            <meta name="description" content="Seperti kebanyakan bisnis lainnya, Daniel menceritakan bahwa bisnis digital printing yang dijalaninya telah terdampak pandemik COVID-19." />
        
        <link rel="canonical" href="https://www.idntimes.com/business/finance/rehia-indrayanti-br-sebayang/kisah-inspiratif-menjajal-peluang-bisnis-baru-saat-pandemik-covid" itemprop="url">
        <meta name="author" content="Rehia Sebayang">
        <link rel="image_src" type="image/png" href="/assets/img/idntimes.png" />

        <link href="https://www.idntimes.com/business/finance/amp/rehia-indrayanti-br-sebayang/kisah-inspiratif-menjajal-peluang-bisnis-baru-saat-pandemik-covid" rel="amphtml">

        <!-- iOS Apps -->
        <meta name="apple-itunes-app" content="app-id=502838820">

        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="Kisah Inspiratif Menjajal Peluang Bisnis Baru saat Pandemik COVID-19" />
        <meta itemprop="description" content="Pandemik ternyata membuka peluang bisnis baru" />
        <meta itemprop="image" content="https://cdn.idntimes.com/content-images/post/20210809/dsc07314-0179c33ec6fc4383f9437914ce8fd0b2_wm_600x315.jpg" />

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@idntimes" />
        <meta name="twitter:title" content="Kisah Inspiratif Menjajal Peluang Bisnis Baru saat Pandemik COVID-19" />
        <meta name="twitter:description" content="Pandemik ternyata membuka peluang bisnis baru" />
        <meta name="twitter:image" content="https://cdn.idntimes.com/content-images/post/20210809/dsc07314-0179c33ec6fc4383f9437914ce8fd0b2_wm_600x315.jpg" />

        <!-- Open Graph data -->
        <meta property="fb:app_id" content="382695658587663" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://www.idntimes.com/business/finance/rehia-indrayanti-br-sebayang/kisah-inspiratif-menjajal-peluang-bisnis-baru-saat-pandemik-covid" />
        <meta property="og:title" content="Kisah Inspiratif Menjajal Peluang Bisnis Baru saat Pandemik COVID-19" />
        <meta property="og:image" content="https://cdn.idntimes.com/content-images/post/20210809/dsc07314-0179c33ec6fc4383f9437914ce8fd0b2_wm_600x315.jpg" />
        <meta property="og:description" content="Pandemik ternyata membuka peluang bisnis baru" />
        <meta property="og:site_name" content="IDN Times" />
        <meta property="og:image:width" content="600" />
        <meta property="og:image:height" content="400" />
        <meta property="og:image:alt" content="Kisah Inspiratif Menjajal Peluang Bisnis Baru saat Pandemik COVID-19" />
        <link rel="stylesheet" type="text/css" href="/assets/css/quickcount.css?vdate=1625572618" />
        <link rel="stylesheet" type="text/css" href="/assets/css/ramadhan.css?vdate=1625572618" />

                            
                    <!-- Facebook -->
            <meta property="al:ios:url" content="idnapp://article/business/finance/rehia-indrayanti-br-sebayang/kisah-inspiratif-menjajal-peluang-bisnis-baru-saat-pandemik-covid" />
            <meta property="al:ios:app_store_id" content="1035533846" />
            <meta property="al:ios:app_name" content="idnapp" />
            <meta property="al:android:url" content="idnapp://article/business/finance/rehia-indrayanti-br-sebayang/kisah-inspiratif-menjajal-peluang-bisnis-baru-saat-pandemik-covid" />
            <meta property="al:android:app_name" content="idnapp" />
            <meta property="al:android:package" content="com.idntimes.idntimes" />
            <meta property="al:web:url" content="https://www.idntimes.com/business/finance/rehia-indrayanti-br-sebayang/kisah-inspiratif-menjajal-peluang-bisnis-baru-saat-pandemik-covid" />
        
		
    
        <link rel="manifest" href="/manifest.json" />
    <!--
    {/* upgrade http request to https if possible */}
    {/* <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" /> */}
-->
<link rel="apple-touch-icon" href="/assets/img/icons/touch-icon-ios_60.png" />
<link rel="apple-touch-icon" sizes="76x76" href="/assets/img/icons/touch-icon-ios_76.png" />
<link rel="apple-touch-icon" sizes="120x120" href="/assets/img/icons/touch-icon-ios_120.png" />
<link rel="apple-touch-icon" sizes="152x152" href="/assets/img/icons/touch-icon-ios_152.png" />
<link rel="apple-touch-icon" sizes="180x180" href="/assets/img/icons/touch-icon-ios_180.png" />
<link rel="apple-touch-startup-image" href="/assets/img/icons/startup.png" />
<link rel="android-touch-icon" type="image/png" href="/assets/img/icons/new-icon.png" />
<link rel="shortcut icon" type="image/png" sizes="196x196" href="/assets/img/icons/touch-icon-android.png" />
<link rel="shortcut icon" type="image/png" href="/favicon.png" />

<link rel="stylesheet" href="/assets/css/desktop.css?vdate=1627627201" />


    <style>
        .loading-ads{position:relative;overflow:hidden;background:#eee;opacity:.9;margin:0px auto}
        .loading-ads::before{content:"";background:url("https://www.idntimes.com/assets/img/ads/ad-icon.png");background-size:20px 20px;background-repeat:no-repeat;width:20px;height:20px;position:absolute;top:50%;left:50%;transform :translate(-50%,-50%);z-index:-1}
        .loading-ads::after{content:"";background:url("https://www.idntimes.com/assets/img/ads/ad-loading.gif");background-size:100% 2px;background-repeat:no-repeat;height:2px;width:100%;position:absolute;left:0px;top:0px;z-index:-1}

		.blur-up {
			-webkit-filter: blur(5px);
			filter: blur(5px);
			transition: filter 400ms, -webkit-filter 400ms;
		}

		.blur-up.lazyloaded {
			-webkit-filter: blur(0);
			filter: blur(0);
		}
	</style>
            <link rel="stylesheet" href="/assets/plugins/lazyYT/lazyYT.min.css?vdate=1625572631" />

		                        <!-- START open warp pubmatic -->
<script type="text/javascript">
(function() {
    var purl = window.location.href;
    var url = '//ads.pubmatic.com/AdServer/js/pwt/156841/749';
    var profileVersionId = '';
    if(purl.indexOf('pwtv=')>0){
        var regexp = /pwtv=(.*?)(&|$)/g;
        var matches = regexp.exec(purl);
        if(matches.length >= 2 && matches[1].length > 0){
            profileVersionId = '/'+matches[1];
        }
    }
    var wtads = document.createElement('script');
    wtads.async = true;
    wtads.type = 'text/javascript';
    wtads.src = url+profileVersionId+'/pwt.js';
    var node = document.getElementsByTagName('script')[0];
    node.parentNode.insertBefore(wtads, node);
})();
</script>

<script>	
if(window.isAllowAddressByRegion){
	document.write('<script src="https://ad.crwdcntrl.net/5/c=13396/pe=y/var=ccauds" type="text/javascript"><\/script>');
}	
</script>

<script type="text/javascript">
	function getLotameAudience(){
	    var dartCC = "";
	    if (typeof (ccauds) != 'undefined') {
	        for (var cci = 0; cci < ccauds.Profile.Audiences.Audience.length; cci++) {
	            if (cci > 0) dartCC += ",";
	            dartCC += ccauds.Profile.Audiences.Audience[cci].abbr;
	        }
	    }
	    return [dartCC];
    }
</script>


<script async src='https://securepubads.g.doubleclick.net/tag/js/gpt.js'></script>
<script>
    var googletag = googletag || {};
    googletag.cmd = googletag.cmd || [];
    
        var topic = ['bisnis','enterpreneurship','usaha','pandemik covid-19','COVID-19','Inspire Me',];
    
    var gptadslots = [];
    var number = 3;
</script>
<!-- END open warp pubmatic -->

<script>
googletag.cmd.push(function(){
	googletag.defineSlot('/253109699/IDNTimesDesktop/Business', [[970,90],[970,250],[1000,250]], 'div-gpt-ad-leaderboard_top')
			.setTargeting('pos', ['leaderboard_top'])
			.addService(googletag.pubads());

	googletag.defineSlot('/253109699/IDNTimesDesktop/Business', [[300,250],[300,600]], 'div-gpt-ad-rectangle')
			.setTargeting('pos', ['rectangle'])
			.addService(googletag.pubads());

	googletag.defineSlot('/253109699/IDNTimesDesktop/Business', [[300,250],[300,600],[320,480]], 'div-gpt-ad-billboard_vertical')
			.setTargeting('pos', ['billboard_vertical'])
			.addService(googletag.pubads());

	googletag.defineSlot('/253109699/IDNTimesDesktop/Business', [[750,100],[728,90],[1,1]], 'div-gpt-ad-inarticle1')
			.setTargeting('pos', ['inarticle1'])
			.addService(googletag.pubads());

	googletag.defineSlot('/253109699/IDNTimesDesktop/Business', [[750,100],[728,90],[1,1]], 'div-gpt-ad-inarticle2')
			.setTargeting('pos', ['inarticle2'])
			.addService(googletag.pubads());

    googletag.defineSlot('/253109699/IDNTimesDesktop/Business', [[300,700],[90,600],[160,600],[1,1]], 'div-gpt-ad-skin_left')
            .setTargeting('pos', ['skin_left'])
            .addService(googletag.pubads());

    googletag.defineSlot('/253109699/IDNTimesDesktop/Business', [[300,700],[90,600],[160,600],[1,1]], 'div-gpt-ad-skin_right')
            .setTargeting('pos', ['skin_right'])
            .addService(googletag.pubads());

	googletag.defineSlot('/253109699/IDNTimesDesktop/Business', [[1000,50],[728,90],[1,1]], 'div-gpt-ad-sticky_bottom')
			.setTargeting('pos', ['sticky_bottom'])
			.addService(googletag.pubads());

    googletag.defineSlot('/253109699/IDNTimesDesktop/Business', [[1,1]], 'div-gpt-ad-custom1')
            .setTargeting('pos', ['custom1'])
            .addService(googletag.pubads());
    
    googletag.defineSlot('/253109699/IDNTimesDesktop/Business', [[1,1]], 'div-gpt-ad-custom2')
            .setTargeting('pos', ['custom2'])
            .addService(googletag.pubads());

    googletag.defineOutOfPageSlot('/253109699/IDNTimesDesktop/Business', 'div-gpt-ad-oop1')
            .setTargeting('pos', ['oop1'])
            .addService(googletag.pubads());

    googletag.pubads().enableSingleRequest();
	googletag.pubads().collapseEmptyDivs();
	googletag.pubads().setTargeting('page_type', ['article']);
    googletag.pubads().setTargeting('topic', [topic]);
    if(window.isAllowAddressByRegion){
        googletag.pubads().setTargeting('lotameAudience', getLotameAudience());
    }
	googletag.pubads().addEventListener('slotOnload', function (event) {
		$("#"+event.slot.getSlotElementId()).removeClass("loading-ads");
	});
    googletag.pubads().addEventListener('slotRenderEnded', function(event){var slot_id = event.slot.getSlotElementId();
		if (slot_id == 'div-gpt-ad-sticky_bottom'){if (!event.isEmpty){$('.bottom-sticky-ads').css({ 'display': 'block' });}}
	});

	googletag.enableServices();
});
</script>

<script type="text/javascript">
    function callInarticle3(order=0){
        
        googletag.cmd.push(function() {
            
            number = number + order;
            
            var values = "";
            var adsizes="";
            adsizes = [[728,90],[1,1]];

            values = ['inarticle' + number];
            var inarticle = "div-gpt-ad-inarticle"+number;
        
            //override nama div menjadi Random ID
            document.getElementById("div-gpt-ad-inarticle3-temp").id = inarticle;
            
            gptadslots["inarticle"] = googletag.defineSlot('/253109699/IDNTimesDesktop/Business', adsizes , inarticle)
                                        .setTargeting('pos', values)
                                        .addService(googletag.pubads());
        
            googletag.display(inarticle);
            googletag.pubads().refresh([gptadslots['inarticle']]);

        });
    }
</script>            
        <script src="/assets/js/vendor.js?vdate=1625572630"></script> 

<script type="text/javascript">
    var articleListUrl, nextArticleUrl;
    var killAjax = false;
    var baseUrl = "https://www.idntimes.com";
    var jscrollOptions = {
        loadingHtml: '<center><i class="fa fa-2x fa-spin fa-spinner"></i></center>',
        padding: 50,
        refresh: true
    };
</script>

<!-- Begin Insider -->
<!-- <script async src="//idntimesid.api.useinsider.com/ins.js?id=10003098"></script> -->
<!-- End Insider -->

<!-- Begin comScore Tag -->
<script>
	var _comscore = _comscore || [];
	_comscore.push({ c1: "2", c2: "20678181" });
	(function() {
		var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
		s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
		el.parentNode.insertBefore(s, el);
	})();
</script>
<noscript>
	<img src="http://b.scorecardresearch.com/p?c1=2&c2=20678181&cv=2.0&cj=1" alt="Comscore Tracker" />
</noscript>
<!-- End comScore Tag -->

<!-- Start Alexa Certify Javascript -->
<script type="text/javascript">
_atrk_opts = { atrk_acct:"8EwHv1FYxz20cv", domain:"idntimes.com",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://certify-js.alexametrics.com/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript><img src="https://certify.alexametrics.com/atrk.gif?account=8EwHv1FYxz20cv" style="display:none" height="1" width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript -->

<!-- Start Social Profile Link -->
<script type="application/ld+json">
{
	"@context" : "https://schema.org",
	"@type" : "Organization",
	"name" : "IDN Times",
	"url" : "https://www.idntimes.com",
	"logo": "https://www.idntimes.com/assets/img/logo.png",
	"sameAs" : [
		"https://www.facebook.com/idntimes",
		"https://twitter.com/idntimes",
		"https://plus.google.com/+IDNtimescom",
		"https://www.instagram.com/idntimes/",
		"https://www.youtube.com/channel/UCMcqmnF-uCBFzQ3NvmaELCg",
		"https://www.linkedin.com/company/idntimes-com"
	]
}
</script>
<!-- End Social Profile Link -->



<!-- START USER ID ANALYTICS -->

<script type="text/javascript">
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({
        'event' : 'userInfo',
        'userId': '0',
        'interests': 'na',
        'postSubmitted': '0',
        'postApproved': '0'
    });
</script>
<!-- END USER ID ANALYTICS -->

    		<script>
            var topics = [];
            var authorStatus = '';

                            topics.push('bisnis');
                            topics.push('enterpreneurship');
                            topics.push('usaha');
                            topics.push('pandemik covid-19');
                            topics.push('covid-19');
                            topics.push('inspire me');
            
                            authorStatus = 'verified'
            
			window.dataLayer.push({
				'event' : 'contentGroup',
				'category': 'business',
				'subCategory': 'finance',
				'pageType': 'article page',
			});

            window.dataLayer.push({
                'event': 'articleInfo',
                'authorName': 'Rehia Sebayang',
                'authorStatus': authorStatus,
                'editorName': 'Rochmanudin',
                'topics': topics.join(),
                'publishedDate': '09 Agustus 2021 '
            });
		</script>
	
<!-- Page hiding snippet (recommended) -->
    <style>.async-hide​ { ​opacity​: ​0​​!important​}</style>
    <script>
        (function(a,s,y,n,c,h,i,d,e){
            s.className+=' '+y;
            h.end=i=function(){
                s.className=s.className.replace(RegExp(​' ?'​+y),​''​)
            };
            (a[n]=a[n]||[]).hide=h;
            setTimeout(function(){i();h.end=null},c);
        })
        (​window​,​document​.documentElement,​'async-hide'​,​'dataLayer'​,​4000​,{​'GTM-P84KQM'​:true​});
    </script>
<!-- End of Page hiding snippet -->
<!-- Google Tag Manager -->
<!-- GTM tidak diinit saat ada diregion canada atau continent europe
     Sesuai documentasi dari lotame https://docs.google.com/document/d/17jAPhn9TP5VFjsleJjlxApmNTeQqAj349jeUb44njs8/edit# kalo variable cc_ajax.js harus tidak muncul saat di region canada dan europe
     variable cc_ajax.js muncul karena inisitor dari gtm.js 
-->
<script>
    if(window.isAllowAddressByRegion){
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-P84KQM');
    }
</script>

<!-- End Google Tag Manager -->


<!-- Start Inspectlet -->
<script type="text/javascript" id="inspectletjs">
    window.__insp = window.__insp || [];
    __insp.push(['wid', 100344008]);
    (function() {
        function ldinsp(){if(typeof window.__inspld != "undefined") return; window.__inspld = 1; var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js'; var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); };
        setTimeout(ldinsp, 500); document.readyState != "complete" ? (window.attachEvent ? window.attachEvent('onload', ldinsp) : window.addEventListener('load', ldinsp, false)) : ldinsp();
    })();
</script>
<!-- End Inspectlet -->

<!-- Start FB Js SDK -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=382695658587663";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- End FB Js SDK -->

<!-- Start Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1697620290477743');
fbq('track', 'PageView');
fbq('track', 'ViewContent');
</script>
<noscript>
<img height="1" width="1"
src="https://www.facebook.com/tr?id=1697620290477743&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

<!-- START open warp pubmatic -->
<!-- <script type="text/javascript">
(function() {
    var purl = window.location.href;
    var url = '//ads.pubmatic.com/AdServer/js/pwt/156841/749';
    var profileVersionId = '';
    if(purl.indexOf('pwtv=')>0){
        var regexp = /pwtv=(.*?)(&|$)/g;
        var matches = regexp.exec(purl);
        if(matches.length >= 2 && matches[1].length > 0){
            profileVersionId = '/'+matches[1];
        }
    }
    var wtads = document.createElement('script');
    wtads.async = true;
    wtads.type = 'text/javascript';
    wtads.src = url+profileVersionId+'/pwt.js';
    var node = document.getElementsByTagName('script')[0];
    node.parentNode.insertBefore(wtads, node);
})();
</script>

<script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
<script>
    var googletag = googletag || {};
    googletag.cmd = googletag.cmd || [];
</script> -->
<!-- END open warp pubmatic -->

<!-- START AMNET SCRIPT -->
<script id='navegg' type="text/javascript">
(function(n,v,g){o='Navegg';if(!n[o]){
a=v.createElement('script');a.src=g;b=document.getElementsByTagName('script')[0];
b.parentNode.insertBefore(a,b);n[o]=n[o]||function(parms){
n[o].q=n[o].q||[];n[o].q.push([this, parms])};}})
(window, document, 'https://tag.navdmp.com/universal.min.js');
window.naveggReady = window.naveggReady||[];
nvg50826 = new Navegg({
acc: 50826
});
</script>
<!-- END AMNET SCRIPT -->

<!-- START CUSTOM ANALYTICS -->
<script type="text/javascript">
function callAnalytics(path, queryString) {
    var gaPage = path;
    var comscorePage = path.replace(/\//g, '-');

    if (queryString) {
        gaPage = gaPage + '?' + queryString;
        comscorePage = comscorePage + '&' + queryString;
    }

            // google analytics

        // comscore
        (function() {
            var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
            s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
            el.parentNode.insertBefore(s, el);
        })();
        _comscore.push({ c1: "2", c2: "20678181" });

        $.get('https://www.idntimes.com' + '/pv.xml?page=' + comscorePage);

        // alexa
        _atrk_opts = { atrk_acct:"8EwHv1FYxz20cv", domain:"idntimes.com",dynamic: true};
        (function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://certify-js.alexametrics.com/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
    }
</script>
<!-- END CUSTOM ANALYTICS -->
            
    
    <script async defer src="//www.instagram.com/embed.js"></script>
    
    <script async defer src="//platform.twitter.com/widgets.js"></script>

            <!-- START RICH SNIPPETS FOR ARTICLES -->
        <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "NewsArticle",
            "mainEntityOfPage": "https://www.idntimes.com/business/finance/rehia-indrayanti-br-sebayang/kisah-inspiratif-menjajal-peluang-bisnis-baru-saat-pandemik-covid",
            "headline": "Kisah Inspiratif Menjajal Peluang Bisnis Baru saat Pandemik",
            "image": {
                "@type": "ImageObject",
                "url": "https://cdn.idntimes.com/content-images/post/20210809/dsc07314-0179c33ec6fc4383f9437914ce8fd0b2_600x400.jpg",
                "height": 600,
                "width": 400
            },
            "datePublished": "2021-08-09T07:44:00+07:00",
            "dateModified": "2021-08-14T16:28:49+07:00",
            "author": {
                "@type": "Person",
                "name": "Rehia Sebayang"
            },
            "publisher": {
                "@type": "Organization",
                "name": "IDN Times",
                "logo": {
                    "@type": "ImageObject",
                    "url": "https://www.idntimes.com/assets/img/logo-amp.png",
                    "width": 600,
                    "height": 60
                }
            },
            "description": "Pandemik ternyata membuka peluang bisnis baru"
        }
        </script>
        <!-- END RICH SNIPPETS FOR ARTICLES -->

        <!-- START BREADCRUMBS -->
        <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "item": {
                    "@id": "https://www.idntimes.com/business",
                    "name": "Business"
                }
            },{
                "@type": "ListItem",
                "position": 2,
                "item": {
                    "@id": "https://www.idntimes.com/business/finance",
                    "name": "Finance"
                }
            }]
        }
        </script>
        <!-- END BREADCRUMBS -->
    
        <!-- START GROUPM LEARNING TAG -->
        
                <!-- END GROUPM LEARNING TAG -->
    </head>

    <body id="idntimes-desktop" class="idntimes-desktop">
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P84KQM"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->

                    
							<div class="skin-ads skin-ads--left" style="position: fixed; top: 452px; /*top: 65%*/; transform: translateY(-50%); right: calc(50% + 555px); z-index: 21; text-align: center;">
	<div id="div-gpt-ad-skin_left" class="loading-ads" data-spotx_embed_element_id="div-gpt-ad-skin_left" style="margin:0 auto;">
        <script>
            googletag.cmd.push(function() { googletag.display('div-gpt-ad-skin_left'); });
        </script>
    </div>
</div>				<div class="skin-ads skin-ads--right" style="position: fixed; top: 452px; /*top: 65%*/; transform: translateY(-50%); left: calc(50% + 555px); z-index: 21; text-align: center;">
	<div id="div-gpt-ad-skin_right" class="loading-ads" data-spotx_embed_element_id="div-gpt-ad-skin_right" style="margin:0 auto;">
        <script>
            googletag.cmd.push(function() { googletag.display('div-gpt-ad-skin_right'); });
        </script>
    </div>
</div>			        
        
                    <header id="header" class="clearfix nav-up">
    <div class="top-header border-bottom-gradient-grey clearfix">
        <div class="wrapper">
            <div class="container">
                <div class="header-box1 clearfix">
                    <h1 class="header-logo">
                        <a href="https://www.idntimes.com">
                            <img src="/assets/img/idntimes.png" alt="IDN Times">
                        </a>
                    </h1>
                    <ul class="primary-submenu pull-right">
                        <li><a href='#search-modal' data-toggle="modal" class="header-icon icon-grey btn-search"><i
                                    class="idn-mini-icon idn-search"></i></a></li>
                                                    <li>
                                <a href="https://community.idntimes.com/login" class="btn join-btn">Gabung di IDN Times</a>
                            </li>
                                            </ul>
                </div>

                <div class="header-box2 clearfix">
    <nav class="header-navbar" role="navigation">
        <ul class="navigation">
                            <li class="">
                    <a href="https://olimpiade.idntimes.com" style="position:relative;">OLIMPIADE<i class="fa fa-circle btn-notification-unread-up" aria-hidden="true" style="font-size:0.5rem;right: -8px;top: 0;"></i></a>
                </li>
                        <li class=" ">
                <a href="https://tanyajawab.idntimes.com">Tanya Jawab <img src="/assets/img/icons/new.png"
                        srcset="/assets/img/icons/new.svg" alt="Icon New" /></a>
            </li>
            <li class=" ">
                <a href="https://www.idntimes.com/news">News</a>
            </li>
            <li class="active">
                <a href="https://www.idntimes.com/business">Business</a>
            </li>
            <li class="">
                <a href="https://www.idntimes.com/sport">Sport</a>
            </li>
            
            <li class=" ">
                <a href="https://www.idntimes.com/tech">Tech</a>
            </li>
            <li class=" ">
                <a href="https://www.idntimes.com/hype">Hype</a>
            </li>
            <li class=" ">
                <a href="https://www.idntimes.com/life">Life</a>
            </li>
            <li class="">
                <a href="https://www.idntimes.com/health">Health</a>
            </li>
            <li class="">
                <a href="https://www.idntimes.com/travel">Travel</a>
            </li>
            <li class="">
                <a
                    href="https://community.idntimes.com">
                    Community
                </a>
            </li>
            <li class="dropdown-menu-list-header">
                <a href="#" tabindex="-1" class="dropdown-icon-corner">Regional &nbsp;<i
                        class="fa fa-caret-down"></i></a>
                <div class="dropdown-submenu-header">
                    <div class="submenu-box clearfix">
                        <p class="title-submenu">Regional</p>
                                                <ul class="dropdown-menu-regional clearfix">
                                                            <li class="">
                                    <a href="https://www.idntimes.com">IDN Times</a>
                                </li>
                                                            <li class="">
                                    <a href="https://jabar.idntimes.com">Jawa Barat</a>
                                </li>
                                                            <li class="">
                                    <a href="https://banten.idntimes.com">Banten</a>
                                </li>
                                                            <li class="">
                                    <a href="https://jateng.idntimes.com">Jawa Tengah</a>
                                </li>
                                                            <li class="">
                                    <a href="https://jogja.idntimes.com">Jogja</a>
                                </li>
                                                            <li class="">
                                    <a href="https://jatim.idntimes.com">Jawa Timur</a>
                                </li>
                                                            <li class="">
                                    <a href="https://bali.idntimes.com">Bali</a>
                                </li>
                                                            <li class="">
                                    <a href="https://sumut.idntimes.com">Sumatera Utara</a>
                                </li>
                                                            <li class="">
                                    <a href="https://sulsel.idntimes.com">Sulawesi Selatan</a>
                                </li>
                                                            <li class="">
                                    <a href="https://kaltim.idntimes.com">Kalimantan Timur</a>
                                </li>
                                                            <li class="">
                                    <a href="https://sumsel.idntimes.com">Sumatera Selatan</a>
                                </li>
                                                            <li class="">
                                    <a href="https://lampung.idntimes.com">Lampung</a>
                                </li>
                                                            <li class="">
                                    <a href="https://ntb.idntimes.com">NTB</a>
                                </li>
                                                    </ul>
                    </div>
                </div>
            </li>
                        <li
                class="dropdown-menu-list-header
                                    ">
                <a href="#" tabindex="-1" class="dropdown-icon-corner">
                    Lainnya &nbsp;<i class="fa fa-caret-down"></i>
                </a>
                <div class="dropdown-submenu-header dropdown-submenu-more">
                    <div class="submenu-box clearfix">
                        <div class="col-xs-3 dropdown-menu-cat">
                            <p class="title-submenu">Kategori</p>
                            <ul>
                                <li
                                    class="">
                                    <a href="https://www.idntimes.com/quiz">Quiz</a>
                                </li>
                                <li
                                    class=" ">
                                    <a href="https://www.idntimes.com/automotive">Automotive</a>
                                </li>
                                <li
                                    class="">
                                    <a href="https://www.idntimes.com/science">Science</a>
                                </li>
                                <li
                                    class="">
                                    <a href="https://www.idntimes.com/men">Men</a>
                                </li>
                                <li
                                    class="">
                                    <a href="https://www.idntimes.com/food">Food</a>
                                </li>
                                <li
                                    class="">
                                    <a href="https://www.idntimes.com/opinion">Opinion</a>
                                </li>
                                <li
                                    class="">
                                    <a href="https://www.idntimes.com/fiction">Fiction</a>
                                </li>
                                <li
                                    class="">
                                    <a href="https://www.idntimes.com/index">Index</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-3 dropdown-menu-campaign">
                            <p class="title-submenu">Event</p>
                            <ul>
                                                                    <li class="">
                                        <a href="https://promo.idntimes.com">Promo</a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://akuperempuan.idntimes.com">#AKUPEREMPUAN</a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://indonesiapastibisa.idntimes.com">#INDONESIAPASTIBISA</a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://kitaidn.idntimes.com">#KITAIDN</a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://antipuasakuota.idntimes.com">#ANTIPUASAKUOTA</a>
                                    </li>
                                                                    <li class="">
                                        <a href="https://liputankhusus.idntimes.com">#LIPUTANKHUSUS</a>
                                    </li>
                                                            </ul>
                        </div>
                        <div class="col-xs-6 dropdown-menu-channels">
                            <p class="title-submenu">Channels</p>
                                                        <ul>
                                                                    <li class="channels">
                                        <a href="https://play.google.com/store/apps/details?id=com.idntimes.idntimes" target="_blank">
                                            <img
                                                src="https://www.idntimes.com/assets/img/channel/logo-idn.png"
                                                alt="IDN">
                                        </a>
                                    </li>
                                                                    <li class="channels">
                                        <a href="https://www.popbela.com" target="_blank">
                                            <img
                                                src="https://www.idntimes.com/assets/img/logo/popbela.png"
                                                alt="Popbela">
                                        </a>
                                    </li>
                                                                    <li class="channels">
                                        <a href="https://www.popmama.com" target="_blank">
                                            <img
                                                src="https://www.idntimes.com/assets/img/logo/popmama.png"
                                                alt="Popmama">
                                        </a>
                                    </li>
                                                                    <li class="channels">
                                        <a href="https://bit.ly/downloadyummyidntimesfood" target="_blank">
                                            <img
                                                src="https://www.idntimes.com/assets/img/logo/yummy.png"
                                                alt="Yummy">
                                        </a>
                                    </li>
                                                                    <li class="channels">
                                        <a href="https://ggwp.id" target="_blank">
                                            <img
                                                src="https://www.idntimes.com/assets/img/channel/logo-ggwp.png"
                                                alt="GGWP">
                                        </a>
                                    </li>
                                                                    <li class="channels">
                                        <a href="https://duniaku.idntimes.com" target="_blank">
                                            <img
                                                src="https://www.idntimes.com/assets/img/channel/logo-duniaku.png"
                                                alt="Duniaku">
                                        </a>
                                    </li>
                                                                    <li class="channels">
                                        <a href="https://soundscape.idntimes.com" target="_blank">
                                            <img
                                                src="https://www.idntimes.com/assets/img/channel/logo-soundscape.png"
                                                alt="IDN Soundscape">
                                        </a>
                                    </li>
                                                                    <li class="channels">
                                        <a href="https://ads.idntimes.com" target="_blank">
                                            <img
                                                src="https://www.idntimes.com/assets/img/channel/logo-idnads.png"
                                                alt="IDNAds">
                                        </a>
                                    </li>
                                                                    <li class="channels">
                                        <a href="https://www.idncreatornetwork.com" target="_blank">
                                            <img
                                                src="https://www.idntimes.com/assets/img/logo/idn-creator-network.png"
                                                alt="IDN Creator Network">
                                        </a>
                                    </li>
                                                                    <li class="channels">
                                        <a href="https://research.idntimes.com" target="_blank">
                                            <img
                                                src="https://www.idntimes.com/assets/img/channel/logo-research.png"
                                                alt="IDN Research Institute">
                                        </a>
                                    </li>
                                                                    <li class="channels">
                                        <a href="https://fyi.idntimes.com" target="_blank">
                                            <img
                                                src="https://www.idntimes.com/assets/img/channel/menu-fyi.svg"
                                                alt="FYI">
                                        </a>
                                    </li>
                                                                    <li class="channels">
                                        <a href="https://beautyfest.popbela.com" target="_blank">
                                            <img
                                                src="https://www.idntimes.com/assets/img/channel/logo-beautyfest.png"
                                                alt="Beautyfest Asia">
                                        </a>
                                    </li>
                                                                    <li class="channels">
                                        <a href="https://ims.idntimes.com" target="_blank">
                                            <img
                                                src="https://www.idntimes.com/assets/img/channel/logo-ims.png"
                                                alt="Indonesia Millennial Summit">
                                        </a>
                                    </li>
                                                            </ul>
                        </div>
                    </div>
                    <div class="download-box">
                        <p>DOWNLOAD IDN APP SEKARANG!</p>
                        <a href="https://play.google.com/store/apps/details?id=com.idntimes.idntimes" target="_Blank">
                            <img src="/assets/img/icons/app-download.png" alt="Icon Play Store" />
                        </a>
                        <a href="https://apps.apple.com/id/app/idn-berita-terlengkap/id1035533846" target="_Blank">
                            <img src="/assets/img/icons/itunes-download.png" alt="Icon Itunes" />
                        </a>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
</div>
            </div>
        </div>
    </div>

    <div class="bottom-header clearfix">
        <div class="wrapper">
            <div class="container divide-table">
                <div class="box-running">
                    <a class="whats-hot">Trending</a>
                    <div class="running-text">
                        <div class="running-text-wrapper">
                            <ul class="running-text-list">
                                                                                                            <li><a href="https://fyi.idntimes.com/corona">Virus Corona: Semua yang Perlu Kamu Tahu</a></li>
                                                                                                                                                <li><a href="https://www.idntimes.com/business/economy/ridwan-aji-pitoko-1/gelombang-ke-18-kartu-prakerja-segera-dibuka-untuk-27-juta-penerima">Gelombang ke-18 Kartu Prakerja Segera Dibuka untuk 2,7 Juta Penerima</a></li>
                                                                                                                                                <li><a href="https://www.idntimes.com/hype/entertainment/erfah-nanda-2/potret-akrab-jefri-nichol-dan-vanesha-prescilla">10 Potret Akrab Jefri Nichol dan Vanesha Prescilla, Cie Makin Deket!</a></li>
                                                                                                                                                <li><a href="https://www.idntimes.com/life/relationship/angel-ai-rose/sampaikan-ini-jika-sahabatmu-mengeluh-soal-rumah-tangganya-c1c2">Sampaikan 5 Hal Ini jika Sahabatmu Kerap Mengeluh Soal Rumah Tangganya</a></li>
                                                                                                                                                <li><a href="https://www.idntimes.com/automotive/motorbike/katarina-ariesta-putri/mengenang-motor-motor-kymco-pionir-skutik-di-tanah-air">Jadi Pionir di Indonesia, Ini Deretan Skutik Kymco </a></li>
                                                                                                                                                <li><a href="https://www.idntimes.com/news/indonesia/teatrika/menkes-budi-jokowi-minta-pemda-gaspol-vaksinasi">Menkes Budi: Jokowi Minta Pemda Gaspol Vaksinasi</a></li>
                                                                                                                                                <li><a href="https://www.idntimes.com/hype/entertainment/erfah-nanda-2/5-fakta-lagu-terbaru-rossa-berjudul-wanita-bikin-cewek-makin-pede">5 Fakta Lagu Terbaru Rossa Berjudul Wanita, Bikin Cewek Makin Pede!</a></li>
                                                                                                                                                <li><a href="https://www.idntimes.com/news/indonesia/helmi/heboh-vaksinasi-bodong-di-karawang-begini-kronologinya">Heboh Vaksinasi Bodong di Karawang, Begini Kronologinya</a></li>
                                                                                                                                                <li><a href="https://www.idntimes.com/life/family/dina-fadillah-salma-1/aspek-yang-perlu-diperhatikan-saat-beli-mainan-anak">5 Aspek yang Perlu Diperhatikan saat Beli Mainan Anak, Dukung Emosinya</a></li>
                                                                                                                                                <li><a href="https://www.idntimes.com/life/women/ulfa-luthfia-hidayatty/ootd-couple-ayu-dewi-dan-regi-datau">10 Ide OOTD Couple Ayu Dewi dan Regi Datau, Kompak Bikin Baper!</a></li>
                                                                                                </ul>
                        </div>
                        <div class="pull-right running-text-control">
                            <a href="#" class="arrow-slider arrow-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                            <a href="#" class="arrow-slider arrow-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>

                                    <div id='div-gpt-ad-custom1'>
                        <script>
                            googletag.cmd.push(function() { googletag.display('div-gpt-ad-custom1'); });
                        </script>
                    </div>

                    <div id='div-gpt-ad-custom2'>
                        <script>
                            googletag.cmd.push(function() { googletag.display('div-gpt-ad-custom2'); });
                        </script>
                    </div>
                
                
                <div id='div-gpt-ad-oop1' style="height:0;">
                    <script>
                        googletag.cmd.push(function() { googletag.display('div-gpt-ad-oop1'); });
                    </script>
                </div>
            </div>
        </div>
    </div>
</header>



        
        <div class=" wrapper   general-content-wrapper  ">
            <div class=" container  wrapper-content">
                			<div class="leaderboard-ads" style="margin: 0 auto 20px; text-align: center;">
    <div id='div-gpt-ad-leaderboard_top' class="loading-ads" data-spotx_embed_element_id="div-gpt-ad-leaderboard_top" style="width:970px; margin:0 auto;">
        <script>
            googletag.cmd.push(function() { googletag.display('div-gpt-ad-leaderboard_top'); });
        </script>
    </div>
</div>		<div class="bottom-sticky-ads">
    <div class="bottom-sticky-ads__wrapper">
        <div id='div-gpt-ad-sticky_bottom' class="loading-ads" data-spotx_embed_element_id="div-gpt-ad-sticky_bottom">
            <script>
                googletag.cmd.push(function(){googletag.display('div-gpt-ad-sticky_bottom'); });
            </script>
        </div>
    </div>
</div>

	
    <div id="article-page" class="article-content general-content  ">
        
        <ol class="breadcrumb">
                            <li>
                    <a href="https://www.idntimes.com/business">Business</a>
                </li>
                <li class="active">Finance</li>
                <li class="gimmick">
                    <time class="date" datetime="09 Aug 21 | 07:44">
                        
                        09 Aug 21 | 07:44
                    </time>
                </li>
                    </ol>
        
        
        <div class="left-content content-insights">
            
            <section class="content-post clearfix">
				<div data-io-article-url="https://www.idntimes.com/business/finance/rehia-indrayanti-br-sebayang/kisah-inspiratif-menjajal-peluang-bisnis-baru-saat-pandemik-covid">
					<h1 class="title-text">Kisah Inspiratif Menjajal Peluang Bisnis Baru saat Pandemik COVID-19</h1>
					<div class="excerpt">
						Pandemik ternyata membuka peluang bisnis baru
					</div>
					<div class="featured-image">
						<img src="https://www.idntimes.com/assets/img/placeholder.png" data-src="https://cdn.idntimes.com/content-images/post/20210809/dsc07314-0179c33ec6fc4383f9437914ce8fd0b2_600x400.jpg" class="full-width lazyload" alt="Kisah Inspiratif Menjajal Peluang Bisnis Baru saat Pandemik COVID-19">
													<span>Bisnis cetak kartu vaksinasi Dapur Pro dan Maju Stamp - Daniel Morris Manurung</span>
						                    </div>

                    
					<div class="box-information">
						<div class="author divide-table">
							<div class="author-image divide-table-cell">
								
								<a href="https://www.idntimes.com/rehia-indrayanti-br-sebayang">
									<img src="https://www.idntimes.com/assets/img/placeholder-sq.png" data-src="https://cdn.idntimes.com/content-images/avatar/rehia-indrayanti-br-sebayang_100x100.jpeg?v=7b7cfc4fd2a41a4111db79b3b1be24e0" alt="Rehia Sebayang" class="lazyload">
								</a>
							</div>
							<div class="author-name divide-table-cell">
								<div>
                                                                            <span class="text-blue">
                                            Verified
                                        </span>
                                    								</div>
                                <a href="https://www.idntimes.com/rehia-indrayanti-br-sebayang">
                                    Rehia Sebayang
                                                                                                                            <img class="author__badge" src="https://www.idntimes.com/assets/img/badge/user-verified/label-user-verified.png" alt="Verified">
                                                                                                                    </a>
							</div>
													</div>

						<div class="share divide-table">
							<div class="share-box divide-table-cell">
								
								<a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.idntimes.com%2Fbusiness%2Ffinance%2Frehia-indrayanti-br-sebayang%2Fkisah-inspiratif-menjajal-peluang-bisnis-baru-saat-pandemik-covid" title="Share Facebook" data-title="facebook" class="share-facebook" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i> Share to Facebook</a>
								<a href="https://twitter.com/intent/tweet?url=https://www.idntimes.com/business/finance/rehia-indrayanti-br-sebayang/kisah-inspiratif-menjajal-peluang-bisnis-baru-saat-pandemik-covid&text=Kisah Inspiratif Menjajal Peluang Bisnis Baru saat Pandemik COVID-19&via=idntimes&related=idntimes" title="Share Twitter" data-title="twitter" class="share-twitter" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i> Share to Twitter</a>
							</div>
														<div class="share-role  divide-table-cell">
								
															</div>
													</div>
                    </div>

					<article id="article-content" class="content-post-description">
						
                        <p><strong>Jakarta, IDN Times </strong>-&nbsp;Pandemik COVID-19 telah membuat banyak orang kehilangan pekerjaan, karena terjadi gelombang pemutusan hubungan kerja (PHK) besar-besaran. Namun di sisi lain, pandemik ternyata juga membuka peluang lahirnya bisnis baru, seperti halnya bisnis cetak kartu bukti vaksinasi.</p><p>Kartu vaksinasi memang telah menjadi salah satu syarat yang wajib dimiliki seseorang, jika ingin melakukan perjalanan di tengah meningkatnya pandemik COVID-19 saat ini. Melihat kondisi ini, ide bisnis untuk mencetak kartu vaksinasi agar bisa lebih praktis dalam penggunaannya pun terlintas di benak Daniel Morris Manurung, seorang desainer grafis asal Patumbak, Sumatra Utara.</p><p>Daniel mengungkapkan ide bisnis yang muncul di tengah pandemik ini cukup mampu meringankan beban para pelaku usaha yang terlibat.</p><p>&ldquo;Jadi manfaatnya yang pasti kan mereka mendapatkan tambahan dari pekerjaan ini,&rdquo; ujar lulusan Universitas Sumatra Utara tersebut.</p><p>Lalu bagaimana kisahnya hingga Daniel bisa mendapat ide untuk menjalani bisnis ini? Berikut jawabannya.</p><p>         <a href="https://www.idntimes.com/news/world/farid-nurhakim-1/dalai-lama-vaksinasi-covid-19-imbau-lainnya-untuk-vaksinasi-c1c2" target="_blank">           <strong>             <em>Baca Juga: Dalai Lama Vaksinasi COVID-19, Imbau Lainnya untuk Vaksinasi</em>           </strong>         </a>       </p><div class='show-page' target='1'></div><div class='split-page split-page1 open' data-target='1'><div style="margin: 10px auto;" class="inarticle-ads"><div id=div-gpt-ad-inarticle1  class="loading-ads" style="width:728px;max-width:100%;margin:0px auto;text-align: center;">
	<script>
		googletag.cmd.push(function() { googletag.display(div-gpt-ad-inarticle1); });
	</script>
</div>
</div><h2>1. Awal mula menjalani bisnis cetak kartu vaksinasi</h2><div class="embed-image"><img src="https://cdn.idntimes.com/content-images/post/20210809/dsc07355-66f1b0d3c5f561d97b83bc4108dda9b5.jpg" alt="Kisah Inspiratif Menjajal Peluang Bisnis Baru saat Pandemik COVID-19" /><span class="main-article-source">Bisnis cetak kartu vaksinasi Dapur Pro dan Maju Stamp - Daniel Morris Manurung</span></div><p>Bisnis cetak kartu vaksinasi yang dijalani Daniel terinspirasi dari peraturan yang diterapkan pemerintah, yang mengharuskan orang memiliki kartu bukti sudah divaksinasi sebagai syarat perjalanan.</p><p>Menyadari tidak semua orang bisa menggunakan ponsel untuk menunjukkan bukti kartu vaksinasi mereka, ia pun berpikir menciptakan versi cetaknya. Namun, bukan hanya sekadar cetakan biasa di kertas yang mudah rusak karena dilipat-lipat.</p><p>Setelah menemukan ide peluang bisnis ini dan mempelajari serta mencari lebih banyak informasi, akhirnya Daniel memutuskan mencoba mencetak kartu vaksinasi ke bentuk yang lebih praktis dan tahan lama seperti kartu ATM.</p><p>&ldquo;Umumnya kan, orang mungkin yang punya <em>handphone </em>atau yang biasa menggunakan <em>platform-</em>nya mungkin dia hanya menunjukkan melalui galeri atau pun <em>file </em>yang ada di <em>handphone</em>. Di luar itu kan pasti ada yang terbatas. Harus menunjukkan dalam bentuk fisik gitu ya, untuk di-foto copy,&nbsp;misalnya. Nah, keluarlah bentuk <em>print out,</em>&rdquo; kata Daniel saat berbincang dengan <em>IDN Times</em> pada 3 Agustus 2021.</p><p>&ldquo;<em>Print out</em> yang biasa kita lihat itu masih banyak yang menggunakan kertas HVS. Itu kan gede itu karena gak ada patokan ukurannya. Jadi banyak yang nge-print ukuran gede, dilipat-lipat, beberapa kali pakai kan jadi lecek. Dibuang, harus print lagi. Keluarlah ide liat dari internet, lihat dari Google juga, kartu vaksinasinya bisa dicetak dalam bentuk seperti kartu ATM atau ID Card dengan bahan PVC,&rdquo; tambahnya.</p></div><div class='show-page hide' target='2'></div><div class='split-page split-page2' data-target='2'><h2>2. Berkolaborasi dengan UMKM di Medan</h2><div class="embed-image"><img src="https://cdn.idntimes.com/content-images/post/20210809/dsc07362-001c70b4d0391d8ea7bcb2c11cf95489.jpg" alt="Kisah Inspiratif Menjajal Peluang Bisnis Baru saat Pandemik COVID-19" /><span class="main-article-source">Bisnis cetak kartu vaksinasi Dapur Pro dan Maju Stamp - Daniel Morris Manurung</span></div><p>Setelah mempelajari proses pencetakan kartu vaksinasi, Daniel kemudian berkolaborasi dengan usaha mikro kecil dan menengah (UMKM) yang menggeluti bisnis percetakan di Kota Medan, untuk mengerjakan pesanan para pelanggan.</p><p>&ldquo;Kalau kartu vaksin ini, itu usahanya kolaborasi, yang pasti saya juga menjalankan desain grafis, saya juga menjalankan usaha printingnya, percetakan pada umumnya tapi untuk vaksin ini dengan salah satu rekan UMKM di bidang percetakan juga," kata dia.</p><p>Kolaborasi antara Dapur Pro dan UMKM Maju Stamp ini bukan hanya dilakukan untuk membuat proses pengerjaan menjadi lebih cepat, tapi juga demi menghasilkan produk yang baik, karena melibatkan lima orang yang memiliki keahlian dalam mengerjakan tiap proses yang berbeda-beda.</p><p>&ldquo;Satu hari itu kita bisa cetak belasan sampai puluhan kartu. Bisa selesai sampai juga pengiriman. Jadi kita kerja sama dengan percetakan sejenis di Kota Medan. Kapasitasnya sebenarnya kita mampu <em>ngerjain </em>seribu per hari. Itu kapasitas maksimum yang bisa <em>dikerjain </em>sebenarnya,&rdquo; kata Daniel.</p><p>Harga cetak per kartunya tergolong murah, yakni hanya Rp25 ribu per kartu dan akan diberikan potongan harga Rp10 ribu per <em>piece </em>apabila pelanggan melakukan pemesanan minimum 10 kartu.</p><div class="editors-pick">             <div class="title">                 <span>Lanjutkan membaca artikel di bawah</span>             </div>             <h3 class="title-editors-pick">Editor’s picks</h3>             <ul><li><a href="https://www.idntimes.com/business/economy/helmi/6-potret-apotek-kimia-farma-usai-penundaan-vaksinasi-berbayar">6 Potret Apotek Kimia Farma Usai Penundaan Vaksinasi Berbayar</a></li><li><a href="https://www.idntimes.com/business/economy/ridwan-aji-pitoko-1/gandeng-traveloka-pemerintah-luncurkan-layanan-vaksinasi-di-bandara">Gandeng Traveloka, Pemerintah Luncurkan Layanan Vaksinasi di Bandara</a></li><li><a href="https://www.idntimes.com/business/economy/vadhia-lidyana-1/insentif-nakes-di-daerah-rp81-triliun-pemerintah-baru-bayar-rp900-m">Insentif Nakes di Daerah Rp8,1 Triliun, Pemerintah Baru Bayar Rp900 M</a></li></ul>             </div><p>&ldquo;Kalau harga satu <em>piece</em>-nya itu kita patok Rp25 ribu. Tapi, kita juga selalu sarankan ke pembeli kalau bisa 10 <em>pieces </em>langsung, ajak keluarga dan teman-temannya langsung supaya harganya bisa menjadi Rp15 ribu per kartu. Itu juga sudah kita kasih <em>cover </em>plastik untuk perlindungannya. Untuk lebih awet aja,&rdquo; kata Daniel, sebelum menambahkan bahwa ia sudah menerima pesanan dari berbagai kota, termasuk dari Nias, Jakarta, Bogor, Jambi, hingga Palembang.</p><p>Daniel juga memastikan data setiap pelanggannya akan dijaga dengan baik. Termasuk jika ada yang cacat produksi, maka kartu langsung dihancurkan dan dibuang supaya tidak ada bentuk kartu yang utuh.</p><p>Selain itu, Daniel akan mengganti kartu jika ada klien minta diganti karena buram, tapi kartu yang lama akan dihancurkan untuk menghindari penyalahgunaan.</p><p>&ldquo;Kita kan sudah bilang sama setiap klien itu silakan dikirim <em>file</em>-nya. Pasti akan tetap kita proses dengan aman dan data-data kita pastikan aman, tidak tersebar dari pihak kita, dan juga setelah kita cetak itu kita filenya kita hapus," kata Daniel.</p><p>&nbsp;</p></div><div class='show-page hide' target='3'></div><div class='split-page split-page3' data-target='3'><h2>3. Suka-duka menjalani bisnis</h2><div class="embed-image"><img src="https://cdn.idntimes.com/content-images/post/20210809/dsc07337-edit-copy-9f305a75ec063f05d387041879644c2b.jpg" alt="Kisah Inspiratif Menjajal Peluang Bisnis Baru saat Pandemik COVID-19" /><span class="main-article-source">Bisnis cetak kartu vaksinasi Dapur Pro dan Maju Stamp - Daniel Morris Manurung</span></div><p>Banyak cerita tak terduga yang menimpa Daniel ketika menjalani bisnis ini. Salah satunya fakta bahwa banyak yang mengira bisnis cetak kartu vaksin ini merupakan jasa penyedia vaksinasi. Mereka juga kerap mendapat pertanyaan dari pelanggan seputar peluang untuk bisa mencetak kartu vaksinasi palsu bagi mereka yang belum divaksinasi.</p><p>&ldquo;Jadi memang dari awal sebelum saya memulai, sebelum saya bikin <em>flyer </em>juga saya pikirkan itu pasti terjadi. Jadi kita memang sudah siapkan jawaban, tidak perlu panjang lebar, setiap ada yang tanya kita bilang tidak bisa. Tidak bisa menerima pembuatan kartu palsu atau mengedit, bahkan mengganti nama pun kita tidak terima, mengganti bentuk, warna, sedikit pun kita tidak ada terima,&rdquo; jelasnya.</p><p>Ada juga tantangan bisnis datang dari para pelaku UMKM rekanannya, yang ternyata masih kurang bisa memanfaatkan teknologi untuk melakukan promosi secara daring. Namun, sebagai solusi masalah ini, Daniel mulai memberi pelatihan agar rekan-rekannya mampu mendapatkan pesanan dengan cara mereka sendiri.</p><p>&ldquo;Jadi saya buatkan flyer. Jadi selama kita kerja sama, kita <em>sharing </em>banyak tentang digital <em>marketing </em>ya. Jadi saya kasih tahu cara promosinya seperti ini, cara menjualnya seperti ini. Cara untuk <em>reach </em><em>market-</em>nya seperti ini. Bahkan pertemuan terakhir saya tawarin untuk bantu bikin <em>website</em> mereka gitu, secara gratis,&rdquo; kata Daniel.</p><p>         <a href="https://www.idntimes.com/news/indonesia/lia-hutasoit-1/heboh-influencer-ngaku-vaksin-dosis-3-dprd-tidak-ada-vaksin-booster" target="_blank">           <strong>             <em>Baca Juga: Heboh Influencer Ngaku Vaksin Dosis 3,  DPRD: Tidak Ada Vaksin Booster</em>           </strong>         </a>       </p></div><div class='show-page hide' target='4'></div><div class='split-page split-page4' data-target='4'><div style="margin: 10px auto;" class="inarticle-ads"><div id='div-gpt-ad-inarticle2'  class="loading-ads" style="width:728px;max-width:100%;margin:0px auto;text-align: center;">
	<script>
		googletag.cmd.push(function() { googletag.display('div-gpt-ad-inarticle2'); });
	</script>
</div>
</div><h2>4. Terdampak pandemik COVID-19</h2><div class="embed-image"><img src="https://cdn.idntimes.com/content-images/post/20210809/dsc07306-edit-copy-8fa06f27b227952818b54ae1b34e9562.jpg" alt="Kisah Inspiratif Menjajal Peluang Bisnis Baru saat Pandemik COVID-19" /><span class="main-article-source">Bisnis cetak kartu vaksinasi Dapur Pro dan Maju Stamp - Daniel Morris Manurung</span></div><p>Seperti kebanyakan bisnis lainnya, bisnis <em>digital printing</em> yang kini ditekuni Daniel telah terdampak pandemik COVID-19 yang sudah mewabah sejak Maret 2020 di Indonesia.</p><p>Akibat pandemik yang melarang berbagai kegiatan yang melibatkan banyak orang, mau tak mau berimbas pada usaha Daniel di dunia <em>digital </em><em>printing</em> ini. Ia tidak lagi menerima pesanan cetakan spanduk, flyer, maupun hal-hal lainnya yang dibutuhkan untuk promosi atau acara tertentu.</p><p>&ldquo;Kan kalau sebelum pandemik itu setiap minggu atau mungkin setiap bulan untuk tempat-tempat publik, itu kan pasti membutuhkan publikasi, jadi perlu cetak ataupun seperti <em>event </em>kampus. Dulu kita sering kerja sama dengan kampus-kampus di Kota Medan, dia setiap <em>event </em>itu butuh butuh spanduk, butuh sertifikat, butuh pin, butuh suvenir, lain-lain. Sekarang kan sudah <em>online </em>jadi itu gak ada semua,&rdquo; kata Daniel.</p><p>Namun demikian Daniel kini menemukan cara untuk mengimbangi penurunan pesanan tersebut, yakni dengan cara lebih memfokuskan bisnis ke ruang lingkup digital.</p><p>&ldquo;Jadi yang tadinya <em>event-event</em> kampus <em>flyer </em>itu bentuknya cetak, atau spanduk, kalau publikasinya sekarang itu kan jadi digital. Jadi beberapa kampus termasuk tempat kampus saya dulu itu pesannya jadinya digital. Flyer jadi filenya doang, bikin spanduk atau banner promosi yang digital doang, konten sosial media juga digital, bahkan sertifikat juga bentuknya digital. Jadi yang saya push harus dibentuk digitalnya semua,&rdquo; kata laki-laki yang juga menggeluti bidang fotografi dan videografi tersebut.</p><p>&ldquo;Dan juga untuk klien-klien saya yang punya UMKM juga, menjalankan bisnis <em>food and beverages</em> sejenisnya itu saya tawarin kontennya digital. Foto <em>product </em>atau <em>company profile</em> untuk usaha mereka saya tawarin, promosinya jadi <em>online</em>,&rdquo; pungkas Daniel.</p></div>

                        <p><i>  </i></p>


                        
                    </article>

                                            <div class="read-more-btn-check">
                            <div id="read-more-animation" class="read-more-animation" style="display: none;">
    <div class="read-more-animation__dot1"></div>
    <div class="read-more-animation__dot2"></div>
    <div class="read-more-animation__dot3"></div>
</div>

<div id="read-more" class="read-more-btn">
    <button class="btn btn-primary btn-lg btn-round" type="button">
        Read More
    </button>
</div>

<script>
    /*!
    * in-view 0.6.1 - Get notified when a DOM element enters or exits the viewport.
    * Copyright (c) 2016 Cam Wiegert <cam@camwiegert.com> - https://camwiegert.github.io/in-view
    * License: MIT
    */
    !function(t,e){"object"==typeof exports&&"object"==typeof module?module.exports=e():"function"==typeof define&&define.amd?define([],e):"object"==typeof exports?exports.inView=e():t.inView=e()}(this,function(){return function(t){function e(r){if(n[r])return n[r].exports;var i=n[r]={exports:{},id:r,loaded:!1};return t[r].call(i.exports,i,i.exports,e),i.loaded=!0,i.exports}var n={};return e.m=t,e.c=n,e.p="",e(0)}([function(t,e,n){"use strict";function r(t){return t&&t.__esModule?t:{"default":t}}var i=n(2),o=r(i);t.exports=o["default"]},function(t,e){function n(t){var e=typeof t;return null!=t&&("object"==e||"function"==e)}t.exports=n},function(t,e,n){"use strict";function r(t){return t&&t.__esModule?t:{"default":t}}Object.defineProperty(e,"__esModule",{value:!0});var i=n(9),o=r(i),u=n(3),f=r(u),s=n(4),c=function(){if("undefined"!=typeof window){var t=100,e=["scroll","resize","load"],n={history:[]},r={offset:{},threshold:0,test:s.inViewport},i=(0,o["default"])(function(){n.history.forEach(function(t){n[t].check()})},t);e.forEach(function(t){return addEventListener(t,i)}),window.MutationObserver&&addEventListener("DOMContentLoaded",function(){new MutationObserver(i).observe(document.body,{attributes:!0,childList:!0,subtree:!0})});var u=function(t){if("string"==typeof t){var e=[].slice.call(document.querySelectorAll(t));return n.history.indexOf(t)>-1?n[t].elements=e:(n[t]=(0,f["default"])(e,r),n.history.push(t)),n[t]}};return u.offset=function(t){if(void 0===t)return r.offset;var e=function(t){return"number"==typeof t};return["top","right","bottom","left"].forEach(e(t)?function(e){return r.offset[e]=t}:function(n){return e(t[n])?r.offset[n]=t[n]:null}),r.offset},u.threshold=function(t){return"number"==typeof t&&t>=0&&t<=1?r.threshold=t:r.threshold},u.test=function(t){return"function"==typeof t?r.test=t:r.test},u.is=function(t){return r.test(t,r)},u.offset(0),u}};e["default"]=c()},function(t,e){"use strict";function n(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}Object.defineProperty(e,"__esModule",{value:!0});var r=function(){function t(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,r.key,r)}}return function(e,n,r){return n&&t(e.prototype,n),r&&t(e,r),e}}(),i=function(){function t(e,r){n(this,t),this.options=r,this.elements=e,this.current=[],this.handlers={enter:[],exit:[]},this.singles={enter:[],exit:[]}}return r(t,[{key:"check",value:function(){var t=this;return this.elements.forEach(function(e){var n=t.options.test(e,t.options),r=t.current.indexOf(e),i=r>-1,o=n&&!i,u=!n&&i;o&&(t.current.push(e),t.emit("enter",e)),u&&(t.current.splice(r,1),t.emit("exit",e))}),this}},{key:"on",value:function(t,e){return this.handlers[t].push(e),this}},{key:"once",value:function(t,e){return this.singles[t].unshift(e),this}},{key:"emit",value:function(t,e){for(;this.singles[t].length;)this.singles[t].pop()(e);for(var n=this.handlers[t].length;--n>-1;)this.handlers[t][n](e);return this}}]),t}();e["default"]=function(t,e){return new i(t,e)}},function(t,e){"use strict";function n(t,e){var n=t.getBoundingClientRect(),r=n.top,i=n.right,o=n.bottom,u=n.left,f=n.width,s=n.height,c={t:o,r:window.innerWidth-u,b:window.innerHeight-r,l:i},a={x:e.threshold*f,y:e.threshold*s};return c.t>e.offset.top+a.y&&c.r>e.offset.right+a.x&&c.b>e.offset.bottom+a.y&&c.l>e.offset.left+a.x}Object.defineProperty(e,"__esModule",{value:!0}),e.inViewport=n},function(t,e){(function(e){var n="object"==typeof e&&e&&e.Object===Object&&e;t.exports=n}).call(e,function(){return this}())},function(t,e,n){var r=n(5),i="object"==typeof self&&self&&self.Object===Object&&self,o=r||i||Function("return this")();t.exports=o},function(t,e,n){function r(t,e,n){function r(e){var n=x,r=m;return x=m=void 0,E=e,w=t.apply(r,n)}function a(t){return E=t,j=setTimeout(h,e),M?r(t):w}function l(t){var n=t-O,r=t-E,i=e-n;return _?c(i,g-r):i}function d(t){var n=t-O,r=t-E;return void 0===O||n>=e||n<0||_&&r>=g}function h(){var t=o();return d(t)?p(t):void(j=setTimeout(h,l(t)))}function p(t){return j=void 0,T&&x?r(t):(x=m=void 0,w)}function v(){void 0!==j&&clearTimeout(j),E=0,x=O=m=j=void 0}function y(){return void 0===j?w:p(o())}function b(){var t=o(),n=d(t);if(x=arguments,m=this,O=t,n){if(void 0===j)return a(O);if(_)return j=setTimeout(h,e),r(O)}return void 0===j&&(j=setTimeout(h,e)),w}var x,m,g,w,j,O,E=0,M=!1,_=!1,T=!0;if("function"!=typeof t)throw new TypeError(f);return e=u(e)||0,i(n)&&(M=!!n.leading,_="maxWait"in n,g=_?s(u(n.maxWait)||0,e):g,T="trailing"in n?!!n.trailing:T),b.cancel=v,b.flush=y,b}var i=n(1),o=n(8),u=n(10),f="Expected a function",s=Math.max,c=Math.min;t.exports=r},function(t,e,n){var r=n(6),i=function(){return r.Date.now()};t.exports=i},function(t,e,n){function r(t,e,n){var r=!0,f=!0;if("function"!=typeof t)throw new TypeError(u);return o(n)&&(r="leading"in n?!!n.leading:r,f="trailing"in n?!!n.trailing:f),i(t,e,{leading:r,maxWait:e,trailing:f})}var i=n(7),o=n(1),u="Expected a function";t.exports=r},function(t,e){function n(t){return t}t.exports=n}])});

    (function() {
        var hostname = window.location.protocol+ '//' +window.location.hostname;
        var lastUrlIsFull = window.location.pathname.indexOf('/full') > -1;
        var readMoreAnimation = document.getElementById('read-more-animation');

        var hideReadMoreBtn = function() {
            var articleContent = document.getElementById("article-content");
            articleContent.className += " full";
            articleContent.style.maxHeight = 'initial';
            readMoreAnimation.style.display = 'none';

            if (!lastUrlIsFull) {
                var fullUrl = location.origin + location.pathname;

                if (fullUrl.substr(-1) === '/') {
                    fullUrl += "full";
                } else {
                    fullUrl += "/full";
                }

                if (location.search) {
                    fullUrl += location.search;
                }

                var articleTitle = document.querySelector('.title-text').textContent.trim();

                history.pushState({article: 'full'}, "Full Article", fullUrl.replace(location.origin, ''));

                                    window.dataLayer = window.dataLayer || [];
                    window.dataLayer.push({
                        'event': 'justForYouView',
                        'ecommerce': {
                            'promoView': {
                                'promotions': [
                                                                                                            {
                                        'id': 'a31d65aadf8bf941d6a8d7c5722206ba20f8675b',
                                        'name': 'Merdeka Ekspor Diresmikan, Jokowi Minta Bos Perbankan Beri Dukungan',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20200318/antarafoto-peresmian-asaff-2020-120320-ak-4-3c6e32b45e1fe27a6a736e04df785ef7_600x400.jpg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 1' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': 'dd01e24eeadf46a3cfd78a5122fa071c1d863539',
                                        'name': 'Bank Dunia: Pandemik COVID-19 Buat Negara Berkembang Menderita',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20200117/whatsapp-image-2020-01-17-at-113440-486a6a95931cebf421fadd6862af68c6_600x400.jpeg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 2' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': '6a64cb14638af6e3b6e99814067a92aabe84d81f',
                                        'name': 'Gelombang ke-18 Kartu Prakerja Segera Dibuka untuk 2,7 Juta Penerima',
                                        'creative': 'https://cdn.idntimes.com/content-images/community/2020/05/kartu pra kerja_600x400.jpg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 3' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': '3c39105571d4fb7e1e616632bab4e5b726837e4c',
                                        'name': 'RI Masuk 10 Besar Negara Vaksinasi COVID-19 Terbanyak Dunia',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20210316/antarafoto-vaksinasi-covid-19-untuk-tenaga-pendidik-kota-bogor-100321-arf-3-806035e63c4841af5d9b6bd631409166_600x400.jpg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 4' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': 'c4c6b02b5305b803faaa1fe933f200dbc98a8ba3',
                                        'name': 'Daftar 10 Orang Singapura Terkaya di Masa Pandemik COVID-19 ',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20210726/whatsapp-image-2021-07-26-at-115902-am-11b14b88614043ce7713538573ac6023_600x400.jpeg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 5' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': 'd24ccac2592bb2b8cd5b88e5daba9c3370b5c64d',
                                        'name': 'Mengenal 4 Jenis Pasar dalam Dunia Usaha',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20210804/whatsapp-image-2021-08-04-at-20430-pm-31f476306259ee197a48145f433959c3_600x400.jpeg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 6' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': '288814af5736c8f45028e9d506bf5b189fe6fe8b',
                                        'name': 'Profil Timur Sukirno, Komisaris Utama Garuda Pengganti Triawan Munaf',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20210319/whatsapp-image-2021-03-18-at-35527-pm-1-7ce00a2cec4466999d58d0247738ce4d_600x400.jpeg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 7' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': 'e3352a218f27b631a63a72fdd69064a1b57145c8',
                                        'name': 'Optimalisasi Pendapatan, Garuda Indonesia Terus Fokus di Bisnis Kargo',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20210813/whatsapp-image-2021-08-13-at-52139-pm-1a98196a5d9e994a6d86436fd0251e44_600x400.jpg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 8' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': 'e3ab30877a32ef7699935d9830c6eb3e57f3e2af',
                                        'name': '5 Faktor yang Memengaruhi Kepuasan Pelanggan ',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20210806/img-20210806-wa0004-e59fdbe052b60fa555af544e5f1a8c1f_600x400.jpg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 9' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': '7a12cae67ae64c5fed18670c5ac93e8dea55aa9a',
                                        'name': 'Usai Lakukan Perombakan, Erick Thohir Minta Garuda Fokus 2 Hal Ini',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20210602/whatsapp-image-2021-06-02-at-111546-am-cb7cde062f463ca8c45d124c75796387_600x400.jpeg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 10' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': '5e1bd3c0c0299e094cd96ee3f28664ff06a2ce6d',
                                        'name': 'Soal Teguran UNESCO, Sandiaga: Kita Terima dan Sudah Diskusi',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20210123/whatsapp-image-2021-01-23-at-104734-am-417fa711f50ae7999ccefa7307b3567a_600x400.jpeg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 11' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': 'a5f903c00de7e43cf91b50f68b07d9a0d01d895f',
                                        'name': 'Ini Alasan Erick Thohir Pangkas Komisaris &amp; Direksi Garuda',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20210531/antarafoto-kedatangan-vaksin-tahap-14-31052021-dr-03-edfdf0b779506b6b522cd07a0e2495a7_600x400.jpg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 12' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': 'dec4016721d75fa540fd1272f64ed3adc42caa44',
                                        'name': 'Susunan Terbaru Direksi dan Komisaris Garuda Usai Triawan-Yenny Mundur',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20210813/whatsapp-image-2021-08-13-at-52139-pm-1a98196a5d9e994a6d86436fd0251e44_600x400.jpg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 13' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': '116394420e89395fd32dbbcded2b92bf53d8ac4e',
                                        'name': 'Timur Sukirno Gantikan Triawan-Yenny Sebagai Komisaris Garuda',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20200124/whatsapp-image-2020-01-24-at-141426-8a8d5f85321425bda59a323aa5046b59_600x400.jpeg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 14' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': 'e056908cc950ac9ddef0f00c12516b867f5cc8f6',
                                        'name': 'Jelang Akhir Pekan, Rupiah Ditutup Melemah Tipis Terhadap Dolar AS',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20210426/whatsapp-image-2021-04-26-at-21458-pm-bf8670fe0b527c2752f7322ceebb8149_600x400.jpeg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 15' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': '63a9e3ae962db19b39f255e9c606e8193243a866',
                                        'name': 'Demi Masa Depan, 5 Dana Ini Penting Disiapkan sejak Usia 20-an',
                                        'creative': 'https://cdn.idntimes.com/content-images/community/2021/08/pexels-buro-millennial-1438072-min-compress1-1-1e225b96884a8cd752c203118612090e-9ebbc54402aec7876d35d0a3b60a0b94_600x400.jpg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 16' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': '6bd3b44fbf7e32d75cab26f236739bb66939f4b5',
                                        'name': 'IHSG Ditutup Melemah Tipis, 8 Saham Ini Laris Manis ',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20210225/antarafoto-ihsg-akhir-pekan-melemah-120719-riv-1-715cd64b3b39e7ef78af97e4eb731dac-c982ce58a2b9c0102acd5b4c31cc4930_600x400.jpg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 17' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': 'b2b4bf251ab68a3d92e36c3f2db5c6ef1c39e011',
                                        'name': 'Yenny Wahid Umumkan Mundur Sebagai Komisaris Garuda Indonesia ',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20210621/kebaya-yenni-wahid-210416-18-053e691fa466639f209fb077005e6000-6199b9ae884619471c300a68c7a8fb6c_600x400.jpg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 18' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': '55725259c954a16b2bd1ad1f8f4721d51c5b5d41',
                                        'name': 'Begini Posisi Tidur saat Asam Lambung Naik yang Disarankan Ahli',
                                        'creative': 'https://cdn.popmama.com/content-images/post/20200905/17jpg-7d335b8094708cf184b5600d9c4c5837_800x420.jpg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 19' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': '2bc4df179a024a9775b99198dcae2d3c43849099',
                                        'name': 'Begini Cara Mengatasi Batuk pada Bayi 4 Bulan dari Rumah',
                                        'creative': 'https://cdn.popmama.com/content-images/post/20200429/portrait-sick-boy-cleaning-his-nose-with-napkin-flu-season-concept-96872-1358-b26bf5865fbf301e239b43931d74e18d_800x420.jpg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 20' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': 'fc2342e776b2f3f0a9d563b8aec21730425ac3af',
                                        'name': 'Berbahayakah Pemakaian Perhiasan Emas untuk Kulit Bayi? ',
                                        'creative': 'https://cdn.popmama.com/content-images/post/20200620/712268547f2172c7d76462c830131776jpg-2e243e6359af1553b98ef9ab276507d3_800x420.jpg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 21' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': '88c53255d6e9a3146827adb0605b69ed4587fe47',
                                        'name': 'Selain Pencak Silat, Ini 8 Olahraga Tradisional Asli Indonesia',
                                        'creative': 'https://cdn.popbela.com/content-images/post/20210812/a9acf07ec5bd541ab1e52ccd08cbb5f4_750x500.png', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 22' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': '6d65c8026e6a59c3cbbf7647fdeb65ca522f1f76',
                                        'name': 'Jangan Bingung, Ini 7 Cara Menghadapi Pacar yang Egois',
                                        'creative': 'https://cdn.popbela.com/content-images/post/20180821/photogrist-5176713dc6b83da949c9f8b28a368506_750x500.jpg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 23' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': '29635b5609da2b43578837be5c3c4d8ae213bc51',
                                        'name': '#PopbelaOOTD: Rekomendasi Sepatu Santai untuk Hadiri Pesta Outdoor',
                                        'creative': 'https://cdn.popbela.com/content-images/post/20210814/ezgifcom-gif-maker-37-a19f9199eb2a6ca2fface73434c737cb_750x500.jpg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 24' // page group - article list name - slot or position
                                    },
                                                                    ]
                            }
                        }
                    });
                
                
                (function() {
                    var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
                    s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
                    el.parentNode.insertBefore(s, el);
                })();
                _comscore.push({ c1: "2", c2: "20678181" });

                
                _atrk_opts = { atrk_acct:"8EwHv1FYxz20cv", domain:"idntimes.com",dynamic: true};
                (function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://certify-js.alexametrics.com/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();

                $.ajax(hostname+ '/pv.xml?page=readmore');

                window.addEventListener('popstate', function() {
                    window.history.go(-1);
                });
            }
        };

        var btnReadMore = document.getElementById("read-more");

        if (lastUrlIsFull) {
            hideReadMoreBtn();
            btnReadMore.style.display = 'none';
        } else {
            inView('#read-more').once('enter', function() {
                btnReadMore.style.display = 'none';
                readMoreAnimation.style.display = 'block';
                setTimeout(hideReadMoreBtn, 500);
            });

            btnReadMore.addEventListener("click", function(e) {
                e.preventDefault();
                btnReadMore.style.display = 'none';
                hideReadMoreBtn();
            });
        }
    })();

</script>
                        </div>
					                </div>

                
									
					<div class="content-post-topic">
						<h3>Topic:</h3>
						<ul>
														<li><a href="https://www.idntimes.com/tag/bisnis" class="btn-topic">bisnis</a></li>
														<li><a href="https://www.idntimes.com/tag/enterpreneurship" class="btn-topic">enterpreneurship</a></li>
														<li><a href="https://www.idntimes.com/tag/usaha-1" class="btn-topic">usaha</a></li>
														<li><a href="https://www.idntimes.com/tag/pandemik-covid-19" class="btn-topic">pandemik covid-19</a></li>
														<li><a href="https://www.idntimes.com/tag/covid-19" class="btn-topic">COVID-19</a></li>
														<li><a href="https://www.idntimes.com/tag/inspire-me" class="btn-topic">Inspire Me</a></li>
													</ul>
					</div>
				
									<div class="content-post-editorial">
						<div class="content-post-editorial-header divide-table">
							<ul class="content-post-editorial-photo divide-table-cell">
																										<li><img src="https://www.idntimes.com/assets/img/placeholder-sq.png" data-src="https://cdn.idntimes.com/content-images/avatar/rochmanudin-wijaya_100x100.jpg?v=7b7cfc4fd2a41a4111db79b3b1be24e0" alt="Rochmanudin" class="lazyload"></li>
															</ul>
							<div class="content-post-information divide-table-cell">
								<span class="date">Editorial Team</span>
								<a href="javascript:;" data-toggle="collapse" data-target="#editor-profile" class="">Show All</a>
							</div>
						</div>
						<!-- data-toggle="collapse" data-target="#demo" -->
						<div id="editor-profile" class="content-post-editorial-content collapse">
							<fieldset>
								<ul class="content-post-editorial-full">
                                                                            <li class="divide-table">
                                            <div class="content-post-image divide-table-cell">
                                                                                                <img src="https://www.idntimes.com/assets/img/placeholder-sq.png" data-src="https://cdn.idntimes.com/content-images/avatar/rochmanudin-wijaya_100x100.jpg?v=7b7cfc4fd2a41a4111db79b3b1be24e0" alt="Rochmanudin" class="lazyload">
                                            </div>
                                            <div class="content-post-name divide-table-cell">
                                                <a href="https://www.idntimes.com/rochmanudin-wijaya">Rochmanudin</a>
                                                <span>Editor</span>
                                            </div>
                                                                                    </li>
																	</ul>
							</fieldset>
						</div>
					</div>
                
									<div class="content-post-comment" style="width: 100%;">
						<div class="fb-comments" data-href="https://www.idntimes.com/business/finance/rehia-indrayanti-br-sebayang/kisah-inspiratif-menjajal-peluang-bisnis-baru-saat-pandemik-covid" data-width="100%" data-numposts="5"></div>
					</div>
				
									<!-- iVideoSense player Widget - IDNTIMES -->
					<!-- container div can be styled in anyway required -->
					
				
				
									<section class="latest-post clearfix">
						<h3 class="section-title"><span>Berita Terkini Lainnya</span></h3>
						<div id="related-articles" class="list-latest main-latest clearfix">
															
								
								<div class="box-latest box-list">
									<a href="https://www.idntimes.com/business/economy/vamela-aurina-2/merdeka-ekspor-diresmikan-jokowi-minta-bos-perbankan-beri-dukungan" title="Merdeka Ekspor Diresmikan, Jokowi Minta Bos Perbankan Beri Dukungan" class="box-panel just-for-you-click" data-position="1" data-post-id="a31d65aadf8bf941d6a8d7c5722206ba20f8675b" data-image-url="https://cdn.idntimes.com/content-images/post/20200318/antarafoto-peresmian-asaff-2020-120320-ak-4-3c6e32b45e1fe27a6a736e04df785ef7_600x400.jpg">										<div class="image-latest box-image">
											<img class="large-thumbnail lazyload" src="https://www.idntimes.com/assets/img/placeholder.png" data-src="https://cdn.idntimes.com/content-images/post/20200318/antarafoto-peresmian-asaff-2020-120320-ak-4-3c6e32b45e1fe27a6a736e04df785ef7_420x280.jpg" alt="Merdeka Ekspor Diresmikan, Jokowi Minta Bos Perbankan Beri Dukungan">
										</div>
									</a>
                                    <div class="description-latest box-description">
                                        <div class="date-cat">
                                            <span class="category">
                                                <a href="https://www.idntimes.com/business">Business</a>                                            </span>
                                            <time class="date" datetime="14 Aug 21 | 15:19">
                                                
                                                14 Aug 21 | 15:19
                                            </time>
                                        </div>
                                        <a href="https://www.idntimes.com/business/economy/vamela-aurina-2/merdeka-ekspor-diresmikan-jokowi-minta-bos-perbankan-beri-dukungan" title="Merdeka Ekspor Diresmikan, Jokowi Minta Bos Perbankan Beri Dukungan" class="just-for-you-click" data-position="1" data-post-id="a31d65aadf8bf941d6a8d7c5722206ba20f8675b" data-image-url="https://cdn.idntimes.com/content-images/post/20200318/antarafoto-peresmian-asaff-2020-120320-ak-4-3c6e32b45e1fe27a6a736e04df785ef7_600x400.jpg"><h2 class="title-text">Merdeka Ekspor Diresmikan, Jokowi Minta Bos Perbankan Beri Dukungan</h2></a>                                    </div>
								</div>
															
								
								<div class="box-latest box-list">
									<a href="https://www.idntimes.com/business/economy/rehia-indrayanti-br-sebayang/bank-dunia-pandemik-covid-19-buat-negara-berkembang-menderita" title="Bank Dunia: Pandemik COVID-19 Buat Negara Berkembang Menderita" class="box-panel just-for-you-click" data-position="2" data-post-id="dd01e24eeadf46a3cfd78a5122fa071c1d863539" data-image-url="https://cdn.idntimes.com/content-images/post/20200117/whatsapp-image-2020-01-17-at-113440-486a6a95931cebf421fadd6862af68c6_600x400.jpeg">										<div class="image-latest box-image">
											<img class="large-thumbnail lazyload" src="https://www.idntimes.com/assets/img/placeholder.png" data-src="https://cdn.idntimes.com/content-images/post/20200117/whatsapp-image-2020-01-17-at-113440-486a6a95931cebf421fadd6862af68c6_420x280.jpeg" alt="Bank Dunia: Pandemik COVID-19 Buat Negara Berkembang Menderita">
										</div>
									</a>
                                    <div class="description-latest box-description">
                                        <div class="date-cat">
                                            <span class="category">
                                                <a href="https://www.idntimes.com/business">Business</a>                                            </span>
                                            <time class="date" datetime="14 Aug 21 | 13:41">
                                                
                                                14 Aug 21 | 13:41
                                            </time>
                                        </div>
                                        <a href="https://www.idntimes.com/business/economy/rehia-indrayanti-br-sebayang/bank-dunia-pandemik-covid-19-buat-negara-berkembang-menderita" title="Bank Dunia: Pandemik COVID-19 Buat Negara Berkembang Menderita" class="just-for-you-click" data-position="2" data-post-id="dd01e24eeadf46a3cfd78a5122fa071c1d863539" data-image-url="https://cdn.idntimes.com/content-images/post/20200117/whatsapp-image-2020-01-17-at-113440-486a6a95931cebf421fadd6862af68c6_600x400.jpeg"><h2 class="title-text">Bank Dunia: Pandemik COVID-19 Buat Negara Berkembang Menderita</h2></a>                                    </div>
								</div>
															
								
								<div class="box-latest box-list">
									<a href="https://www.idntimes.com/business/economy/ridwan-aji-pitoko-1/gelombang-ke-18-kartu-prakerja-segera-dibuka-untuk-27-juta-penerima" title="Gelombang ke-18 Kartu Prakerja Segera Dibuka untuk 2,7 Juta Penerima" class="box-panel just-for-you-click" data-position="3" data-post-id="6a64cb14638af6e3b6e99814067a92aabe84d81f" data-image-url="https://cdn.idntimes.com/content-images/community/2020/05/kartu pra kerja_600x400.jpg">										<div class="image-latest box-image">
											<img class="large-thumbnail lazyload" src="https://www.idntimes.com/assets/img/placeholder.png" data-src="https://cdn.idntimes.com/content-images/community/2020/05/kartu pra kerja_420x280.jpg" alt="Gelombang ke-18 Kartu Prakerja Segera Dibuka untuk 2,7 Juta Penerima">
										</div>
									</a>
                                    <div class="description-latest box-description">
                                        <div class="date-cat">
                                            <span class="category">
                                                <a href="https://www.idntimes.com/business">Business</a>                                            </span>
                                            <time class="date" datetime="14 Aug 21 | 10:27">
                                                
                                                14 Aug 21 | 10:27
                                            </time>
                                        </div>
                                        <a href="https://www.idntimes.com/business/economy/ridwan-aji-pitoko-1/gelombang-ke-18-kartu-prakerja-segera-dibuka-untuk-27-juta-penerima" title="Gelombang ke-18 Kartu Prakerja Segera Dibuka untuk 2,7 Juta Penerima" class="just-for-you-click" data-position="3" data-post-id="6a64cb14638af6e3b6e99814067a92aabe84d81f" data-image-url="https://cdn.idntimes.com/content-images/community/2020/05/kartu pra kerja_600x400.jpg"><h2 class="title-text">Gelombang ke-18 Kartu Prakerja Segera Dibuka untuk 2,7 Juta Penerima</h2></a>                                    </div>
								</div>
															
								
								<div class="box-latest box-list">
									<a href="https://www.idntimes.com/business/economy/rehia-indrayanti-br-sebayang/ri-masuk-10-besar-negara-vaksinasi-covid-19-terbanyak-dunia" title="RI Masuk 10 Besar Negara Vaksinasi COVID-19 Terbanyak Dunia" class="box-panel just-for-you-click" data-position="4" data-post-id="3c39105571d4fb7e1e616632bab4e5b726837e4c" data-image-url="https://cdn.idntimes.com/content-images/post/20210316/antarafoto-vaksinasi-covid-19-untuk-tenaga-pendidik-kota-bogor-100321-arf-3-806035e63c4841af5d9b6bd631409166_600x400.jpg">										<div class="image-latest box-image">
											<img class="large-thumbnail lazyload" src="https://www.idntimes.com/assets/img/placeholder.png" data-src="https://cdn.idntimes.com/content-images/post/20210316/antarafoto-vaksinasi-covid-19-untuk-tenaga-pendidik-kota-bogor-100321-arf-3-806035e63c4841af5d9b6bd631409166_420x280.jpg" alt="RI Masuk 10 Besar Negara Vaksinasi COVID-19 Terbanyak Dunia">
										</div>
									</a>
                                    <div class="description-latest box-description">
                                        <div class="date-cat">
                                            <span class="category">
                                                <a href="https://www.idntimes.com/business">Business</a>                                            </span>
                                            <time class="date" datetime="14 Aug 21 | 09:43">
                                                
                                                14 Aug 21 | 09:43
                                            </time>
                                        </div>
                                        <a href="https://www.idntimes.com/business/economy/rehia-indrayanti-br-sebayang/ri-masuk-10-besar-negara-vaksinasi-covid-19-terbanyak-dunia" title="RI Masuk 10 Besar Negara Vaksinasi COVID-19 Terbanyak Dunia" class="just-for-you-click" data-position="4" data-post-id="3c39105571d4fb7e1e616632bab4e5b726837e4c" data-image-url="https://cdn.idntimes.com/content-images/post/20210316/antarafoto-vaksinasi-covid-19-untuk-tenaga-pendidik-kota-bogor-100321-arf-3-806035e63c4841af5d9b6bd631409166_600x400.jpg"><h2 class="title-text">RI Masuk 10 Besar Negara Vaksinasi COVID-19 Terbanyak Dunia</h2></a>                                    </div>
								</div>
															
								
								<div class="box-latest box-list">
									<a href="https://www.idntimes.com/business/economy/rehia-indrayanti-br-sebayang/daftar-10-orang-singapura-terkaya-di-masa-pandemik-covid" title="Daftar 10 Orang Singapura Terkaya di Masa Pandemik COVID-19 " class="box-panel just-for-you-click" data-position="5" data-post-id="c4c6b02b5305b803faaa1fe933f200dbc98a8ba3" data-image-url="https://cdn.idntimes.com/content-images/post/20210726/whatsapp-image-2021-07-26-at-115902-am-11b14b88614043ce7713538573ac6023_600x400.jpeg">										<div class="image-latest box-image">
											<img class="large-thumbnail lazyload" src="https://www.idntimes.com/assets/img/placeholder.png" data-src="https://cdn.idntimes.com/content-images/post/20210726/whatsapp-image-2021-07-26-at-115902-am-11b14b88614043ce7713538573ac6023_420x280.jpeg" alt="Daftar 10 Orang Singapura Terkaya di Masa Pandemik COVID-19 ">
										</div>
									</a>
                                    <div class="description-latest box-description">
                                        <div class="date-cat">
                                            <span class="category">
                                                <a href="https://www.idntimes.com/business">Business</a>                                            </span>
                                            <time class="date" datetime="14 Aug 21 | 09:05">
                                                
                                                14 Aug 21 | 09:05
                                            </time>
                                        </div>
                                        <a href="https://www.idntimes.com/business/economy/rehia-indrayanti-br-sebayang/daftar-10-orang-singapura-terkaya-di-masa-pandemik-covid" title="Daftar 10 Orang Singapura Terkaya di Masa Pandemik COVID-19 " class="just-for-you-click" data-position="5" data-post-id="c4c6b02b5305b803faaa1fe933f200dbc98a8ba3" data-image-url="https://cdn.idntimes.com/content-images/post/20210726/whatsapp-image-2021-07-26-at-115902-am-11b14b88614043ce7713538573ac6023_600x400.jpeg"><h2 class="title-text">Daftar 10 Orang Singapura Terkaya di Masa Pandemik COVID-19 </h2></a>                                    </div>
								</div>
															
								
								<div class="box-latest box-list">
									<a href="https://www.idntimes.com/business/economy/vadhia-lidyana-1/mengenal-4-jenis-pasar-dalam-dunia-usaha" title="Mengenal 4 Jenis Pasar dalam Dunia Usaha" class="box-panel just-for-you-click" data-position="6" data-post-id="d24ccac2592bb2b8cd5b88e5daba9c3370b5c64d" data-image-url="https://cdn.idntimes.com/content-images/post/20210804/whatsapp-image-2021-08-04-at-20430-pm-31f476306259ee197a48145f433959c3_600x400.jpeg">										<div class="image-latest box-image">
											<img class="large-thumbnail lazyload" src="https://www.idntimes.com/assets/img/placeholder.png" data-src="https://cdn.idntimes.com/content-images/post/20210804/whatsapp-image-2021-08-04-at-20430-pm-31f476306259ee197a48145f433959c3_420x280.jpeg" alt="Mengenal 4 Jenis Pasar dalam Dunia Usaha">
										</div>
									</a>
                                    <div class="description-latest box-description">
                                        <div class="date-cat">
                                            <span class="category">
                                                <a href="https://www.idntimes.com/business">Business</a>                                            </span>
                                            <time class="date" datetime="14 Aug 21 | 07:05">
                                                
                                                14 Aug 21 | 07:05
                                            </time>
                                        </div>
                                        <a href="https://www.idntimes.com/business/economy/vadhia-lidyana-1/mengenal-4-jenis-pasar-dalam-dunia-usaha" title="Mengenal 4 Jenis Pasar dalam Dunia Usaha" class="just-for-you-click" data-position="6" data-post-id="d24ccac2592bb2b8cd5b88e5daba9c3370b5c64d" data-image-url="https://cdn.idntimes.com/content-images/post/20210804/whatsapp-image-2021-08-04-at-20430-pm-31f476306259ee197a48145f433959c3_600x400.jpeg"><h2 class="title-text">Mengenal 4 Jenis Pasar dalam Dunia Usaha</h2></a>                                    </div>
								</div>
															
								
								<div class="box-latest box-list">
									<a href="https://www.idntimes.com/business/economy/ridwan-aji-pitoko-1/profil-timur-sukirno-komisaris-utama-garuda-pengganti-triawan-munaf" title="Profil Timur Sukirno, Komisaris Utama Garuda Pengganti Triawan Munaf" class="box-panel just-for-you-click" data-position="7" data-post-id="288814af5736c8f45028e9d506bf5b189fe6fe8b" data-image-url="https://cdn.idntimes.com/content-images/post/20210319/whatsapp-image-2021-03-18-at-35527-pm-1-7ce00a2cec4466999d58d0247738ce4d_600x400.jpeg">										<div class="image-latest box-image">
											<img class="large-thumbnail lazyload" src="https://www.idntimes.com/assets/img/placeholder.png" data-src="https://cdn.idntimes.com/content-images/post/20210319/whatsapp-image-2021-03-18-at-35527-pm-1-7ce00a2cec4466999d58d0247738ce4d_420x280.jpeg" alt="Profil Timur Sukirno, Komisaris Utama Garuda Pengganti Triawan Munaf">
										</div>
									</a>
                                    <div class="description-latest box-description">
                                        <div class="date-cat">
                                            <span class="category">
                                                <a href="https://www.idntimes.com/business">Business</a>                                            </span>
                                            <time class="date" datetime="14 Aug 21 | 06:05">
                                                
                                                14 Aug 21 | 06:05
                                            </time>
                                        </div>
                                        <a href="https://www.idntimes.com/business/economy/ridwan-aji-pitoko-1/profil-timur-sukirno-komisaris-utama-garuda-pengganti-triawan-munaf" title="Profil Timur Sukirno, Komisaris Utama Garuda Pengganti Triawan Munaf" class="just-for-you-click" data-position="7" data-post-id="288814af5736c8f45028e9d506bf5b189fe6fe8b" data-image-url="https://cdn.idntimes.com/content-images/post/20210319/whatsapp-image-2021-03-18-at-35527-pm-1-7ce00a2cec4466999d58d0247738ce4d_600x400.jpeg"><h2 class="title-text">Profil Timur Sukirno, Komisaris Utama Garuda Pengganti Triawan Munaf</h2></a>                                    </div>
								</div>
															
								
								<div class="box-latest box-list">
									<a href="https://www.idntimes.com/business/economy/ridwan-aji-pitoko-1/optimalisasi-pendapatan-garuda-indonesia-terus-fokus-di-bisnis-kargo" title="Optimalisasi Pendapatan, Garuda Indonesia Terus Fokus di Bisnis Kargo" class="box-panel just-for-you-click" data-position="8" data-post-id="e3352a218f27b631a63a72fdd69064a1b57145c8" data-image-url="https://cdn.idntimes.com/content-images/post/20210813/whatsapp-image-2021-08-13-at-52139-pm-1a98196a5d9e994a6d86436fd0251e44_600x400.jpg">										<div class="image-latest box-image">
											<img class="large-thumbnail lazyload" src="https://www.idntimes.com/assets/img/placeholder.png" data-src="https://cdn.idntimes.com/content-images/post/20210813/whatsapp-image-2021-08-13-at-52139-pm-1a98196a5d9e994a6d86436fd0251e44_420x280.jpg" alt="Optimalisasi Pendapatan, Garuda Indonesia Terus Fokus di Bisnis Kargo">
										</div>
									</a>
                                    <div class="description-latest box-description">
                                        <div class="date-cat">
                                            <span class="category">
                                                <a href="https://www.idntimes.com/business">Business</a>                                            </span>
                                            <time class="date" datetime="14 Aug 21 | 05:35">
                                                
                                                14 Aug 21 | 05:35
                                            </time>
                                        </div>
                                        <a href="https://www.idntimes.com/business/economy/ridwan-aji-pitoko-1/optimalisasi-pendapatan-garuda-indonesia-terus-fokus-di-bisnis-kargo" title="Optimalisasi Pendapatan, Garuda Indonesia Terus Fokus di Bisnis Kargo" class="just-for-you-click" data-position="8" data-post-id="e3352a218f27b631a63a72fdd69064a1b57145c8" data-image-url="https://cdn.idntimes.com/content-images/post/20210813/whatsapp-image-2021-08-13-at-52139-pm-1a98196a5d9e994a6d86436fd0251e44_600x400.jpg"><h2 class="title-text">Optimalisasi Pendapatan, Garuda Indonesia Terus Fokus di Bisnis Kargo</h2></a>                                    </div>
								</div>
															
								
								<div class="box-latest box-list">
									<a href="https://www.idntimes.com/business/economy/helmi/5-faktor-yang-memengaruhi-kepuasan-pelanggan" title="5 Faktor yang Memengaruhi Kepuasan Pelanggan " class="box-panel just-for-you-click" data-position="9" data-post-id="e3ab30877a32ef7699935d9830c6eb3e57f3e2af" data-image-url="https://cdn.idntimes.com/content-images/post/20210806/img-20210806-wa0004-e59fdbe052b60fa555af544e5f1a8c1f_600x400.jpg">										<div class="image-latest box-image">
											<img class="large-thumbnail lazyload" src="https://www.idntimes.com/assets/img/placeholder.png" data-src="https://cdn.idntimes.com/content-images/post/20210806/img-20210806-wa0004-e59fdbe052b60fa555af544e5f1a8c1f_420x280.jpg" alt="5 Faktor yang Memengaruhi Kepuasan Pelanggan ">
										</div>
									</a>
                                    <div class="description-latest box-description">
                                        <div class="date-cat">
                                            <span class="category">
                                                <a href="https://www.idntimes.com/business">Business</a>                                            </span>
                                            <time class="date" datetime="14 Aug 21 | 05:05">
                                                
                                                14 Aug 21 | 05:05
                                            </time>
                                        </div>
                                        <a href="https://www.idntimes.com/business/economy/helmi/5-faktor-yang-memengaruhi-kepuasan-pelanggan" title="5 Faktor yang Memengaruhi Kepuasan Pelanggan " class="just-for-you-click" data-position="9" data-post-id="e3ab30877a32ef7699935d9830c6eb3e57f3e2af" data-image-url="https://cdn.idntimes.com/content-images/post/20210806/img-20210806-wa0004-e59fdbe052b60fa555af544e5f1a8c1f_600x400.jpg"><h2 class="title-text">5 Faktor yang Memengaruhi Kepuasan Pelanggan </h2></a>                                    </div>
								</div>
															
								
								<div class="box-latest box-list">
									<a href="https://www.idntimes.com/business/economy/ridwan-aji-pitoko-1/usai-lakukan-perombakan-erick-thohir-minta-garuda-fokus-2-hal-ini" title="Usai Lakukan Perombakan, Erick Thohir Minta Garuda Fokus 2 Hal Ini" class="box-panel just-for-you-click" data-position="10" data-post-id="7a12cae67ae64c5fed18670c5ac93e8dea55aa9a" data-image-url="https://cdn.idntimes.com/content-images/post/20210602/whatsapp-image-2021-06-02-at-111546-am-cb7cde062f463ca8c45d124c75796387_600x400.jpeg">										<div class="image-latest box-image">
											<img class="large-thumbnail lazyload" src="https://www.idntimes.com/assets/img/placeholder.png" data-src="https://cdn.idntimes.com/content-images/post/20210602/whatsapp-image-2021-06-02-at-111546-am-cb7cde062f463ca8c45d124c75796387_420x280.jpeg" alt="Usai Lakukan Perombakan, Erick Thohir Minta Garuda Fokus 2 Hal Ini">
										</div>
									</a>
                                    <div class="description-latest box-description">
                                        <div class="date-cat">
                                            <span class="category">
                                                <a href="https://www.idntimes.com/business">Business</a>                                            </span>
                                            <time class="date" datetime="13 Aug 21 | 20:41">
                                                
                                                13 Aug 21 | 20:41
                                            </time>
                                        </div>
                                        <a href="https://www.idntimes.com/business/economy/ridwan-aji-pitoko-1/usai-lakukan-perombakan-erick-thohir-minta-garuda-fokus-2-hal-ini" title="Usai Lakukan Perombakan, Erick Thohir Minta Garuda Fokus 2 Hal Ini" class="just-for-you-click" data-position="10" data-post-id="7a12cae67ae64c5fed18670c5ac93e8dea55aa9a" data-image-url="https://cdn.idntimes.com/content-images/post/20210602/whatsapp-image-2021-06-02-at-111546-am-cb7cde062f463ca8c45d124c75796387_600x400.jpeg"><h2 class="title-text">Usai Lakukan Perombakan, Erick Thohir Minta Garuda Fokus 2 Hal Ini</h2></a>                                    </div>
								</div>
															
								
								<div class="box-latest box-list">
									<a href="https://www.idntimes.com/business/economy/helmi/soal-teguran-unesco-sandiaga-kita-terima-dan-sudah-diskusi" title="Soal Teguran UNESCO, Sandiaga: Kita Terima dan Sudah Diskusi" class="box-panel just-for-you-click" data-position="11" data-post-id="5e1bd3c0c0299e094cd96ee3f28664ff06a2ce6d" data-image-url="https://cdn.idntimes.com/content-images/post/20210123/whatsapp-image-2021-01-23-at-104734-am-417fa711f50ae7999ccefa7307b3567a_600x400.jpeg">										<div class="image-latest box-image">
											<img class="large-thumbnail lazyload" src="https://www.idntimes.com/assets/img/placeholder.png" data-src="https://cdn.idntimes.com/content-images/post/20210123/whatsapp-image-2021-01-23-at-104734-am-417fa711f50ae7999ccefa7307b3567a_420x280.jpeg" alt="Soal Teguran UNESCO, Sandiaga: Kita Terima dan Sudah Diskusi">
										</div>
									</a>
                                    <div class="description-latest box-description">
                                        <div class="date-cat">
                                            <span class="category">
                                                <a href="https://www.idntimes.com/business">Business</a>                                            </span>
                                            <time class="date" datetime="13 Aug 21 | 19:42">
                                                
                                                13 Aug 21 | 19:42
                                            </time>
                                        </div>
                                        <a href="https://www.idntimes.com/business/economy/helmi/soal-teguran-unesco-sandiaga-kita-terima-dan-sudah-diskusi" title="Soal Teguran UNESCO, Sandiaga: Kita Terima dan Sudah Diskusi" class="just-for-you-click" data-position="11" data-post-id="5e1bd3c0c0299e094cd96ee3f28664ff06a2ce6d" data-image-url="https://cdn.idntimes.com/content-images/post/20210123/whatsapp-image-2021-01-23-at-104734-am-417fa711f50ae7999ccefa7307b3567a_600x400.jpeg"><h2 class="title-text">Soal Teguran UNESCO, Sandiaga: Kita Terima dan Sudah Diskusi</h2></a>                                    </div>
								</div>
															
								
								<div class="box-latest box-list">
									<a href="https://www.idntimes.com/business/economy/ridwan-aji-pitoko-1/ini-alasan-erick-thohir-pangkas-komisaris-direksi-garuda" title="Ini Alasan Erick Thohir Pangkas Komisaris & Direksi Garuda" class="box-panel just-for-you-click" data-position="12" data-post-id="a5f903c00de7e43cf91b50f68b07d9a0d01d895f" data-image-url="https://cdn.idntimes.com/content-images/post/20210531/antarafoto-kedatangan-vaksin-tahap-14-31052021-dr-03-edfdf0b779506b6b522cd07a0e2495a7_600x400.jpg">										<div class="image-latest box-image">
											<img class="large-thumbnail lazyload" src="https://www.idntimes.com/assets/img/placeholder.png" data-src="https://cdn.idntimes.com/content-images/post/20210531/antarafoto-kedatangan-vaksin-tahap-14-31052021-dr-03-edfdf0b779506b6b522cd07a0e2495a7_420x280.jpg" alt="Ini Alasan Erick Thohir Pangkas Komisaris &amp; Direksi Garuda">
										</div>
									</a>
                                    <div class="description-latest box-description">
                                        <div class="date-cat">
                                            <span class="category">
                                                <a href="https://www.idntimes.com/business">Business</a>                                            </span>
                                            <time class="date" datetime="13 Aug 21 | 18:56">
                                                
                                                13 Aug 21 | 18:56
                                            </time>
                                        </div>
                                        <a href="https://www.idntimes.com/business/economy/ridwan-aji-pitoko-1/ini-alasan-erick-thohir-pangkas-komisaris-direksi-garuda" title="Ini Alasan Erick Thohir Pangkas Komisaris & Direksi Garuda" class="just-for-you-click" data-position="12" data-post-id="a5f903c00de7e43cf91b50f68b07d9a0d01d895f" data-image-url="https://cdn.idntimes.com/content-images/post/20210531/antarafoto-kedatangan-vaksin-tahap-14-31052021-dr-03-edfdf0b779506b6b522cd07a0e2495a7_600x400.jpg"><h2 class="title-text">Ini Alasan Erick Thohir Pangkas Komisaris & Direksi Garuda</h2></a>                                    </div>
								</div>
															
								
								<div class="box-latest box-list">
									<a href="https://www.idntimes.com/business/economy/ridwan-aji-pitoko-1/susunan-terbaru-direksi-dan-komisaris-garuda-usai-triawan-yenny-mundur" title="Susunan Terbaru Direksi dan Komisaris Garuda Usai Triawan-Yenny Mundur" class="box-panel just-for-you-click" data-position="13" data-post-id="dec4016721d75fa540fd1272f64ed3adc42caa44" data-image-url="https://cdn.idntimes.com/content-images/post/20210813/whatsapp-image-2021-08-13-at-52139-pm-1a98196a5d9e994a6d86436fd0251e44_600x400.jpg">										<div class="image-latest box-image">
											<img class="large-thumbnail lazyload" src="https://www.idntimes.com/assets/img/placeholder.png" data-src="https://cdn.idntimes.com/content-images/post/20210813/whatsapp-image-2021-08-13-at-52139-pm-1a98196a5d9e994a6d86436fd0251e44_420x280.jpg" alt="Susunan Terbaru Direksi dan Komisaris Garuda Usai Triawan-Yenny Mundur">
										</div>
									</a>
                                    <div class="description-latest box-description">
                                        <div class="date-cat">
                                            <span class="category">
                                                <a href="https://www.idntimes.com/business">Business</a>                                            </span>
                                            <time class="date" datetime="13 Aug 21 | 18:05">
                                                
                                                13 Aug 21 | 18:05
                                            </time>
                                        </div>
                                        <a href="https://www.idntimes.com/business/economy/ridwan-aji-pitoko-1/susunan-terbaru-direksi-dan-komisaris-garuda-usai-triawan-yenny-mundur" title="Susunan Terbaru Direksi dan Komisaris Garuda Usai Triawan-Yenny Mundur" class="just-for-you-click" data-position="13" data-post-id="dec4016721d75fa540fd1272f64ed3adc42caa44" data-image-url="https://cdn.idntimes.com/content-images/post/20210813/whatsapp-image-2021-08-13-at-52139-pm-1a98196a5d9e994a6d86436fd0251e44_600x400.jpg"><h2 class="title-text">Susunan Terbaru Direksi dan Komisaris Garuda Usai Triawan-Yenny Mundur</h2></a>                                    </div>
								</div>
															
								
								<div class="box-latest box-list">
									<a href="https://www.idntimes.com/business/economy/ridwan-aji-pitoko-1/timur-sukirno-gantikan-triawan-yenny-sebagai-komisaris-garuda" title="Timur Sukirno Gantikan Triawan-Yenny Sebagai Komisaris Garuda" class="box-panel just-for-you-click" data-position="14" data-post-id="116394420e89395fd32dbbcded2b92bf53d8ac4e" data-image-url="https://cdn.idntimes.com/content-images/post/20200124/whatsapp-image-2020-01-24-at-141426-8a8d5f85321425bda59a323aa5046b59_600x400.jpeg">										<div class="image-latest box-image">
											<img class="large-thumbnail lazyload" src="https://www.idntimes.com/assets/img/placeholder.png" data-src="https://cdn.idntimes.com/content-images/post/20200124/whatsapp-image-2020-01-24-at-141426-8a8d5f85321425bda59a323aa5046b59_420x280.jpeg" alt="Timur Sukirno Gantikan Triawan-Yenny Sebagai Komisaris Garuda">
										</div>
									</a>
                                    <div class="description-latest box-description">
                                        <div class="date-cat">
                                            <span class="category">
                                                <a href="https://www.idntimes.com/business">Business</a>                                            </span>
                                            <time class="date" datetime="13 Aug 21 | 17:39">
                                                
                                                13 Aug 21 | 17:39
                                            </time>
                                        </div>
                                        <a href="https://www.idntimes.com/business/economy/ridwan-aji-pitoko-1/timur-sukirno-gantikan-triawan-yenny-sebagai-komisaris-garuda" title="Timur Sukirno Gantikan Triawan-Yenny Sebagai Komisaris Garuda" class="just-for-you-click" data-position="14" data-post-id="116394420e89395fd32dbbcded2b92bf53d8ac4e" data-image-url="https://cdn.idntimes.com/content-images/post/20200124/whatsapp-image-2020-01-24-at-141426-8a8d5f85321425bda59a323aa5046b59_600x400.jpeg"><h2 class="title-text">Timur Sukirno Gantikan Triawan-Yenny Sebagai Komisaris Garuda</h2></a>                                    </div>
								</div>
															
								
								<div class="box-latest box-list">
									<a href="https://www.idntimes.com/business/economy/ridwan-aji-pitoko-1/jelang-akhir-pekan-rupiah-ditutup-melemah-tipis-terhadap-dolar-as" title="Jelang Akhir Pekan, Rupiah Ditutup Melemah Tipis Terhadap Dolar AS" class="box-panel just-for-you-click" data-position="15" data-post-id="e056908cc950ac9ddef0f00c12516b867f5cc8f6" data-image-url="https://cdn.idntimes.com/content-images/post/20210426/whatsapp-image-2021-04-26-at-21458-pm-bf8670fe0b527c2752f7322ceebb8149_600x400.jpeg">										<div class="image-latest box-image">
											<img class="large-thumbnail lazyload" src="https://www.idntimes.com/assets/img/placeholder.png" data-src="https://cdn.idntimes.com/content-images/post/20210426/whatsapp-image-2021-04-26-at-21458-pm-bf8670fe0b527c2752f7322ceebb8149_420x280.jpeg" alt="Jelang Akhir Pekan, Rupiah Ditutup Melemah Tipis Terhadap Dolar AS">
										</div>
									</a>
                                    <div class="description-latest box-description">
                                        <div class="date-cat">
                                            <span class="category">
                                                <a href="https://www.idntimes.com/business">Business</a>                                            </span>
                                            <time class="date" datetime="13 Aug 21 | 16:55">
                                                
                                                13 Aug 21 | 16:55
                                            </time>
                                        </div>
                                        <a href="https://www.idntimes.com/business/economy/ridwan-aji-pitoko-1/jelang-akhir-pekan-rupiah-ditutup-melemah-tipis-terhadap-dolar-as" title="Jelang Akhir Pekan, Rupiah Ditutup Melemah Tipis Terhadap Dolar AS" class="just-for-you-click" data-position="15" data-post-id="e056908cc950ac9ddef0f00c12516b867f5cc8f6" data-image-url="https://cdn.idntimes.com/content-images/post/20210426/whatsapp-image-2021-04-26-at-21458-pm-bf8670fe0b527c2752f7322ceebb8149_600x400.jpeg"><h2 class="title-text">Jelang Akhir Pekan, Rupiah Ditutup Melemah Tipis Terhadap Dolar AS</h2></a>                                    </div>
								</div>
															
								
								<div class="box-latest box-list">
									<a href="https://www.idntimes.com/business/finance/eno-r-nurani/5-dana-ini-penting-disiapkan-sejak-usia-20-an-c1c2" title="Demi Masa Depan, 5 Dana Ini Penting Disiapkan sejak Usia 20-an" class="box-panel just-for-you-click" data-position="16" data-post-id="63a9e3ae962db19b39f255e9c606e8193243a866" data-image-url="https://cdn.idntimes.com/content-images/community/2021/08/pexels-buro-millennial-1438072-min-compress1-1-1e225b96884a8cd752c203118612090e-9ebbc54402aec7876d35d0a3b60a0b94_600x400.jpg">										<div class="image-latest box-image">
											<img class="large-thumbnail lazyload" src="https://www.idntimes.com/assets/img/placeholder.png" data-src="https://cdn.idntimes.com/content-images/community/2021/08/pexels-buro-millennial-1438072-min-compress1-1-1e225b96884a8cd752c203118612090e-9ebbc54402aec7876d35d0a3b60a0b94_420x280.jpg" alt="Demi Masa Depan, 5 Dana Ini Penting Disiapkan sejak Usia 20-an">
										</div>
									</a>
                                    <div class="description-latest box-description">
                                        <div class="date-cat">
                                            <span class="category">
                                                <a href="https://www.idntimes.com/business">Business</a>                                            </span>
                                            <time class="date" datetime="13 Aug 21 | 16:32">
                                                
                                                13 Aug 21 | 16:32
                                            </time>
                                        </div>
                                        <a href="https://www.idntimes.com/business/finance/eno-r-nurani/5-dana-ini-penting-disiapkan-sejak-usia-20-an-c1c2" title="Demi Masa Depan, 5 Dana Ini Penting Disiapkan sejak Usia 20-an" class="just-for-you-click" data-position="16" data-post-id="63a9e3ae962db19b39f255e9c606e8193243a866" data-image-url="https://cdn.idntimes.com/content-images/community/2021/08/pexels-buro-millennial-1438072-min-compress1-1-1e225b96884a8cd752c203118612090e-9ebbc54402aec7876d35d0a3b60a0b94_600x400.jpg"><h2 class="title-text">Demi Masa Depan, 5 Dana Ini Penting Disiapkan sejak Usia 20-an</h2></a>                                    </div>
								</div>
															
								
								<div class="box-latest box-list">
									<a href="https://www.idntimes.com/business/economy/helmi/ihsg-ditutup-melemah-tipis-8-saham-ini-laris-manis" title="IHSG Ditutup Melemah Tipis, 8 Saham Ini Laris Manis " class="box-panel just-for-you-click" data-position="17" data-post-id="6bd3b44fbf7e32d75cab26f236739bb66939f4b5" data-image-url="https://cdn.idntimes.com/content-images/post/20210225/antarafoto-ihsg-akhir-pekan-melemah-120719-riv-1-715cd64b3b39e7ef78af97e4eb731dac-c982ce58a2b9c0102acd5b4c31cc4930_600x400.jpg">										<div class="image-latest box-image">
											<img class="large-thumbnail lazyload" src="https://www.idntimes.com/assets/img/placeholder.png" data-src="https://cdn.idntimes.com/content-images/post/20210225/antarafoto-ihsg-akhir-pekan-melemah-120719-riv-1-715cd64b3b39e7ef78af97e4eb731dac-c982ce58a2b9c0102acd5b4c31cc4930_420x280.jpg" alt="IHSG Ditutup Melemah Tipis, 8 Saham Ini Laris Manis ">
										</div>
									</a>
                                    <div class="description-latest box-description">
                                        <div class="date-cat">
                                            <span class="category">
                                                <a href="https://www.idntimes.com/business">Business</a>                                            </span>
                                            <time class="date" datetime="13 Aug 21 | 16:29">
                                                
                                                13 Aug 21 | 16:29
                                            </time>
                                        </div>
                                        <a href="https://www.idntimes.com/business/economy/helmi/ihsg-ditutup-melemah-tipis-8-saham-ini-laris-manis" title="IHSG Ditutup Melemah Tipis, 8 Saham Ini Laris Manis " class="just-for-you-click" data-position="17" data-post-id="6bd3b44fbf7e32d75cab26f236739bb66939f4b5" data-image-url="https://cdn.idntimes.com/content-images/post/20210225/antarafoto-ihsg-akhir-pekan-melemah-120719-riv-1-715cd64b3b39e7ef78af97e4eb731dac-c982ce58a2b9c0102acd5b4c31cc4930_600x400.jpg"><h2 class="title-text">IHSG Ditutup Melemah Tipis, 8 Saham Ini Laris Manis </h2></a>                                    </div>
								</div>
															
								
								<div class="box-latest box-list">
									<a href="https://www.idntimes.com/business/economy/ridwan-aji-pitoko-1/yenny-wahid-umumkan-mundur-sebagai-komisaris-garuda-indonesia" title="Yenny Wahid Umumkan Mundur Sebagai Komisaris Garuda Indonesia " class="box-panel just-for-you-click" data-position="18" data-post-id="b2b4bf251ab68a3d92e36c3f2db5c6ef1c39e011" data-image-url="https://cdn.idntimes.com/content-images/post/20210621/kebaya-yenni-wahid-210416-18-053e691fa466639f209fb077005e6000-6199b9ae884619471c300a68c7a8fb6c_600x400.jpg">										<div class="image-latest box-image">
											<img class="large-thumbnail lazyload" src="https://www.idntimes.com/assets/img/placeholder.png" data-src="https://cdn.idntimes.com/content-images/post/20210621/kebaya-yenni-wahid-210416-18-053e691fa466639f209fb077005e6000-6199b9ae884619471c300a68c7a8fb6c_420x280.jpg" alt="Yenny Wahid Umumkan Mundur Sebagai Komisaris Garuda Indonesia ">
										</div>
									</a>
                                    <div class="description-latest box-description">
                                        <div class="date-cat">
                                            <span class="category">
                                                <a href="https://www.idntimes.com/business">Business</a>                                            </span>
                                            <time class="date" datetime="13 Aug 21 | 15:55">
                                                
                                                13 Aug 21 | 15:55
                                            </time>
                                        </div>
                                        <a href="https://www.idntimes.com/business/economy/ridwan-aji-pitoko-1/yenny-wahid-umumkan-mundur-sebagai-komisaris-garuda-indonesia" title="Yenny Wahid Umumkan Mundur Sebagai Komisaris Garuda Indonesia " class="just-for-you-click" data-position="18" data-post-id="b2b4bf251ab68a3d92e36c3f2db5c6ef1c39e011" data-image-url="https://cdn.idntimes.com/content-images/post/20210621/kebaya-yenni-wahid-210416-18-053e691fa466639f209fb077005e6000-6199b9ae884619471c300a68c7a8fb6c_600x400.jpg"><h2 class="title-text">Yenny Wahid Umumkan Mundur Sebagai Komisaris Garuda Indonesia </h2></a>                                    </div>
								</div>
															
								
								<div class="box-latest box-list">
									<a href="https://www.popmama.com/life/health/zulfa-asliha/begini-posisi-tidur-saat-asam-lambung-naik-yang-disarankan-ahli?utm_source=idntimes&utm_medium=referral&utm_campaign=crossplatform" title="Begini Posisi Tidur saat Asam Lambung Naik yang Disarankan Ahli" target="_blank" class="box-panel just-for-you-click" data-position="19" data-post-id="55725259c954a16b2bd1ad1f8f4721d51c5b5d41" data-image-url="https://cdn.popmama.com/content-images/post/20200905/17jpg-7d335b8094708cf184b5600d9c4c5837_800x420.jpg">										<div class="image-latest box-image">
											<img class="large-thumbnail lazyload" src="https://www.idntimes.com/assets/img/placeholder.png" data-src="https://cdn.popmama.com/content-images/post/20200905/17jpg-7d335b8094708cf184b5600d9c4c5837_800x420.jpg" alt="Begini Posisi Tidur saat Asam Lambung Naik yang Disarankan Ahli">
										</div>
									</a>
                                    <div class="description-latest box-description">
                                        <div class="date-cat">
                                            <span class="category">
                                                <a href="https://www.popmama.com/life/health" target="_blank">Health and Lifestyle</a>                                            </span>
                                            <time class="date" datetime="14 Aug 21 | 18:40">
                                                
                                                14 Aug 21 | 18:40
                                            </time>
                                        </div>
                                        <a href="https://www.popmama.com/life/health/zulfa-asliha/begini-posisi-tidur-saat-asam-lambung-naik-yang-disarankan-ahli?utm_source=idntimes&utm_medium=referral&utm_campaign=crossplatform" title="Begini Posisi Tidur saat Asam Lambung Naik yang Disarankan Ahli" class="just-for-you-click" data-position="19" data-post-id="55725259c954a16b2bd1ad1f8f4721d51c5b5d41" data-image-url="https://cdn.popmama.com/content-images/post/20200905/17jpg-7d335b8094708cf184b5600d9c4c5837_800x420.jpg" target="_blank"><h2 class="title-text">Begini Posisi Tidur saat Asam Lambung Naik yang Disarankan Ahli</h2></a>                                    </div>
								</div>
															
								
								<div class="box-latest box-list">
									<a href="https://www.popmama.com/baby/0-6-months/adella-fitri-nuraisyah/mengatasi-batuk-pada-bayi-4-bulan-dari-rumah?utm_source=idntimes&utm_medium=referral&utm_campaign=crossplatform" title="Begini Cara Mengatasi Batuk pada Bayi 4 Bulan dari Rumah" target="_blank" class="box-panel just-for-you-click" data-position="20" data-post-id="2bc4df179a024a9775b99198dcae2d3c43849099" data-image-url="https://cdn.popmama.com/content-images/post/20200429/portrait-sick-boy-cleaning-his-nose-with-napkin-flu-season-concept-96872-1358-b26bf5865fbf301e239b43931d74e18d_800x420.jpg">										<div class="image-latest box-image">
											<img class="large-thumbnail lazyload" src="https://www.idntimes.com/assets/img/placeholder.png" data-src="https://cdn.popmama.com/content-images/post/20200429/portrait-sick-boy-cleaning-his-nose-with-napkin-flu-season-concept-96872-1358-b26bf5865fbf301e239b43931d74e18d_800x420.jpg" alt="Begini Cara Mengatasi Batuk pada Bayi 4 Bulan dari Rumah">
										</div>
									</a>
                                    <div class="description-latest box-description">
                                        <div class="date-cat">
                                            <span class="category">
                                                <a href="https://www.popmama.com/baby/0-6-months" target="_blank">0-6 months</a>                                            </span>
                                            <time class="date" datetime="14 Aug 21 | 18:30">
                                                
                                                14 Aug 21 | 18:30
                                            </time>
                                        </div>
                                        <a href="https://www.popmama.com/baby/0-6-months/adella-fitri-nuraisyah/mengatasi-batuk-pada-bayi-4-bulan-dari-rumah?utm_source=idntimes&utm_medium=referral&utm_campaign=crossplatform" title="Begini Cara Mengatasi Batuk pada Bayi 4 Bulan dari Rumah" class="just-for-you-click" data-position="20" data-post-id="2bc4df179a024a9775b99198dcae2d3c43849099" data-image-url="https://cdn.popmama.com/content-images/post/20200429/portrait-sick-boy-cleaning-his-nose-with-napkin-flu-season-concept-96872-1358-b26bf5865fbf301e239b43931d74e18d_800x420.jpg" target="_blank"><h2 class="title-text">Begini Cara Mengatasi Batuk pada Bayi 4 Bulan dari Rumah</h2></a>                                    </div>
								</div>
															
								
								<div class="box-latest box-list">
									<a href="https://www.popmama.com/baby/7-12-months/sysilia-tanhati/berbahayakah-pemakaian-perhiasan-emas-untuk-kulit-bayi?utm_source=idntimes&utm_medium=referral&utm_campaign=crossplatform" title="Berbahayakah Pemakaian Perhiasan Emas untuk Kulit Bayi? " target="_blank" class="box-panel just-for-you-click" data-position="21" data-post-id="fc2342e776b2f3f0a9d563b8aec21730425ac3af" data-image-url="https://cdn.popmama.com/content-images/post/20200620/712268547f2172c7d76462c830131776jpg-2e243e6359af1553b98ef9ab276507d3_800x420.jpg">										<div class="image-latest box-image">
											<img class="large-thumbnail lazyload" src="https://www.idntimes.com/assets/img/placeholder.png" data-src="https://cdn.popmama.com/content-images/post/20200620/712268547f2172c7d76462c830131776jpg-2e243e6359af1553b98ef9ab276507d3_800x420.jpg" alt="Berbahayakah Pemakaian Perhiasan Emas untuk Kulit Bayi? ">
										</div>
									</a>
                                    <div class="description-latest box-description">
                                        <div class="date-cat">
                                            <span class="category">
                                                <a href="https://www.popmama.com/baby/7-12-months" target="_blank">7-12 months</a>                                            </span>
                                            <time class="date" datetime="14 Aug 21 | 18:20">
                                                
                                                14 Aug 21 | 18:20
                                            </time>
                                        </div>
                                        <a href="https://www.popmama.com/baby/7-12-months/sysilia-tanhati/berbahayakah-pemakaian-perhiasan-emas-untuk-kulit-bayi?utm_source=idntimes&utm_medium=referral&utm_campaign=crossplatform" title="Berbahayakah Pemakaian Perhiasan Emas untuk Kulit Bayi? " class="just-for-you-click" data-position="21" data-post-id="fc2342e776b2f3f0a9d563b8aec21730425ac3af" data-image-url="https://cdn.popmama.com/content-images/post/20200620/712268547f2172c7d76462c830131776jpg-2e243e6359af1553b98ef9ab276507d3_800x420.jpg" target="_blank"><h2 class="title-text">Berbahayakah Pemakaian Perhiasan Emas untuk Kulit Bayi? </h2></a>                                    </div>
								</div>
															
								
								<div class="box-latest box-list">
									<a href="https://www.popbela.com/career/inspiration/mariana-politton/selain-pencak-silat-ini-8-olahraga-tradisional-asli-indonesia?utm_source=idntimes&utm_medium=referral&utm_campaign=crossplatform" title="Selain Pencak Silat, Ini 8 Olahraga Tradisional Asli Indonesia" target="_blank" class="box-panel just-for-you-click" data-position="22" data-post-id="88c53255d6e9a3146827adb0605b69ed4587fe47" data-image-url="https://cdn.popbela.com/content-images/post/20210812/a9acf07ec5bd541ab1e52ccd08cbb5f4_750x500.png">										<div class="image-latest box-image">
											<img class="large-thumbnail lazyload" src="https://www.idntimes.com/assets/img/placeholder.png" data-src="https://cdn.popbela.com/content-images/post/20210812/a9acf07ec5bd541ab1e52ccd08cbb5f4_750x500.png" alt="Selain Pencak Silat, Ini 8 Olahraga Tradisional Asli Indonesia">
										</div>
									</a>
                                    <div class="description-latest box-description">
                                        <div class="date-cat">
                                            <span class="category">
                                                <a href="https://www.popbela.com/career/inspiration" target="_blank">Inspiration</a>                                            </span>
                                            <time class="date" datetime="14 Aug 21 | 18:00">
                                                
                                                14 Aug 21 | 18:00
                                            </time>
                                        </div>
                                        <a href="https://www.popbela.com/career/inspiration/mariana-politton/selain-pencak-silat-ini-8-olahraga-tradisional-asli-indonesia?utm_source=idntimes&utm_medium=referral&utm_campaign=crossplatform" title="Selain Pencak Silat, Ini 8 Olahraga Tradisional Asli Indonesia" class="just-for-you-click" data-position="22" data-post-id="88c53255d6e9a3146827adb0605b69ed4587fe47" data-image-url="https://cdn.popbela.com/content-images/post/20210812/a9acf07ec5bd541ab1e52ccd08cbb5f4_750x500.png" target="_blank"><h2 class="title-text">Selain Pencak Silat, Ini 8 Olahraga Tradisional Asli Indonesia</h2></a>                                    </div>
								</div>
															
								
								<div class="box-latest box-list">
									<a href="https://www.popbela.com/relationship/dating/windari-subangkit/cara-menghadapi-pacar-yang-egois?utm_source=idntimes&utm_medium=referral&utm_campaign=crossplatform" title="Jangan Bingung, Ini 7 Cara Menghadapi Pacar yang Egois" target="_blank" class="box-panel just-for-you-click" data-position="23" data-post-id="6d65c8026e6a59c3cbbf7647fdeb65ca522f1f76" data-image-url="https://cdn.popbela.com/content-images/post/20180821/photogrist-5176713dc6b83da949c9f8b28a368506_750x500.jpg">										<div class="image-latest box-image">
											<img class="large-thumbnail lazyload" src="https://www.idntimes.com/assets/img/placeholder.png" data-src="https://cdn.popbela.com/content-images/post/20180821/photogrist-5176713dc6b83da949c9f8b28a368506_750x500.jpg" alt="Jangan Bingung, Ini 7 Cara Menghadapi Pacar yang Egois">
										</div>
									</a>
                                    <div class="description-latest box-description">
                                        <div class="date-cat">
                                            <span class="category">
                                                <a href="https://www.popbela.com/relationship/dating" target="_blank">Dating</a>                                            </span>
                                            <time class="date" datetime="14 Aug 21 | 17:00">
                                                
                                                14 Aug 21 | 17:00
                                            </time>
                                        </div>
                                        <a href="https://www.popbela.com/relationship/dating/windari-subangkit/cara-menghadapi-pacar-yang-egois?utm_source=idntimes&utm_medium=referral&utm_campaign=crossplatform" title="Jangan Bingung, Ini 7 Cara Menghadapi Pacar yang Egois" class="just-for-you-click" data-position="23" data-post-id="6d65c8026e6a59c3cbbf7647fdeb65ca522f1f76" data-image-url="https://cdn.popbela.com/content-images/post/20180821/photogrist-5176713dc6b83da949c9f8b28a368506_750x500.jpg" target="_blank"><h2 class="title-text">Jangan Bingung, Ini 7 Cara Menghadapi Pacar yang Egois</h2></a>                                    </div>
								</div>
															
								
								<div class="box-latest box-list">
									<a href="https://www.popbela.com/fashion/look-for-less/hafidhza-putri-andiza/popbelaootd-rekomendasi-sepatu-untuk-hadiri-pesta-outdoor?utm_source=idntimes&utm_medium=referral&utm_campaign=crossplatform" title="#PopbelaOOTD: Rekomendasi Sepatu Santai untuk Hadiri Pesta Outdoor" target="_blank" class="box-panel just-for-you-click" data-position="24" data-post-id="29635b5609da2b43578837be5c3c4d8ae213bc51" data-image-url="https://cdn.popbela.com/content-images/post/20210814/ezgifcom-gif-maker-37-a19f9199eb2a6ca2fface73434c737cb_750x500.jpg">										<div class="image-latest box-image">
											<img class="large-thumbnail lazyload" src="https://www.idntimes.com/assets/img/placeholder.png" data-src="https://cdn.popbela.com/content-images/post/20210814/ezgifcom-gif-maker-37-a19f9199eb2a6ca2fface73434c737cb_750x500.jpg" alt="#PopbelaOOTD: Rekomendasi Sepatu Santai untuk Hadiri Pesta Outdoor">
										</div>
									</a>
                                    <div class="description-latest box-description">
                                        <div class="date-cat">
                                            <span class="category">
                                                <a href="https://www.popbela.com/fashion/look-for-less" target="_blank">Look For Less</a>                                            </span>
                                            <time class="date" datetime="14 Aug 21 | 16:00">
                                                
                                                14 Aug 21 | 16:00
                                            </time>
                                        </div>
                                        <a href="https://www.popbela.com/fashion/look-for-less/hafidhza-putri-andiza/popbelaootd-rekomendasi-sepatu-untuk-hadiri-pesta-outdoor?utm_source=idntimes&utm_medium=referral&utm_campaign=crossplatform" title="#PopbelaOOTD: Rekomendasi Sepatu Santai untuk Hadiri Pesta Outdoor" class="just-for-you-click" data-position="24" data-post-id="29635b5609da2b43578837be5c3c4d8ae213bc51" data-image-url="https://cdn.popbela.com/content-images/post/20210814/ezgifcom-gif-maker-37-a19f9199eb2a6ca2fface73434c737cb_750x500.jpg" target="_blank"><h2 class="title-text">#PopbelaOOTD: Rekomendasi Sepatu Santai untuk Hadiri Pesta Outdoor</h2></a>                                    </div>
								</div>
														<div class="text-center infiniteScroll-loading">
								<a href="https://www.idntimes.com/ajax/article/business/finance/rehia-indrayanti-br-sebayang/kisah-inspiratif-menjajal-peluang-bisnis-baru-saat-pandemik-covid?page=2">
									<strong>Berita Lainnya !</strong>
								</a>
							</div>
						</div>
					</section>
								

			</section>
			

        </div>
        

        
        <div class="right-content sidebar-content">
                            <div class="sidebar-trending">
	<h3 class="section-title"><span>Berita Terpopuler</span></h3>
	<ul class="trending-list">
        					        
                                                                
            <li class="trending-list__li"><a href="https://www.idntimes.com/news/world/vamela-aurina-2/ini-daftar-biaya-tes-pcr-di-bandara-seluruh-dunia-jepang-paling-mahal" data-position="1" data-post-id="2b844f98e195bce86758ff1b261b5897bcedb5f9" data-image-url="https://cdn.idntimes.com/content-images/post/20201030/bandara-soekarno-hatta-angkasa-pura-ii-4-8c2892db0791e3b4f79579031eb952d7_600x400.png">Ini Daftar Biaya Tes PCR di Bandara Seluruh Dunia, Jepang Paling Mahal</a></li>
        			        
                                                                
            <li class="trending-list__li"><a href="https://www.idntimes.com/travel/destination/reza-iqbal/31-potret-kebun-binatang-surabaya-1" data-position="2" data-post-id="f24c39e5ff1438a8569087b79c12dc0240b3f593" data-image-url="https://cdn.idntimes.com/content-images/post/20180329/untitled-535aa971b749a517dacc0eb1d9e36de1_600x400.png">31 Potret Terkini Kebun Binatang Surabaya, Makin Keren Gak Ya?</a></li>
        			        
                                                                
            <li class="trending-list__li"><a href="https://www.idntimes.com/travel/destination/prila-arofani/kopi-klotok-menoreh-jogja" data-position="3" data-post-id="e60c80c89c135079b63c501abbc9bfb1d4b1c27d" data-image-url="https://cdn.idntimes.com/content-images/post/20210208/123497218-461635381487081-5611312630213417029-n-02ec97937288f0fcadfaeeaeca802b9f_600x400.jpg">Info Wisata Kopi Klotok Menoreh Jogja: Lokasi, Rute, Harga, dan Tips </a></li>
        			        
                                                                
            <li class="trending-list__li"><a href="https://www.idntimes.com/hype/entertainment/oksi-pangestuti/potret-keseharian-9-raja-antagonis-saat-momong-anak-c1c2-1" data-position="4" data-post-id="d2a9cc6827da76379b28a552ea148ce1f94103ed" data-image-url="https://cdn.idntimes.com/content-images/community/2021/08/img-20210809-200347-58104fcf873a91b060fa273c628f6d83-8a3220351af38083fbf518c7a6bd5af2_600x400.jpg">Potret Keseharian 9 Raja Antagonis Saat Momong Anak, Bikin Melting!</a></li>
        			        
                                                                
            <li class="trending-list__li"><a href="https://www.idntimes.com/news/indonesia/vanny-rahman/kesaksian-magis-ketika-sukarno-tiba-di-bali" data-position="5" data-post-id="466593f696346ae430b25b4687709196bd073cdc" data-image-url="https://cdn.idntimes.com/content-images/post/20190814/whatsapp-image-2019-08-14-at-151506-0ed42b0be681f590dc1415554e10793c_600x400.jpeg">Kesaksian Magis Ketika Sukarno Tiba di Bali: Tapak Kering Meski Hujan</a></li>
        			        
                                                                
            <li class="trending-list__li"><a href="https://www.idntimes.com/food/dining-guide/jihan-khoerunnisa/toko-oleh-oleh-makanan-khas-bandung-c1c2" data-position="6" data-post-id="7361aeb7e845e2c9a514c4bcf6bbc8759a4c1a13" data-image-url="https://cdn.idntimes.com/content-images/community/2020/11/1605440065273-129468737-df167b21952ef63160c862a6d9e909f7_600x400.jpg">9 Toko Oleh-oleh Makanan Khas Bandung yang Tak Boleh Terlewatkan </a></li>
        			        
                                                                
            <li class="trending-list__li"><a href="https://www.idntimes.com/news/world/pri-145/dituduh-berkhianat-kepala-riset-pesawat-hipersonik-rusia-ditangkap-c1c2" data-position="7" data-post-id="30151f65bb030279a8d8224312c3bd7e72ca3434" data-image-url="https://cdn.idntimes.com/content-images/community/2021/08/e8nz4y0wqagpl0v-2d588b538864a3b2a1a0b557d321694d-0a2c9d23b6323b0cae72e5483196e4b5_600x400.jpg">Dituduh Berkhianat, Kepala Riset Pesawat Hipersonik Rusia Ditangkap</a></li>
        			        
                                                                
            <li class="trending-list__li"><a href="https://www.idntimes.com/news/indonesia/santi-dewi/gugatan-ahy-yang-larang-klb-pakai-atribut-demokrat-ditolak-pengadilan" data-position="8" data-post-id="fa330d53fc021b4e38a9fa59b9fddb09f7236650" data-image-url="https://cdn.idntimes.com/content-images/post/20210617/img-0469-578dd6007275afa61095afd4138fe818_600x400.JPG">Gugatan AHY yang Larang KLB Pakai Atribut Demokrat Ditolak Pengadilan</a></li>
        			        
                                                                
            <li class="trending-list__li"><a href="https://www.idntimes.com/life/women/putri-aisya-1/busana-dan-makeup-lesti-kejora" data-position="9" data-post-id="10e5cba6eef3e9ae7d1ba38d2d1396878c32568c" data-image-url="https://cdn.idntimes.com/content-images/post/20210814/19148-15c3a65f87ca9e24b14116d9f16bf006_600x400.jpg">7 Busana dan Makeup Lesti Kejora di Acara Pengajian, Elok dengan Lilac</a></li>
        			        
                                                                
            <li class="trending-list__li"><a href="https://www.idntimes.com/hype/entertainment/arya-sarimata/10-potret-tengku-dewi-liburan-sambil-momong-anak-c1c2-1" data-position="10" data-post-id="59515753958ad220a657210713de4c71604974a1" data-image-url="https://cdn.idntimes.com/content-images/community/2021/08/img-20210813-073844-3c1b98200407221f2b4726df9fd934d0-eda85a3f11301c201f30b503326a6ccf_600x400.jpg">Hot Mama! 10 Potret Tengku Dewi Liburan Sambil Momong Anak</a></li>
        	</ul>
</div>

<div class="sidebar-ads">
	<div id='div-gpt-ad-rectangle' class="loading-ads" data-spotx_embed_element_id="div-gpt-ad-rectangle">
        <script>
            googletag.cmd.push(function() { googletag.display('div-gpt-ad-rectangle'); });
        </script>
    </div>
</div><div class="sidebar-menu">
	<ul class="sidebar-menu-list">
		<li><a href="https://www.idntimes.com/about-us">ABOUT US</a></li>
		
		<li><a href="https://www.idn.media/career#hire" target="_blank">CAREER</a></li>
		<li><a href="https://www.idntimes.com/kebijakan-privasi">PRIVACY & POLICY</a></li>
		<li><a href="https://www.idntimes.com/pedoman-media-siber">PEDOMAN MEDIA SIBER</a></li>
		<li><a href="https://www.idntimes.com/hubungi-kami">CONTACT US</a></li>
	</ul>
	<div class="sidebar-menu-bottom">
		<div class="sidebar-social">
			FOLLOW US:
			<a href="https://www.facebook.com/idntimes" title="FACEBOOK" class="social-icon" target="_blank"><i class="fab fa-facebook-square" aria-hidden="true"></i></a>
			<a href="https://www.instagram.com/idntimes" title="INSTAGRAM" class="social-icon" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>
            <a href="https://www.youtube.com/channel/UCMcqmnF-uCBFzQ3NvmaELCg" title="YOUTUBE" class="social-icon" target="_blank"><i class="fab fa-youtube" aria-hidden="true"></i></a>
            <a href="https://twitter.com/idntimes" title="TWITTER" class="social-icon" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>
		</div>
		<div class="sidebar-footer">
			© 2021 IDN Media | All Rights Reserved<br>
			"The Voice of Millennials and Gen Z"
			<h5><strong>#DIVERSITYISBEAUTIFUL</strong></h5>
		</div>
	</div>
</div>

<br>
<div class="sidebar-ads">
	<div id="survey-betav5" class="survey-betav5">
        <a href="https://Bit.ly/HelloIDNTimes" target="_blank">
            <img class="media-object" src="/assets/img/survey-banner.jpg" alt="Survey Idn Times" width="100%" height="100%">
        </a>
    </div>
</div><div class="sidebar-ads stickThis">
	<div id='div-gpt-ad-billboard_vertical' class="loading-ads" data-spotx_embed_element_id="div-gpt-ad-billboard_vertical">
        <script>
            googletag.cmd.push(function() { googletag.display('div-gpt-ad-billboard_vertical'); });
        </script>
    </div>
</div>


                    </div>
        

        
        <div class="icon-bar">
            <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.idntimes.com%2Fbusiness%2Ffinance%2Frehia-indrayanti-br-sebayang%2Fkisah-inspiratif-menjajal-peluang-bisnis-baru-saat-pandemik-covid?utm_source=facebook&utm_medium=sharer&utm_campaign=social" class="facebook" onclick="share(this.href); return false"><i class="fab fa-facebook"></i></a>
            <a href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fwww.idntimes.com%2Fbusiness%2Ffinance%2Frehia-indrayanti-br-sebayang%2Fkisah-inspiratif-menjajal-peluang-bisnis-baru-saat-pandemik-covid?utm_source=twitter&utm_medium=sharer&utm_campaign=social&title=Kisah Inspiratif Menjajal Peluang Bisnis Baru saat Pandemik COVID-19&source=idntimes" onclick="share(this.href); return false" class="linkedin"><i class="fab fa-linkedin"></i></a>
            <a href="https://www.facebook.com/dialog/send?app_id=1645337432347069&link=https%3A%2F%2Fwww.idntimes.com%2Fbusiness%2Ffinance%2Frehia-indrayanti-br-sebayang%2Fkisah-inspiratif-menjajal-peluang-bisnis-baru-saat-pandemik-covid&redirect_uri=https://www.idntimes.com" class="messenger" onclick="share(this.href); return false"><i class="fab fa-facebook-messenger"></i></a>
            <a href="https://twitter.com/intent/tweet?url=https://www.idntimes.com/business/finance/rehia-indrayanti-br-sebayang/kisah-inspiratif-menjajal-peluang-bisnis-baru-saat-pandemik-covid&text=Kisah Inspiratif Menjajal Peluang Bisnis Baru saat Pandemik COVID-19&via=idntimes&related=idntimes" onclick="share(this.href); return false" class="twitter"><i class="fab fa-twitter"></i></a>
            <a href="https://web.whatsapp.com/send?text=https%3A%2F%2Fwww.idntimes.com%2Fbusiness%2Ffinance%2Frehia-indrayanti-br-sebayang%2Fkisah-inspiratif-menjajal-peluang-bisnis-baru-saat-pandemik-covid?utm_source=whatsapp&utm_medium=sharer&utm_campaign=social" class="whatsapp" data-action="share/whatsapp/share" onclick="share(this.href); return false"><i class="fab fa-whatsapp"></i></a>
            <a href="https://social-plugins.line.me/lineit/share?url=https%3A%2F%2Fwww.idntimes.com%2Fbusiness%2Ffinance%2Frehia-indrayanti-br-sebayang%2Fkisah-inspiratif-menjajal-peluang-bisnis-baru-saat-pandemik-covid?utm_source=line&utm_medium=sharer&utm_campaign=social" class="line" onclick="share(this.href); return false"><i class="fab fa-line"></i></a>
            <a href="mailto:?body=https%3A%2F%2Fwww.idntimes.com%2Fbusiness%2Ffinance%2Frehia-indrayanti-br-sebayang%2Fkisah-inspiratif-menjajal-peluang-bisnis-baru-saat-pandemik-covid" class="mail"><i class="fa fa-envelope"></i></a>
        </div>
        

    </div>

    <div class="modal fade" id="unfollow-modal" tabindex="-1" role="dialog" aria-labelledby="unfollowLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div>Berhenti mengikuti <span class="name"></span>?</div>
            </div>
            <div class="modal-footer">
                <div class="row text-center">
                    <div class="col-xs-6">
                        <a href="javascript:;" class="unfollow-button-yes black" data-username="">Ya</a>
                    </div>
                    <div class="col-xs-6">
                        <a href="javascript:;" data-dismiss="modal" class="red">Tidak</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>

                    <footer class="static-footer">
    <div class="container">
        <ul class="static-footer__ul">
                        <li>
                <a href="https://www.idntimes.com/about-us">
                    About Us
                </a>
            </li>
                        <li>
                <a href="https://www.idn.media/career#hire">
                    Career
                </a>
            </li>
                        <li>
                <a href="https://www.idntimes.com/kebijakan-privasi">
                    Privacy Policy
                </a>
            </li>
                        <li>
                <a href="https://www.idntimes.com/pedoman-media-siber">
                    Pedoman Media Siber
                </a>
            </li>
                        <li>
                <a href="https://www.idntimes.com/hubungi-kami">
                    Contact Us
                </a>
            </li>
                    </ul>
        <div class="static-footer__copyright row" style="margin-top: 20px; margin-bottom: 30px;">
            <div class="col-xs-4 text-left">
                &copy; 2021 IDN Media | All Rights Reserved
            </div>
            <div class="col-xs-4 text-center">
                "The Voice of Millennials and Gen Z"
            </div>
            <div id="follow" class="col-xs-4 text-right">
                <span class="follow-us">FOLLOW US:</span>
                <a href="https://www.facebook.com/idntimes" target="_blank" data-title="facebook"><i class="fab fa-facebook-f fa-space"></i></a>
                <a href="https://www.instagram.com/idntimes" target="_blank" data-title="instagram"><i class="fab fa-instagram fa-space"></i></a>
                <a href="https://www.youtube.com/channel/UCMcqmnF-uCBFzQ3NvmaELCg" target="_blank" data-title="youtube"><i class="fab fa-youtube fa-space"></i></a>
                <a href="https://twitter.com/idntimes" target="_blank" data-title="twitter"><i class="fab fa-twitter fa-space"></i></a>
            </div>
        </div>
    </div>
</footer>

<a href="#header" class="scrollToTop"><i class="fa fa-angle-up" aria-hidden="true"></i></a>


<div class="modal search-modal fade" id="search-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Apa yang kamu cari?</h4>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
                    <input type="search" class="form-control" id="search-input" placeholder="Cari sesuatu..." >
                    <span class="input-group-btn sr-only">
                        <button class="btn btn-default" type="button" id="search-button">Search Now</button>
                    </span>
                </div>
            </div>
            <div class="modal-body">
                <div class="search-content">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="article active"><a href="#article" aria-controls="article" role="tab" data-toggle="tab">Artikel</a></li>
                        <li role="presentation" class="qna"><a href="#qna" aria-controls="qna" role="tab" data-toggle="tab">Tanya Jawab</a></li>
                        <li role="presentation" class="member"><a href="#member" aria-controls="member" role="tab" data-toggle="tab">Member</a></li>
                        <li role="presentation" class="tags"><a href="#tags" aria-controls="tags" role="tab" data-toggle="tab">Tags</a></li>
                    </ul>

                    <div id="search-list" style="display: none;"></div>
                    <div id="search-recommendation">

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane article active" id="article">
                                <div>
    <div class="recomendation-title">Rekomendasi Artikel</div>
            <ul>
                            <li class="box-latest box-list">
    <a href="https://www.idntimes.com/sport/soccer/auliyau-rohman-1/bek-diprediksi-tampil-apik-di-laliga-musim-2021-2022-c1c2?q=" title="5 Bek yang Diprediksi Bakal Tampil Apik di LaLiga Musim 2021/2022" class="box-panel clearfix">
        <div class="image-latest box-image">
            <img src="https://cdn.idntimes.com/content-images/community/2021/08/atletico-de-madrid-v-ca-osasuna-la-liga-santande-86d3f3114db09249d2e6d3911c553cc5-de2bef183abe3a2f02d43b7c4a01e743-2064c5ff0316b462982a8ea299031379_600x400.jpg" class="medium-thumbnail lazyloaded" alt="5 Bek yang Diprediksi Bakal Tampil Apik di LaLiga Musim 2021/2022">
        </div>
    </a>
    <div class="description-latest box-description">
        <div class="date-cat">
            <span class="category">Soccer</span> | <time class="date" datetime="">14 Aug 2021</time>
        </div>
        <a href="https://www.idntimes.com/sport/soccer/auliyau-rohman-1/bek-diprediksi-tampil-apik-di-laliga-musim-2021-2022-c1c2?q=" title="5 Bek yang Diprediksi Bakal Tampil Apik di LaLiga Musim 2021/2022">
            <h2 class="title-text">5 Bek yang Diprediksi Bakal Tampil Apik di LaLiga Musim 2021/2022</h2>
        </a>
    </div>
</li>                            <li class="box-latest box-list">
    <a href="https://www.idntimes.com/hype/entertainment/nur-rochim/9-fakta-monica-millington-c1c2?q=" title="Rekan Wakil Indonesia, 9 Fakta Monica Millington Top 4 The Apprentice" class="box-panel clearfix">
        <div class="image-latest box-image">
            <img src="https://cdn.idntimes.com/content-images/post/20210814/167198665-1000192587181466-1584371717168597944-n-a456764efbfe9323b7a5a79efaaf2c8c_600x400.jpg" class="medium-thumbnail lazyloaded" alt="Rekan Wakil Indonesia, 9 Fakta Monica Millington Top 4 The Apprentice">
        </div>
    </a>
    <div class="description-latest box-description">
        <div class="date-cat">
            <span class="category">Entertainment</span> | <time class="date" datetime="">14 Aug 2021</time>
        </div>
        <a href="https://www.idntimes.com/hype/entertainment/nur-rochim/9-fakta-monica-millington-c1c2?q=" title="Rekan Wakil Indonesia, 9 Fakta Monica Millington Top 4 The Apprentice">
            <h2 class="title-text">Rekan Wakil Indonesia, 9 Fakta Monica Millington Top 4 The Apprentice</h2>
        </a>
    </div>
</li>                            <li class="box-latest box-list">
    <a href="https://www.idntimes.com/travel/destination/zaffy-febryan/fakta-kuil-sensoji-kuil-tertua-dan-bersejarah-di-jepang-c1c2-1?q=" title="10 Fakta Kuil Sensoji, Kuil Tertua dan Bersejarah di Jepang" class="box-panel clearfix">
        <div class="image-latest box-image">
            <img src="https://cdn.idntimes.com/content-images/community/2021/08/fromandroid-dc354be12d796f61fac1c5a97ccbd19c_600x400.jpg" class="medium-thumbnail lazyloaded" alt="10 Fakta Kuil Sensoji, Kuil Tertua dan Bersejarah di Jepang">
        </div>
    </a>
    <div class="description-latest box-description">
        <div class="date-cat">
            <span class="category">Destination</span> | <time class="date" datetime="">14 Aug 2021</time>
        </div>
        <a href="https://www.idntimes.com/travel/destination/zaffy-febryan/fakta-kuil-sensoji-kuil-tertua-dan-bersejarah-di-jepang-c1c2-1?q=" title="10 Fakta Kuil Sensoji, Kuil Tertua dan Bersejarah di Jepang">
            <h2 class="title-text">10 Fakta Kuil Sensoji, Kuil Tertua dan Bersejarah di Jepang</h2>
        </a>
    </div>
</li>                            <li class="box-latest box-list">
    <a href="https://www.idntimes.com/hype/entertainment/yesica-2/jadi-fotografer-fakta-peran-jang-ki-yong-di-now-we-are-breaking-up-c1c2?q=" title="Jadi Fotografer, 9 Fakta Peran Jang Ki Yong di Now, We Are Breaking Up" class="box-panel clearfix">
        <div class="image-latest box-image">
            <img src="https://cdn.idntimes.com/content-images/community/2021/08/img-20210810-104116-cb9b19fe20799c0588b52a1c1fef31ed-ce6e420d66a6bba99e5632b5b42dfaea_600x400.jpg" class="medium-thumbnail lazyloaded" alt="Jadi Fotografer, 9 Fakta Peran Jang Ki Yong di Now, We Are Breaking Up">
        </div>
    </a>
    <div class="description-latest box-description">
        <div class="date-cat">
            <span class="category">Entertainment</span> | <time class="date" datetime="">14 Aug 2021</time>
        </div>
        <a href="https://www.idntimes.com/hype/entertainment/yesica-2/jadi-fotografer-fakta-peran-jang-ki-yong-di-now-we-are-breaking-up-c1c2?q=" title="Jadi Fotografer, 9 Fakta Peran Jang Ki Yong di Now, We Are Breaking Up">
            <h2 class="title-text">Jadi Fotografer, 9 Fakta Peran Jang Ki Yong di Now, We Are Breaking Up</h2>
        </a>
    </div>
</li>                            <li class="box-latest box-list">
    <a href="https://www.idntimes.com/news/indonesia/sachril-agustin-berutu/fadli-zon-sebut-lomba-bpip-islamophobia-pbnu-buka-suara?q=" title="Fadli Zon Sebut Lomba BPIP Islamophobia, PBNU Buka Suara" class="box-panel clearfix">
        <div class="image-latest box-image">
            <img src="https://cdn.idntimes.com/content-images/post/20210814/img-20191010-210206-0481a6417fce0a57d4f853e3de4c9299-43d67e2c6b7613d2bfa88f8aea87afe6_600x400.jpg" class="medium-thumbnail lazyloaded" alt="Fadli Zon Sebut Lomba BPIP Islamophobia, PBNU Buka Suara">
        </div>
    </a>
    <div class="description-latest box-description">
        <div class="date-cat">
            <span class="category">Indonesia</span> | <time class="date" datetime="">14 Aug 2021</time>
        </div>
        <a href="https://www.idntimes.com/news/indonesia/sachril-agustin-berutu/fadli-zon-sebut-lomba-bpip-islamophobia-pbnu-buka-suara?q=" title="Fadli Zon Sebut Lomba BPIP Islamophobia, PBNU Buka Suara">
            <h2 class="title-text">Fadli Zon Sebut Lomba BPIP Islamophobia, PBNU Buka Suara</h2>
        </a>
    </div>
</li>                    </ul>
        
    </div>                            </div>
                            <div role="tabpanel" class="tab-pane qna" id="qna">
                                <div>
    <div class="recomendation-title">Rekomendasi Tanya Jawab</div>
            <ul class="search-member-list search-qna-list">
                            <li>
    <div class="media">
        <div class="media-left">
            <a href="https://tanyajawab.idntimes.com/armycel-cel/Q03t0KHKpRxhw11?q=" class="img-box">
                <img class="media-object" src="https://cdn.idntimes.com/content-images/avatar/armycel-cel_100x100.jpeg?v=d41d8cd98f00b204e9800998ecf8427e" alt="Q03t0KHKpRxhw11">
            </a>
        </div>
        <div class="media-body">
            <small class="grey-text">Ditanyakan pada 14 Aug 2021 | 18.38</small>
            <a href="https://tanyajawab.idntimes.com/armycel-cel/Q03t0KHKpRxhw11?q=">
                <h2 class="bold-text">1.Kapan BTS debut
2.member BTS yang lahir bulan Desember
3.Member BTS yang lahir bulan Oktober
4.Siapa nama kakak nya Jhope
5.Member tertua BTS
6.Lagu faforit kalian
7.Singkatan BTS
8.Kakak nya Jhope lahir tahun
9.Kalau kalian ada kesempatan bisa ketemu BTS member Mana kah yang akan kalain ketemu
10.BTS brand ambasador nya</h2>
            </a>
            <div class="actions-qna clearfix">
                <ul class="tag choosen-category clearfix">
                                            <li><a href="#">Entertainment</a></li>
                                    </ul>
            </div>
        </div>
    </div>
</li>                            <li>
    <div class="media">
        <div class="media-left">
            <a href="https://tanyajawab.idntimes.com/khofifah-reza-febrianti/wIRfiDnRR8x2ZAS?q=" class="img-box">
                <img class="media-object" src="https://cdn.idntimes.com/content-images/avatar/khofifah-reza-febrianti_100x100.jpeg?v=d41d8cd98f00b204e9800998ecf8427e" alt="wIRfiDnRR8x2ZAS">
            </a>
        </div>
        <div class="media-body">
            <small class="grey-text">Ditanyakan pada 14 Aug 2021 | 18.37</small>
            <a href="https://tanyajawab.idntimes.com/khofifah-reza-febrianti/wIRfiDnRR8x2ZAS?q=">
                <h2 class="bold-text">Apa zodiak ku?</h2>
            </a>
            <div class="actions-qna clearfix">
                <ul class="tag choosen-category clearfix">
                                            <li><a href="#">Story</a></li>
                                    </ul>
            </div>
        </div>
    </div>
</li>                            <li>
    <div class="media">
        <div class="media-left">
            <a href="https://tanyajawab.idntimes.com/armycel-cel/PzjVAxISGFzKtCl?q=" class="img-box">
                <img class="media-object" src="https://cdn.idntimes.com/content-images/avatar/armycel-cel_100x100.jpeg?v=d41d8cd98f00b204e9800998ecf8427e" alt="PzjVAxISGFzKtCl">
            </a>
        </div>
        <div class="media-body">
            <small class="grey-text">Ditanyakan pada 14 Aug 2021 | 18.10</small>
            <a href="https://tanyajawab.idntimes.com/armycel-cel/PzjVAxISGFzKtCl?q=">
                <h2 class="bold-text">1.Tahun berapa kah BTS debut?
2.Member tertua BTS?
3.Siapa nama kakak nya Jhope?
4.Siapa member BTS yang bobrok?
5.Member BTS yang paling manja sebutkan 2
6.Member BTS yang paling kaya
7.BTS brandambasador ny?</h2>
            </a>
            <div class="actions-qna clearfix">
                <ul class="tag choosen-category clearfix">
                                            <li><a href="#">Entertainment</a></li>
                                    </ul>
            </div>
        </div>
    </div>
</li>                            <li>
    <div class="media">
        <div class="media-left">
            <a href="https://tanyajawab.idntimes.com/yulidnc/bI9fO8rgX1mj0bb?q=" class="img-box">
                <img class="media-object" src="https://cdn.idntimes.com/content-images/avatar/yulidnc_100x100.jpg?v=d41d8cd98f00b204e9800998ecf8427e" alt="bI9fO8rgX1mj0bb">
            </a>
        </div>
        <div class="media-body">
            <small class="grey-text">Ditanyakan pada 14 Aug 2021 | 13.46</small>
            <a href="https://tanyajawab.idntimes.com/yulidnc/bI9fO8rgX1mj0bb?q=">
                <h2 class="bold-text">Bagaimana cara membuat quiz di idn times?</h2>
            </a>
            <div class="actions-qna clearfix">
                <ul class="tag choosen-category clearfix">
                                            <li><a href="#">Career</a></li>
                                    </ul>
            </div>
        </div>
    </div>
</li>                            <li>
    <div class="media">
        <div class="media-left">
            <a href="https://tanyajawab.idntimes.com/sugianto-5/81eRtlvHgjsNDK8?q=" class="img-box">
                <img class="media-object" src="https://cdn.idntimes.com/content-images/avatar/sugianto-5_100x100.jpeg?v=d41d8cd98f00b204e9800998ecf8427e" alt="81eRtlvHgjsNDK8">
            </a>
        </div>
        <div class="media-body">
            <small class="grey-text">Ditanyakan pada 14 Aug 2021 | 13.06</small>
            <a href="https://tanyajawab.idntimes.com/sugianto-5/81eRtlvHgjsNDK8?q=">
                <h2 class="bold-text">Siapakah nama sang proklamator?</h2>
            </a>
            <div class="actions-qna clearfix">
                <ul class="tag choosen-category clearfix">
                                            <li><a href="#">Indonesia</a></li>
                                            <li><a href="#">Inspiration</a></li>
                                    </ul>
            </div>
        </div>
    </div>
</li>                    </ul>
        
    </div>                            </div>
                            <div role="tabpanel" class="tab-pane member" id="member">
                                <div>
    <div class="recomendation-title">Rekomendasi Member</div>
            <ul class="search-member-list">
                            <li>
    <div class="media">
        <div class="media-left media-middle">
            <a href="https://www.idntimes.com/idn-community?q=" class="img-box">
                <img class="media-object" src="https://cdn.idntimes.com/content-images/avatar/idn-community_100x100.png?v=d41d8cd98f00b204e9800998ecf8427e" alt="IDN Times Community">
            </a>
        </div>
        <div class="media-body media-middle">
            <a href="https://www.idntimes.com/idn-community?q=">
                <small class="grey-text">Verified Writer</small>
                <p class="bold-text user-name">IDN Times Community</p>
            </a>
        </div>
    </div>
</li>                            <li>
    <div class="media">
        <div class="media-left media-middle">
            <a href="https://www.idntimes.com/stella-azasya?q=" class="img-box">
                <img class="media-object" src="https://cdn.idntimes.com/content-images/avatar/stella-azasya_100x100.jpg?v=d41d8cd98f00b204e9800998ecf8427e" alt="Stella Azasya">
            </a>
        </div>
        <div class="media-body media-middle">
            <a href="https://www.idntimes.com/stella-azasya?q=">
                <small class="grey-text">Verified Writer</small>
                <p class="bold-text user-name">Stella Azasya</p>
            </a>
        </div>
    </div>
</li>                            <li>
    <div class="media">
        <div class="media-left media-middle">
            <a href="https://www.idntimes.com/stella?q=" class="img-box">
                <img class="media-object" src="https://cdn.idntimes.com/content-images/avatar/stella_100x100.png?v=d41d8cd98f00b204e9800998ecf8427e" alt="Stella Azasya">
            </a>
        </div>
        <div class="media-body media-middle">
            <a href="https://www.idntimes.com/stella?q=">
                <small class="grey-text">Verified</small>
                <p class="bold-text user-name">Stella Azasya</p>
            </a>
        </div>
    </div>
</li>                            <li>
    <div class="media">
        <div class="media-left media-middle">
            <a href="https://www.idntimes.com/izza-namira-1?q=" class="img-box">
                <img class="media-object" src="https://cdn.idntimes.com/content-images/avatar/izza-namira-1_100x100.jpg?v=d41d8cd98f00b204e9800998ecf8427e" alt="Izza Namira">
            </a>
        </div>
        <div class="media-body media-middle">
            <a href="https://www.idntimes.com/izza-namira-1?q=">
                <small class="grey-text">Verified</small>
                <p class="bold-text user-name">Izza Namira</p>
            </a>
        </div>
    </div>
</li>                            <li>
    <div class="media">
        <div class="media-left media-middle">
            <a href="https://www.idntimes.com/klara-livia-1?q=" class="img-box">
                <img class="media-object" src="https://cdn.idntimes.com/content-images/avatar/klara-livia-1_100x100.jpeg?v=d41d8cd98f00b204e9800998ecf8427e" alt="Klara Livia">
            </a>
        </div>
        <div class="media-body media-middle">
            <a href="https://www.idntimes.com/klara-livia-1?q=">
                <small class="grey-text">Verified</small>
                <p class="bold-text user-name">Klara Livia</p>
            </a>
        </div>
    </div>
</li>                    </ul>
        
    </div>                            </div>
                            <div role="tabpanel" class="tab-pane tags" id="tags">
                                <div>
    <div class="recomendation-title">Rekomendasi Tags</div>
            <ul class="search-tags-list">
                            <li class="box-latest box-list">
    
    
    <a href="https://www.idntimes.com/tag/hype?q=">hype</a>
</li>                            <li class="box-latest box-list">
    
    
    <a href="https://www.idntimes.com/tag/entertainment?q=">entertainment</a>
</li>                            <li class="box-latest box-list">
    
    
    <a href="https://www.idntimes.com/tag/foto-artis?q=">foto artis</a>
</li>                            <li class="box-latest box-list">
    
    
    <a href="https://www.idntimes.com/tag/foto-jadul-artis?q=">foto jadul artis</a>
</li>                            <li class="box-latest box-list">
    
    
    <a href="https://www.idntimes.com/tag/divert-me?q=">Divert me</a>
</li>                    </ul>
        
    </div>                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>





<div class="modal fade adult-content" id="adult-content">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<div class="content-adult ">
					<div class="content-adult-image">
						<img src="/assets/img/desktop/adult-content.jpg" alt="IDNTIMES">
					</div>
					<div class="content-adult-description">
						<h3 class="red">Oops!</h3>
						<p>kamu sudah cukup umur belum ?</p>
					</div>
					<ul class="content-adult-share divide-table">
						<li class="divide-table-cell"><a href="https://www.idntimes.com" title="IDNTIMES" class="btn btn-small btn-default">Belum</a></li>
						<li class="divide-table-cell"><a href="#" data-dismiss="modal" title="IDNTIMES" class="btn btn-small btn-primary">Udah dong</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>





<script type="text/javascript" src="/plugins/lazysizes.min.js"></script>
<script type="text/javascript" src="/assets/js/lib/purify.min.js"></script>
<script type="text/javascript" src="/assets/js/desktop.js?vdate=1625572629"></script>
<script type="text/javascript">
	if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
		document.write('<link rel="stylesheet" href="/assets/css/safari.css?vdate=1625572618" />');
	}
</script>



        
        <script>
        function notify(message, type, autohide, delay, duration) {
            var div = $('<div />', {
                'class' : 'notice' + (type ? ' '+type : ''),
                text    :  message || ''
            }),
                close = $('<div />', {
                    'class' : 'close-container',
                    click   : remove.bind(div.stop(true, true), 0, duration),
                    html    : $('<i />', {
                        'class' : 'fas fa-check'
                    })
            });
            
            $('#notification-container').show().append(div.fadeIn(duration||0));
            if (autohide) remove(div, delay, duration);
        }

        function remove(div, delay, duration) {
            div.delay(delay||0).fadeOut(duration || 0, function() {
                $(this).remove();
            });
        }
        </script>

                <script>
	$('.sidebar-social').on('click', 'a', function(){
        var title = $(this).attr('title');
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            'event': 'generalEvent',
            'eventCategory': 'follow',
            'eventAction': 'sidebar',
            'eventLabel': title.toLowerCase(),
        });
    });
</script>	
    <script>
        $('.header-campaign').on('click', function() {
            var menu = $(this.children).text();
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'generalEvent',
                'eventCategory': 'navigation',
                'eventAction': 'main menu click',
                'eventLabel': menu.toLowerCase(),
            });
        });
        $('ul.navigation').on('click', 'li.main-menu', function() {
            var menu = $(this.children).text();
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'generalEvent',
                'eventCategory': 'navigation',
                'eventAction': 'main menu click',
                'eventLabel': menu.toLowerCase(),
            });
        });
        $('#dropdown-submenu-regional').on('click', 'li', function() {
            var menu = $(this.children).text();
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'generalEvent',
                'eventCategory': 'navigation',
                'eventAction': 'regional menu click',
                'eventLabel': 'regional ' + menu.toLowerCase(),
            });
        });
        $('.dropdown-submenu-more').on('click', 'li', function() {
            var menu = $(this.children).text();
            if ($(this).hasClass('channels')) {
                menu = $(this.children).children().attr('alt');
            }
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'generalEvent',
                'eventCategory': 'navigation',
                'eventAction': 'more categories menu click',
                'eventLabel': 'more categories ' + menu.toLowerCase(),
            });
        });

    </script>
    <script type="text/javascript">
        (function() {
            var pa = document.createElement('script'); pa.type = 'text/javascript'; pa.charset = "utf-8"; pa.async = true;
            pa.src = window.location.protocol + "//api.popin.cc/searchbox/idntimes_crawler.js";
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(pa, s);
        })();
    </script>
    <script>
        $('#follow').on('click', 'a', function(){
            var title = $(this).attr('data-title');
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'generalEvent',
                'eventCategory': 'follow',
                'eventAction': 'footer',
                'eventLabel': title,
            });
        });
    </script>
<script>
    window.dataLayer = window.dataLayer || [];
    window.dataLayer.push({
        'event': 'newsView',
        'ecommerce': {
            'promoView': {
                'promotions': [
                                        {
                        'id': '2b844f98e195bce86758ff1b261b5897bcedb5f9',
                        'name': 'Ini Daftar Biaya Tes PCR di Bandara Seluruh Dunia, Jepang Paling Mahal',
                        'creative': 'https://cdn.idntimes.com/content-images/post/20201030/bandara-soekarno-hatta-angkasa-pura-ii-4-8c2892db0791e3b4f79579031eb952d7_600x400.png', // image url if no image just use ‘text’
                        'position': 'article page - trending - 1' // page group - article list name - slot or position
                    },
                                        {
                        'id': 'f24c39e5ff1438a8569087b79c12dc0240b3f593',
                        'name': '31 Potret Terkini Kebun Binatang Surabaya, Makin Keren Gak Ya?',
                        'creative': 'https://cdn.idntimes.com/content-images/post/20180329/untitled-535aa971b749a517dacc0eb1d9e36de1_600x400.png', // image url if no image just use ‘text’
                        'position': 'article page - trending - 2' // page group - article list name - slot or position
                    },
                                        {
                        'id': 'e60c80c89c135079b63c501abbc9bfb1d4b1c27d',
                        'name': 'Info Wisata Kopi Klotok Menoreh Jogja: Lokasi, Rute, Harga, dan Tips ',
                        'creative': 'https://cdn.idntimes.com/content-images/post/20210208/123497218-461635381487081-5611312630213417029-n-02ec97937288f0fcadfaeeaeca802b9f_600x400.jpg', // image url if no image just use ‘text’
                        'position': 'article page - trending - 3' // page group - article list name - slot or position
                    },
                                        {
                        'id': 'd2a9cc6827da76379b28a552ea148ce1f94103ed',
                        'name': 'Potret Keseharian 9 Raja Antagonis Saat Momong Anak, Bikin Melting!',
                        'creative': 'https://cdn.idntimes.com/content-images/community/2021/08/img-20210809-200347-58104fcf873a91b060fa273c628f6d83-8a3220351af38083fbf518c7a6bd5af2_600x400.jpg', // image url if no image just use ‘text’
                        'position': 'article page - trending - 4' // page group - article list name - slot or position
                    },
                                        {
                        'id': '466593f696346ae430b25b4687709196bd073cdc',
                        'name': 'Kesaksian Magis Ketika Sukarno Tiba di Bali: Tapak Kering Meski Hujan',
                        'creative': 'https://cdn.idntimes.com/content-images/post/20190814/whatsapp-image-2019-08-14-at-151506-0ed42b0be681f590dc1415554e10793c_600x400.jpeg', // image url if no image just use ‘text’
                        'position': 'article page - trending - 5' // page group - article list name - slot or position
                    },
                                        {
                        'id': '7361aeb7e845e2c9a514c4bcf6bbc8759a4c1a13',
                        'name': '9 Toko Oleh-oleh Makanan Khas Bandung yang Tak Boleh Terlewatkan ',
                        'creative': 'https://cdn.idntimes.com/content-images/community/2020/11/1605440065273-129468737-df167b21952ef63160c862a6d9e909f7_600x400.jpg', // image url if no image just use ‘text’
                        'position': 'article page - trending - 6' // page group - article list name - slot or position
                    },
                                        {
                        'id': '30151f65bb030279a8d8224312c3bd7e72ca3434',
                        'name': 'Dituduh Berkhianat, Kepala Riset Pesawat Hipersonik Rusia Ditangkap',
                        'creative': 'https://cdn.idntimes.com/content-images/community/2021/08/e8nz4y0wqagpl0v-2d588b538864a3b2a1a0b557d321694d-0a2c9d23b6323b0cae72e5483196e4b5_600x400.jpg', // image url if no image just use ‘text’
                        'position': 'article page - trending - 7' // page group - article list name - slot or position
                    },
                                        {
                        'id': 'fa330d53fc021b4e38a9fa59b9fddb09f7236650',
                        'name': 'Gugatan AHY yang Larang KLB Pakai Atribut Demokrat Ditolak Pengadilan',
                        'creative': 'https://cdn.idntimes.com/content-images/post/20210617/img-0469-578dd6007275afa61095afd4138fe818_600x400.JPG', // image url if no image just use ‘text’
                        'position': 'article page - trending - 8' // page group - article list name - slot or position
                    },
                                        {
                        'id': '10e5cba6eef3e9ae7d1ba38d2d1396878c32568c',
                        'name': '7 Busana dan Makeup Lesti Kejora di Acara Pengajian, Elok dengan Lilac',
                        'creative': 'https://cdn.idntimes.com/content-images/post/20210814/19148-15c3a65f87ca9e24b14116d9f16bf006_600x400.jpg', // image url if no image just use ‘text’
                        'position': 'article page - trending - 9' // page group - article list name - slot or position
                    },
                                        {
                        'id': '59515753958ad220a657210713de4c71604974a1',
                        'name': 'Hot Mama! 10 Potret Tengku Dewi Liburan Sambil Momong Anak',
                        'creative': 'https://cdn.idntimes.com/content-images/community/2021/08/img-20210813-073844-3c1b98200407221f2b4726df9fd934d0-eda85a3f11301c201f30b503326a6ccf_600x400.jpg', // image url if no image just use ‘text’
                        'position': 'article page - trending - 10' // page group - article list name - slot or position
                    },
                                    ]
            }
        }
    });

    $('.trending-list__li').on('click', 'a', function(){
		var post_id = $(this).attr('data-post-id');
        var image_url = $(this).attr('data-image-url');
        var position = $(this).attr('data-position');
        var title = $(this).text();
        
        dataLayer.push({
            'event': 'newsClick',
            'ecommerce': {
                'promoClick': {
                    'promotions': [
                    {
                        'id': post_id,
                        'name': title,
                        'creative': image_url, // image url if no image just use ‘text’
                        'position': 'article page - trending - ' + position // page group - article list name - slot or position
                    }]
                }
            }
        });
	});
</script>
<script>
	$('.icon-bar').on('click', 'a', function(){
		var label = $(this).attr('class');
		window.dataLayer = window.dataLayer || [];
		window.dataLayer.push({
			'event': 'generalEvent',
			'eventCategory': 'share',
			'eventAction': 'sticky sidebar',
			'eventLabel': label.toLowerCase(),
		});
	});

	$('#article-content').on('click', 'a', function(){
		var label = $(this).text();
		label = $.trim(label);
		if(label.includes("Baca Juga:")){
			label = label.replace("Baca Juga: ", "");
			window.dataLayer = window.dataLayer || [];
			window.dataLayer.push({
				'event': 'generalEvent',
				'eventCategory': 'baca juga',
				'eventAction': label,
				'eventLabel': 'not applicable',
			});
		}
    });
    $('.share-box').on('click', 'a', function(){
		var title = $(this).attr('data-title');
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            'event': 'generalEvent',
            'eventCategory': 'share',
            'eventAction': 'before article',
            'eventLabel': title,
        });
    });

    $('.box-latest').on('click', 'a.just-for-you-click', function(){
        var post_id = $(this).attr('data-post-id');
        var image_url = $(this).attr('data-image-url');
        var position = $(this).attr('data-position');
        var title = $(this).attr('title');

        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            'event': 'justForYouClick',
            'ecommerce': {
                'promoClick': {
                    'promotions': [
                    {
                        'id': post_id,
                        'name': title,
                        'creative': image_url, // image url if no image just use ‘text’
                        'position': 'article page - Berita Terkini Lainnya - ' + position // page group - article list name - slot or position
                    }]
                }
            }
        });
	});
</script>
    <script>
        $(document).on('click', '#search-list', function(){
            // var articleList = $(this).find('a.box-panel');
            var articleList = $(this).find('#article-result.tab-pane.active a');
            var articleTitle = $(articleList).attr('title');
            window.dataLayer = window.dataLayer || [];
            window.dataLayer.push({
                'event': 'generalEvent',
                'eventCategory': 'search',
                'eventAction': 'suggested search query selected click',
                'eventLabel': articleTitle,
            });
        });
    </script>
            <script>
        $('.bottom-sticky-ads__close-btn').click(function() {
            $('.bottom-sticky-ads').css({ 'display': 'none' });
        });
    </script>
    <script type="text/javascript">
        var div = $('.stickThis').offset().top;
        var div_tmp = div;
        
        $(document).scroll(function() {
            var scroll_top = $(window).scrollTop();
            var window_height = $(window).outerHeight();
            var div = $('.stickThis').offset().top;
            var div_parent_top = $('.right-content').offset().top + $('.right-content').outerHeight();
            
            if(div_tmp < div && div < div_parent_top) {
                div_tmp = div;
            }

            if (scroll_top >= div) {
                $('.stickThis').addClass('stick');
            } else {
                $('.stickThis').removeClass('stick');
            }

            if (scroll_top < div_tmp) {
                $('.stickThis').removeClass('stick');
            }

        });
    </script>
    <script src="https://www.idntimes.com/assets/plugins/lazyYT/lazyYT.min.js?vdate=1625572632"></script>
    <script src="https://www.idntimes.com/assets/plugins/jquery-inview/jquery.inview.min.js?vdate=1625572631"></script>
    <script type="text/javascript">
        $( document ).ready(function() {
            $('.js-lazyYT').lazyYT('');
			$('#related-articles').jscroll(jscrollOptions);
			// $("#ivsn-wrapper").insertAfter($(".article__content p:nth-of-type(3n)").next());
        });
	</script>
	

            <script type="text/javascript">
            var ajaxFollowUrl = "https://www.idntimes.com/follow";
        </script>

        <script type="text/javascript">
            $(document).ready(function(){
                $.ajax({
                    type: 'POST',
                    url: "https://www.idntimes.com/ajax/article/increment-views/kisah-inspiratif-menjajal-peluang-bisnis-baru-saat-pandemik-covid",
                    data: { _token: 'acjcsZwQm1GyEiXScrjbIZUJ8f39Hr1w2efkU78x', _method: 'PUT' },
                    cache: false,
                    success: function(data){}
                });
                
            });
        </script>
    
    <script>
        $(document).ready(function(){

            if($(".split-page").length > 0){
                $('.read-more-btn-check').remove();

                $('#article-content').addClass('split-page-available');
            }

            var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname;
                urlCurrent = window.location.href;
                lastString = urlCurrent.substring(urlCurrent.lastIndexOf('/') + 1);
                slashNo = urlCurrent.substr(-1);
                url = window.location.href.replace(/\/$/, '');

            if (slashNo == "/"){
                window.history.pushState({path:newurl},'',url);
            }

            if(lastString > 0){
                $(".split-page").each(function() {
                    console.log('target:' + $(this).data('target'));
                    if ($(this).data('target') <= lastString) {
                        $(this).addClass('open');
                    }
                });

                $(".show-page").each(function() {
                    var value = $(this).attr('target');
                        nextValue = Number(value) + 1;
                        searchLastTarget = Number(lastString) + 1;

                    if ($(this).attr('target') <= lastString){
                        $(this).remove();
                    }

                    if ($(this).attr('target') >= lastString){
                        $('.show-page[target="'+searchLastTarget+'"]').removeClass('hide');
                    }
                });
            }

            $('.show-page').click(function(){
                var value = $(this).attr('target');
                    nextValue = Number(value) + 1;
                    url = window.location.href.replace(/\/$/, '');
                    lastSeg = url.substr(url.lastIndexOf('/') + 1);
                    current = window.location.href;
                    i = current.lastIndexOf('/') + 1;
                    pathSegment = window.location.pathname.split('/');
                    pathName = window.location.pathname
                    if (lastSeg == (value - 1)) {
                        pathName = pathName.substring(0, pathName.lastIndexOf("/"));
                    }
                    newurl = window.location.protocol + '//' + window.location.host + pathName + '/' + value;
                    // newurl = window.location.protocol + "//" + window.location.host + '/' + pathSegment[1] + '/' + pathSegment[2] + '/' +  pathSegment[3] + '/' + pathSegment[4] + '/' + value;
                    current = current.substr(0, i) + value;

                $('.split-page' + $(this).attr('target')).addClass('open');
                $(this).remove();

                $('.show-page[target="'+nextValue+'"]').removeClass('hide');

                $(this).attr('target', value);

                window.history.pushState({path:newurl},'',newurl);

                var articleTitle = document.querySelector('.title-text').textContent.trim();

                                    window.dataLayer = window.dataLayer || [];
                    window.dataLayer.push({
                        'event': 'justForYouView',
                        'ecommerce': {
                            'promoView': {
                                'promotions': [
                                                                                                            {
                                        'id': 'a31d65aadf8bf941d6a8d7c5722206ba20f8675b',
                                        'name': 'Merdeka Ekspor Diresmikan, Jokowi Minta Bos Perbankan Beri Dukungan',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20200318/antarafoto-peresmian-asaff-2020-120320-ak-4-3c6e32b45e1fe27a6a736e04df785ef7_600x400.jpg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 1' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': 'dd01e24eeadf46a3cfd78a5122fa071c1d863539',
                                        'name': 'Bank Dunia: Pandemik COVID-19 Buat Negara Berkembang Menderita',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20200117/whatsapp-image-2020-01-17-at-113440-486a6a95931cebf421fadd6862af68c6_600x400.jpeg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 2' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': '6a64cb14638af6e3b6e99814067a92aabe84d81f',
                                        'name': 'Gelombang ke-18 Kartu Prakerja Segera Dibuka untuk 2,7 Juta Penerima',
                                        'creative': 'https://cdn.idntimes.com/content-images/community/2020/05/kartu pra kerja_600x400.jpg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 3' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': '3c39105571d4fb7e1e616632bab4e5b726837e4c',
                                        'name': 'RI Masuk 10 Besar Negara Vaksinasi COVID-19 Terbanyak Dunia',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20210316/antarafoto-vaksinasi-covid-19-untuk-tenaga-pendidik-kota-bogor-100321-arf-3-806035e63c4841af5d9b6bd631409166_600x400.jpg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 4' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': 'c4c6b02b5305b803faaa1fe933f200dbc98a8ba3',
                                        'name': 'Daftar 10 Orang Singapura Terkaya di Masa Pandemik COVID-19 ',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20210726/whatsapp-image-2021-07-26-at-115902-am-11b14b88614043ce7713538573ac6023_600x400.jpeg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 5' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': 'd24ccac2592bb2b8cd5b88e5daba9c3370b5c64d',
                                        'name': 'Mengenal 4 Jenis Pasar dalam Dunia Usaha',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20210804/whatsapp-image-2021-08-04-at-20430-pm-31f476306259ee197a48145f433959c3_600x400.jpeg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 6' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': '288814af5736c8f45028e9d506bf5b189fe6fe8b',
                                        'name': 'Profil Timur Sukirno, Komisaris Utama Garuda Pengganti Triawan Munaf',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20210319/whatsapp-image-2021-03-18-at-35527-pm-1-7ce00a2cec4466999d58d0247738ce4d_600x400.jpeg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 7' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': 'e3352a218f27b631a63a72fdd69064a1b57145c8',
                                        'name': 'Optimalisasi Pendapatan, Garuda Indonesia Terus Fokus di Bisnis Kargo',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20210813/whatsapp-image-2021-08-13-at-52139-pm-1a98196a5d9e994a6d86436fd0251e44_600x400.jpg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 8' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': 'e3ab30877a32ef7699935d9830c6eb3e57f3e2af',
                                        'name': '5 Faktor yang Memengaruhi Kepuasan Pelanggan ',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20210806/img-20210806-wa0004-e59fdbe052b60fa555af544e5f1a8c1f_600x400.jpg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 9' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': '7a12cae67ae64c5fed18670c5ac93e8dea55aa9a',
                                        'name': 'Usai Lakukan Perombakan, Erick Thohir Minta Garuda Fokus 2 Hal Ini',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20210602/whatsapp-image-2021-06-02-at-111546-am-cb7cde062f463ca8c45d124c75796387_600x400.jpeg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 10' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': '5e1bd3c0c0299e094cd96ee3f28664ff06a2ce6d',
                                        'name': 'Soal Teguran UNESCO, Sandiaga: Kita Terima dan Sudah Diskusi',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20210123/whatsapp-image-2021-01-23-at-104734-am-417fa711f50ae7999ccefa7307b3567a_600x400.jpeg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 11' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': 'a5f903c00de7e43cf91b50f68b07d9a0d01d895f',
                                        'name': 'Ini Alasan Erick Thohir Pangkas Komisaris &amp; Direksi Garuda',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20210531/antarafoto-kedatangan-vaksin-tahap-14-31052021-dr-03-edfdf0b779506b6b522cd07a0e2495a7_600x400.jpg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 12' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': 'dec4016721d75fa540fd1272f64ed3adc42caa44',
                                        'name': 'Susunan Terbaru Direksi dan Komisaris Garuda Usai Triawan-Yenny Mundur',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20210813/whatsapp-image-2021-08-13-at-52139-pm-1a98196a5d9e994a6d86436fd0251e44_600x400.jpg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 13' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': '116394420e89395fd32dbbcded2b92bf53d8ac4e',
                                        'name': 'Timur Sukirno Gantikan Triawan-Yenny Sebagai Komisaris Garuda',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20200124/whatsapp-image-2020-01-24-at-141426-8a8d5f85321425bda59a323aa5046b59_600x400.jpeg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 14' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': 'e056908cc950ac9ddef0f00c12516b867f5cc8f6',
                                        'name': 'Jelang Akhir Pekan, Rupiah Ditutup Melemah Tipis Terhadap Dolar AS',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20210426/whatsapp-image-2021-04-26-at-21458-pm-bf8670fe0b527c2752f7322ceebb8149_600x400.jpeg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 15' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': '63a9e3ae962db19b39f255e9c606e8193243a866',
                                        'name': 'Demi Masa Depan, 5 Dana Ini Penting Disiapkan sejak Usia 20-an',
                                        'creative': 'https://cdn.idntimes.com/content-images/community/2021/08/pexels-buro-millennial-1438072-min-compress1-1-1e225b96884a8cd752c203118612090e-9ebbc54402aec7876d35d0a3b60a0b94_600x400.jpg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 16' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': '6bd3b44fbf7e32d75cab26f236739bb66939f4b5',
                                        'name': 'IHSG Ditutup Melemah Tipis, 8 Saham Ini Laris Manis ',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20210225/antarafoto-ihsg-akhir-pekan-melemah-120719-riv-1-715cd64b3b39e7ef78af97e4eb731dac-c982ce58a2b9c0102acd5b4c31cc4930_600x400.jpg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 17' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': 'b2b4bf251ab68a3d92e36c3f2db5c6ef1c39e011',
                                        'name': 'Yenny Wahid Umumkan Mundur Sebagai Komisaris Garuda Indonesia ',
                                        'creative': 'https://cdn.idntimes.com/content-images/post/20210621/kebaya-yenni-wahid-210416-18-053e691fa466639f209fb077005e6000-6199b9ae884619471c300a68c7a8fb6c_600x400.jpg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 18' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': '55725259c954a16b2bd1ad1f8f4721d51c5b5d41',
                                        'name': 'Begini Posisi Tidur saat Asam Lambung Naik yang Disarankan Ahli',
                                        'creative': 'https://cdn.popmama.com/content-images/post/20200905/17jpg-7d335b8094708cf184b5600d9c4c5837_800x420.jpg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 19' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': '2bc4df179a024a9775b99198dcae2d3c43849099',
                                        'name': 'Begini Cara Mengatasi Batuk pada Bayi 4 Bulan dari Rumah',
                                        'creative': 'https://cdn.popmama.com/content-images/post/20200429/portrait-sick-boy-cleaning-his-nose-with-napkin-flu-season-concept-96872-1358-b26bf5865fbf301e239b43931d74e18d_800x420.jpg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 20' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': 'fc2342e776b2f3f0a9d563b8aec21730425ac3af',
                                        'name': 'Berbahayakah Pemakaian Perhiasan Emas untuk Kulit Bayi? ',
                                        'creative': 'https://cdn.popmama.com/content-images/post/20200620/712268547f2172c7d76462c830131776jpg-2e243e6359af1553b98ef9ab276507d3_800x420.jpg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 21' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': '88c53255d6e9a3146827adb0605b69ed4587fe47',
                                        'name': 'Selain Pencak Silat, Ini 8 Olahraga Tradisional Asli Indonesia',
                                        'creative': 'https://cdn.popbela.com/content-images/post/20210812/a9acf07ec5bd541ab1e52ccd08cbb5f4_750x500.png', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 22' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': '6d65c8026e6a59c3cbbf7647fdeb65ca522f1f76',
                                        'name': 'Jangan Bingung, Ini 7 Cara Menghadapi Pacar yang Egois',
                                        'creative': 'https://cdn.popbela.com/content-images/post/20180821/photogrist-5176713dc6b83da949c9f8b28a368506_750x500.jpg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 23' // page group - article list name - slot or position
                                    },
                                                                                                            {
                                        'id': '29635b5609da2b43578837be5c3c4d8ae213bc51',
                                        'name': '#PopbelaOOTD: Rekomendasi Sepatu Santai untuk Hadiri Pesta Outdoor',
                                        'creative': 'https://cdn.popbela.com/content-images/post/20210814/ezgifcom-gif-maker-37-a19f9199eb2a6ca2fface73434c737cb_750x500.jpg', // image url if no image just use ‘text’
                                        'position': 'article page - Berita Terkini Lainnya - 24' // page group - article list name - slot or position
                                    },
                                                                    ]
                            }
                        }
                    });
                
                // comscore
                (function() {
                    var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
                    s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
                    el.parentNode.insertBefore(s, el);
                })();
                _comscore.push({ c1: "2", c2: "20678181" });

                // alexa
                _atrk_opts = { atrk_acct:"8EwHv1FYxz20cv", domain:"idntimes.com",dynamic: true};
                (function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://certify-js.alexametrics.com/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
            });

            $('.show-page').on('inview', function(event, isInView) {
                if (isInView) {
                    $('.show-page:not(.hide)').trigger('click');
                }
            });

            window.addEventListener('popstate', function() {
                window.history.go(-1);
            });

        });
    </script>
    <script type="text/javascript">
    $(function() {
        
        $("#search-modal").on('show.bs.modal',function(e){
            $('#search-input').val('');
            $("#search-list").html('').hide();
            $('#search-recommendation').show();
            $('#search-input').focus();
            $(".search-content .nav-tabs li").removeClass("active");
            $(".search-content .nav-tabs li.article").addClass("active");
            $('#search-recommendation .tab-pane').removeClass('active');
            $('#search-recommendation .tab-pane.article').addClass('active');
        });

        $(document).on('shown.bs.tab', "#search-modal #search-list a[data-toggle=tab]", function (e) {
            // console.log('shown.bs.tab');
            if ($("#search-modal .modal-content").outerHeight() < $(window).height() && $('#search-list .tab-pane.active').find('.result-empty').length < 1) {
                // console.log('call ajax ajaxMoreSearchResult()');
                ajaxMoreSearchResult();
            }
        });

        // infinite scroll
        $("#search-input").keyup(function(event) {
            if (event.keyCode === 13) {
                $("#search-button").click();
            }
        });

        var ajaxKill = false;

        $(document).on('click', "#search-button", function (e) {
            e.preventDefault();
            var $searchBtn = $(this);
            var $searchInput = $('#search-input');
            var keyword = $searchInput.val().trim();

            var type = $('.search-content .nav-tabs li.active').find('a').attr('aria-controls');

            if (keyword !== "") {
                if (ajaxKill === false) {
                    ajaxKill = true;
                    $("#search-recommendation").hide();
                    $("#search-list").html('<div class="text-center loader" style="padding: 20px 0 0;"><img src="https://www.idntimes.com/assets/img/loader.gif" width="50" /></div>').show();
                    // $('.search-text')
                    //     .html('Tunggu Sebentar... <div class="bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div>')
                    //     .show();
                    $searchBtn.prop('disabled', true);
                    $searchInput.prop('disabled', true);

                    dataLayer.push({
                        'event' : 'search',
                        'keyword' : keyword.toLowerCase()
                    });

                    $.ajax({
                        url: "https://www.idntimes.com/search",
                        type: "GET",
                        data: {
                            keyword: keyword,
                            type: 'all',
                            page: 1
                        }
                    })
                    .done(function(data) {
                        if (data !== '') {
                            $('#search-list').html(data).show();
                            $('#search-input').val(keyword);
                            $("#search-recommendation").hide();
                            $('#search-list').find('#'+type).addClass('active');
                        } else {
                            $("#search-list").html('Hmm..Kami tak bisa menemukan<br>apa yang kamu cari. Coba topik lain, yuk').show();
                        }
                        ajaxKill = false;
                        $searchBtn.prop('disabled', false);
                        $searchInput.prop('disabled', false);
                    })
                    .fail(function(jqXHR, textStatus) {
                        ajaxKill = false;
                        $searchBtn.prop('disabled', false);
                        $searchInput.prop('disabled', false);
                    });
                }
            } else {
                alert('Masukkan kata kunci!');
            }
        });

        $('#search-modal').on("scroll", function() {
            // console.log($(this).scrollTop());
            // console.log($(this).innerHeight());
            // console.log(this.scrollHeight);
            // console.log(this.scrollTop);
            // console.log(this.clientHeight);
            // console.log(this.clientHeight + 1);
            // console.log('=========');
            // this.scrollHeight - this.scrollTop === this.clientHeight
            // if ($(this).scrollTop() + $(this).innerHeight() >= this.scrollHeight) {
            if (this.scrollHeight - this.scrollTop <= this.clientHeight + 1) {
                // alert('reached bottom');
                ajaxMoreSearchResult();
            }
        });

        var ajaxMoreSearchResult = function() {
            var $searchBtn = $('#search-button');
            var $searchInput = $('#search-input');
            var $searchContainer = $('#search-list');
            var keyword = $searchInput.val().trim();
            if (ajaxKill === false && keyword != "" && $searchContainer.is(':visible')) {
                ajaxKill = true;
                $("#search-recommendation").hide();
                $searchContainer.append('<div class="text-center loader" style="padding: 20px 0 0;"><img src="https://www.idntimes.com/assets/img/loader.gif" width="50" /></div>');
                $searchBtn.prop('disabled', true);
                $searchInput.prop('disabled', true);

                var type = $('.search-content .nav-tabs li.active').find('a').attr('aria-controls');
                var page = parseInt($('#search-list .tab-pane.active').attr('data-page'));
                var nextPage = page + 1;

                var content = '';
                if(type == 'article') {
                    content = '#article';
                } else if(type == 'qna') {
                    content = '#qna';
                } else if(type == 'user') {
                    content = '#member';
                } else if(type == 'tag') {
                    content = '#tags';
                }

                if (page != "-1") {
                    $.ajax({
                        url: "https://www.idntimes.com/search",
                        type: "GET",
                        data: {
                            keyword: keyword,
                            type: type,
                            page: nextPage
                        }
                    })
                    .done(function(data) {
                        $('#search-list .loader').remove();
                        if (data !== '') {
                            $(content + ' ul:first').append(data).show();
                            $(content).attr('data-page', nextPage);
                        } else {
                            $(content).append('<p class="text-center" style="margin: 1.5rem 0;">&ndash; <em>telah mencapai batas akhir</em> &ndash;</p>').show();
                            $(content).attr('data-page', "-1");
                        }
                        ajaxKill = false;
                        $searchBtn.prop('disabled', false);
                        $searchInput.prop('disabled', false);
                    })
                    .fail(function(jqXHR, textStatus) {
                        $('#search-list .loader').remove();
                        ajaxKill = false;
                        $searchBtn.prop('disabled', false);
                        $searchInput.prop('disabled', false);
                    });
                } else {
                    $('#search-list .loader').remove();
                    ajaxKill = false;
                    $searchBtn.prop('disabled', false);
                    $searchInput.prop('disabled', false);
                }
            }
        };

        
        
    });
    </script>

                    <script type="text/javascript">
            /* CONFIGURATION START */
            var _ain = {
                id: "1531",
                url: "https://www.idntimes.com/business/finance/rehia-indrayanti-br-sebayang/kisah-inspiratif-menjajal-peluang-bisnis-baru-saat-pandemik-covid",
                postid: "kisah-inspiratif-menjajal-peluang-bisnis-baru-saat-pandemik-covid",
                maincontent: ".content-insights",
                title: "Kisah Inspiratif Menjajal Peluang Bisnis Baru saat Pandemik COVID-19",
                pubdate: "2021-08-09T07:44:00+07:00",
                authors: "Rehia Sebayang",
                sections: "Business>Finance",
                tags: "bisnis, enterpreneurship, usaha, pandemik covid-19, COVID-19, Inspire Me",
                comments: ""
            };
            /* CONFIGURATION END */
            (function (d, s) {
            var sf = d.createElement(s); sf.type = 'text/javascript'; sf.async = true;
            sf.src = (('https:' == d.location.protocol) ? 'https://d7d3cf2e81d293050033-3dfc0615b0fd7b49143049256703bfce.ssl.cf1.rackcdn.com' : 'http://t.contentinsights.com')+'/stf.js';
            var t = d.getElementsByTagName(s)[0]; t.parentNode.insertBefore(sf, t);
            })(document, 'script');
        </script>
    
        
		

			<script>
	var topics = [];

			topics.push('bisnis');
			topics.push('enterpreneurship');
			topics.push('usaha');
			topics.push('pandemik covid-19');
			topics.push('COVID-19');
			topics.push('Inspire Me');
	
    if(window.isAllowAddressByRegion){
        dataLayer.push({
            'event' : 'total_site_traffic',
            'lotameDomain' : 'www.idntimes.com',
            'lotameCategory' : 'Business',
            'lotameSubCategory' : 'Finance',
            'lotameAmpUrl' : 'www.idntimes.com/business/finance/amp/rehia-indrayanti-br-sebayang/kisah-inspiratif-menjajal-peluang-bisnis-baru-saat-pandemik-covid',
            'lotameGender' : '',
            'lotameAge' : '',
            'lotameTopics' : topics,
        });
    }

	</script>
    </body>
</html>

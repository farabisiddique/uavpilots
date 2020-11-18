@extends('layouts.app') 






<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en-US"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en-US"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en-US" > <!--<![endif]-->

<head>
<meta charset="UTF-8">
<!--[if ie]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
<title>
	DronePilot.com | Obsessed with Drones™</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<link rel='dns-prefetch' href='//dronepilot.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="DronePilot.com &raquo; Feed" href="https://dronepilot.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="DronePilot.com &raquo; Comments Feed" href="https://dronepilot.com/comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="DronePilot.com &raquo;  Comments Feed" href="https://dronepilot.com/home-page/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/dronepilot.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.3.6"}};
			!function(e,a,t){var r,n,o,i,p=a.createElement("canvas"),s=p.getContext&&p.getContext("2d");function c(e,t){var a=String.fromCharCode;s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,e),0,0);var r=p.toDataURL();return s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,t),0,0),r===p.toDataURL()}function l(e){if(!s||!s.fillText)return!1;switch(s.textBaseline="top",s.font="600 32px Arial",e){case"flag":return!c([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])&&(!c([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!c([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]));case"emoji":return!c([55357,56424,55356,57342,8205,55358,56605,8205,55357,56424,55356,57340],[55357,56424,55356,57342,8203,55358,56605,8203,55357,56424,55356,57340])}return!1}function d(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(i=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},o=0;o<i.length;o++)t.supports[i[o]]=l(i[o]),t.supports.everything=t.supports.everything&&t.supports[i[o]],"flag"!==i[o]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[i[o]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(r=t.source||{}).concatemoji?d(r.concatemoji):r.wpemoji&&r.twemoji&&(d(r.twemoji),d(r.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='bootstrap-css'  href='https://dronepilot.com/wp-content/themes/krating/css/bootstrap.min.css?ver=5.3.6' type='text/css' media='all' />
<link rel='stylesheet' id='plugin-css'  href='https://dronepilot.com/wp-content/themes/krating/css/plugin.css?ver=5.3.6' type='text/css' media='all' />
<link rel='stylesheet' id='stylesheet-css'  href='https://dronepilot.com/wp-content/themes/krating-child/style.css?ver=5.3.6' type='text/css' media='all' />
<link rel='stylesheet' id='font-css'  href='https://dronepilot.com/wp-content/themes/krating/css/font.css?ver=5.3.6' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-css'  href='https://dronepilot.com/wp-includes/css/dist/block-library/style.min.css?ver=5.3.6' type='text/css' media='all' />
<link rel='stylesheet' id='redux-google-fonts-akmanda_framework-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A400%7CAbril+Fatface%3A400&#038;ver=1594093634' type='text/css' media='all' />
<script type='text/javascript' src='https://dronepilot.com/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp'></script>
<script type='text/javascript' src='https://dronepilot.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='https://dronepilot.com/wp-content/themes/krating/js/pluginsHead.js?ver=5.3.6'></script>
<link rel='https://api.w.org/' href='https://dronepilot.com/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://dronepilot.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://dronepilot.com/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.3.6" />
<link rel="canonical" href="https://dronepilot.com/" />
<link rel='shortlink' href='https://dronepilot.com/' />
<link rel="alternate" type="application/json+oembed" href="https://dronepilot.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdronepilot.com%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://dronepilot.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fdronepilot.com%2F&#038;format=xml" />
<style type="text/css">.sm-clean, .sm-clean ul{background:#ffffff}.sm-clean ul{border-color:#ffffff}.sm-clean > li > ul:before{border-bottom-color:#ffffff}.sm-clean a, .sm-clean ul a, .sidebar-button{color:#000}.sm-clean a:hover, .sm-clean ul a:hover, .sm-clean a:focus, .sm-clean a:active, .sm-clean a.highlighted{color:#D23600}.sidebar-post-entry .post-title h3{color:#fff}.sidebar-post-entry .post-title .bord{background-color:#fff}.sidebar-post-entry .post-meta li{color:#fff}.widget-title{color:#ffffff}#primary-sidebar .bord{background-color:#ffffff}#primary-sidebar a{color:#ffffff}.akmanda-socialbox li{border-color:#ffffff}.pagination .current, .pagination a:hover{background:#000}.pagination .current, .pagination a{color:#fff}.pagination a{border-color:#fff}.loop-navigation a{color:#000}.post-meta .icon.post-type{color:#fff}.post-meta .icon.post-type{background:#000}.more, .wpcf7-submit{color:#000}.more, .wpcf7-submit{border-color:#000}.more:hover, .wpcf7-submit:hover{background:#000}.more:hover, .wpcf7-submit:hover{border-color:#000}.post-title h2 a{color:#000}.inner-content p, .akmanda-excerpt p{color:#2C3033}.post-meta li{color:#2C3033}.comments-title{color:#000}.comment .avatar img{border-color:#000}input#submit{background-color:#000}input#submit:hover{background-color:#2C3033}.quote-wrap blockquote p{color:#000000}.quote-wrap blockquote{background:#ffffff}.quote-wrap blockquote .icon{color:#000}.quote-wrap blockquote{border-color:#000}.quote-wrap cite{color:#000}.su-spoiler-style-default > .su-spoiler-title{color:#ffffff}.su-spoiler-style-default > .su-spoiler-title{background-color:#333}.su-tabs .su-tabs-nav span{color:#ffffff}.su-tabs .su-tabs-nav span:hover, .su-tabs-nav span.su-tabs-current{color:#333}.su-tabs-nav span.su-tabs-current{background:#ffffff}.su-tabs-nav span:hover{background:#ffffff}.su-tabs-nav, .su-tabs-nav span, .su-tabs-panes, .su-tabs-pane, #main .su-tabs{background:#333}.su-tabs-nav, .su-tabs-nav span, .su-tabs-panes, .su-tabs-pane{border-color:#333}</style> <link rel="icon" href="https://dronepilot.com/wp-content/uploads/2019/11/cropped-favicon-3-32x32.png" sizes="32x32" />
<link rel="icon" href="https://dronepilot.com/wp-content/uploads/2019/11/cropped-favicon-3-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="https://dronepilot.com/wp-content/uploads/2019/11/cropped-favicon-3-180x180.png" />
<meta name="msapplication-TileImage" content="https://dronepilot.com/wp-content/uploads/2019/11/cropped-favicon-3-270x270.png" />
		<style type="text/css" id="wp-custom-css">
			.site-title {
    margin: 0;
    display: none;
}

.bord {
    display: none;
}

.meta {
    display: none;
}

.share-post.sharer-0 label {
    display: none;
}

.post-meta ul {
    display: none;
}

#nav-below {
    display: none;
}

th, td {
    border: 0px solid #fff;
}

table.dataTable thead th, table.dataTable thead td {
    border-bottom: 3px solid #111;
}

table.dataTable.no-footer {
    border-bottom: 3px solid #111;
}

.posts-data-table tr.odd td {
background-color: #fff; 
}
.posts-data-table tr.even td {
background-color: #f9f9f9;
} 

.posts-table-below {
    margin-top: .0em;
    background-color: #f9f9f9;
		height: 40px
}

.posts-data-table tr {
    background-color: #f9f9f9;
}

.share-post.sharer-0 {
    height: 0px;
}

.share-post {
    display: none;
    margin: 0px auto;
}

element.style {
    display: none;
}

.sidebar-post-entry {
    display: none;
}

.posts-table-below {
    margin-top: .0em;
    height: 42px;
}

.posts-table-below .dataTables_info {
    margin-left: 0.65em;
}

.sidebar-button {
    position: fixed;
    left: 50%;
    top: 20px;
    font-size: 28px;
    font-size: 2.8rem;
    padding: 6px 10px 0;
    z-index: 1;
    display: none;
}

.wp-block-columns {
    display: flex;
    margin-bottom: 1px;
}

.wp-block-columns {
    flex-wrap: nowrap;
    height: 50px;
}
		</style>
		<style type="text/css" title="dynamic-css" class="options-output">body{font-family:"Open Sans";font-weight:400;font-style:normal;color:#000;}h1,h2,h3,h4,h5,h6{font-family:"Abril Fatface";font-weight:400;font-style:normal;color:#000;}nav.menu a{font-family:"Abril Fatface";font-weight:400;font-style:normal;color:#000;}</style>
</head>

<body class="home page-template-default page page-id-2">

<header id="header" class="header row clearfix">

<div id="sidr">
<nav id="mainmenu" class="menu clearfix"><ul id="menu-menu-1" class="sm sm-clean"><li id="menu-item-84" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-84"><a href="https://dronepilot.com/" aria-current="page">#2 (no title)</a></li>
</ul></nav> 
<div class="sidebar-post col-md-8">

    <div class="sidebar-post-entry clearfix"><a href="https://dronepilot.com/ferdinandwolf/" title="Ferdinand Wolf">
      <div class="sidebar-thumb col-md-5">
          <img width="278" height="300" src="https://dronepilot.com/wp-content/uploads/2020/07/pilot-37-278x300.png" class="attachment-medium size-medium wp-post-image" alt="Ferdinand Wolf" srcset="https://dronepilot.com/wp-content/uploads/2020/07/pilot-37-278x300.png 278w, https://dronepilot.com/wp-content/uploads/2020/07/pilot-37-948x1024.png 948w, https://dronepilot.com/wp-content/uploads/2020/07/pilot-37-768x829.png 768w, https://dronepilot.com/wp-content/uploads/2020/07/pilot-37.png 1000w" sizes="(max-width: 278px) 100vw, 278px" /></div>
            <div class="post-title col-md-7">
            <h3>
               Ferdinand Wolf            </h3>
            <div class="bord"></div>
        </div><!-- post-title -->

        <div class="post-meta">  
             <ul>
            <li><i class="icon post-type ta-ionicons-9"></i></li>
            <li>July 8, 2020 / </li> 
            <li> 0 Comments</li>
        </ul>
       </div>       
         </a></div>     <div class="sidebar-post-entry clearfix"><a href="https://dronepilot.com/chrisnewman/" title="Chris Newman">
      <div class="sidebar-thumb col-md-5">
          <img width="278" height="300" src="https://dronepilot.com/wp-content/uploads/2020/07/pilot-35-278x300.png" class="attachment-medium size-medium wp-post-image" alt="Chris Newman" srcset="https://dronepilot.com/wp-content/uploads/2020/07/pilot-35-278x300.png 278w, https://dronepilot.com/wp-content/uploads/2020/07/pilot-35-948x1024.png 948w, https://dronepilot.com/wp-content/uploads/2020/07/pilot-35-768x829.png 768w, https://dronepilot.com/wp-content/uploads/2020/07/pilot-35.png 1000w" sizes="(max-width: 278px) 100vw, 278px" /></div>
            <div class="post-title col-md-7">
            <h3>
               Chris Newman            </h3>
            <div class="bord"></div>
        </div><!-- post-title -->

        <div class="post-meta">  
             <ul>
            <li><i class="icon post-type ta-ionicons-9"></i></li>
            <li>July 7, 2020 / </li> 
            <li> 0 Comments</li>
        </ul>
       </div>       
         </a></div>     <div class="sidebar-post-entry clearfix"><a href="https://dronepilot.com/coryibanez/" title="Cory Ibanez">
      <div class="sidebar-thumb col-md-5">
          <img width="278" height="300" src="https://dronepilot.com/wp-content/uploads/2020/07/pilot-34-278x300.png" class="attachment-medium size-medium wp-post-image" alt="Cory Ibanez" srcset="https://dronepilot.com/wp-content/uploads/2020/07/pilot-34-278x300.png 278w, https://dronepilot.com/wp-content/uploads/2020/07/pilot-34-948x1024.png 948w, https://dronepilot.com/wp-content/uploads/2020/07/pilot-34-768x829.png 768w, https://dronepilot.com/wp-content/uploads/2020/07/pilot-34.png 1000w" sizes="(max-width: 278px) 100vw, 278px" /></div>
            <div class="post-title col-md-7">
            <h3>
               Cory Ibanez            </h3>
            <div class="bord"></div>
        </div><!-- post-title -->

        <div class="post-meta">  
             <ul>
            <li><i class="icon post-type ta-ionicons-9"></i></li>
            <li>July 6, 2020 / </li> 
            <li> 0 Comments</li>
        </ul>
       </div>       
         </a></div>     <div class="sidebar-post-entry clearfix"><a href="https://dronepilot.com/andrewpetersen/" title="Andrew Petersen">
      <div class="sidebar-thumb col-md-5">
          <img width="278" height="300" src="https://dronepilot.com/wp-content/uploads/2020/07/pilot-33-278x300.png" class="attachment-medium size-medium wp-post-image" alt="Andrew Petersen" srcset="https://dronepilot.com/wp-content/uploads/2020/07/pilot-33-278x300.png 278w, https://dronepilot.com/wp-content/uploads/2020/07/pilot-33-948x1024.png 948w, https://dronepilot.com/wp-content/uploads/2020/07/pilot-33-768x829.png 768w, https://dronepilot.com/wp-content/uploads/2020/07/pilot-33.png 1000w" sizes="(max-width: 278px) 100vw, 278px" /></div>
            <div class="post-title col-md-7">
            <h3>
               Andrew Petersen            </h3>
            <div class="bord"></div>
        </div><!-- post-title -->

        <div class="post-meta">  
             <ul>
            <li><i class="icon post-type ta-ionicons-9"></i></li>
            <li>July 6, 2020 / </li> 
            <li> 0 Comments</li>
        </ul>
       </div>       
         </a></div>     <div class="sidebar-post-entry clearfix"><a href="https://dronepilot.com/joshuabardwell/" title="Joshua Bardwell">
      <div class="sidebar-thumb col-md-5">
          <img width="278" height="300" src="https://dronepilot.com/wp-content/uploads/2020/03/pilot-29-278x300.png" class="attachment-medium size-medium wp-post-image" alt="Joshua Bardwell" srcset="https://dronepilot.com/wp-content/uploads/2020/03/pilot-29-278x300.png 278w, https://dronepilot.com/wp-content/uploads/2020/03/pilot-29-948x1024.png 948w, https://dronepilot.com/wp-content/uploads/2020/03/pilot-29-768x829.png 768w, https://dronepilot.com/wp-content/uploads/2020/03/pilot-29.png 1000w" sizes="(max-width: 278px) 100vw, 278px" /></div>
            <div class="post-title col-md-7">
            <h3>
               Joshua Bardwell            </h3>
            <div class="bord"></div>
        </div><!-- post-title -->

        <div class="post-meta">  
             <ul>
            <li><i class="icon post-type ta-ionicons-9"></i></li>
            <li>March 18, 2020 / </li> 
            <li> 0 Comments</li>
        </ul>
       </div>       
         </a></div> 
</div>
<aside id="primary-sidebar" class="widget-area col-md-4" role="complementary">

	
</aside><!-- #primary-sidebar --></div>
<div class="logo"> 
    
    <div class="logo-title">
        <h1 class="site-title">
            <a href="https://dronepilot.com" rel="home">DronePilot.com</a>
        </h1>
    </div>

</div><!-- logo -->
</header>

<a href="#" class="sidebar-button"><i class="icon ta-elusive-icons-3"></i></a>

<div id="main" class="site-main clearfix">

		<div id="content-wrapper" class="wrapper">
	
		<article  id="post-2" class="post clearfix post-2 page type-page status-publish has-post-thumbnail hentry">


<div class="post-content clearfix">
            <a href="https://dronepilot.com/" title="" >   <div class="post-thumb col-md-6">
      <img width="1000" height="1080" src="https://dronepilot.com/wp-content/uploads/2020/07/pilot-32.png" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="DronePilots.com" srcset="https://dronepilot.com/wp-content/uploads/2020/07/pilot-32.png 1000w, https://dronepilot.com/wp-content/uploads/2020/07/pilot-32-278x300.png 278w, https://dronepilot.com/wp-content/uploads/2020/07/pilot-32-948x1024.png 948w, https://dronepilot.com/wp-content/uploads/2020/07/pilot-32-768x829.png 768w" sizes="(max-width: 1000px) 100vw, 1000px" />      </div><!-- post thumb -->
  </a>
   
                  
            <div class="post-entry col-md-6">                                                             
                

	        <div class="post-title">
            <h2>
                <a href="https://dronepilot.com/" title=""></a>

            </h2>
           
         </div><!-- post-title --> 

 
                <div class="bord"></div>
                          <div class="inner-content">
          
<div class="wp-block-image"><figure class="aligncenter size-large is-resized"><a href="https://dronepilot.com/"><img src="https://dronepilot.com/wp-content/uploads/2020/10/logo-21.png" alt="" class="wp-image-496" width="271" height="62" srcset="https://dronepilot.com/wp-content/uploads/2020/10/logo-21.png 542w, https://dronepilot.com/wp-content/uploads/2020/10/logo-21-300x69.png 300w" sizes="(max-width: 271px) 100vw, 271px" /></a></figure></div>



<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>



<p>A DronePilots verified profile is the perfect tool for helping drone pilots from all industries showcase themselves and their companies in an attention-grabbing context.&nbsp; Whether you want to drum up new customers, find sponsors, or build your personal brand &#8211; it’s all easier with your own dedicated verified profile.</p>



<p class="has-text-align-center"><strong><span style="text-decoration: underline;"><a href="mailto:elizabeth@droneblog.com">Join this exclusive club now for $99/month</a></span></strong></p>



<div class="wp-block-columns">
<div class="wp-block-column" style="flex-basis:10%"></div>



<div class="wp-block-column" style="flex-basis:80%">
<div id="paypal-button-container"></div>
<script src="https://www.paypal.com/sdk/js?client-id=Aaca9jqC0H-_09dnlNTt7pE3Yn8COHJuBQGfz6zIu1mCvsE0lRCclEXzXMtLmTLhizwVZAHpONxXJ0s7&amp;vault=true" data-sdk-integration-source="button-factory"></script>
<script>
  paypal.Buttons({
      style: {
          shape: 'rect',
          color: 'gold',
          layout: 'horizontal',
          label: 'subscribe',
          
      },
      createSubscription: function(data, actions) {
        return actions.subscription.create({
          'plan_id': 'P-9GF67191P0584433GL5HQ4PA'
        });
      },
      onApprove: function(data, actions) {
        alert(data.subscriptionID);
      }
  }).render('#paypal-button-container');
</script>



<p></p>
</div>



<div class="wp-block-column" style="flex-basis:10%"></div>
</div>



<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>



<table id="ptp_fc1731931215e2eb_1" class="posts-data-table" width="100%" data-config="{&quot;pageLength&quot;:10,&quot;pagingType&quot;:&quot;simple_numbers&quot;,&quot;serverSide&quot;:false,&quot;autoWidth&quot;:true,&quot;clickFilter&quot;:true,&quot;scrollOffset&quot;:15,&quot;resetButton&quot;:true,&quot;lengthMenu&quot;:[[10,25,50,100,-1],[10,25,50,100,&quot;All&quot;]],&quot;columnDefs&quot;:[{&quot;className&quot;:&quot;col-title&quot;,&quot;targets&quot;:0},{&quot;className&quot;:&quot;col-categories&quot;,&quot;targets&quot;:1},{&quot;className&quot;:&quot;col-tags&quot;,&quot;targets&quot;:2}],&quot;dom&quot;:&quot;&lt;\&quot;posts-table-wrapper krating\&quot;&lt;\&quot;posts-table-above posts-table-controls\&quot;f&gt;t&lt;\&quot;posts-table-below posts-table-controls\&quot;ip&gt;&gt;&quot;}" data-filters="{&quot;categories&quot;:{&quot;taxonomy&quot;:&quot;category&quot;,&quot;heading&quot;:&quot;INDUSTRY&quot;,&quot;terms&quot;:[{&quot;name&quot;:&quot;Cinema&quot;,&quot;slug&quot;:&quot;cinema&quot;},{&quot;name&quot;:&quot;FPV&quot;,&quot;slug&quot;:&quot;fpv&quot;},{&quot;name&quot;:&quot;Freestyle&quot;,&quot;slug&quot;:&quot;freestyle&quot;},{&quot;name&quot;:&quot;Racing&quot;,&quot;slug&quot;:&quot;racing&quot;}]}}" data-order='[[0, "asc"]]'><thead><tr><th class="col-title all" data-name="title" data-orderable="true" data-searchable="true" data-width="40%" data-priority="1">NAME</th><th class="col-categories" data-name="categories" data-orderable="true" data-searchable="true" data-width="30%" data-priority="6" data-click-filter="true">INDUSTRY</th><th class="col-tags" data-name="tags" data-orderable="true" data-searchable="true" data-width="30%" data-priority="10" data-click-filter="true">LOCATION</th><th data-name="categories_hfilter" data-tax="category" data-searchable="true" data-visible="false">categories_hfilter</th></tr></thead><tbody><tr id="post-row-169" class="post-row post-type-post post-169 publish"><td><a href="https://dronepilot.com/alexvanover/">Alex Vanover</a></td><td><a href="https://dronepilot.com/category/racing/" rel="category tag">Racing</a></td><td><a href="https://dronepilot.com/tag/united-states/" rel="tag">United States</a></td><td>racing</td></tr><tr id="post-row-365" class="post-row post-type-post post-365 publish"><td><a href="https://dronepilot.com/alexanderlea/">Alexander Lea</a></td><td><a href="https://dronepilot.com/category/racing/" rel="category tag">Racing</a></td><td><a href="https://dronepilot.com/tag/united-states/" rel="tag">United States</a></td><td>racing</td></tr><tr id="post-row-436" class="post-row post-type-post post-436 publish"><td><a href="https://dronepilot.com/andrewpetersen/">Andrew Petersen</a></td><td><a href="https://dronepilot.com/category/cinema/" rel="category tag">Cinema</a></td><td><a href="https://dronepilot.com/tag/los-angeles-ca/" rel="tag">Los Angeles CA</a></td><td>cinema</td></tr><tr id="post-row-354" class="post-row post-type-post post-354 publish"><td><a href="https://dronepilot.com/blakesams/">Blake Sams</a></td><td><a href="https://dronepilot.com/category/racing/" rel="category tag">Racing</a></td><td><a href="https://dronepilot.com/tag/nashville-tn/" rel="tag">Nashville TN</a></td><td>racing</td></tr><tr id="post-row-450" class="post-row post-type-post post-450 publish"><td><a href="https://dronepilot.com/chrisnewman/">Chris Newman</a></td><td><a href="https://dronepilot.com/category/cinema/" rel="category tag">Cinema</a></td><td><a href="https://dronepilot.com/tag/lindon-ut/" rel="tag">Lindon UT</a></td><td>cinema</td></tr><tr id="post-row-377" class="post-row post-type-post post-377 publish"><td><a href="https://dronepilot.com/chrisspangler/">Chris Spangler</a></td><td><a href="https://dronepilot.com/category/racing/" rel="category tag">Racing</a></td><td><a href="https://dronepilot.com/tag/united-states/" rel="tag">United States</a></td><td>racing</td></tr><tr id="post-row-445" class="post-row post-type-post post-445 publish"><td><a href="https://dronepilot.com/coryibanez/">Cory Ibanez</a></td><td><a href="https://dronepilot.com/category/racing/" rel="category tag">Racing</a></td><td><a href="https://dronepilot.com/tag/united-states/" rel="tag">United States</a></td><td>racing</td></tr><tr id="post-row-384" class="post-row post-type-post post-384 publish"><td><a href="https://dronepilot.com/danegrace/">Dane Grace</a></td><td><a href="https://dronepilot.com/category/racing/" rel="category tag">Racing</a></td><td><a href="https://dronepilot.com/tag/denmark/" rel="tag">Denmark</a></td><td>racing</td></tr><tr id="post-row-350" class="post-row post-type-post post-350 publish"><td><a href="https://dronepilot.com/dunkanbossion/">Dunkan Bossion</a></td><td><a href="https://dronepilot.com/category/racing/" rel="category tag">Racing</a></td><td><a href="https://dronepilot.com/tag/france/" rel="tag">France</a></td><td>racing</td></tr><tr id="post-row-265" class="post-row post-type-post post-265 publish"><td><a href="https://dronepilot.com/erinpaul/">Erin Paul</a></td><td><a href="https://dronepilot.com/category/racing/" rel="category tag">Racing</a></td><td><a href="https://dronepilot.com/tag/east-lansing-mi/" rel="tag">East Lansing MI</a></td><td>racing</td></tr><tr id="post-row-455" class="post-row post-type-post post-455 publish"><td><a href="https://dronepilot.com/ferdinandwolf/">Ferdinand Wolf</a></td><td><a href="https://dronepilot.com/category/cinema/" rel="category tag">Cinema</a></td><td><a href="https://dronepilot.com/tag/germany/" rel="tag">Germany</a></td><td>cinema</td></tr><tr id="post-row-301" class="post-row post-type-post post-301 publish"><td><a href="https://dronepilot.com/gabrielkocher/">Gabriel Kocher</a></td><td><a href="https://dronepilot.com/category/racing/" rel="category tag">Racing</a></td><td><a href="https://dronepilot.com/tag/canada/" rel="tag">Canada</a></td><td>racing</td></tr><tr id="post-row-316" class="post-row post-type-post post-316 publish"><td><a href="https://dronepilot.com/jamieann/">Jamie Ann</a></td><td><a href="https://dronepilot.com/category/freestyle/" rel="category tag">Freestyle</a></td><td><a href="https://dronepilot.com/tag/greenwood-sc/" rel="tag">Greenwood SC</a></td><td>freestyle</td></tr><tr id="post-row-324" class="post-row post-type-post post-324 publish"><td><a href="https://dronepilot.com/johnnyschaer/">Johnny Schaer</a></td><td><a href="https://dronepilot.com/category/freestyle/" rel="category tag">Freestyle</a></td><td><a href="https://dronepilot.com/tag/chicago-il/" rel="tag">Chicago IL</a></td><td>freestyle</td></tr><tr id="post-row-1" class="post-row post-type-post post-1 publish"><td><a href="https://dronepilot.com/jordantemkin/">Jordan Temkin</a></td><td><a href="https://dronepilot.com/category/racing/" rel="category tag">Racing</a></td><td><a href="https://dronepilot.com/tag/seattle-wa/" rel="tag">Seattle WA</a></td><td>racing</td></tr><tr id="post-row-398" class="post-row post-type-post post-398 publish"><td><a href="https://dronepilot.com/joshuabardwell/">Joshua Bardwell</a></td><td><a href="https://dronepilot.com/category/fpv/" rel="category tag">FPV</a></td><td><a href="https://dronepilot.com/tag/united-states/" rel="tag">United States</a></td><td>fpv</td></tr><tr id="post-row-342" class="post-row post-type-post post-342 publish"><td><a href="https://dronepilot.com/lexiejanson/">Lexie Janson</a></td><td><a href="https://dronepilot.com/category/racing/" rel="category tag">Racing</a></td><td><a href="https://dronepilot.com/tag/ireland/" rel="tag">Ireland</a></td><td>racing</td></tr><tr id="post-row-345" class="post-row post-type-post post-345 publish"><td><a href="https://dronepilot.com/macposchwald/">Mac Poschwald</a></td><td><a href="https://dronepilot.com/category/racing/" rel="category tag">Racing</a></td><td><a href="https://dronepilot.com/tag/poland/" rel="tag">Poland</a></td><td>racing</td></tr><tr id="post-row-276" class="post-row post-type-post post-276 publish"><td><a href="https://dronepilot.com/magdalenaklos/">Magdalena Klos</a></td><td><a href="https://dronepilot.com/category/freestyle/" rel="category tag">Freestyle</a></td><td><a href="https://dronepilot.com/tag/england/" rel="tag">England</a></td><td>freestyle</td></tr><tr id="post-row-388" class="post-row post-type-post post-388 publish"><td><a href="https://dronepilot.com/mirkocesena/">Mirko Cesena</a></td><td><a href="https://dronepilot.com/category/racing/" rel="category tag">Racing</a></td><td><a href="https://dronepilot.com/tag/italy/" rel="tag">Italy</a></td><td>racing</td></tr><tr id="post-row-334" class="post-row post-type-post post-334 publish"><td><a href="https://dronepilot.com/nickwillard/">Nick Willard</a></td><td><a href="https://dronepilot.com/category/racing/" rel="category tag">Racing</a></td><td><a href="https://dronepilot.com/tag/atlanta-ga/" rel="tag">Atlanta GA</a></td><td>racing</td></tr><tr id="post-row-337" class="post-row post-type-post post-337 publish"><td><a href="https://dronepilot.com/nicolemerrick/">Nicole Merrick</a></td><td><a href="https://dronepilot.com/category/racing/" rel="category tag">Racing</a></td><td><a href="https://dronepilot.com/tag/australia/" rel="tag">Australia</a></td><td>racing</td></tr><tr id="post-row-238" class="post-row post-type-post post-238 publish"><td><a href="https://dronepilot.com/noelliesartorio/">Noellie Sartorio</a></td><td><a href="https://dronepilot.com/category/racing/" rel="category tag">Racing</a></td><td><a href="https://dronepilot.com/tag/australia/" rel="tag">Australia</a></td><td>racing</td></tr><tr id="post-row-208" class="post-row post-type-post post-208 publish"><td><a href="https://dronepilot.com/paulnurkkala/">Paul Nurkkala</a></td><td><a href="https://dronepilot.com/category/racing/" rel="category tag">Racing</a></td><td><a href="https://dronepilot.com/tag/indianapolis-in/" rel="tag">Indianapolis IN</a></td><td>racing</td></tr><tr id="post-row-381" class="post-row post-type-post post-381 publish"><td><a href="https://dronepilot.com/ralphhogenbirk/">Ralph Hogenbirk</a></td><td><a href="https://dronepilot.com/category/racing/" rel="category tag">Racing</a></td><td><a href="https://dronepilot.com/tag/netherlands/" rel="tag">Netherlands</a></td><td>racing</td></tr><tr id="post-row-361" class="post-row post-type-post post-361 publish"><td><a href="https://dronepilot.com/raphaelpirker/">Raphael Pirker</a></td><td><a href="https://dronepilot.com/category/fpv/" rel="category tag">FPV</a></td><td><a href="https://dronepilot.com/tag/hong-kong/" rel="tag">Hong Kong</a></td><td>fpv</td></tr><tr id="post-row-126" class="post-row post-type-post post-126 publish"><td><a href="https://dronepilot.com/steeledavis/">Steele Davis</a></td><td><a href="https://dronepilot.com/category/freestyle/" rel="category tag">Freestyle</a></td><td><a href="https://dronepilot.com/tag/atlanta-ga/" rel="tag">Atlanta GA</a></td><td>freestyle</td></tr><tr id="post-row-393" class="post-row post-type-post post-393 publish"><td><a href="https://dronepilot.com/tomasspetersons/">Tomass Pētersons</a></td><td><a href="https://dronepilot.com/category/racing/" rel="category tag">Racing</a></td><td><a href="https://dronepilot.com/tag/latvia/" rel="tag">Latvia</a></td><td>racing</td></tr><tr id="post-row-358" class="post-row post-type-post post-358 publish"><td><a href="https://dronepilot.com/tommytibajia/">Tommy Tibajia</a></td><td><a href="https://dronepilot.com/category/fpv/" rel="category tag">FPV</a></td><td><a href="https://dronepilot.com/tag/huntington-beach-ca/" rel="tag">Huntington Beach CA</a></td><td>fpv</td></tr><tr id="post-row-222" class="post-row post-type-post post-222 publish"><td><a href="https://dronepilot.com/vinceirie/">Vince Irie</a></td><td><a href="https://dronepilot.com/category/racing/" rel="category tag">Racing</a></td><td><a href="https://dronepilot.com/tag/netherlands/" rel="tag">Netherlands</a></td><td>racing</td></tr></tbody></table>



<p class="has-small-font-size"><a href="https://dronepilot.com/">DronePilots</a> © 2020.  A&nbsp;<a href="http://dronenetwork.com/">DroneNetwork</a>&nbsp;brand.  Obsessed with Drones™</p>
          </div>
                      
                     
            </div> 
            
</div><!-- post-content -->     
</article><!-- #post-home-page-2 -->
		</div><!-- wrapper -->


</div> <!-- #main-->


<link rel='stylesheet' id='datatables-css'  href='https://dronepilot.com/wp-content/plugins/posts-table-pro/assets/js/datatables/datatables.min.css?ver=1.10.21' type='text/css' media='all' />
<link rel='stylesheet' id='posts-table-pro-css'  href='https://dronepilot.com/wp-content/plugins/posts-table-pro/assets/css/posts-table-pro.min.css?ver=2.2.1' type='text/css' media='all' />
<script type='text/javascript' src='https://dronepilot.com/wp-includes/js/wp-embed.min.js?ver=5.3.6'></script>
<script type='text/javascript' src='https://dronepilot.com/wp-content/plugins/posts-table-pro/assets/js/datatables/datatables.min.js?ver=1.10.21'></script>
<script type='text/javascript' src='https://dronepilot.com/wp-content/plugins/posts-table-pro/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70.0'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var posts_table_params = {"ajax_url":"https:\/\/dronepilot.com\/wp-admin\/admin-ajax.php","ajax_nonce":"fef52bdab4","wrapper_class":"posts-table-wrapper krating","language":{"info":"Showing _START_ to _END_ of _TOTAL_ entries","infoEmpty":"Showing 0 entries","infoFiltered":"(_MAX_ entries in total)","lengthMenu":"Show _MENU_ entries","emptyTable":"No data available in table.","zeroRecords":"No matching records found.","search":"Search:","paginate":{"first":"First","last":"Last","next":"Next","previous":"Previous"},"thousands":",","decimal":".","aria":{"sortAscending":": activate to sort column ascending","sortDescending":": activate to sort column descending"},"filterBy":"Filter:","resetButton":"Reset"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://dronepilot.com/wp-content/plugins/posts-table-pro/assets/js/posts-table-pro.min.js?ver=2.2.1'></script>
<script type='text/javascript' src='https://dronepilot.com/wp-content/themes/krating/js/pluginsFoot.js?ver=5.3.6'></script>
<script type='text/javascript' src='https://dronepilot.com/wp-content/themes/krating/js/nicescroll.js?ver=5.3.6'></script>
<script type='text/javascript' src='https://dronepilot.com/wp-content/themes/krating/js/main.js?ver=5.3.6'></script>

</body>
</html>
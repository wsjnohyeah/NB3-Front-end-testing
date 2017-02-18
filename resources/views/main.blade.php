<!DOCTYPE html>
<html>

<head>
    <!--Import Style Sheets from external sources-->
    <link type="text/css" rel="stylesheet" href="//cdn.bootcss.com/materialize/0.98.0/css/materialize.min.css" media="screen,projection" />
    
    	<!-- self-->
    <link rel="stylesheet" href="railwaysans/css/stylesheet.css" type="text/css" charset="utf-8" />
	<link rel="stylesheet" href="css/main.css" type="text/css" charset="utf-8" />
	@yield('optional_style')
	<!--End Import Styles-->
	
    <!--Let browser know website is optimized for mobile-->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
    <meta content="telephone=no" name="format-detection" />
     <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<!--
	#Wechat Repost Image
	<div id='wx_pic' style='margin:0 auto;display:none;'>
		<img src='logo.jpg' />
	</div>
	-->

	<title>@yield('title') — NoticeBoard</title>
</head>

<body>
    <!--Side Nav-->
	<ul id="slide-out-panel" class="side-nav">
		<img class="side-background" src="assets/images/avatar-background.jpg"></img>
		<li>
			<div class="userView">
				<!--<img class="background" src="assets/images/avatar-background.jpg">-->
				<a href="#!user"><img class="circle" src="assets/images/avatar.jpg"></a>
				<a href="#!name"><span class="white-text name">Ludwig van Beethoven</span></a>
				<a href="#!email"><span class="white-text email">Trade Tallyman</span></a>
			</div>
		</li>
		<li><a href="#!" class="waves-effect"><i class="material-icons">view_stream</i>NoticeBoard</a></li>
		<li><a href="#!" class="waves-effect"><i class="material-icons">school</i>Powerschool</a></li>
		<li><a href="#!" class="waves-effect"><i class="material-icons">cloud</i>Files</a></li>
		<li><a href="#!" class="waves-effect"><i class="material-icons">shop_basket</i>Marketplace</a></li>
		<li><a href="#!" class="waves-effect"><i class="material-icons">comment</i>Danmaku</a></li>
		<li>
			<div class="divider"></div>
		</li>
		<li><a class="subheader">Account</a></li>
		<li><a class="waves-effect" href="#!"><i class="material-icons">settings</i>Settings</a></li>
		<li><a class="waves-effect" href="#!"><i class="material-icons">exit_to_app</i>Sign out</a></li>
	</ul>
	<!--Nav bar-->
	<div class="navbar" id="navbar-container">
		<nav style="box-shadow: none">
			<div class="nav-wrapper" id="navbar">
				<a href="#" data-activates="slide-out-panel" class="button-collapse push-l3 menu-button"><i class="material-icons">menu</i></a>
				
				<!--Change the href to / when uploaded to server. -->
				<a href="index.php"><img class="nb-logo brand-logo center" src="assets/images/logo.png"></img></a>
				<ul id="nav-mobile" class="right">
					<li><a href="#new-post"><i class="material-icons add-button">add</i></a></li>
				</ul>
			</div>
		</nav>
	</div>
	
	<!--Search Bar-->
	@yield('optional_search_bar')
	<!--End Search Bar-->
	
    <!-- New Post Form -->
	@yield('optional_post_form')
	<!-- End Post Form -->

    <!--Content-->
	@yield('content')
	<!--Content-->
    
	
    <div class="post-card article-card about">
        <h5 class="subheader center-align">©2015-2017 HFIProgramming</h5>
    </div>
</body>

<!--Scripts from external source-->
<script type="text/javascript" src="//cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.bootcss.com/materialize/0.98.0/js/materialize.min.js"></script>

<!-- Self -->
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/search.js"></script>

<!-- Post and TinyMCE -->
{{-- USE @include('subviews.postJS') if you need post and TinyMCE functions in a specific page --}}
@yield('post_and_tinymce')


@yield('optional_script')
<!--End Scripts-->

</html>
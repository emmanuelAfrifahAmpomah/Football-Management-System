<!DOCTYPE html>
<html>
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Yashadmin:Sales Management System Admin Bootstrap 5 Template">
	<meta property="og:title" content="Yashadmin:Sales Management System Admin Bootstrap 5 Template">
	<meta property="og:description" content="Yashadmin:Sales Management System Admin Bootstrap 5 Template">
	<meta property="og:image" content="https:/yashadmin.dexignzone.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
	
	<!-- Title -->
	<title>Yash Admin:Sales Management System</title>
	
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	
	<!-- Css Style -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/scrollbar.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="plugins/jstree/dist/themes/default/style.min.css">
	
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Open+Sans:300,400,600,700,800|Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
	
</head>
<body data-spy="scroll" data-target=".nav-bar" data-offset="50">
<div class="wrapper" id="tableofcontent">

	<!-- Sidebar Holder -->
	<nav id="nevbarleft">
		<div class="side-nav full-height">
			<div class="sidebar-header">
				<h2>
					<img src="images/logo.png" alt="logo" class="small-logo"/>
					<img src="images/logo-text.png" alt="logo" class="logo-txt-doc"/>
				</h2>
			</div>
			<div class="nav-bar">
				<ul class="list-unstyled content-scroll components navbar-nav nav" id="download-button">
					<li class="active"><a href="#introduction">Introduction</a></li>
					<li><a href="#sass-compile">Sass Compile</a></li>
					<li><a href="#folder_directories">Folder Directories</a></li>
					<li><a href="#theme-feature">Theme Features</a></li>
					<li><a href="#plugins"> Credit</a></li>
					<li><a href="#html_structure">Html Structure</a></li>
					<li><a href="#our_product">Our Products </a></li>
					<li><a href="#custom_work">Custom Work Requirements </a></li>
					<li><a href="#version_history">Version History</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<!-- Page Content Holder -->
	<div id="content">
		<!-- Navber -->
		<nav class="navbar navbar-default top-nav-bar ">
			<div class="container-fluid">
				<div class="navbar-header">
				   <button type="button" id="sidebarCollapse" class="navbar-btn">
						<span></span>
						<span></span>
						<span></span>
					</button>
				</div>
				<a href="javascript:void(0);" target="_blank" class="site-button support-button DZSupportBtn">Support</a>
				<a href="javascript:void(0);" target="_blank" class="site-button support-button DZBuyNowBtn">Buy Now</a>
			</div>
		</nav>
		<!-- Banner -->
		<section class="app-brief slide-banner">
			<div class="container">
				<div class="section-header">
					<h2>Yash Admin Sales Management System Dashboard</h2>
					<div class="colored-line"></div>
					<div class="section-description">
						Yash Admin Sales Management System
					</div>
					<div class="colored-line"></div>
				</div>
			</div>
		</section>
		
		<!-- Introduction -->
		<section class="app-brief" id="introduction">
			<div class="container center-align">
				<h1>Yash Admin</h1>
				<h3>Yash Admin</h3>
				<p>This documentation is last updated on 5 May 2023.</p>
				<p>Thank you for purchasing this HTML template.</p>
				<p><strong>If you like this template, Please support us by rating this template with 5 stars </strong> </p>
			</div>
		</section>
		<hr/>
		
		<!-- Sass Compile -->
		<section class="app-brief" id="installation">
			<div class="container left-align">
				<div class="section-header">
					<h2 class="dark-text title">Sass Compile - </h2>
				</div>
				<div class="sass-compile">
					<h3 class="title">1.- Install Node.js</h3>
					<p>To compile Sass via the command line first, we need to install <a href="https://nodejs.org/en/" target="_blank">node.js</a>. The easiest way is downloading it from the official website nodejs.org open the package and follow the wizard.</p>
					
					<h3 class="title">2.- Initialize NPM</h3>
					<p>NPM is the Node Package Manager for JavaScript. NPM makes it easy to install and uninstall third party packages. To initialize a Sass project with NPM, open your terminal and CD (change directory) to your project folder.</p>
<pre class="brush: javascript; h-100">npm init
</pre>
<img src="images/cmd.png" alt="">
<p>Once in the correct folder, run the command <code>npm init</code>. You will be prompted to answer several questions about the project, after which NPM will generate a <code>package.json</code> file in your folder.</p>


					<h3 class="title">3.- Install Node-Sass</h3>
					<p>Node-sass is an NPM package that compiles Sass to CSS (which it does very quickly too). To install node-sass run the following command in your terminal:  <code>npm install node-sass</code></p>
<pre class="brush: javascript; h-100">npm install node-sass
</pre>

					<h3 class="title">4.- Write Node-sass Command</h3>
					<p>Everything is ready to write a small script in order to compile Sass. Open the package.json file in a code editor. You will see something like this:</p>
					<p>In the scripts section add an <strong>scss command</strong></p>
					<img src="images/jsn.png" alt="">
<pre class="brush: javascript; h-100">"scripts": {
  "sass": "node-sass --watch scss/main.scss css/style.css"
},
</pre>
					
					<h3 class="title">5.- Run the Script</h3>
					<p>To execute our one-line script, we need to run the following command in the terminal: <code>npm run sass</code></p>
<pre class="brush: javascript; h-100">npm run sass
</pre>
				</div>
			</div>	
		</section>
		<hr/>
		
		<!-- Folder Directories -->
		<section class="app-brief" id="folder_directories">
			<div class="container left-align">
				<div class="section-header">
					<h2 class="dark-text">Folder Directories - </h2>
				</div>
				<div id="dz_tree" class="tree-demo">
					<ul>
						<li data-jstree='{ "opened" : true }'>xhtml
							<ul>
								<li data-jstree='{ "selected" : false }'>css</li>
								<li data-jstree='{ "selected" : false }'>icons
									<ul>
										<li data-jstree='{ "opened" : true }'>avasta</li>
										<li data-jstree='{ "opened" : true }'>feather</li>
										<li data-jstree='{ "opened" : true }'>flaticon</li>
										<li data-jstree='{ "opened" : true }'>font-awesome-old</li>
										<li data-jstree='{ "opened" : true }'>helveticaNeue</li>
										<li data-jstree='{ "opened" : true }'>icomoon</li>
										<li data-jstree='{ "opened" : true }'>line-awesome</li>
										<li data-jstree='{ "opened" : true }'>material-design-iconic-font</li>
										<li data-jstree='{ "opened" : true }'>simple-line-icons</li>
										<li data-jstree='{ "opened" : true }'>themify-icons</li>
									</ul>
								</li>
								<li data-jstree='{ "selected" : false }'>images
									<ul>
										<li data-jstree='{ "opened" : true }'>avatar</li>
										<li data-jstree='{ "opened" : true }'>big</li>
										<li data-jstree='{ "opened" : true }'>browser</li>
										<li data-jstree='{ "opened" : true }'>card</li>
										<li data-jstree='{ "opened" : true }'>contacts</li>
										<li data-jstree='{ "opened" : true }'>pattern</li>
										<li data-jstree='{ "opened" : true }'>product</li>
										<li data-jstree='{ "opened" : true }'>profile</li>
										<li data-jstree='{ "opened" : true }'>svg</li>
										<li data-jstree='{ "opened" : true }'>tab</li>
										<li data-jstree='{ "opened" : true }'>table</li>
									</ul>
								</li>
								<li data-jstree='{ "selected" : false }'>js
									<ul>
										<li data-jstree='{ "opened" : true }'>dashboard</li>
										<li data-jstree='{ "opened" : true }'>plugins-init</li>
									</ul>
								</li>
								<li data-jstree='{ "selected" : false }'>scss
									<ul>
										<li data-jstree='{ "opened" : true }'>abstracts</li>
										<li data-jstree='{ "opened" : true }'>base</li>
										<li data-jstree='{ "selected" : false }'>components
											<ul>
												<li data-jstree='{ "opened" : true }'>app</li>
												<li data-jstree='{ "opened" : true }'>charts</li>
												<li data-jstree='{ "opened" : true }'>forms</li>
												<li data-jstree='{ "opened" : true }'>ico</li>
												<li data-jstree='{ "opened" : true }'>map</li>
												<li data-jstree='{ "opened" : true }'>tables</li>
												<li data-jstree='{ "opened" : true }'>uc</li>
												<li data-jstree='{ "opened" : true }'>ui</li>
												<li data-jstree='{ "opened" : true }'>widget</li>
											</ul>
										</li>
										<li data-jstree='{ "selected" : false }'>layout
											<ul>
												<li data-jstree='{ "opened" : true }'>footer</li>
												<li data-jstree='{ "opened" : true }'>header</li>
												<li data-jstree='{ "opened" : true }'>rtl</li>
												<li data-jstree='{ "opened" : true }'>sidebar</li>
												<li data-jstree='{ "opened" : true }'>theme</li>
												<li data-jstree='{ "opened" : true }'>typography</li>
												<li data-jstree='{ "opened" : true }'>version-dark</li>
												<li data-jstree='{ "opened" : true }'>version-transparent</li>
											</ul>
										</li>
										<li data-jstree='{ "opened" : true }'>pages</li>
									</ul>
								</li>
								<li data-jstree='{ "selected" : false }'>vendor
									<ul>
										<li data-jstree='{ "opened" : true }'>amcharts</li>
										<li data-jstree='{ "opened" : true }'>animate</li>
										<li data-jstree='{ "opened" : true }'>aos</li>
										<li data-jstree='{ "opened" : true }'>apexchart</li>
										<li data-jstree='{ "opened" : true }'>bootstrap</li>
										<li data-jstree='{ "opened" : true }'>bootstrap4-notify</li>
										<li data-jstree='{ "opened" : true }'>bootstrap-daterangepicker</li>
										<li data-jstree='{ "opened" : true }'>bootstrap-material-datetimepicker</li>
										<li data-jstree='{ "opened" : true }'>bootstrap-multiselect</li>
										<li data-jstree='{ "opened" : true }'>bootstrap-select</li>
										<li data-jstree='{ "opened" : true }'>bootstrap-tagsinput</li>
										<li data-jstree='{ "opened" : true }'>bootstrap-touchspin</li>
										<li data-jstree='{ "opened" : true }'>bootstrap-v4-rtl</li>
										<li data-jstree='{ "opened" : true }'>chart.js</li>
										<li data-jstree='{ "opened" : true }'>chartist</li>
										<li data-jstree='{ "opened" : true }'>chartist-plugin-tooltips</li>
										<li data-jstree='{ "opened" : true }'>clockpicker</li>
										<li data-jstree='{ "opened" : true }'>datatables</li>
										<li data-jstree='{ "opened" : true }'>dropzone</li>
										<li data-jstree='{ "opened" : true }'>flot</li>
										<li data-jstree='{ "opened" : true }'>flot-spline</li>
										<li data-jstree='{ "opened" : true }'>fullcalendar</li>
										<li data-jstree='{ "opened" : true }'>global</li>
										<li data-jstree='{ "opened" : true }'>highlightjs</li>
										<li data-jstree='{ "opened" : true }'>jquery</li>
										<li data-jstree='{ "opened" : true }'>jquery-asColor</li>
										<li data-jstree='{ "opened" : true }'>jquery-asColorPicker</li>
										<li data-jstree='{ "opened" : true }'>jquery-asGradient</li>
										<li data-jstree='{ "opened" : true }'>jquery-sparkline</li>
										<li data-jstree='{ "opened" : true }'>jquery-steps</li>
										<li data-jstree='{ "opened" : true }'>jqueryui</li>
										<li data-jstree='{ "opened" : true }'>jquery-validation</li>
										<li data-jstree='{ "opened" : true }'>jqvmap</li>
										<li data-jstree='{ "opened" : true }'>metismenu</li>
										<li data-jstree='{ "opened" : true }'>moment</li>
										<li data-jstree='{ "opened" : true }'>morris</li>
										<li data-jstree='{ "opened" : true }'>nestable2</li>
										<li data-jstree='{ "opened" : true }'>nouislider</li>
										<li data-jstree='{ "opened" : true }'>peity</li>
										<li data-jstree='{ "opened" : true }'>perfect-scrollbar</li>
										<li data-jstree='{ "opened" : true }'>pickadate</li>
										<li data-jstree='{ "opened" : true }'>raphael</li>
										<li data-jstree='{ "opened" : true }'>select2</li>
										<li data-jstree='{ "opened" : true }'>summernote</li>
										<li data-jstree='{ "opened" : true }'>svganimation</li>
										<li data-jstree='{ "opened" : true }'>sweetalert2</li>
										<li data-jstree='{ "opened" : true }'>toastr</li>
										<li data-jstree='{ "opened" : true }'>wnumb</li>
									</ul>
								</li>
								<li data-jstree='{ "type" : "file" }'>index.html</li>
								<li data-jstree='{ "type" : "file" }'>index-2.html</li>
								<li data-jstree='{ "type" : "file" }'>index-3.html</li>
								<li data-jstree='{ "type" : "file" }'>products.html</li>
								<li data-jstree='{ "type" : "file" }'>sales.html</li>
								<li data-jstree='{ "type" : "file" }'>task.html</li>
								<li data-jstree='{ "type" : "file" }'>project.html</li>
								<li data-jstree='{ "type" : "file" }'>.....</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</section>
		<hr/>
		
		<!-- Theme Feature -->
		<section class="app-brief" id="theme-feature">
			<div class="container left-align">
				<div class="section-header">
					<h2 class="dark-text">Theme Features - </h2>
					<h4><strong>js/deznav-init.js</strong></h4>
				</div>
				<div class="row demo-row m-b30">
					<div class="col-lg-5">
				<pre class="brush: javascript; h-100">

dzSettingsOptions = {
	typography: "poppins",
	version: "light",
	layout: "vertical",
	primary: "color_1",
	headerBg: "color_1",
	navheaderBg: "color_2",
	sidebarBg: "color_2",
	sidebarStyle: "full",
	sidebarPosition: "fixed",
	headerPosition: "fixed",
	containerLayout: "full",
};
</pre>
					</div>
					<div class="col-lg-7">
						<img src="images/demo/pic9.jpg" alt="" class="w-100 demo-img">
					</div>
				
				</div>
				<h3>Color Theme - </h3>
				<p>So many color option available</p>
				<ul class="color-list m-b30">
					<li>
						<div class="overlay-text color-1">color_1</div>
					</li>
					<li>
						<div class="overlay-text color-2">color_2</div>
					</li>
					<li>
						<div class="overlay-text color-3">color_3</div>
					</li>
					<li>
						<div class="overlay-text color-4">color_4</div>
					</li>
					<li>
						<div class="overlay-text color-5">color_5</div>
					</li>
					<li>
						<div class="overlay-text  color-6">color_6</div>
					</li>
					<li>
						<div class="overlay-text  color-7">color_7</div>
					</li>
					<li>
						<div class="overlay-text  color-8 text-black border">color_8</div>
					</li>
					<li>
						<div class="overlay-text  color-9">color_9</div>
					</li>
					<li>
						<div class="overlay-text  color-10">color_10</div>
					</li>
					<li>
						<div class="overlay-text  color-11">color_11</div>
					</li>
					<li>
						<div class="overlay-text  color-12">color_12</div>
					</li>
					<li>
						<div class="overlay-text  color-13">color_13</div>
					</li>
					<li>
						<div class="overlay-text  color-14">color_14</div>
					</li>
					<li>
						<div class="overlay-text  color-15">color_15</div>
					</li>
					
				</ul>
				<pre class="h-100 m-b50">
var dezSettingsOptions = {
	typography: "poppins",  		More Options => ["poppins" , "roboto" , "Open Sans" , "Helventivca" ]
	version: "light",       		More Options => ["light" , "dark"]
	layout: "horizontal",   		More Options => ["horizontal" , "vertical"]
	primary: "color_11",			More Options => ["color_1," , "color_2," ..... "color_15"]
	headerBg: "color_1",			More Options => ["color_1," , "color_2," ..... "color_15"]
	navheaderBg: "color_1",			More Options => ["color_1," , "color_2," ..... "color_15"]
	sidebarBg: "color_11",			More Options => ["color_1," , "color_2," ..... "color_15"]
	sidebarStyle: "compact",		More Options => ["full" , "mini" , "compact" , "modern" , "overlay" , "icon-hover"]
	sidebarPosition: "static",		More Options => ["static" , "fixed"]
	headerPosition: "fixed",		More Options => ["static" , "fixed"]
	containerLayout: "full",		More Options => ["full"]
	direction: direction			More Options => ["ltr"]
};
</pre>
				
	</div>	
		</section>
		
		<hr/>
		<section class="app-brief" id="plugins">
			<div class="container left-align">
				<div class="section-header">
					<h2 class="dark-text">Plugins included - </h2>
				</div>
				<ul class="list-files">
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>amcharts</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://www.amcharts.com" target="_blank">https://www.amcharts.com</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>animate</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://animate.style" target="_blank">https://animate.style</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>aos</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://michalsnik.github.io/aos" target="_blank">https://michalsnik.github.io/aos</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>apexchart</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://apexcharts.com" target="_blank">https://apexcharts.com</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>bootstrap</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://getbootstrap.com" target="_blank">https://getbootstrap.com</a></p>
								<p><a href="" target="_blank"></a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>bootstrap4-notify</p>
							</div>
							<div class="col-xs-8">
								<p><a href="http://bootstrap-notify.remabledesigns.com" target="_blank">http://bootstrap-notify.remabledesigns.com</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>bootstrap-daterangepicker</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://www.daterangepicker.com" target="_blank">https://www.daterangepicker.com</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>bootstrap-material-datetimepicker</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://t00rk.github.io/bootstrap-material-datetimepicker" target="_blank">https://t00rk.github.io/bootstrap-material-datetimepicker</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>bootstrap-multiselect</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://github.com/davidstutz/bootstrap-multiselect" target="_blank">https://github.com/davidstutz/bootstrap-multiselect</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>bootstrap-select</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://developer.snapappointments.com/bootstrap-select" target="_blank">https://developer.snapappointments.com/bootstrap-select</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>bootstrap-tagsinput</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples" target="_blank">https://bootstrap-tagsinput.github.io/bootstrap-tagsinput/examples</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>bootstrap-touchspin</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://www.virtuosoft.eu/code/bootstrap-touchspin" target="_blank">https://www.virtuosoft.eu/code/bootstrap-touchspin</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>bootstrap-v4-rtl</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://bootstrap.rtlcss.com" target="_blank">https://bootstrap.rtlcss.com</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>chart.js</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://www.chartjs.org" target="_blank">https://www.chartjs.org</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>chartist</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://gionkunz.github.io/chartist-js" target="_blank">https://gionkunz.github.io/chartist-js</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>chartist-plugin-tooltips</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://github.com/tmmdata/chartist-plugin-tooltip" target="_blank">https://github.com/tmmdata/chartist-plugin-tooltip</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>clockpicker</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://weareoutman.github.io/clockpicker" target="_blank">https://weareoutman.github.io/clockpicker</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>datatables</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://datatables.net" target="_blank">https://datatables.net</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>dropzone</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://www.dropzonejs.com" target="_blank">https://www.dropzonejs.com</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>flot</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://www.flotcharts.org" target="_blank">https://www.flotcharts.org</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>flot-spline</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://github.com/miloszfalinski/jquery.flot.spline" target="_blank">https://github.com/miloszfalinski/jquery.flot.spline</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>fullcalendar</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://fullcalendar.io" target="_blank">https://fullcalendar.io</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>highlightjs</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://highlightjs.org" target="_blank">https://highlightjs.org</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>jquery</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://jquery.com" target="_blank">https://jquery.com</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>jquery-asColor</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://github.com/thecreation/jquery-asColor" target="_blank">https://github.com/thecreation/jquery-asColor</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>jquery-asColorPicker</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://github.com/thecreation/jquery-asColorPicker" target="_blank">https://github.com/thecreation/jquery-asColorPicker</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>jquery-asGradient</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://www.npmtrends.com/jquery-asGradient" target="_blank">https://www.npmtrends.com/jquery-asGradient</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>jquery-sparkline</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://plugins.jquery.com/sparkline" target="_blank">https://plugins.jquery.com/sparkline</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>jquery-steps</p>
							</div>
							<div class="col-xs-8">
								<p><a href="http://www.jquery-steps.com" target="_blank">http://www.jquery-steps.com</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>jqueryui</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://jqueryui.com" target="_blank">https://jqueryui.com</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>jquery-validation</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://jqueryvalidation.org" target="_blank">https://jqueryvalidation.org</a></p>									
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>jqvmap</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://github.com/10bestdesign/jqvmap" target="_blank">https://github.com/10bestdesign/jqvmap</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>metismenu</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://github.com/onokumus/metismenu" target="_blank">https://github.com/onokumus/metismenu</a></p>	
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>moment</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://momentjs.com" target="_blank">https://momentjs.com</a></p>	
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>morris</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://morrisjs.github.io/morris.js" target="_blank">https://morrisjs.github.io/morris.js</a></p>	
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>nestable2</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://ramonsmit.github.io/Nestable2" target="_blank">https://ramonsmit.github.io/Nestable2</a></p>	
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>nouislider</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://refreshless.com/nouislider" target="_blank">https://refreshless.com/nouislider</a></p>	
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>peity</p>
							</div>
							<div class="col-xs-8">
								<p><a href="http://benpickles.github.io/peity" target="_blank">http://benpickles.github.io/peity</a></p>	
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>perfect-scrollbar</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://plugins.jquery.com/perfect-scrollbar" target="_blank">https://plugins.jquery.com/perfect-scrollbar</a></p>	
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>pickadate</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://amsul.ca/pickadate.js" target="_blank">https://amsul.ca/pickadate.js</a></p>	
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>raphael</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://github.com/DmitryBaranovskiy/raphael" target="_blank">https://github.com/DmitryBaranovskiy/raphael</a></p>	
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>select2</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://select2.org" target="_blank">https://select2.org</a></p>	
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>summernote</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://summernote.org" target="_blank">https://summernote.org</a></p>	
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>svganimation</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://github.com/maxwellito/vivus" target="_blank">https://github.com/maxwellito/vivus</a></p>	
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>sweetalert2</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://sweetalert2.github.io" target="_blank">https://sweetalert2.github.io</a></p>	
							</div>
						</div>
						
					</li>
					<li>	
						<div class="row">
							<div class="col-xs-4">
								<p>toastr</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://github.com/CodeSeven/toastr" target="_blank">https://github.com/CodeSeven/toastr</a></p>	
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>wnumb</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://refreshless.com/wnumb" target="_blank">https://refreshless.com/wnumb</a></p>
							</div>
						</div>
					</li>
					<li>
						<div class="row">
							<div class="col-xs-4">
								<p>Lightgallery</p>
							</div>
							<div class="col-xs-8">
								<p><a href="https://sachinchoolur.github.io/lightGallery/" target="_blank">https://sachinchoolur.github.io/lightGallery/</a></p>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</section>
		<hr/>
			
		<section class="app-brief" id="html_structure">
			<div class="container left-align">
				<h3>HTML Structure</h3>
				<img src="images/screenshot/1.png" alt="1"/>
				<div class="separator"></div>
				<h3>Header</h3>
				<img src="images/screenshot/2.png" alt="2"/>
				<div class="separator"></div>
				<div class="separator"></div>
				<h3>Footer Section</h3>
				<img src="images/screenshot/4.png" alt="4"/>
				<div class="separator"></div>
				<h3>Footer Essentials</h3>
				<img src="images/screenshot/5.png" alt="5"/>
			</div>
		</section>
		<hr/>
			
		<!-- Our Products -->
		<section class="app-brief" id="our_product">
			<div class="container left-align">
				<div class="section-header">
					<h2 class="dark-text">Our Products - </h2>
				</div>
				<div class="row other-theme">
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/0zjyE">
								<img src="images/product/wp-beglide.png"/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/0zjyE">
										BeGlide: Corporate Business Consultant Agency WordPress Theme 
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/NE0QP">
								<img src="images/product/wp-bheem.png"/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/NE0QP">
										Bheem : Construction WordPress Theme RTL Ready 
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/WEdAZ">
								<img src="images/product/wp-beautyzone.png"/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/WEdAZ">
										BeautyZone: Beauty Spa Salon WordPress Theme
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/6MAKK">
								<img src="images/product/wp-bucklin.png"/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href=" ">
										Bucklin - Creative Personal Blog WordPress Theme 
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/oJLNY">
								<img src="images/product/archia.png"/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/oJLNY">
										Archia - Architecture and Interior Design RTL Ready Template
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/XEnGb">
								<img src="images/product/agency.png"/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/XEnGb">
										Agency | Creative Multipurpose Bootstrap 4 HTML Template
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/3zZ9y">
								<img src="images/product/constructzilla .png"/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/3zZ9y">
										ConstructZilla : Construction, Renovation & Building HTML Template With RTL Ready
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/ZEKLg">
								<img src="images/product/cargozone.png"/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/ZEKLg">
										CargoZone - Transport, Cargo, Logistics & Business Multipurpose HTML Template
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/JZVO7">
								<img src="images/product/yogazone.png"/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/JZVO7">
										YogaZone: Yoga, Payment & Meditation Mobile Responsive Bootstrap Html Template
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/0zjxY">
								<img src="images/product/gardanzone.png"/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/0zjxY">
										GardenZone | Agriculture, Gardening & Landscaping Responsive HTML Template
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/VdYZJ">
								<img src="images/product/construct.png"/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/VdYZJ">
										Construct : Construction, Building & Maintenance Business Template
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/REnO2">
								<img src="images/product/butterfly.png"/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/REnO2">
										ButterFly : Spa, Beauty Salon & Massage Template
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/bQNDm">
								<img src="images/product/curv.png"/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/bQNDm">
										CURV: One Page Multipurpose Parallax
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/zObPW">
								<img src="images/product/beautyzone.png"/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/zObPW">
										BeautyZone: Beauty Spa Salon HTML Template
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/3zZmk">
								<img src="images/product/sportszone.png"/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/3zZmk">
										SportsZone: Sports Club, New & Game Magazine Mobile Responsive Bootstrap HTML Template
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/3zZmk">
								<img src="images/product/medico.png"/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/3zZmk">
										MediCo.- Hospital and Doctor Clinic HTML Template
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/g56Wg">
								<img src="images/product/jobboard.png"/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/g56Wg">
										Job Board: Job Portal | Job WebSite HTML Wireframe
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/1d1Nm">
								<img src="images/product/industry.png"/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/1d1Nm">
										Industry - Factory & Industrial HTML Template
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/qoKKy">
								<img src="images/product/lemars.png"/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/qoKKy">
										Le Mars - Minimal Personal Blog HTML Template
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/A53RN">
								<img src="images/product/bizmap.png"/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/A53RN">
										BizMap - Business Directory Listing HTML Template
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/EYb39">
								<img src="images/product/umang_academy.png"/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/EYb39">
										Umang Academy : Kindergarden, Kids Play School Template
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/EAeOQ">
								<img src="images/product/kelsey.png"/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/EAeOQ">
										Kelsey - Creative Personal Blog HTML Template
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/xoqvR">
								<img src="images/product/bucklin.png"/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/xoqvR">
										Bucklin - Creative Personal Blog HTML Template
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 m-b30">
						<div class="product-port-bx">
							<a target="_blank" href="https://1.envato.market/WvZqM">
								<img src="images/product/smartclass.png"/>
							</a>
							<div class="product-info">
								<h4 class="title">
									<a target="_blank" href="https://1.envato.market/WvZqM">
										SmartClass | Education Agency Choching & Tuition HTML Template
									</a>
								</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Need Help -->
		<section class="app-brief" id="custom_work" style="background-image: url(images/bg1.png); background-position: left center;">
			<div class="container left-align">
				<div class="col-md-12 text-center custom-info">
					<h2 class="m-t0">Do You Need Help To Customization</h2>
					<h3 class="text-primary">After Purchase A Template...</h3>
					<h4>You Will Start Customizing According Your Requirement<br/> <span class="text-primary">BUT</span> What If You Don't Know</h4>
					<h3 class="text-black">SOLUTION IS <span class="text-primary"><u>HIRE DexignZone</u></span></h3>
					<div class="hire">
						<h4><span class="text-black">Hire Same Team For </span> <span class="text-primary">Quality Customization</span></h4>
						<ul>
							<li>We Will Customize Template According To Your Requirement</li>
							<li>We Will Upload On Server And Make Sure Your Website is Live</li>
						</ul>
						<div class="gmail-box">
							<a href="skype:rahulxarma?chat" class="gmail"><i class="fa fa-skype"></i>rahulxarma</a>
							<a target="_blank" href="mailto:dexignzones@gmail.com" class="gmail"><i class="fa fa-envelope"></i>dexignzones@gmail.com</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<!-- Change Log -->
		<section class="app-brief change-log" id="version_history">
			<div class="container left-align">
				<div class="section-header">
					<h2 class="dark-text">Version History - <small class="topbutton"><a href="#tableofcontent">#back to top</a></small></h2>
				</div>
				<h3> 13 May 2023 </h3>
				<ul>
					<li>New - Created & Upload Yash Admin </li>
				</ul>
			</div>
		</section>
			
		<!-- Footer -->
		<footer class="app-brief grey-bg">
			<div class="container">
				<p class="copyright">
					© 2023 DexignZone , All Rights Reserved
				</p>
			</div>
		</footer>
	
	</div>
</div>
	
<!-- JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.localScroll.min.js"></script>
<script src="js/load.js"></script>
<script src="js/custom.js"></script>
<script src="js/scrollbar.min.js"></script>
<script src="plugins/jstree/dist/jstree.min.js"></script>
<script>
// prettyPhoto
jQuery(document).ready(function(){
	jQuery('.dzClickload').click(function(){
		jQuery('.dzClickload').removeClass('active');
		jQuery(this).addClass('active');
	});
	
	jQuery(".content-scroll").mCustomScrollbar({
		setWidth:false,
		setHeight:false,
		axis:"y"
	});	
		
	$(".full-height").css("height", $(window).height());
	
	$("#dz_tree").jstree({
		"core": {
			"themes": {
				"responsive": false
			}
		},
		"types": {
			"default": {
				"icon": "fa fa-folder"
			},
			"file": {
				"icon": "fa fa-file-text"
			}
		},
		"plugins": ["types"]
	});
});
</script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $(".navbar-nav a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      });
    } // End if
  });
});
</script>
</body>
</html>
/*! http://responsiveslides.com v1.53 by @viljamis */

.rslides {
  position: relative;
  list-style: none;
  overflow: hidden;
  padding: 0;
  margin: 0;
  }

.rslides li {
  -webkit-backface-visibility: hidden;
  position: absolute;
  display: none;
  width: 100%;
  left: 0;
  top: 0;
  }

.rslides li:first-child {
  position: relative;
  display: block;
  float: left;
  }
.rslides img {
 	display: block;
	height: auto;
	float: left;
	border: 0;
	width: 100%;
  }/* reset */
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
ol,ul{list-style:none;margin:0px;padding:0px;}
blockquote,q{quotes:none;}
blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
table{border-collapse:collapse;border-spacing:0;}
/* start editing from here */
a{text-decoration:none;}
.txt-rt{text-align:right;}/* text align right */
.txt-lt{text-align:left;}/* text align left */
.txt-center{text-align:center;}/* text align center */
.float-rt{float:right;}/* float right */
.float-lt{float:left;}/* float left */
.clear{clear:both;}/* clear float */
.pos-relative{position:relative;}/* Position Relative */
.pos-absolute{position:absolute;}/* Position Absolute */
.vertical-base{	vertical-align:baseline;}/* vertical align baseline */
.vertical-top{	vertical-align:top;}/* vertical align top */
.underline{	padding-bottom:5px;	border-bottom: 1px solid #eee; margin:0 0 20px 0;}/* Add 5px bottom padding and a underline */
nav.vertical ul li{	display:block;}/* vertical menu */
nav.horizontal ul li{	display: inline-block;}/* horizontal menu */
img{max-width:100%;}
/*end reset*/
body{
	background:#F8FBFB;
}
.wrap{
	width:70%;
	margin:0 auto;
}
.header{
	background:url(../images/header-bg.png);
}
.logo{
	float:left;
	margin-top: 14px;
}
.top-nav{
	float:right;
}
.top-nav ul li{
	display:inline-block;
	float: left;
	border-left: 1px solid rgb(31, 132, 224);
}
.top-nav ul li:first-child{
	border-left:none;
}
.top-nav ul li a{
	font-family: 'Ropa Sans', sans-serif;
	background:#3391E7;
	color: #fff;
	text-transform: uppercase;
	padding: 30px;
	display: block;
}
.top-nav ul li a:hover{
	
}
.top-nav li.active> a, .top-nav li> a:hover {
	background: rgb(50, 133, 209);
	border-left-color:rgb(50, 133, 209);
}
/*-----content-grids-----*/
.content-grids{
	background:#3391E7;
	padding: 10px 0px;
}
/*  GRID OF THREE   ============================================================================= */
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}
.group:before,
.group:after {
    content:"";
    display:table;
}
.group:after {
    clear:both;
}
.group {
    zoom:1;
}
.listview_1_of_3{
	display: block;
	float:left;
	margin: 0% 0 0% 1.6%;
	background: #F1F6F9;
}
.listimg{
	display: block;
	float:left;
}
.text{
	display: block;
	float:left;
	margin: 0% 0 0% 3.6%;
}
.listview_1_of_3:first-child { margin-left: 0; } /* all browsers except IE6 and lower */

.images_1_of_3 {
	width: 29.2%;
	padding:1.5%; 
	border-radius: 1.1em;
}
.listimg_1_of_2{
	width: 32.2%;
}
.list_1_of_2 {
	width: 64.2%;
	margin-top: 5px;
}
.images_1_of_3  img {
	max-width:100%;
	display:block;
}
.list_1_of_2  h3{
	color:#3391E7;
	margin-bottom:0.2em;
	margin-top:0;
	font-size: 2em;
	font-family: 'Ropa Sans', sans-serif;
	font-weight : normal;
	letter-spacing: -1px;
}
.list_1_of_2  p{
	font-size:0.8125em;	
	color: #3391E7;
	line-height: 1.5em;
	font-family: Arial, "Helvetica Neue", "Helvetica", Tahoma, Verdana, sans-serif;
	padding:0; 	
}
.list_1_of_2 .button{
	line-height:1.9em;
	margin-top:0.2em;
}
.list_1_of_2 .button a{
		font-family: 'Ropa Sans', sans-serif;
		color: rgb(139, 139, 139);
		font-size: 1em;
}
.list_1_of_2 .button a:hover{
        text-decoration:none; 
        color:#3391E7;
}

/***** Media Quries *****/
@media only screen and (max-width: 1024px) {
	.wrap{
		width:90%;
	}	
}

/*  GO FULL WIDTH AT LESS THAN 640 PIXELS */
@media only screen and (max-width: 640px) {
	
	.wrap{
		width:95%;
	}
	.listview_1_of_3{ 
		margin: 2% 0 2% 0%;
	}
	.text{
		margin:0;
	}	
	.images_1_of_3 {
		width:94%;
		padding:3%;
	}
	.listimg_1_of_2{
	     width:100%;		
   }
	.list_1_of_2 {
		width: 100%;
	}
}

/*  GO FULL WIDTH AT LESS THAN 480 PIXELS */
@media only screen and (max-width: 480px) {
	
	.wrap{
		width:95%;
	}
	.listview_1_of_3{ 
		margin: 2% 0 2% 0%;
	}
	.text{
		margin:0;
	}	
	.images_1_of_3 {
		width:92%;
		padding:4%;
	}
	.listimg_1_of_2{
	     width:100%;		
   }
	.list_1_of_2 {
		width: 100%;
	}
}
/*  GRID OF THREE   ============================================================================= */
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}
.group:before,
.group:after {
    content:"";
    display:table;
}
.group:after {
    clear:both;
}
.group {
    zoom:1;
}
.col_1_of_3{
	display: block;
	float:left;
	margin: 1% 0 1% 1.6%;
	background: #fff;
	border: 1px solid #edf3f3;
}
.col_1_of_3:first-child { margin-left: 0; }

.span_1_of_3 {
	width: 29%;
	padding: 1.5% 3% 0 0;
}
.span_1_of_3  h3{
	color:rgb(139, 139, 139);
	margin-bottom: 0.2em;
	margin-top: 0;
	font-size: 2em;
	font-family: 'Ropa Sans', sans-serif;
	font-weight: normal;
	letter-spacing: -1px;
}
.span_1_of_3  p  {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 0.8em;
	color: rgb(155, 155, 155);
	line-height: 1.8em;
}

/***** Media Quries *****/
@media only screen and (max-width: 1024px) {
	.wrap{
		width:95%;
	}	
}
/*  GO FULL WIDTH AT LESS THAN 640 PIXELS */
@media only screen and (max-width: 640px) and (min-width: 480px) {
	.wrap{
		width:95%;
	}
	.col_1_of_3{ 
		margin: 1% 0 1% 0%;
	}
	.span_1_of_3 {
		width:94%;
		padding:3%;  
	}
}

/*  GO FULL WIDTH AT LESS THAN 480 PIXELS */
@media only screen and (max-width: 480px) {
     
     .wrap{
		width:95%;
	}		
	.col_1_of_3{ 
		margin: 1% 0 1% 0%;
	}
	.span_1_of_3 {
		width:92%;
		padding:4%;
	}
}
.span_1_of_3 span{
	font-family: Arial, Helvetica, sans-serif;
	font-size: 0.8em;
	color: #3391E7;
	line-height: 1.8em;
}
.frist a{
	font-size: 0.8em;
	font-family: 'Ropa Sans', sans-serif;
	background: #3285d1; /* Old browsers */
	background: -moz-linear-gradient(top,  #3285d1 0%, #3285d1 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#3285d1), color-stop(100%,#3285d1)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #3285d1 0%,#3285d1 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #3285d1 0%,#3285d1 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #3285d1 0%,#3285d1 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #3285d1 0%,#3285d1 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3285d1', endColorstr='#3285d1',GradientType=0 ); /* IE6-9 */
	border: #fff 1px solid;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
	-webkit-box-shadow: 0px 0px 3px rgb(207, 206, 206);
	-moz-box-shadow: 0px 0px 3px rgb(207, 206, 206);
	box-shadow: 0px 0px 3px rgb(207, 206, 206);
	text-transform: uppercase;
	color: #fff;
	padding: 13px 17px 13px 17px;
	transition: 0.5s ease;
	-o-transition: 0.5s ease;
	-webkit-transition: 0.5s ease;
	float: left;
	margin-top: 10px;
}
.frist a:hover{
	color:#000;
}
.second ul li a{
	color: #3391E7;
	margin-bottom: 0.2em;
	margin-top: 0;
	font-size:1em;
	font-family: 'Ropa Sans', sans-serif;
	font-weight: normal;
}
.second ul li a img{
	padding-right: 4px;
	vertical-align: baseline;
}
.second ul li{
	line-height: 2.2em;
	border-bottom: 1px dotted rgb(185, 185, 185);
}
.second ul li a:hover{
	color:rgb(139, 139, 139);
}
/*----footer-----*/
.footer{
	background:#e0e7eb;
	padding: 15px 4px;
}
.footer-left{
	float:left;
}
.footer-left ul li{
	display:inline-block;
}
.footer-left ul li a{
	font-family: 'Ropa Sans', sans-serif;
	color:rgb(139, 139, 139);
	text-transform: uppercase;
	display: block;
	margin-right:10px;
}
.footer-right{
	float:right;
}
.footer-right p{
	font-family: 'Ropa Sans', sans-serif;
	color:rgb(139, 139, 139);
	text-transform: uppercase;
}
.footer-right a{
	text-transform: uppercase;
	color:rgb(139, 139, 139);
	font-family: 'Ropa Sans', sans-serif;
}
.footer-right a:hover,.footer-left ul li a:hover{
	color:#3391E7;
}
/*---about---*/
.about h4,.services h4{
	color: rgb(139, 139, 139);
	margin-top: 0;
	font-size: 2em;
	font-family: 'Ropa Sans', sans-serif;
	font-weight: normal;
	letter-spacing: -1px;
	margin-top: 12px;
}
/*--servivces---*/
/*  GRID OF FIVE   ============================================================================= */
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}
.group:before,
.group:after {
    content:"";
    display:table;
}
.group:after {
    clear:both;
}
.group {
    zoom:1;
}
.col_1_of_5{
	display: block;
	float:left;
	margin: 1% 0 1% 1.6%;
	background: #fff;
	border: 1px solid #edf3f3;
}
.col_1_of_5:first-child { margin-left: 0; }
.span_1_of_5 {
  	width: 15.72%;
  	padding: 1.4%;
  	text-align: center;
}
.span_1_of_5  h3{
	color: rgb(139, 139, 139);
	margin-bottom: 0.2em;
	margin-top: 0;
	font-size: 1.2em;
	font-family: 'Ropa Sans', sans-serif;
	font-weight: normal;
	letter-spacing: -1px;
	text-align:left;
}
.span_1_of_5   p {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 0.8em;
	color: rgb(155, 155, 155);
	line-height: 1.8em;
	text-align:left;
}
.span_1_of_5 img{
	text-align:center;
}
/***** Media Quries *****/
@media only screen and (max-width: 1024px) {
	.wrap{
		width:95%;
	}	
}
/*  GO FULL WIDTH AT LESS THAN 640 PIXELS */
 @media only screen and (max-width: 640px) and (min-width: 480px) {
	.wrap{
		width:95%;
	}
	.col_1_of_5{ 
		margin: 1% 0 1% 0%;
	}
	.span_1_of_5 {
		width:94%;
		padding:3%;  
	}
}

/*  GO FULL WIDTH AT LESS THAN 480 PIXELS */
 @media only screen and (max-width: 480px) {
	.wrap{
		width:95%;
	}
	.col_1_of_5{ 
		margin: 1% 0 1% 0%;
	}
	.span_1_of_5 {
		width:92%;
		padding:4%;
	}
}
/*---blog---*/
/*----blog----*/
.blog-grid-header h3,.blog-grid-header ul li a{
	font-family: 'Ropa Sans', sans-serif;
	color: #3391E7;
	display: inline-block;
	font-size:1em;
	padding: 7px 0px 0px 0px;
}
.blog-grid-header ul li{
	display:inline-block;
	margin-right: 5px;
}
.blog-grid-header ul li a img{
	vertical-align:middle;
}
.blog-grid-header ul li img{
	padding-right:5px;
}
.blog-grid-header ul li a{
	color:rgb(155, 155, 155);
}
.blog-grid-header ul li a:hover{
	color:#3391E7;
}
.blog-grid h4{
	color: rgb(139, 139, 139);
	margin-top: 0;
	font-size: 2em;
	font-family: 'Ropa Sans', sans-serif;
	font-weight: normal;
	letter-spacing: -1px;
	margin-top: 12px;
}
/*  GRID OF Content with Image   ============================================================================= */

.image {
	clear: both;
	padding: 0px;
	margin: 0px;
	padding: 2% 0;
	border-bottom: 1px solid rgb(238, 238, 238);
}
.group:before,
.group:after {
    content:"";
    display:table;
}
.group:after {
    clear:both;
}
.group {
    zoom:1;
}
.grid {
	display: block;
	float:left;
	margin: 0% 0 0% 2.2%;
}
.grid:first-child { margin-left: 0; }

.images_3_of_1 {
	width:30.2%;
}
.detalis-image-details {
	float: right;
	width: 80%;
}
.span_2_of_3{
	width: 67.6%;
	padding: 0;
}
.images_3_of_1  img {
	max-width:100%;
	display:block;
}
.span_2_of_3  h3{
	color:#575757;
	margin-bottom:0.3em;
	font-size:1.5em;
	font-family: 'Open Sans', sans-serif;
	font-weight : normal;
	margin-top: 0px;
	letter-spacing: -1px;
}
.span_2_of_3  p  {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 0.8em;
	color: rgb(155, 155, 155);
	line-height: 1.8em;
	margin-bottom: 10px;	
}
.span_2_of_3 .button{
	margin-top:.3em;
	line-height:1.9em;
}
.span_2_of_3 .button a{
		font-size: 0.8em;
		font-family: 'Ropa Sans', sans-serif;
		background: #3285d1;
		background: -moz-linear-gradient(top, #3285d1 0%, #3285d1 100%);
		background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#3285d1), color-stop(100%,#3285d1));
		background: -webkit-linear-gradient(top, #3285d1 0%,#3285d1 100%);
		background: -o-linear-gradient(top, #3285d1 0%,#3285d1 100%);
		background: -ms-linear-gradient(top, #3285d1 0%,#3285d1 100%);
		background: linear-gradient(to bottom, #3285d1 0%,#3285d1 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3285d1', endColorstr='#3285d1',GradientType=0 );
		border: #fff 1px solid;
		-webkit-border-radius: 6px;
		-moz-border-radius: 6px;
		border-radius: 6px;
		-webkit-box-shadow: 0px 0px 3px rgb(207, 206, 206);
		-moz-box-shadow: 0px 0px 3px rgb(207, 206, 206);
		box-shadow: 0px 0px 3px rgb(207, 206, 206);
		text-transform: uppercase;
		color: #fff;
		padding: 3px 15px;
		transition: 0.5s ease;
		-o-transition: 0.5s ease;
		-webkit-transition: 0.5s ease;
		float: left;
		margin-top:8px;
}
.span_2_of_3 .button a:hover{
	    color:#000;
}

/***** Media Quries *****/
@media only screen and (max-width: 1024px) {
	.wrap{
		width:90%;
	}	
}

/*  GO FULL WIDTH AT LESS THAN 640 PIXELS */
@media only screen and (max-width: 640px){
	.wrap{
		width:95%;
	}
	.image{
		padding:3%;
	}
	.grid {
		margin:0;
	}	
	.images_3_of_1 {
		width:100%;	
		padding:2% 0 2% 0;	
	}
	.span_2_of_3 {
		width:100%;
	}
}

/*  GO FULL WIDTH AT LESS THAN 480 PIXELS */
@media only screen and (max-width: 480px) {
	
	.wrap{
		width:95%;
	}
	.image{
		padding:4%;
	}
	.grid {
		margin:0;
	}	
	.images_3_of_1 {
		width:100%;
		padding:2% 0 2% 0;		
	}
	.span_2_of_3 {
		width:100%;
	}
}
/*----pagnation----*/
.pagnation{
	float:right;
	margin-top:10px;
}
.pagnation ul li{
	display:inline-block;
}
.pagnation ul li a{
	font-size: 0.8em;
	font-family: 'Ropa Sans', sans-serif;
	background: #3285d1;
	background: -moz-linear-gradient(top, #3285d1 0%, #3285d1 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#3285d1), color-stop(100%,#3285d1));
	background: -webkit-linear-gradient(top, #3285d1 0%,#3285d1 100%);
	background: -o-linear-gradient(top, #3285d1 0%,#3285d1 100%);
	background: -ms-linear-gradient(top, #3285d1 0%,#3285d1 100%);
	background: linear-gradient(to bottom, #3285d1 0%,#3285d1 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3285d1', endColorstr='#3285d1',GradientType=0 );
	border: #fff 1px solid;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
	-webkit-box-shadow: 0px 0px 3px rgb(207, 206, 206);
	-moz-box-shadow: 0px 0px 3px rgb(207, 206, 206);
	box-shadow: 0px 0px 3px rgb(207, 206, 206);
	text-transform: uppercase;
	color: #fff;
	padding:10px 15px;
	transition: 0.5s ease;
	-o-transition: 0.5s ease;
	-webkit-transition: 0.5s ease;
}
.pagnation ul li a:hover{
	color:#000;
}
/*---contact----*/
/*---contact----*/
/*  Contact Form  ============================================================================= */
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}
.group:before,
.group:after {
    content:"";
    display:table;
}
.group:after {
    clear:both;
}
.group {
    zoom:1;
}
.col{
	display: block;
	float:left;
}
.col:first-child{
	margin-left:0;
}	
.span_2_of_3 {
	width: 67.1%;
	padding: 0 0 1.5% 0;
}

.span_2_of_3  h2,
.span_1_of_3  h2 {
	color: rgb(139, 139, 139);
	margin-top: 0;
	font-size: 2em;
	font-family: 'Ropa Sans', sans-serif;
	font-weight: normal;
	letter-spacing: -1px;
	margin-top: 12px;
}
.contact-form{
	position:relative;
	padding-bottom:30px;
}
.contact-form div{
	padding:5px 0;
}
.contact-form span{
	display:block;
	font-size:1em;
	color: rgb(139, 139, 139);
	padding-bottom:5px;
	font-family: 'Ropa Sans', sans-serif;
}
.contact-form input[type="text"],input[type="email"],.contact-form textarea{
		    padding:8px;
			display:block;
			width:98%;
			background:#fcfcfc;
			border: none;
			outline:none;
			color:rgb(139, 139, 139);
			font-size:0.8125em;
			font-family:Arial, Helvetica, sans-serif;
			box-shadow: inset 0px 0px 3px rgb(199, 199, 199);
			-webkit-box-shadow: inset 0px 0px 3px rgb(199, 199, 199);
			-moz-box-shadow: inset 0px 0px 3px rgb(199, 199, 199);
			-o-box-shadow:inset 0px 0px 3px rgb(199, 199, 199);
			-webkit-appearance:none;
}
.contact-form textarea{
		resize:none;
		height:120px;		
}
.contact-form input[type="submit"]{
	font-size: 1em;
	font-family: 'Ropa Sans', sans-serif;
	background: #3285d1;
	background: -moz-linear-gradient(top, #3285d1 0%, #3285d1 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#3285d1), color-stop(100%,#3285d1));
	background: -webkit-linear-gradient(top, #3285d1 0%,#3285d1 100%);
	background: -o-linear-gradient(top, #3285d1 0%,#3285d1 100%);
	background: -ms-linear-gradient(top, #3285d1 0%,#3285d1 100%);
	background: linear-gradient(to bottom, #3285d1 0%,#3285d1 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3285d1', endColorstr='#3285d1',GradientType=0 );
	border: #fff 1px solid;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
	-webkit-box-shadow: 0px 0px 3px rgb(207, 206, 206);
	-moz-box-shadow: 0px 0px 3px rgb(207, 206, 206);
	box-shadow: 0px 0px 3px rgb(207, 206, 206);
	text-transform: uppercase;
	color: #fff;
	padding: 15px 20px;
	transition: 0.5s ease;
	-o-transition: 0.5s ease;
	-webkit-transition: 0.5s ease;
	float: left;
	margin-top: 8px;
	cursor:pointer;
}
.contact-form input[type="submit"]:hover{
	color: #000;
}
.contact-form input[type="submit"]:active{
	background-color:#000;  
}

.company_address p{
	font-family: Arial, Helvetica, sans-serif;
	padding: 0.2em 0;
	font-size: 0.8125em;
	color: rgb(155, 155, 155);
	line-height: 1.5em;
}
.company_address p span{
	text-decoration:underline;
	color:#333;
	cursor:pointer;
	font-family: 'Open Sans', sans-serif;
	font-size:1em;
}
.map{
	border:1px solid #C7C7C7;
	margin-bottom:15px;
}

/***** Media Quries *****/
@media only screen and (max-width: 1024px) {
	.wrap{
		width:95%;
	}	
}
/*  GO FULL WIDTH AT LESS THAN 800 PIXELS */

@media only screen and (max-width: 800px) {
	.wrap{
		width:95%;
	}
	.span_2_of_3 {
		width:94%;
		padding:3%; 
	}
	.col{ 
		margin: 1% 0 1% 0%;
	}
	.span_1_of_3 {
		width:94%;
		padding:3%; 
	}
}

/*  GO FULL WIDTH AT LESS THAN 640 PIXELS */

@media only screen and (max-width: 640px) and (min-width: 480px) {
	.wrap{
		width:95%;
	}
	.span_2_of_3 {
		width:94%;
		padding:3%; 
	}
	.col{ 
		margin: 1% 0 1% 0%;
	}
	.span_1_of_3 {
		width:94%;
		padding:3%; 
	}
   
   .contact-form input[type="text"],.contact-form textarea{
		width:97%;
	}
}
/*  GO FULL WIDTH AT LESS THAN 480 PIXELS */

@media only screen and (max-width: 480px) {
	.wrap{
		width:95%;
	}
	.span_2_of_3 {
		width:90%;
		padding:5%; 
	}
	.col { 
		margin: 1% 0 1% 0%;
	}
	.span_1_of_3 {
		width:90%;
		padding:5%; 
	}
	.contact-form input[type="text"],.contact-form textarea{
		width:92%;
	}
}
/*---contact----*/
.contact{
	min-height: 682px;
}
.frist,.second{
	padding:1.5%;
}
.frist h3{
	padding-bottom:6px;
}
/*----erroe-page----*/
.erroe-page{
	text-align:center;
	height: 500px;
	padding-top: 182px;
}
.erroe-page h3,.erroe-page h4{
	font-family: 'Ropa Sans', sans-serif;
	color: rgb(139, 139, 139);
	text-transform: uppercase;
	display: block;
	font-size:10em;
}
.erroe-page h4{
	font-size:2em;
}
/*----responsive-design----*/
@media screen and (max-width:1366px) {
	.wrap{
		width:90%;
	}
}
@media screen and (max-width:1024px) {
	.wrap{
		width:90%;
	}
	.span_1_of_5 {
		width: 15.7%;
	}
	.list_1_of_2 h3,.span_1_of_3 h3  {
		font-size: 1.5em;
	}
	.erroe-page {
		height: 402px;
		padding-top: 157px;
	}
}
@media screen and (max-width:800px){
	.wrap{
		width:760px;
	}
	.frist img{
		width:100%;
	}
	.span_1_of_5 {
		width: 15.6%;
	}
	.images_3_of_1 ,.span_2_of_3{
		width: 100%;
		float:none;
	}
	.images_3_of_1 img{
		width:100%;
	}
	.span_2_of_3{
		padding:0px;
		margin:0px;
	}
	.span_2_of_3 p{
		margin-top:8px;
	}
	.contact-form {
		padding-bottom: 83px;
	}
	.contact_info,.company_address{
		display: none;
	}
	.erroe-page {
		height: 344px;
	}
	.about h4, .services h4 {
		font-size:1.5em;
	}
}
@media screen and (max-width:640px){
	.wrap{
		width:90%;
	}
	.images_1_of_3 {
		width: 26%;
		padding: 2%;
		text-align:center;
	}
	.images_1_of_3:nth-child(2){
		margin: 1.6% 4%;
	}
	.top-nav ul li a {
		padding: 26px 11px;
	}
	.span_1_of_5 {
		width: 42.899%;
	}
	.span_1_of_5:last-child{
		display:none;
	}
	.span_1_of_5:first-child,.span_1_of_5:nth-child(3){
		margin-right:1.5%;
	}
}
@media screen and (max-width:480px){
	.wrap{
		width:90%;
	}
	.list_1_of_2 h3, .span_1_of_3 h3 {
		font-size: 1em;
	}
	.top-nav ul li a {
		padding: 26px 18.17px;
	}
	.logo{
		float:none;
		padding: 10px 0px;
		margin:0px;
	}
	.top-nav{
		float:none;
	}
	.footer-left,.footer-right{
		float:none;
		text-align:center;
		line-height:1.8em;
	}
	.span_1_of_5 {
		width: 40.77%;
	}
	.contact {
		min-height: 578px;
	}
	.erroe-page {
		height: 329px;
		padding-top: 50px;
	}
	
	.span_1_of_3 {
		width: 100%;
	}
}<?php
session_start();
error_reporting(0);
include('include/config.php');
include('include/checklogin.php');
check_login();

if(isset($_POST['submit']))
{	$docspecialization=$_POST['Doctorspecialization'];
$docname=$_POST['docname'];
$docaddress=$_POST['clinicaddress'];
$docfees=$_POST['docfees'];
$doccontactno=$_POST['doccontact'];
$docemail=$_POST['docemail'];
$password=md5($_POST['npass']);
$sql=mysqli_query($con,"insert into doctors(specilization,doctorName,address,docFees,contactno,docEmail,password) values('$docspecialization','$docname','$docaddress','$docfees','$doccontactno','$docemail','$password')");
if($sql)
{
echo "<script>alert('Doctor info added Successfully');</script>";
echo "<script>window.location.href ='manage-doctors.php'</script>";

}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Add Doctor</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />
<script type="text/javascript">
function valid()
{
 if(document.adddoc.npass.value!= document.adddoc.cfpass.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.adddoc.cfpass.focus();
return false;
}
return true;
}
</script>


<script>
function checkemailAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#docemail").val(),
type: "POST",
success:function(data){
$("#email-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				
						<?php include('include/header.php');?>
						
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Admin | Add Doctor</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Add Doctor</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
									
									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Add Doctor</h5>
												</div>
												<div class="panel-body">
									
													<form role="form" name="adddoc" method="post" onSubmit="return valid();">
														<div class="form-group">
															<label for="DoctorSpecialization">
																Doctor Specialization
															</label>
							<select name="Doctorspecialization" class="form-control" required="true">
																<option value="">Select Specialization</option>
<?php $ret=mysqli_query($con,"select * from doctorspecilization");
while($row=mysqli_fetch_array($ret))
{
?>
																<option value="<?php echo htmlentities($row['specilization']);?>">
																	<?php echo htmlentities($row['specilization']);?>
																</option>
																<?php } ?>
																
															</select>
														</div>

<div class="form-group">
															<label for="doctorname">
																 Doctor Name
															</label>
					<input type="text" name="docname" class="form-control"  placeholder="Enter Doctor Name" required="true">
														</div>


<div class="form-group">
															<label for="address">
																 Doctor Clinic Address
															</label>
					<textarea name="clinicaddress" class="form-control"  placeholder="Enter Doctor Clinic Address" required="true"></textarea>
														</div>
<div class="form-group">
															<label for="fess">
																 Doctor Consultancy Fees
															</label>
					<input type="text" name="docfees" class="form-control"  placeholder="Enter Doctor Consultancy Fees" required="true">
														</div>
	
<div class="form-group">
									<label for="fess">
																 Doctor Contact no
															</label>
					<input type="text" name="doccontact" class="form-control"  placeholder="Enter Doctor Contact no" required="true">
														</div>

<div class="form-group">
									<label for="fess">
																 Doctor Email
															</label>
<input type="email" id="docemail" name="docemail" class="form-control"  placeholder="Enter Doctor Email id" required="true" onBlur="checkemailAvailability()">
<span id="email-availability-status"></span>
</div>



														
														<div class="form-group">
															<label for="exampleInputPassword1">
																 Password
															</label>
					<input type="password" name="npass" class="form-control"  placeholder="New Password" required="required">
														</div>
														
<div class="form-group">
															<label for="exampleInputPassword2">
																Confirm Password
															</label>
									<input type="password" name="cfpass" class="form-control"  placeholder="Confirm Password" required="required">
														</div>
														
														
														
														<button type="submit" name="submit" id="submit" class="btn btn-o btn-primary">
															Submit
														</button>
													</form>
												</div>
											</div>
										</div>
											
											</div>
										</div>
									<div class="col-lg-12 col-md-12">
											<div class="panel panel-white">
												
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- end: BASIC EXAMPLE -->
			
					
					
						
						
					
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>

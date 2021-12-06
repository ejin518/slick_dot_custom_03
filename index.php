<?php
include_once('./common.php');
include_once('./head_lib.php');
include_once('./bbs/newwin.inc.php');
?>




<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js'></script>
<!-- 

BUSINESS
베셀 에어로스페이스는 유인항공기 사업을 시작으로 무인항공기 사업,
그리고 미래 UAM사업 진출을 목표로 노력합니다.


01 UAM 사업
02 UAV 사업
03 LSA 사업

/images/big_img.png 950 935
/images/smg_01.png  150 150 

-->

<div class="container">
	<div class="inner">
		<div class="text">
			<h2>BUSINESS</h2>
			<p>베셀 에어로스페이스는 유인항공기 사업을 시작으로 무인항공기 사업,<br>
			그리고 미래 UAM사업 진출을 목표로 노력합니다.</p>
			<div class="dots"></div>
		</div>
	</div>
	<div class="slider01">
		<div class="slide01 slide011" data-dot-title="UAM 사업"></div>
		<div class="slide01 slide012" data-dot-title="UAM 사업"></div>
		<div class="slide01 slide013" data-dot-title="UAM 사업"></div>
		<div class="slide01 slide014" data-dot-title="UAM 사업"></div>
		<div class="slide01 slide015" data-dot-title="UAM 사업"></div>
	</div>
	<div class="slider02">
		<div class="slide02_01" >
			<span>
				<img src="/images/smg_01.png">
			<span>
		</div>
		<div class="slide02_01">
			<span>
				<img src="/images/smg_01.png">
			<span>
		</div>
		<div class="slide02_01">
			<span>
				<img src="/images/smg_01.png">
			<span>
		</div>
		<div class="slide02_01">
			<span>
				<img src="/images/smg_01.png">
			<span>
		</div>
		<div class="slide02_01">
			<span>
				<img src="/images/smg_01.png">
			<span>
		</div>
	</div>
</div>

<style>
.inner {
	max-width:1400px;
	width:100%;
	margin:0 auto;
}
.container {
	position:relative;
	height:950px;
}
.text {
	padding-top:80px;
}
.text h2 {
	font-size:35px;
	color:#000;
}
.text p {
	font-size:16px;
	color:#000;
}
.dots {
	margin-top:40px;
}
.slider01 {
	position:absolute;
	top:0;
	right:0;
	width:50%;
}
.slide01 {
	width:100%;
	height:950px;
	background:url(/images/big_img.png)center center no-repeat;
	background-size:cover;
}
.slider02 {
	position:absolute;
	bottom:30px;
	left:0;
	right:0;
	width:790px;
	margin:0 auto;
}
.slide02_01 {
	
	padding:5px;
	
}
.slide02_01 span {
	position:relative;
	display:block;
	width:150px;
	height:150px;
	overflow:hidden;
}
.slide02_01 span img {
	position:
}
.slider02 .slick-current .slide02_01 span:before {
	content:"";
	width:100%;
	height:100%;
	background:blue;
	opacity:0.5;
	position:absolute;
	top:0;
	left:0;
}
.dots ul li {
	margin-top:20px;
}
.dots ul li button em {
	position:relative;
	display:inline-block;
	margin-right:20px;
}
.dots ul li.slick-active button#slick-slide-control00 em:before {
	color:blue;
	border:1px solid blue;

}
.dots ul li button#slick-slide-control00 em:before {
	content:"1";
	display:inline-block;
	width:40px;
	height:40px;
	border:1px solid #eaeaea;
	line-height:38px;
	text-align:center;
	font-size:15px;
	font-weight:bold;
	color:#000;
}
.dots ul li.slick-active button#slick-slide-control01 em:before {
	color:blue;
	border:1px solid blue;

}
.dots ul li button#slick-slide-control01 em:before {
	content:"2";
	display:inline-block;
	width:40px;
	height:40px;
	border:1px solid #eaeaea;
	line-height:38px;
	text-align:center;
	font-size:15px;
	font-weight:bold;
	color:#000;
}
.dots ul li.slick-active button#slick-slide-control02 em:before {
	color:blue;
	border:1px solid blue;

}
.dots ul li button#slick-slide-control02 em:before {
	content:"3";
	display:inline-block;
	width:40px;
	height:40px;
	border:1px solid #eaeaea;
	line-height:38px;
	text-align:center;
	font-size:15px;
	font-weight:bold;
	color:#000;
}
.dots ul li.slick-active button#slick-slide-control03 em:before {
	color:blue;
	border:1px solid blue;

}
.dots ul li button#slick-slide-control03 em:before {
	content:"4";
	display:inline-block;
	width:40px;
	height:40px;
	border:1px solid #eaeaea;
	line-height:38px;
	text-align:center;
	font-size:15px;
	font-weight:bold;
	color:#000;
}
.dots ul li.slick-active button#slick-slide-control04 em:before {
	color:blue;
	border:1px solid blue;

}
.dots ul li button#slick-slide-control04 em:before {
	content:"5";
	display:inline-block;
	width:40px;
	height:40px;
	border:1px solid #eaeaea;
	line-height:38px;
	text-align:center;
	font-size:15px;
	font-weight:bold;
	color:#000;
}
.dots ul li button {
	outline:none;
	border:none;
	background:unset;
	position:relative;
	font-size:20px;
	color:#000;
}
.dots ul li.slick-active button {
	color:blue;
}

</style>

<script>
$(document).ready(function(){
	$('.slider01').slick({
		arrows:false,
		dots:true,
		appendDots: $('.dots'),
		asNavFor:$('.slider02'),
		customPaging: function(slider, i) { 
            console.log($(slider.$slides[i]).html());
            return '<button class="tab">' + '<em></em>' + $(slider.$slides[i]).find('.slide01').attr('data-dot-title') + '</button>';
        }
	});
	$('.slider02').slick({
		arrows:false,
		dots:false,
		asNavFor:$('.slider01'),
		slidesToShow:5,
		focusOnSelect: true
	});
});
</script>

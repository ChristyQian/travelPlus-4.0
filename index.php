<!DOCTYPE html>
<html>

<?php 
	$pageName="index";
	$tagTitle="首页 - EF TravelPlus | 英孚旅游+";
	$metaTitle="出境旅游新选择_EF英孚旅游_一站式旅游专家";
	$metaKeywords="出境旅游城市，欧洲旅游，EF英孚旅游，EFTravelPlus，品质跟团游，自由团，EF英孚教育，告别走马观花，体验式旅行";
	$metaDescription="英孚旅游+，是英孚旗下一站式旅游服务专家，在全球众多国家拥有专业的旅游执行团队和完善的网络体系，用有趣的方式，让你和志同道合的年轻人一起，发现未知的精彩世界。";

    include_once("index-head.php"); 
?>
	<body>
		<div class="grayBg"></div>

<?php 
	include_once("common-header.php");
	
	$i = rand(1,6);
    $slide = array
	(
		array("img/itinerary/home-food-wine-northern-italy-the-italian-riviera.jpg",
			"<div class='discount'><div class='transparentBg'></div><div class='transparentTxt'><p>2人同行<br/>1人半价</p>6月30日前</div></div>",
			"国庆档",
			"<p>食在意大利：食物与酒的美学<br/>2017.9.29出发</p>",
			"Slide-fwit",
			"itinerary-food-wine-northern-italy-the-italian-riviera.php"),
		array("img/itinerary/home-germany-switzerland-austria.jpg",
			"<div class='discount'><div class='transparentBg'></div><div class='transparentTxt'><p>国庆出发</p>仅剩5席</div></div>",
			"国庆档",
			"<p>阿尔卑斯山环游之旅<br/>2017.9.30出发</p>",
			"Slide-alpine",
			"itinerary-jewels-of-alpine-europe.php"),		
		array("img/itinerary/home-grand-tour-of-spain.jpg",
			"<div class='discount'><div class='transparentBg'></div><div class='transparentTxt'><p>国庆出发</p>仅剩3席</div></div>",
			"国庆档",
			"<p>西班牙全景深度游<br/>2017.9.30出发</p>",
			"Slide-grsp",
			"itinerary-grand-tour-of-spain.php"),
		array("img/itinerary/freeTour.jpg",
			" ",
			" ",
			"<p>找到适合你的旅行方式<br/>——两全其美“自由团”</p>",
			"Slide-freetour",
			"why-us.php"),
		array("img/itinerary/home-scandinavia-the-capitals-the-fjords.jpg",
			"<div class='discount'><div class='transparentBg'></div><div class='transparentTxt'><p>节省5%</p>6月30日<br />之前预定</div></div>",
			"国庆档",
			"<p>北欧多元首都之旅<br/>2017.9.30出发</p>",
			"Slide-scandi",
			"itinerary-scandinavia-the-capitals-the-fjords.php"),
		array("img/itinerary/home-barcelona-southern-france-the-italian-riviera.jpg",
			"<div class='discount'><div class='transparentBg'></div><div class='transparentTxt'><p>2人同行<br/>1人半价</p>6月30日前</div></div>",
			"国庆档",
			"<p>西法意城市狂想<br/>2017.9.29出发</p>",
			"Slide-spfrit",
			"itinerary-barcelona-southern-france-the-italian-riviera.php")
	);
?>	
		
		<div class="site">
			<!-- slider -->
			<div class="swiper-container">
			    <div class="swiper-wrapper">
			        <div class="swiper-slide">
			        	<div class="sliderBg">
			        		<img src="<?php echo $slide[5-$i%6][0]?>"  />
			        	</div>
						<?php echo $slide[5-$i%6][1]?>
						<div class="event">
							<div class="transparentBg"></div>
							<div class="transparentTxt"><?php echo $slide[5-$i%6][2]?></div>
						</div>
						<div class="recommand">
							<?php echo $slide[5-$i%6][3]?>
							<a id="<?php echo $slide[5-$i%6][4]?>" class="borderBtn" href="<?php echo $slide[5-$i%6][5]?>">查看行程<i class="whiteArrow"></i></a>
						</div>
			        </div>
			        <div class="swiper-slide">
			        	<div class="sliderBg">
			        		<img src="<?php echo $slide[5-($i+1)%6][0]?>"  />
			        	</div>
						<?php echo $slide[5-($i+1)%6][1]?>
						<div class="event">
							<div class="transparentBg"></div>
							<div class="transparentTxt"><?php echo $slide[5-($i+1)%6][2]?></div>
						</div>
						<div class="recommand">
							<?php echo $slide[5-($i+1)%6][3]?>
							<a id="<?php echo $slide[5-($i+1)%6][4]?>" class="borderBtn" href="<?php echo $slide[5-($i+1)%6][5]?>">查看行程<i class="whiteArrow"></i></a>
						</div>
			        </div>
			        <div class="swiper-slide">
			        	<div class="sliderBg">
			        		<img src="<?php echo $slide[5-($i+2)%6][0]?>"  />
			        	</div>
						<?php echo $slide[5-($i+2)%6][1]?>
						<div class="event">
							<div class="transparentBg"></div>
							<div class="transparentTxt"><?php echo $slide[5-($i+2)%6][2]?></div>
						</div>
						<div class="recommand">
							<?php echo $slide[5-($i+2)%6][3]?>
							<a id="<?php echo $slide[5-($i+2)%6][4]?>" class="borderBtn" href="<?php echo $slide[5-($i+2)%6][5]?>">查看行程<i class="whiteArrow"></i></a>
						</div>
			        </div>
			        <div class="swiper-slide">
			        	<div class="sliderBg">
			        		<img src="<?php echo $slide[5-($i+3)%6][0]?>"  />
			        	</div>
						<?php echo $slide[5-($i+3)%6][1]?>
						<div class="event">
							<div class="transparentBg"></div>
							<div class="transparentTxt"><?php echo $slide[5-($i+3)%6][2]?></div>
						</div>
						<div class="recommand">
							<?php echo $slide[5-($i+3)%6][3]?>
							<a id="<?php echo $slide[5-($i+3)%6][4]?>" class="borderBtn" href="<?php echo $slide[5-($i+3)%6][5]?>">查看行程<i class="whiteArrow"></i></a>
						</div>
			        </div>
			        <div class="swiper-slide">
			        	<div class="sliderBg">
			        		<img src="<?php echo $slide[5-($i+4)%6][0]?>"  />
			        	</div>
						<?php echo $slide[5-($i+4)%6][1]?>
						<div class="event">
							<div class="transparentBg"></div>
							<div class="transparentTxt"><?php echo $slide[5-($i+4)%6][2]?></div>
						</div>						
						<div class="recommand">
							<?php echo $slide[5-($i+4)%6][3]?>
							<a id="<?php echo $slide[5-($i+4)%6][4]?>" class="borderBtn" href="<?php echo $slide[5-($i+4)%6][5]?>">查看行程<i class="whiteArrow"></i></a>
						</div>
			        </div>
			        <div class="swiper-slide">
			        	<div class="sliderBg">
			        		<img src="<?php echo $slide[5-($i+5)%6][0]?>"  />
			        	</div>
						<?php echo $slide[5-($i+5)%6][1]?>
						<div class="event">
							<div class="transparentBg"></div>
							<div class="transparentTxt"><?php echo $slide[5-($i+5)%6][2]?></div>
						</div>
						<div class="recommand">
							<?php echo $slide[5-($i+5)%6][3]?>
							<a id="<?php echo $slide[5-($i+5)%6][4]?>" class="borderBtn" href="<?php echo $slide[5-($i+5)%6][5]?>">查看行程<i class="whiteArrow"></i></a>
						</div>
			        </div>
			    </div>
			    <!-- 如果需要分页器 -->
			    <div class="swiper-pagination touchslider-nav">
			    </div>
			  
			</div>
			<!-- video -->  
			<div class="section">
				<h4>TravelPlus别样自由团</h4>
				<div class="videoWrap">
					<!--<video width="500" height="302" src='http://player.youku.com/player.php/sid/XMTg0NjAwMTAwOA==/v.swf' allowFullScreen='true' quality='high' width='500' height='302' align='middle' allowScriptAccess='always' type='application/x-shockwave-flash'>	
						your browser does not support the video tag
					</video>-->
					<video src="http://oom4o4tqw.bkt.clouddn.com/EF-Travel-Plus-branding2.MP4" controls="controls">
						your browser does not support the video tag
					</video>
					<div class="flex-row-start-around features">
						<div class="flex1">
							<div class="iWrap"><i class="localGuide"></i></div>
							<p>外籍导游和中方领队，带你融入当地</p>
						</div>
						<div class="flex1">
							<div class="iWrap"><i class="like-minded"></i></div>
							<p>结识有趣同龄伙伴，旅程更添精彩</p>
						</div>
						<div class="flex1">
							<div class="iWrap"><i class="freeTime"></i></div>
							<p>行程合理规划，自由时间自在享受</p>
						</div>
					</div>
				</div>
			</div>
			<div class="site">
				<!-- trips -->
<?php 
	include_once("recommend.php");
?>	
			</div>					
		</div>
		<!-- footer -->
<?php 
	include_once ("common-footer2.php");
?>

		<div class="popup wechat">
			<i class="closePopup">&times;</i>
			<div class="mask"></div>
			<div class="popupContainer">		
				<div class="flex-col-center-center flex-wrap">
					<div class="">
						<p>
							扫码关注@EFTravelPlus微信服务号<br />
							发现实用旅行灵感和产品
						</p>
					</div>
					<div class="wechatImg">
						<img src="http://travelplus.ef.com.cn/sp/img/qrcode.png" />
					</div>
				</div>
			</div>
		</div>
		<script src="js/jquery-2.1.1.min.js"></script>
		<script>
		//flexibility(document.documentElement);		
	    var swiper = new Swiper('.swiper-container', {
	    		autoplay: 3000,
	        pagination: '.swiper-pagination',
	        paginationClickable: true
	    }); 
	    
    		$('.closeIcon').click(function(){
			$(this).parentsUntil('.com_dialog').hide();
		});
		$('.header .Oval-5').click(function(){
			if(jQuery(window).width() >=768){
				$('.header .dialogWrap').show();
				$('.header .com_dialog').show();
			}
			else if(jQuery(window).width() <768){
				$('.wechat.popup').show();	
				$('.popup .mask').show();
				$('.popupContainer').show();	
			}
		});
		
		$(".wechat.popup .closePopup").click(function(){
			$('.popup').hide();	
			$('.popup .mask').hide();
			$('.popupContainer').hide();	
		});      
		</script>
	</body>
</html>

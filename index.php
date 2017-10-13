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
	
	$i = rand(1,4);
    $slide = array
	(
		array("img/itinerary/home-icy.jpg",
			"<div class='discount'><div class='transparentBg'></div><div class='transparentTxt'><p>2人同行<br/>立减4000</p>10月23日前</div></div>",
			"2018年2月、3月出发预订中",
			"<p>冰岛奇幻北极光之旅<br/>可享受“2人同行，立减4000”</p>",
			"Slide-icy",
			"itinerary-icy-reykjavik-the-northern-lights.php",
			"查看行程<i class='whiteArrow'></i>"),
		array("img/itinerary/home-portugal-spain-morocco.jpg",
			"<div class='discount'><div class='transparentBg'></div><div class='transparentTxt'><p>2人同行<br/>立减4000</p>10月23日前</div></div>",
			"圣诞 / 元旦 / 春节出发",
			"<p>葡萄牙西班牙摩洛哥之旅<br/>16天</p>",
			"Slide-psm",
			"itinerary-portugal-spain-morocco.php",
			"查看行程<i class='whiteArrow'></i>"),		
		array("img/itinerary/freeTour.jpg",
			" ",
			" ",
			"<p>找到适合你的旅行方式<br/>——两全其美“自由团”</p>",
			"Slide-freetour",
			"why-us.php",
			"了解详情<i class='whiteArrow'></i>"),
		array("img/itinerary/home-germany-switzerland-austria.jpg",
			"<div class='discount'><div class='transparentBg'></div><div class='transparentTxt'><p>2人同行<br/>立减6000</p>10月15日前</div></div>",
			"圣诞 / 元旦 / 春节出发",
			"<p>德瑞奥古堡童话之旅<br/>14天</p>",
			"Slide-gsa",
			"itinerary-germany-switzerland-austria.php",
			"查看行程<i class='whiteArrow'></i>")
	);
?>	

<?PHP
	include_once('triggeredLeadPop.php');
?>
		
	<div class="site">
		<!-- slider -->
		<div class="swiper-container">
		    <div class="swiper-wrapper">
		        <div class="swiper-slide">
		        	<div class="sliderBg">
		        		<img src="<?php echo $slide[3-$i%4][0]?>"  />
		        	</div>
					<?php echo $slide[3-$i%4][1]?>
					<div class="event">
						<div class="transparentBg"></div>
						<div class="transparentTxt"><?php echo $slide[3-$i%4][2]?></div>
					</div>
					<div class="recommand">
						<?php echo $slide[3-$i%4][3]?>
						<a id="<?php echo $slide[3-$i%4][4]?>" class="borderBtn" href="<?php echo $slide[3-$i%4][5]?>"><?php echo $slide[3-$i%4][6]?></a>
					</div>
		        </div>
		        <div class="swiper-slide">
		        	<div class="sliderBg">
		        		<img src="<?php echo $slide[3-($i+1)%4][0]?>"  />
		        	</div>
					<?php echo $slide[3-($i+1)%4][1]?>
					<div class="event">
						<div class="transparentBg"></div>
						<div class="transparentTxt"><?php echo $slide[3-($i+1)%4][2]?></div>
					</div>
					<div class="recommand">
						<?php echo $slide[3-($i+1)%4][3]?>
						<a id="<?php echo $slide[3-($i+1)%4][4]?>" class="borderBtn" href="<?php echo $slide[3-($i+1)%4][5]?>"><?php echo $slide[3-($i+1)%4][6]?></a>
					</div>
		        </div>
		        <div class="swiper-slide">
		        	<div class="sliderBg">
		        		<img src="<?php echo $slide[3-($i+2)%4][0]?>"  />
		        	</div>
					<?php echo $slide[3-($i+2)%4][1]?>
					<div class="event">
						<div class="transparentBg"></div>
						<div class="transparentTxt"><?php echo $slide[3-($i+2)%4][2]?></div>
					</div>
					<div class="recommand">
						<?php echo $slide[3-($i+2)%4][3]?>
						<a id="<?php echo $slide[3-($i+2)%4][4]?>" class="borderBtn" href="<?php echo $slide[3-($i+2)%4][5]?>"><?php echo $slide[3-($i+2)%4][6]?></a>
					</div>
		        </div>
		        <div class="swiper-slide">
		        	<div class="sliderBg">
		        		<img src="<?php echo $slide[3-($i+3)%4][0]?>"  />
		        	</div>
					<?php echo $slide[3-($i+3)%4][1]?>
					<div class="event">
						<div class="transparentBg"></div>
						<div class="transparentTxt"><?php echo $slide[3-($i+3)%4][2]?></div>
					</div>
					<div class="recommand">
						<?php echo $slide[3-($i+3)%4][3]?>
						<a id="<?php echo $slide[3-($i+3)%4][4]?>" class="borderBtn" href="<?php echo $slide[3-($i+3)%4][5]?>"><?php echo $slide[3-($i+3)%4][6]?></a>
					</div>
		        </div>
		    </div>
		    <!-- 如果需要分页器 -->
		    <div class="swiper-pagination touchslider-nav"></div>			  
		</div>
		<!-- video -->  
		<div class="section">
			<h4>TravelPlus别样自由团</h4>
			<div class="videoWrap">
				<video id="home-video" src="http://oom4o4tqw.bkt.clouddn.com/EF-Travel-Plus-branding2.MP4" controls="controls" onplay="bs_trackClick(bs_getEventCategory(), 'Home Video Play');">
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
			<?php include_once("recommend.php"); ?>	
		</div>					
	</div>
	<!-- footer -->
	<?php include_once ("common-footer2.php"); ?>
	<?php include_once ("popup.php"); ?>

		<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
		<script src="js/popup.js" type="text/javascript"></script>
		<!-- Show the interaction effect, can be removed it later -->
		<script src="js/triggeredLeadPop.js" type="text/javascript"></script>
		<!-- Show the interaction effect, can be removed it later -->
		
		<script>		
		    var swiper = new Swiper('.swiper-container', {
		    	autoplay: 3000,
		        pagination: '.swiper-pagination',
		        paginationClickable: true
		    }); 
		</script>
	</body>
</html>

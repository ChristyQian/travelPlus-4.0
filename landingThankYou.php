<!DOCTYPE html>
<html>
<?php 
	$pageName="Tours to Spain & Europe";
	$tagTitle="landing - EF TravelPlus | 英孚旅游+";
	$metaTitle="欧洲游线路_澳大利亚旅游_美国旅游_极光旅游_迪拜旅游_线路推荐_限时特惠线路_假期出国游";
	$metaKeywords="澳大利亚旅游，美国旅游，极光旅游，迪拜旅游，德瑞奥，德国旅游，奥地利旅游，荷兰旅游，瑞士旅游，丹麦旅游，爱尔兰旅游，瑞典旅游，吃货行程，美食之旅，法国旅游，西班牙旅游，意大利旅游，英国旅游，希腊旅游，北欧旅游，春节欧洲游，长假欧洲游，欧洲线路推荐，限时优惠，国庆出境，十一长假，EFTravelPlus";
	$metaDescription="英孚旅游+，根据热门季节、个人爱好等旅行元素，精心设计行程，带来更多元的主题线路和更优的旅行体验，真正融入异国文化，捕捉旅程中的每次怦然心动与惊喜。";

    include_once("landing-head.php"); 
?>
	<body>
	
<?php 
	 include_once('common-header2.php');
?>
	<div id="thankYouPage" class="banner-ty flex-center-center" style="background: url(img/banner-thank-you.jpg);">
        <div class="wrap flex-wrap flex-col-center-center">
            <button class="button-download" onclick="window.open('files/bfr.pdf')">点击下载攻略</button>
            <div class="tips">(文件大约10M，请在WiFi环境下下载)</div>
            <h2>感谢你的关注！</h2>
			<p>想了解更多路线玩法推荐，或咨询签证问题<br/>
			不如一键添加旅游顾问：EF小家 和TA沟通吧！</p>
            <img class="content-box-qr" src="img/sSqrcode.jpg" width="200">
        </div>
    </div>
    <div class="site">
    <?php 
		include_once('recommend.php')
	?>
	</div>
		<!-- footer -->
<?php 
	include_once('common-footer2.php')
?>
<?php include 'popup.php' ;?>
		<script src="js/jquery-2.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/sticky.min.js"></script>
		<!-- Show the interaction effect, can be removed it later -->
		<script src="js/triggeredLeadPop.js" type="text/javascript"></script>
		<!-- Show the interaction effect, can be removed it later -->
	</body>
</html>

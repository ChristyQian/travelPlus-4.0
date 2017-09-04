<!DOCTYPE html>
<html>
<?php 
	$pageName="laliga series";
	$tagTitle="EF TravelPlus | 英孚旅游+";
	$metaTitle="欧洲游线路_澳大利亚旅游_美国旅游_极光旅游_迪拜旅游_线路推荐_限时特惠线路_假期出国游";
	$metaKeywords="澳大利亚旅游，美国旅游，极光旅游，迪拜旅游，德瑞奥，德国旅游，奥地利旅游，荷兰旅游，瑞士旅游，丹麦旅游，爱尔兰旅游，瑞典旅游，吃货行程，美食之旅，法国旅游，西班牙旅游，意大利旅游，英国旅游，希腊旅游，北欧旅游，春节欧洲游，长假欧洲游，欧洲线路推荐，限时优惠，国庆出境，十一长假，EFTravelPlus";
	$metaDescription="英孚旅游+，根据热门季节、个人爱好等旅行元素，精心设计行程，带来更多元的主题线路和更优的旅行体验，真正融入异国文化，捕捉旅程中的每次怦然心动与惊喜。";

    include_once("landing-head.php"); 
?>
	<body data-spy="scroll">
	
<?php 
	 include_once('common-header2.php');
?>	

		<div class="browse-page-container">
			<div class="landingTop browse-banner-container">
				<div class="relDiv">			
					<div class="banner-share-topper">
						<ul class="site inline-block breadcrumbs">
							<li class="breadcrumbs-segment">
								<a class="dark" href="all-trips.php">全部行程</a>
								<i class="fa fa-chevron-right" data-reactid="228"></i>
							</li>
							<li class="breadcrumbs-segment">
								<a class="dark" href="all-trips.php">欧洲</a>
								<i class="fa fa-chevron-right" data-reactid="228"></i>
							</li>
							<li class="breadcrumbs-segment">
								<a class="dark" href="#">西甲足球盛宴</a>
								<i class="fa fa-chevron-right" data-reactid="228"></i>
							</li>
						</ul>
					</div>
					<div class="site" data-target="#card">
						<div class="browse-banner">
							<div class="browse-banner-bg"><img class="browse-banner-overlay" src="img/itinerary/laliga/billboard/w_4dac6337f423202045_dsc8305.jpg" width="100%"/></div>
							<div class="site browse-banner-content">
								<div class="leftWrap">
									<div class="">
										<div class="landingInfo">
											<div class="transparentBg"></div>
											<div class="transparentTxt">
												<h5>西甲足球盛宴</h5>
												<h1 class="laliga">西甲非凡朝圣之旅</h1>
												<p>联合西甲俱乐部，组织官方授权西甲观赛团！新赛季锁定多场重量级比赛，官方渠道供票，专属机会参观西甲总部，了解顶级足球赛事背后的故事；独家探秘皇马训练基地Valdebebas 或巴萨训练基地La Masia，充分感受西班牙足球体系与氛围，并有机会与俱乐部成员进行激动人心的实战对抗！
												</p>
											</div>
										</div>		 
										<div class="card" id="card" data-spy="affix" data-offset-top="500">
											<div class="flex-row-center-start whyUsTxt">
												<div class="transparentBg">
													<div class="Oval-6"></div>
													<div class="Oval-7"></div>
												</div>					
												<div class="flex-wrap flex-row-center-between transparentTxt">
													<div>跟团游<br/>的省心和便利</div>
													<div>自由团</div>
													<div style="text-align:right;">自由行<br/>的舒心和自在</div>
												</div>
											</div>
											<h4>什么是EF TravelPlus自由团？</h4>
											<ul>
												<li>不用花费大量时间准备攻略，一站式服务覆盖行程所有环节</li>
												<li>目的地运营团队，提供安全保障</li>
												<li>自由灵活的行程安排，拥有30-50%真正属于自己的时间</li>
												<li>主题精选路线设计，认识志趣相同的旅行伙伴</li>
												<li>外籍导游和中方领队，带你融入当地生活</li>
											</ul>
										</div>
									</div>
								</div>
								<!--backend interface --> 
								<script type="text/javascript" src='../lib/services.js'></script>
							    <!--leads and pages --> 
							    <script type="text/javascript" src='js/func.js'></script>		
								<script>	
								function Quotation_Form_Submit()
								{	
								 bs_trackClick(bs_getEventCategory(), "Lead Form Submission");	
								 
								 Lead_Validation("sp-form", "Lead_Insert", "TDLanding_thankyou.php", true);
								}
								</script>
								<div class="rightWrap">
									<h5 class="rightWrapHead">多场重量级比赛可供选择&nbsp;&gt;&gt;</h5>									
									<div class="browse-banner-content-box">
										<h5>多场重量级比赛可供选择
											<div class="goBackStatusIcon">
												<div class="whiteTrangle"></div>
												<div class="backgroundTrangle"></div>
											</div>
										</h5>
										<div class="ibWrap quoWrap">
											<div class="quoInfo">						
												<form id="sp-form">
													<div class="quoItem">
														<label>出发城市:</label>
														<div class="dropdownArrowWrap">
															<select id="city" name="city" title="城市" param="city">
																<option value="Beijing">北京</option>
																<option value="Shanghai">上海</option>										
																<option value="Guangzhou">广州</option>										
																<option value="Chengdu">成都</option>										
																<option value="Hongkong">香港</option>										
																<option value="Others">其他</option>
															</select>
															<div id="city-error-msg" class="form-error-msg">
																<i class="fa fa-warning"></i>请输入起飞地点
															</div>
															<div class="dropdownArrow"></div>
														</div>
													</div>

													<div class="quoItem">
														<label>观赛时间:</label>
														<div class="dropdownArrowWrap">
															<select id="age" name="age" title="年龄" param="age">									
																<option value="2017 11 17">马竞 VS 皇马 2017.11.17 出发</option>		
																<option value="2017 12 15">皇马 VS 巴萨 2017.12.15 出发</option>									
																<option value="2018 01 12">皇马 VS 比利亚雷亚尔 2018.01.12 出发</option>									
															</select>
															<div id="age-error-msg" class="form-error-msg">
																<i class="fa fa-warning"></i>请输入旅行时间
															</div>
															<div class="dropdownArrow"></div>
														</div>
													</div>

													<div class="quoItem">

														<label>您的名字:</label>

														<textarea id="name" name="name" type="text" title="姓名" param="name"></textarea>

														<div id="name-error-msg" class="form-error-msg">

															<i class="fa fa-warning"></i>请输入姓名

														</div>

													</div>

													<div class="quoItem">

														<label>电话:</label>

														<textarea id="mobile" name="mobile" type="tel" title="手机号码" param="mobile" maxlength="11"></textarea>

														<div id="mobile-error-msg" class="form-error-msg">

															<i class="fa fa-warning"></i>请输入电话

														</div>

													</div>

													<input name="pagename" type="hidden" title="pagename" param="pagename" value="<?php echo $_SERVER['PHP_SELF']; ?>">
													<input name="etag" type="hidden" title="etag" param="etag" value="<?php echo $_SESSION['etag']; ?>">
													<input name="channel" type="hidden" title="channel" param="channel" value="<?php echo $_SESSION['channel'];?>">
													<input id="email" name="email" type="hidden" title="email" param="email" value="fake@email.com">
													<input name="motivation" type="hidden" title="motivation" param="motivation" value="-">
													<input name="destination" type="hidden" title="destination" param="destination" value="-">
													<input name="sfreplication" type="hidden" title="sfreplication" param="sfreplication" value="true">							

												</form>					

												<button id="lead-submit-button" onclick="Quotation_Form_Submit()" class="orangeBtn" >我要去现场</button>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="site landing">		
			<div class="twoThird section">
				<h4>"西甲足球盛宴"相关行程<span class="frNote">共3条结果</span></h4>
				<div class="flex-row-start-start flex-flow">					
				    <div id="itinerary-laliga-series-20171119" name="home-trip-box" class="home-trip-box" data-dest="laliga" data-tag="football">
						<a href="itinerary-laliga-series-20171119.php" >
							<div class="offerOutWrap">
								<div class="offerWrap earlyBird">
									<div class="offerArrow"></div>	
									<div>早鸟优惠10%</div>
								</div>									
								<div class="offerWrap earlyBird laliga">
									<div class="offerArrow"></div>	
									<div>西甲官方观赛团</div>
								</div>
							</div>	
							<div class="imgWrap">
								<img src="img/itinerary/laliga/billboard/w_f1d903bd3d08170810scr_6099.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">2017.11.19 马德里竞技 VS 皇马 </div>
								<div class="itiDess">
									马德里 - 巴塞罗那
								</div>	
								<div class="itiDays">9天</div>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div class="itiIntro">
									挥别了五十载风雨历程的卡尔德隆球场，这将是床单军团移师万达大都会球场后的首场同城德比！在崭新的赛场，是蜕变，涅槃重生，用胜利迎接新纪元的到来，还是继续屈膝在白衣军团的强大统治力下？
								</div>
								<div class="itiPrice">										
									<span class="delPrice">￥21,100</span>
									<span class="price">￥26,000<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>								
							</div>
						</a>
				    </div>
				    <div id="itinerary-laliga-series-20171220" name="home-trip-box" class="home-trip-box" data-dest="laliga" data-tag="football">
						<a href="itinerary-laliga-series-20171220.php" >
							<div class="offerOutWrap">
								<div class="offerWrap earlyBird">
									<div class="offerArrow"></div>	
									<div>早鸟优惠10%</div>
								</div>									
								<div class="offerWrap earlyBird laliga">
									<div class="offerArrow"></div>	
									<div>西甲官方观赛团</div>
								</div>
							</div>		
							<div class="imgWrap">
								<img src="img/itinerary/laliga/FCB-RAM/3.pic_hd.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">2017.12.20 皇马 VS 巴萨</div>
								<div class="itiDess">
									巴塞罗那 - 马德里
								</div>	
								<div class="itiDays">10天</div>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
								</div>
								<div class="itiIntro">
									巅峰对决，这是被称为世纪大战的震撼较量，自始以来的第270场国家德比。置身伯纳乌，亲历这个星球上最血脉偾张的对决，成为史诗瞬间的见证者、讲述者，在最好的年华目睹“梅罗双骄”
								</div>
								<div class="itiPrice">										
									<span class="delPrice">￥21,100</span>
									<span class="price">￥54,000<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>								
							</div>
						</a>
				    </div>	
				    <div id="itinerary-laliga-series-20180114" name="home-trip-box" class="home-trip-box" data-dest="laliga" data-tag="football">
						<a href="itinerary-laliga-series-20180114.php" >
							<div class="offerOutWrap">
								<div class="offerWrap earlyBird">
									<div class="offerArrow"></div>	
									<div>早鸟优惠10%</div>
								</div>									
								<div class="offerWrap earlyBird laliga">
									<div class="offerArrow"></div>	
									<div>西甲官方观赛团</div>
								</div>
							</div>	
							<div class="imgWrap">
								<img src="img/itinerary/laliga/ADM-RAM/w_4735ec2bc008170807scr_6146.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">2018.01.14 皇马 VS 比利亚雷亚尔</div>
								<div class="itiDess">
									马德里 - 巴塞罗那
								</div>	
								<div class="itiDays">9天</div>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div class="itiIntro">
									在西甲赛场，它被定义为不屈顽强，这支身披黄色战袍的英武之师，带着对联赛冠军的渴望，再次造访伯纳乌球场“黄色潜水艇”――比利亚雷亚尔，能否成功伏击银河战舰？1月14日 等你来揭晓！
								</div>
								<div class="itiPrice">										
									<span class="delPrice">￥21,100</span>
									<span class="price">￥24,700<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>								
							</div>
						</a>
				    </div>
				</div>
				<div>
					<img src="img/itinerary/Laliga/feifan.jpg" width="100%" />
				</div>
				<!-- <div class="cropImg flex-flow">
					<div class="ibWrap"><img src="img/itinerary/Laliga/CR-vertical-0420_13.jpg" width="100%" /></div>
					<div class="ibWrap textWrap">
						<h6>非凡官方</h6>
						<p>西甲俱乐部官方组织的西甲非凡朝圣之旅<br/>【西甲指定的全球唯一官方球迷俱乐部】</p>
					</div>
				</div> -->
				<?php include 'landing_recommend.php' ;?>     				    	
				<div class="card">
					<div class="flex-row-center-start whyUsTxt">
						<div class="transparentBg">
							<div class="Oval-6"></div>
							<div class="Oval-7"></div>
						</div>					
						<div class="flex-wrap flex-row-center-between transparentTxt">
							<div>跟团游<br/>的省心和便利</div>
							<div>自由团</div>
							<div style="text-align:right;">自由行<br/>的舒心和自在</div>
						</div>
					</div>
					<h4>什么是EF TravelPlus自由团？</h4>
					<ul>
						<li>不用花费大量时间准备攻略，一站式服务覆盖行程所有环节</li>
						<li>目的地运营团队，提供安全保障</li>
						<li>自由灵活的行程安排，拥有30-50%真正属于自己的时间</li>
						<li>主题精选路线设计，认识志趣相同的旅行伙伴</li>
						<li>外籍导游和中方领队，带你融入当地生活</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- footer -->
<?php 
	include_once('common-footer2.php')
?>
<?php include 'popup.php' ;?>
		<script src="js/jquery-2.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/sticky.min.js"></script>
		<script src="js/popup.js"></script>
		<script type="text/javascript">

			$('.rightWrapHead').click(function(){
				$('.rightWrapHead').hide();
				$('.browse-banner-content-box').show();
				// paddingHeight();
			});

			$('.goBackStatusIcon').click(function(){
				$('.rightWrapHead').show();
				$('.browse-banner-content-box').hide();
				// paddingHeight();
			});

		</script>
	</body>
</html>

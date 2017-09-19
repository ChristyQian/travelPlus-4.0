<!DOCTYPE html>
<html>
<?php 
	$pageName="Michelin Code II";
	$tagTitle="EF TravelPlus | 英孚旅游+";
	$metaTitle="欧洲游线路_澳大利亚旅游_美国旅游_极光旅游_迪拜旅游_线路推荐_限时特惠线路_假期出国游";
	$metaKeywords="澳大利亚旅游，美国旅游，极光旅游，迪拜旅游，德瑞奥，德国旅游，奥地利旅游，荷兰旅游，瑞士旅游，丹麦旅游，爱尔兰旅游，瑞典旅游，吃货行程，美食之旅，法国旅游，西班牙旅游，意大利旅游，英国旅游，希腊旅游，北欧旅游，春节欧洲游，长假欧洲游，欧洲线路推荐，限时优惠，国庆出境，十一长假，EFTravelPlus";
	$metaDescription="英孚旅游+，根据热门季节、个人爱好等旅行元素，精心设计行程，带来更多元的主题线路和更优的旅行体验，真正融入异国文化，捕捉旅程中的每次怦然心动与惊喜。";

    include_once("michelinCode-head.php"); 
?>
	<body class="competitor michelin" data-spy="scroll">
	
<?php 
	 include_once('common-header2.php');
?>	

		<div class="browse-page-container">
			<div class="landingTop browse-banner-container">
				<div class="relDiv">								
					<div class="">
						<div class="browse-banner">
							<div class="browse-banner-bg">
								<!-- <img class="browse-banner-overlay" src="img/activity/Michelin/Michelin.jpg" width="100%"/>	 -->
								<div class="site">
									<h1><span>你吃米其林，我买单!</span>送你100欧，去欧洲吃大餐</h1>									

								<div class="rightWrap">
								<!--backend interface --> 
								<script type="text/javascript" src='../lib/services.js'></script>
							    <!--leads and pages --> 
							    <script type="text/javascript" src='js/func.js'></script>		
								<script>	
								function Quotation_Form_Submit()
								{	
								 bs_trackClick(bs_getEventCategory(), "Lead Form Submission");	
								 
								 Lead_Validation("sp-form", "Lead_Insert", "Michelin_thankyou.php", true);
								}
								</script>
									<h5 class="rightWrapHead">填写真实信息，领取大礼包&nbsp;&gt;&gt;</h5>									
									<div class="browse-banner-content-box">
										<h5>填写真实信息，领取大礼包<span>数量有限，发完即止</span>
											<div class="goBackStatusIcon">
												<div class="whiteTrangle"></div>
												<div class="backgroundTrangle"></div>
											</div>
										</h5>
										<div class="ibWrap quoWrap">
											<div class="quoInfo">						
												<form id="sp-form">
													<div class="quoItem">
														<label>所在城市:</label>
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
													<div class="quoItem">

														<label>您的邮箱:</label>

														<textarea id="email" name="email" type="email" title="邮箱" param="email"></textarea>

														<div id="email-error-msg" class="form-error-msg">

															<i class="fa fa-warning"></i>请输入邮箱

														</div>

													</div>

													<input name="pagename" type="hidden" title="pagename" param="pagename" value="<?php echo $_SERVER['PHP_SELF']; ?>">
													<input name="etag" type="hidden" title="etag" param="etag" value="<?php echo $_SESSION['etag']; ?>">
													<input name="channel" type="hidden" title="channel" param="channel" value="<?php echo $_SESSION['channel'];?>">
													
													<input name="motivation" type="hidden" title="motivation" param="motivation" value="-">
													<input name="destination" type="hidden" title="destination" param="destination" value="-">
													<input name="sfreplication" type="hidden" title="sfreplication" param="sfreplication" value="true">							

												</form>					

												<button id="lead-submit-button" onclick="Quotation_Form_Submit()" class="orangeBtn">提交领取</button>
											</div>
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
						</div>						
					</div>
				</div>
			</div>
		</div>
		<div class="site landing" data-target="#card">
			<div class="twoThird section">
				<div class="benefits">
					<h5>EF TravelPlus联合<span class="TravelzooLogo">TravelZoo旅游族</span>给大家发福利了！</h5>
					<p>三重大礼包，等你来拿</p>
					<div class="skewX benefit1">
					<span class="number">1</span>
					Travelzoo送你“大有来头——米其林美味密码” 50元现金券；
					<ul>
						<li>凡在“大有来头”活动指定餐厅用餐，即可使用，无购买金额限制；</li>
						<li>数量有限，发完即止，每人只限领取一次；</li>
						<li>收到专享码后，使用有效期至2017年11月30日。</li>
					</ul>
					</div>
					<div class="skewX benefit2">
					<span class="number">2</span>
					Travelzoo送你全场“美食水疗”&“酒店精选”95折抵扣券；
					<ul>
						<li>全场适用，不限次数；</li>
						<li>限2017年10月31日之前有效。</li>
					</ul>
					</div>
					<div class="skewX benefit1">
					<span class="number">3</span>
					美食爱好者们，EF TravelPlus请你去欧洲吃米其林大餐！<br/>
					<ul>
						<li>送你100欧现金，你吃饭，我买单！</li>
						<li>凡在9月30日之前报名参加2018年2月28日之前出发的出境游产品，皆可享受此优惠；</li>
						<li>每人只限领取一次</li>
					</ul>
					</div>
				</div>
				<div class="flex-row-start-start flex-flow">
					<div id="barcelona-southern-france-the-italian-riviera" name="home-trip-box" class="home-trip-box" data-dest="it,fr,sp" data-tag="art,nature,seaview,honeymoon,family">
						<a href="itinerary-barcelona-southern-france-the-italian-riviera.php" >	
							<div class="offerOutWrap">									
								<div class="offerWrap earlyBird">
									<div class="offerArrow"></div>	
									<div>2人同行，立减6000</div>
								</div>
								<div class="offerWrap date">
									<!-- <div class="offerArrow"></div> -->									
									<div>圣诞 / 元旦 / 春节出发</div>
								</div>
							</div>
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/barcelona-southern-france-the-italian-riviera.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">西法意城市狂想</div>
								<div class="itiDess">
									巴塞罗那 - 南法 - 五渔村 - 佛罗伦萨
								</div>	
								<div class="itiDays">12天</div>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
								</div>
								<div class="itiIntro">
									一趟旅程，就能体验到三种截然不同地中海风情！充满艺术气息的巴塞罗那，拥有沁人海洋的南法，传奇之地佛罗伦萨和美丽五渔村！
								</div>
								<div class="itiPrice">										
									<span class="delPrice">￥21,100</span>
									<span class="price">￥21,000<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>								
							</div>
						</a>
				    </div>	
					<div id="germany-switzerland-austria" name="home-trip-box" class="home-trip-box" data-dest="ge,swz,austria" data-tag="history,art,nature">
						<a href="itinerary-germany-switzerland-austria.php" >	
							<div class="offerOutWrap">
								<div class="offerWrap earlyBird">
									<div class="offerArrow"></div>	
									<div>2人同行，立减6000</div>
								</div>									
								<div class="offerWrap date">
									<!-- <div class="offerArrow"></div> -->									
									<div>圣诞 / 元旦 / 春节出发</div>
								</div>
							</div>
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/germany-switzerland-austria.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">德瑞奥古堡童话之旅</div>
								<div class="itiDess">
									海德堡 - 卢塞恩 - 因斯布鲁克 - 慕尼黑 - 萨尔茨堡 - 维也纳
								</div>	
								<div class="itiDays">14天</div>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
								</div>
								<div class="itiIntro">
									童话般风景的德国浪漫海德堡，繁华与自然互相交织的梦幻天堂卢塞恩，皑皑雪山的阿尔卑斯山脚，还有藏着许多故事的城堡，你有太多理由爱上这个旅程！
								</div>
								<div class="itiPrice">										
									<span class="delPrice">￥21,100</span>
									<span class="price">￥22,700<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>								
							</div>
						</a>
				    </div>	
	    			<div id="grand-tour-of-spain" name="home-trip-box" class="home-trip-box" data-dest="sp" data-tag="history,nature,seaview,honeymoon,food">
						<a href="itinerary-grand-tour-of-spain.php" >
							<div class="offerOutWrap">									
								<div class="offerWrap earlyBird">
									<div class="offerArrow"></div>	
									<div>2人同行，立减6000</div>
								</div>
								<div class="offerWrap date">
									<!-- <div class="offerArrow"></div> -->									
									<div>圣诞 / 元旦 / 春节出发</div>
								</div>
							</div>
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/grand-tour-of-spain.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">西班牙全景深度游</div>
								<div class="itiDess">
									马德里 - 格拉纳达 - 瓦伦西亚 - 巴塞罗那
								</div>	
								<div class="itiDays">14天</div>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
								</div>
								<div class="itiIntro">
									从马德里的博物馆到阳光海岸的沙滩，西班牙的城市总是令人惊喜。来巴塞罗那和马德里欣赏主流的艺术和建筑，在安达卢西亚欣赏教堂和摩尔城堡，从北到南打开你的西班牙假期吧！
								</div>
								<div class="itiPrice">
									<span class="delPrice">￥19,100</span>
									<span class="price">￥21,800<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>
							</div>
						</a>
					</div>
			    </div>
				<div class="card" id="card">
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

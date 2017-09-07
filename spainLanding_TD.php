<!DOCTYPE html>
<html>
<?php 
	$pageName="Tours to Spain & Europe";
	$tagTitle="EF TravelPlus | 英孚旅游+";
	$metaTitle="欧洲游线路_澳大利亚旅游_美国旅游_极光旅游_迪拜旅游_线路推荐_限时特惠线路_假期出国游";
	$metaKeywords="澳大利亚旅游，美国旅游，极光旅游，迪拜旅游，德瑞奥，德国旅游，奥地利旅游，荷兰旅游，瑞士旅游，丹麦旅游，爱尔兰旅游，瑞典旅游，吃货行程，美食之旅，法国旅游，西班牙旅游，意大利旅游，英国旅游，希腊旅游，北欧旅游，春节欧洲游，长假欧洲游，欧洲线路推荐，限时优惠，国庆出境，十一长假，EFTravelPlus";
	$metaDescription="英孚旅游+，根据热门季节、个人爱好等旅行元素，精心设计行程，带来更多元的主题线路和更优的旅行体验，真正融入异国文化，捕捉旅程中的每次怦然心动与惊喜。";

    include_once("landing-head.php"); 
?>
	<body class="td" data-spy="scroll">
	
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
								<a class="dark" href="#">西班牙</a>
								<i class="fa fa-chevron-right" data-reactid="228"></i>
							</li>
						</ul>
					</div>
					<div class="site" data-target="#card">
						<div class="browse-banner">
							<div class="browse-banner-bg"><img class="browse-banner-overlay" src="img/itinerary/billboard/Grand-Tour-of-Spain.jpg" width="100%"/></div>
							<div class="site browse-banner-content">
								<div class="leftWrap">
									<div class="">
										<div class="landingInfo">
											<div class="transparentBg"></div>
											<div class="transparentTxt">
												<h5 style="font-size:14px;line-height:initial;">Spain Tours</h5>
												<h1>跟着外籍导游Chris，玩转西班牙</h1>
												<div>
													<img src="img/itinerary/tourDirector/Chris-large.jpg" />
													<p>西班牙，是在英孚担任了9年欧洲导游的我心目中的圣地。从热情洋溢的马德里，到我的家乡塞维利亚，从艺术气息浓厚的巴塞罗那，到明媚的黄金海岸，西班牙的每个城市都有各自不言而喻的魅力。我迫不及待地想与你们分享这里的醉人风景和灿烂文化！
													</p>
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
									<h5 class="rightWrapHead">跟着外籍导游Chris，玩转西班牙&nbsp;&gt;&gt;</h5>									
									<div class="browse-banner-content-box">
										<h5>跟着外籍导游Chris，玩转西班牙
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
														<label>计划旅行时间:</label>
														<div class="dropdownArrowWrap">
															<select id="age" name="age" title="年龄" param="age">									
																<option value="2017 Summer Holiday">2017 暑假</option>														
																<option value="2017 National Day">2017 国庆</option>
																<option value="2017 Xmas">2017 圣诞/新年</option>										
																<option value="2018 Chinese New Year">2018 春节</option>
																<option value="2018 Labour Day">2018 五一节</option>	
																<option value="2018 Dragon Boat">2018 端午节</option>
																<option value="2018 Summer Holiday">2018 暑假</option>										
																<option value="Others">其他</option>										
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

												<button id="lead-submit-button" onclick="Quotation_Form_Submit()" class="orangeBtn" >咨询路线玩法</button>
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
				<h4>"西班牙"相关行程<span class="frNote">共6条结果</span></h4>
				<div class="flex-row-start-start flex-flow">
					<div id="barcelona-southern-france-the-italian-riviera" name="home-trip-box" class="home-trip-box" data-dest="it,fr,sp" data-tag="art,nature,seaview,honeymoon,family">
						<a href="itinerary-barcelona-southern-france-the-italian-riviera.php" >	
							<div class="offerOutWrap">									
								<div class="offerWrap earlyBird">
									<div class="offerArrow"></div>	
									<div>半价优惠</div>
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
				    <div id="grand-tour-of-spain" name="home-trip-box" class="home-trip-box" data-dest="sp" data-tag="history,nature,seaview,honeymoon,food">
							<a href="itinerary-grand-tour-of-spain.php" >
								<div class="offerOutWrap">									
									<div class="offerWrap earlyBird">
										<div class="offerArrow"></div>	
										<div>半价优惠</div>
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
					    <div id="portugal-to-spain" name="home-trip-box" class="home-trip-box" data-dest="portu,sp" data-tag="history,art,nature">
						<a href="itinerary-portugal-to-spain.php" >	
							<div class="offerOutWrap">	
								<div class="offerWrap earlyBird">
									<div class="offerArrow"></div>	
									<div>半价优惠</div>
								</div>								
								<div class="offerWrap date">
									<!-- <div class="offerArrow"></div> -->									
									<div>圣诞 / 元旦 / 春节出发</div>
								</div>
							</div>
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/portugal-to-spain.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">葡萄牙西班牙之旅</div>
								<div class="itiDess">
									里斯本 - 塞维利亚 - 马德里 - 巴塞罗那
								</div>	
								<div class="itiDays">13天</div>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
								</div>
								<div class="itiIntro">
									这趟旅程你将回到大航海时期的起点里斯本和热情迷人的西班牙。既有贝伦塔旁迷人的海岸线，也有高迪之城的天才艺，同时品尝种类丰富的tapas和美味的sangria酒也是南欧之旅不可错过的一部分。
								</div>
								<div class="itiPrice">										
									<span class="delPrice">￥21,100</span>
									<span class="price">￥22,000<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>								
							</div>
						</a>
				    </div>
				    <div id="portugal-spain-morocco" name="home-trip-box" class="home-trip-box" data-dest="mo,portu,sp" data-tag="nature">
						<a href="itinerary-portugal-spain-morocco.php" >	
							<div class="offerOutWrap">
								<div class="offerWrap earlyBird">
									<div class="offerArrow"></div>	
									<div>半价优惠</div>
								</div>									
								<div class="offerWrap date">
									<!-- <div class="offerArrow"></div> -->									
									<div>圣诞 / 元旦 / 春节出发</div>
								</div>
							</div>
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/portugal-spain-morocco.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">葡萄牙西班牙摩洛哥之旅</div>
								<div class="itiDess">
									里斯本 - 塞维利亚 - 格兰纳达 - 卡萨布兰卡 - 舍夫沙万 - 马德里
								</div>	
								<div class="itiDays">16天</div>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
								</div>
								<div class="itiIntro">
									逃离寒冷的冬季跟随我们一起来到伊比利亚半岛感受大西洋的冬日暖阳，站在直布罗陀海峡眺望非洲大陆，挖掘葡萄牙大发现时期的珍贵宝藏，感受马德里不可思议，还有如迷宫般的蓝白摩洛哥小镇。
								</div>
								<div class="itiPrice">										
									<span class="delPrice">￥21,100</span>
									<span class="price">￥26,200<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>								
							</div>
						</a>
				    </div>
					    <div id="food-wine-a-taste-of-spain" name="home-trip-box" class="home-trip-box" data-dest="sp" data-tag="history,art,nature,seaview,honeymoon,food">
						<a href="itinerary-food-wine-a-taste-of-spain.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/Food-&-Wine_A-Taste-of-Spain.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">食在西班牙：爱在唇齿留香间</div>
								<div class="itiDess">
									巴塞罗那 - 圣塞瓦斯蒂安 - 拉里奥哈 - 马德里
								</div>	
								<div class="itiDays">11天</div>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div class="itiIntro">
									从加泰罗尼亚的Cava起泡酒到巴斯林的Tapas，西班牙的美食正在呼唤你！品味地道美食，融入巴塞罗那和马德里的文化，尽情享受圣塞巴斯蒂安著名的食物，在拉里奥哈品尝丹魂葡萄酒。
								</div>
								<div class="itiPrice">
									<span class="delPrice">￥19,100</span>
									<span class="price">￥23,400<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>
							</div>
						</a>
				    </div>
				    <div id="london-paris-madrid" name="home-trip-box" class="home-trip-box" data-dest="uk,fr,sp" data-tag="art,honeymoon">
						<a href="itinerary-london-paris-madrid.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/london-paris-madrid.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">欧洲都市文化精品游</div>
								<div class="itiDess">
									伦敦 - 巴黎 - 马德里
								</div>	
								<div class="itiDays">11天</div>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div class="itiIntro">
									当你来到英国、法国和西班牙的首都，就尽情沉浸于此吧！追寻英国皇室的脚步发现伦敦的亮点，品着香槟游览“光之城”巴黎的城市建筑，在马德里享受悠闲假日。你将发现快节奏的都市，为何个个与众不同。
								</div>
								<div class="itiPrice">
									<span class="delPrice">￥19,100</span>
									<span class="price">￥22,000<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>
							</div>
						</a>
				    </div>
			    </div>
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

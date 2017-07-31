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
	<!-- <script type="text/javascript" src='js/func.js'></script> -->
	
<?php 
	 include_once('common-header2.php');
?>	

<?PHP
		include_once('triggeredLeadPop.php');
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
								<a class="dark" href="all-trips.php">西班牙</a>
								<i class="fa fa-chevron-right" data-reactid="228"></i>
							</li>
						</ul>
					</div>
					<Div class="site">
					<div class="browse-banner">
						<div class="browse-banner-bg"><img class="browse-banner-overlay" src="https://images.goaheadtours.com/dynamic-image/37584_80_1366_430/default.jpg" width="100%"/></div>
						<div class="site browse-banner-content">
							<div class="leftWrap">
								<h1>Spain Tours</h1>
								<div class="card">
									<p>从马德里的博物馆，到塞尔维亚奔放热情的弗拉门戈，从流动的建筑博物馆巴塞罗那，到直布罗陀海峡的黄金海岸。作为世界文化遗产最多的国家之一，热情洋溢的西班牙同时还人文荟萃。三大宗教先后统治这片土地，各自留下了灿烂的文化。
									</p>
									<ul class="ups">
										<li><i class="localGuide"></i>外籍导游和中方领队，带你融入当地</li>
										<li><i class="like-minded"></i>结识有趣同龄伙伴，旅程更添精彩</li>
										<li><i class="freeTime"></i>行程合理规划，自由时间自在享受</li>
									</ul>
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
									<h4>什么是 EF TravelPlus 自由团？</h4>
									<ul>
										<li>不用花费大量时间准备攻略，一站式服务覆盖行程所有环节</li>
										<li>目的地运营团队，提供安全保障</li>
										<li>自由灵活的行程安排，拥有30-50%真正属于自己的时间</li>
										<li>主题精选路线设计，认识志趣相同的旅行伙伴</li>
										<li>外籍导游和中方领队，带你融入当地生活</li>
									</ul>
								</div>
							</div>
							<div class="rightWrap">
								<div class="browse-banner-content-box">
									<div class="quoWrap">
										<h5>找灵感,填表拿攻略！</h5>
										<div class="quoInfo" style="">						
											<form id="guides-form">
												<div class="quoItem">
													<label>起飞地点：</label>
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
													<label>旅行时间：</label>
													<div class="dropdownArrowWrap">
														<select id="age" name="age" title="年龄" param="age">									
															<!-- <option value="2017 Labour Day">2017 五一节</option>										
															<option value="2017 Dragon Boat">2017 端午节</option>										
															<option value="2017 Summer Holiday">2017 暑假</option>										
															<option value="2017 National Day">2017 国庆</option>
															<option value="2017 Xmas">2017 圣诞/新年</option>										
															<option value="2018 Chinese New Year">2018 春节</option>										
															<option value="Others">其他</option>	 -->
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

													<label>您的名字：</label>

													<textarea id="name" name="name" type="text" title="姓名" param="name"></textarea>

													<div id="name-error-msg" class="form-error-msg">

														<i class="fa fa-warning"></i>请输入姓名

													</div>

												</div>

												<div class="quoItem">

													<label>电话：</label>

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

											<button id="guide-lead-submit-button" onclick="Guide_Form_Submit()" class="orangeBtn" >提交查询</button>
										</div>
									</div>
									<div class="relDiv" style="display:inline-block;width:241px;float: right;">
										<div><img src="img/22.jpg" height="302"/></div>
										<div class="abDiv mark">
											免费攻略
										</div>
									</div>
										
									</div>
								</div>
							</div>
						</div>
						</Div>
					</div>
				</div>
			</div>
		</div>
		<div class="site landing">		
			<div class="twoThird section">
				<h4>"西班牙"相关行程<span class="frNote">共4条结果</span></h4>
				<div class="flex-row-start-start flex-flow">
					<div id="barcelona-southern-france-the-italian-riviera" name="home-trip-box" class="home-trip-box" data-dest="it,fr,sp" data-tag="art,nature,seaview,honeymoon,family">
						<a href="itinerary-barcelona-southern-france-the-italian-riviera.php" >	
							<div class="offerWrap">
								<div class="offerArrow"></div>									
								<div>圣诞 / 元旦 / 春节出发 <br/>早鸟优惠</div>
							</div>	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/Barcelona,-Southern-France-&-the-Italian-Riviera.jpg" alt="" />
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
							</div>
							<div class="agendaWrap">						
								<div>										
									<span class="delPrice">￥21,100</span>
									<span class="price">￥21,000<span>起</span></span>
								</div>
							</div>
							<a class="grayBorderBtn" href="itinerary-barcelona-southern-france-the-italian-riviera.php">查看行程</a>
						</a>
				    </div>	
				    <div id="grand-tour-of-spain" name="home-trip-box" class="home-trip-box" data-dest="sp" data-tag="history,nature,seaview,honeymoon,food">
							<a href="itinerary-grand-tour-of-spain.php" >
								<div class="offerWrap">
									<div class="offerArrow"></div>									
									<div>圣诞 / 元旦 / 春节出发 <br/>早鸟优惠</div>
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
										一趟旅程，就能体验到三种截然不同地中海风情！充满艺术气息的巴塞罗那，拥有沁人海洋的南法，传奇之地佛罗伦萨和美丽五渔村！
									</div>
								</div>
								<div class="agendaWrap">
									<div>
										<span class="delPrice">￥19,100</span>
										<span class="price">￥21,800<span>起</span></span>
									</div>
								</div>
								<a class="grayBorderBtn" href="itinerary-barcelona-southern-france-the-italian-riviera.php">查看行程</a>
							</a>
					    </div>
					    <div id="food-wine-a-taste-of-spain" name="home-trip-box" class="home-trip-box" data-dest="sp" data-tag="history,art,nature,seaview,honeymoon,food">
						<a href="itinerary-food-wine-a-taste-of-spain.php" >	
							<div class="offerWrap">
								<div class="offerArrow"></div>									
								<div>圣诞 / 元旦 / 春节出发</div>
							</div>
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
							</div>
							<div class="agendaWrap">
								<div>
									<span class="delPrice">￥19,100</span>
									<span class="price">￥23,400<span>起</span></span>
								</div>
							</div>
							<a class="grayBorderBtn" href="itinerary-food-wine-a-taste-of-spain.php">查看行程</a>
						</a>
				    </div>
				    <div id="london-paris-madrid" name="home-trip-box" class="home-trip-box" data-dest="uk,fr,sp" data-tag="art,honeymoon">
						<a href="itinerary-london-paris-madrid.php" >	
							<div class="offerWrap">
								<div class="offerArrow"></div>									
								<div>圣诞 / 元旦 / 春节出发</div>
							</div>
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
									一趟旅程，就能体验到三种截然不同地中海风情！充满艺术气息的巴塞罗那，拥有沁人海洋的南法，传奇之地佛罗伦萨和美丽五渔村！
								</div>
							</div>
							<div class="agendaWrap">
								<div>
									<span class="delPrice">￥19,100</span>
									<span class="price">￥22,000<span>起</span></span>
								</div>
							</div>
							<a class="grayBorderBtn" href="itinerary-london-paris-madrid.php">查看行程</a>
						</a>
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
		<!-- Show the interaction effect, can be removed it later -->
		<script src="js/triggeredLeadPop.js" type="text/javascript"></script>
		<!-- Show the interaction effect, can be removed it later -->
		<script type="text/javascript" src='../lib/services.js'></script>
	    <!--leads and pages --> 
	    <script type="text/javascript" src='js/func.js'></script>		
		<script>		
		// $('#guide-lead-submit-button').click(
		// 	function()
		// 	{
		// 		bs_trackClick(bs_getEventCategory(), "Lead Form Submission");	
		 
		//  		Lead_Validation("guides-form", "Lead_Insert", null, true);
		// 	} 
		// );

		function Guide_Form_Submit()
		{	
		 bs_trackClick(bs_getEventCategory(), "Lead Form Submission");	
		 
		 Lead_Validation("guides-form", "Lead_Insert", null, true);
		}
		</script>
	</body>
</html>

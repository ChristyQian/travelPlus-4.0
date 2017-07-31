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
					<div class="site">
						<div class="browse-banner">
							<div class="browse-banner-bg"><img class="browse-banner-overlay" src="img/itinerary/billboard/Grand-Tour-of-Spain.jpg" width="100%"/></div>
							<div class="site browse-banner-content">
								<div class="leftWrap">
									<div>
										<div class="landingInfo">
											<div class="transparentBg"></div>
											<div class="transparentTxt">
												<h5>Spain Tours</h5>
												<h1>玩在西班牙</h1>
												<p>从马德里的博物馆，到塞尔维亚奔放热情的弗拉门戈，从流动的建筑博物馆巴塞罗那，到直布罗陀海峡的黄金海岸。作为世界文化遗产最多的国家之一，热情洋溢的西班牙同时还人文荟萃。三大宗教先后统治这片土地，各自留下了灿烂的文化。
												</p>
											</div>
										</div>		
										<div class="card">
										<!-- <ul class="ups">
												<li><i class="localGuide"></i>外籍导游和中方领队，带你融入当地</li>
												<li><i class="like-minded"></i>结识有趣同龄伙伴，旅程更添精彩</li>
												<li><i class="freeTime"></i>行程合理规划，自由时间自在享受</li>
											</ul> -->
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
								 
								 Lead_Validation("sp-form", "Lead_Insert", "landingThankYou.php", true);
								}
								</script>
								<div class="rightWrap">
									<div class="browse-banner-content-box">
										<h5>下载独家攻略，寻找出游灵感</h5>
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

												<button id="lead-submit-button" onclick="Quotation_Form_Submit()" class="orangeBtn" >提交查询</button>
											</div>
										</div>
										<div class="ibWrap downloadBg">
											<img class="blockImg" src="img/download.gif" height="55"/>
											<p>提交表单<br/>下载独家攻略</p>
										</div>
										<div class="oTrCorner"><img src="img/Brochure.png" width="45" /></div>	
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
				<h4>"西班牙"相关行程<span class="frNote">共4条结果</span></h4>
				<div class="flex-row-start-start flex-flow">
					<div id="barcelona-southern-france-the-italian-riviera" name="home-trip-box" class="home-trip-box" data-dest="it,fr,sp" data-tag="art,nature,seaview,honeymoon,family">
						<a href="itinerary-barcelona-southern-france-the-italian-riviera.php" >	
							<div class="offerOutWrap">									
								<div class="offerWrap earlyBird">
									<div class="offerArrow"></div>	
									<div>早鸟优惠</div>
								</div>
								<div class="offerWrap date">
									<!-- <div class="offerArrow"></div> -->									
									<div>圣诞 / 元旦 / 春节出发</div>
								</div>
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
										<div>早鸟优惠</div>
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
										一趟旅程，就能体验到三种截然不同地中海风情！充满艺术气息的巴塞罗那，拥有沁人海洋的南法，传奇之地佛罗伦萨和美丽五渔村！
									</div>
									<div class="itiPrice">
										<span class="delPrice">￥19,100</span>
										<span class="price">￥21,800<span>起</span></span>
									</div>
									<button class="yellowBtn">查看行程</button>
								</div>
							</a>
					    </div>
					    <div id="food-wine-a-taste-of-spain" name="home-trip-box" class="home-trip-box" data-dest="sp" data-tag="history,art,nature,seaview,honeymoon,food">
						<a href="itinerary-food-wine-a-taste-of-spain.php" >	
							<div class="offerOutWrap">									
								<div class="offerWrap date">
									<!-- <div class="offerArrow"></div> -->									
									<div>圣诞 / 元旦 / 春节出发</div>
								</div>
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
							<div class="offerOutWrap">									
								<div class="offerWrap date">
									<!-- <div class="offerArrow"></div> -->									
									<div>圣诞 / 元旦 / 春节出发</div>
								</div>
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
								<div class="itiPrice">
									<span class="delPrice">￥19,100</span>
									<span class="price">￥22,000<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>
							</div>
						</a>
				    </div>
				    </div>	
				    <h4>限时优惠</h4>
				    <div class="flex-row-start-start flex-flow">													
					<div id="barcelona-southern-france-the-italian-riviera" name="home-trip-box" class="home-trip-box" data-dest="it,fr,sp" data-tag="art,nature,seaview,honeymoon,family">
						<a href="itinerary-barcelona-southern-france-the-italian-riviera.php" >
							<div class="offerOutWrap">									
								<div class="offerWrap earlyBird">
									<div class="offerArrow"></div>	
									<div>早鸟优惠</div>
								</div>
								<div class="offerWrap date">
									<!-- <div class="offerArrow"></div> -->									
									<div>圣诞 / 元旦 / 春节出发</div>
								</div>
							</div>
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/Barcelona,-Southern-France-&-the-Italian-Riviera.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">西法意城市狂想</div>
								<div class="itiDess">巴塞罗那 - 南法 - 五渔村 - 佛罗伦萨</div>
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
				    <div id="jewels-of-alpine-europe" name="home-trip-box" class="home-trip-box" data-dest="it,fr,ge,swz,austria" data-tag="history,art,honeymoon">
						<a href="itinerary-jewels-of-alpine-europe.php" >
							<div class="offerOutWrap">									
								<div class="offerWrap earlyBird">
									<div class="offerArrow"></div>	
									<div>早鸟优惠</div>
								</div>
								<div class="offerWrap date">
									<!-- <div class="offerArrow"></div> -->									
									<div>圣诞 / 元旦 / 春节出发</div>
								</div>
							</div>	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/jewels-of-alpine-europe.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">阿尔卑斯山环游之旅</div>
								<div class="itiDess">瑞士 - 法国 - 意大利 - 奥地利 - 德国</div>
								<div class="itiDays">13天</div>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
								</div>
								<div class="itiIntro">
									从瑞士卢塞恩湖游历到法国安纳西，前往风景如画的峡谷，沿科莫湖闲庭信步，穿过列支敦士登一路直达冬季仙境因斯布鲁克和巴伐利亚首府慕尼黑。
								</div>
								<div class="itiPrice">
									<span class="delPrice">￥19,100</span>
									<span class="price">￥23,400<span>起</span></span>
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
									<div>早鸟优惠</div>
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
								<div class="itiDess">马德里 - 格拉纳达 - 瓦伦西亚 - 巴塞罗那</div>
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
				    <div id="scandinavia-the-capitals-the-fjords" name="home-trip-box" class="home-trip-box" data-dest="nw,swd,dm" data-tag="history,art,seaview,northeuro">
						<a href="itinerary-scandinavia-the-capitals-the-fjords.php" >
							<div class="offerOutWrap">									
								<div class="offerWrap earlyBird">
									<div class="offerArrow"></div>	
									<div>早鸟优惠</div>
								</div>
								<div class="offerWrap date">
									<!-- <div class="offerArrow"></div> -->									
									<div>圣诞 / 元旦 / 春节出发</div>
								</div>
							</div>	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/scandinavia-the-capitals-the-fjords.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">北欧多元首都之旅</div>
								<div class="itiDess">马德里 - 格拉纳达 - 瓦伦西亚 - 巴塞罗那</div>
								<div class="itiDays">11天</div>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
								</div>
								<div class="itiIntro">
									若不是亲眼所见，你很难想象北欧的峡湾是如何蜿蜒壮美。你将会在旅程种领略斯堪的纳维亚的神奇，从挪威到丹麦以及斯德哥尔摩，在世界闻名的宜居城市探索海上故事和现代建筑！
								</div>	
								<div class="itiPrice">
									<span class="delPrice">￥19,100</span>
									<span class="price">￥27,300<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>							
							</div>
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
	</body>
</html>
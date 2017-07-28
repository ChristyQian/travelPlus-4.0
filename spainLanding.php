<!DOCTYPE html>
<html>
<?php 
	$pageName="Tours to Spain & Europe";
	$tagTitle="landing - EF TravelPlus | 英孚旅游+";
	$metaTitle="欧洲游线路_澳大利亚旅游_美国旅游_极光旅游_迪拜旅游_线路推荐_限时特惠线路_假期出国游";
	$metaKeywords="澳大利亚旅游，美国旅游，极光旅游，迪拜旅游，德瑞奥，德国旅游，奥地利旅游，荷兰旅游，瑞士旅游，丹麦旅游，爱尔兰旅游，瑞典旅游，吃货行程，美食之旅，法国旅游，西班牙旅游，意大利旅游，英国旅游，希腊旅游，北欧旅游，春节欧洲游，长假欧洲游，欧洲线路推荐，限时优惠，国庆出境，十一长假，EFTravelPlus";
	$metaDescription="英孚旅游+，根据热门季节、个人爱好等旅行元素，精心设计行程，带来更多元的主题线路和更优的旅行体验，真正融入异国文化，捕捉旅程中的每次怦然心动与惊喜。";

    include_once("all-trips-head.php"); 
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
											<form id="sp-form">
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

											<button id = "lead-submit-button" onclick="Quotation_Form_Submit()" class="orangeBtn" >提交查询</button>
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
				    <!-- <div id="grand-tour-of-spain" name="home-trip-box" class="home-trip-box" data-dest="sp" data-tag="history,nature,seaview,honeymoon,food">
						<a href="itinerary-grand-tour-of-spain.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/grand-tour-of-spain.jpg" alt="" />
								<div class="hotSale">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt">国庆档</div>
										<div class="pinkTxt">2人同行，1人半价</div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									西班牙全景深度游 <br/>
									马德里 - 格拉纳达 - 瓦伦西亚 - 巴塞罗那
								</p>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
								</div>
								<div>
									14天
									<span class="delPrice">￥19,100</span>
									<span class="price">￥21,800<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				    <div id="scandinavia-the-capitals-the-fjords" name="home-trip-box" class="home-trip-box" data-dest="nw,swd,dm" data-tag="history,art,seaview,northeuro">
						<a href="itinerary-scandinavia-the-capitals-the-fjords.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/scandinavia-the-capitals-the-fjords.jpg" alt="" />
								<div class="hotSale">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt">国庆档</div>
										<div class="pinkTxt">2人同行，1人半价</div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									北欧多元首都之旅 <br/>
									斯德哥尔摩 - 卑尔根 - 哥本哈根
								</p>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
								</div>
								<div>
									11天
									<span class="delPrice">￥19,100</span>
									<span class="price">￥27,300<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>				   
					<div id="wonders-of-dubai-and-abu-dhabi" name="home-trip-box" class="home-trip-box" data-dest="db" data-tag="nature,seaview">
						<a href="itinerary-wonders-of-dubai-and-abu-dhabi.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/wonders-of-dubai-and-abu-dhabi.jpg" alt="" />
								<div class="hotSale" style="display:none;">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt"></div>
										<div class="pinkTxt"></div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									燃情阿联酋之旅 <br/>
									迪拜 - 阿布扎比 - 艾恩
								</p>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div>
									8天
									<span class="delPrice">￥</span>
									<span class="price">￥<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>	 				
					<div id="adventures-in-australia" name="home-trip-box" class="home-trip-box" data-dest="australia" data-tag="nature,seaview,honeymoon,family">
						<a href="itinerary-adventures-in-australia.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/adventures-in-australia.jpg" alt="" />
								<div class="hotSale" style="display:none;">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt"></div>
										<div class="pinkTxt"></div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									澳大利亚东海岸纵情之旅 <br/>
									凯恩斯 - 布里斯班 - 悉尼
								</p>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div>
									14天
									<span class="delPrice">￥19,100</span>
									<span class="price">￥27,360<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				    <div id="grand-tour-of-california" name="home-trip-box" class="home-trip-box" data-dest="wus" data-tag="art,nature,seaview,honeymoon,family">
						<a href="itinerary-grand-tour-of-california.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/grand-tour-of-california.jpg" alt="" />
								<div class="hotSale" style="display:none;">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt"></div>
										<div class="pinkTxt"></div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									圆梦加州畅游之旅 <br/>
									旧金山 - 优胜美地 - 圣芭芭拉 - 洛杉矶
								</p>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div>
									11天
									<span class="delPrice">￥</span>
									<span class="price">￥23,000<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				    <div id="icy-reykjavik-the-northern-lights" name="home-trip-box" class="home-trip-box" data-dest="ic" data-tag="nature,honeymoon,northeuro">
						<a href="itinerary-icy-reykjavik-the-northern-lights.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/icy-reykjavik-the-northern-lights.jpg" alt="" />
								<div class="hotSale" style="display:none;">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt"></div>
										<div class="pinkTxt"></div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									冰岛奇幻北极光之旅 <br/>
									雷克雅维克 - 冰岛西部
								</p>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div>
									9天
									<span class="delPrice">￥</span>
									<span class="price">￥22,000<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				    <div id="food-wine-northern-italy-the-italian-riviera" name="home-trip-box" class="home-trip-box" data-dest="it" data-tag="art,nature,seaview,honeymoon,food">
						<a href="itinerary-food-wine-northern-italy-the-italian-riviera.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/Food-&-Wine--Northern-Italy-&-the-Italian-Riviera.jpg" alt="" />
								<div class="hotSale" style="display:none;">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt">国庆档</div>
										<div class="pinkTxt">2人同行，1人半价</div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									食在意大利：食物与酒的美学 <br/>
									都灵 - 意属里维耶拉 - 博洛尼亚 - 米兰
								</p>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div>
									12天
									<span class="delPrice">￥22,800</span>
									<span class="price">￥21,500<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>	
					<div id="italy-greece" name="home-trip-box" class="home-trip-box" data-dest="it,gr" data-tag="history,nature,seaview,honeymoon">
						<a href="itinerary-italy-greece.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/italy-greece.jpg" alt="" />
								<div class="hotSale" style="display:none;">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt">暑期档</div>
										<div class="pinkTxt">仅剩4席</div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									地中海完美假期 <br/>
									意大利 - 希腊
								</p>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div>
									11天
									<span class="delPrice">￥19,100</span>
									<span class="price">￥21,900<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
					<div id="highlights-of-northern-europe-london-to-copenhagen" name="home-trip-box" class="home-trip-box" data-dest="uk,ge,dm,nz,bg" data-tag="history,art,honeymoon,northeuro">
						<a href="itinerary-highlights-of-northern-europe-london-to-copenhagen.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/Highlights-of-Northern-Europe--London-to-Copenhagen.jpg" alt="" />
								<div class="hotSale" style="display:none;">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt">暑期档</div>
										<div class="pinkTxt">仅剩4席</div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									一路向北欧洲之旅 <br/>
									伦敦 - 安特卫普 - 阿姆斯特丹 - 汉堡 - 哥本哈根
								</p>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div>
									12天
									<span class="delPrice">￥19,100</span>
									<span class="price">￥24,600<span>起</span></span>
								</div>
							</div>
						</a>
				   </div>
				   <div id="rome-paris-athens" name="home-trip-box" class="home-trip-box" data-dest="fr,it,gr" data-tag="history,art,family">
						<a href="itinerary-rome-paris-athens.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/Rome-Paris-Greece.jpg" alt="" />
								<div class="hotSale" style="display:none;">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt">暑期档</div>
										<div class="pinkTxt">仅剩4席</div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									城市生活与艺术之旅<br/>
									巴黎 - 罗马 - 雅典
								</p>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div>
									11天
									<span class="delPrice">￥19,100</span>
									<span class="price">￥25,600<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
					<div id="germany-switzerland-austria" name="home-trip-box" class="home-trip-box" data-dest="ge,swz,austria" data-tag="history,art,nature">
						<a href="itinerary-germany-switzerland-austria.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/germany-switzerland-austria.jpg" alt="" />
								<div class="hotSale" style="display:none;">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt">暑期档</div>
										<div class="pinkTxt">仅剩4席</div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									原味欧洲，古堡奇幻之旅 <br/>
									德国 - 瑞士 - 奥地利
								</p>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div>
									14天
									<span class="delPrice">￥19,100</span>
									<span class="price">￥22,700<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				    <div id="venice-florence-rome" name="home-trip-box" class="home-trip-box" data-dest="it" data-tag="history,art,honeymoon">
						<a href="itinerary-venice-florence-rome.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/venice-florence-rome.jpg" alt="" />
								<div class="hotSale" style="display:none;">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt">暑期档</div>
										<div class="pinkTxt">仅剩4席</div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									意大利文艺复兴之旅 <br/>
									威尼斯 - 佛罗伦萨 - 罗马
								</p>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div>
									12天
									<span class="delPrice">￥19,100</span>
									<span class="price">￥18,500<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				    <div id="food-wine-a-taste-of-spain" name="home-trip-box" class="home-trip-box" data-dest="sp" data-tag="history,art,nature,seaview,honeymoon,food">
						<a href="itinerary-food-wine-a-taste-of-spain.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/Food-&-Wine_A-Taste-of-Spain.jpg" alt="" />
								<div class="hotSale" style="display:none;">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt">暑期档</div>
										<div class="pinkTxt">仅剩4席</div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									食在西班牙：爱在唇齿留香间 <br/>
									巴塞罗那 - 圣塞瓦斯蒂安 - 拉里奥哈 - 马德里
								</p>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div>
									11天
									<span class="delPrice">￥19,100</span>
									<span class="price">￥23,400<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				    <div id="london-edinburgh-dublin" name="home-trip-box" class="home-trip-box" data-dest="uk,sc,ir" data-tag="history,art,nature,honeymoon">
						<a href="itinerary-london-edinburgh-dublin.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/london-edinburgh-dublin.jpg" alt="" />
								<div class="hotSale" style="display:none;">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt">暑期档</div>
										<div class="pinkTxt">仅剩4席</div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									恋恋翡翠岛，“英爱”而行 <br/>
									伦敦 - 爱丁堡 - 都柏林
								</p>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div>
									9天
									<span class="delPrice">￥19,100</span>
									<span class="price">￥23,200<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				    <div id="london-paris-madrid" name="home-trip-box" class="home-trip-box" data-dest="uk,fr,sp" data-tag="art,honeymoon">
						<a href="itinerary-london-paris-madrid.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/london-paris-madrid.jpg" alt="" />
								<div class="hotSale" style="display:none;">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt">暑期档</div>
										<div class="pinkTxt">仅剩4席</div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									欧洲都市文化精品游 <br/>
									伦敦 - 巴黎 - 马德里
								</p>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div>
									11天
									<span class="delPrice">￥19,100</span>
									<span class="price">￥22,000<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				    <div id="rome-paris-london" name="home-trip-box" class="home-trip-box" data-dest="it,fr,uk" data-tag="history,art">
						<a href="itinerary-rome-paris-london.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/rome-paris-london.jpg" alt="" />
								<div class="hotSale" style="display:none;">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt">暑期档</div>
										<div class="pinkTxt">仅剩4席</div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									意法英三都历史重温之旅 <br/>
									罗马 - 巴黎 - 伦敦
								</p>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div>
									11天
									<span class="delPrice">￥19,100</span>
									<span class="price">￥21,300<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				    <div id="paris-the-riviera-tuscany" name="home-trip-box" class="home-trip-box" data-dest="it,fr" data-tag="art,nature,seawiew,honeymoon,food">
						<a href="itinerary-paris-the-riviera-tuscany.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/paris-the-riviera-tuscany.jpg" alt="" />
								<div class="hotSale" style="display:none;">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt">暑期档</div>
										<div class="pinkTxt">仅剩4席</div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									意法活力骄阳城市之旅 <br/>
									巴黎 - 里维埃拉 - 托斯卡纳
								</p>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div>
									14天
									<span class="delPrice">￥19,100</span>
									<span class="price">￥25,500<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				    <div id="switzerland-alsace-the-black-forest" name="home-trip-box" class="home-trip-box" data-dest="swz,fr,ge" data-tag="art,nature">
						<a href="itinerary-switzerland-alsace-the-black-forest.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/switzerland-alsace-the-black-forest.jpg" alt="" />
								<div class="hotSale" style="display:none;">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt">暑期档</div>
										<div class="pinkTxt">仅剩4席</div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									瑞士、阿尔萨斯和黑森林之旅<br/>
									瑞士 - 法国 - 德国
								</p>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div>
									12天
									<span class="delPrice">￥19,100</span>
									<span class="price">￥26,300<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				    <div id="food-wine-france-through-bordeaux-the-loire-valley" name="home-trip-box" class="home-trip-box" data-dest="fr" data-tag="nature,honeymoon,food">
						<a href="itinerary-food-wine-france-through-bordeaux-the-loire-valley.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/Food-&-Wine_France-through-Bordeaux-&-the-Loire-Valley.jpg" alt="" />
								<div class="hotSale" style="display:none;">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt">暑期档</div>
										<div class="pinkTxt">仅剩4席</div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									食在法国：美食与葡萄酒之旅 <br/>
									图卢兹 - 波尔多 - 佩里格 - 巴黎 
								</p>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div>
									11天
									<span class="delPrice">￥19,100</span>
									<span class="price">￥22,700<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				    <div id="rome-sorrento-sicily" name="home-trip-box" class="home-trip-box" data-dest="it" data-tag="history,seaview">
						<a href="itinerary-rome-sorrento-sicily.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/Sorrento-Rome-Sicily.jpg" alt="" />
								<div class="hotSale" style="display:none;">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt">暑期档</div>
										<div class="pinkTxt">仅剩4席</div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									意大利南部甜蜜慢生活之旅 <br/>
									罗马 - 索伦托 - 西西里
								</p>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div>
									11天
									<span class="delPrice">￥19,100</span>
									<span class="price">￥21,000<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
					<div id="grand-tour-of-italy" name="home-trip-box" class="home-trip-box" data-dest="it" data-tag="history,art,seaview,honeymoon">
						<a href="itinerary-grand-tour-of-italy.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/grand-tour-of-italy.jpg" alt="" />
								<div class="hotSale" style="display:none;">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt">暑期档</div>
										<div class="pinkTxt">仅剩4席</div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									意大利全景深度游 <br/>
									科莫湖 - 威尼斯 - 佛罗伦萨 - 罗马
								</p>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div>
									15天
									<span class="delPrice">￥19,100</span>
									<span class="price">￥22,600<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				    <div id="london-paris-rome" name="home-trip-box" class="home-trip-box" data-dest="uk,fr,it" data-tag="history,art">
						<a href="itinerary-london-paris-rome.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/london-paris-rome.jpg" alt="" />
								<div class="hotSale" style="display:none;">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt">暑期档</div>
										<div class="pinkTxt">仅剩4席</div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									英法意三都文化经典游 <br/>
									伦敦 - 巴黎 - 罗马
								</p>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div>
									11天
									<span class="delPrice">￥19,100</span>
									<span class="price">￥22,300<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				     <div id="london-paris-amsterdam" name="home-trip-box" class="home-trip-box" data-dest="uk,fr,nz" data-tag="history,art,honeymoon">
						<a href="itinerary-london-paris-amsterdam.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/london-paris-amsterdam.jpg" alt="" />
								<div class="hotSale" style="display: none;">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt">国庆档</div>
										<div class="pinkTxt">早鸟减5%</div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									邂逅惬意欧洲之旅 <br/>
									伦敦 - 巴黎 - 阿姆斯特丹
								</p>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div>
									11天
									<span class="delPrice">￥19,100</span>
									<span class="price">￥22,500<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>	
					<div id="moet-paris-reims" name="home-trip-box" class="home-trip-box" data-dest="fr" data-tag="history,art,nature,honeymoon,food">
						<a href="itinerary-moet-paris-reims.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/moet-paris-reim.jpg" alt="" />
								<div class="hotSale" style="display: none;">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt">美食美酒</div>
										<div class="pinkTxt">早鸟减5%</div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									Moët酩悦香槟法国微醺之旅 <br/>
									巴黎 - 香槟区埃佩尔奈 - 香槟区兰斯
								</p>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div>
									9天
									<span class="delPrice">￥24,600</span>
									<span class="price">￥24,600<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				</div>
			</div>
			<div class="section" id="offerSection">
				<h4>限时优惠</h4>
				<div class="flex-row-start-start flex-flow">													
					<div id="barcelona-southern-france-the-italian-riviera" name="home-trip-box" class="home-trip-box" data-dest="it,fr,sp" data-tag="art,nature,seaview,honeymoon,family">
						<a href="itinerary-barcelona-southern-france-the-italian-riviera.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/Barcelona,-Southern-France-&-the-Italian-Riviera.jpg" alt="" />
								<div class="hotSale">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt">国庆档</div>
										<div class="pinkTxt">2人同行，1人半价</div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									西法意城市狂想 <br/>
									巴塞罗那 - 南法 - 五渔村 - 佛罗伦萨
								</p>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
								</div>
								<div>
									12天
									<span class="delPrice">￥21,100</span>
									<span class="price">￥21,000<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>				    			    				    
				    <div id="jewels-of-alpine-europe" name="home-trip-box" class="home-trip-box" data-dest="it,fr,ge,swz,austria" data-tag="history,art,honeymoon">
						<a href="itinerary-jewels-of-alpine-europe.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/jewels-of-alpine-europe.jpg" alt="" />
								<div class="hotSale">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt">国庆档</div>
										<div class="pinkTxt">2人同行，1人半价</div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									阿尔卑斯山环游之旅 <br/>
									瑞士 - 法国 - 意大利 - 奥地利 - 德国
								</p>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
								</div>
								<div>
									13天
									<span class="delPrice">￥19,100</span>
									<span class="price">￥23,400<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>	
				    <div id="grand-tour-of-spain" name="home-trip-box" class="home-trip-box" data-dest="sp" data-tag="history,nature,seaview,honeymoon,food">
						<a href="itinerary-grand-tour-of-spain.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/grand-tour-of-spain.jpg" alt="" />
								<div class="hotSale">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt">国庆档</div>
										<div class="pinkTxt">2人同行，1人半价</div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									西班牙全景深度游 <br/>
									马德里 - 格拉纳达 - 瓦伦西亚 - 巴塞罗那
								</p>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
								</div>
								<div>
									14天
									<span class="delPrice">￥19,100</span>
									<span class="price">￥21,800<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				    <div id="scandinavia-the-capitals-the-fjords" name="home-trip-box" class="home-trip-box" data-dest="nw,swd,dm" data-tag="history,art,seaview,northeuro">
						<a href="itinerary-scandinavia-the-capitals-the-fjords.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/scandinavia-the-capitals-the-fjords.jpg" alt="" />
								<div class="hotSale">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt">国庆档</div>
										<div class="pinkTxt">2人同行，1人半价</div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									北欧多元首都之旅 <br/>
									斯德哥尔摩 - 卑尔根 - 哥本哈根
								</p>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
								</div>
								<div>
									11天
									<span class="delPrice">￥19,100</span>
									<span class="price">￥27,300<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>	 -->			   
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
		<script>
			function init(){
				// $('#offerSection').show();
				$('#allDestSection').show();
			}

			function changeTitle(){
				var title = $('#allDestSection').children('h4');
				var dest = document.getElementById('destination').options[document.getElementById('destination').selectedIndex].value;
				if (dest == 'all') {
					title.text('全部行程');
				}
				else {
					title.text('相关行程');
				}
			}
			// function smartSection(sectionID){
			// 	var segment = 'inline';
			// 	var arryWrap = $('#'+sectionID).children('.flex-flow');
			// 	var childArry = arryWrap.children('div');						
			// 	for (var i=0;i<childArry.length;i++) {
			// 		var status = false;	
			// 		var styleVal = childArry[i].style.display;						
			// 		if (styleVal !== segment) {
			// 			continue;						
			// 		}
			// 		else {
			// 			status = true;
			// 			break;
			// 		} 
			// 		return status;
			// 	}
			// 	if (status == false) {
			// 		$('#'+sectionID).hide();
			// 		$('.site').css('padding-top',0);
			// 	}
			// 	else {
			// 		$('#'+sectionID).show();
			// 	}
			// }
			
			function myaffix() {
				var affixoffset = $('.filter').offset().top;
				$(window).scroll(function () {
				    if ($(window).scrollTop() <= affixoffset) {
				        $('.filter').removeClass('affix');
				    } else {
				        $('.filter').addClass('affix');
				    }
				});
			};
			$(document).ready(function () {
			   myaffix();
			   $(window).on("resize", function () {
			       myaffix();
			   });
			});

			$('.section.filter.editModel .site .expandIcon').click(function(){
				if($(this).children('i').hasClass('fa-chevron-down')){
					$('.section.filter.editModel.affix').addClass('expand');
					$(this).children('i').removeClass('fa-chevron-down').addClass('fa-chevron-up');
				}
				else {
					$('.section.filter.editModel.affix').removeClass('expand');
					$(this).children('i').removeClass('fa-chevron-up').addClass('fa-chevron-down');
				}
			});

			$('.checkbox').click(function(){
				if($(this).hasClass('checked')){
					$(this).removeClass('checked');
					event.stopPropagation();
				}
				else {
					$(this).addClass('checked');
					event.stopPropagation();
				}
			});
			$('.edit').click(function(){
				$('.filterResult').hide();
				$('.editModel').show();
			});
			$('.search').click(function(){
				init();
				// smartSection('offerSection');
				// smartSection('allDestSection');
				$('.filterResult').show();
				$('.editModel').hide();
				changeTitle();
				// var shiftSection = $('#offerSection').clone();
				// $('#offerSection').hide();
				// shiftSection.insertAfter($('#otherSection'));
			});
			$('.dropdown-switcher').click(function(){
				$('.dropdown').show();
			});
			$('.dropdown ul li').click(function(){
				$('.dropdown').hide();
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

			var dest = "<?php echo $_REQUEST['dest']; ?>";
			if (dest != "")
				$("#destination").val("<?php echo $_REQUEST['dest']; ?>");
			var tags = "<?php echo $_REQUEST['tag']; ?>";
			if (tags != ""){
				var arr = tags.split(',');
				for(var i in arr){
					$("#tag-" + arr[i]).addClass('checked');
				}
			}
				
			Trip_Filter();

			$('.orangeBtn').click(function(){
				$('.filter').removeClass('affix-top').hasClass('affix');
			});
		</script>
	</body>
</html>

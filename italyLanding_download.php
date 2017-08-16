<!DOCTYPE html>
<html>
<?php 
	$pageName="Tours to Italy & Europe";
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
								<a class="dark" href="#">意大利</a>
								<i class="fa fa-chevron-right" data-reactid="228"></i>
							</li>
						</ul>
					</div>
					<div class="site" data-target="#card">
						<div class="browse-banner">
							<div class="browse-banner-bg"><img class="browse-banner-overlay" src="img/itinerary/billboard/Italy.jpg" width="100%"/></div>
							<div class="site browse-banner-content">
								<div class="leftWrap">
									<div class="">
										<div class="landingInfo">
											<div class="transparentBg"></div>
											<div class="transparentTxt">
												<h5>Italy Tours</h5>
												<h1>玩在意大利</h1>
												<p>璀璨的文艺复兴，伟大而悠久的罗马文明，巴洛克哥特式的建筑，享誉世界的美食大国，时尚奢侈品天堂，意大利处处都是经典，美妙不言而喻。
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
								 
								 Lead_Validation("sp-form", "Lead_Insert", "spainLanding_download_thankyou.php", true);
								}
								</script>
								<div class="rightWrap">
									<h5 class="rightWrapHead">下载独家攻略，寻找出游灵感&nbsp;&gt;&gt;</h5>									
									<div class="browse-banner-content-box">
										<h5>下载独家攻略，寻找出游灵感
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

												<button id="lead-submit-button" onclick="Quotation_Form_Submit()" class="orangeBtn" >下载攻略</button>
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
				<h4>"意大利"相关行程<span class="frNote">共11条结果</span></h4>
				<div class="flex-row-start-start flex-flow">
					<div id="jewels-of-alpine-europe" name="home-trip-box" class="home-trip-box" data-dest="it,fr,ge,swz,austria" data-tag="history,art,honeymoon">
						<a href="itinerary-jewels-of-alpine-europe.php" >
							<div class="offerOutWrap">									
								<div class="offerWrap date">
									<!-- <div class="offerArrow"></div> -->									
									<div>国庆保证出团，仅剩&nbsp;4&nbsp;席</div>
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
				    <div id="food-wine-northern-italy-the-italian-riviera" name="home-trip-box" class="home-trip-box" data-dest="it" data-tag="art,nature,seaview,honeymoon,food">
						<a href="itinerary-food-wine-northern-italy-the-italian-riviera.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/Food-&-Wine--Northern-Italy-&-the-Italian-Riviera.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">食在意大利：食物与酒的美学</div>
								<div class="itiDess">
									都灵 - 意属里维耶拉 - 博洛尼亚 - 米兰
								</div>	
								<div class="itiDays">12天</div>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div class="itiIntro">
									在里维耶拉欣赏美景、品尝葡萄酒，在博洛尼亚品尝当地纯正的干酪和香醋，此外你还将亲自动手烹饪美食，探寻舌尖上的意大利。
								</div>
								<div class="itiPrice">										
									<span class="delPrice">￥21,100</span>
									<span class="price">￥21,500<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>								
							</div>
						</a>
				    </div>
				    <div id="italy-greece" name="home-trip-box" class="home-trip-box" data-dest="it,gr" data-tag="history,nature,seaview,honeymoon">
						<a href="itinerary-italy-greece.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/italy-greece.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">地中海完美假期风光之旅</div>
								<div class="itiDess">
									意大利 - 希腊
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
									当穿梭在意大利和希腊的标志性城市时，古代神话的面纱也渐渐被你揭开。花上一个假期，坐下来静静享受索伦托和卡普里岛的悠闲地中海生活，细细品味罗马和雅典的悠久历史吧！
								</div>
								<div class="itiPrice">										
									<span class="delPrice">￥21,100</span>
									<span class="price">￥21,900<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>								
							</div>
						</a>
				    </div>
				    <div id="rome-paris-athens" name="home-trip-box" class="home-trip-box" data-dest="fr,it,gr" data-tag="history,art,family">
						<a href="itinerary-rome-paris-athens.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/Rome-Paris-Greece.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">城市生活与艺术之旅</div>
								<div class="itiDess">
									巴黎 - 罗马 - 雅典
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
									几个世纪以来，艺术家们纷纷涌入了巴黎和罗马，现在轮到你了！在这趟旅程中，你将会有足够的时间去探索这两座欧洲著名城市，古老的希腊神话也会让你爱上雅典。
								</div>
								<div class="itiPrice">										
									<span class="delPrice">￥21,100</span>
									<span class="price">￥25,600<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>								
							</div>
						</a>
				    </div>
				    <div id="venice-florence-rome" name="home-trip-box" class="home-trip-box" data-dest="it" data-tag="history,art,honeymoon">
						<a href="itinerary-venice-florence-rome.php" >	
							<div class="offerOutWrap">									
								<div class="offerWrap date">
									<!-- <div class="offerArrow"></div> -->									
									<div>圣诞 / 元旦 / 春节出发</div>
								</div>
							</div>
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/venice-florence-rome.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">意大利文艺复兴之旅</div>
								<div class="itiDess">
									威尼斯 - 佛罗伦萨 - 罗马
								</div>	
								<div class="itiDays">12天</div>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div class="itiIntro">
									在威尼斯感受不紧不慢的浪漫生活，在佛罗伦萨与数之不尽的教堂建筑亲密接触，在罗马重温古时文明，从食物到生活方式，一起来全方位感受意大利的活力和文艺复兴的传奇往事吧！
								</div>
								<div class="itiPrice">										
									<span class="delPrice">￥21,100</span>
									<span class="price">￥18,500<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>								
							</div>
						</a>
				    </div>
				    <div id="rome-paris-london" name="home-trip-box" class="home-trip-box" data-dest="it,fr,uk" data-tag="history,art">
						<a href="itinerary-rome-paris-london.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/rome-paris-london.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">意法英三都历史重温之旅</div>
								<div class="itiDess">
									罗马 - 巴黎 - 伦敦
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
									从南到北游历欧洲，在世界闻名的三个城市停留，在这趟旅程中，从古老的罗马到浪漫巴黎、优雅而迷离的伦敦，你将看到令人惊叹的建筑，现代的杰作和引人入胜的历史足迹。
								</div>
								<div class="itiPrice">										
									<span class="delPrice">￥21,100</span>
									<span class="price">￥21,300<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>								
							</div>
						</a>
				    </div>
				    <div id="paris-the-riviera-tuscany" name="home-trip-box" class="home-trip-box" data-dest="it,fr" data-tag="art,nature,seawiew,honeymoon,food">
						<a href="itinerary-paris-the-riviera-tuscany.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/paris-the-riviera-tuscany.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">意法活力骄阳城市之旅</div>
								<div class="itiDess">
									巴黎 - 里维埃拉 - 托斯卡纳
								</div>	
								<div class="itiDays">14天</div>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div class="itiIntro">
									浓厚的历史，神奇的博物馆，迷人风景和难忘美味，这些都是我们热爱法国和意大利的理由。这趟旅程我们将从巴黎来到普罗旺斯，然后继续沿着意属里维埃拉前往托斯卡纳，感受文化天堂的活力！
								</div>
								<div class="itiPrice">										
									<span class="delPrice">￥21,100</span>
									<span class="price">￥25,500<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>								
							</div>
						</a>
				    </div>
				    <div id="rome-sorrento-sicily" name="home-trip-box" class="home-trip-box" data-dest="it" data-tag="history,seaview">
						<a href="itinerary-rome-sorrento-sicily.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/Sorrento-Rome-Sicily.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">意大利南部甜蜜慢生活之旅</div>
								<div class="itiDess">
									罗马 - 索伦托 - 西西里
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
									漫步在罗马的古遗迹，躺在地中海阳光海岸边晒太阳，这趟意大利南部之旅将完成你对完美旅行的想象。从索伦托峭壁到西西里的宁静桔园，甜蜜慢生活由此开始。
								</div>
								<div class="itiPrice">										
									<span class="delPrice">￥21,100</span>
									<span class="price">￥21,000<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>								
							</div>
						</a>
				    </div>
				    <div id="grand-tour-of-italy" name="home-trip-box" class="home-trip-box" data-dest="it" data-tag="history,art,seaview,honeymoon">
						<a href="itinerary-grand-tour-of-italy.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/grand-tour-of-italy.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">意大利全景深度游</div>
								<div class="itiDess">
									科莫湖 - 威尼斯 - 佛罗伦萨 - 罗马
								</div>	
								<div class="itiDays">15天</div>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div class="itiIntro">
									这个融合了历史、人文美景的国度，为旅行增添了无限的可能性。在这趟意大利的深度游览旅程中，你将来到传奇的威尼斯、佛罗伦萨和罗马，也会来到小而美的城镇阿西西和费拉拉。
								</div>
								<div class="itiPrice">										
									<span class="delPrice">￥21,100</span>
									<span class="price">￥22,600<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>								
							</div>
						</a>
				    </div>
				    <div id="london-paris-rome" name="home-trip-box" class="home-trip-box" data-dest="uk,fr,it" data-tag="history,art">
						<a href="itinerary-london-paris-rome.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/london-paris-rome.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">英法意三都文化经典游</div>
								<div class="itiDess">
									伦敦 - 巴黎 - 罗马
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
									在过去的2000年里，伦敦巴黎和罗马对于世界的影响之大，恐怕让其它城市都望其项背。在这趟旅程中，令你难忘的将不仅只是大本钟、埃菲尔铁塔和斗兽场等标志性建筑，更多体验等你亲身来试！
								</div>
								<div class="itiPrice">										
									<span class="delPrice">￥21,100</span>
									<span class="price">￥22,300<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>								
							</div>
						</a>
				    </div>
				</div>    				    	
			    <h4>当季精选</h4>
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
				    <div id="jewels-of-alpine-europe" name="home-trip-box" class="home-trip-box" data-dest="it,fr,ge,swz,austria" data-tag="history,art,honeymoon">
						<a href="itinerary-jewels-of-alpine-europe.php" >
							<div class="offerOutWrap">									
								<div class="offerWrap date">
									<!-- <div class="offerArrow"></div> -->									
									<div>国庆保证出团，仅剩&nbsp;4&nbsp;席</div>
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
				    <div id="portugal-spain-morocco" name="home-trip-box" class="home-trip-box" data-dest="mo,portu,sp" data-tag="nature">
						<a href="itinerary-portugal-spain-morocco.php" >	
							<div class="offerOutWrap">									
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
									<i class="fa fa-star" aria-hidden="true"></i>
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
				    <div id="icy-reykjavik-the-northern-lights" name="home-trip-box" class="home-trip-box" data-dest="ic" data-tag="nature,honeymoon,northeuro">
						<a href="itinerary-icy-reykjavik-the-northern-lights.php" >	
							<div class="offerOutWrap">									
								<div class="offerWrap date">
									<!-- <div class="offerArrow"></div> -->									
									<div>圣诞 / 元旦 / 春节出发</div>
								</div>
							</div>
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/icy-reykjavik-the-northern-lights.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">冰岛奇幻北极光之旅</div>
								<div class="itiDess">
									雷克雅维克 - 冰岛西部
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
									看极光是许多人梦寐以求的旅行体验，火山、极地瀑布、蓝湖温泉等令人屏息的北国风光，快来打开你的冰与火之歌！
								</div>
								<div class="itiPrice">										
									<span class="delPrice">￥21,100</span>
									<span class="price">￥32,000<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>								
							</div>
						</a>
				    </div>	
				    <div id="germany-switzerland-austria" name="home-trip-box" class="home-trip-box" data-dest="ge,swz,austria" data-tag="history,art,nature">
						<a href="itinerary-germany-switzerland-austria.php" >	
							<div class="offerOutWrap">									
								<div class="offerWrap date">
									<!-- <div class="offerArrow"></div> -->									
									<div>圣诞 / 元旦 / 春节出发</div>
								</div>
							</div>
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/germany-switzerland-austria.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">原味欧洲，古堡童话之旅</div>
								<div class="itiDess">
									德国 - 瑞士 - 奥地利
								</div>	
								<div class="itiDays">14天</div>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
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
				    <div id="venice-florence-rome" name="home-trip-box" class="home-trip-box" data-dest="it" data-tag="history,art,honeymoon">
						<a href="itinerary-venice-florence-rome.php" >	
							<div class="offerOutWrap">									
								<div class="offerWrap date">
									<!-- <div class="offerArrow"></div> -->									
									<div>圣诞 / 元旦 / 春节出发</div>
								</div>
							</div>
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/venice-florence-rome.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">意大利文艺复兴之旅</div>
								<div class="itiDess">
									威尼斯 - 佛罗伦萨 - 罗马
								</div>	
								<div class="itiDays">12天</div>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div class="itiIntro">
									在威尼斯感受不紧不慢的浪漫生活，在佛罗伦萨与数之不尽的教堂建筑亲密接触，在罗马重温古时文明，从食物到生活方式，一起来全方位感受意大利的活力和文艺复兴的传奇往事吧！
								</div>
								<div class="itiPrice">										
									<span class="delPrice">￥21,100</span>
									<span class="price">￥18,500<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>								
							</div>
						</a>
				    </div>	
				    <div id="shopping-in-amsterdam-paris" name="home-trip-box" class="home-trip-box" data-dest="fr,nz" data-tag="history,art,honeymoon">
						<a href="itinerary-shopping-in-amsterdam-paris.php" >	
							<div class="offerOutWrap">									
								<div class="offerWrap date">
									<!-- <div class="offerArrow"></div> -->									
									<div>圣诞 / 元旦 / 春节出发</div>
								</div>
							</div>
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/shopping-in-amsterdam-paris.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">新年打折季购物之旅</div>
								<div class="itiDess">
									阿姆斯特丹 - 巴黎
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
									这是一趟阿姆斯特丹和巴黎的跨年购物之旅，你将和我一起领略梵高博物馆和巴黎卢浮宫的艺术气息，还有大把自由时间去享受折扣季的购物狂欢。
								</div>
								<div class="itiPrice">										
									<span class="delPrice">￥21,100</span>
									<span class="price">￥21,800<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>								
							</div>
						</a>
				    </div>	
				    <div id="shopping-in-london-paris-amsterdam" name="home-trip-box" class="home-trip-box" data-dest="uk,fr,nz" data-tag="history,art,honeymoon">
						<a href="itinerary-shopping-in-london-paris-amsterdam.php" >	
							<div class="offerOutWrap">									
								<div class="offerWrap date">
									<!-- <div class="offerArrow"></div> -->									
									<div>圣诞 / 元旦 / 春节出发</div>
								</div>
							</div>
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/shopping-in-london-paris-amsterdam.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">新年伦敦巴黎阿姆斯特丹购物之旅</div>
								<div class="itiDess">
									阿姆斯特丹 - 巴黎 - 伦敦
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
									本次旅行特别为买到剁手的购物狂定制，在阿姆斯特丹、巴黎和伦敦观光游览著名景点后，我们预留了充足的自由活动时间给你从哈罗德百货、老佛爷、奥特莱斯购物村尽情买买买
								</div>
								<div class="itiPrice">										
									<span class="delPrice">￥21,100</span>
									<span class="price">￥25,800<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>								
							</div>
						</a>
				    </div>	
				    <div id="budapest-vienna-prague" name="home-trip-box" class="home-trip-box" data-dest="hungary,czech,austria" data-tag="nature">
						<a href="itinerary-budapest-vienna-prague.php" >	
							<div class="offerOutWrap">									
								<div class="offerWrap date">
									<!-- <div class="offerArrow"></div> -->									
									<div>圣诞 / 元旦 / 春节出发</div>
								</div>
							</div>
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/budapest-vienna-prague.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">东欧捷奥匈帝国之旅</div>
								<div class="itiDess">
									布达佩斯 - 维也纳 - 布拉格
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
									当你因《布达佩斯大饭店》、金色大厅和布拉格广场来到这里，你会发现中热情的东欧人带给你的远不止这些，你会深深迷恋上多瑙河和伏尔塔瓦河畔的这些城市，
								</div>
								<div class="itiPrice">										
									<span class="delPrice">￥21,100</span>
									<span class="price">￥16,400<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>								
							</div>
						</a>
				    </div>	
				    <div id="grand-tour-of-california" name="home-trip-box" class="home-trip-box" data-dest="wus" data-tag="art,nature,seaview,honeymoon,family">
						<a href="itinerary-grand-tour-of-california.php" >	
							<div class="offerOutWrap">									
								<div class="offerWrap date">
									<!-- <div class="offerArrow"></div> -->									
									<div>圣诞 / 元旦 / 春节出发</div>
								</div>
							</div>
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/grand-tour-of-california.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">圆梦加州畅游之旅</div>
								<div class="itiDess">
									旧金山 - 优胜美地 - 圣芭芭拉 - 洛杉矶
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
									从旧金山的蜿蜒海岸线、静美红杉林，令人陶醉的优胜美地，到纳帕和索诺玛谷的著名葡萄酒，还有因为LA LA Land而更名声大噪的星光璀璨洛杉矶，快来体验真正的加州生活吧！
								</div>
								<div class="itiPrice">										
									<span class="delPrice">￥21,100</span>
									<span class="price">￥27,800<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>								
							</div>
						</a>
				    </div>	
				    <div id="wonders-of-dubai-and-abu-dhabi" name="home-trip-box" class="home-trip-box" data-dest="db" data-tag="nature">
						<a href="itinerary-wonders-of-dubai-and-abu-dhabi.php" >	
							<div class="offerOutWrap">									
								<div class="offerWrap date">
									<!-- <div class="offerArrow"></div> -->									
									<div>圣诞 / 元旦 / 春节出发</div>
								</div>
							</div>
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/wonders-of-dubai-and-abu-dhabi.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">燃情阿联酋之旅</div>
								<div class="itiDess">
									迪拜 - 阿布扎比 - 艾恩
								</div>	
								<div class="itiDays">8天</div>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div class="itiIntro">
									从迪拜奢华壮丽的高楼大厦，到阿布扎比原生态的沙漠，一路体验沙漠晚餐、沙丘越野、猎鹰展演等众多阿拉伯独有的特色活动，遇见真正的阿拉伯风情！
								</div>
								<div class="itiPrice">										
									<span class="delPrice">￥21,100</span>
									<span class="price">￥23,900<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>								
							</div>
						</a>
				    </div>	
				    <div id="in-depth-morocco" name="home-trip-box" class="home-trip-box" data-dest="mo" data-tag="history,art,nature">
						<a href="itinerary-in-depth-morocco.php" >	
							<div class="offerOutWrap">									
								<div class="offerWrap date">
									<!-- <div class="offerArrow"></div> -->									
									<div>圣诞 / 元旦 / 春节出发</div>
								</div>
							</div>
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/in-depth-morocco.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">摩洛哥深度游</div>
								<div class="itiDess">
									马拉喀什 - 撒哈拉 - 菲斯
								</div>	
								<div class="itiDays">13天</div>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div class="itiIntro">
									撒哈拉沙漠体验，摩洛哥美食课程，露天集市淘宝，还有《卡萨布兰卡》《波斯王子》《角斗士》等电影取景地，在这趟旅程中，你将和我一起体验北非心脏摩洛哥的沙漠风情！
								</div>
								<div class="itiPrice">										
									<span class="delPrice">￥21,100</span>
									<span class="price">￥23,800<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>								
							</div>
						</a>
				    </div>
				    <div id="portugal-to-spain" name="home-trip-box" class="home-trip-box" data-dest="portu,sp" data-tag="history,art,nature">
						<a href="itinerary-portugal-to-spain.php" >	
							<div class="offerOutWrap">									
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
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div class="itiIntro">
									这趟旅程你将回到大航海时期的起点里斯本和热情迷人的西班牙。既有贝伦塔旁迷人的海岸线，也有高迪之城的天才艺，同时品尝种类丰富的tapas和美味的sangria酒也是南欧之旅不可错过的一部分。
								</div>
								<div class="itiPrice">										
									<span class="delPrice">￥21,100</span>
									<span class="price">￥24,600<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>								
							</div>
						</a>
				    </div>	
				</div>
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

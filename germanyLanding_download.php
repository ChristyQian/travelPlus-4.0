<!DOCTYPE html>
<html>
<?php 
	$pageName="Tours to Germany & Europe";
	$tagTitle="EF TravelPlus | 英孚旅游+";
	$metaTitle="欧洲游线路_澳大利亚旅游_美国旅游_极光旅游_迪拜旅游_线路推荐_限时特惠线路_假期出国游";
	$metaKeywords="澳大利亚旅游，美国旅游，极光旅游，迪拜旅游，德瑞奥，德国旅游，奥地利旅游，荷兰旅游，瑞士旅游，丹麦旅游，爱尔兰旅游，瑞典旅游，吃货行程，美食之旅，法国旅游，西班牙旅游，意大利旅游，英国旅游，希腊旅游，北欧旅游，春节欧洲游，长假欧洲游，欧洲线路推荐，限时优惠，国庆出境，十一长假，EFTravelPlus";
	$metaDescription="英孚旅游+，根据热门季节、个人爱好等旅行元素，精心设计行程，带来更多元的主题线路和更优的旅行体验，真正融入异国文化，捕捉旅程中的每次怦然心动与惊喜。";

    include_once("landing-head.php"); 
?>
	<body data-spy="scroll" class="germany">
	
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
								<a class="dark" href="#">德国</a>
								<i class="fa fa-chevron-right" data-reactid="228"></i>
							</li>
						</ul>
					</div>
					<div class="site" data-target="#card">
						<div class="browse-banner">
							<div class="browse-banner-bg"><img class="browse-banner-overlay" src="img/itinerary/billboard/Germany-Switzerland-Austria.jpg" width="100%"/></div>
							<div class="site browse-banner-content">
								<div class="leftWrap">
									<div class="">
										<div class="landingInfo">
											<div class="transparentBg"></div>
											<div class="transparentTxt">
												<h5>Germany Tours</h5>
												<h1>玩在德国</h1>
												<p>当你穿过莱茵河谷，来到德国，这里的纽结饼、啤酒和黑森林蛋糕是一定要品尝的，此外慕尼黑的啤酒节狂欢，柏林和巴伐利亚的历史，也会让你对德国印象深刻。
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
								 
								 Lead_Validation("sp-form", "Lead_Insert", "swissLanding_download_thankyou.php", true);
								}
								</script>
								<div class="rightWrap">
									<h5 class="rightWrapHead">下载独家攻略，附赠旅游保险&nbsp;&gt;&gt;</h5>									
									<div class="browse-banner-content-box">
										<h5>下载独家攻略，附赠旅游保险
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
				<h4>"德国"相关行程<span class="frNote">共4条结果</span></h4>
				<div class="flex-row-start-start flex-flow">
					
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
				    <div id="highlights-of-northern-europe-london-to-copenhagen" name="home-trip-box" class="home-trip-box" data-dest="uk,ge,dm,nz,bg" data-tag="history,art,honeymoon,northeuro">
						<a href="itinerary-highlights-of-northern-europe-london-to-copenhagen.php" >
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/Highlights-of-Northern-Europe--London-to-Copenhagen.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">一路向北欧洲之旅</div>
								<div class="itiDess">伦敦 - 安特卫普 - 阿姆斯特丹 - 汉堡 - 哥本哈根</div>
								<div class="itiDays">12天</div>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
								</div>
								<div class="itiIntro">
									在这趟精选的欧洲行程中，你会来到曾经的北欧经贸中心。充满活力的伦敦和安特卫普，独特的阿姆斯特丹运河，珍贵的汉堡遗迹，乐趣无限的哥本哈根，融入这些城市的历史和生活之中吧！
								</div>
								<div class="itiPrice">
									<span class="delPrice">￥19,100</span>
									<span class="price">￥24,600<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>
							</div>
						</a>
				    </div>				    
				    <div id="switzerland-alsace-the-black-forest" name="home-trip-box" class="home-trip-box" data-dest="swz,fr,ge" data-tag="art,nature">
						<a href="itinerary-switzerland-alsace-the-black-forest.php" >	
							<div class="imgWrap">
								<img src="img/itinerary/allTripsList/switzerland-alsace-the-black-forest.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">瑞士、阿尔萨斯和黑森林之旅</div>
								<div class="itiDess">
									瑞士 - 法国 - 德国
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
									从瑞士的风景山区到德国神秘的黑森林，令人惊叹的景致无处不在。让我们共同见证标志性的马特洪峰，穿越过阿尔萨斯的科尔地区，品尝美味的黑森林蛋糕，驶入旧时的童话世界吧！
								</div>
								<div class="itiPrice">										
									<span class="delPrice">￥21,100</span>
									<span class="price">￥26,300<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>								
							</div>
						</a>
				    </div>
				    <div id="jewels-of-alpine-europe" name="home-trip-box" class="home-trip-box" data-dest="it,fr,ge,swz,austria" data-tag="history,art,honeymoon">
						<a href="itinerary-jewels-of-alpine-europe.php" >	
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
									<i class="fa fa-star" aria-hidden="true"></i>
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

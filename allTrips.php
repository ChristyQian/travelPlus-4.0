<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<link href="img/ef.ico" rel="icon" type="image/x-icon">
		<link href="img/ef.ico" rel="shortcut icon" type="image/x-icon">
		<link type="text/css" rel="stylesheet" href="css/fontawesome.css">
		<link type="text/css" rel="stylesheet" href="css/swiper-3.4.1.min.css">
		<link type="text/css" rel="stylesheet" href="css/common.css">
		<link type="text/css" rel="stylesheet" href="css/allTrips.css">
		<link type="text/css" rel="stylesheet" href="css/mediaQuery.css">
		<!--<script src="https://unpkg.com/vue/dist/vue.js"></script>-->
		<script src="js/swiper.min.js"></script>
		<script src="https://use.fontawesome.com/cb43aec7ef.js"></script>
		<!-- flexbox fix for IE js -->
		<script src="js/flexibility-master/flexibility.min.js"></script>
		<title>全部行程 - EF TravelPlus | 英孚旅游+</title>		
		<meta name="title" content="欧洲旅游新选择_EF英孚旅游_一站式旅游专家" />
		<meta name="keywords" content="欧洲旅游，EF英孚旅游，EFTravelPlus，品质跟团游，EF英孚教育，告别走马观花，体验式旅行 " />
		<meta name="description" content="英孚旅游+,是英孚旗下一站式旅游服务专家，在全球众多国家拥有专业的旅游执行团队和完善的网络体系，用有趣的方式，让你和有趣的年轻人一起，发现未知的精彩世界。" />
	</head>
	<body data-spy="scroll" data-target="#tripsFilter">
	<div class="header">
			<div class="site flex-row-center-between">
				<div class="header-logo">
		            <a href="index.php">
		            	<img src="img/logo.png">
		            </a>
		        </div>
		        <div class="head-fix-right flex-row-center-between">
			        	<div class="icon Oval-5"><i class="fa fa-wechat"></i></div>
			        	<div class="icon Oval"><i class="call"></i></div>
			        	<div class="hotline">
			        		<p>来电咨询</p>
			        		<span>400-018-7518</span>
			        	</div>
			        	<button class="borderBtn">
			        		更多优惠
			        	</button>
		        </div>
	        </div>
		</div>
		<!-- nav -->
		<div class="header-nav" id="travelPlusNav">
			<div class="site flex-row-center-between">
				<ul class="flex-row-center-between">
					<li><a href="allTrips.php">行程</a></li>
					<li><a href="why-us.html">特色</a></li>
					<li><a href="deals.html">优惠</a></li>
					<li><a href="review.html">评论</a></li>
					<li><a href="http://travelplus.ef.com.cn/blog/">博客</a></li>
				</ul>
				<!--<div class="head-fix-right flex-row-center-between">
			        	<div class="flex-no-grow-no-shrink-auto icon Oval-5"><i class="fa fa-wechat"></i></div>
			        	<div class="flex-no-grow-no-shrink-auto icon Oval"><i class="call"></i></div>
			        	<div class="flex-no-grow-no-shrink-auto hotline">
			        		<p>来电咨询</p>
			        		<span>400-018-7518</span>
			        	</div>
			        	<button class="flex-no-grow-no-shrink-auto borderBtn">
			        		更多优惠
			        	</button>
		        </div>-->
	       </div>
		</div>
		<!-- If Edit Model -->
		<div class="section filter editModel" id="tripsFilter" data-spy="affix" data-offset-top="0" style="display:block;">
			<div class="site">
				<div class="flex-row-end-between flex-flow">
					<div class="flex-col-start-start flexAuto">
						<div class="flex-col-start-start destinations">
							选择你的完美假期：
							<div class="imitate-dropdown">
								<a href="#dropdown-box" class="dropdown-switcher">全部目的地</a>
								<div id="dropdown-box" class="dropdown-box">
									<a href="##" class="close-dropdown"></a>
									<div class="dropdown">
										<ul>
											<li>全部目的地</li>
											<li>英国</li>
											<li>法国</li>
											<li>德国</li>
											<li>瑞士</li>
										</ul>
									</div>
								</div>
								<div class="dropdownArrow"></div>
							</div>
						</div>
						<div class="flex-row-start-start flex-flow">
							<div class="checkbox checked">
								历史遗迹
							</div>
							<div class="checkbox">
								艺术人文
							</div>
							<div class="checkbox">
								自然风光
							</div>
							<div class="checkbox">
								海景沙滩
							</div>
							<div class="checkbox">
								浪漫蜜月
							</div>
							<div class="checkbox">
								亲子家庭
							</div>
							<div class="checkbox">
								北欧风情
							</div>
							<div class="checkbox">
								美食美酒
							</div>
						</div>
					</div>
					<button class="blueRBtn search">搜索</button>
				</div>
			</div>
		</div>
		<!-- Edit Finished -->
		<div class="section filter filterResult" id="tripsFilter" data-spy="affix" data-offset-top="0" style="display:none;">
			<div class="site">
				<div class="flex-row-center-between">
					<div class="flex-row-center-start filterConditions">
						<div>法国</div>
						<div>艺术人文</div>
						<div>历史遗迹</div>
						<div>家庭亲子</div>
					</div>
					<button class="blueRBtn edit">编辑</button>
				</div>
			</div>
		</div>
		<div class="site">
			<!-- trips -->
			<div class="section">
				<h4>当季精选</h4>
				<div class="flex-row-start-start flex-flow">	
					<div class="home-trip-box">
						<a href="itinerary-moet-paris-reims.php">	
							<div class="imgWrap">
								<img src="img/itinerary/moet-paris-reim-6.jpg" alt="" />
								<div class="hotSale">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt">美食美酒</div>
										<div class="pinkTxt">早鸟减5%</div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									MOET酩悦香槟法国微醺之旅 <br/>
									巴黎 - 香槟区埃佩尔奈 - 香槟区兰斯
								</p>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
								</div>
								<div>
									9天
									<span class="delPrice">￥19,100</span>
									<span class="price">￥19,100<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				    <div class="home-trip-box">
						<a href="itinerary-food-wine-northern-italy-the-italian-riviera.php">	
							<div class="imgWrap">
								<img src="http://travelplus.ef.com.cn/sp/img/itinerary/food-wine-northern-italy-the-italian-riviera/1.jpg" alt="" />
								<div class="hotSale">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt">国庆档</div>
										<div class="pinkTxt">早鸟减5%</div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									食在意大利：食物与酒的美学 <br/>
									意大利
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
									<span class="price">￥20,800<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>													
					<div class="home-trip-box">
						<a href="itinerary-barcelona-southern-france-the-italian-riviera.php">	
							<div class="imgWrap">
								<img src="http://travelplus.ef.com.cn/sp/img/itinerary/barcelona-southern-france-the-italian-riviera/1.jpg" alt="" />
								<div class="hotSale">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt">国庆档</div>
										<div class="pinkTxt">早鸟减5%</div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									西法意城市狂想 <br/>
									巴塞罗那 - 南法 - 里维耶拉
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
									<span class="price">￥18,300<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>				    
				    <div class="home-trip-box">
						<a href="itinerary-jewels-of-alpine-europe.php">	
							<div class="imgWrap">
								<img src="http://travelplus.ef.com.cn/sp/img/itinerary/jewels-of-alpine-europe/1.jpg" alt="" />
								<div class="hotSale">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt">国庆档</div>
										<div class="pinkTxt">早鸟减5%</div>
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
									<span class="price">￥21,400<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>				    
				    <div class="home-trip-box">
						<a href="itinerary-london-paris-amsterdam.php">	
							<div class="imgWrap">
								<img src="http://travelplus.ef.com.cn/sp/img/itinerary/london-paris-amsterdam/1.jpg" alt="" />
								<div class="hotSale">
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
									<i class="fa fa-star active" aria-hidden="true"></i>
								</div>
								<div>
									11天
									<span class="delPrice">￥19,100</span>
									<span class="price">￥21,300<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				    <div class="home-trip-box">
						<a href="itinerary-grand-tour-of-spain.php">	
							<div class="imgWrap">
								<img src="http://travelplus.ef.com.cn/sp/img/itinerary/grand-tour-of-spain/4.jpg" alt="" />
								<div class="hotSale">
									<div class="transparentBg"></div>
									<div class="transparentTxt">
										<div class="yellowTxt">国庆档</div>
										<div class="pinkTxt">早鸟减5%</div>
									</div>
								</div>
							</div>
							<div class="agendaWrap">
								<p>
									西班牙全景深度游 <br/>
									西班牙
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
									<span class="price">￥20,000<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				</div>
			</div>
			<!--<div class="section">
				<h4>早鸟优惠</h4>
				<div class="flex-row-start-between flex-flow">
					<div class="home-trip-box earlyBird">
						<div class="earlyBirdDiscount serif">5月1号前报名减5%早鸟优惠</div>
						<div class="imgWrap">
							<img src="http://travelplus.ef.com.cn/sp/img/itinerary/italy-greece/2.jpg" alt="" />
							<div class="hotSale">
								<div class="transparentBg"></div>
								<div class="transparentTxt">
									<div class="yellowTxt">亲子团</div>
									<p>
										城市生活与艺术之旅<br/>巴黎 - 罗马 - 雅典
									</p>
									<div class="flex-row-start-between">
										<div class="rate">
											<i class="fa fa-star active" aria-hidden="true"></i>
											<i class="fa fa-star active" aria-hidden="true"></i>
											<i class="fa fa-star active" aria-hidden="true"></i>
											<i class="fa fa-star active" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
										</div>
										<div class="pinkTxt">仅剩4席</div>
									</div>
									<div>
										12天
										<span class="delPrice">￥56600</span>
										<span class="price">￥25700<span>起</span></span>
									</div>									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>-->
			<div class="section">
				<h4>全部行程</h4>
				<div class="flex-row-start-start flex-flow">
					<div class="home-trip-box">
						<a href="itinerary-italy-greece.php">	
							<div class="imgWrap">
								<img src="http://travelplus.ef.com.cn/sp/img/itinerary/italy-greece/1.jpg" alt="" />
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
									<span class="price">￥19,100<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
					<div class="home-trip-box">
						<a href="itinerary-highlights-of-northern-europe-london-to-copenhagen.php">	
							<div class="imgWrap">
								<img src="http://travelplus.ef.com.cn/sp/img/itinerary/highlights-of-northern-europe-london-to-copenhagen/1.jpg" alt="" />
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
									伦敦 - 阿姆斯特丹 - 哥本哈根
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
									<span class="price">￥22,900<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				    <div class="home-trip-box">
						<a href="itinerary-rome-paris.php">	
							<div class="imgWrap">
								<img src="http://travelplus.ef.com.cn/sp/img/itinerary/rome-paris/3.jpg" alt="" />
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
									城市生活与艺术之旅-亲子团<br/>
									巴黎 - 罗马
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
									<span class="delPrice">￥19,100</span>
									<span class="price">￥23,200<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				    <div class="home-trip-box">
						<a href="itinerary-rome-paris-athens.php">	
							<div class="imgWrap">
								<img src="http://travelplus.ef.com.cn/sp/img/itinerary/rome-paris-athens/1.jpg" alt="" />
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
									城市生活与艺术之旅-亲子团 <br/>
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
									<span class="price">￥24,600<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
					<div class="home-trip-box">
						<a href="itinerary-germany-switzerland-austria.php">	
							<div class="imgWrap">
								<img src="http://travelplus.ef.com.cn/sp/img/itinerary/germany-switzerland-austria/1.jpg" alt="" />
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
									<span class="price">￥21,000<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				    <div class="home-trip-box">
						<a href="itinerary-venice-florence-rome.php">	
							<div class="imgWrap">
								<img src="http://travelplus.ef.com.cn/sp/img/itinerary/venice-florence-rome/1.jpg" alt="" />
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
									<span class="price">￥16,300<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				    <div class="home-trip-box">
						<a href="itinerary-food-wine-a-taste-of-spain.php">	
							<div class="imgWrap">
								<img src="http://travelplus.ef.com.cn/sp/img/itinerary/food-wine-a-taste-of-spain/1.jpg" alt="" />
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
									西班牙
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
									<span class="price">￥23,600<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				    <div class="home-trip-box">
						<a href="itinerary-london-edinburgh-dublin.php">	
							<div class="imgWrap">
								<img src="http://travelplus.ef.com.cn/sp/img/itinerary/london-edinburgh-dublin/1.jpg" alt="" />
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
									伦敦-爱丁堡-都柏林
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
									<span class="price">￥22,000<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				    <div class="home-trip-box">
						<a href="itinerary-london-paris-madrid.php">	
							<div class="imgWrap">
								<img src="http://travelplus.ef.com.cn/sp/img/itinerary/london-paris-madrid/1.jpg" alt="" />
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
									<span class="price">￥21,600<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				    <div class="home-trip-box">
						<a href="itinerary-rome-paris-london.php">	
							<div class="imgWrap">
								<img src="http://travelplus.ef.com.cn/sp/img/itinerary/rome-paris-london/1.jpg" alt="" />
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
									<span class="price">￥20,600<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				    <div class="home-trip-box">
						<a href="itinerary-paris-the-riviera-tuscany.php">	
							<div class="imgWrap">
								<img src="http://travelplus.ef.com.cn/sp/img/itinerary/paris-the-riviera-tuscany/1.jpg" alt="" />
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
									<span class="price">￥24,900<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				    <div class="home-trip-box">
						<a href="itinerary-switzerland-alsace-the-black-forest.php">	
							<div class="imgWrap">
								<img src="http://travelplus.ef.com.cn/sp/img/itinerary/switzerland-alsace-the-black-forest/1.jpg" alt="" />
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
									<span class="price">￥24,400<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				    <div class="home-trip-box">
						<a href="itinerary-food-wine-france-through-bordeaux-the-loire-valley.php">	
							<div class="imgWrap">
								<img src="http://travelplus.ef.com.cn/sp/img/itinerary/food-wine-france-through-bordeaux-the-loire-valley/1.jpg" alt="" />
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
									法国
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
									<span class="price">￥20,400<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				    <div class="home-trip-box">
						<a href="itinerary-rome-sorrento-sicily.php">	
							<div class="imgWrap">
								<img src="http://travelplus.ef.com.cn/sp/img/itinerary/rome-sorrento-sicily/1.jpg" alt="" />
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
									<span class="price">￥18,200<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
					<div class="home-trip-box">
						<a href="itinerary-grand-tour-of-italy.php">	
							<div class="imgWrap">
								<img src="http://travelplus.ef.com.cn/sp/img/itinerary/grand-tour-of-italy/1.jpg" alt="" />
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
									意大利
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
									<span class="price">￥20,600<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				    <div class="home-trip-box">
						<a href="itinerary-london-paris-rome.php">	
							<div class="imgWrap">
								<img src="http://travelplus.ef.com.cn/sp/img/itinerary/london-paris-rome/1.jpg" alt="" />
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
									<span class="price">￥20,600<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				    <div class="home-trip-box">
						<a href="itinerary-scandinavia-the-capitals-the-fjords.php">	
							<div class="imgWrap">
								<img src="http://travelplus.ef.com.cn/sp/img/itinerary/scandinavia-the-capitals-the-fjords/1.jpg" alt="" />
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
									北欧航行及多元首都之旅 <br/>
									斯德哥尔摩 - 卑尔根 - 哥本哈根
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
									<span class="price">￥26,200<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>
				</div>
			</div>
		</div>
		<!-- footer -->
		<footer>
			<div class="site">
				<a href="#top" class="backToTop">回到顶部<i class="upturnedArrow"></i></a>
				<ul>
					<li>
						<a href="allTrips.php">行程</a>
					</li>
					<li>
						<a href="why-us.html">特色</a>
					</li>
					<li>
						<a href="deals.html">优惠</a>
					</li>
					<li>
						<a href="review.html">评论</a>
					</li>
					<li>
						<a href="http://travelplus.ef.com.cn/blog/">博客</a>
					</li>
				</ul>
				<div class="flex-row-center-start">
					<div class="">
						<img src="http://travelplus.ef.com.cn/sp/img/qrcode.png" width="80" height="80" />
					</div>
					<div class="flexAuto">
						<p>
							扫码关注@EFTravelPlus微信服务号<br />
							发现实用旅行灵感和产品
						</p>
					</div>
				</div>
			</div>
			<div class="icp flex-col-center-center">
				<p>ICP 沪B2-20070075 上海英培商务咨询有限公司</p>				
				<p>ICP 粵B2-20060734 广州英培商务咨询有限公司</p>
				<p>&copy;Signum International S.a r.l Luxembourg Luzern Branch, EF英孚教育旗下公司，版权所有。</p>
			</div>
		</footer>
		<script src="js/jquery-2.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/sticky.min.js"></script>
		<script>
			$('.checkbox').click(function(){
				if($(this).hasClass('checked')){
					$(this).removeClass('checked');
				}
				else {
					$(this).addClass('checked');
				}
			});
			$('.edit').click(function(){
				$('.filterResult').hide();
				$('.editModel').show();
			});
			$('.search').click(function(){
				$('.filterResult').show();
				$('.editModel').hide();
			})
		</script>
	</body>
</html>

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
					<li><a href="allTrips.html">行程</a></li>
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
				<div class="flex-row-start-between flex-flow">					
					<div class="home-trip-box">
						<a href="Itinerary.html">	
							<div class="imgWrap">
								<img src="http://travelplus.ef.com.cn/sp/img/itinerary/italy-greece/1.jpg" alt="" />
								<div class="hotSale">
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
									<span class="delPrice">￥56600</span>
									<span class="price">￥25700<span>起</span></span>
								</div>
							</div>
						</a>
				    </div>					
					<div class="home-trip-box">
						<div class="imgWrap">
							<img src="http://travelplus.ef.com.cn/sp/img/itinerary/italy-greece/1.jpg" alt="" />
							<div class="hotSale">
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
								<span class="delPrice">￥56600</span>
								<span class="price">￥25700<span>起</span></span>
							</div>
						</div>
					</div>
					<div class="home-trip-box">
						<div class="imgWrap">
							<img src="http://travelplus.ef.com.cn/sp/img/itinerary/italy-greece/3.jpg" alt="" />
							<div class="hotSale">
								<div class="transparentBg"></div>
								<div class="transparentTxt">
									<div class="yellowTxt">美食美酒</div>
									<div class="pinkTxt">仅剩4席</div>
								</div>
							</div>
						</div>
						<div class="agendaWrap">
							<p>
								食在意大利 <br/>
								里维埃拉 - 博洛尼亚- 维罗纳
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
								<span class="delPrice">￥56600</span>
								<span class="price">￥22800<span>起</span></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section">
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
			</div>
			<div class="section">
				<h4>全部行程</h4>
				<div class="flex-row-start-between flex-flow">
					<div class="home-trip-box">
						<div class="imgWrap">
							<img src="http://travelplus.ef.com.cn/sp/img/itinerary/italy-greece/1.jpg" alt="" />
							<div class="hotSale">
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
								<span class="delPrice">￥56600</span>
								<span class="price">￥25700<span>起</span></span>
							</div>
						</div>
					</div>
					<div class="home-trip-box">
						<div class="imgWrap">
							<img src="http://travelplus.ef.com.cn/sp/img/itinerary/italy-greece/2.jpg" alt="" />
							<div class="hotSale">
								<div class="transparentBg"></div>
								<div class="transparentTxt">
									<div class="yellowTxt">亲子团</div>
									<div class="pinkTxt">仅剩4席</div>
								</div>
							</div>
						</div>
						<div class="agendaWrap">
							<p>
								城市生活与艺术之旅<br/>巴黎 - 罗马 - 雅典
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
								<span class="delPrice">￥56600</span>
								<span class="price">￥25700<span>起</span></span>
							</div>
						</div>
					</div>
					<div class="home-trip-box">
						<div class="imgWrap">
							<img src="http://travelplus.ef.com.cn/sp/img/itinerary/italy-greece/3.jpg" alt="" />
							<div class="hotSale">
								<div class="transparentBg"></div>
								<div class="transparentTxt">
									<div class="yellowTxt">美食美酒</div>
									<div class="pinkTxt">仅剩4席</div>
								</div>
							</div>
						</div>
						<div class="agendaWrap">
							<p>
								食在意大利 <br/>
								里维埃拉 - 博洛尼亚- 维罗纳
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
								<span class="delPrice">￥56600</span>
								<span class="price">￥22800<span>起</span></span>
							</div>
						</div>
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
						<a href="allTrips.html">行程</a>
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

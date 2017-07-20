<!DOCTYPE html>
<html>
<?php 
	$pageName="all-trips";
	$tagTitle="行程 - EF TravelPlus | 英孚旅游+";
	$metaTitle="欧洲游线路_澳大利亚旅游_美国旅游_极光旅游_迪拜旅游_线路推荐_限时特惠线路_假期出国游";
	$metaKeywords="澳大利亚旅游，美国旅游，极光旅游，迪拜旅游，德瑞奥，德国旅游，奥地利旅游，荷兰旅游，瑞士旅游，丹麦旅游，爱尔兰旅游，瑞典旅游，吃货行程，美食之旅，法国旅游，西班牙旅游，意大利旅游，英国旅游，希腊旅游，北欧旅游，春节欧洲游，长假欧洲游，欧洲线路推荐，限时优惠，国庆出境，十一长假，EFTravelPlus";
	$metaDescription="英孚旅游+，根据热门季节、个人爱好等旅行元素，精心设计行程，带来更多元的主题线路和更优的旅行体验，真正融入异国文化，捕捉旅程中的每次怦然心动与惊喜。";

    include_once("all-trips-head.php"); 
?>
	<body data-spy="scroll" data-target="#tripsFilter">

	<script type="text/javascript" src='js/func.js'></script>
	
<?php 
	 include_once('common-header2.php');
?>	

<?PHP
		include_once('triggeredLeadPop.php');
	?>
		<div class="section" style="padding:0;">
			<div class="whyUsBg">
				<div class="site">
					<p class="slogan">找到适合您的旅行方式<br/>——两全其美自由团</p>
				</div>
			</div>
		</div>
		<div class="section" style="padding:0;">
			<div class="greyBg">
				<div class="site">
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
					<a href="#tripsFilter" class="orangeBtn">开启你的完美假期</a>
					
				</div>
			</div>
		</div>
		<!-- If Edit Model -->
		<div class="section filter editModel" id="tripsFilter" data-spy="affix" data-offset-top="600">
			<div class="site">
				<div class="expandIcon"><i class="fa fa-chevron-down" aria-hidden="true"></i></div>
				<div class="flex-row-end-between flex-flow">
					<div class="flex-col-start-start flexAuto">
						<div class="flex-col-start-start destinations">
							选择你的完美假期：
							<!--<div class="imitate-dropdown">
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
							</div>-->
							<select id="destination">
								<option value="all" data-display="全部目的地">全部目的地</option>
								<option value="aus" data-display="澳大利亚">澳大利亚</option>
								<option value="usw" data-display="美国西部">美国西部</option>
								<option value="ic" data-display="冰岛">冰岛</option>
								<!-- <option value="db" data-display="迪拜">迪拜</option> -->
								<option value="uk" data-display="英国">英国</option>
								<option value="sc" data-display="苏格兰">苏格兰</option>
								<option value="ir" data-display="爱尔兰">爱尔兰</option>
								<option value="fr" data-display="法国">法国</option>
								<option value="ge" data-display="德国">德国</option>
								<option value="it" data-display="意大利">意大利</option>
								<option value="sp" data-display="西班牙">西班牙</option>
								<option value="nz" data-display="荷兰">荷兰</option>
								<option value="sw" data-display="瑞士">瑞士</option>
								<option value="gr" data-display="希腊">希腊</option>
								<option value="dm" data-display="丹麦">丹麦</option>
								<option value="nw" data-display="挪威">挪威</option>
								<option value="fl" data-display="芬兰">芬兰</option>
								<option value="bg" data-display="比利时">比利时</option>
								<option value="austria" data-display="奥地利">奥地利</option>
							</select>
						</div>
						<!-- <div id="trip-tag" class="flex-row-start-start flex-flow">
							<div id="tag-history" data-tag="history" data-display="历史遗迹" name="tag-selector" class="checkbox">
								历史遗迹
							</div>
							<div id="tag-art" data-tag="art" data-display="艺术人文" name="tag-selector" class="checkbox">
								艺术人文
							</div>
							<div id="tag-nature" data-tag="nature" data-display="自然风光" name="tag-selector" class="checkbox">
								自然风光
							</div>
							<div id="tag-seaview" data-tag="seaview" data-display="海景沙滩" name="tag-selector" class="checkbox">
								海景沙滩
							</div>
							<div id="tag-honeymoon" data-tag="honeymoon" data-display="浪漫蜜月" name="tag-selector" class="checkbox">
								浪漫蜜月
							</div>
							<div id="tag-family" data-tag="family" data-display="亲子家庭" name="tag-selector" class="checkbox">
								亲子家庭
							</div>
							<div id="tag-northeuro" data-tag="northeuro" data-display="北欧风情" name="tag-selector" class="checkbox">
								北欧风情
							</div>
							<div id="tag-food" data-tag="food" data-display="美食美酒" name="tag-selector" class="checkbox">
								美食美酒
							</div>
						</div> -->
					</div>
					<button class="blueRBtn search"  onclick="Trip_Filter();"><i class="fa fa-search"></i>搜索</button>
				</div>
			</div>
		</div>
		
		<div class="section filter filterResult" id="tripsFilter" data-spy="affix" style="display:none;" data-offset-top="600">
			<div class="site">
				<div class="flex-row-center-between">
					<div id="filter-selected" class="flex-row-center-start filterConditions">
					</div>
					
					<button class="blueRBtn edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>编辑</button>
					
				</div>
			</div>
		</div>
		
		<div class="site">
			<!-- trips -->
			<div class="section offerSection">
				<h4>当季精选</h4>
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
				    <div id="jewels-of-alpine-europe" name="home-trip-box" class="home-trip-box" data-dest="it,fr,ge,sw,austria" data-tag="history,art,honeymoon">
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
				    <div id="scandinavia-the-capitals-the-fjords" name="home-trip-box" class="home-trip-box" data-dest="nw,sw,dm,fl" data-tag="history,art,seaview,northeuro">
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
				</div>
			</div>
			<div class="section">
				<h4>全部行程</h4>
				<div class="flex-row-start-start flex-flow">
					<!-- <div id="wonders-of-dubai-and-abu-dhabi" name="home-trip-box" class="home-trip-box" data-dest="db" data-tag="nature,seaview">
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
				    </div>	 -->				
					<div id="adventures-in-australia" name="home-trip-box" class="home-trip-box" data-dest="aus" data-tag="nature,seaview,honeymoon,family">
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
				    <div id="grand-tour-of-california" name="home-trip-box" class="home-trip-box" data-dest="usw" data-tag="art,nature,seaview,honeymoon,family">
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
					<div id="germany-switzerland-austria" name="home-trip-box" class="home-trip-box" data-dest="ge,sw,austria" data-tag="history,art,nature">
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
				    <div id="switzerland-alsace-the-black-forest" name="home-trip-box" class="home-trip-box" data-dest="sw,fr,ge" data-tag="art,nature">
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
				$('.offerSection').show();
			}

			function offerSection(){
				var attr = /inline/;
				var child = $('.offerSection .flex-flow').children('div');				
				for (var i=0;i<child.length;i++) {
					var style = child[i].style.display;					
					var result = style.match(attr);
					if (result != null ) {
						break;
					}
					else {
						$('.offerSection').hide();
						$('.site').css('padding-top',0);
					}
				}
			}

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
				offerSection();
				$('.filterResult').show();
				$('.editModel').hide();
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

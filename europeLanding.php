<!DOCTYPE html>
<html>
<?php 
	$pageName="Tours to Spain & Europe";
	$tagTitle="EF TravelPlus | 英孚旅游+";
	$metaTitle="欧洲游线路_澳大利亚旅游_美国旅游_极光旅游_迪拜旅游_线路推荐_限时特惠线路_假期出国游";
	$metaKeywords="澳大利亚旅游，美国旅游，极光旅游，迪拜旅游，德瑞奥，德国旅游，奥地利旅游，荷兰旅游，瑞士旅游，丹麦旅游，爱尔兰旅游，瑞典旅游，吃货行程，美食之旅，法国旅游，西班牙旅游，意大利旅游，英国旅游，希腊旅游，北欧旅游，春节欧洲游，长假欧洲游，欧洲线路推荐，限时优惠，国庆出境，十一长假，EFTravelPlus";
	$metaDescription="英孚旅游+，根据热门季节、个人爱好等旅行元素，精心设计行程，带来更多元的主题线路和更优的旅行体验，真正融入异国文化，捕捉旅程中的每次怦然心动与惊喜。";

    include_once("europeLanding-head.php"); 
?>
	<body class="competitor" data-spy="scroll">
	
<?php 
	 include_once('common-header2.php');
?>	

		<div class="browse-page-container">
			<div class="landingTop browse-banner-container">
				<div class="relDiv">								
					<div class="site">
						<div class="browse-banner">
							<div class="browse-banner-bg">
								<div class="browse-banner-overlay">
									<img src="img/itinerary/billboard/Rome-Paris-London.jpg" width="100%"/>
								</div>								
								<h1>选择欧洲跟团游,<br/>不得不考虑的几个问题</h1>
							</div>
							<div class="site browse-banner-content">
								<!--backend interface --> 
								<script type="text/javascript" src='../lib/services.js'></script>
							    <!--leads and pages --> 
							    <script type="text/javascript" src='js/func.js'></script>		
								<script>	
								function Quotation_Form_Submit()
								{	
								 bs_trackClick(bs_getEventCategory(), "Lead Form Submission");	
								 
								 Lead_Validation("sp-form", "Lead_Insert", "europeLanding_thankyou.php", true);
								}
								</script>
								<div class="rightWrap">
									<h5 class="rightWrapHead">挑行程已经挑花了眼？&nbsp;&gt;&gt;</h5>									
									<div class="browse-banner-content-box">
										<h5>挑行程已经挑花了眼？<span>不如联系我们的旅行顾问，为你计划完美假期</span>
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

												<button id="lead-submit-button" onclick="Quotation_Form_Submit()" class="orangeBtn">开启完美假期</button>
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
		<div class="site landing" data-target="#card">
			<div class="twoThird ">
				<p>欧洲，是个令人向往但又头疼的旅行目的地。但签证、行程、机票酒店、复杂的当地交通，全部研究下来就要大半个月，更何况可能还存在语言问题，所以，除了部分愿意花时间研究旅行攻略的自由行爱好者们，大部分人可能会做出无奈的选择——跟团游。<br/>
<br/>
然而，市面上众多欧洲游产品，就算同一路线价格也相差悬殊，到底有哪些不同？
带着同样的困惑，我们从热门旅游电商平台上，选出不同价位的欧洲跟团游产品，作了一下分析比较。
（以主要的旅行元素为讨论对象，每个团并不是毫无优势）
</p>
<br/>
				<h3>跟团游价格差异主要来自以下几个方面:</h3>
				<ul class="nav nav-tabs blueRList" role="tablist">
					<li role="presentation" class="active" onclick="changeTab('0')"><a href="#flight" aria-controls="flight" role="tab" data-toggle="tab">
						<span class="flightIcon"></span>
					</a><p>航班</p></li>
					<li role="presentation" onclick="changeTab('1')"><a href="#hotel" aria-controls="hotel" role="tab" data-toggle="tab">
						<span class="hotelIcon"></span>
					</a><p>住宿</p></li>
					<li role="presentation" onclick="changeTab('2')"><a href="#catering" aria-controls="catering" role="tab" data-toggle="tab">
						<span class="cateringIcon"></span>
					</a><p>餐食</p></li>
					<li role="presentation" onclick="changeTab('3')"><a href="#timeOfDep" aria-controls="timeOfDep" role="tab" data-toggle="tab">
						<span class="timeOfDepIcon"></span>
					</a><p>时间</p></li>
					<li role="presentation" onclick="changeTab('4')"><a href="#route" aria-controls="route" role="tab" data-toggle="tab">
						<span class="routeIcon"></span>
					</a><p>线路</p></li>
					<li role="presentation" onclick="changeTab('5')"><a href="#optionalItem" aria-controls="optionalItem" role="tab" data-toggle="tab">
						<span class="optionalItemIcon"></span>
					</a><p>购物</p></li>
					<li role="presentation" onclick="changeTab('6')"><a href="#others" aria-controls="others" role="tab" data-toggle="tab">
						<span class="othersIcon"></span>
					</a><p>其他</p></li>
				</ul>
				<div class="tab-content detailWrap">
					<div class="belongToArrow"><div class="secArrow"></div></div>
					<div role="tabpanel" class="tab-pane fade in active detailItem" id="tabCon_0">
						<h5><span class="yellowTxt">敲重点：</span>直达=贵+省时；转机=便宜+耗时；转机尽量选择品质航空。</h5>
		
						<div>去欧洲的国际航班，通常分为转机和直达，根据航空公司类型，大致分类如下：</div>
					
						<div>
							<h6>转机：</h6>
							<ul>
								<li>优质：卡塔尔、阿联酋、汉莎、荷兰皇家等</li>
								<li>一般：马汉航空、俄罗斯航空等</li>
								<li>直达：国内航空公司为主，中国国航、东方航空、南方航空</li>
							</ul>
						
							<h6>价格比较：</h6>
							<ul><li>直达 > 转机（优质）> 转机（一般）</li></ul>
						
							<h6>说明：</h6>
							<ul>
								<li>有些时间不太合理的转机机票，旅行社通常能拿到较低的折扣，比如12天的行程事实上可能只有完整的7-8天在游玩，所以整体的套餐价格会稍低。</li>
								<li>而直达航班，虽然在全球航司综合评价上没有那么高，但好在直达，节约了时间，若同为12天长度的行程，整体游玩时间是大大增加的，通常对应所支付的当地酒店住宿天数也会增加，所以不论航司好坏，直达永远比转机价格高。</li>
								<li><strong><span class="yellowTxt">EF TravelPlus</span>依目的地/出发地不同，全部安排优质航空，或直达航班；合理的航班安排，意味着增加整体游玩时间。</strong></li>
							</ul>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade detailItem" id="tabCon_1">
						<h5><span class="yellowTxt">敲重点：</span>低价团多数住“欧洲小镇”，市区酒店只存在于高价团。</h5>
					
						<div>“欧洲小镇”就是所有郊区酒店统称，又可分为几大类：非星级酒店、国际连锁经济酒店、国际连锁星级酒店。</div>
					
						<div>
							<h6>价格比较：</h6>
							<ul>
								<li>市区酒店 > 郊区国际四星/五星酒店 > 郊区国际连锁经济酒店 > 郊区非星级酒店</li>
							</ul>
					
							<h6>说明：</h6>
							<ul>
								<li>通常说三星/四星级标准，意味着入住酒店并没有评星，只是单方面表示达到了这个标准，具体什么样，住过的人才知道。</li>
								<li>国际连锁经济酒店，类似Ibis（宜必思），各方面条件中等，房间不大但也基本满足需求。</li>
								<li>国际四星/五星酒店，此类酒店最大的注意点是目的地不同差价非常大。很多团会标注入住国际5星酒店，然而仅在意大利升级，因为可能同类酒店即便在法国瑞士的郊区也会非常贵。</li>
								<li>市区酒店：市区酒店不论星级如何，主要意味着更方便的交通，在自由时间有更丰富的安排。</li>
								<li><strong><span class="yellowTxt">EF TravelPlus</span>在大城市全部安排市区4-5星级酒店，像五渔村周边的小城，也安排同等级酒店，优越地理位置，方便自由时间安排活动</strong></li>
							</ul>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade detailItem" id="tabCon_2">
						<h5><span class="yellowTxt">敲重点：</span>包餐最省钱，升级当地须防坑。</h5>
					
						<div>欧洲团，一般3种：团餐、升级当地美食、不包餐</div>
					
						<div>
							<h6>价格比较：</h6>
							<ul>
								<li>升级当地美食 > 团餐 > 不包餐</li>
							</ul>
					
							<h6>说明:</h6>
							<ul>
								<li>不包餐，直观体现就是团费较低，但对于初次出国无法接受当地物价的人来说，需要自己再去花钱吃饭，那是大写的贵，如果早餐也不包，小编个人觉得有些不太方便。不过想要深刻感受当地饮食文化的人来说，很适合。</li>
								<li>团餐，就是类似国内跟团，以提供中餐为主，10人一桌几个菜，荤菜靠抢吃饱全靠米饭。</li>
								<li>升级当地美食，这一项也是高价团的标配。例如在法国，升级一顿法餐，但具体是什么配置，是否包含酒水，最好提前了解清楚。</li>
								<li><strong><span class="yellowTxt">EF TravelPlus</span>包含酒店提供的品质早餐；依行程不同，包含部分午餐和晚餐，皆为当地三道式美食（前菜+主菜+甜品），同时包含酒水或饮料；在某些城市，还会安排去当地人家做客，共进晚餐哦。 </strong></li>
							</ul>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade detailItem" id="tabCon_3">						
						<h5><span class="yellowTxt">敲重点：</span>冬季便宜，暑假较贵，5、11月性价比最高，国庆优于春节。</h5>
			
						<div>此条对价格影响较大，旺季淡季差距可达到大几千块钱，但对于一般上班族而言也需要平衡请假、出行体验度的成本再考虑。<strong><span class="yellowTxt">EF TravelPlus</span>挑选适合不同季节出游的精彩路线，更有主题线路玩法供你选择。 </strong></div>
		
						<div>
							<h6>价格比较：</h6>
							<ul>
								<li>欧洲旅游旺季：6月——10月、春节【偏贵】</li>
								<li>欧洲旅游平季：11月、12月、4月、5月【适中】</li>
								<li>欧洲旅游淡季：1月——3月【便宜，除滑雪/冰岛等冬季特色地区】</li>
							</ul>
					
							<h6>说明：</h6>
							<ul>
								<li>冬季出行便宜，但如南欧意大利西班牙也不会多暖和，何况德国瑞士。</li>
								<li>旺季出行，主要是受到国内暑假及欧洲当地休假集中在7、8月，价格较高；但事实上，气候炎热且人多，除非暑假带孩子出行，并不建议在此期间去欧洲游玩。</li>
								<li>9、10月气候其实是相对较好的，但机票和酒店价格通常会暴涨，出境人流增大，也在需要考虑的范围内。</li>
								<li>平季的四个月，处于冷暖交替，价格非常适中的；但欧洲气候不一，南北温差较大。</li>
							</ul>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane fade detailItem" id="tabCon_4">
						<h5><span class="yellowTxt">敲重点：</span>开口航班（A进B出）最佳，根据出行国物价判断预算，不要选择国家太多的行程。</h5>
				
						<div>在其他标准相同的情况下，费用排名基本如下：<br/>
						<strong>少国出行 > 多国出行北欧路线 > 西欧路线（德法瑞）> 东欧路线（匈牙利捷克等）<br/>
						开口航班（A城进B城出） > 闭口航班（同进同出）</strong></div>
				
						<h6>说明：</h6>
						<ul>
							
							<li>游玩3国价格通常都高于4国价格，所以会出现游玩7、8个国家的价格却低于2国深度游。</li>
							<li>北欧、西欧、东欧的价格差是根据各国物价决定，每个国家的基础消费、酒店等各方面不同所形成的差价，而这一点也会影响一些自费项目及人均消费。</li>
							<li>开口航班，意味着旅行社是分开订的航班。自己订过机票的人都知道，国际单程的机票要远高于往返机票。从体验度上而言，欧洲旅行基本没有环线可选，同进同出意味着要多出大量时间在交通上。<br/><strong><span class="yellowTxt">EF TravelPlus</span>设计的路线，大部分为开口航班，不走回头路。</strong></li>
						</ul>
					</div>
					<div role="tabpanel" class="tab-pane fade detailItem" id="tabCon_5">
						<h5><span class="yellowTxt">敲重点：</span>低价团总有它低价的原因，购物和自费项目是选择跟团游要注意的点。</h5>
				
						<dl>
							<dt>购物安排对价格影响：</dt>
							<dd>不含购物点 > 含小购物点 > 不明确说明购物点</dd>
					
							<h6>说明：</h6>
							<ul>								
								<li>不含购物点，并不是没有购物行程。例如，游客可在自由时间，自行安排购物，这是正规且合乎人意的方式。旅行社赚不到额外的钱，团费自然较高。</li>
								<li>含小购物点，例如一些珠宝厂、香水博物馆，对于此类，欧洲大部分是不会强制，但白眼之类的还是会来几个。</li>
								<li>不明确说明购物点，不同于不含。正常档期的价格低廉团，这种应该是最可怕的。</li>
								<li><strong><span class="yellowTxt">EF TravelPlus</span>绝无任何强制购物安排；包含重点景点费用，且包含非自由时间涉及的海外导游/司机小费。</strong></li>
							</ul>
				
							<h6>自费项目对价格影响：</h6>
							<ul>
								
								<li>一价全包无自费 > 部分自费项目 > 大量自由活动行程</li>
							</ul>
					
							<h6>说明：</h6>
							<ul>
								
								<li>不想操心就选择一价全包，有自理能力的旅游者可考虑半自助行程。</li>
								<li>如果有能力自行解决的人来说，那么尝试一下大量自由活动行程也许更省钱且自由。</li>
								<li><strong><span class="yellowTxt">EF TravelPlus</span>会列明每个行程的自由时间段，给您自我探索的时间和灵活性。</strong></li>
							</ul>
						</dl>
					</div>
					<div role="tabpanel" class="tab-pane fade detailItem" id="tabCon_6">
						<h5><span class="yellowTxt">敲重点：</span>很多旅行团都是做的代理，实际到了当地会是另一个旅行社接待，这种在管理上都会出现问题，当然也是为了节约成本。</h5>
			
						<ul>
							<li>给上洗手间准备一笔支出：欧洲很多场所的公共厕所是收费的，0.5欧元或1欧。</li>
							<li>境外导游/司机小费：出境游一般都要收取小费，有的团会有明确表示在何时缴纳或者是否包含，但有些是到了当地后漫天要价。建议提前沟通好，需要付多少、何时付、出境前付过后到达当地是否无需再付。</li>
							<li>全程组团还是散客拼团,事前需要明确知道。</li>
						</ul>
					
						<h6>说了这么多，结论就是：</h6>
						<ul>													
							<li>省心的跟团游，对自由度必然有所牺牲</li>
							<li>低价出行，必然有一些坑要防</li>
							<li>根据自身出行要求选择最适合自己的旅行，价格并不是唯一导向</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="oneThird">
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
		<div class="site">
			<h4>当季精选</h4>
				<div class="flex-row-start-start flex-flow">													
					<div id="icy-reykjavik-the-northern-lights" name="home-trip-box" class="home-trip-box" data-dest="ic" data-tag="art,nature,seaview,honeymoon,family">
						<a href="itinerary-icy-reykjavik-the-northern-lights.php" >	
							<div class="offerOutWrap">									
								<div class="offerWrap earlyBird">
									<div class="offerArrow"></div>	
									<div>2人同行，立减6000</div>
								</div>
								<div class="offerWrap date">
									<!-- <div class="offerArrow"></div> -->									
									<div>预订2018年2月、3月团</div>
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
									<i class="fa fa-star active" aria-hidden="true"></i>
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
				    <div id="portugal-spain-morocco" name="home-trip-box" class="home-trip-box" data-dest="mo,portu,sp" data-tag="history,nature,seaview,honeymoon,food">
						<a href="itinerary-portugal-spain-morocco.php" >
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
								<img src="img/itinerary/allTripsList/portugal-spain-morocco.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">葡萄牙西班牙摩洛哥之旅</div>
								<div class="itiDess">
									里斯本 - 塞维利亚 - 格拉纳达 - 卡萨布兰卡 - 舍夫沙万 - 马德里
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
									<span class="delPrice">￥19,100</span>
									<span class="price">￥26,200<span>起</span></span>
								</div>
								<button class="yellowBtn">查看行程</button>
							</div>
						</a>
				    </div>				    			    				    
				    <div id="grand-tour-of-california" name="home-trip-box" class="home-trip-box" data-dest="wus" data-tag="history,art,honeymoon">
						<a href="itinerary-grand-tour-of-california.php" >
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
								<img src="img/itinerary/allTripsList/grand-tour-of-california.jpg" alt="" />
							</div>
							<div class="infoWrap">
								<div class="itiName">圆梦加州畅游之旅</div>
								<div class="itiDess">旧金山 - 优胜美地 - 蒙特雷 - 圣塔芭芭拉区 - 洛杉矶</div>
								<div class="itiDays">11天</div>
								<div class="rate">
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
									<i class="fa fa-star active" aria-hidden="true"></i>
								</div>
								<div class="itiIntro">
									从旧金山的蜿蜒海岸线、静美红杉林，令人陶醉的优胜美地，到纳帕和索诺玛谷的著名葡萄酒，还有因为LA LA Land而更名声大噪的星光璀璨洛杉矶，快来体验真正的加州生活吧！
								</div>
								<div class="itiPrice">
									<span class="delPrice">￥19,100</span>
									<span class="price">￥27,800<span>起</span></span>
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

			$('.blueRList li').click(function(){
				// var tabValue = $(this).attr('aria-controls');
				// console.log(tabValue);
				$('.blueRList li').removeClass('active');
				$(this).addClass('active');
				var left = $(this).offset().left;
				// console.log(jQuery(window).width());
				// console.log(left);
				if (1900 < jQuery(window).width()){
					// var left = $(this).offset().left;
					// alert('1960');
					$('.belongToArrow').css('left',left-350);
				}
				else if (1800 < jQuery(window).width() && jQuery(window).width() <= 1900){
					// var left = $(this).offset().left;
					// alert('1660');
					$('.belongToArrow').css('left',left-150);
				}
				else if (1700 < jQuery(window).width() && jQuery(window).width() <= 1800){
					// var left = $(this).offset().left;
					// alert('1660');
					$('.belongToArrow').css('left',left-180);
				}
				else if (1600 < jQuery(window).width() && jQuery(window).width() <= 1700){
					// var left = $(this).offset().left;
					// alert('1660');
					$('.belongToArrow').css('left',left-140);
				}
				else if (1500 < jQuery(window).width() && jQuery(window).width() <= 1600){
					// var left = $(this).offset().left;
					// alert('1500-1600');
					$('.belongToArrow').css('left',left-130);
				}
				else if (1400 < jQuery(window).width() && jQuery(window).width() <= 1500){
					// var left = $(this).offset().left;
					// alert('1400-1500');
					$('.belongToArrow').css('left',left-100);
				}
				else if (1300 < jQuery(window).width() && jQuery(window).width() <= 1400){
					// var left = $(this).offset().left;
					// alert('1300-1400');
					$('.belongToArrow').css('left',left-50);
				}
				else if (1200 < jQuery(window).width() && jQuery(window).width() <= 1300){
					// var left = $(this).offset().left;
					// alert('1200-1300');
					$('.belongToArrow').css('left',left-15);
				}
				else if (1100 < jQuery(window).width() && jQuery(window).width() <= 1200){
					// var left = $(this).offset().left;
					// alert('1100-1200');
					$('.belongToArrow').css('left',left+20);
				}				
				else if (1024 < jQuery(window).width() && jQuery(window).width() <= 1100){
					// var left = $(this).offset().left;
					// alert('1024-1100');
					$('.belongToArrow').css('left',left+15);
				}
				else if (900 < jQuery(window).width() && jQuery(window).width() <= 1024){
					// var left = $(this).offset().left;
					// alert('900-1024');
					$('.belongToArrow').css('left',left+1);
				}
				else if (800 < jQuery(window).width() && jQuery(window).width() <= 900){
					// var left = $(this).offset().left;
					alert('800-900');
					$('.belongToArrow').css('left',left+10);
				}
				else if (425 < jQuery(window).width() && jQuery(window).width() <= 800){
					// var left = $(this).offset().left;
					// alert('1024');
					$('.belongToArrow').css('left',left-4);
				}
				else if (jQuery(window).width() <= 425) {
					// var left = $(this).offset().left;
					// alert('425');
					$('.belongToArrow').css('left',left-4);
				}				
			});

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

			function changeTab(tabCon_num) {
				for (var i=0;i<=6;i++) {
					$('#tabCon_'+i).hide();
				}
				$('#tabCon_'+tabCon_num).show();
			}
		</script>
	</body>
</html>

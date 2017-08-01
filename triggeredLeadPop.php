
	<!--backend interface --> 

	<script type="text/javascript" src='../lib/services.js'></script>

    <!--leads and pages --> 

    <script type="text/javascript" src='js/func.js'></script>
	
	<script>
	
	function Quotation_Form_Submit()
	{	
	 bs_trackClick(bs_getEventCategory(), "Lead Form Submission");	
	 
	 Lead_Validation("sp-form", "Lead_Insert", null, true);
	}
	
	</script>
	<div class="triggeredFooterPop">
		<div class="site">
			<div class="triggeredLeadFormHeader">
				<div class="close">&times;</div>
				<h5>出境游签证不会办，怎么办？&gt;&gt;</h5>
			</div>
			<div class="triggeredLeadForm">
				<div class="goBackStatusIcon">
					<div class="whiteTrangle"></div>
					<div class="backgroundTrangle"></div>
				</div>
				<h5>出境游签证怎么申请？</h5><span>留下联系方式，让旅游管家手把手来帮你吧！</span>
				<div class="quoInfo">	
					<form id="sp-form">					
						<div class="quoItem">
							<label>出发城市：</label>
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
							<label>计划旅行时间：</label>
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
					<button id="lead-submit-button" onclick="Quotation_Form_Submit()" class="orangeBtn">免费咨询</button></div>
				</div>
				<div class="triggeredLeadFormFeedback">
					<div class="close">&times;</div>
					<h5>谢谢！</h5>
					<p>我们的服务管家会根据您的情况提出针对性的签证建议，请留意接听电话。</p>
				</div>
			</div>
		</div>
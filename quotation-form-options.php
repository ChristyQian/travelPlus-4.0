<?php 
	$text1 = '提交查询<i class="whiteArrow"></i></button></div>';
	$text2 = '在线预订<i class="whiteArrow"></i></button></div>';
?>
	<!--backend interface --> 

    <script type="text/javascript" src='../lib/services.js'></script>

    <!--leads and pages --> 

    <script type="text/javascript" src='js/func.js'></script>
	
	<script>
	
	function Quotation_Form_Submit()
	{	
	 bs_trackClick(bs_getEventCategory(), "Lead Form Submission");	
	 
	 Lead_Validation("sp-form", "Lead_Insert", "submitted.php", true);
	}
	
	</script>

					<div class="quoInfo">						

						<form id="sp-form">

							<h4><?php echo $itineraryName ?></h4>

							<div class="priceWG">								

								 <?php echo $itineraryPrice ?>

								 <span>起</span>

							</div>

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
								<label>Options: </label>
								<div class="dropdownArrowWrap">
									<select id="options" name="options" title="Tour Options" param="options">									
										<!-- <option value="2017 Labour Day">2017 五一节</option>										
										<option value="2017 Dragon Boat">2017 端午节</option>										
										<option value="2017 Summer Holiday">2017 暑假</option>										
										<option value="2017 National Day">2017 国庆</option>
										<option value="2017 Xmas">2017 圣诞/新年</option>										
										<option value="2018 Chinese New Year">2018 春节</option>										
										<option value="Others">其他</option>	 -->
										<option value="Normal Ticket">Normal Ticket</option>																			
										<option value="Upgraded Ticket">Upgraded Ticket</option>																			
										<option value="VIP  Ticket">VIP Ticket</option>																																					
									</select>

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
							<input name="marker" type="hidden" title="marker" param="marker" value="<?php echo $_SESSION['marker']; ?>">
							<input id="email" name="email" type="hidden" title="email" param="email" value="fake@email.com">
							<input name="motivation" type="hidden" title="motivation" param="motivation" value="-">
							<input name="destination" type="hidden" title="destination" param="destination" value="-">
							<input name="sfreplication" type="hidden" title="sfreplication" param="sfreplication" value="true">							

						</form>					

						<button id = "lead-submit-button" onclick="Quotation_Form_Submit()" class="orangeBtn" >
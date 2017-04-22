	<!--backend interface --> 

    <script type="text/javascript" src='../lib/services.js'></script>

    <!--leads and pages --> 

    <script type="text/javascript" src='js/func.js'></script>

					<div class="quoInfo">						

						<form id="sp-form">

							<h4><?php echo $itineraryName ?></h4>

							<div class="priceWG">								

								 <?php echo $itineraryPrice ?>

								 <span>起</span>

							</div>

							<div class="quoItem">

								<label>起飞地点：</label>

								<select id="city" name="city" title="城市" param="city">

									<option value="HK">香港</option>

									<option value="TW">台湾</option>

									<option value="BJ">北京</option>

									<option value="SH">上海</option>

								</select>

								<div id="city-error-msg" class="form-error-msg">

									<i class="fa fa-warning"></i>请输入起飞地点

								</div>

							</div>

							<div class="quoItem">

								<label>旅行时间：</label>

								<select id="age" name="age" title="年龄" param="age">

									<option value="Chinese New Year">新年</option>

									<option value="Dragon Boat">端午节</option>

									<option value="Labour Day">五一劳动节</option>

									<option value="National Day">十一国庆</option>

								</select>

								<div id="age-error-msg" class="form-error-msg">

									<i class="fa fa-warning"></i>请输入旅行时间

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

						</form>

						<button onclick="Lead_Validation('sp-form', 'Lead_Insert', 'submitted.php', true)" class="orangeBtn" >询价<i class="whiteArrow"></i></button>

					</div>

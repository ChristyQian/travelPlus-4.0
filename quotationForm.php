<?php
echo '
		<div class="section quoBg" name="getPersonalizedPrice" id="getPersonalizedPrice">
			<div class="quotation">
				<h4>查询实时价格</h4>
				<div class="quotationBg"></div>
				<div class="quotationWrap">
					<div class="discount">
						<div class="transparentBg"></div>
						<div class="transparentTxt">
							<p>节省20%</p>
							2月28日<br />
							之前预定
						</div>	
					</div>
					<div class="quoInfo">						
						<form>
							<h4>阿尔卑斯之旅</h4>
							<div class="priceWG">								
								 ￥16,100
								 <span>起</span>
							</div>
							<div class="quoItem errorStyle">
								<label>起飞地点：</label>
								<select name="where">
									<option value="HK">香港</option>
									<option value="TW">台湾</option>
									<option value="BJ">北京</option>
									<option value="SH">上海</option>
								</select>
								<div class="form-error-msg">
									<i class="fa fa-warning"></i>必填
								</div>
							</div>
							<div class="quoItem">
								<label>旅行时间：</label>
								<select name="when">
									<option>新年</option>
									<option>端午节</option>
									<option>五一劳动节</option>
									<option>十一国庆</option>
								</select>
							</div>
							<div class="quoItem errorStyle">
								<label>您的名字：</label>
								<textarea></textarea>
								<div class="form-error-msg">
									<i class="fa fa-warning"></i>请输入姓名
								</div>
							</div>
							<div class="quoItem">
								<label>电话：</label>
								<textarea></textarea>
							</div>
							<a href="submitted.html" class="orangeBtn" >询价<i class="whiteArrow"></i></a>
						</form>
					</div>
				</div>
				<div class="salesWrap">
					<div class="com_dialog">
							<div class="dialogWrap">
								<i class="closeIcon">&times;</i>
								<div class="dialog">
									<h5>微信上向我咨询</h5>
									<div class="flex-row-start-around">			
										<p>告诉我你想要的旅游类型，我会在这里帮你找到任何你想要的！</p>
										<img src="http://travelplus.ef.com.cn/sp/img/qrcode.png" width="80" height="80" />
									</div>
								</div>
								<div class="dialogBelongTo"></div>
							</div>							
						</div>
						<div class="userInfo">
							<div class="com_profile">
								<div class="imgWrap">
									<img src="http://travelplus.ef.com.cn/sp/img/inner-our-team-3.jpg">
								</div>
							</div>
							<span class="name">Jax Oddo,</span>
							<span class="position">Tour Director</span>
						</div>
				</div>
			</div>
		</div>
'
?>
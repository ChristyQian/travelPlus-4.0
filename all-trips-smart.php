<!DOCTYPE html>
<html>
<?php 
	$pageName="all-trips";
	$tagTitle="行程 - EF TravelPlus | 英孚旅游+";
	$metaTitle="欧洲旅游新选择_EF英孚旅游_一站式旅游专家";
	$metaKeywords="欧洲旅游，EF英孚旅游，EFTravelPlus，品质跟团游，EF英孚教育，告别走马观花，体验式旅行";
	$metaDescription="英孚旅游+,是英孚旗下一站式旅游服务专家，在全球众多国家拥有专业的旅游执行团队和完善的网络体系，用有趣的方式，让你和有趣的年轻人一起，发现未知的精彩世界。";

    include_once("all-trips-head.php"); 
?>
	<body data-spy="scroll" data-target="#tripsFilter">

	<script type="text/javascript" src='js/func.js'></script>
	
<?php 
	include_once('common-header2.php');
?>	
		<!-- If Edit Model -->
		<div class="section filter editModel" id="tripsFilter" data-spy="affix" data-offset-top="192" >
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
								<option value="australia" data-display="澳大利亚">澳大利亚</option>
								<option value="wus" data-display="美国西部">美国西部</option>
								<option value="ic" data-display="冰岛">冰岛</option>
								<option value="db" data-display="迪拜">迪拜</option>
								<option value="mo" data-display="摩洛哥">摩洛哥</option>
								<option value="portu" data-display="葡萄牙">葡萄牙</option>
								<option value="uk" data-display="英国">英国</option>
								<option value="sc" data-display="苏格兰">苏格兰</option>
								<option value="ir" data-display="爱尔兰">爱尔兰</option>
								<option value="fr" data-display="法国">法国</option>
								<option value="ge" data-display="德国">德国</option>
								<option value="it" data-display="意大利">意大利</option>
								<option value="sp" data-display="西班牙">西班牙</option>
								<option value="nz" data-display="荷兰">荷兰</option>
								<option value="swz" data-display="瑞士">瑞士</option>
								<option value="swd" data-display="瑞典">瑞典</option>
								<option value="gr" data-display="希腊">希腊</option>
								<option value="dm" data-display="丹麦">丹麦</option>
								<option value="nw" data-display="挪威">挪威</option>
								<!-- <option value="fl" data-display="芬兰">芬兰</option> -->
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
		
		<div class="section filter filterResult" id="tripsFilter" data-spy="affix" data-offset-top="200" style="display:none;">
			<div class="site">
				<div class="flex-row-center-between">
					<div id="filter-selected" class="flex-row-center-start filterConditions">
					</div>
					
					<button class="blueRBtn edit">编辑</button>
					
				</div>
			</div>
		</div>
		
		<div class="site">
			<!-- trips -->
			    <?PHP		
				// LOAD ITINERARY BOX TEMPLATES
			    $templates = [];
			    $files     = scandir("itineraries/templates");
				foreach($files as $file) if($file!=".." && $file!=".") 
				{
				 $name             = substr($file, 0, strrpos($file, '.')); 
				 $templates[$name] = file_get_contents("itineraries/templates/" . $file); 
			    }
			    
				// LIST OF ITINERARIES
				$list = parse_ini_file("itineraries/list.ini", true);
				
				// SEARCH PARAMETERS FROM URL REQUEST?
				if(isset($_REQUEST["keywords"])) $search    = explode(",", $_REQUEST["keywords"]); else $search = false;
				
				// RENDER
				$itineraries     = array_keys($list);
				$section_html     = "";
				$section_name     = "";
				
				foreach($itineraries as $name)
				{
				 $itinerary = $list[$name];
				 
				 // IS IT A NEW SECTION?
                 if(array_keys($itinerary) == [])
				 {
				  // FLUSH CURRENT SECTION
				  if($section_name != "") 
				  {
				   $html = $templates["section"];
				   $html = str_replace("%name%", $section_name, $html);
				   $html = str_replace("%itineraries%", $section_html, $html);
				   
				   echo $html;
				  }
				  
                  $section_name = $name;
				  $section_html = "";
				 }
                 else
				 // IT IS AN ITINERARY
                 {					 
				  // IF SEARCH PARAMETERS ARE SET, PERFORM FILTERING, OTHERWISE DISPLAY EVERYTHING
				  if(!$search) $display = true;
				  else
				  {	 
				   $keywords  = explode(",", $itinerary["keywords"]);
				   $display   = false;
				
				   foreach($search as $check) 
				   foreach($keywords as $keyword) 
				   {
				    if($check == $keyword) 
				    {
				     $display = true; 
				     break;
				    }
				   }
				  }				  
				 
				  // RENDER ITINERARY
				  if($display)
			      {
				   $template                = $itinerary["template"];
				   if(!$template) $template = "standard";
				   $html                    = $templates[$template];
				  
				   $html = str_replace("%name%",   $name,               $html);
				  
				   $params = array_keys($itinerary);
				   foreach($params as $param) $html = str_replace("%$param%",  $itinerary[$param], $html);	 
				  
				   // ADD TO SECTION
				   $section_html = $section_html . $html;
				  }
				 }
				 
				}
				
			?>
		</div>
		<!-- footer -->
<?php 
	include_once('common-footer2.php')
?>
<?php include 'popup.php' ;?>
		<script src="js/jquery-2.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/sticky.min.js"></script>
		<script>
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
		</script>
	</body>
</html>

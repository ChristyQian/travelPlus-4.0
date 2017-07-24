function Email_Validation (email)
{
  var reg = /^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+((\.[a-zA-Z0-9_-]{2,3}){1,2})$/;
  return reg.test(email);
}

function Mobile_Validation (mobile)
{
  var reg = /^1[3|4|5|8][0-9]\d{8}$/;
  return reg.test(mobile);
}

function Input_Error (element)
{
  document.getElementById(element.id + "-error-msg").style.display="inline";  
}

function Input_Pass (element)
{ 
  document.getElementById(element.id + "-error-msg").style.display="none";  
}

function Lead_Validation(formname, func, redirect, immediate)
{
  var form = document.getElementById(formname);  

  if(form)
  {
    for(var i=0, l=form.elements.length; i<l; i++)
    {
      var element = form.elements[i];
      if(element && element.type != "hidden")
      {
        var val = element.value;
        if (val==null||val=="")
        {
          Input_Error(element);
          return false;
        } 
        else if (element.name == "email" && (!Email_Validation(val) || !element.value))
        {
          Input_Error(element);
          return false;
        }
        else if (element.name == "mobile" && (!Mobile_Validation(val) || !element.value))
        {
          Input_Error(element);
          return false;
        }
        else
        {
          Input_Pass(element);
        }
      }      
    }    
  }

  var button = document.getElementById("lead-submit-button");
  
  if(button) button.style.visibility = "hidden";
  
  
  if(func)
  {
   Service_From_Form(formname, func, redirect, immediate,
   function()
   {
    if(button) button.style.visibility = "visible";
   }
   );
  } 

  return true;
}

function Hide_Error_Msg (formname)
{
   var form = document.getElementById(formname);

   if(form)
  {    
    for(var i=0, l=form.elements.length; i<l; i++)
    {
      var element = form.elements[i];    
      if(element && element.type != "hidden")  
        Input_Pass(element);
    }
  }
}

function Trip_Filter () 
{
	document.getElementById("filter-selected").innerText = '';
	
	Trip_Hide_All();
	
	Trip_Tag_Filter();	
	Trip_Destination_Filter();
}

function Trip_Hide_All()
{
	// var boxes = document.getElementsByClassName('home-trip-box');
	var boxes = $('#otherSection .home-trip-box');
	
	for (var i=0, l=boxes.length; i<l; i++)
	{
		var box = boxes[i];
		box.style.display = "none";
	}	
}

function Trip_Show_All()
{
	var boxes = document.getElementsByClassName('home-trip-box');
	
	for (var i=0, l=boxes.length; i<l; i++)
	{
		var box = boxes[i];
		box.style.display = "inline";
	}	
}

function Trip_Destination_Filter()
{
	var dest = document.getElementById('destination').options[document.getElementById('destination').selectedIndex].value;
	
	var destName = document.getElementById('destination').options[document.getElementById('destination').selectedIndex].getAttribute("data-display");
		
	document.getElementById("filter-selected").innerHTML += '<div>' + destName + '</div>';

	// var boxes = document.getElementsByClassName('home-trip-box');
	var boxes = $("#otherSection .home-trip-box");
	
	for (var i=0, l=boxes.length; i<l; i++)
	{		
		var box = boxes[i];

		if (dest=="all") {   // SERIOUSLY????????????
			//box.style.display = "inline";
		} else {
			var tripDest = box.getAttribute("data-dest");
			
			if (tripDest != null && tripDest.indexOf(dest) >= 0) 
			{
				
			}
			else
			{
				box.style.display = "none";
			}
		}
	}
}

function Trip_Tag_Filter () 
{
	var tags = document.getElementsByClassName('checkbox');
	var boxes = document.getElementsByClassName('home-trip-box');
	
	var hasTag=0;
	
	for (var i=0, l=tags.length; i<l; i++) {
		if (tags[i].className.indexOf('checked') >= 0)
		{			
			hasTag = 1;
			
			var tag = tags[i].getAttribute("data-tag");
			
			var tagName = tags[i].getAttribute("data-display");
			
			for (var n=0, m=boxes.length; n<m; n++)
			{
				var box = boxes[n];
				
				var tripTag = box.getAttribute("data-tag");
				
				if (tripTag != null && tripTag.indexOf(tag) >= 0)
				{
					box.style.display = "inline";
				}
								
			}
			
			document.getElementById("filter-selected").innerHTML += '<div>' + tagName + '</div>';
		}
	}
	
	if (hasTag == 0) {
		Trip_Show_All();
	}
}


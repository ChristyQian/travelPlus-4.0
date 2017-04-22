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
          return;
        } 
        else if (element.name == "email" && (!Email_Validation(val)))
        {
          Input_Error(element);
          return;
        }
        else if (element.name == "mobile" && (!Mobile_Validation(val)))
        {
          Input_Error(element);
          return;
        }
        else
        {
          Input_Pass(element);
        }
      }      
    }    
  }

  Service_From_Form(formname, func, redirect, immediate);

  return;
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
	Trip_Destination_Filter();
	Trip_Tag_Filter();	
}

function Trip_Destination_Filter()
{
	var dest = document.getElementById('destination').options[document.getElementById('destination').selectedIndex].value;

	var boxes = document.getElementsByName('home-trip-box');
	
	for (var i=0, l=boxes.length; i<l; i++)
	{
		var box = boxes[i];

		if (dest=="all") {
			box.style.display = "inline";
		} else {
			var tripDest = box.getAttribute("data-dest");
			
			if (tripDest != null && tripDest.indexOf(dest) >= 0) 
				box.style.display = "inline";
			else
				box.style.display = "none";
		}
	}
}

function Trip_Tag_Filter () 
{
	var tags = document.getElementsByName('tag-selector');
	var boxes = document.getElementsByName('home-trip-box');
	
	for (var i=0, l=tags.length; i<l; i++) {
		if (tags[i].className.indexOf('checked') >= 0)
		{
			var tag = tags[i].getAttribute("data-tag");
			
			for (var i=0, l=boxes.length; i<l; i++)
			{
				var box = boxes[i];
				if (box.style.display == "inline")
				{
					var tripTag = box.getAttribute("data-tag");
				
					if (tripTag != null && tripTag.indexOf(tag) >= 0)
					{
						box.style.display = "inline";
					} 
					else 
					{
						box.style.display = "none";
					}
				}				
			}
		}
	}
}


function Service_From_Form(formname, funcname, redirect, immediate, callback)
{  
 var form = document.getElementById(formname);
 
 var params = "func=" + funcname;
 
 if(form)
 {
	  
  for(var i=0, l=form.elements.length; i<l; i++)
  {  
   var element = form.elements[i];   
   
   if(element && element.attributes && element.attributes.param) 
   params = params + "&" + element.attributes.param.value + "=" + encodeURI(element.value); 	
  }
  
 }
  
 var request = new XMLHttpRequest();
 request.open("POST", "http://travelplus.ef.com.cn/lib/services.php", true);
 request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");

 /*
 if(immediate)
 { 
  request.send(params); 	
  
  if(redirect) document.location.href = redirect;
 }
 else
 */
 //{
  request.onreadystatechange=
  function()
  {
   if (request.readyState==4 && request.status==200)
   {	   
    if(redirect) document.location.href = redirect;
	
	if(callback) callback();
   }
  } 	 
  
  request.send(params); 	
 //}
 
}





function Service(func, arguments, callback)
{
 var service  =  'http://travelplus.ef.com.cn/lib/services.php';
 
 var paramstr =  'func=' + func;
 
 var params = Object.keys(arguments);
 
 for(var i in params)
 {
  var param = params[i];
  var value = arguments[param];
  
  paramstr = paramstr + '&' + param + '=' + value;
 }
 
 var loader      = new XMLHttpRequest();
 loader.callback = callback;
 
 loader.onreadystatechange=function()
 {
  if (loader.readyState==4 && loader.status==200)
  {
   var data = loader.responseText;
   if(loader.callback) loader.callback(data);
  }
 }
  
 console.log(paramstr); 
  
 loader.open("POST", service, true);
 loader.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
 loader.send(paramstr);
}
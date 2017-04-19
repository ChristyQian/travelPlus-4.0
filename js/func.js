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

function Get_Price (itinerary, city, date)
{
  var price_table = [['sh','barcelona-southern-france-the-italian-riviera','18200','22300','18200','20200','22600','22700','24600','24300','25600'],
                    ['sh','food-wine-a-taste-of-spain','23300','27900','23300','23300','25500','24800','27200','27900','25000'],
                    ['sh','food-wine-france-through-bordeaux-the-loire-valley','21000','23200','21000','21000','21600','22400','24000','23800','22300'],
                    ['sh','food-wine-northern-italy-the-italian-riviera','20300','23600','20300','20400','22000','22400','24200','23800','25700'],
                    ['sh','germany-switzerland-austria','22500','24200','21100','21200','23800','24000','24900','25000','23900'],
                    ['sh','grand-tour-of-italy','20900','23600','20900','20900','24700','25300','27000','25200','25000'],
                    ['sh','grand-tour-of-spain','19700','24400','19700','19700','22300','22100','24500','24500','21800'],
                    ['sh','highlights-of-northern-europe-london-to-copenhagen','24100','28700','24100','24100','24900','25200','29300','28300','24900'],
                    ['sh','italy-greece','20000','22500','20000','20400','24570','23000','24200','22700','23100'],
                    ['sh','jewels-of-alpine-europe','20600','25400','20600','20600','22800','23900','26900','25700','25800'],
                    ['sh','london-edinburgh-dublin','21300','24600','21300','21300','22600','22900','25100','25400','23200'],
                    ['sh','london-paris-amsterdam','22100','25300','22100','22100','23400','24000','26200','25300','23800'],
                    ['sh','london-paris-madrid','21400','24800','21400','21400','23000','23200','25000','24200','23100'],
                    ['sh','london-paris-rome','21400','24500','21400','22100','23600','24200','26100','25000','23900'],
                    ['sh','paris-the-riviera-tuscany','26000','28500','26000','26000','26400','26100','28300','27500','26200'],
                    ['sh','rome-paris-london','22000','25100','22000','22000','22400','23100','25600','24000','23200'],
                    ['sh','scandinavia-the-capitals-the-fjords','24800','28000','24800','24800','26100','26500','28400','29100','26400'],
                    ['sh','rome-sorrento-sicily','19100','21700','19100','19100','21600','22500','24400','22800','22400'],
                    ['sh','switzerland-alsace-the-black-forest','24200','29100','24200','24200','26500','26800','29400','29500','26700'],
                    ['sh','venice-florence-rome','17800','21000','17800','17300','21100','20400','23100','21100','20300'],
                    ['sh','rome-paris','22100'],
                    ['sh','rome-paris-athens','24400'],
                    ['bj','barcelona-southern-france-the-italian-riviera','18300','22600','18300','20200','22400','21800','25000','24600','24700'],
                    ['bj','food-wine-a-taste-of-spain','23600','27700','23600','23600','25400','24700','26900','27700','24900'],
                    ['bj','food-wine-france-through-bordeaux-the-loire-valley','20400','24500','20400','20400','22000','22800','25300','25000','22700'],
                    ['bj','food-wine-northern-italy-the-italian-riviera','20800','24700','20800','20900','22700','23100','25300','24800','25800'],
                    ['bj','germany-switzerland-austria','21000','24700','21000','21100','23300','23600','25500','25600','23500'],
                    ['bj','grand-tour-of-italy','20600','24800','20600','20600','25100','25700','28200','26400','25400'],
                    ['bj','grand-tour-of-spain','20000','24100','20000','20100','22100','22000','24300','24200','22700'],
                    ['bj','highlights-of-northern-europe-london-to-copenhagen','22900','27100','22900','22900','24900','25100','27700','26700','24900'],
                    ['bj','italy-greece','19100','24100','19100','19500','24150','23300','25800','24300','23400'],
                    ['bj','jewels-of-alpine-europe','21400','25400','21400','21400','23500','24600','26800','25600','25700'],
                    ['bj','london-edinburgh-dublin','22000','26100','22000','22000','23600','23800','26600','26900','24200'],
                    ['bj','london-paris-amsterdam','21300','25400','21300','21300','23300','23800','26300','25400','24100'],
                    ['bj','london-paris-madrid','21600','25300','21600','21600','23100','23300','25500','24700','23200'],
                    ['bj','london-paris-rome','20000','24500','20000','20700','23900','24000','26100','25000','23700'],
                    ['bj','paris-the-riviera-tuscany','24900','29700','24900','24900','27100','26800','29400','28700','26900'],
                    ['bj','rome-paris-london','20600','25100','20600','20600','22200','22900','25600','24000','23000'],
                    ['bj','scandinavia-the-capitals-the-fjords','26200','30000','26200','26200','26900','27300','30500','31400','27200'],
                    ['bj','rome-sorrento-sicily','18200','22200','18200','18200','21300','22200','24800','23300','22100'],
                    ['bj','switzerland-alsace-the-black-forest','24400','27700','24400','24400','25600','25900','28000','28200','25800'],
                    ['bj','venice-florence-rome','16300','21900','16300','15800','21000','21200','23900','22000','21100'],
                    ['bj','rome-paris','23200'],
                    ['bj','rome-paris-athens','24600'],
                    ['gz','barcelona-southern-france-the-italian-riviera','19200','25600','19200','21100','23900','23300','27900','27600','26500'],
                    ['gz','food-wine-a-taste-of-spain','24400','30500','24400','24400','26900','26100','29700','30500','26400'],
                    ['gz','food-wine-france-through-bordeaux-the-loire-valley','21300','27400','21300','21300','23500','24300','28200','28000','24200'],
                    ['gz','food-wine-northern-italy-the-italian-riviera','21900','27700','21900','21900','24300','24700','28400','27900','25000'],
                    ['gz','germany-switzerland-austria','21700','28000','21700','21800','24700','24900','28700','28800','24900'],
                    ['gz','grand-tour-of-italy','21500','27600','21500','21500','26600','27100','31000','29200','26900'],
                    ['gz','grand-tour-of-spain','20900','26900','20900','20900','23600','23500','27100','27000','25900'],
                    ['gz','highlights-of-northern-europe-london-to-copenhagen','23800','29900','23800','23800','26400','26600','30400','29500','26400'],
                    ['gz','italy-greece','20000','27100','20000','20400','25830','24900','28900','27400','25000'],
                    ['gz','jewels-of-alpine-europe','22300','28300','22300','22300','25000','26100','29700','28500','27800'],
                    ['gz','london-edinburgh-dublin','23000','29000','23000','23000','25200','25500','29500','29800','25800'],
                    ['gz','london-paris-amsterdam','23100','28000','23100','23100','25000','25600','28900','27900','27600'],
                    ['gz','london-paris-madrid','22600','28100','22600','22600','24700','24900','28300','27500','24800'],
                    ['gz','london-paris-rome','20900','27300','20900','21600','25600','25500','28900','27800','25200'],
                    ['gz','paris-the-riviera-tuscany','25700','32500','25700','25700','28600','28200','32200','31500','28400'],
                    ['gz','rome-paris-london','21500','27900','21500','21500','23700','24400','28400','26800','24500'],
                    ['gz','scandinavia-the-capitals-the-fjords','27400','33400','27400','27400','28500','28900','33800','33500','28800'],
                    ['gz','rome-sorrento-sicily','19300','25400','19300','19300','23000','23900','28000','26500','23800'],
                    ['gz','switzerland-alsace-the-black-forest','25400','30600','25400','25400','27200','27500','30900','31000','27400'],
                    ['gz','venice-florence-rome','17000','24800','17000','16500','22600','22700','26800','24900','22600'],
                    ['gz','rome-paris','26100'],
                    ['gz','rome-paris-athens','27700'],
                    ['cd','barcelona-southern-france-the-italian-riviera','19200','25600','19200','21100','23900','24800','27900','27600','23600'],
                    ['cd','food-wine-a-taste-of-spain','24400','30500','24400','24400','26900','26100','29700','30500','26400'],
                    ['cd','food-wine-france-through-bordeaux-the-loire-valley','21300','27400','21300','21300','23500','24300','28200','28000','24200'],
                    ['cd','food-wine-northern-italy-the-italian-riviera','21900','27700','21900','21900','24300','24700','28400','27900','25000'],
                    ['cd','germany-switzerland-austria','21700','28000','21700','21800','24700','24900','28700','28800','24900'],
                    ['cd','grand-tour-of-italy','21500','27600','21500','21500','26600','27100','31000','29200','26900'],
                    ['cd','grand-tour-of-spain','20900','26900','20900','20900','23600','23500','27100','27000','23500'],
                    ['cd','highlights-of-northern-europe-london-to-copenhagen','23800','29900','23800','23800','26400','26600','30400','30100','26400'],
                    ['cd','italy-greece','20000','27100','20000','20400','28245','24900','28900','26800','25000'],
                    ['cd','jewels-of-alpine-europe','22300','28300','22300','22300','25000','26100','29700','28500','25500'],
                    ['cd','london-edinburgh-dublin','23000','29000','23000','23000','25200','25500','29500','29800','25800'],
                    ['cd','london-paris-amsterdam','23100','28000','23100','23100','25000','25600','28900','27900','29000'],
                    ['cd','london-paris-madrid','22600','28100','22600','22600','24700','24900','28300','27500','24800'],
                    ['cd','london-paris-rome','20900','27300','20900','21600','25600','25500','28900','27200','25200'],
                    ['cd','paris-the-riviera-tuscany','25700','32500','25700','25700','28600','28200','32200','31500','28400'],
                    ['cd','rome-paris-london','21500','27900','21500','21500','23700','24400','28400','26800','24500'],
                    ['cd','scandinavia-the-capitals-the-fjords','27400','33400','27400','27400','28500','28900','33800','36200','28800'],
                    ['cd','rome-sorrento-sicily','19300','25400','19300','19300','23000','23900','28000','26500','23800'],
                    ['cd','switzerland-alsace-the-black-forest','25400','30600','25400','25400','27200','27500','30900','31000','27400'],
                    ['cd','venice-florence-rome','17000','24800','17000','16500','22600','22700','26800','24900','22600'],
                    ['cd','rome-paris','26100'],
                    ['cd','rome-paris-athens','27600']];

  for (var i=0; i<price_table.length; i++) {
    
    var price_obj = price_table[i];
    
    if (price_obj) 
    { 
      if (price_obj[0]==city && price_obj[1]==itinerary && price_obj.length > parseInt(date)) 
      {        
        document.getElementById("trip_price_amount").innerText = price_obj[parseInt(date)+1];
        break;
      }
    }
  }
}

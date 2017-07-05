// function ReadXml(){
//             string responseInfo = "<?xml version=\"1.0\" encoding=\"UTF-8\" ?>"
//                                 + @"<Document>
//                                         <ChiefComplaint>
//                                             <![CDATA[右眼视力进行性下降2年余]]>
//                                         </ChiefComplaint>
//                                     </Document>";


//             XmlDocument doc = new XmlDocument();
//             doc.LoadXml(responseInfo);
//             string xpathChiefComplaint = "/Document/ChiefComplaint";

//             XmlNode xnChiefComplaint = doc.SelectSingleNode(xpathChiefComplaint);

//             string nodeValue = xnChiefComplaint.InnerText;
// },
function getCountries() {
    return ['france','italy','switzerland','greece','spain','britain','netherlands','austria', 'germany','pompeii', 'capri','cinque-terre','athens','rome','florence','nice','barcelona','paris','london','amsterdam','vienna','heidelberg','champagne', 
'van-gogh'];
}

function getRssFetch(rssUrl){
    var unitItemJObj = []; 
     $.getFeed({
        url: rssUrl,
        dataType: 'xml',
        success: function(feed) {          
             
            var list = [];
            var listItem = [];        
            for(var i = 0; i < feed.items.length; i++) {
            	/* item */
                var item = feed.items[i];
                /* item.image */
                var re = /<img[^>]+>/g;
                var image = item.description.match(re);
                //return image.attr('src');
                /* item.date */
                var formatDate = function (date) {  
				    var y = date.getFullYear();  
				    var m = date.getMonth() + 1;  
				    m = m < 10 ? '0' + m : m;  
				    var d = date.getDate();  
				    d = d < 10 ? '0' + d : d;  
				    return y + '-' + m + '-' + d;  
				};
                var time = formatDate(new Date(item.updated));
                
                var unitHtml = '<div class="flex1 flex-row-center-between">'
                + '<div class="image">'
                + image
	            + '</div>'
                + '<div class="info">'
                + '<a href="'
                + item.link
                + '">'
                + '<h5>'
	            + item.title
	            + '</h5>'	            
                + '</a>'
                + '<time>'
                + time
                + '</time>'
                + '</div>'
                + '</div>';
                unitItemJObj.push($(unitHtml));
             }
             return unitItemJObj;
             //    $('.blog').append('<div class="flex-row-start-around flex-flow">'
            	// + html
             //    + '</div>');
            }    
     });
}
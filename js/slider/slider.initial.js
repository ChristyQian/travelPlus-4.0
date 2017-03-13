function Slider_Initial(contrainer, image) {

    $(contrainer).hover(function(){        
        $("#btn-prev,#btn-next").fadeIn()
    },function(){
        $("#btn-prev,#btn-next").fadeOut()
    });
    
    $dragBln = false;
    
    $(image).touchSlider({
        flexible : true,
        speed : 500,
        btn_prev : $("#btn-prev"),
        btn_next : $("#btn-next"),
        paging : $(".flicking-con a"),
        counter : function (e){
            $(".flicking-con a").removeClass("on").eq(e.current-1).addClass("on");
        }
    });
    
    $(image).bind("mousedown", function() {
        $dragBln = false;
    });
    
    $(image).bind("dragstart", function() {
        $dragBln = true;
    });
    
    $(image+" a").click(function(){
        if($dragBln) {
            return false;
        }
    });
    
    timer = setInterval(function(){
        $("#btn-next").click();
    }, 5000);
    
    $(contrainer).hover(function(){
        clearInterval(timer);
    },function(){
        timer = setInterval(function(){
            $("#btn-next").click();
        },5000);
    });
    
    $(image).bind("touchstart",function(){
        clearInterval(timer);
    }).bind("touchend", function(){
        timer = setInterval(function(){
            $("#btn-next").click();
        }, 5000);
    });
}

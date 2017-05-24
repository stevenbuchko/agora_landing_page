$("#menu-button").click(function(){
    if(!$("#bs-example-navbar-collapse-1").hasClass("in") && !$("#mainNav").hasClass("navbar-box-shadow")){
        $("#mainNav").addClass("navbar-box-shadow");
        
        $(".navbar-default").css("background-color","black");
    } else if($("#bs-example-navbar-collapse-1").hasClass("in") && $("#mainNav").hasClass("navbar-box-shadow")){
        $("#mainNav").removeClass("navbar-box-shadow");
        
        $(".navbar-default").css("background-color","rgba(0, 0, 0, 0.6)");
    }
})
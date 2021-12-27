$(document).ready(function(){
    var stt = 0;
    starimg = $("img.slide:first").attr("stt");
    endimg = $("img.slide:last").attr("stt");
    $("img.slide").each(function(){
        if($(this).is(':visible'))
            stt= $(this).attr("stt");
    });
    $("#next").click(function(){
        if(stt== endimg){
            stt=-1;
        }
        next = ++stt;
        $("img.slide").hide();
        $("img.slide").eq(next).show();
    });
    $("#prev").click(function(){
        if(stt==0){
            stt=endimg;
            prev=stt++;
        }
        prev=--stt;
        $("img.slide").hide();
        $("img.slide").eq(prev).show();
    });
    setInterval(function(){
        $("#next").click();
    }, 5000);
});
$(document).ready(function(){
  $(window).scroll(function(){
    var scroll = $(window).scrollTop();
    if(scroll>300){
      $(".navbar").css("background", "rgba(197,205,245,0.5)");

    }
    else{
      $(".navbar").css("background","transparent");
    }
  });
}); 

/*
$(document).ready(function(){
  $(window).on("scroll",function(){
    var link = $(".vertical-nav a");
    var top = $(window).scrollTop();

    $(".sec").each(function(){
      var id = $(this).attr("id");
      var height = $(this).height();
      var offset = $(this).offset().top - 150;
      if(top>=offset && top< offset+ height){
        link.removeClass("active");\
        $(".vertical-nav").find("[data-scroll="' + id +'"]").addClass("active");

      } 

    });
  });
});

*/
function showContent(evt, id){
  var i, tabcontent, tablink;
  tabcontent = document.getElementByClassName("tabcontent");

  for(i=0;i<tabcontent.length;i++){
    tabcontent[i].style.display = "none";
  }
  tablink = document.getElementByClassName("tablink");
  for(i=0;i<tablink.length;i++){
    tablink[i].className = tablink[i].className.replace("active","");
  }

  document.getElementById(id).style.display = "block";
  evt.currentTarget.className += " active";
}




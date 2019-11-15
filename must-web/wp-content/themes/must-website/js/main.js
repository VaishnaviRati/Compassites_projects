$(document).ready(function(){


// scroll to carouselExampleIndicators div
$(".learn-more").click(function() {
    $('html,body').animate({
        scrollTop: $(".carousel-block").offset().top},
        1000);
});
// more and less button functionality
  $('.more-details').each(function(){
    $(this).on('click',function(){   
      $(this).find('.fas').toggleClass('fa-chevron-up');
      if ($(this).text() == "More"){
        $(this).find('span').text("Less");
        $(this).parent().find('.card-body').animate({height: "415px"},1000);
      }     
      else{
        $(this).find('span').text("More");
        $(this).parent().find('.card-body').animate({height: "220px"},1000);
      }
     
    })
     
  })

})
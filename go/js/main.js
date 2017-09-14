/**
 * Created by User on 04.11.2016.
 */
(function($) {

    var allPanels = $('.accordion > div.accordion-text').hide();
    var allArrows = $('.accordion > div.accordion-title > a > img');

    $('.accordion > div.accordion-title > a').click(function() {

        allPanels.slideUp();
        allArrows.addClass('close');
        allArrows.removeClass('open');
        
        if( $(this).parent().next().css('display') == "block" ) {
            $(this).parent().next().slideUp();
            $( this ).children().removeClass('open');
            $(this).children().addClass('close');
        } else {
            $(this).parent().next().slideDown();
            $(this).children().addClass('open');
            $( this ).children().removeClass('close');
        }
        return false;
    });

})(jQuery);

/* $(".up-arrow").click(function (){
    $("body,html").animate({
        scrollTop:0
    }, 800);
    return false;
	
});

$(".test-drive").click(function (){
    $("body,html").animate({
        scrollTop:9999
    }, 800);
    return false;
}); */


 $('a[href^="#"]').click(function(){
var el = $(this).attr('href');
$('body').animate({
scrollTop: $(el).offset().top}, 2000);
return false;
});

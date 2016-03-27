if (typeof jQuery === 'undefined') {
  throw new Error('Requires jQuery')
}
/* wow active*/
new WOW().init();

/*scroll smoot*/
$(window).load(function(){    
    $("html").niceScroll({
        cursoropacitymin: 0,
        cursoropacitymax: 0,
        mousescrollstep: 50,
    });
});
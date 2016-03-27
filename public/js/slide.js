
if (typeof jQuery === 'undefined') {
  throw new Error('Requires jQuery')
}

$(window).scroll(function() {
    var width = window.innerWidth;
    var scrolllogo = $(window).scrollTop();
    var scrollmenu = $(window).scrollTop();
    if(scrolllogo > 50 && width >991)
    {
      if(! $(".navbar-logo").hasClass('scroll-logo-edit'))
        $(".navbar-logo").addClass('scroll-logo-edit');
    }
    else
    {
      if($(".navbar-logo").hasClass('scroll-logo-edit'))
        $(".navbar-logo").removeClass('scroll-logo-edit');
    }

    if(scrollmenu > 50  && width >991)
    {
      if(! $(".navbar-menu").hasClass('scroll-menu-edit'))
        $(".navbar-menu").addClass('scroll-menu-edit');
    }
    else
    {
      if($(".navbar-menu").hasClass('scroll-menu-edit'))
        $(".navbar-menu").removeClass('scroll-menu-edit');
    }

  });

    

/******************************************************************************************/



$(document).ready(function() {

    /**/
    $('.full-box-right-footer').click(function () {
        $('.full-box-right-footer iframe').css("pointer-events", "auto");
        $('.full-box-right-footer iframe').css("cursor", "pointer");
    });
    
    $( ".full-box-right-footer" ).mouseleave(function() {
      $('.full-box-right-footer iframe').css("pointer-events", "none"); 
    });

 });        
/******************************************************************************************/
$(document).ready(function() {
  $(".various").fancybox({
    maxWidth  : 1000,
    maxHeight : 800,
    fitToView : false,
    width   : '90%',
    height    : '90%',
    autoSize  : false,
    closeClick  : false,
    openEffect  : 'none',
    closeEffect : 'none'
  });
});

/*Slide Head Index Page*/
$(document).ready(function () {
    $("#owl-header-slide").owlCarousel({
      navigation : false, // Show next and prev buttons
      paginationSpeed : 2500,
      singleItem:true,
      autoPlay: 4500,
      responsiveRefreshRate:1,
      rewindNav: true,
      rewindSpeed: 4000,
      stopOnHover: false,
      pagination: true,
      mouseDrag: false,
      transitionStyle : "fade",
    });
    // Custom Navigation Events
    $(".btn-prev-owl-angle-index").click(function(){
      $("#owl-header-slide").trigger('owl.prev');
    })
    $(".btn-next-owl-angle-index").click(function(){
      $("#owl-header-slide").trigger('owl.next');
    })
    
});
/*END Slide Head Index Page*/

$(document).ready(function () {
    $("#owl-rec").owlCarousel({
        navigation: false,
        pagination: false,
        items: 1,
        singleItem : true,
    });

    // Custom Navigation Events
    $(".btn-next-owl-caret-rec").click(function(){
      $("#owl-rec").trigger('owl.next');
    })
    $(".btn-prev-owl-caret-rec").click(function(){
      $("#owl-rec").trigger('owl.prev');
    })
});
/******************************************************************************************/
/*Slide spcct Index Page*/
$(document).ready(function () {
  $("#owl-spcct-slide").owlCarousel({
      pagination: false,
      navigation : false, // Show next and prev buttons
      slideSpeed: 200,
      paginationSpeed : 3700,
      singleItem: false,
      responsiveRefreshRate:1,
      rewindNav: true,
      rewindSpeed: 2500,
      stopOnHover: true,
      items: 3,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [980,2],
      itemsTablet: [768,2],
      itemsTablet: [520,1],
      itemsMobile : [479,1],
      itemsMobile : [320,1],
      
  });
  // Custom Navigation Events
  $(".btn-next-owl-foot-index").click(function(){
    $("#owl-spcct-slide").trigger('owl.next');
  })
  $(".btn-prev-owl-foot-index").click(function(){
    $("#owl-spcct-slide").trigger('owl.prev');
  })
});
/*END spcct Head Index Page*/

/******************************************************************************************/

/******************************************************************************************/
/*Slide spcct Index Page*/
$(document).ready(function () {
  $("#owl-ttnb-slide").owlCarousel({
      pagination: false,
      navigation : false, // Show next and prev buttons
      slideSpeed: 200,
      paginationSpeed : 3700,
      singleItem:true,
      responsiveRefreshRate:1,
      rewindNav: true,
      rewindSpeed: 2500,
      stopOnHover: true,
	  transitionStyle : "fadeUp",
  });
  // Custom Navigation Events
  $(".btn-next-owl-angle-ttnb").click(function(){
    $("#owl-ttnb-slide").trigger('owl.next');
  })
  $(".btn-prev-owl-angle-ttnb").click(function(){
    $("#owl-ttnb-slide").trigger('owl.prev');
  })
});
/*END spcct Head Index Page*/
/******************************************************************************************/
$(document).ready(function () {
  $("#owl-khcct-slide").owlCarousel({
      pagination: false,
      navigation : false, // Show next and prev buttons
      slideSpeed: 200,
      paginationSpeed : 3700,
      singleItem: false,
      responsiveRefreshRate:1,
      rewindNav: true,
      rewindSpeed: 2500,
      stopOnHover: true,
      autoPlay:3000,
      items: 6,
      itemsDesktop : [1199,5],
      itemsDesktopSmall : [980,4],
      itemsTablet: [768,3],
      itemsTablet: [520,3],
      itemsMobile : [479,2],
      itemsMobile : [320,1],
      
  });
  $(".btn-next-owl-angle-khcct").click(function(){
    $("#owl-khcct-slide").trigger('owl.next');
  })
  $(".btn-prev-owl-angle-khcct").click(function(){
    $("#owl-khcct-slide").trigger('owl.prev');
  })
});
/******************************************************************************************/
/*Slide About Right Page*/
$(document).ready(function() {
 
  var sync1 = $("#sync1-gt");
  var sync2 = $("#sync2-gt");
 
  sync1.owlCarousel({
    singleItem : true,
    slideSpeed : 1000,
    navigation: false,
    pagination: false,
    afterAction : syncPosition,
    responsiveRefreshRate : 200,
  });
 
  sync2.owlCarousel({
    items : 3,
    itemsDesktop      : [1199,3],
    itemsDesktopSmall     : [979,3],
    itemsTablet       : [768,3],
    itemsMobile       : [479,3],
    pagination:false,
    responsiveRefreshRate : 100,
    afterInit : function(el){
      el.find(".owl-item").eq(0).addClass("synced");
    }
  });
 
  function syncPosition(el){
    var current = this.currentItem;
    $("#sync2-gt")
      .find(".owl-item")
      .removeClass("synced")
      .eq(current)
      .addClass("synced")
    if($("#sync2-gt").data("owlCarousel") !== undefined){
      center(current)
    }
  }
 
  $("#sync2-gt").on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).data("owlItem");
    sync1.trigger("owl.goTo",number);
  });
 
  function center(number){
    var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
    var num = number;
    var found = false;
    for(var i in sync2visible){
      if(num === sync2visible[i]){
        var found = true;
      }
    }
 
    if(found===false){
      if(num>sync2visible[sync2visible.length-1]){
        sync2.trigger("owl.goTo", num - sync2visible.length+2)
      }else{
        if(num - 1 === -1){
          num = 0;
        }
        sync2.trigger("owl.goTo", num);
      }
    } else if(num === sync2visible[sync2visible.length-1]){
      sync2.trigger("owl.goTo", sync2visible[1])
    } else if(num === sync2visible[0]){
      sync2.trigger("owl.goTo", num-1)
    }
    
  }
 
 /****/
 $(".btn-next-owl-angle-gt").click(function(){
    $("#sync1-gt").trigger('owl.next');
  })
  $(".btn-prev-owl-angle-gt").click(function(){
    $("#sync1-gt").trigger('owl.prev');
  })
});
/*END Slide About Right Page*/
/******************************************************************************************/


//format price form thanh toan
    function formatNumber (num) {
        return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
    }
// select price // 

    $('select#select_qty').change(function(){
      var price = $('#price-product').text();
      var total_pay = price* $(this).val();
      $('p#show-total-price').html(formatNumber(total_pay)+" VNĐ");
      console.log($('p#show-total-price'));
    }); 
/******************************************************************************************/
// init Masonry
$(document).ready(function () {
  var $grid = $('.grid-masonry-sp').masonry({
    itemSelector: '.grid-masonry-sp-item',
    percentPosition: true,
    columnWidth: '.grid-sizer'
    });
      // layout Isotope after each image loads
      $grid.imagesLoaded().progress( function() {
      $grid.masonry();
    });  
});      
/*End Mansonry*/

/*Popup san pham chi tiet*/
//reset content model
$(document).ready(function () {
      $('.text-item-spct i').click(function(){
        $('#modal-spct-detail').find('#content-model-spct').html('');
        var img_popup = $(this).parents('.box-item-spct').find('.img-sm-spct').attr('src-big-img');
        var masp = $(this).parents('.box-item-spct').find('.masp-spct').html();
        var chatlieu = $(this).parents('.box-item-spct').find('.cl-spct').html();
        var kichthuoc = $(this).parents('.box-item-spct').find('.kt-spct').html();
        var gia = $(this).parents('.box-item-spct').find('.gia-spct').html();
        var content = '';
          content += '<div class="popup-img-fullsp-pr">';
          content += '<img class="img-responsive" src="'+ img_popup +'" alt="San pham">';
          content += '</div>';
          content += '<div class="popup-text-fullsp-pr">';
          content += '<p>';
          content += masp;
          content += '</p>';

          content += '<p>';
          content += chatlieu;
          content += '</p>';

          content += '<p>';
          content += kichthuoc;
          content += '</p>';

          content += '<p>';
          content += gia;
          content += '</p>';
          content += '</div>';
        //modal popup product
        $('#modal-spct-detail').on('shown.bs.modal', function (e) {
          
          $('#modal-spct-detail').find('#content-model-spct').html(content);
          $('#modal-spct-detail').find('.hide').removeClass('hide');
        });
      });
});  
//End popup danh sach nhan vien 

$(document).on('change', '.btn-file :file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
  });

  $(document).ready( function() {
      $('.btn-file :file').on('fileselect', function(event, numFiles, label) {
          
          var input = $(this).parents('.input-group').find(':text'),
              log = numFiles > 1 ? numFiles + ' files selected' : label;
          
          if( input.length ) {
              input.val(log);
          } else {
              if( log ) alert(log);
          }
          
      });

  });

/*Slide san pham chi tiet*/
$(document).ready(function () {
    $("#owl-spct").owlCarousel({
        navigation: false,
        pagination: false,
        items: 1,
        singleItem : true,
    });

    // Custom Navigation Events
    $(".btn-prev-owl-angle-spct").click(function(){
      $("#owl-spct").trigger('owl.prev');
    })
    $(".btn-next-owl-angle-spct").click(function(){
      $("#owl-spct").trigger('owl.next');
    })
    /**************/

    
});
/*End Slide san pham chi tiet*/
/******************************************************************************************/
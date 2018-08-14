/**
* card-slider JS
* -----------------------------------------------------------------------------
*
* All the JS for the card-slider component.
*/
( function( app ) {

  var COMPONENT = {

    className: 'll-card-slider',


    selector : function() {
      return '.' + this.className;
    },


    // Fires after common.init, before .finalize and common.finalize
    init: function() {

      var _this = this;
      var gallery = $("."+_this.className),
          nextArrow = '',
          prevArrow = '';


        prevArrow += '<a class="card-slider__slick-prev text-center">';
        prevArrow += '<svg class="icon icon-arrow-left"><use xlink:href="#icon-arrow-left"></use></svg>';
        prevArrow += '</a>';

        nextArrow += '<a class="card-slider__slick-next text-center">';
        nextArrow += '<svg class="icon icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg>';;
        nextArrow += '</a>';

        gallery.each(function(){
          $(this).find('.card-slider__slides').slick({
            infinite: true,
            prevArrow: prevArrow,
            nextArrow: nextArrow,
            centerMode: true,
            variableWidth: true,
            appendArrows: gallery.find('.card-slider__nav'),
            dots: false
          });

        });
    },


    finalize: function() {

      var _this = this;
    }
  };

  // Hooks the component into the app
  app.registerComponent( 'card-slider', COMPONENT );
} )( app );

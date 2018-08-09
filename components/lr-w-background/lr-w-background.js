/**
* lr-w-background JS
* -----------------------------------------------------------------------------
*
* All the JS for the lr-w-background component.
*/
( function( app ) {

  var COMPONENT = {

    className: 'll-lr-w-background',


    selector : function() {
      return '.' + this.className;
    },


    // Fires after common.init, before .finalize and common.finalize
    init: function() {

      var _this = this;

    },


    finalize: function() {

      var _this = this;
    }
  };

  // Hooks the component into the app
  app.registerComponent( 'lr-w-background', COMPONENT );
} )( app );

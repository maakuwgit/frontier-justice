/**
* two-col-w-heading JS
* -----------------------------------------------------------------------------
*
* All the JS for the two-col-w-heading component.
*/
( function( app ) {

  var COMPONENT = {

    className: 'll-two-col-w-heading',


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
  app.registerComponent( 'two-col-w-heading', COMPONENT );
} )( app );
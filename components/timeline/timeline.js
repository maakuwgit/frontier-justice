/**
* timeline JS
* -----------------------------------------------------------------------------
*
* All the JS for the timeline component.
*/
( function( app ) {

  var COMPONENT = {

    className: 'll-timeline',


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
  app.registerComponent( 'timeline', COMPONENT );
} )( app );

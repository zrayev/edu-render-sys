(function ($) {
  'use strict';

  Drupal.behaviors.testScript1 = {
    attach: function (context, settings) {
      var $placeholder = $('#edit-edu-render-sys-firstname')
        .attr('placeholder');
      console.log($placeholder);
    }
  };
}(jQuery));

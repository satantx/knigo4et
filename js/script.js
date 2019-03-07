$(document).ready(function () {

   var doc = $(document),
      layer = $('body'),
      controls = $('.controls');

   $('.btn-option').click(function () {
      controls.toggleClass('active');
   });

   // modal
   (function () {
      var gutter = parseInt(window.innerWidth) - parseInt(document.documentElement.clientWidth);
      layer.append('<style>body.overlay-modal {margin-right: ' + gutter + 'px; overflow: hidden;}</style>');
   }());

   doc.click(function (e) {
      if ($(e.target).closest('.modal-main').length === 0) closeModal();
   }).on('click', '[data-modal]', function () {
      var name = $(this).data('modal');
      layer.addClass('overlay-modal');
      $('#' + name).addClass('show-modal');
      return false;
   }).on('click', '.js-close', function () {
      closeModal();
      return false;
   });

   function closeModal() {
      layer.removeClass('overlay-modal');
      $('.show-modal').removeClass('show-modal');
   }

});
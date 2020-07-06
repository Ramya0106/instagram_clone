$(document).ready(function () {
    $('.ul li a').click(function(e) {

         $('.ul li.active').removeClass('active');

         var $parent = $(this).parent();
         $parent.addClass('active');
         e.preventDefault();
     });
 });

 $("input[type='submit']").click(function() {
    $("input[id='my_file']").click();
});
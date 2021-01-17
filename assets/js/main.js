$(document).ready(function(){
	$(".navbar-burger").click(function(){
		$(".navbar-burger").toggleClass("is-active");
		$(".navbar-menu").slideToggle("is-active");
	});
});

$(document).ready(function(){
  $(".dropdown .dropdown-trigger").click(function (){
      $('.dropdown').not($(this).parents('.dropdown')).removeClass("is-active");
      var dropdown = $(this).parents('.dropdown');
      dropdown.toggleClass('is-active');
      dropdown.focusout(function() {
          $(this).removeClass('is-active');
      });
  });
})

$(document).ready(function(){
  $(".tabs ul li").on("click", function() {
        var id = $(this).attr("data-tab");

        $(".tabs ul li").removeClass("is-active");
        $(".tab-content").removeClass("current-tab");
        $(this).addClass("is-active");
        $("#" + id).addClass("current-tab");
  });
})
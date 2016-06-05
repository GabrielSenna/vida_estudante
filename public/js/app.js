$(document).ready(function() {

	$(".child-menu").hide();

	$("#wrapper").removeClass("toggled");
  $("#hamburger-btn").removeClass("toggled");

    $("#hamburger-btn").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        $("#hamburger-btn").toggleClass("toggled");
    });

    $(".father-menu>a").click(function (e) {
    	e.preventDefault();
    	$(this).next('ul').slideToggle('slow');
    });

    $('.dropdown-btn-user').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'right' // Displays dropdown with edge aligned to the left of button
    }
  );
});
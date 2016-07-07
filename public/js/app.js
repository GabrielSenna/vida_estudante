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
  $('.modal-trigger').leanModal();
  $('ul.tabs').tabs();
  slideIndex1 = 1;
  showDivs(slideIndex1);
  slideIndex2 = 1;
  showDivs2(slideIndex2);
});

function plusDivs(n) {
  showDivs(slideIndex1 += n);
}

function plusDivs2(n) {
  showDivs2(slideIndex2 += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName('helpSlides1');
  console.log(x);
  if(x.length > 0){
    if (n > x.length) {slideIndex1 = 1}
    if (n < 1) {slideIndex1 = x.length}
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    x[slideIndex1-1].style.display = "block";
  }
}
function showDivs2(n) {
  var i;
  var x = document.getElementsByClassName('helpSlides2');
  console.log(x);
  if(x.length > 0){
    if (n > x.length) {slideIndex2 = 1}
    if (n < 1) {slideIndex2 = x.length}
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    x[slideIndex2-1].style.display = "block";
  }
}
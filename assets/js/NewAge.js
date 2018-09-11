// Navagation Toggle
$(document).ready(function () {
  $(".menu-toggler").on("click", function () {
    $("nav ul").toggleClass("showing");
  });
});

// Portfolio Slider
var i = 1;

$(".back").on("click", function () {
  if (i == 1) {
    i = 4;
  } else {
    i--;
  }

  switch(i) {
    case 1:
      $("#slide1").removeClass("hidden");
      $("#slide2").addClass("hidden");
      break;

    case 2:
      $("#slide2").removeClass("hidden");
      $("#slide3").addClass("hidden");
      break;

    case 3:
      $("#slide3").removeClass("hidden");
      $("#slide4").addClass("hidden");
      break;

    case 4:
      $("#slide4").removeClass("hidden");
      $("#slide1").addClass("hidden");
      break;

    default:
      $("#slide1").addClass("hidden");
      $("#slide2").addClass("hidden");
      $("#slide3").addClass("hidden");
      $("#slide4").addClass("hidden");
      break;
  }
});

$(".next").on("click", function () {
  if (i == 4) {
    i = 1;
  } else {
    i++;
  }

  switch(i) {
    case 1:
      $("#slide1").removeClass("hidden");
      $("#slide4").addClass("hidden");
      break;

    case 2:
      $("#slide2").removeClass("hidden");
      $("#slide1").addClass("hidden");
      break;

    case 3:
      $("#slide3").removeClass("hidden");
      $("#slide2").addClass("hidden");
      break;

    case 4:
      $("#slide4").removeClass("hidden");
      $("#slide3").addClass("hidden");
      break;

    default:
      $("#slide1").addClass("hidden");
      $("#slide2").addClass("hidden");
      $("#slide3").addClass("hidden");
      $("#slide4").addClass("hidden");
      break;
  }
});


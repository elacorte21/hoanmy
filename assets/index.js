$(document).ready(function () {
  //alert("test");
  /* $(".ac-label").click(function (e) {
    e.preventDefault();
    $check = $(this).prev();
    if ($check.prop('checked'))
      $check.prop("checked", false);
    else
      $check.prop("checked", true);
  }); */
});

window.onscroll = function () { scrollFunction() };

function scrollFunction() {
  if (document.body.scrollTop > 60 || document.documentElement.scrollTop > 60) {
    $('body').addClass('scrolled');
    console.log('scrolled');
  } else {
    $('body').removeClass('scrolled');
    console.log('back again');
  }
}

// Mobile Start
$(".mobile-nav").click(function (e) {
  $(".navi").toggleClass("on");
  e.preventDefault();
});

$(document).click(function (e) {
  if (!$(e.target).closest(".mobile-nav, .navi").length) {
    $(".navi").removeClass("on");
  }
});
// Mobile End


$('.date-input').datepicker({
  maxViewMode: 1
});

$('.date-input-contact').datepicker({
  maxViewMode: 1,
  toggleActive: true,
  autoclose: true
});

/* var mySwiper = new Swiper('.swiper-container', {
  direction: 'horizontal',
  loop: true,

  effect: 'coverflow',
  initialSlide: 2,
  slidesPerView: 2,

  navigation: {
    nextEl: '.swiper-btn-next',
    prevEl: '.swiper-btn-prev',
  },
}) */

$('.package-program-btn').on('click', function () {
  package_content = $(this).parent().find('div.package-program-content');
  package_content.toggle();
});

function close_speciality_content() {
  $('.speciality-page-item-content').hide();
}

$('.speciality-page-item-button').on('click', function (e) {
  close_speciality_content();
  speciality_content = $(this).parent().find('div.speciality-page-item-content');
  speciality_content.show();
  e.preventDefault();
});

$('.speciality-page-item-button-close').on('click', function () {
  close_speciality_content();
});

$(document).keyup(function (e) {
  if (e.keyCode === 27) {
    close_speciality_content();
  }
});

$('.responsive-btn').on('click', function () {
  nav_responsive = $('.nav-responsive');
  nav_responsive.show();
});

$('.responsive-close-btn').on('click', function () {
  nav_responsive = $('.nav-responsive');
  nav_responsive.hide();
});

//$('#didyouknow')
$('#didyouknow .close').on('click', function () {
  $('#didyouknow').hide();
});


$('#play').on('click', function (e) {
  e.preventDefault();
  $("#player")[0].src += "?autoplay=1";
  $('#player').show();
  $('#video-cover').hide();
  $('#play').hide();
})

$('.btnSearch').on('click', function () {
  $('.boxSearch').toggleClass('on');
});

$('.btn-inquiry').on('click', function () {
  $('.inquiry-popup').show();
});

$('.inquiry-close').on('click', function () {
  $('.inquiry-popup').hide();
});

$('.btn-close').on('click', function () {
  $('.nav-info-section').hide();
});

$('.emergency a').bind("mouseover", function () {
  $(this).text("(028) 3995 9860");
});

$('.emergency a').bind("mouseout", function () {
  $(this).text("EMERGENCY 24/7");
});

//Search View more
$('.search-result li').slice(0, 5).show();
$('.viewMore').click(function (e) {
  e.preventDefault();
  $('.search-result li:hidden').slice(0, 5).show();
})

/*
$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  responsive: {
    0: {
      items: 1
    }
  }
})
*/
$('.play-btn2').on('click', function () {
  $('video').trigger('play');
  $('.play-btn2').hide();
});
$('video').on('click', function () {
  $('video').trigger('pause');
  $('.play-btn2').show();
});

// For youtube video with cover (at our story page)
$(function () {
  var videos = $(".video, .play-btn");

  videos.on("click", function () {
    var elm = $(this),
      conts = elm.contents(),
      le = conts.length,
      ifr = null;

    for (var i = 0; i < le; i++) {
      if (conts[i].nodeType == 8) ifr = conts[i].textContent;
    }

    $(".play-btn").addClass("d-none");
    elm.addClass("player").html(ifr);
    elm.off("click");
  });
});

/* Map filter */
$("#opt_city").change(function () {
  // hide all
  $(".hospital-clinic-list").addClass("d-none");
  $(".hospital-clinic-list").removeClass("d-block");
  // show selected
  $("." + $("#opt_city").val()).addClass("d-block");
  // re-numbering
  var no = 1;
  $("." + $("#opt_city").val()).each(function (index) {
    $("." + $("#opt_city").val() + ":eq(" + index + ") .hospital-clinic-list-number").html(no);
    no += 1;
  });
});

/* Google Map Script - Start */
var map;
var markers = [];
var strictBounds;

// Adds a marker to the map and push to the array.
function addMarker(location) {
  var marker = new google.maps.Marker({
    position: location,
    map: map,
    icon: "./assets/images/point.png",
  });
  markers.push(marker);
}

// Sets the map on all markers in the array.
function setMapOnAll(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}

// Removes the markers from the map, but keeps them in the array.
function clearMarkers() {
  setMapOnAll(null);
}

// Deletes all markers in the array by removing references to them.
function deleteMarkers() {
  clearMarkers();
  markers = [];
}

$('.hospital-clinic-list-btn').on('click', function (e) {
  // Google Maps Settings
  var lat = $(this).parent().find('input[name ="lat"]').val(),
    lng = $(this).parent().find('input[name ="long"]').val(),
    zoom_in = 8,
    zoom_out = 5.4,
    uluru = { lat: parseFloat(lat), lng: parseFloat(lng) };
  //		map = new google.maps.Map(
  //				document.getElementById('map'), { zoom: 18, center: uluru }
  //			); /// original

  // Get current Bounds
  //	var maxX = strictBounds.getNorthEast().lng(),
  //		maxY = strictBounds.getNorthEast().lat(),
  //		minX = strictBounds.getSouthWest().lng(),
  //		minY = strictBounds.getSouthWest().lat();

  // calculate new Bounds
  maxY = parseFloat(lat) + (parseFloat(8.6) / parseFloat(zoom_out));
  minY = parseFloat(lat) - (9 / parseFloat(zoom_out));
  maxX = parseFloat(lng) + (9 / parseFloat(zoom_out));
  minX = parseFloat(lng) - (9 / parseFloat(zoom_out));

  // check if marker outside viewport
  if (strictBounds.contains(uluru)) {
    // within viewport, then no need to zoom out
    window.setTimeout(function () { map.panTo(uluru), map.setZoom(8.0001) }, 0); // ok, need for zoom out little bit
  }
  else {
    // outside viewport, need to zoom out
    window.setTimeout(function () { map.panTo(uluru), map.setZoom(zoom_out) }, 0); // ok, need for zoom out
  }

  deleteMarkers();
  clearMarkers();
  addMarker(uluru);
  window.setTimeout(function () { map.panTo(uluru), map.setZoom(zoom_in) }, 300); // ok, need

  // Update Bounds for new marker
  strictBounds = new google.maps.LatLngBounds(
    new google.maps.LatLng(minY, minX),
    new google.maps.LatLng(maxY, maxX));

  // check viewport
  //	var rectangle = new google.maps.Rectangle({
  //		strokeColor: "#00FF00",
  //		strokeOpacity: 0.8,
  //		strokeWeight: 2,
  //		fillColor: "#00FF00",
  //		fillOpacity: 0.35,
  //		map,
  //		bounds: {
  //			north: parseFloat(maxY),
  //			south: parseFloat(minY),
  //			east: parseFloat(maxX),
  //			west: parseFloat(minX),
  //		},
  //	});

  // Popup
  hospital_pop_up = $(this).parent().find('div.hospital-clinic-list-pop-up-wrapper');
  $('.hospital-clinic-list-popup').show();
  $('.hospital-clinic-list-box').hide();

  // Popup Data
  title = hospital_pop_up.find("p.title").text();
  desc = hospital_pop_up.find("p.desc").text();

  // Replace Data
  $('.popup-title-replace').text(title);
  $('.popup-desc-replace').text(desc);
});

$('.hospital-clinic-list-close').on('click', function () {
  $('.hospital-clinic-list-popup').hide();
  $('.hospital-clinic-list-box').show();
});


function initMap() {
  var minX, minY, maxX, maxY,
    lat = 16.3,
    lng = 105.536,
    uluru = { lat: lat, lng: lng },
    hospital_1_lat = 10.800128592267685,
    hospital_1_lng = 106.68204695053453,
    hospital_1 = { lat: parseFloat(hospital_1_lat), lng: parseFloat(hospital_1_lng) };
  map = new google.maps.Map(
    document.getElementById('map'), { zoom: 5.4, center: uluru }
  );
  addMarker(hospital_1);

  // calculate new Bounds
  maxY = parseFloat(lat) + parseFloat(8.6);
  minY = parseFloat(lat) - parseFloat(9);
  maxX = parseFloat(lng) + parseFloat(9);
  minX = parseFloat(lng) - parseFloat(9);

  // Update Bounds for new marker
  strictBounds = new google.maps.LatLngBounds(
    new google.maps.LatLng(minY, minX),
    new google.maps.LatLng(maxY, maxX));

  // check viewport
  //	var rectangle = new google.maps.Rectangle({
  //		strokeColor: "#FF0000",
  //		strokeOpacity: 0.8,
  //		strokeWeight: 2,
  //		fillColor: "#FF0000",
  //		fillOpacity: 0.35,
  //		map,
  //		bounds: {
  //			north: maxY,
  //			south: minY,
  //			east: maxX,
  //			west: minX,
  //		},
  //	});

}
/* Google Map Script - End */
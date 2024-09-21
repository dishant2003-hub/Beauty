/* ------------------ Glow Effect -----------------*/
let glowInTexts = document.querySelectorAll(".glowIn");
glowInTexts.forEach(glowInText => {
  let letters = glowInText.textContent.split("");
  glowInText.textContent = "";
  letters.forEach((letter, i) => {
    let span = document.createElement("span");
    span.textContent = letter;
    span.style.animationDelay = `${i * 0.02}s`;
    glowInText.append(span);
  });
});

/* ------------------ header added class -----------------*/
$(window).scroll(function () {
  if ($(this).scrollTop() > 50) {
    $('.fixed-top').addClass('sticky-header');
  } else {
    $('.fixed-top').removeClass('sticky-header');
  }
});
/* ------------------ Scroll to top -----------------*/
var btn = $('#button');
$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function (e) {
  e.preventDefault();
  $('html, body').animate({ scrollTop: 0 }, '300');
});

/* ------------------ Once time popup model -----------------*/
// A $( document ).ready() block.
$(document).ready(function () {
  if (document.cookie.indexOf('visited=true') == -1) {
    // load the overlay
    $('#myModal').modal({ show: true });

    var year = 1000 * 60 * 60 * 24 * 365;
    var expires = new Date((new Date()).valueOf() + year);
    document.cookie = "visited=true;expires=" + expires.toUTCString();

  }
});

/* ------------------ Background image movement -----------------*/
if ($(window).width() > 991) {
  $(document).ready(function () {

    var movementStrength = 25;
    var height = movementStrength / $(window).height();
    var width = movementStrength / $(window).width();

    $(".breadcrumb-wrapper").mousemove(function (e) {
      var pageX = e.pageX - ($(window).width() / 2);
      var pageY = e.pageY - ($(window).height() / 2);
      var newvalueX = width * pageX * -1 - 25;
      var newvalueY = height * pageY * -1 - 50;
      $('.breadcrumb-wrapper').css("background-position", newvalueX + "px     " + newvalueY + "px");

    });

  });
}

/* ------------------ Header click open search box -----------------*/
$(".search-field").hide();
$(".search-click").click(function () {
  $(".search-field").slideToggle();
});

/* ------------------ Custom Dropdown -----------------*/
function create_custom_dropdowns() {
  $('select').each(function (i, select) {
    if (!$(this).next().hasClass('dropdown')) {
      $(this).after('<div class="dropdown ' + ($(this).attr('class') || '') + '" tabindex="0"><span class="current"></span><div class="list"><ul></ul></div></div>');
      var dropdown = $(this).next();
      var options = $(select).find('option');
      var selected = $(this).find('option:selected');
      dropdown.find('.current').html(selected.data('display-text') || selected.text());
      options.each(function (j, o) {
        var display = $(o).data('display-text') || '';
        dropdown.find('ul').append('<li class="option ' + ($(o).is(':selected') ? 'selected' : '') + '" data-value="' + $(o).val() + '" data-display-text="' + display + '">' + $(o).text() + '</li>');
      });
    }
  });
}

// Event listeners

// Open/close
$(document).on('click', '.dropdown', function (event) {
  $('.dropdown').not($(this)).removeClass('open');
  $(this).toggleClass('open');
  if ($(this).hasClass('open')) {
    $(this).find('.option').attr('tabindex', 0);
    $(this).find('.selected').focus();
  } else {
    $(this).find('.option').removeAttr('tabindex');
    $(this).focus();
  }
});
// Close when clicking outside
$(document).on('click', function (event) {
  if ($(event.target).closest('.dropdown').length === 0) {
    $('.dropdown').removeClass('open');
    $('.dropdown .option').removeAttr('tabindex');
  }
  event.stopPropagation();
});
// Option click
$(document).on('click', '.dropdown .option', function (event) {
  $(this).closest('.list').find('.selected').removeClass('selected');
  $(this).addClass('selected');
  var text = $(this).data('display-text') || $(this).text();
  $(this).closest('.dropdown').find('.current').text(text);
  $(this).closest('.dropdown').prev('select').val($(this).data('value')).trigger('change');
});

// Keyboard events
$(document).on('keydown', '.dropdown', function (event) {
  var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
  // Space or Enter
  if (event.keyCode == 32 || event.keyCode == 13) {
    if ($(this).hasClass('open')) {
      focused_option.trigger('click');
    } else {
      $(this).trigger('click');
    }
    return false;
    // Down
  } else if (event.keyCode == 40) {
    if (!$(this).hasClass('open')) {
      $(this).trigger('click');
    } else {
      focused_option.next().focus();
    }
    return false;
    // Up
  } else if (event.keyCode == 38) {
    if (!$(this).hasClass('open')) {
      $(this).trigger('click');
    } else {
      var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[0]);
      focused_option.prev().focus();
    }
    return false;
    // Esc
  } else if (event.keyCode == 27) {
    if ($(this).hasClass('open')) {
      $(this).trigger('click');
    }
    return false;
  }
});

$(document).ready(function () {
  create_custom_dropdowns();
});

/* ------------------ Increment -----------------*/
const buttons = document.querySelectorAll("button");
const minValue = 0;
const maxValue = 10;

buttons.forEach((button) => {
  button.addEventListener("click", (event) => {
    // 1. Get the clicked element
    const element = event.currentTarget;
    // 2. Get the parent
    const parent = element.parentNode;
    // 3. Get the number (within the parent)
    const numberContainer = parent.querySelector(".number");
    const number = parseFloat(numberContainer.textContent);
    // 4. Get the minus and plus buttons
    const increment = parent.querySelector(".plus");
    const decrement = parent.querySelector(".minus");
    // 5. Change the number based on click (either plus or minus)
    const newNumber = element.classList.contains("plus")
      ? number + 1
      : number - 1;
    numberContainer.textContent = newNumber;
    console.log(newNumber);
    // 6. Disable and enable buttons based on number value (and undim number)
    if (newNumber === minValue) {
      decrement.disabled = true;
      numberContainer.classList.add("dim");
      // Make sure the button won't get stuck in active state (Safari)
      element.blur();
    } else if (newNumber > minValue && newNumber < maxValue) {
      decrement.disabled = false;
      increment.disabled = false;
      numberContainer.classList.remove("dim");
    } else if (newNumber === maxValue) {
      increment.disabled = true;
      numberContainer.textContent = `${newNumber}+`;
      element.blur();
    }
  });
});

/* ------------------ Counter -----------------*/
$('.count').each(function () {
  $(this).prop('Counter', 0).animate({
    Counter: $(this).text()
  }, {
    duration: 1500,
    easing: 'swing',
    step: function (now) {
      $(this).text(Math.ceil(now));
    }
  });
});

/* ------------------ Homepage Latest product slider -----------------*/
$().ready(function () {
  $('.re-product').slick({
    arrows: true,
    lazyLoad: 'ondemand',
    centerMode: false,
    speed: 300,
    slidesToScroll: 1,
    autoplay: false,
    autoplaySpeed: 2000,
    centerPadding: "0px",
    dots: true,
    slidesToShow: 4,
    infinite: true,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          arrows: true,
          slidesToShow: 3
        }
      },
      {
        breakpoint: 992,
        settings: {
          arrows: true,
          slidesToShow: 2
        }
      },
      {
        breakpoint: 768,
        settings: {
          arrows: true,
          slidesToShow: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: true,
          slidesToShow: 1
        }
      }
    ]
  });
});

/* ------------------ Product slider -----------------*/
$(document).ready(function () {
  var slider = $("#slider");
  var thumb = $("#thumb");
  var slidesPerPage = 4; //globaly define number of elements per page
  var slidesPerPages = 1;
  var syncedSecondary = true;
  slider.owlCarousel({
    items: 1,
    slideSpeed: 2000,
    nav: false,
    autoplay: false,
    dots: false,
    loop: true,
    responsiveRefreshRate: 200
  }).on('changed.owl.carousel', syncPosition);
  thumb
    .on('initialized.owl.carousel', function () {
      thumb.find(".owl-item").eq(0).addClass("current");
    })
    .owlCarousel({
      items: slidesPerPages,
      dots: false,
      nav: true,
      item: 4,
      smartSpeed: 200,
      slideSpeed: 500,
      slideBy: slidesPerPages,
      navText: ['', ''],
      responsiveRefreshRate: 100,
      responsive: {
        0: {
          items: 1
        },

        320: {
          items: 2
        },

        480: {
          items: 3
        },

        575: {
          items: 3
        },

        768: {
          items: 4
        },

        992: {
          items: 4
        }
      }
    }).on('changed.owl.carousel', syncPosition2);
  function syncPosition(el) {
    var count = el.item.count - 1;
    var current = Math.round(el.item.index - (el.item.count / 2) - .5);
    if (current < 0) {
      current = count;
    }
    if (current > count) {
      current = 0;
    }
    thumb
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = thumb.find('.owl-item.active').length - 1;
    var start = thumb.find('.owl-item.active').first().index();
    var end = thumb.find('.owl-item.active').last().index();
    if (current > end) {
      thumb.data('owl.carousel').to(current, 100, true);
    }
    if (current < start) {
      thumb.data('owl.carousel').to(current - onscreen, 100, true);
    }
  }
  function syncPosition2(el) {
    if (syncedSecondary) {
      var number = el.item.index;
      slider.data('owl.carousel').to(number, 100, true);
    }
  }
  thumb.on("click", ".owl-item", function (e) {
    e.preventDefault();
    var number = $(this).index();
    slider.data('owl.carousel').to(number, 300, true);
  });
});

/* ------------------ Equal Height -----------------*/

$(document).ready(function () {
  $('.section-wrapper').each(function () {
    var highestBox = 0;
    $('.product-content h5 a', this).each(function () {
      if ($(this).height() > highestBox) {
        highestBox = $(this).height();
      }
    });
    $('.product-content h5 a', this).height(highestBox);
  });

});

/* ------------------ Smoth effect -----------------*/
$(document).ready(function () {
  $('a[href^="#"]').on('click', function (e) {
    e.preventDefault();
    var target = this.hash;
    var $target = $(target);
    $('html, body').stop().animate({
      'scrollTop': $target.offset().top - 90
    }, 900, 'swing', function () {
      // window.location.hash = target;
    });
  });
});

/* ------------------ AOS Animation -----------------*/
AOS.init({
  duration: 1200,
})
  

// -------- Password show ----------------------
const togglePassword = document.querySelector("#togglePassword");
const password = document.querySelector("#password");

togglePassword.addEventListener("click", function () {

  // toggle the type attribute
  const type = password.getAttribute("type") === "password" ? "text" : "password";
  password.setAttribute("type", type);

  // toggle the eye icon
  this.classList.toggle('fa-eye');
});
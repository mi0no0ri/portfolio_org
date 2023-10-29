'use strict';

// モーダル
$(function () {
  $('.workImg').each(function () {
    $(this).on('click', function () {
      var target = $(this).data('target');
      var modal = document.getElementById(target);
      $(modal).fadeIn(500);
      $(modal).addClass("active");

      return false;
    });
    $(".modalClose").on("click", function () {
      $(".modal").fadeIn(500);
      $(".modal").removeClass("active"); Out
    })
  });
});

// ハンバーガーメニュー
$(function () {
  $('.hamburger').on('click', function () {
    $(this).toggleClass('active');
    if ($(this).hasClass('active')) {
      $('.navi').addClass('active');
      $('.hamburgerBackGround').addClass('active');
      $('html').addClass('scrollStop');
    } else {
      $('.navi').removeClass('active');
      $('.hamburgerBackGround').removeClass('active');
      $('html').removeClass('scrollStop');
    }
  });
  $('.menuBar ul li a').on('click', function () {
    $('.hamburger').addClass('active');
    $('.navi').removeClass('active');
  });
});

// ページトップへスクロール
$(function () {
  $('.toUpLink').on('click', function () {
    var position = 0;
    var speed = 1000;
    $("html,body").animate({ scrollTop: position }, speed, 'swing');
  });
});

// 使用言語表示
$(function () {
  var sec = 1000;
  var out = 0;
  $('.htmlcss').on('click', function () {
    $('.language').fadeOut(out).addClass('hidden');
    $('.language1, .language2').fadeIn(sec);
  });
  $('.javascript').on('click', function () {
    $('.language').fadeOut(out).addClass('hidden');
    $('.language3, .language4').fadeIn(sec);
  });
  $('.php').on('click', function () {
    $('.language').fadeOut(out).addClass('hidden');
    $('.language5, .language6').fadeIn(sec);
  });
  $('.java').on('click', function () {
    $('.language').fadeOut(out).addClass('hidden');
    $('.language7, .language8').fadeIn(sec);
  });
});

// 使用ツール表示
$(function () {
  var sec = 1000;
  var out = 0;
  $('.os').on('click', function () {
    $('.tool').fadeOut(out).addClass('hidden');
    $('.tool1').fadeIn(sec);
  });
  $('.db').on('click', function () {
    $('.tool').fadeOut(out).addClass('hidden');
    $('.tool2').fadeIn(sec);
  });
  $('.communicate').on('click', function () {
    $('.tool').fadeOut(out).addClass('hidden');
    $('.tool3').fadeIn(sec);
  });
  $('.other').on('click', function () {
    $('.tool').fadeOut(out).addClass('hidden');
    $('.tool4').fadeIn(sec);
  });
});

// スクロールでスライド
$(window).on('scroll load', function () {
  var scroll = $(this).scrollTop();
  var windowHeight = $(window).height();
  $('.fadeIn, .fadeInRight, .fadeInLeft').each(function () {
    var cntPos = $(this).offset().top;
    if (scroll > cntPos - windowHeight + windowHeight / 3) {
      $(this).addClass('active');
    }
  });
});

// 作品ごとにスライド
$(function () {
  var effect_btm = 400;
  var effect_move = 200;
  var effect_time = 2000;
  $('.worksList').css({
    opacity: 0
  });
  $('.worksList').children().each(function () {
    $(this).css({
      opacity: 0,
      transform: 'translateY(' + effect_move + 'px)',
      transition: effect_time + 'ms'
    });
  });
  $(window).on('scroll load', function () {
    var scroll_top = $(this).scrollTop();
    var scroll_btm = scroll_top + $(this).height();
    var effect_pos = scroll_btm - effect_btm;
    $('.worksList').each(function () {
      var this_pos = $(this).offset().top;
      if (effect_pos > this_pos) {
        $(this).css({
          opacity: 1,
          transform: 'translateY(0)'
        });
        $(this).children().each(function (i) {
          $(this).delay(300 + i * 200).queue(function () {
            $(this).css({
              opacity: 1,
              transform: 'translateY(0)'
            }).dequeue();
          });
        });
      }
    });
  });
});

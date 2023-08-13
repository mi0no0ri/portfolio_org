'use strict';

// modal
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

// 使用言語選択
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

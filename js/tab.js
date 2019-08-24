$(function () {
  // ※追加1 まずjsで全部のタブを表示させておく（読み込んで実行されたら）
  $(".box21 ul").show();

  // ①タブをクリックしたら発動
  $(".tab li").click(function () {
    // ※追加2 クリックされた瞬間、最初に全部表示させていたので一旦非表示にする
    $(".box21 ul").hide();

    // ②クリックされたタブの順番を変数に格納
    var index = $(".tab li").index(this);

    // ③クリック済みタブのデザインを設定したcssのクラスを一旦削除
    $(".tab li").removeClass("active");

    // ④クリックされたタブにクリック済みデザインを適用する
    $(this).addClass("active");

    // ⑤コンテンツを一旦非表示にし、クリックされた順番のコンテンツのみを表示
    $(".box21 ul")
      .removeClass("show")
      .eq(index)
      .addClass("show");

    //  ※追加3 0番目＝Allが押されているときはindexが０になるので、その時に全部表示にする
    if (index == 0) {
      $(".box21 ul").show();
    }
  });
});

//  ※タブを固定
$(function () {
  var $win = $(window),
    $main = $("main"),
    $nav = $("nav"),
    navHeight = $nav.outerHeight(),
    navPos = $nav.offset().top,
    fixedClass = "is-fixed";

  $win.on("load scroll", function () {
    var value = $(this).scrollTop();
    if (value > navPos) {
      $nav.addClass(fixedClass);
      $main.css("margin-top", navHeight);
    } else {
      $nav.removeClass(fixedClass);
      $main.css("margin-top", "0");
    }
  });
});

//  ※戻るボタン
$(function () {
  var topBtn = $("#page-top");
  topBtn.hide();
  //スクロールが500に達したらボタン表示
  $(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
      topBtn.fadeIn();
    } else {
      topBtn.fadeOut();
    }
  });
  //スルスルっとスクロールでトップへもどる
  topBtn.click(function () {
    $("body,html").animate(
      {
        scrollTop: 0
      },
      500
    );
    return false;
  });
});

// ※タイトルを動かす
$(function () {
  $(window).ready(function () {
    $('.fadein').each(function () {
      var targetElement = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > targetElement - windowHeight + 200) {
        $(this).css('opacity', '1');
        $(this).css('transform', 'translateY(0)');
      }
    });
  });
});
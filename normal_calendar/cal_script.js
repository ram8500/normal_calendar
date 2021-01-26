$(function() {
  $("td").on("click", function() {
  //  選択部分の色変更
    $("td").removeClass("select");
    $(this).addClass("select");
  //  tdの値(日にち)を取得し出力
    $("#select_day").text($(this).text());
  });
  });

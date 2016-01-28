//加载PM ::Start
function loadPM() {
  $.post("/FiSkinAlcon/pm/json", {
      token: getCookie("Fi_Auth")
    }, function(data) {
      $(".PM").html(
        '<li>' +
        '    <a>' +
        '        <div>' +
        '            <strong style="text-center">站内信</strong>' +
        '            <i onclick="loadPM()" class="pull-right  text-center fa fa-repeat"></i>' +
        '        </div>' +
        '    </a>' +
        '</li>' +
        '<li class="divider"></li>'
      );
      $.each(data, function(i, msg) {
        $(".PM").append(
          '<li>' +
          '    <a herf="#">' +
          '        <div>' +
          '            <strong>' + msg.sender + '</strong>' +
          '            <span class="pull-right text-muted">' +
          '                <em>' + msg.time + '</em>' +
          '            </span>' +
          '        </div>' +
          '        <div>' + msg.text + '</div>' +
          '    </a>' +
          '</li>'
        );
      });
      $(".PM").append(
        '<li class="divider"></li>' +
        '<li>' +
        '  <a class="text-center" href="../FiSkinAlcon/pm"><strong>查看所有消息</strong><i class="fa fa-angle-right"></i></a>' +
        '</li>'
      );
    },
    "json");
}
//加载PM ::End
function getCookie(name) {
  var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
  arr = document.cookie.match(reg);
  if (arr) {
    return unescape(arr[2]);
  } else {
    return null;
  }
}
$(document).ready(function() {
  loadPM();
  //全局Ajax事件	::Start
  $(document).ajaxStart(function() {
    NProgress.start();
  });
  $(document).ajaxStop(function() {
    NProgress.done();
  });
  //全局Ajax事件 ::End
});

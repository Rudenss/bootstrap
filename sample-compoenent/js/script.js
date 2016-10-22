$(document).ready(function() {
  // setTimeout(함수, 지연시간);
  setTimeout(function() {
    $('#alert').fadeIn(500);
  }, 3000);

  var i = 0;
  setInterval(function() {
    if (i > 100) {
      i = 0;
    }
    var label = i + '%';
    $('#auto_progress').css('width', label);
    $('#auto_progress').html(label);
    i++;
  }, 500);
});

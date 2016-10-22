$(function() {
    var a = 0;
    $('[data-toggle="tooltip"]').tooltip('show')
    setTimeout(function() {
        $('[data-toggle="tooltip"]').tooltip('hide')
        setInterval(function() {
          if(a < 6)
          {
            $('[data-toggle="tooltip"]').tooltip('toggle')
            a++;
          }
        }, 500);
    }, 3000);
})


  
  $('.opt').on('click', function (e) {
    
    e.preventDefault();
    
    $(this).addClass('active');
    //$(this).parent().siblings().removeClass('active');
    
    target = $(this).children().attr('href');

    $('#optCon > div').not(target).hide();
    $(target).fadeIn(600);
  });
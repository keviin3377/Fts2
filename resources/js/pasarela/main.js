$(document).ready(function() {
  $('#ea-cash').hide();
  $('#ea-pse').hide();
  $('#ea-cc').hide();
  // $("#radio1 input:radio").prop('checked', true);
  // $('#radio1').addClass("ea-radio-active");

  $('#radio1').click(function(){
    $('#radio3').removeClass("ea-radio-active");
    $('#radio2').removeClass("ea-radio-active");
    $('#radio1').addClass("ea-radio-active");

    $('#ea-cash').hide();
    $('#ea-pse').hide();
    $('#ea-cc').fadeIn();
    $('#ea-cc').show();

  });
  $('#radio2').click(function(){
    $('#radio1').removeClass("ea-radio-active");
    $('#radio3').removeClass("ea-radio-active");
    $('#radio2').addClass("ea-radio-active");

    $('#ea-cc').hide();
    $('#ea-cash').hide();
    $('#ea-pse').fadeIn();
    $('#ea-pse').show();

  });
  $('#radio3').click(function(){
    $('#radio1').removeClass("ea-radio-active");
    $('#radio2').removeClass("ea-radio-active");
    $('#radio3').addClass("ea-radio-active");

    $('#ea-cc').hide();
    $('#ea-pse').hide();
    $('#ea-cash').fadeIn();
    $('#ea-cash').show();
  });

  $('.test').popup({
      position : 'right center',
      target   : '.test2',
      html  : '<img src="images/card-help.PNG"></img>'
    });

  $('#mail').focusout(function(){
    var mail = $('#mail').val();
    var a =  mail.lastIndexOf('@');
    var p = mail.lastIndexOf('.');
    if( a== -1 || p == -1 || mail.length<7){
      // $('#ea-alert-mail').html("Ingresa un correo valido!")
      // $('#ea-alert-mail').show();

      $('#mail').addClass('shake');
      setTimeout(function(){
        $('#mail').removeClass('shake');
        $('#mail').css("border","1px solid #EA2840")
      }, 500);


      console.log('error mail');
    }else{
      $('#ea-alert-mail').hide();
    }
  });
});

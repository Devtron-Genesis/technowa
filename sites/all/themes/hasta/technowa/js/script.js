(function($) {
  $(document).mouseup(function(e) {
    console.log('mouseup');
  });
  // $(document).delegate('', 'click', function(event) {
  //   console.log('delegate');
  // });
  $(window).load(function(e) {
    console.log('Load Completed');
  });

  $(document).ready(function(){
    $(".field-name-field-job-recruiter-name").prepend($("<i class='fa fa-user'></i>"));
    $(".locality").prepend($("<i class='fa fa-map-marker'></i>"));
    $(".field-name-field-job-recruiter-contact").prepend($("<i claLoginss='fa fa-phone'></i>"));
    if($('body').hasClass('i18n-de')) {
      $(".orange-2").text("Erfahren Sie  mehr");
    }




    // $('.i18n-de #edit-field-user-cv-und-0-upload').addClass("jfilestyle");
    // $('.i18n-de #edit-field-user-cv-und-0-upload').attr('value', 'Hello');
    // $(":file").jfilestyle({buttonText: "Find file"});
    // $(":file").jfilestyle({placeholder: "Find file"});
    // $(":file").jfilestyle({value: "Find file"});
    // $(":file").jfilestyle({disabled: true});


    // if($('body').hasClass('i18n-de')) {
    //   $(this).value(value.replace('Choose File', 'Dateianhang'));
    // }




  });
  $(window).load(function(e) {
    $('input[type=checkbox]').css('display', 'initial');
  });
  $(document).ready(function() {
    if($('body').hasClass('i18n-de')) {
      $('.topbar-right-items').prepend('<a href="/" class="language-link" xml:lang="en"><img src="/sites/all/themes/hasta/technowa/images/uk-flag.png"></a>');
    } else {
      $('.topbar-right-items').prepend('<a href="/de" class="language-link" xml:lang="de"><img src="/sites/all/themes/hasta/technowa/images/german-flag.png"></a>');
    }
    $('.view-display-id-vacancies_search_block').addClass('container collapsed');
    $('li[data-id*=2353]').click(function(e){
      $('.view-display-id-vacancies_search_block').slideToggle();
    });
    $('.feature-box-103 h6').matchHeight();
    $('.feature-box-103 ul').matchHeight();
    $('.fadeInRight p').matchHeight();
    console.log('Document Ready');
  });
  $(document).ajaxComplete(function(e) {
    console.log('Ajax Completed');
  });
  var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
      sURLVariables = sPageURL.split('&'),
      sParameterName,
      i;
    for (i = 0; i < sURLVariables.length; i++) {
      sParameterName = sURLVariables[i].split('=');
      if (sParameterName[0] === sParam) {
        return sParameterName[1] === undefined ? true : sParameterName[1];
      }
    }
  };
})(jQuery);

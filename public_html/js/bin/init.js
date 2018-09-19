(function($){
  $(function(){
    // initialize
    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('.tabs').tabs();
    $('.dropdown-trigger').dropdown();
    $('.modal').modal();
    // $('#modal1').modal('open'); // open modal from code
    // or by click on trigger
    $('.trigger-modal').modal();

    // when clicking button id="modal-x"
    $("#modal-x").click(function(){
        console.log("button");
        setTimeout(
          function()
          {
            $("#modal1-container").load("index.php #modal1-container");
          }, 800);

    });

  }); // end of document ready


  //count
  $('.count').each(function () {
      $(this).prop('Counter',0).animate({
          Counter: $(this).text()
      }, {
          duration: 2000,
          easing: 'swing',
          step: function (now) {
              $(this).text(commaSeparateNumber(Math.ceil(now)));
          }
      });
  });
  function commaSeparateNumber(val) {
    while (/(\d+)(\d{3})/.test(val.toString())) {
      val = val.toString().replace(/(\d+)(\d{3})/, '$1' + ',' + '$2');
    }
    return val;
  }
})(jQuery); // end of jQuery name space

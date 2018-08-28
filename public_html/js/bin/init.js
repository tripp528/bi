(function($){
  $(function(){
    // initialize sidenav and parallax
    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('.tabs').tabs();

    // initialize all modals
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
})(jQuery); // end of jQuery name space

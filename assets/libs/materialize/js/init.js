(function($){
  $(function(){

    $('.button-collapse').sideNav();

//initialisation de la selection
      $(document).ready(function() {
          $('select').material_select();
      });

//fonction de choix de la date
      $('.datepicker').pickadate({
          selectMonths: true, // Creates a dropdown to control month
          selectYears: 15 // Creates a dropdown of 15 years to control year
      });
      //tabs fonctions
      //initialisation
      $(document).ready(function(){
          $('ul.tabs').tabs();
      });
      //Methods
      $(document).ready(function(){
          $('ul.tabs').tabs();
      });
      //


  }); // end of document ready
})(jQuery); // end of jQuery name space




$(document).ready(function(){

     $("#numbat_error").hide();
    $("#selection_error").hide();
    $("#prenom_error").hide();
    $("#nom_error").hide();
 
    var error_numbat = false;
    var error_selection = false;
    var error_prenom = false;
    var error_nom = false;

    // Functions
 
    function check_numbat() {
      var numbat_length = $("#numbat").val().length;
      if(numbat_length < 1) {
          $("#numbat_error").html("<p style='color:red;'>champ obligatoire</p>");
          $("#numbat_error").show();
          error_numbat= true;
      }else {
          $("#numbat_error").hide();
      }
    }
    function check_prenom() {
      var prenom_length = $("#prenom").val().length;
      if(prenom_length < 1) {
          $("#prenom_error").html("<p style='color:red;'>champ obligatoire</p>");
          $("#prenom_error").show();
          error_prenom= true;
      }else {
          $("#prenom_error").hide();
      }
    }
    function check_nom() {
      var numbat_length = $("#nom").val().length;
      if(numbat_length < 1) {
          $("#nom_error").html("<p style='color:red;'>champ obligatoire</p>");
          $("#nom_error").show();
          error_nom= true;
      }else {
          $("#nom_error").hide();
      }
    }
    function check_selection() {
      var selection_length = $("#selection").val().length;
      if(selection_length < 1) {
          $("#selection_error").html("<p style='color:red;'>champ obligatoire</p>");
          $("#selection_error").show();
          error_selection = true;
      }else {
          $("#selection_error").hide();
      }
    }
    // Events
 
    $("#numbat").focusout(function() {
      check_numbat();
    });
    $("#selection").focusout(function() {
      check_selection();
    });
    $("#prenom").focusout(function() {
      check_prenom();
    });
    $("#nom").focusout(function() {
      check_nom();
    });
    $("#btnFormEtudiant").on('click', function() {
   
      error_prenom = false;
      error_nom = false;
    
    
      check_prenom();
      check_nom();
      if(error_prenom == false && error_nom == false) {
          return true;
      }else {
          return false;
      }
    });
    $("#btnFormChambre").on('click', function() {
   
      error_numbat = false;
      error_selection = false;
    
    
      check_numbat();
      check_selection();
      if(error_numbat == false && error_selection == false) {
          return true;
      }else {
          return false;
      }
    });

        });
  
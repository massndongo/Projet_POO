$(document).ready(function(){


  
  $('#selection').change(function(){
    if ($('#selection').val()==='NonLoger') {
    $( ".adresse" ).append( '<input type="text" class="form-control input" name="adresse" id="adresse" placeholder="Adresse"><span id="adresse_error" class="font-weight-bold"></span>' );
  }else if ($('#selection').val()==='Loger' || $('#selection').val()==='Boursier'){
        $( ".adresse" ).append( '<input type="text" class="form-control input" name="montant" id="montant" placeholder="Montant Bourse"><span id="montant_error" class="font-weight-bold"></span>' );
      }
});
$("#prenom_error").hide();
$("#nom_error").hide();
$("#date_error").hide();


var error_prenom = false;
var error_nom = false;
var error_date = false;

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
var nom_length = $("#nom").val().length;
if(nom_length < 1) {
    $("#nom_error").html("<p style='color:red;'>champ obligatoire</p>");
    $("#nom_error").show();
    error_nom= true;
}else {
    $("#nom_error").hide();
}
}

function check_date() {
var date_length = $("#date").val().length;
if(date_length < 1) {
    $("#date_error").html("<p style='color:red;'>champ obligatoire</p>");
    $("#date_error").show();
    error_date= true;
}else {
    $("#date_error").hide();
}
}



$("#prenom").focusout(function() {
check_prenom();
});
$("#nom").focusout(function() {
check_nom();
});
$("#date").focusout(function() {
check_date();
});


$("#btnFormEtudiant").on('click', function() {

error_prenom = false;
error_nom = false;
error_date = false;


check_prenom();
check_nom();
check_date();

if(error_prenom == false && error_nom == false && error_date == false) {
 return true;
}else {
 return false;
}
});



     $("#numbat_error").hide();
    $("#selection_error").hide();
 
    var error_numbat = false;
    var error_selection = false;

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
  
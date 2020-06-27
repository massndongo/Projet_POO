$(document).ready(function(){
  $("#num_error").hide();
   $("#numbat_error").hide();
  $("#selection_error").hide();
  
  var error_num = false;
  var error_numbat = false;
  var error_selection = false;
  // Functions
function check_num() {
    var num_length = $("#num").val().length;
    if(num_length < 1) {
        $("#num_error").html("champ obligatoire");
        $("#num_error").show();
        error_num = true;
    }else {
        $("#num_error").hide();
    }
  }
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
$("#num").focusout(function() {
    check_num();
  });
  
  $("#numbat").focusout(function() {
    check_numbat();
  });
  $("#selection").focusout(function() {
    check_selection();
  });
  $("#btnFormChambre").on('click', function() {
    error_num = false;
    error_numbat = false;
    error_selection = false;
  
    check_num();
    check_numbat();
    check_selection();
    if(error_num == false && error_numbat == false && error_selection == false) {
        return true;
    }else {
        return false;
    }
  });
      });

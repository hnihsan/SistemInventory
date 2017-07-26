$(document).ready(function() {
// ************************ Date Picker ***************************************
  $('#tambah-pengadaan').datetimepicker({
    timepicker:false,
    format:'Y-m-d'
  });

// ************************ Select 2 ***************************************
	  $("#unit-tambah-pengadaan select").select2();

});

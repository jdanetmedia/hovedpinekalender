$(document).ready(function() {
  // Init datepicker
  $('.datepicker').datepicker();

  // Init timepicker
  $('.timepicker').timepicker({
    twelveHour: false
  });

  // Init select dropdown
  $('select').formSelect();

  // Init tabs
  $('.tabs').tabs();
});

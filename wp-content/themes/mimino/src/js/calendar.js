jQuery(document).ready(function ($) {
  $(".datepicker").datepicker({
    constrainInput: false,
    gotoCurrent: true,
    minDate: 0,
    maxDate: "+60d",
  });
});

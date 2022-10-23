$(document).ready(function () {
    $('#example').DataTable();
});
$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })
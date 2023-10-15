$(document).ready(function () {
  $('#myTable').DataTable({
    'ajax': {
      url: 'config.php',
      type: 'POST',
      dataSrc: 'data'
    },
    columns: [
      { data: 'id' },
      { data: 'first_name' },
      { data: 'midle_name' },
      { data: 'last_name' },
      { data: 'age' },
      { data: 'gender' }
    ]
  });
});




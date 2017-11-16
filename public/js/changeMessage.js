$(document).ready(function() {
  getMessage();
});

function getMessage() {
  $.ajax({
    type: 'GET',
    url: "/ajaxex",
    dataType: 'json',
    success: function(data)
    {
      $('#data-content').html(data['view']);
    },
    errors: function(xhr)
    {
      console.log(xhr.error);
    }
  });

}
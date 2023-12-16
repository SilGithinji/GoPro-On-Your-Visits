$(document).ready(function() {
  // Attach an event listener to the form for dynamic search
  $('#searchForm').submit(function(event) {
    event.preventDefault();

    // Get the values from the form
    var location = $('#location').val();
    var service = $('#service').val();

    // Call a function to handle the dynamic search
    handleSearch(location, service);
  });

  // Function to handle the dynamic search
  function handleSearch(location, service) {
    // Update the AJAX request's URL to be a relative path
    $.ajax({
      url: 'ajax-handler.php', // Assuming ajax-handler.php is in the same directory
      type: 'POST',
      data: {
        location: location,
        service: service
      },
      success: function(response) {
        // Update the results section with the response
        $('#results').html(response);
      },
      error: function(error) {
        console.error('Error:', error);
      }
    });
  }
});

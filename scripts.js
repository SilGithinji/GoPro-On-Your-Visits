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
    // Replace this with your AJAX call to fetch and display results
    $.ajax({
      url: '/path/to/your/wordpress/ajax-handler.php',
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

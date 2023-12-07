<?php
/**
 * The main template file.
 *
 * @package GoProOnYourVisits
 */

get_header();
?>

<div id="primary" class="content-area container">
  <main id="main" class="site-main">

    <section class="search-section">
      <!-- Your dynamic search form goes here -->
      <form id="searchForm">
        <label for="location">Location:</label>
        <input type="text" id="location" placeholder="Enter your location">

        <label for="service">Service:</label>
        <input type="text" id="service" placeholder="Enter the service you're looking for">

        <button type="submit">Search</button>
      </form>
    </section>

    <section class="results-section">
      <!-- Your dynamic results section goes here -->
      <div id="results"></div>
    </section>

    <!-- Container for Google Maps -->
    <section id="map-container">
      <div id="map"></div>
    </section>

  </main>
</div>

<?php get_footer(); ?>

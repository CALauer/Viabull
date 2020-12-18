<?php 
include '../includes/config.php'; 
require "../includes/header.php"; 
?>

        

  <section class="api-main">
    <div class="api-wrapper">
    <img src="../images/viabull-lndg.svg" alt="viabull-logo" class="img-25">
        <div class="table-info">
          <div>
            <h1>Powered by <span class="bold">Twelve</span>Data</h1>
            <p>Viabull will be utilizing TwelveData's API. As of right now, the data being utilized is from a local static JSON file. However,
              in the future we will be requesting the information straight from their servers.
            </p>
            <p>This is simply pulling data from a JSON file, parsing that data, turning that data into pleasantries. New features added soon.</p>
            <h2>Future Features</h2>
            <ul>
              <li>Search Capabilities</li>
              <li>Dyanmic Stock Profile Pages</li>
              <li>Stock Analysis</li>
            </ul>
          </div>
        <div>
          <a class="api-request-btn" href="javascript:void(0)" id="requestBtn">Load Data</a>
            <table class="api-table">
                <tr><th>Symbol</th><th>Name</th><th>Currency</th><th>Exchange</th><th>Country</th><th>Type</th></tr>
                <tr id="api-received-data" class="data">
            </table>
        </div>
</div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://twitter.github.io/typeahead.js/js/handlebars.js"></script>
<script
    type="text/javascript"
    src="../scripts/script.js"></script>
</body>

</html>
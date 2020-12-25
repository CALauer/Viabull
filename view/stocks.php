<?php 
include '../includes/config.php'; 
require "../includes/header.php"; 
?>

        

  <section class="api-main">
    <div class="api-wrapper">
      <div class="one-column-div">
        <!-- <img src="../images/viabull-lndg.svg" alt="viabull-logo" class="img-25"> -->
      </div>
      <div class="two-column-div">
        <div>

        <h2>Powered by <span class="bold">Twelve</span>Data</h2>
         
          <p class="sponsor">Viabull will be utilizing TwelveData's API. As of right now, the data being utilized is from a local static JSON file. However,
              in the future we will be requesting the information straight from their servers.
            This is simply pulling data from a JSON file, parsing that data, turning that data into pleasantries. New features added soon.</p>

                      <h2>Search By Name</h2> <br />
          <input type="search" class="search-input" id="search-by-name"> <br />
           <h2>Search By Symbol</h2> <br />
          <input type="search" class="search-input" id="search-by-symbol"><br />
        </div>
        <div>
            <!-- <table class="api-table">
                <tr><th>Symbol</th><th>Name</th><th>Currency</th><th>Exchange</th><th>Country</th><th>Type</th></tr>
                <tr id="api-received-data" class="data">
            </table> -->
            <table id="myTable" class="search-results-table">
            </table>
        </div>
        </div>
        <div class="one-column-div">

        </div>
</div>
    </div>
<?php include ('../includes/footer.php'); ?>
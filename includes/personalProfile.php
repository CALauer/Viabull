<?php 

echo '
<section class="profile">
    <div class="profile-wrapper">
        <div class="profile-left">
        <a href="#" class="profile-actions-active">Account Overview</a>
        <a href="#" class="profile-actions">My Watchlist</a>
        <a href="#" class="profile-actions">Inbox</a>
        <a href="#" class="profile-actions">Transaction History</a>
        <a href="#" class="profile-actions">Payment Methods</a>
        <a href="#" class="profile-actions">Portfolio</a>
        <a href="#" class="profile-actions">Open Orders</a>
        </div>
        <div class="profile-right">
            <div class="profile-right-two-columns">
                <div class="profile-div">
                <h1 class="profile-div-head">Your Information</h1>
                    <table class="profile-info-table">
                    <tr>
                    <td class="profile-sub">ID</td>
                    <td>'. $row["id"] .'</td>
                    </tr>
                    <tr>
                    <td class="profile-sub">Name</td>
                    <td>Unregistered</td>
                    </tr>
                    <tr>
                    <td class="profile-sub">Username</td>
                    <td>'. $row["username"] .'</td>
                    </tr>
                    <tr>
                    <td class="profile-sub">Email</td>
                    <td>'. $row["email"] .'</td>
                    <td>';
                    // if (isset($_GET['error'])) {
                    //     if ($_GET['error'] == "emptyFields") {
                    //         echo 'Please fill in all fields';
                    //     }
                    // }
                    // if (isset($_GET['error'])) {
                    //     if ($_GET['error'] == "numberFormat") {
                    //         echo 'Please enter either a 7 or 10 digit phone number';
                    //     }
                    // }
                    // if (isset($_GET['error'])) {
                    //     if ($_GET['error'] == "NaN") {
                    //         echo 'Please enter numbers only.';
                    //     }
                    // }
                    //   echo'  <a href="javascript:void(0)" onclick="updateEmail()" class="update-email-link" id="update-email-link">Update</a>
                    //     <form action="../includes/update_profile_inc.php?id='.$row["id"].'" method="post" id="update-email-form">
                    //     <input type="tel" class="update-email-input" name="email">
                    //     <button type="submit" class="update-btn" name="updateEmail" id="update-email-form-btn" >Submit</button>
                    //     <button type="button" onclick="closeUpdate()" class="update-btn-close" id="close-update-email-form-btn" >X</button>
                    //     </form>
                    '</tr>
                    <tr>
                    <td class="profile-sub">Phone</td>
                    <td>'. $row["phone"] .'</td>
                    <td>';
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == "emptyFields") {
                            echo 'Please fill in all fields';
                        }
                    }
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == "numberFormat") {
                            echo 'Please enter either a 7 or 10 digit phone number';
                        }
                    }
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == "NaN") {
                            echo 'Please enter numbers only.';
                        }
                    }
                      echo'  <a href="javascript:void(0)" onclick="updatePhone()" class="update-phone-link" id="update-phone-link">Update</a>
                        <form action="../includes/update_profile_inc.php?id='.$row["id"].'" method="post" id="update-phone-form">
                        <input type="tel" class="update-phone-input" name="phone">
                        <button type="submit" class="update-btn" name="updatePhone" id="update-phone-form-btn" >Submit</button>
                        <button type="button" onclick="closeUpdate()" class="update-btn-close" id="close-update-phone-form-btn" >X</button>
                        </form>
                    </td>
                    </tr>
                    </table>
                    <h2></h2>
                    <h3></h3>
                </div>
                <div class="profile-div">
                
                    <table class="profile-info-table">
                    <h1 class="profile-div-head">Viabull Balance</h1>
                    <tr>
                    <td class="profile-sub">Cash</td>
                    <td>$135.56</td>
                    </tr>
                    <tr> 
                    <td  class="profile-sub">Credit</td>
                    <td>$401.67</td>
                    </tr>
                    <tr> 
                    <td  class="profile-sub">Stocks</td>
                    <td>$4,001.67</td>
                    </tr>
                    <tr> 
                    <td  class="profile-sub">Account Balance</td>
                    <td>$4,538.90</td>
                    </tr>
                    <tr> 
                    <td  class="profile-sub"><a href="javascript:void(0)">Payment Methods</a></td>
                    <td></td>
                    </tr>
                    </table>
                </div>

            </div>
            <div class="profile-right-one-column">
                <div class="profile-div">
                <h1 class="profile-div-head">Recent Purchases</h1>
                    <table class="profile-info-table">
                    <tr>
                    <th>Date</th>
                    <th>Symbol</th>
                    <th>Type</th>
                    <th>Limit Price</th>
                    <th>Qty</th>
                    <tr>
                    <td class="profile-sub">12/19/2020</td>
                    <td>AMD</td>
                    <td>Put Option</td>
                    <td>$4.35</td>
                    <td>2</td>
                    </tr>
                    <tr>
                    <td class="profile-sub">12/19/2020</td>
                    <td>MSFT</td>
                    <td>Call Option</td>
                    <td>$5.35</td>
                    <td>1</td>
                    </tr>
                    <tr>
                    <td class="profile-sub">12/19/2020</td>
                    <td>HYLN</td>
                    <td>Call Option</td>
                    <td>$2.35</td>
                    <td>4</td>
                    </tr>
                    <tr>
                    <td class="profile-sub">12/19/2020</td>
                    <td>AMD</td>
                    <td>Stocks</td>
                    <td>$94.35</td>
                    <td>1,024</td>
                    </tr>
                    </table>
                </div>
            </div>
            <div class="profile-right-one-column" id="profile_myWatchList">
                <div class="profile-div">
                <h1 class="profile-div-head">My Watchlist</h1>
                    <table class="profile-info-table">
                    <tr>
                    <th>Symbol</th>
                    <th>Open</th>
                    <th>Close</th>
                    <th>Low</th>
                    <th>High</th>
                    <th>Volume</th>
                    <tr>
                    <td>SYM</td>
                    <td>$100.00</td>
                    <td>$97.89</td>
                    <td>$4.35</td>
                    <td>$4.35</td>
                    <td>123,999</td>
                    </tr>
                    <tr>
                    <td>SYM</td>
                    <td>$100.00</td>
                    <td>$97.89</td>
                    <td>$4.35</td>
                    <td>$4.35</td>
                    <td>123,999</td>
                    </tr>
                    <tr>
                    <td>SYM</td>
                    <td>$100.00</td>
                    <td>$97.89</td>
                    <td>$4.35</td>
                    <td>$4.35</td>
                    <td>123,999</td>
                    </tr>
                    <tr>
                    <td>SYM</td>
                    <td>$100.00</td>
                    <td>$97.89</td>
                    <td>$4.35</td>
                    <td>$4.35</td>
                    <td>123,999</td>
                    </tr>
                </div>
            </div>
                     
        </div>
    </div>
    
</section>
';



?>
<?php 

echo '
<section class="profile">
    <div class="profile-wrapper">
        <div class="profile-left">
        <a href="javascript:void(0)" class="profile-actions active"  id="myAccountOverview-link">Account Overview</a>
        <a href="javascript:void(0)" class="profile-actions">Inbox(Coming Soon)</a>
        <a href="javascript:void(0)" class="profile-actions" id="myWatchlist-link">My Watchlist</a>
        <a href="javascript:void(0)" class="profile-actions" id="myTransaction-link">My Transactions</a>
        <a href="javascript:void(0)" class="profile-actions">Payment Methods(Coming Soon)</a>
        <a href="javascript:void(0)" class="profile-actions">Portfolio(Coming Soon)</a>
        <a href="javascript:void(0)" class="profile-actions">Open Orders(Coming Soon)</a>
        </div>
        <div class="profile-right">
            <div class="profile-right-two-columns" id="profile_myOverview">
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
                    echo '</tr>
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
                    <td  class="profile-sub"><a href="../view/buycoins.php">Buy V-Coins</a></td>
                    <td></td>
                    </tr>
                    </table>
                </div>

            </div>
            <div class="profile-right-one-column displayNone" id="profile_myTransactions">
                <div class="profile-div">
                <h1 class="profile-div-head">Recent Trasnactions</h1>
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



            <div class="profile-right-one-column displayNone" id="profile_myWatchList">
                <div class="profile-div">
                <h1 class="profile-div-head">My Watchlist</h1>
                    <table class="profile-info-table">
                    <tr>
                    <th>Symbol</th>
                    <th>Gain/Loss</th>
                    <th>Current Price</th>
                    <th>Open</th>
                    <th>Low</th>
                    <th>High</th>
                    <th>Volume</th>
                    <th>Time</th>
                    <th>Actions</th>
                    <tr>';
                    $id = $_SESSION['id'];
                    $sql = "SELECT * FROM userstocks WHERE userId = $id";
                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0)  { //profile view
                                        while($row = mysqli_fetch_assoc($result)) {
                                          $row = $row['stockId'];
                                          echo 
                    '<td><span class="nav-sym">'.$row.'</span></td>
                    <td><span class="perc-up">0.95%</span></td>
                    <td><span class="nav-price"> ($54.68)</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button class="del-btn">Remove</button></td>
                    </tr>';
                    
                            }
                          } echo
                          
                    '</tr>
                    </table>
                </div>
            </div>
                     
        </div>
    </div>
    
</section>
';



?>
<?php 
include '../includes/config.php'; 
require "../includes/header.php"; 
?>


<?php
    $id = $_GET['id'];
    $sql = "SELECT * FROM registered where id = $id";
    $result = $conn->query($sql);
        if (isset($_SESSION['id'])) { //General view
            if ($_SESSION['id'] == $id ) { 
                if ($result->num_rows > 0)  { //profile view
                    while($row = $result->fetch_assoc()) {
//PERSONAL PROFILE
echo '
<section class="profile">
    <div class="profile-wrapper">
        <div class="profile-left">
        <a href="#" class="profile-actions-active">Account Overview</a>
        <a href="#" class="profile-actions">Account Details</a>
        <a href="#" class="profile-actions">Security</a>
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
                    </tr>
                    <tr>
                    <td class="profile-sub">Phone</td>
                    <td>Unregistered</td>
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
                </div>
            </div>
        </div>
    </div>
</section>
';


}
}
}
else
{
if ($result->num_rows > 0) { //profile view
//MEMBER VIEW OTHER PROFILE
    while($row = $result->fetch_assoc()) {
        echo '<div id="profile_wrapper">
        <div id="profileLeft">
            <img src="../../portfolio_images-assets/cl_logo_big.png" alt="" class="profilePic">
            <div>
                <h2>' . $row["username"] . '</h2>
                <h3>' . $row["id"] . '</h3>
            </div>
        
        </div>
        <div id="profile_content">
            <div id="profileNav">
                <ul>
                    <li><a href="#">Overview</a></li>
                    <li><a href="#">Projects</a></li>
                </ul>
            </div>
            <div class="section">
                <!-- <h3>Overview</h3> -->
        <h3>Member Info</h3>
        <table class="profile_table">
            <tr>
                <th>Registration Date</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Projects Count</th>
                <th>Git</th>
                <th>Code Pen</th>
            </tr>
            <tr>
                <td>Date</td>
                <td>John</td>
                <td>Smith</td>
                <td>6</td>
                <td><a href="#">Link</a></td>
                <td><a href="#">Link</a></td>
            </tr>
        </table>
        <h3>Projects Overview</h3>
        <table class="profile_table">
            <tr>
                <th>Projects</th>
                <th>Status</th>
                <th>Icon</th>
                <th>Link</th>
                <th>Git</th>
                <th>Updated By</th>
                <th>Update Date</th>
            </tr>
            <tr>
                <td>Project Management Site</td>
                <td>Orange</td>
                <td></td>
                <td>Test</td>
                <td><a href="#">Here</a></td>
                <td><a href="#">User</a></td>
                <td>Test</td>
            </tr>
            <tr>
                <td>Portfolio</td>
                <td>Orange</td>
                <td><img src="../../portfolio_images-assets/cl_logo.png" alt="icon" class="prjct_table_icon"></td>
                <td>Test</td>
                <td><a href="#">Here</a></td>
                <td><a href="#">User</a></td>
                <td>Test</td>
            </tr>
            <tr>
            <td>Real Estate Website</td>
            <td>Red</td>
            <td></td>
            <td>Test</td>
            <td><a href="#">Here</a></td>
            <td><a href="#">User</a></td>
            <td>Test</td>
        </tr>
            <tr>
                <td>E-commerce</td>
                <td>Red</td>
                <td></td>
                <td>Test</td>
                <td><a href="#">Here</a></td>
                <td><a href="#">User</a></td>
                <td>Test</td>
            </tr>    <tr>
            <td>Digital Agency</td>
            <td>Red</td>
            <td></td>
            <td>Test</td>
            <td><a href="#">Here</a></td>
            <td><a href="#">User</a></td>
            <td>Test</td>
        </tr>
        </table>
        <h3>About</h3>
        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci in, sapiente libero blanditiis
            exercitationem vel cupiditate nostrum! Repellendus nobis non distinctio voluptas iste at similique hic,
            molestias modi architecto accusantium rerum quae porro, vitae illum dignissimos maxime quis natus id
            perferendis autem magni officiis enim. Iusto corrupti architecto inventore reprehenderit?</p>
        </div>
        </div>
        </div>';
    }
    }
    }
    }
    else {
        //NON MEMBER VIEW
        if ($result->num_rows > 0) { //profile view

            while($row = $result->fetch_assoc()) {
                echo '<div id="profile_wrapper">
                <div id="profileLeft">
                    <img src="../../portfolio_images-assets/cl_logo_big.png" alt="" class="profilePic">
                    <div>
                        <h2>' . $row["username"] . '</h2>
                        <h3>' . $row["id"] . '</h3>
                    </div>
                
                </div>
                <div id="profile_content">
                    <div id="profileNav">
                        <ul>
                            <li><a href="#">Overview</a></li>
                            <li><a href="#">Projects</a></li>
                        </ul>
                    </div>
                    <div class="section">
                        <!-- <h3>Overview</h3> -->
                <h3>Member Info</h3>
                <table class="profile_table">
                    <tr>
                        <th>Registration Date</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Projects Count</th>
                        <th>Git</th>
                        <th>Code Pen</th>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td>John</td>
                        <td>Smith</td>
                        <td>6</td>
                        <td><a href="#">Link</a></td>
                        <td><a href="#">Link</a></td>
                    </tr>
                </table>
                <h3>Projects Overview</h3>
                <table class="profile_table">
                    <tr>
                        <th>Projects</th>
                        <th>Status</th>
                        <th>Icon</th>
                        <th>Link</th>
                        <th>Git</th>
                        <th>Updated By</th>
                        <th>Update Date</th>
                    </tr>
                    <tr>
                        <td>Project Management Site</td>
                        <td>Orange</td>
                        <td></td>
                        <td>Test</td>
                        <td><a href="#">Here</a></td>
                        <td><a href="#">User</a></td>
                        <td>Test</td>
                    </tr>
                    <tr>
                        <td>Portfolio</td>
                        <td>Orange</td>
                        <td><img src="../../portfolio_images-assets/cl_logo.png" alt="icon" class="prjct_table_icon"></td>
                        <td>Test</td>
                        <td><a href="#">Here</a></td>
                        <td><a href="#">User</a></td>
                        <td>Test</td>
                    </tr>
                    <tr>
                    <td>Real Estate Website</td>
                    <td>Red</td>
                    <td></td>
                    <td>Test</td>
                    <td><a href="#">Here</a></td>
                    <td><a href="#">User</a></td>
                    <td>Test</td>
                </tr>
                    <tr>
                        <td>E-commerce</td>
                        <td>Red</td>
                        <td></td>
                        <td>Test</td>
                        <td><a href="#">Here</a></td>
                        <td><a href="#">User</a></td>
                        <td>Test</td>
                    </tr>    <tr>
                    <td>Digital Agency</td>
                    <td>Red</td>
                    <td></td>
                    <td>Test</td>
                    <td><a href="#">Here</a></td>
                    <td><a href="#">User</a></td>
                    <td>Test</td>
                </tr>
                </table>
                <h3>About</h3>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci in, sapiente libero blanditiis
                    exercitationem vel cupiditate nostrum! Repellendus nobis non distinctio voluptas iste at similique hic,
                    molestias modi architecto accusantium rerum quae porro, vitae illum dignissimos maxime quis natus id
                    perferendis autem magni officiis enim. Iusto corrupti architecto inventore reprehenderit?</p>
                </div>
                </div>
                </div>';
            }
        }

    }
    ?>
<?php
    require "../includes/footer.php";
    ?>
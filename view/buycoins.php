<?php 
include '../includes/config.php'; 
require "../includes/header.php"; 
?>

<section class="buy_coins">
 <div class="buy_coins_wrapper">

 <div><img src="../images/5hun.png" alt="coin_buy" class="buy_img">
 <p>Get 500 V-Coins for just $4.99. The purchase of V-Coins is non-refundable. V-Coins can only be used
     to purchase items within Viabull, please 
     read our purchasing agreement here.
 </p>
 <a href="javascript:void(0)" id="checkout_button" class="buy-btns">Purchase Now</a>
<script>
window.addEventListener('DOMContentLoaded', function(e) {
document.getElementById('checkout_button').addEventListener('click', function(e) {
CollectCheckout.redirectToCheckout({
type: "sale",
lineItems: [
{
lineItemType: "purchase",
sku: "0002",
quantity: 1
},
],
successUrl: null,
cancelUrl: null,
receipt: {
showReceipt: true,
sendToCustomer: true,
},
collectShippingInfo: true,
paymentMethods: [
{
type: "creditCard",
},
{
type: "googlePay",
},
],
}).then((error) => {
console.log(error);
});
});
});
</script>

</div>
 <div><img src="../images/1thou.png" alt="coin_buy" class="buy_img">
 <p>Get 500 V-Coins for just $4.99. The purchase of V-Coins is non-refundable. V-Coins can only be used
     to purchase items within Viabull, please 
     read our purchasing agreement here.
 </p>
 <a href="javascript:void(0)" id="checkout_button2" class="buy-btns">Purchase Now</a>
 <script>
window.addEventListener('DOMContentLoaded', function(e) {
document.getElementById('checkout_button2').addEventListener('click', function(e) {
CollectCheckout.redirectToCheckout({
type: "sale",
lineItems: [
{
lineItemType: "purchase",
sku: "0002",
quantity: 1
},
],
successUrl: null,
cancelUrl: null,
receipt: {
showReceipt: true,
sendToCustomer: true,
},
collectShippingInfo: true,
paymentMethods: [
{
type: "creditCard",
},
{
type: "googlePay",
},
],
}).then((error) => {
console.log(error);
});
});
});
</script></div>
 <div><img src="../images/15hun.png" alt="coin_buy" class="buy_img">
 <p>Get 500 V-Coins for just $4.99. The purchase of V-Coins is non-refundable. V-Coins can only be used
     to purchase items within Viabull, please 
     read our purchasing agreement here.
 </p>
<a href="#" class="buy-btns">Buy for $14.99</a></div>
 </div>

</section>      


<?php include ('../includes/footer.php'); ?>
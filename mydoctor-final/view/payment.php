<?php
include '../model/db.php';
?>

<html>
    <body>
        <style>
 .PaymentBox {
  border: 1px solid #ddd;
  border-radius: 5px;
  padding: 10px;
  margin: 10px;
}

.Payment {
  background-color: #f2f2f2;
  padding: 20px;
  border-radius: 10px;
}

.Payment h4 {
  margin-bottom: 10px;
}

.Payment ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

.Payment li {
  margin-bottom: 10px;
}

.Payment label {
  margin-left: 5px;
}

.Payment button {
  background-color: #ADD8E6;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 10px 0;
  cursor: pointer;
}

.Payment button:hover {
  background-color: #ADD8E6;
}

.Payment input[type=radio] {
  display: none;
}

.Payment input[type=radio] + label:before {
  content: "";
  display: inline-block;
  width: 20px;
  height: 20px;
  margin-right: 5px;
  border-radius: 50%;
  border: 2px solid #ddd;
}

.Payment input[type=radio]:checked + label:before {
  background-color:#ADD8E6;
  border-color: #ADD8E6;
}
 </style>

<div class="PaymentBox">
<form method="post" action="" enctype="">
  <div class="Payment">
    <h4><u>Payment Procedure</u></h4>
    <ul>
      <li>
        <input type="radio" id="bkash" name="payment_method" value="bkash">
        <label for="bkash">bKash</label>
      </li>
      <li>
        <input type="radio" id="rocket" name="payment_method" value="rocket">
        <label for="rocket">Rocket</label>
      </li>
      <li>
        <input type="radio" id="nagad" name="payment_method" value="nagad">
        <label for="nagad">Nagad</label>
      </li>
    </ul>
    <button><a href=bkash.php>Proceed to Payment</a></button>
  </div>
</form>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
</head>
<body>
    <!-- Form for buyer's name and phone number -->
    <form id="paymentForm" action="processpayment.php" method="POST">
        <input type="text" id="buyerName" name="buyerName" placeholder="Your Name">
        <input type="text" id="phoneNumber" name="phoneNumber" placeholder="Your Phone Number">
        <div id="purchaseDate"></div> <!-- Display purchase date -->

        <!-- Hidden input for total price (optional) -->
        <input type="hidden" id="totalPrice" name="totalPrice" value="">

        <!-- Submit button to submit the form -->
        <button type="submit" class="js_buy_now_btn">Submit</button>
    </form>

    <!-- Include reference to the JavaScript file -->
    <script src="../scripts/products.js"></script>
</body>
</html>

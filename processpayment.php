<?php
// Your server-side script (e.g., your_server_script.php)
$data = json_decode(file_get_contents('php://input'), true);

// Check if data is not null
if (!empty($data)) {
  // Extract data
  $buyerName = isset($data['buyerName']) ? $data['buyerName'] : '';
  $phoneNumber = isset($data['phoneNumber']) ? $data['phoneNumber'] : '';
  // $purchaseDate = isset($data['purchaseDate']) ? $data['purchaseDate'] : '';
  $totalPrice = isset($data['totalPrice']) ? $data['totalPrice'] : 0;
  $itemsBought = isset($data['itemsBought']) ? $data['itemsBought'] : [];

  // Insert data into the database (using PDO or mysqli, for example)
  $server = "localhost";
  $user = "root";
  $password = "";
  $dbname = "purchaseinfodb";
  try{
   $connection = mysqli_connect($server,$user,$password,$dbname);
    echo"Connection successful";
  }
  catch (mysqli_sql_exception) {
    echo"could not connect to the database.";
  }
  
  $connection = new PDO('mysql:host=localhost;dbname=purchaseinfodb', 'root', '');
  $sql = "INSERT INTO paymentstb (buyername, phonenumber,totalprice) VALUES (?, ?, ?)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$buyerName, $phoneNumber, $totalPrice]);

  $paymentId = $pdo->lastInsertId(); // Get the ID of the inserted payment

  // Insert item details into another table (assuming you have an 'items' table)
  foreach ($itemsBought as $item) {
      $itemName = isset($item['name']) ? $item['name'] : '';
      $itemImageSrc = isset($item['imageSrc']) ? $item['imageSrc'] : '';
      $itemPrice = isset($item['price']) ? $item['price'] : '';

      $sql = "INSERT INTO itemtb (paymentid, itemname, itemimage, itemprice) VALUES (?, ?, ?, ?)";
      $stmt = $pdo->prepare($sql);
      $stmt->execute([$paymentId, $itemName, $itemImageSrc, $itemPrice]);
  }

  // Respond to the client-side script (if needed)
  echo "Purchase information saved successfully!";
}
 else {
    echo "Error: No data received.";
}




  // Your server-side script (e.g., your_server_script.php)
// $data = json_decode(file_get_contents('php://input'), true);

// Extract data
// $buyerName = $data['buyerName'];
// $phoneNumber = $data['phoneNumber'] ;
// // $purchaseDate = $data['purchaseDate'];
// $totalPrice = $data['totalPrice'];
// $itemsBought = $data['itemsBought'];

// try {
  // $server = "localhost";
  // $user = "root";
  // $password = "";
  // $dbname = "purchaseinfodb";

  // $connection = mysqli_connect($server,$user,$password,$dbname);
    // Connect to the database using PDO
    // $pdo = new PDO('mysql:host=localhost;dbname=purchaseinfodb', 'root', '');
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Enable error reporting

    // Begin a transaction
    // $pdo->beginTransaction();

    // Insert data into the 'payments' table
    // $sql = "INSERT INTO paymentstb (buyername, phonenumber,totalprice) VALUES (?, ?, ?)";
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute([$buyerName, $phoneNumber, $totalPrice]);

    // Get the ID of the inserted payment
    // $paymentId = $pdo->lastInsertId();

    // Insert item details into the 'items' table
    // $sql = "INSERT INTO itemtb (paymentid, itemname, itemimage, itemprice) VALUES (?, ?, ?, ?)";
    // $stmt = $pdo->prepare($sql);

    // foreach ($itemsBought as $item) {
    //     $itemName = $item['name'];
    //     $itemImageSrc = $item['imageSrc'];
    //     $itemPrice = $item['price'];

    //     $stmt->execute([$paymentId, $itemName, $itemImageSrc, $itemPrice]);
    // }

    // Commit the transaction
    // $pdo->commit();

    // Respond to the client-side script (if needed)
    // echo "Purchase information saved successfully!";
// } catch (PDOException $e) {
    // Rollback the transaction on error
    // $pdo->rollback();
    // Handle the error (display, log, etc.)
//     echo "Error: " . $e->getMessage();
// }


?>

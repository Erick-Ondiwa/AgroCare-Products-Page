<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cereals</title>

  <link rel="stylesheet" href="../styles/products.css">
</head>
<body>
  <div class="cereals_products">
    <a href="./seeds.php" onclick="history.back()" class="back-link">&lt; Back</a>

    <div>
      <p>Cereals</p>

      <!-- Search bar -->
      <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search cereals...">
      </div>
    </div>

    <div class="inputs_grid">
  
      <div class="input_varieties">
        <p class="input_title"></p>
        <div class="input_image">
          <img class="image js_input_image" src="SeedsImages/Cereals/10-SEEDCODUMA43.png" alt="">
        </div>
        
        <p class="name js_input_name">10-SEEDCODUMA43</p>
        <p class="price js_input_price">Ksh.750</p>
  
        <button class="select_button js_input_btn" data-name="SEEDCODUMA43" data-price= "750" data-image="SeedsImages/Cereals/10-SEEDCODUMA43.png">Select</button>
      </div>
  
      <div class="input_varieties">
        <p class="input_title"></p>
        <div class="input_image">
          <img class="image js_input_image" src="SeedsImages/Cereals/133-Advanta 23012.png" alt="">
        </div>
        <p class="name js_input_name">133-Advanta 23012</p>
        <p class="price js_input_price">Ksh.720</p>
  
        <button class="select_button js_input_btn" data-name="Advanta 23012" data-price= "720" data-image="SeedsImages/Cereals/133-Advanta 23012.png">Select
        </button>
      </div>
  
      <div class="input_varieties">
        <p class="input_title"></p>
        <div class="input_image">
          <img class="image js_input_image" src="SeedsImages/Cereals/157-Panar7M81.png" alt="">
        </div>
        <p class="name js_input_name">157-Panar7M81</p>
        <p class="price js_input_price">Ksh.700</p>
        <button class="select_button js_input_btn" data-name="157-Panar7M81" data-price= "700" data-image="SeedsImages/Cereals/157-Panar7M81.png">Select</button>
      </div>
  
      <div class="input_varieties">
        <p class="input_title"></p>
        <div class="input_image js_input_image">
          <img class="image" src="SeedsImages/Cereals/159-Pioneer3812W.png" alt="">
        </div>
        <p class="name js_input_name">159-Pioneer3812W</p>
        <p class="price js_input_price">Ksh.950</p>
        <button class="select_button js_input_btn" data-name="159-Pioneer3812W" data-price="950" data-image="SeedsImages/Cereals/159-Pioneer3812W.png">Select</button>
      </div>
  
      <div class="input_varieties">
        <p class="input_title"></p>
        <div class="input_image js_input_image">
          <img class="image" src="SeedsImages/Cereals/21-MONSANTODK777.png" alt="">
        </div>
        <p class="name js_input_name">21-MONSANTODK777</p>
        <p class="price js_input_price">Ksh.850</p>
        <button class="select_button js_input_btn" data-name="21-MONSANTODK777" data-price="850" data-image="SeedsImages/Cereals/21-MONSANTODK777.png">Select</button>
      </div>
  
      <div class="input_varieties">
        <p class="input_title"></p>
        <div class="input_image">
          <img class="image js_input_image" src="SeedsImages/Cereals/27-SEEDCOPUNDAMILIA53.png" alt="">
        </div>
        <p class="name js_input_name">27-SEEDCOPUNDAMILIA53</p>
        <p class="price js_input_price">Ksh.700</p>
        <button class="select_button js_input_btn" data-name="27-SEEDCOPUNDAMILIA53" data-price="700" data-image="SeedsImages/Cereals/27-SEEDCOPUNDAMILIA53.png">Select</button>
      </div>
  
      <div class="input_varieties">
        <p class="input_title"></p>
        <div class="input_image">
          <img class="image js_input_image" src="SeedsImages/Cereals/28-SEEDCOSIMBA61.png" alt="">
        </div>
        <p class="name js_input_name">28-SEEDCOSIMBA61</p>
        <p class="price js_input_price">Ksh.800</p>
        <button class="select_button js_input_btn" data-name="28-SEEDCOSIMBA61" data-price="800" data-image="SeedsImages/Cereals/28-SEEDCOSIMBA61.png">Select</button>
      </div>
  
      <div class="input_varieties">
        <p class="input_title"></p>
        <div class="input_image">
          <img class="image js_input_image" src="SeedsImages/Cereals/81-DekalbDKC8033.png" alt="">
        </div>
        <p class="name js_input_name">81-DekalbDKC8033</p>
        <p class="price js_input_price">Ksh.900</p>
        <button class="select_button js_input_btn" data-name="81-DekalbDKC8033" data-price="900" data-image="SeedsImages/Cereals/81-DekalbDKC8033.png">Select</button>
      </div>
    </div>


    <!-- Basket display area -->
    <div id="basket" class="basketDisplay js_basketDisplay">
      <div class="exit_tab">
        <p class="exit js_exit_tab">X</p>
      </div>
      <h2>Your Basket</h2>
      <div id="basket-items"></div>
      <!-- <div class="button_items" id="button-items"></div> -->
      <p class="total_price" id="total-price"></p>
      <button class="add_more_items js_add_more_items">Add More Items</button>
      <button class="buy_now_btn js_buy_now_btn">Buy Now</button>
    </div>
  </div>

  <!--input display area-->

  <!-- <div class="payment_form js_payment_form">
    <div class="exit_tab">
      <p class="exit js_exit_tab">X</p>
    </div>

    <div class="display_input js_input_display">
      <div class="input_img">
        <img class="disp_img" id="selected_image" src="" alt="">
      </div>

      <div class="input_details js_input_details">
        <p class="input_name" id="selected_name"></p>
        <p class="input_price" id="selected_price"></p>
      
        <div class="purchase_quantity">
          <button class="dec_quantity" id="js_dec_quantity">-</button>
          <p class="show_quantity" id="js_show_quantity"></p>
          <button class="inc_quantity" id="js_inc_quantity">+</button>
        </div>
        <button class="add_to_bskt_btn js_add_to_bskt_btn">Add to basket</button>
      </div>
    </div>
  </div> -->

  <!-- <div class="cart_display_info js_cart_display_info">
    <div class="exit_cart">
      <p class="cart_exit js_exit_cart">X</p>
    </div>

    <p class="basket_title">Your basket</p>

    <div class="cart_items">
      <div class="input_img">
        <img class="cart_image cart_item_image" id="selected_image" src="" alt="">
      </div>
      <div class="cart_about">
        <div class="input_details js_input_details">
          <p class="item_name" id="cart_item_name"></p>
          <p class="item_price" id="cart_item_price"></p>
        </div>
       
          <p class="remove_image js_remove_image">x</p>
      
      </div>
      </div> -->

  <script src="../scripts/products.js"></script>

</body>
</html>
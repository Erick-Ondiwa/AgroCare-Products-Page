<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fertilizers</title>
  <link rel="stylesheet" href="./styles/fertilizers.css">
</head>
<body>
  <a href="./products.php" onclick="history.back()" class="back-link">&lt; Back</a>

  <div class="top_contents">
    <h2 class="fertilizers_title">Fertilizers</h2>
    <!-- <input class="search_bar" type="text" placeholder="Search for your fertilizers"> -->
  </div>
  
  <div class="products_fertilizers">
    <div class="fertilier_background_image">
    </div>

    <p class="browse_fertilizers">
      Browse our fertilizers
    </p>

    <div class="bottom_elements">
      <div class="planting_fert_bg_img">
        <a href="./fertilizers/planting_fert.php">Planting Fertilizers</a>

        <button class="view_more_btn js_planting_fert">View more</button>
      
      </div>

      <div class="topdressing_fert_bg_img">
        <a href="./fertilizers/topdresser.php" >Topdressing fertilizers</a>

        <button class="view_more_btn js_topdresser">View more</button>
      
      </div>
    </div>

    <div class="foliar_fert_bg_img">
        <a href="./fertilizers/foliar_fert.php">Foliar fertilizers</a>

        <button class="view_more_btn js_foliar">View more</button>
    </div>

  </div>
  <script src="./scripts/fertilizers.js"></script>
</body>
</html>
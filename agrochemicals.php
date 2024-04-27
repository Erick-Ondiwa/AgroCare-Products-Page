<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agrochemicals</title>

  <link rel="stylesheet" href="./styles/agrochemicals.css">
</head>
<body>
  <a href="./products.php" onclick="history.back()" class="back-link">&lt; Back</a>

  <div class="top_contents">
    <h2 class="agrochemicals_title">Agrochemicals</h2>
    <!-- <input class="search_bar" type="text" placeholder="Search for your agrochemicals"> -->
  </div>
  <div class="products_agrochemicals">
    <div class="products_background_image">
    </div>

    <p class="browse_agrochemicals">
      Browse our agrochemicals
    </p>

    <div class="bottom_elements">
      <div class="herbicides_bg_img">
        <a href="./agrochemicals/herbicides.php">Herbicides</a>
        
        <button class="view_more_btn js_herbicides">View more</button>
      </div>

      <div class="insecticides_bg_img">
        <a href="./agrochemicals/insecticides.php">Insecticides</a>

        <button class="view_more_btn js_insecticides">View more</button>
      </div>
    </div>

    <div class="fungicides_bg_img">
        <a href="./agrochemicals/fungicides.php">Fungicides</a>
        <button class="view_more_btn js_fungicides">View more</button>
    </div>

  </div>

<script src="./scripts/agrochemicals.js"></script>
</body>
</html>
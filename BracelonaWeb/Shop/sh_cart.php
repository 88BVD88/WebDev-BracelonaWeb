<?php
session_start();


$host = "localhost";
$user = "root";
$password = "root";
$dbname = "shop";
$conn = mysqli_connect($host, $user, $password, $dbname);


if (mysqli_connect_errno()) {
    die("Failed to connect to database: " . mysqli_connect_error());
}


if (isset($_POST['add_to_cart'])) {
    $item_id = $_POST['item'];
    $quantity = $_POST['quantity'];


    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    if (isset($_SESSION['cart'][$item_id])) {
        $_SESSION['cart'][$item_id] += $quantity;
    } else {
        $_SESSION['cart'][$item_id] = $quantity;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Shop</title>
<link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="cartStyle.css">
</head>
<div class="header">
        <div class="promo">
            Win 2 tickets for the next game ⚽ <a href="#" class="promo-link">SIGN UP AND PARTICIPATE</a>
        </div>
        <div class="user-options">
            <a href="#">Login</a> | 
            <a href="#">Register</a> 
            <select name="languages" id="language-select">
                <option value="English">English</option>
                <option value="Spanish">Spanish</option>
            </select>
            <button id="resetCookies">resetCookie </button>

        </div>
    </div>

    
        <nav>
    <div class="nav-left">
    <a href="../index.php"><img src="../images/BarcaLogo.png" alt="Barca Logo" class="logo"></a>
        <div class="dropdown">
            <button class="dropbtn">Club</button>
            <div class="dropdown-content">
                <a href="#">History</a>
                <a href="#">Stadium</a>
                <a href="#">Board</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Barca Teams</button>
            <div class="dropdown-content">
                <a href="#">First Team </a>
                <a href="#">Barca B</a>
                <a href="#">Women's Team</a>
                
            </div>
        </div>
    </div>

    <div class="nav-right">
        <a href="../fixtures.html">Fixtures</a>
        <a href="../Shop/sh_cart.php">Shop</a>
        <a href="../quizz/quizz.html">Quizz</a>
    </div>
</nav>
<body>


    <div class="container2">
   
</br></br></br>
        <h2 >Products</h2>
        <div class="products">
            <?php
           
            $sql = "SELECT * FROM items";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                $item_id = $row['id'];
                $item_name = $row['name'];
                $item_price = $row['price'];
            
                $item_image = "Images/Item$item_id.png";
            ?>

                <div class="card">
                    
                    <img src="<?php echo $item_image; ?>" alt="<?php echo $item_name; ?>" style="width:60%">
                    <div class="container2">
                        <h4><?php echo $item_name; ?></h4>
                        <p class="price">£<?php echo $item_price; ?></p>
                        <form method='post' action='sh_cart.php'>
                            <label for='quantity'>Quantity:</label>
                            <input type='number' name='quantity' value='1' min='1'>
                            <input type='hidden' name='item' value='<?php echo $item_id; ?>'>
                            <input type='submit' name='add_to_cart' value='Add to Cart'>
                        </form>
                    </div>
                </div>

            <?php } ?>
        </div>
        <?php include('cart.php'); ?>
    </div>
    
</body>
</html>

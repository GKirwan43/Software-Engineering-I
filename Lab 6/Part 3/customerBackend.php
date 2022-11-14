<?php
    $shoesQuanity = $_POST["shoes_quanity"];
    $computerQuanity = $_POST["computer_quanity"];
    $chairQuanity = $_POST["chair_quanity"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $shipping = $_POST["shipping"];

    $shipping_cost = 0;
    if ($shipping == "Free 7 day") {
        $shipping_cost=0;
    } else if ($shipping == "$50.00 over night") {
        $shipping_cost=50;
    } else if ($shipping == "$5.00 three day") {
        $shipping_cost=5;
    }

    function createRow($item, $quanity, $cost) {
        $subTotal = $cost * $quanity;

        return "<tr><th>$item</th><th>$quanity</th><th>$$cost</th><th>$$subTotal</th></tr>";
    }

    function shippingRow() {
        global $shipping, $shipping_cost;
        return "<tr><th>Shipping</th><th colspan='2'>$shipping</th><th>$$shipping_cost</th></tr>";
    }

    function totalRow() {
        global $shoesQuanity, $computerQuanity, $chairQuanity, $shipping_cost;
        $total_cost = (($shoesQuanity * 20) + ($computerQuanity * 1000) + ($chairQuanity * 100) + $shipping_cost);
        return "<tr><th colspan='3'>Total Cost</th><th>$$total_cost</th></tr>";
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Web Store</title>
    <link rel="stylesheet" href="styles.css" />
    <script src="formChecker.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="container">
        <h1>Web Store</h1>
        <div style="width:500px">
            <p>Thank you for your purchase!</p>
        </div>
        <div class="center">
            <div id="account_details">
                <h2>Account Details:</h2>
                <?php echo "<h3>Username: $username</p>" ?>
                <?php echo "<h3>Password: $password</p>" ?>
            </div>
            <div id="reciept">
                <h2>Reciept:</h2>
                <table>
                    <tr>
                        <th></th>
                        <th>Quanity</th>
                        <th>Cost Per Item</th>
                        <th>Sub Total</th>
                    </tr>
                    <?php
                        if ($shoesQuanity>"0") {
                            echo createRow("Shoes", $shoesQuanity, "20");
                        }
                        if ($computerQuanity>"0") {
                            echo createRow("Computer", $computerQuanity, "1000");
                        }
                        if ($chairQuanity>"0") {
                            echo createRow("Chair", $chairQuanity, "100");
                        }
                        echo shippingRow();
                        echo totalRow();
                    ?>
                </table>
            </div>
        </div>
    </div>
  </body>
</html>


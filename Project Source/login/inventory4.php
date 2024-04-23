<html>
    <head>
        <link rel="stylesheet" href="inventoryyy.css">
    </head>
    <body>
        <h1>Inventory Amount</h1>
        <form action="inventory_b4.php" method="get">
            <input type="text" name="quantity" id="contact" placeholder="" value="<?php
                session_start();
                echo $_SESSION['quantity4'];
            ?>">

        <button id="increment-btn" class="btn">Save</button>
        </form>
        <!-- <button id="increment-btn" onclick="increment()">Save</button> -->
        <br>
        <button id="save-btn" onclick="decrement()"><a href="admin.php">Back</a></button>
        <!-- <p id="save-el">Previous entries: </p> -->
        <script src="inventory.js"></script>
    </body>
</html>
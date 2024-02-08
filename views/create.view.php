<?php require('partials/header.php') ?>

    <form method="POST" action="/groceries/create/item-added">
        <label for="name">Product name:</label><br>
        <input name="name" id="name" type="text"><br>
        <label for="number">Amount:</label><br>
        <input name="number" id="number" type="number"><br>
        <label for="price">Price:</label><br>
        <input name="price" id="price" type="text">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
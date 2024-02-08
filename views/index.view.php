<?php require('partials/header.php') ?>

    <table id="table">
        <tr>
            <th>Product</th>
            <th>Prijs</th>
            <th>Aantal</th>
            <th>Subtotaal</th>
        </tr>

        <?php foreach ($groceries as $grocery) : ?>
        <tr>
            <td><?= $grocery->name; ?></td>
            <td class="productPrice"><?= $grocery->price; ?></td>
            <td><input type="number" class="productQuantity" value=<?= $grocery->number; ?> min="0"></td>
            <td class="productTotalCost"><?= $grocery->price * $grocery->number; ?></td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td>Totaal</td>
            <td></td>
            <td></td>
            <td id="totalCost">0</td>
        </tr>
    </table>

    <!-- <script src="script.js"></script> -->
</body>
</html>
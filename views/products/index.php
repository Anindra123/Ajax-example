<h1>Products search</h1>
<hr>
<br>
<div id="searchContainer">
    <form>
        <input type="text" name="search" id="searchProduct">
        <button type="submit" id="searchSubmit">Search Product</button>
    </form>
    <div id="dropDown">
        <?php echo '<pre>';
        var_dump($sProducts);
        echo '</pre>'; ?>
    </div>
</div>
<br>
<table>
    <tr>
        <th>Product Title</th>
        <th>Product Description</th>
        <th>Product Price</th>
    </tr>
    <?php foreach ($products as $product) : ?>
        <tr>
            <td><?php echo $product["title"] ?></td>
            <td><?php echo $product["description"] ?? "none" ?></td>
            <td><?php echo "Tk" . number_format($product["price"], 1) ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<h1>Products search</h1>
<hr>
<br>
<form action="" method="get">
    <input type="text" name="search">
    <button type="submit">Search Product</button>
</form>
<br>
<table>
    <thead>
        <th>Product Name</th>
        <th>Product Description</th>
        <th>Product Price</th>
    </thead>
    <?php foreach ($products as $product) : ?>
        <tr>
            <?php echo '<pre>';
            var_dump($product);
            echo '</pre>'; ?>
        </tr>
    <?php endforeach; ?>
</table>
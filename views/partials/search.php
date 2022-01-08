<?php foreach ($sProducts as $sProduct) : ?>

    <a href="">
        <p>
            <?php echo $sProduct['title'] ?>
        </p>
        <p>
            <?php echo $sProduct['price'] ?>

        </p>
    </a>
<?php endforeach; ?>
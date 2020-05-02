<?php require 'inc/data/products.php'; ?>
<?php require 'inc/head.php'; ?>

<section class="cookies container-fluid">
    <div class="row">
        <h2>Votre panier contient :</h2>
    </div>
    <div class="row">
        <ul>
        <?php
        if (!empty($_SESSION['cart'])) {
            $cart = explode(" ", $_SESSION['cart']);
            foreach($cart as $key => $value)
                if(empty($value))
                    unset($cart[$key]);
            foreach ($cart as $item) :?>
                <h3> 1 cookie <?= $catalog[$item]['name']; ?></h3>
            <?php endforeach;?>
            <p>(ça fait beaucoup là quand-même...)</p>

        <?php } else echo '<p> Rien du tout, faut faire un effort quand même :( </p>'
        ?>
        </ul>
    </div>
</section>


<?php require 'inc/foot.php'; ?>

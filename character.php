<!-- 
    This file will generate a custom movie character information page
    generated from the form on index.php

    // include the header

    // check if POST data was sent, and then create local variables
    from the $_POST data

    // the variables will be used below to fill out the webpage
        $character_name
        $actor
        $quote
        $movie
        $image
        $alt
 -->
<?php
include 'includes\header.php';
$character_name=$_POST['character_name'];
$actor = $_POST['actor'];
$quote = $_POST['quote'];
$movie = $_POST['movie'];
$image = $_POST['image'];
$alt = $_POST['movie'];
?>
<!-- 
     // use htmlspecialchars() for each variable displayed
 -->

<!-- character name -->
<h1 class="big"><?php echo htmlspecialchars($character_name); ?></h1>
<hr>

<!-- actor -->
<h2 class="right">Played by <?php echo htmlspecialchars($actor); ?></h2>
<hr>


<p class="quote">
    <!-- movie -->
    From <?php echo htmlspecialchars($movie); ?><br><br>

    <!-- quote -->
    <span style="font-size: 3em;">&#8220;</span>
    <?php echo htmlspecialchars($quote); ?>
</p>

<!-- image url and alt tag -->
<img src="<?php echo htmlspecialchars($image); ?>" alt="<?php echo htmlspecialchars($alt); ?>" class="center">

<!-- Use the var_dump's to check for problems -->

<!-- <pre>
        <?php var_dump($_POST); ?>
    </pre> -->
    <?php include 'includes/footer.php'?>
<!-- 
    // include the footer
 -->
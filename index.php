<!-- 
    // include the header file

    This file uses a form to  collect information and pass 
    it along to the character.php file using the POST method.

 -->
<?php include 'includes/header.php';?>
<h1>CISW 31 Character Generator</h1>

<form name="form1" action="character.php" method="post" enctype="multipart/form-data" class="w3-container w3-card w3-flat-peter-river">
    <label for="charname">Character Name</label><br>
    <input type="text" id="charname" name="character_name" size="50" required><br>

    <label for="actorname">Actor Name</label><br>
    <input type="text" id="actorname" name="actor" size="50" required><br>

    <label for="movie">Movie</label><br>
    <input type="text" id="movie" name="movie" size="50" required><br>

    <label for="quote">Famous Quote</label><br>
    <input type="text" id="quote" name="quote" size="50" required><br>

    <label for="image">Link to Character Photo</label><br>
    <input type="text" id="image" name="image" size="50"><br><br>
    <input type="submit" value="Submit" class="center space" size="25">
    <br>
</form>
<?php include 'includes/footer.php'?>
<!-- 
    // include the footer
-->
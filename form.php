<!DOCTYPE html>
<html lang="en">
<head>
<title>je moeder</title>
</head>
<body>
    <form action="form.php" method="get" class="form">
        <div class="form">
            <label for="mail"> Enter your mail: </label>
            <input type="text" name="mail" id="mail" required>
        </div>
        <div class="form">
            <input type="submit" value="Subscribe!">
        </div>
    </form>

<?php
    if(filter_var($_GET["mail"], FILTER_VALIDATE_EMAIL)) {
        echo "Mail is valid";
    } else {
        echo "Mail not valid";
    }
?>
</body>
</html>

<?php
if(isset($_POST["link"]))
{
    file_put_contents("link.txt", $_POST["link"]);
}
$link = file_get_contents('link.txt');
?>
<a href="<?=$link?>"><?=$link?> </a>

<form action="index.php" method="post" id="form">
  <input type="text" name="link">
  <input type="submit">
</form>

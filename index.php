<?php require_once($_SERVER["DOCUMENT_ROOT"]."/get_locale_page.php"); ?>
<!DOCTYPE html>
<html lang="en" lang="fr">
<?php include($_SERVER["DOCUMENT_ROOT"]."/header.php"); ?>
<body>
<?php include($_SERVER["DOCUMENT_ROOT"]."/menus.php"); ?>

<?php

//echo $page.'<br>';
if(isSet($page))
{
  $lang_file = $page."."."php";
}
?>
<!--<?php echo $lang_file.'<br>'; ?>-->

<div class="container-fluid">
<?php require_once $lang_file; ?>
</div>

<?php include($_SERVER["DOCUMENT_ROOT"]."/footer.php"); ?>
</body></html>

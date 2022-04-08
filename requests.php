<?php
require("utils/utils.php");
require("models/Form.php");


cool_dump($_GET["firstname"]);

$name = Form::GET("firstname");

brecho($name);
?>

<a href="?firstname=paolo&lastname=forgia">Link</a>





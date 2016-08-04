<html>
<body>
<?php
error_reporting(0);
$a="Link1";
$b="Link2";
echo "<a href='pass.php?link=$a'>Link 1</a>";
echo "<br/>";
echo "<a href='pass.php?link=$b'>Link 2</a>";
if ($_GET['link']==$a)
{
echo "Link 1 Clicked";
} else {
echo "Link 2 Clicked";
}

?></body></html>


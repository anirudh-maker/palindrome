<html>
<head>
</head>
<body>
<form method="post">
<input type ="text" name="check">
<button type ="submit" name="submit">login </button>
</form>
<?php
if(isset($_POST['submit'])){
$palindrome = $_POST['check'];
$reverse= strrev($palindrome);
if($palindrome==$reverse){
echo "yes it is ";
}
else {
    echo "no it is not palindorme";
}
}



?>



</body>


</html>
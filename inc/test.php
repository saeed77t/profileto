<form action="" method="post">
    <input type="file" name="image">
    <input type="submit" value="submit">
</form>

<?php
echo 'post : ';
var_dump($_POST);
echo '</br>' ;
echo 'files : ';

var_dump($_FILES);

if(isset($_POST['submit'])){
    if($_FILES["image"]["error"] > 0){
        echo $_FILES["file"]["error"];
    }
    else{
        echo $_FILES['file']["name"]; //  your file name
    }
}
?>
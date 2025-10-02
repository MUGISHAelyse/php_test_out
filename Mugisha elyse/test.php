;   
<form action="" method="post">
<input type="number" name= "name";>
<button type="submit" name="check">check</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['check'])) {
    $marke = $_POST['name'];

};
if($marke > 50){
    echo "pass";
}else{
    echo "fail";
}
?>
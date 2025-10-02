<form action="" methode="post">
    <Input type="number" name="name">
    <button type="submit" name="check">check</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['check'])) {
    $marke = $_POST['name'];

};
    if ($marke >= 80) {
        echo "A";
    } else {
        echo "a";
    } if ($marke >= 60) {
        echo "B";
    } else  {
        echo "b"; // you wrote "//C", assuming it's a typo, so made it "D"
    } if ($marke >= 50){
        echo "C";
    }else{
        echo "c";
    }if($marke < 50){
        echo "F";
    }else{
        echo "f";
    }

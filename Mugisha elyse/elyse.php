<form method="post">
  <label>Enter your age:</label>
  <input type="number" name="age">
  <button type="submit">Submit</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = $_POST["age"]; // Get the value from the form
}
if (!empty($age)) {
    // Proceed with conditions
} else {
    echo "Please enter your age.";
}
if ($age < 18) {
    echo "You are under 18.";
} elseif ($age >= 18 && $age < 60) {
    echo "You are an adult.";
} else {
    echo "You are a senior.";
}

?>
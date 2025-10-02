
<?php
// student_grade.php
// Program to grade a student based on marks

function getGrade($marks) {
    if ($marks >= 80) {
        return "A";


        
    } elseif ($marks >= 70) {
        return "B";
    } elseif ($marks >= 60) {
        return "C";
    } elseif ($marks >= 50) {
        return "D"; // you wrote "//C", assuming it's a typo, so made it "D"
    } else {
        return "F";
    }
}

// Example usage
$students = [
    "Alice" => 85,
    "Bob"   => 73,
    "Chris" => 66,
    "Diana" => 52,
    "Evan"  => 40,
];

echo "<h1>Student Grades</h1><ul>";
foreach ($students as $name => $marks) {
    echo "<li>$name: $marks → Grade " . getGrade($marks) . "</li>";
}
echo "</ul>";
?>
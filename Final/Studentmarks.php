<?php
$nameinput = isset($_POST["name"]) ? $_POST["name"] :"Guest";

$marks = array(50, 60, 70, 80, 90,40);

foreach ($marks as $mark) {
    $total += $mark; 
    
   
    if ($mark > $max) {
        $max = $mark;
    }
    
   
    if ($mark < $min) {
        $min = $mark;
    }
}


$average = $total / count($marks);


echo  "<h3>Class Statistics: </h3>";
echo "Total Marks : $total <br>";
echo "Average Marks : $average <br>";
echo "Maximum Marks: $max <br>";
echo "Minimum Marks :$min <br>";


function isPassed($score) {
    if ($score >= 50) {
        return true;
    } else {
        return false;
    }
}

$passedCount = 0;
$failedCount = 0;

foreach ($marks as $mark) {
    if (isPassed($mark)) {
        $passedCount++;
    } else {
        $failedCount++;
    }
}

echo "Number of Students Passed: $passedCount <br>";
echo "Number of Students Failed: $failedCount <br>";    


$studentDetails = [
  "name" => "Tamish",
   "id" => 12345,
   "cgpa" => "3.25",

   ];

   echo "<h3>Student Details: </h3>";

  foreach ($studentDetails as $key => $value) {
    echo ucfirst($key) . ": " . $value . "<br>";
    
  }

  $upperName = strtoupper($studentDetails["name"]);

  $namelength = strlen($studentDetails["name"]);


  echo " Name : $upperName <br>";
  echo " Name Length : $namelength <br>";
  echo " length of name : $namelength <br>";

?>
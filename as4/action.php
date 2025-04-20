<?php
// Defining array of Students
$student_names = array(
    "Avdhut", "Swapnil", "Akshay", "Sarvesh"
);

echo "<!DOCTYPE html><html><head><title>Search Result</title></head><body>";
echo "<h2>Search Result</h2>";

// Check if form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST['search_name'])){
       echo "<p>Please enter a name to search: </p>" ;
    }else{
        $search_name = trim($_POST['search_name']);
        $search_name_lower = strtolower($search_name);
        $student_names_lower = array_map('strtolower', $student_names);
        $present = in_array($search_name_lower, $student_names_lower);
        if ($present) {
            echo "<p>The name '$search_name' is present in the list.</p>";
        }else {
            echo "<p>The name '$search_name' is not present in the list.</p>";
        }
    }
}else{
    echo "<p>Form is not submitted!!</p>";
}

echo "</body></html>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// process.php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the submitted data
    $studentName = htmlspecialchars($_POST['studentName']);
    $studentID = htmlspecialchars($_POST['studentID']);
    $bookTitle = htmlspecialchars($_POST['bookTitle']);
    $borrowDate = htmlspecialchars($_POST['borrowDate']);
    $token = htmlspecialchars($_POST['token']);
    $returnDate = htmlspecialchars($_POST['returnDate']);
    $fees = htmlspecialchars($_POST['fees']);
    $paid = htmlspecialchars($_POST['paid']);

    if(!preg_match("/^[A-Za-z\-]+$/",$_POST['studentName']))
    {
        echo "Invalid Name";
        return;
    } 
 
    if (!preg_match("/\d{2}-\d{5}-\d{1}/" , $_POST['studentID']))
    {
        echo "Student ID is Invalid";
        return;
    }

$data1=new DateTime($borrowDate);
$data1=new DateTime($returnDate);
$interval = date_diff($data1,$data2);
if(($internal->format('%d'))>10)
{
    echo "Can't borrow a book more than 10 days";
    return;
}

    // Display the submitted data (for debugging purposes)
    echo "<h2>Borrow Form Submission</h2>";
    echo "<p><strong>Student Full Name:</strong> $studentName</p>";
    echo "<p><strong>Student AIUB ID:</strong> $studentID</p>";
    echo "<p><strong>Book Title:</strong> $bookTitle</p>";
    echo "<p><strong>Borrow Date:</strong> $borrowDate</p>";
    echo "<p><strong>Token:</strong> $token</p>";
    echo "<p><strong>Return Date:</strong> $returnDate</p>";
    echo "<p><strong>Fees:</strong> $fees</p>";
    echo "<p><strong>Paid:</strong> $paid</p>";

    // Here you can add code to save the data to a database
    // or perform other processing as needed
} 
else {
    // Redirect to the form page if accessed directly
    header("Location: form_page.php"); // Replace 'form_page.php' with your form's file name
    exit();
}

?>


</body>
</html>
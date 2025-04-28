<?php
    $users = [
        'alex' => [
            'name' => 'Alex Anie',
            'age' => 25,
            'bio' => 'A passionate web developer and writer.'
        ],

        'sarah' => [
            'name' => 'Sarah Okafor',
            'age' => 28,
            'bio' => 'A designer who loves clean UI/UX.'
        ],
    ];

    // Check if 'user' exists in the URL
    if(isset($_GET['user'])){
        $username = $_GET['user']; // get the 'user' parameter value

        // Check if the user exists in our 'database'
        if(array_key_exists($username, $users)){
            $profile = $users[$username];
            echo "<h1> Welcome, " . htmlspecialchars($profile['name']) . "!</h1>";
            echo "<p> Age: " . htmlspecialchars($profile['age']) . "!</p>";
            echo "<p> Bio: " . htmlspecialchars($profile['bio']) . "!</p>";
        }else {
            echo "<h1>User not found</h1>";
        }
    }else {
        echo "<h1>No user selected.</h1>";
    }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Texting PHP</title>
    <link rel="stylesheet" href="./main.css" />
</head>
<body>
   
</body>
</html>
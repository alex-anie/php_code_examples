<?php

    // Example 1
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

    // Example 2
    $products = [
        ['name' => 'Smartphone', 'category' => 'electronics'],
        ['name' => 'Laptop', 'category' => 'electronics'],
        ['name' => 'T-Shirt', 'category' => 'fashion'],
        ['name' => 'Novel - The Alchemist', 'category' => 'books'],
        ['name' => 'Headphones', 'category' => 'electronics'],
        ['name' => 'Jeans', 'category' => 'fashion'],
    ];

    // Check if a category is selected
    if(isset($_GET['category'])){
        $selectedCategory = strtolower(trim($_GET['category']));
        $found = false;

        echo "<h1>Products in '" .htmlspecialchars($selectedCategory). "'Category:</h1>";
        echo "<ul>";
                foreach($products as $product) {
                    if(strtolower($product['category']) === $selectedCategory){
                        echo "<li>" . htmlspecialchars($product['name']) ."</li>";
                        $found = true;
                    }
                }

                if(!$found){
                    echo "<p>No products found in this category.</p>";
                }
            "</ul>";
        }else {
            echo "<h1>All Products:</h1>";
            echo "<ul>";
            foreach($products as $product){
                echo "<li>" . htmlspecialchars($product['name']). "( " . htmlspecialchars($product['category']). " )</li>";
            }
            echo "</ul>";
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
    <div>
        <a href="e_get.php?user=alex">View Alex Profile</a>
    </div>

    <div>
        <a href="e_get.php?user=sarah">View Sarah's Profile</a>
    </div>

    <hr />
</body>
</html>
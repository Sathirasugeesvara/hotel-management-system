<?php
// Include database connection
include("../backend/db.php");

// Test if connection works
if ($conn) {
    echo "✅ Database connected successfully!";
} else {
    echo "❌ Database connection failed: " . mysqli_connect_error();
}
?>
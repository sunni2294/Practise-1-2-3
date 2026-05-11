<?php

$type = $_POST["type"];
$name = $_POST["name"];

// Connect DB
$conn = mysqli_connect("localhost", "root", "", "unidb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Bảo vệ SQL Injection cơ bản
$type = mysqli_real_escape_string($conn, $type);
$name = mysqli_real_escape_string($conn, $name);

// Query
$sql = "SELECT * FROM $type WHERE name LIKE '%$name%'";
$result = mysqli_query($conn, $sql);

// Debug nếu lỗi
if (!$result) {
    echo "SQL Error: " . mysqli_error($conn);
    exit();
}

echo "<h3>Result:</h3>";

echo "<table border='1'>";
echo "<tr>";

// In header
while ($field = mysqli_fetch_field($result)) {
    echo "<th>" . $field->name . "</th>";
}
echo "</tr>";

$found = false;

// In data
while ($row = mysqli_fetch_assoc($result)) {
    $found = true;
    echo "<tr>";
    foreach ($row as $value) {
        echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}

echo "</table>";

if (!$found) {
    echo "No results found";
}

mysqli_close($conn);

?>
<?php
$host = "localhost";
$user = "root";
$pass = "1234";
$dbname = "cinnomon_and_curry_db"; // Change to your database name

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Upload Image
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $name = $_POST['name'];
    $image = file_get_contents($_FILES['image']['tmp_name']); // Read file as binary

    $stmt = $conn->prepare("INSERT INTO images (name, image) VALUES (?, ?)");
    $stmt->bind_param("sb", $name, $image);
    $stmt->send_long_data(1, $image);
    $stmt->execute();
    $stmt->close();
}

// Retrieve Images
$sql = "SELECT id, name, image FROM images";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload and Display Images</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 10px; text-align: center; }
        img { width: 100px; height: 100px; }
    </style>
</head>
<body>
    <h2>Upload Image</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Enter Image Name" required>
        <input type="file" name="image" accept="image/*" required>
        <button type="submit">Upload</button>
    </form>

    <h2>Image Table</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Image</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td><img src='data:image/jpeg;base64," . base64_encode($row['image']) . "' alt='Image'></td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No images found</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>

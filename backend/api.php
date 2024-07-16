
<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

$servername = "localhost";
$username = "root";  // Default username for XAMPP
$password = "";  // Default password for XAMPP
$dbname = "test";  // Name of the database you created

// $data = json_decode(file_get_contents('php://input'), true);

// if (isset($data['message'])) {
//   echo json_encode(['status' => 'success', 'message' => 'Message received: ' . $data['message']]);
// } else {
//   echo json_encode(['status' => 'error', 'message' => 'No message received']);
// }
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(['status' => 'error', 'message' => 'Connection failed: ' . $conn->connect_error]));
}

$data = json_decode(file_get_contents('php://input'), true);
if ($conn->connect_error) {
    die(json_encode(['status' => 'error', 'message' => 'Connection failed: ' . $conn->connect_error]));
}

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['message'])) {
        $message = $data['message'];
    $stmt = $conn->prepare("INSERT INTO pageone (text1) VALUES (?)");
    $stmt->bind_param("s", $message);



    if ($stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Message saved successfully']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Error saving message']);
    }

    $stmt->close();
} else {
    echo json_encode(['status' => 'error', 'message' => 'No message received']);
}

$conn->close();
?>
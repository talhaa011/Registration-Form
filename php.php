 <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $father_name = $_POST["father_name"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $address = $_POST["address"];
    $contact_no = $_POST["contact_no"];
    $project = $_POST["project"];

    // Handle file uploads
    $file_path = "uploads/" . basename($_FILES["file"]["name"]);
    move_uploaded_file($_FILES["file"]["tmp_name"], $file_path);

    $picture_path = "uploads/" . basename($_FILES["picture"]["name"]);
    move_uploaded_file($_FILES["picture"]["tmp_name"], $picture_path);

    // Perform further processing or store data as needed

    // Redirect or display a success message
    header("Location: success.php");
    exit();
}
?>
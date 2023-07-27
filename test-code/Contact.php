<?php
$servername = "localhost:3308";
$username = "root";
$password = " ";
$dbname = "ebook";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])){

$email = $_POST['email'];

$sql = "INSERT INTO index_php (email) VALUES ('$email')";
if ($conn->query($sql) === TRUE && $conn->affected_rows > 0) {    
    echo "Created successfully";
} else {    
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form and Google Map</title>
    
  <!-- Other meta tags and CSS links -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<style>
    div form { 
        border : 2px solid black;
        margin-top: 10px;
        margin-bottom: 10px;
        margin-right: 25px;
        margin-left: 20px;
        background-color: yellow;
}
    
</style>
</head>
<body>
<?php
//Form
$name = $email = $gender = $comment = " ";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = input($_POST["name"]);
  $email = input($_POST["email"]);
  $comment = input($_POST["comment"]);
  $gender = input($_POST["gender"]);
}

function input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div class="form">
<h2>Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  E-mail: <input type="text" name="email">
  <br><br>
  Comment: <textarea name="comment" rows="2" cols="20"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>
<div class="form">
<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>


<!-- Google Map -->
<?php
// Replace "your_location_url" with the actual URL you want to link to
$locationURL = "https://goo.gl/maps/SNnx3xXAJRWUG9zv9";

// Replace "icon_class" with the desired Font Awesome icon class
// You can find the icon classes on the Font Awesome website: https://fontawesome.com/icons
$iconClass = "fas fa-map-marker-alt";

// The text to display next to the icon (optional)
$linkText = "Location";

// Create the link with the icon and text
$linkWithIcon = '<a href="' . $locationURL . '"><i class="' . $iconClass . '"></i> ' . $linkText . '</a>';
?>
  <div>
    <?php echo $linkWithIcon; ?>
  </div>
</div>
</body>
</html>
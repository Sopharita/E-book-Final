<?php
$servername = "localhost:3308";
$username = "root";
$password = " ";
$dbname = "ebook";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$search = "";
if (isset($_GET['search'])) {
    $search = $_GET['search'];
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
    <form method="GET">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search..." value="<?php echo $search; ?>">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">Search</button>
                </span>
        </div>
   </form>
   <tbody>
      <?php
    $sql = "SELECT * FROM index_php";
     if (!empty($search)) {
     $sql .= " WHERE title LIKE '%$search%'";
      }
     $result = $conn->query($sql);
     if(!$result){
     die("Error fetching data");
      }
     ?>
    </tbody>

    <script>
    function myFunction() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>
</body>
</html>
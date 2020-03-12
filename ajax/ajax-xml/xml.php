<?php 
// Connect Database
$conn = mysqli_connect('localhost', 'root', 'vertrigo', 'test') or die ('Can not connect to mysql');

// Get List Member
$query = mysqli_query($conn, 'select * from member');

echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<root>';
if (mysqli_num_rows($query) > 0)
{
    while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
        echo '<items>';
            echo '<username>'.$row['username'].'</username>';
            echo '<email>'.$row['email'].'</email>';
        echo '</items>';
    }
}
echo '</root>';

?>
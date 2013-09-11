<?
$dbhost = 'localhost';  // MySQL Host Server Name
$dbuser = 'zhaol';      // MySQL Username
$dbpswd = 'zhaol123';   // MySQL Password
$dbname = 'zhaol';      // MySQL Database Name
$tabpre = 'cudb_';      // Table Name Prefix


@ $db = new mysqli ($dbhost, $dbuser, $dbpswd, $dbname);
if (mysqli_connect_errno ()) {
    echo 'Error: Could not connect to database.';
    exit;
}

$query  = "select * from history order by id";
$result = $db -> query ($query);

$num_results = $result -> num_rows;

echo '<p>Number of items found: '.$num_results.'</p>';

for ($i = 0; $i < $num_results; $i ++) {
    $row = $result -> fetch_assoc ();
    echo '<p><strong>'.($i + 1).'.</strong> ID: ';
    echo $row['id'];
    echo ' IP: '.$row['ip'].' Time: '.$row['time'];
    echo ' Query: '.$row['query'].'</p>';
}

$result -> free();
$db -> close();
?>

<?
$dbserver = 'localhost';
$dbuser   = 'zhaol';
$dbpasswd = 'zl370202';
$dbname   = 'cmblast';

$db = new mysqli ($dbserver, $dbuser, $dbpasswd, $dbname);
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

<html>
  <head>
    <title>Cucumber Database Alpha 1</title>
  </head>
  
  <body>
    <?

define('CUDB_ROOT', dirname(__FILE__));

require_once CUDB_ROOT.'/include/config.inc.php';

$db = mysql_connect ($dbhost, $dbuser, $dbpswd, $dbname);
//if (mysql_connect_errno ()) {
//    echo 'Error: Could not connect to database.';
//    exit;
//}
echo $dbhost, $dbuser, $dbpswd, $dbname;

$query  = 'select * from '.$tabpre.'markers order by mid';
$result = mysql_query ($db, $query);

$num_results = mysql_num_rows ($result);

echo '<p>Number of markers found: '.$num_results.'</p>';

for ($i = 0; $i < $num_results; $i ++) {
    $row = mysql_fetch_row ($result);
    echo '<p><strong>'.($i + 1).'.</strong> ID: ';
    echo $row['mid'];
    echo ' Marker: '.$row['mname'];
}

mysql_free_result ($result);
mysql_close ($db);
?>
  </body>
</html>
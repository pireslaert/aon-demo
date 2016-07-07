
<?php
// Connecting, selecting database
echo "<br>\n";
echo "<b> AON Demo </b>\n";
echo "<br>\n";

$link = mysql_connect('localhost', 'root', 'root') or die('Could not connect: ' . mysql_error());
echo "<b> Connected to DB successfully </b>\n";
echo "<br>\n";
mysql_select_db('mysql') or die('Could not select database');

// Performing SQL query
$query = 'select * from user';
$result = mysql_query($query) or die('Query failed: ' . mysql_error());

echo "<br>\n";
echo "<b> USER Table From local mysql db.</b>\n";
echo "<br>\n";

// Printing results in HTML
echo "<table>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Free resultset
mysql_free_result($result);

// Closing connection
mysql_close($link);

?>
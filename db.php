
<pre>
<?php 

$host ='localhost';
$username='root';
$password='';
$dbName='idb45';

$db=new mysqli($host,$username,$password,$dbName);

$db->select_db($dbName);

?>
<!-- <table border="1">
    <tr>
        <th>CategoryID</th>
        <th>Heading</th>
        <th>Details</th>
        <th>photo</th>
    </tr> -->
<?php //while ($r=$data->fetch_assoc())
//{
    ?>
    <!-- <tr>
        <td><?//php echo $r['catrgoryID'] ?></td>
        <td><?//php echo $r['heading'] ?></td>
        <td><?//php echo $r['details'] ?></td>
        <td><?//php echo $r['photo'] ?></td>
    </tr> -->
<?php  //} ?>
<!-- </table> -->
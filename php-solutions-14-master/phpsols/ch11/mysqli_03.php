<?php
require_once '../includes/connection.php';
$conn = dbConnect('read');
$sql = 'SELECT filename, caption FROM images';
$result = $conn->query($sql);
if (!$result) {
    $error = $conn->error;
} else {
    $numRows = $result->num_rows;
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Connecting with MySQLi</title>
</head>

<body>
<?php
if (isset($error)) {
    echo "<p>$error</p>";
} else {
    echo "<p>A total of $numRows records were found.</p>";
?>
    <table>
        <tr>
            <th>filename</th>
            <th>caption</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['filename']; ?></td>
                <td><?= $row['caption']; ?></td>
            </tr>
        <?php } ?>
    </table>
<?php } ?>
</body>
</html>
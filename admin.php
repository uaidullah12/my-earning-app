<?php
include 'db_config.php';
$result = $conn->query("SELECT * FROM users ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel - User List</title>
    <style>
        body { font-family: sans-serif; padding: 20px; background: #eee; }
        table { width: 100%; border-collapse: collapse; background: white; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background: #333; color: white; }
        .balance { font-weight: bold; color: green; }
    </style>
</head>
<body>
    <h2>ইউজার লিস্ট ও ব্যালেন্স</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Balance</th>
            <th>Refer Code</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td class="balance"><?php echo $row['balance']; ?> টাকা</td>
            <td><?php echo $row['refer_code']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
    <br>
    <a href="index.php">হোমে ফিরে যান</a>
</body>
</html>

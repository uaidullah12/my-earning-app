<?php
include 'db_config.php';
// এখানে আমরা আপাতত ১ নম্বর ইউজারকে দেখাচ্ছি, পরে লগইন সিস্টেম যোগ করবো
$result = $conn->query("SELECT * FROM users LIMIT 1");
$user = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; text-align: center; }
        .card { background: white; margin: 50px auto; padding: 20px; width: 300px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        .balance { font-size: 24px; color: #28a745; font-weight: bold; }
        .ref-code { background: #eee; padding: 5px; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="card">
        <h2>স্বাগতম, <?php echo $user['name']; ?></h2>
        <p>আপনার বর্তমান ব্যালেন্স:</p>
        <p class="balance"><?php echo $user['balance']; ?> টাকা</p>
        <hr>
        <p>আপনার রেফার কোড:</p>
        <p class="ref-code"><?php echo $user['refer_code']; ?></p>
        <br>
        <a href="index.php">লগ আউট</a>
    </div>
</body>
</html>

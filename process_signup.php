<?php
include 'db_config.php';
$name = $conn->real_escape_string($_POST['full_name']);
$email = $conn->real_escape_string($_POST['email']);
$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
$ref_by = $conn->real_escape_string($_POST['ref_by']);
$my_ref_code = substr(md5(uniqid()), 0, 8);

$sql = "INSERT INTO users (name, email, password, refer_code, referred_by) VALUES ('$name', '$email', '$pass', '$my_ref_code', '$ref_by')";

if ($conn->query($sql) === TRUE) {
    if(!empty($ref_by)) {
        $bonus_sql = "UPDATE users SET balance = balance + 25 WHERE refer_code = '$ref_by'";
        $conn->query($bonus_sql);
    }
    echo "সফলভাবে একাউন্ট তৈরি হয়েছে! আপনার রেফার কোড: " . $my_ref_code;
} else {
    echo "ভুল হয়েছে: " . $conn->error;
}
?>

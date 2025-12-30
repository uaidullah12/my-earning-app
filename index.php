<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>রেজিস্ট্রেশন - Earn Money</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0;}
        .signup-container { background: white; padding: 30px; border-radius: 10px; box-shadow: 0px 0px 10px rgba(0,0,0,0.1); width: 350px; }
        h2 { text-align: center; color: #333; }
        input { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; box-sizing: border-box; }
        .btn { width: 100%; padding: 10px; background: #28a745; border: none; color: white; border-radius: 5px; cursor: pointer; font-size: 16px; }
        .btn:hover { background: #218838; }
    </style>
</head>
<body>
    <div class="signup-container">
        <h2>একাউন্ট তৈরি করুন</h2>
        <form action="process_signup.php" method="POST">
            <input type="text" name="full_name" placeholder="আপনার নাম" required>
            <input type="email" name="email" placeholder="জিমেইল এড্রেস" required>
            <input type="password" name="password" placeholder="পাসওয়ার্ড" required>
            <input type="text" name="ref_by" placeholder="রেফার কোড (থাকলে দিন)">
            <button type="submit" class="btn">রেজিস্ট্রেশন করুন</button>
        </form>
    </div>
</body>
</html>

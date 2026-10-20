<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Library System</title>
<style>
* { box-sizing: border-box; }
body {
    background-color: #183153;
    background-image: linear-gradient(rgba(0,0,0,.35), rgba(0,0,0,.45)), url('/images/bg.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    font-family: Arial, sans-serif;
    margin: 0;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 60px 16px 32px;
}
.welcome {
    font-size: clamp(26px, 4vw, 42px);
    margin: 0 0 80px;
    font-weight: bold;
    text-align: center;
    color: #fff;
    text-shadow: 0 2px 10px #000;
}
.box {
    background: rgba(0, 0, 0, .68);
    padding: 36px;
    width: min(100%, 450px);
    border-radius: 15px;
    box-shadow: 0 0 40px rgba(0,0,0,.45);
    backdrop-filter: blur(8px);
    -webkit-backdrop-filter: blur(8px);
    text-align: center;
    border: 1px solid rgba(255,255,255,.55);
}
.login-text {
    font-size: 22px;
    font-weight: bold;
    color: #fff;
    margin-bottom: 25px;
}
.box a {
    display: block;
    margin: 15px 0;
    padding: 15px;
    background: #fff;
    color: #183153;
    text-decoration: none;
    border-radius: 10px;
    font-size: 18px;
    font-weight: bold;
    transition: .2s;
    border: 1px solid rgba(255,255,255,.8);
}
.box a:hover { background: #0072ff; color: #fff; transform: translateY(-1px); }
@media (max-width: 600px) {
    body { padding-top: 36px; }
    .welcome { margin-bottom: 48px; }
    .box { padding: 24px; }
}
</style>
</head>
<body>
  <div class="welcome">📚 Welcome to Suryadatta College Library</div>
  <div class="box">
    <div class="login-text">Login / Register Here</div>
    <a href="/student/login.php">👨‍🎓 Student</a>
    <a href="/admin/login.php">👨‍💼 Admin</a>
  </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
    <!DOCTYPE html>
<html>
<style>
form {
    border: 3px solid #f1f1f1;
}
input[type=text], input[type=password] {
    width: 100% ;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
button {      
    background-color: #3385ff;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 50%;
}
button:hover {
    opacity: 0.8;
}
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}
img.avatar {
    width: 10%;
    border-radius: 50%;
}
.container {
    padding: 16px;
}
span.psw {
    float: right;
    padding-top: 16px;
}
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>

<h2>Sistem Inventaris RPL</h2>
<form action="<?php echo site_url('Login/lxogin') ?>" method="post">
  <div class="imgcontainer">
    <img src="assets/images/team1.jpg" alt="Avatar" class="avatar">
  </div>
  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
  </div>


</form>

</body>
</html>

</head>
<body>

</body>
</html>
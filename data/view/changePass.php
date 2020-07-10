<?php
session_start();
include "../header.php";
?>
<link rel="stylesheet" href="http://localhost/CODEGYM/caseStudy2/css/style_changepass.css">
<div class="changePass">
    <form action="../control/changePass.php" method="POST">
        <h2>Đổi mật khẩu</h2>
        <label for="">Nhập mật khẩu cũ</label><input type="password" name="oldpass" required>
        <label for="">Nhập mật khẩu mới</label><input type="password" id="newpass" required name="newpass">
        <label for="" >Nhập lại mật khẩu mới</label><input type="password" id="check" onchange="checkPass()" oninput="checkPass()" required>
        <p id="noteOk"></p><p id="notOk"></p>
        <button type="submit" name="submit" id="submit" onclick="notePass()">Đổi mật khẩu</button>
    </form>
</div>
<script>
    function checkPass() {
        newpass = document.getElementById('newpass');
        check = document.getElementById('check');
        noteOk = document.getElementById('noteOk');
        notOk = document.getElementById('notOk');
        if (newpass.value == check.value) {
            noteOk.innerHTML = "OK";
            notOk.innerHTML="";
            document.getElementById('submit').type = 'submit';
        }else {
            notOk.innerHTML = "Mật khẩu không trùng khớp";
            noteOk.innerHTML = "";
            document.getElementById('submit').type = 'button';
        }
    }
    function notePass(){
        check = document.getElementById('submit');
        if (check.type =='button'){
            alert ('Mật khẩu không trùng khớp');
        }
    }
</script>
<?php include "../footer.php";?>
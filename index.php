<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login | Nishant@Tiara</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/bootstrap.min.css">

    <!-- EXTERNAL CSS FILE -->
    <link rel="stylesheet" href="assets/style.css" />
</head>

<body>
    <!-- LOGIN SECTION -->
    <div class="main_div">
        <div class="container-formDiv">
            <div class="box">
                <h3><b>Loing with Database</b></h3>
                <form action="server/loginCheck.php" method="post">
                    <div class="input-box form-group">
                        <input type="text" id="txtUid" name="txtUid" class="form-control shadow-none" required>
                        <label for="txtUid">USER ID</label>
                    </div>
                    <div class="input-box form-group">
                        <input type="password" id="txtPwd" name="txtPwd" class="form-control shadow-none" required>
                        <label for="txtPwd">PASSWORD</label>
                    </div>
					<h6 id="msg">
					<?php
						if(isset($_GET['txt'])){
							
							echo "<script>document.getElementById('msg').style.display.value = 'inline';</script>";
							$txt = $_GET['txt'];
							echo $txt;
						}
					?>
                    <div class="input-box form-group">
                        <button type="submit" id="btnLogin" name="btnLogin" class="btn text-uppercase w-100 mb-3">Log In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
	<nav class="navbar py-0 fixed-bottom justify-content-center footerColor" style="font-size: 12px;">
        <ul class="navbar-nav">
            <li class="nav-item">
                <p class="text-white my-2">Developed by <a href="https://linkedin.com/in/nishantkcr7" style="color:white;">Nishant Kumar</a> | Tiara Consulting Inc.</p>
            </li>
        </ul>
    </nav>
</body>

</html>
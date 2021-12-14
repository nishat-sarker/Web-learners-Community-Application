<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <!-- login form code start From here -->
        <section class="form login">
            <header>WEB LEARNERS</header>
            <div class="login-form-details">
                <form action="#">
                    <div class="error-txt"></div>
                    <div class="field input">
                        <label>Email Address: </label>
                        <input type="email" name="email" placeholder="Enter your email">
                    </div>
                    <div class="field input">
                        <label>Password: </label>
                        <input type="password" name="password" placeholder="Enter Password">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                    </div>
                    
                    <div class="link">Not yet signed Up? <a href="index.php">Signup now</a></div>
                </form>
            </div>
        </section>
        <!-- login form code end here -->
    </div>
    <!-- JS LINK HERE -->
    <script src="./javascript/pass-show-hide.js"></script>
    <script src="./javascript/login.js"></script>
</body>
</html>
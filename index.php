<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <!-- Signup form code start From here -->
        <section class="form signup">
            <header>WEB LEARNERS</header>
            <div class="signup-form-details">
                <div class="signup-img">
                    <!-- <img src="./Images/signup.svg" alt="" width="80%"> -->
                </div>
                <form action="#" enctype="multipart/form-data">
                    <div class="error-txt"></div>
                    <div class="name-details">
                        <div class="field input">
                            <label>First Name: </label>
                            <input type="text" name="fname" placeholder="First Name" required>
                        </div>
                        <div class="field input">
                            <label>Last Name: </label>
                            <input type="text" name="lname" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="field input">
                        <label>Email Address: </label>
                        <input type="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="field input">
                        <label>New Password: </label>
                        <input type="password" name="password" placeholder="Enter new Password" required>
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </div>
                    <div class="field image">
                        <label>Select Profile Image: </label>
                        <input type="file" name="image" required>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                    </div>
                    
                    <div class="link">Already signed Up? <a href="login.php">Login now</a></div>
                </form>
            </div>
        </section>
        <!-- Signup form code end here -->
    </div>

    <!-- JS LINK HERE -->
    <script src="./javascript/pass-show-hide.js"></script>
    <script src="./javascript/signup.js"></script>

</body>
</html>
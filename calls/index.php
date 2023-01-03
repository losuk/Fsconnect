<?php
    session_start();
    if (!isset($_SESSION["username"])) {
        header("Location: index.php");
    }
    $feedHTML = "";
    $errorMessage = "";
    $username = $_SESSION["username"];
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "fsconnect";
    $conn = mysqli_connect($server, $user, $pass, $db);
    $selectquery = "SELECT * FROM users WHERE username='$username'";
    $squery = mysqli_query($conn,$selectquery);
    if (mysqli_num_rows($squery) > 0) {
        while($row = mysqli_fetch_assoc($squery)) {
            $email = $row["email"];
            $password = $row["password"];
        }
    }
    if (isset($_POST["changePassword"])) {
        $currentPassword = $_POST["currentPassword"];
        $newPassword1 = $_POST["newPassword1"];
        $newPassword2 = $_POST["newPassword2"];
        if ($currentPassword === $password) {
            if ($newPassword1 === $newPassword2) {
                if (strlen($newPassword1) >= 8 && strlen($newPassword1) <= 15) {
                    $updatequery = "UPDATE users SET password = '$newPassword1' WHERE username = '$username'";
                    $uquery = mysqli_query($conn,$updatequery);
                    $errorMessage = "Password successfully updated";
                } else {
                    $errorMessage = "Password should be 8-15 chars.";
                }
            } else {
                $errorMessage = "New passwords do not match";
            }
        } else {
            $errorMessage = "Your current password is incorrect.";
        }
    }
    if (isset($_POST["logOut"])) {
        unset($_SESSION["username"]);
        header("Location: index.php");
    }
    if (isset($_POST["delete1"])) {
        $postID = 1;
        $deletequery = "DELETE FROM posts WHERE postID = '$postID'";
        $dquery = mysqli_query($conn,$deletequery);
    }
    if (isset($_POST["delete2"])) {
        $postID = 2;
        $deletequery = "DELETE FROM posts WHERE postID = '$postID'";
        $dquery = mysqli_query($conn,$deletequery);
    }
    if (isset($_POST["delete3"])) {
        $postID = 3;
        $deletequery = "DELETE FROM posts WHERE postID = '$postID'";
        $dquery = mysqli_query($conn,$deletequery);
    }
    if (isset($_POST["delete4"])) {
        $postID = 4;
        $deletequery = "DELETE FROM posts WHERE postID = '$postID'";
        $dquery = mysqli_query($conn,$deletequery);
    }
    if (isset($_POST["delete5"])) {
        $postID = 5;
        $deletequery = "DELETE FROM posts WHERE postID = '$postID'";
        $dquery = mysqli_query($conn,$deletequery);
    }
    if (isset($_POST["delete6"])) {
        $postID = 6;
        $deletequery = "DELETE FROM posts WHERE postID = '$postID'";
        $dquery = mysqli_query($conn,$deletequery);
    }
    if (isset($_POST["delete7"])) {
        $postID = 7;
        $deletequery = "DELETE FROM posts WHERE postID = '$postID'";
        $dquery = mysqli_query($conn,$deletequery);
    }
    if (isset($_POST["delete8"])) {
        $postID = 8;
        $deletequery = "DELETE FROM posts WHERE postID = '$postID'";
        $dquery = mysqli_query($conn,$deletequery);
    }
    if (isset($_POST["delete9"])) {
        $postID = 9;
        $deletequery = "DELETE FROM posts WHERE postID = '$postID'";
        $dquery = mysqli_query($conn,$deletequery);
    }
    if (isset($_POST["delete10"])) {
        $postID = 10;
        $deletequery = "DELETE posts WHERE postID = '$postID'";
        $dquery = mysqli_query($conn,$deletequery);
    }
    if (isset($_POST["delete11"])) {
        $postID = 11;
        $deletequery = "DELETE FROM posts WHERE postID = '$postID'";
        $dquery = mysqli_query($conn,$deletequery);
    }
    if (isset($_POST["delete12"])) {
        $postID = 12;
        $deletequery = "DELETE FROM posts WHERE postID = '$postID'";
        $dquery = mysqli_query($conn,$deletequery);
    }
    if (isset($_POST["delete13"])) {
        $postID = 13;
        $deletequery = "DELETE FROM posts WHERE postID = '$postID'";
        $dquery = mysqli_query($conn,$deletequery);
    }
    if (isset($_POST["delete14"])) {
        $postID = 14;
        $deletequery = "DELETE FROM posts WHERE postID = '$postID'";
        $dquery = mysqli_query($conn,$deletequery);
    }
    if (isset($_POST["delete15"])) {
        $postID = 15;
        $deletequery = "DELETE FROM posts WHERE postID = '$postID'";
        $dquery = mysqli_query($conn,$deletequery);
    }
    if (isset($_POST["delete16"])) {
        $postID = 16;
        $deletequery = "DELETE FROM posts WHERE postID = '$postID'";
        $dquery = mysqli_query($conn,$deletequery);
    }
    if (isset($_POST["delete17"])) {
        $postID = 17;
        $deletequery = "DELETE FROM posts WHERE postID = '$postID'";
        $dquery = mysqli_query($conn,$deletequery);
    }
    if (isset($_POST["delete18"])) {
        $postID = 18;
        $deletequery = "DELETE FROM posts WHERE postID = '$postID'";
        $dquery = mysqli_query($conn,$deletequery);
    }
    if (isset($_POST["delete19"])) {
        $postID = 19;
        $deletequery = "DELETE FROM posts WHERE postID = '$postID'";
        $dquery = mysqli_query($conn,$deletequery);
    }
    if (isset($_POST["delete20"])) {
        $postID = 20;
        $deletequery = "DELETE FROM posts WHERE postID = '$postID'";
        $dquery = mysqli_query($conn,$deletequery);
    }
    if (isset($_POST["delete21"])) {
        $postID = 21;
        $deletequery = "DELETE FROM posts WHERE postID = '$postID'";
        $dquery = mysqli_query($conn,$deletequery);
    }
    if (isset($_POST["delete22"])) {
        $postID = 22;
        $deletequery = "DELETE FROM posts WHERE postID = '$postID'";
        $dquery = mysqli_query($conn,$deletequery);
    }
    if (isset($_POST["delete23"])) {
        $postID = 23;
        $deletequery = "DELETE FROM posts WHERE postID = '$postID'";
        $dquery = mysqli_query($conn,$deletequery);
    }
    if (isset($_POST["delete24"])) {
        $postID = 24;
        $deletequery = "DELETE FROM posts WHERE postID = '$postID'";
        $dquery = mysqli_query($conn,$deletequery);
    }
    if (isset($_POST["delete25"])) {
        $postID = 25;
        $deletequery = "DELETE FROM posts WHERE postID = '$postID'";
        $dquery = mysqli_query($conn,$deletequery);
    }
    if (isset($_POST["delete26"])) {
        $postID = 26;
        $deletequery = "DELETE FROM posts WHERE postID = '$postID'";
        $dquery = mysqli_query($conn,$deletequery);
    }
    if (isset($_POST["delete27"])) {
        $postID = 27;
        $deletequery = "DELETE FROM posts WHERE postID = '$postID'";
        $dquery = mysqli_query($conn,$deletequery);
    }
    if (isset($_POST["delete28"])) {
        $postID = 28;
        $deletequery = "DELETE FROM posts WHERE postID = '$postID'";
        $dquery = mysqli_query($conn,$deletequery);
    }
    if (isset($_POST["delete29"])) {
        $postID = 29;
        $deletequery = "DELETE FROM posts WHERE postID = '$postID'";
        $dquery = mysqli_query($conn,$deletequery);
    }
    if (isset($_POST["delete30"])) {
        $postID = 30;
        $deletequery = "DELETE FROM posts WHERE postID = '$postID'";
        $dquery = mysqli_query($conn,$deletequery);
    }
    $selectquery = "SELECT * FROM posts WHERE username = '$username' ORDER BY postID DESC";
    $squery = mysqli_query($conn,$selectquery);
    if ($squery->num_rows > 0) {
        $feedHTML = "<table class='feedTable'><tr class='feedTable'><th class='feedTable header-content'>My Posts</th></tr>";
        while ($row = $squery->fetch_assoc()) {
            if (!$row["photo"] && !$row["video"]) {
                $postContent = $row["text"] . "<br><br>Likes: " . $row["likes"];
            } elseif (!$row["video"]) {
                $postContent = "<img class='feedImage' src='posts/" . $row["photo"] . "'><br><br>Likes: " . $row["likes"];
            } else {
                $postContent = "<video class='feedVideo' controls><source src='posts/" . $row["video"] . "'></video><br><br>Likes: " . $row["likes"];
            }
            $nameID = "delete" . $row["postID"];
            $feedHTML = $feedHTML . "<tr class='feedTable'><td class='feedTable content'>" . $postContent . "<br><form id='deletePostForm' action='' method='POST'><input type='submit' value='Delete Post' name='" . $nameID . "' id='" . $nameID . "' class='deleteButton'></td></tr>";
            while ($row = $squery->fetch_assoc()) {
                if (!$row["photo"] && !$row["video"]) {
                    $postContent = $row["text"] . "<br><br>Likes: " . $row["likes"];
                } elseif (!$row["video"]) {
                    $postContent = "<img class='feedImage' src='posts/" . $row["photo"] . "'><br><br>Likes: " . $row["likes"];
                } else {
                    $postContent = "<video class='feedVideo' controls><source src='posts/" . $row["video"] . "'></video><br><br>Likes: " . $row["likes"];
                }
                $nameID = "delete" . $row["postID"];
                $feedHTML = $feedHTML . "<tr class='feedTable'><td class='feedTable content'>" . $postContent . "<br><input type='submit' value='Delete Post' name='" . $nameID . "' id='" . $nameID . "' class='deleteButton'></td></tr>";
            }
        }
        $feedHTML = $feedHTML . "</form></table>";
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="logos/favicon.ico" type="image/png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>
            Calls | FSConnect
        </title>
        <style>
            a.nav-link {
                font-size: 25px;
                font-family: 'Roboto', sans-serif;
                margin: 10px;
            }
            .jumbotron {
                width: 30%;
                float: right;
                margin-top: 4%;
                margin-right: 10%;
            }
            #myInput {
                font-size: 0;
                width: 0;
                height: 0;
                border: 0px solid white;
            }
            ul.contactList, div.header {
                margin: 10px;
            }
            li.contactList {
                font-size: 20px;
            }
            div.header {
                font-size: 25px;
                width: 44.8%;
                padding: 1%;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="home.php">
                <img src="../logos/logo-white.png" height="40" alt="FSConnect Logo" id="logo">
            </a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <li class="nav-item active">
                    <a class="nav-link" href="../home.php"><img src="../logos/feed.png" height="28" class="pagelogos"> &nbsp;<span class="pagelinks">Feed</span></a>
                </li>
            </div>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <li class="nav-item active">
                    <a class="nav-link" href="../chat"><img src="../logos/messages.png" height="28" class="pagelogos"> &nbsp;<span class="pagelinks">Messages</span></a>
                </li>
            </div>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <li class="nav-item active">
                    <a class="nav-link" href="../calls"><img src="../logos/calls.png" height="28" class="pagelogos"> &nbsp;<span class="pagelinks">Calls</span></a>
                </li>
            </div>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <li class="nav-item active">
                    <a class="nav-link" href="../friends.php"><img src="../logos/friends.png" height="28" class="pagelogos"> &nbsp;<span class="pagelinks">Friends</span></a>
                </li>
            </div>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <li class="nav-item active">
                    <a class="nav-link" href="../account.php"><img src="../logos/account.png" height="28" class="pagelogos"> &nbsp;<span class="pagelinks">Account</span></a>
                </li>
            </div>
            </ul>
        </nav>
        <div class="header bg-light">
            Join a video call with any of your friends!
            <br>
            Just click on their name and tell your friend to do the same.
        </div>
        <?php echo $contactList ?>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>

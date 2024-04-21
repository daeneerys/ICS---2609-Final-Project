<?php
include("header.php");
include("connection.php");

$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$sex = $_SESSION['sex'];
$email = $_SESSION['email'];
$studentid = $_SESSION['studentid'];

function get_profile_image_url($user_id)
{
    $mysqli = require __DIR__ . "/connection.php"; // Assuming connection.php establishes a PDO connection

    try {
        $sql = "SELECT profilefile FROM profile_image WHERE user_id = :user_id";
        $stmt = $mysqli->prepare($sql);
        $stmt->bindParam(":user_id", $user_id);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC); // Fetch associative array

        if ($result) {
            // Assuming profile images are stored in a folder named "profileimage"
            return "profileimage/" . $result['profilefile'];
        } else {
            return null; // No profile image found
        }
    } catch (PDOException $e) {
        echo "Error fetching profile image: " . $e->getMessage();
        return null;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CICS ORGANIZATION</title>
    <link rel="shortcut icon" type="image/x-icon" href="./assets/bb.ico">
    <link rel="stylesheet" href="css/profile.css" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="card">
            <?php if ($sex == 'Male') { ?>
                <img src="https://lh3.googleusercontent.com/oUUiPB9sq3ACq4bUaRmo8pgvC4FUpRRrQKcGIBSOsafawZfRpF1vruFeYt6uCfL6wGDQyvOi6Ez9Bpf1Fb7APKjIyVsft7FLGR6QqdRFTiceNQBm1In9aZyrXp33cZi9pUNqjHASdA=s170-no" alt="Person" class="card_image">
            <?php } else if ($sex == 'Female') { ?>
                <img src="https://lh3.googleusercontent.com/pZwZJ5HIL5iKbA91UGMUIPR0VJWa3K0vOGzDZmY6wU3EJBUdfsby3VEyxU162XxTyOyP3D154tjkr-4Jgcx8lygYUR8eB-jVmld4dsHi1c-mE_A8jKccseAG7bdEwVrcuuk6ciNtSw=s170-no" alt="Person" class="card__image">
            <?php } else { ?>
                <img src="https://lh3.googleusercontent.com/ytP9VP86DItizVX2YNA-xTYzV09IS7rh4WexVp7eilIcfHmm74B7odbcwD5DTXmL0PF42i2wnRKSFPBHlmSjCblWHDCD2oD1oaM1CGFcSd48VBKJfsCi4bS170PKxGwji8CPmehwPw=w200-h247-no" alt="Person" class="card__image">
            <?php }
            ?>

            <p class="card__name"><?php echo $firstname . " " . $lastname ?></p>

            <div class="det_container">

                <div class="studentid_cont">
                    <?php echo $studentid ?>
                </div>

                <div class="email_cont">
                    <?php echo $email ?>
                </div>

            </div>
            <ul class="social-icons">
                <li><a href="#"><i class="fa fa-git"></i></a></li>
                <li><a href="#"><i class="fa fa-google"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-book"></i></a></li>
            </ul>
            <button class="btn draw-border">Organizations</button>
            <button class="btn draw-border">Edit Profile Picture</button>
        </div>
        <div class="profile_child_container">
            <ul class="responsive-table">
                <li class="table-header">
                    <div class="col col-2">Organization Name</div>
                    <div class="col col-3">Role</div>
                    <div class="col col-4">Application Status</div>
                </li>
                <li class="table-row">
                    <div class="col col-2" data-label="Customer Name">1</div>
                    <div class="col col-3" data-label="Amount">Staff</div>
                    <div class="col col-4" data-label="Payment Status">Pending</div>
                </li>
                <li class="table-row">
                    <div class="col col-2" data-label="Customer Name">2</div>
                    <div class="col col-3" data-label="Amount">Staff</div>
                    <div class="col col-4" data-label="Payment Status">Pending</div>
                </li>
                <li class="table-row">
                    <div class="col col-2" data-label="Customer Name">3</div>
                    <div class="col col-3" data-label="Amount">Staff</div>
                    <div class="col col-4" data-label="Payment Status">Pending</div>
                </li>
                <li class="table-row">
                    <div class="col col-2" data-label="Customer Name">4</div>
                    <div class="col col-3" data-label="Amount">Staff</div>
                    <div class="col col-4" data-label="Payment Status">Pending</div>
                </li>
            </ul>
        </div>
    </div>


    <?php include("footer.php") ?>
</body>

</html>
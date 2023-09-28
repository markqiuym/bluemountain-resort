<?php
session_start();

// if (isset($_SESSION['username'])) {
//     $user_id = $_SESSION['username'];
//     echo "User ID: $user_id";
//     echo "<script>alert('User ID: $user_id')</script>";
// } else {
//     echo "User ID not set in session.";
// }
?>
<div class="impx-top-header style2" style="height: 2rem;">
    <div class="uk-container uk-container-expand">

        <div class="uk-grid">
            <!-- header phone -->
            <div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
                <div class="impx-top-phone">
                    <!-- <p><i class="fa fa-phone"></i> Phone : +62 123456789</p> -->
                    <?php
                    if (isset($_SESSION["username"])) {
                        ?>
                        <button type="button" class="uk-button uk-button-danger uk-button-small uk-border-rounded"
                            onclick="location.href = 'book.php'">&nbsp;&nbsp;&nbsp;Book&nbsp;&nbsp;&nbsp;</button>
                        <?php
                    } else {
                        ?>
                        <button type="button" class="uk-button uk-button-danger uk-button-small uk-border-rounded"
                            uk-toggle="target: #modal-example">&nbsp;&nbsp;&nbsp;Book&nbsp;&nbsp;&nbsp;</button>
                        <?php
                    }
                    ?>
                </div>
            </div><!-- header phone end-->
            <!-- header social media -->
            <div class="uk-width-1-2@xl uk-width-1-2@l uk-width-1-2@m uk-width-1-1@s">
                <div class="impx-top-social">
                    <ul>
                        <?php
                        if (isset($_SESSION["username"])) {
                            ?>
                            <!-- <button type="button" class="uk-button uk-button-danger uk-button-small uk-border-rounded"
                                onclick="location.href = 'book.php'">&nbsp;&nbsp;&nbsp;Book&nbsp;&nbsp;&nbsp;</button> -->
                            <li class="uk-parent uk-active">

                                <a href="logout.php" class="uk-navbar-nav-subtitle">

                                    <div style="font-size: 1.5rem;color: #05f52d">
                                        <span uk-icon="user"></span>
                                        Welcome
                                        <?php echo $_SESSION["username"] ?>
                                    </div>

                                </a>
                            </li>

                            <?php
                        } else {
                            ?>
                            <!-- <button type="button" class="uk-button uk-button-danger uk-button-small uk-border-rounded"
                                uk-toggle="target: #modal-example">&nbsp;&nbsp;&nbsp;Book&nbsp;&nbsp;&nbsp;</button> -->
                            <li>

                                <button type="button" class="uk-button uk-button-primary uk-button-small uk-border-rounded"
                                    onclick="location.href='signup.php'">Register</button>
                                <button class="uk-button uk-button-primary uk-button-small uk-border-rounded" type="button"
                                    onclick="location.href='login.php'">&nbsp;&nbsp;&nbsp;Login&nbsp;&nbsp;&nbsp;</button>
                            </li>

                            <?php
                        }
                        ?>

                    </ul>

                </div>
            </div><!-- header social media end -->
        </div>
    </div>
</div>
<!-- This is the modal -->
<div id="modal-example" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Information</h2>
        <p><strong>You have to login or Register before booking!</strong></p>
        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button"><strong>Cancel</strong></button>
            <button class="uk-button uk-button-primary" type="button" onclick="location.href='login.php'">
                <strong>login</strong>
            </button>
        </p>
    </div>
</div>
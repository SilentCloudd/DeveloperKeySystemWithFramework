<?php
include "../web/config.php";
include "../web/header.php";

if (isset($_POST['pass'])) {
    $pass = ($_POST['pass']);
    $password = $developerKey; //Change password in config.
    if ($pass != $password) {
        echo "wrong password";
    } else {
        $code = "somepass";
        setcookie("maintenance", $code, time() + (3600 * 24), "/");
        header("Location: /");
    }   
}
?>
<br>
<br>
<div class="row align-items-start">
    <div class="col-sm-3">

    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <p class="fs-2 mb-0"><b>Site Offline</b></p>
                <p class="fs-6 mb-0">We're currently planning to release the site to everyone soon, please wait.</p>
                <form action="" method="POST">
                    <div class="input-group" style="margin-top: 12px; width: 60%;">
                        <input name="pass" type="password" id="pass" class="form-control" placeholder="Developer Key"
                            aria-label="By SilentCloud#0001" aria-describedby="basic-addon2">
                        <button type="submit" class="btn btn-primary">ENTER</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-sm-3">

    </div>
</div>
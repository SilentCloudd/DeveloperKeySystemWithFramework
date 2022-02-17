<?php
/**
 * MIT License
 *
 * Copyright (c) 2022 SilentCloud
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

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

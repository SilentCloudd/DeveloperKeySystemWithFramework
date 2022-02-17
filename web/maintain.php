<?php
if (isset($_COOKIE['maintenance'])) {
    if ($_COOKIE['maintenance'] != "somepass") {
        header("Location: /development");
    }
} 
else {
    header("Location: /development");
}
?>
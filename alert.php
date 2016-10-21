<?php
/**
 * Shows a message in a javascript alert box
 *
 * @param $msg
 */
function alert($msg){
    echo "<script>alert(".json_encode($msg).");</script>";
}
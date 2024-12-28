<?php
session_start();
if (isset($_GET['clear_session'])){
    session_destroy();
    session_start();
}
?>
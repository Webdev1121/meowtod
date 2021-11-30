<?php

session_start();
if(!isset($_SESSION["user"])) header("Location: https://salamdaribinjaigames.gq/login.php");
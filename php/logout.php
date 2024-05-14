<?php
session_start();

session_destroy();
header("Location: /php/phplearning7.php");
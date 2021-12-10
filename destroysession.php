<?php
session_start();
session_destroy();

header('location: Firenze_Login.php');

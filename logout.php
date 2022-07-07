<?php

unseet($_SESION["email"]);
session_destoy();
echo "<script>alert('Successfully logged out')</script>";
echo "<script>window.location.replace('index.php')</script>";



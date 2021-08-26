<?php 
session_start();

session_unset();
session_destroy();
echo "<center><h1>your ticket booked!!</h1></center>";

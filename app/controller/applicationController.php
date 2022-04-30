<?php 
session_start();

// fetch the tables from the db
Application::fetchApplication($_SESSION['userid']);
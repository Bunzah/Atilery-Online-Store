<?php
require_once 'config2.php';

if (isset($_SESSION['user_token'])) {
  header("Location: dashboard2.php");
} else {
  echo "<center><a href='" . $client->createAuthUrl() . "'>Google Login</a></center>";
}

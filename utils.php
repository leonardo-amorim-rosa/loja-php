<?php
  function getPath() {
    $path_part = pathinfo($_SERVER["PHP_SELF"]);
  	return $path_part["dirname"];
  }

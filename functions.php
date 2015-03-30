<?php

function redirect_to( $location = NULL ) {
      // Function to redirect to other pages
    if ($location != NULL) {
      header("Location: {$location}");
      exit;
    }
}


redirect_to("http://www.google.com.pk");
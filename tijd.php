<?php

echo "Je tijd is? : ";
  $tijd = readline();
  $zoek = "s";

    $pos = strpos($tijd, $zoek);
    $tijd = (int) $tijd;

if ($pos) {
  echo "$tijd seconde";
}
else {
  echo "Dit is geen seconde";
}

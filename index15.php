<?php
  // この下にfor文を書いてください
  for ($i = 1; $i <= 1000; $i++) {
    if ($i % 3 == 0) {
      continue;
    }
    echo $i;
    echo '<br>';
  }
?>
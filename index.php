<?php
  $url = "http://169.254.169.254/latest/meta-data/instance-id";
  $instance_id = file_get_contents($url);
  echo "Instance ID: <b>" .$instance_id ."</b><br/>";
  $url = "http://169.254.169.254/latest/meta-data/placement/availability-zone";
  $zone = file_get_contents($url);
  echo "1 Zone: <b>" .$zone ."</b><br/>";

  phpinfo();
?>

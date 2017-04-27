<?php

  $people = array(
    "Abraham Lincoln", "Martin Luther King", "Jimi Hendrix",
    "John Wayne", "John Carpenter", "Elizabeth Shue", "Benny Hill",
    "Lou Costello", "Bud Abbott", "Albert Einstein", "Rich Hall",
    "Anthony Soprano", "Michelle Rodriguez", "Carmen Miranda",
    "Sandra Bullock", "Moe Howard", "Ulysses S. Grant", "Stephen Fry",
    "Kurt Vonnegut", "Yosemite Sam", "Ed Norton", "George Armstrong Custer",
    "Alice Kramden", "Evangeline Lilly", "Harlan Ellison"
  );

  $query = $_GET['query'];
  $temp = array();

  while (list($k,$v) = each ($people)){
    if (stristr ($v, $query)){
      array_push($temp, $v);
    }
  }

  $data = array("query" => $query, "result" => $temp);
  echo (json_encode($data));
  
?>

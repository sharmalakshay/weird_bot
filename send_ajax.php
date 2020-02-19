<?php
include("lakkyme.php");
include("db_connection.php");

//print_lak($_POST);

if(isset($_POST['input_field']) && $_POST['input_field']!=''){
  $input = mysqli_real_escape_string($link, $_POST['input_field']);
  $query = "SELECT * FROM main_table WHERE question = '$input' ORDER BY score DESC ";
  if($result = mysqli_query($link, $query)){
    if(mysqli_num_rows($result) > 0){
      $output = mysqli_fetch_assoc($result)['answer'];
    }else{
      $output = $input;
    }
  }else{
    die("QUERY FAILED: $query");
  }
}

if(isset($_POST['output_field'])){
  if($_POST['output_field'] != ''){
    $prev_output = mysqli_real_escape_string($link, $_POST['output_field']);
  }
  else{
    $prev_output = $input;
  }
  $query = "SELECT * FROM main_table WHERE question = '$prev_output' ";
  if($result = mysqli_query($link, $query)){
    if(mysqli_num_rows($result) > 0){
      $answer_found = false;
      while($row = mysqli_fetch_assoc($result)){
        $answer = $row['answer'];
        if($answer == $input){
          $query = "UPDATE main_table SET score = score+1 WHERE question = '$prev_output' AND answer = '$input' ";
          mysqli_query($link, $query) or die("QUERY FAILED: $query");
          $answer_found = true;
          break;
        }
      }
      if(!$answer_found){
        $query = "INSERT INTO main_table (question, answer) VALUES ('$prev_output','$input')";
        mysqli_query($link, $query) or die("QUERY FAILED: $query");
      }
    }else{
      $query = "INSERT INTO main_table (question, answer) VALUES ('$prev_output','$input')";
      mysqli_query($link, $query) or die("QUERY FAILED: $query");
    }
  }
  else{
    die("QUERY FAILED: $query");
  }
}

echo stripcslashes($output);

?>

<title>
    VR-Vishal Raut
    </title>
<?php
function redirect_to($new_location){
 header("Location: ".$new_location);
 exit;
 }
function is_equal($value1, $value2){
    $output = "{$value1}=={$value2}:";
    if ($value1 == $value2){
        $output.="true <br />";
    }else{
        $output.="false <br />";
    }
    return $output;
}
function is_exact($value1, $value2){
    $output = "{$value1}==={$value2}:";
    if ($value1 === $value2){
        $output.="true <br />";
    }else{
        $output.="false <br />";
    }
    return $output;
}
function form_errors($errors=array()){
    $output = "";
  if (!empty($errors)){
    $output = "<div class=\"error\">";
    $output .="please fix the following errors:";
    $output .= "<ul>";
    foreach($errors as $key => $error){
        $output .= "<li>{$error}</li>";
    }
    $output .= "</ul>";
    $output .= "</div>";
  }
  return $output;
}
function has_presece($value){
   return isset($value)&& $value !=="";
}
  
function has_max_length($value, $max){    
  return strlen($value) <= $max;
}
function has_inclusion_in($value, $set){
 return in_array($value, $set);
}
function validate_max_length($fields_with_max_lengths){
       global $errors;
       foreach($feilds_with_max_lengths as $field =>$max){
           $value = trim($_POST[$feild]);
       if (!has_max_length($value, $max)){
          $errors[$field]= ucfirst($field)." is too long ";
       } 
       }      
}
?>
























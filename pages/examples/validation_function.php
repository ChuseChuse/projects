
	<?php

     $errors= array();

     function fieldname_as_text($fieldname){
     	$fieldname= str_replace("_", " ", $fieldname);
     	$fieldname=ucfirst($fieldname);
     	return $fieldname;
     }
   //presence
	function has_presence ($value){
	return isset($value) && $value !== ""; 

	}
	function validate_has_presence($required_field){
		global $errors;
		foreach ($required_field as $field ) {
			$value=trim($_POST[$field]);
			if (!has_presence($value)) {
				$errors[$field] = fieldname_as_text($field) . " can't be blank";
	}
    }
}

function form_errors($errors=array()){
    $output="";
    if (!empty($errors)) {
      $output.= "<div class=\"error\">";
      $output.="Please fix the following errors:";
      $output.="<ul>";
      foreach ($errors as $key => $error) {
        $output.="<li>";
        $output.=  htmlentities($error);
        $output.= "</li>";
      }
      $output.="</ul>";
      $output.="</div>";

    }
    return $output;
  }
	

	
?>

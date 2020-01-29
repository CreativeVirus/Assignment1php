<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Enter Text</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>
<?php
 $firstname = "";
        if(!empty($_POST['firstname'])){
        $firstname = $_POST['firstname'];
            If(isDuplicate($firstname) == 1){
                echo "true duplicate character found";
            }else{
                echo "false duplicate character not found";
         }
        }
        function isDuplicate($firstname){
            $firstname =strtolower(trim($firstname));
            $firstname = str_replace(" "," ", $firstname);
            $firstname_char_array = str_split($firstname);
            sort($firstname_char_array, SORT_ASC);
            foreach ($firstname_char_array as $i => $value){
                if($i+1 < sizeof($firstname_char_array) && $value == $firstname_char_array[$i+1]){
                    return true;
                }
                else{
                    continue;
                }
            }

        }
?>
<form method="post">

	<p><label>Input String: <input type="text" name="firstname"></label></p>
	<p align="center"><input type="submit" name="submit" value="Submit String"></p>

</form>
</body>
</html>
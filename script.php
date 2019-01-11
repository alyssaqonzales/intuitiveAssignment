<?php  
 $message= '';  
 $error= '';  
 if(isset($_POST["submit"]))  
 {  
           if(file_exists('assignment.json'))  
           {  
                $current_data = file_get_contents('assignment.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                     'name'          =>     $_POST["name"],  
                     'city'          =>     $_POST["city"],  
                     'specialty'     =>     $_POST["specialty"]  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('assignment.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      }  
 }  
 ?>
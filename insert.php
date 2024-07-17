<?php
    include 'dbcon.php';

    if(isset($_POST['add_students'])){
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
        $age = $_POST['age'];

        //echo "It is pressed";

        
        if(trim($f_name) === ""){
            header('location:index.php?message=You need to fill the first name!');
            exit; // Exit after redirection
        }
        else{
            $query = "insert into `students` (`first_name`,`last_name`,`age`) values('$f_name','$l_name','$age')";

            $result = mysqli_query($connection,$query);

           

            if(!$result){
                die("Query Failed".mysqli_error($connection));
            }
            else{
                
                header('location:index.php?insert_msg=Your data has been added successfully!');
                exit;
            }
        }

       // echo "HAI";
    }
    
?>
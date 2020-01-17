<?php
 // include '../controller/controller.php';
  class model{
 	public  $conn;
 	
  	
  	public function insert($fname, $lname,$mobile,$dept_name,$cname,$pass,$email,$user_name,$semno,$year)
  	{
       $host= "localhost";
     $username   = "root";
     $password   = "";
     $dbname= "student_project";
  		///echo $uname;///
  		echo $password."Model";
	$conn =mysqli_connect($host, $username, $password,$dbname);

    echo  $sql = "INSERT INTO reg (fname, lname,mobile,dept_name,cname,pass,email,user_name,semno,year)
              VALUES ('$fname','$lname','$mobile','$dept_name','$cname','$pass','$email','$user_name','$semno','$year')";

        if (mysqli_query($conn,$sql)) {
             echo "New record created successfully";
        } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
         }

         mysqli_close($conn);



}

    public function login($user_name,$pass)
    { 
       $host= "localhost";
     $username   = "root";
     $password   = "";
     $dbname= "student_project";
      ///echo $uname;///
      echo $password."Model";
      $conn =mysqli_connect($host, $username, $password,$dbname);
      $sql="select * from reg where user_name='$user_name' and pass='$pass'";
      $res=mysqli_query($conn,$sql);
      foreach($res as $row){
        $name=$row['fname'];
      }

      if($res){
        session_start();
        $_SESSION['user_name']=$name;
        if(isset($_SESSION['user_name'])){
          return TRUE;
          }
        }
   }
 }
?>




<!--
       else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }

      mysqli_close($conn);


      if($res && $stm->rowCourt()>0){
        
        }
      }
      else{
        echo $sql;
        }
-->
$select = "Select * From student";
$query = mysqli_query($conn,$select);
$data = mysqli_fetch_assoc($query);

$oldpsw = $data['st_password'];

if(isset($_POST['save']))
{
	$current = $_POST['current'];
	$new = $_POST['new'];
	$confirm = $_POST['confirm'];
	
	   if($current == $oldpsw)
	   {
		  if($new == $confirm) 
		  {
			 $update = "update student set st_password = '$new' WHERE st_id =1";
             $query = mysqli_query($conn,$update);			 
		  }	
           if($query)
		   {

            echo "Your PSW changed successfully";
           }
           else{

            echo "your both password do not match";
		   }			   
		   
	   } else
       {
        echo "you enterd wrong Password";

	   }		   
	
	
}
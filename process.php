<?php

if(isset($_POST['btn-send'])){
    $Username= $_POST['UName'];
    $Email= $_POST['Email'];
    $Subject= $_POST['Subject'];
    $Msg=$_POST['msg'];
    if(empty( $Username) || empty( $Email) || empty( $Subject) || empty( $Msg))
    {
        header('location:index.php?error');
    }
    else{

        $to ="vigneshselvam5678@mail.com";
        if(mail($to,$Subject,$Msg,$Email))
        {
            header("location:index.php?success");
        }
    }
    
}
else{
    header("location:index.php");
}
   
?>
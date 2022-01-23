<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='contact.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <script src='main.js'></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="card">
                    <div class="card-title">
                        <h2 class="text-center py-2"> contact us</h2>
                        <hr>
                        <?php
                           $Msg="";
                        if(isset($_GET['error']))
                        {
                            $Msg="please fill the details";
                            echo '<div class="alert alert-danger">'.$Msg.'</div>';
                        }
                        if(isset($_GET['success']))
                        {
                            $Msg="your message has been sent";
                            echo '<div class="alert alert-success">'.$Msg.'</div>';
                        }
                        ?>
                    </div>
                    <div class="card-body">
                        <form action="process.php" method="post">
                            <input type="text" name="UName" placeholder="user name" class="form-contrl mb-2">
                            <input type="email" name="Email" placeholder="email" class="form-contrl mb-2">
                            <input type="text" name="Subject" placeholder="message" class="form-contrl mb-2">
                            <textarea name="msg"  class="form-control" placeholder="write a message"></textarea>
                            <button class="btn btn-success mt-2" name="btn-send">send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
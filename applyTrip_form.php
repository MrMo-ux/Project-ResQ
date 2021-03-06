<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>
         .login-form {
		width: 340px;
    	margin: 50px auto;
	}
           .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
        }
        .login-form h2 {
            margin: 0 0 15px;
        }
        .form-control, .btn {
            min-height: 38px;
            border-radius: 2px;
        }
        .btn {        
            font-size: 15px;
            font-weight: bold;
    } 
        </style>
    </head>
    <body>
    <div class="login-form">
         <form method="post" action="process_applyTrip.php">
            <h2 class="text-center">Apply for a trip</h2>       
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Full name" name="Full_name" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Trip ID" name="id" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Skills that you have" name="skills">
            </div>
            <div class="form-group">
                <button type="submit" name="save" class="btn btn-primary btn-block">Apply</button>
            </div>        
         </form>
        </div>
        
        <script src="" async defer></script>
    </body>
</html>
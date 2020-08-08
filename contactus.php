<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
	<div class="modal fade col-lg-6" id="contactus" role="dialog">
      	<div class="modal-dialog ">
          	<div class="modal-content col-lg-6">
              	<div class="modal-header">
                  	<button type="button" class="close" data-dismiss="modal">&times;</button>
                  	<h4 class="modal-title">CONTACT US</h4>
              	</div>
              	<div class="modal-body">
                  	<form method="post" action="logi.php">
	                    <div class="form-group">
	                        <input type="text" name="Name" class="form-control" placeholder="Name">
	                    </div>
                      	<div class="form-group ">
                          	<input type="email" name="email" class="form-control" placeholder="Email">
                      	</div>

	                    <div class="form-group">
	                        <input type="text" name="Address" class="form-control" placeholder="Address">
	                    </div>
	                    <div class="form-group">
	                        <textarea type="text" name="Subject" class="form-control" placeholder="Subject"></textarea>
	                    </div>
	                    <center> <button class="btn btn-primary" type="submit" value="submit"  name="button">Submit</button></center>
                  	</form>
              	</div>
          	</div> 
      	</div>
  	</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PDF Generate</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>PDF Generate</h1>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Register</h3>
      <form method="post" action="generate_pdf.php">
      	<div class="form-group">
      		<label>Fullname<span class="text text-danger">*</span> </label>
      		<input type="text" name="fullname" class="form-control fullname" required>
      	</div>
      	<div class="form-group">
      		<label>Email <span class="text text-danger">*</span> </label>
      		<input type="email" name="email" class="form-control email" required>
      	</div>
      	<div class="form-group">
      		<label>Mobile No. <span class="text text-danger">*</span> </label>
      		<input type="text" name="mobile" class="form-control mobile" required>
      	</div>
      	<div class="form-group">
      		<button class="btn btn-success" name="submit" value="submit">Submit & Generate PDF</button>
      	</div>
      </form>
    </div>
    
    <div class="col-md-8">
    	<h1>Format </h1>
    	<style>
		table {border: 1px solid #000000;border-collapse: collapse; margin: 0 auto;  padding: 0px;table-layout: fixed;min-width: 100%;}table th {text-align: center;padding: 8px;border: 1px solid #000000;background:#1b90bb;color:#FFFFFF;font-weight:bold;text-align:center}table td{padding: 8px;border: 1px solid #000000;}table tr{background-color: #dddddd;color:#000000;text-align:center;}
		</style>

		<div>
			<img src="logo.jpg" alt="Trulli" width="100%" height="27%">
		</div><br>
		<table>
			<tr>
				<th>Fullname</th>
				<td id="fullname"><i>Enter your details</i></td>
			</tr>
			<tr>
				<th>Email</th>
				<td id="email"><i>Enter your details</i></td>
			</tr>
			<tr>
				<th>Mobile No.</th>
				<td id="mobile"><i>Enter your details</i></td>
			</tr>
			
		</table>
			<br><br>
			<br><br>
			<br><br>
    </div>

  </div>
</div>

</body>
</html>
<script>
	$(document).ready(function(){
		$(".fullname").keyup(function(){
			$("#fullname").text($(this).val());
		});
		$(".email").keyup(function(){
			$("#email").text($(this).val());
		});
		$(".mobile").keyup(function(){
			$("#mobile").text($(this).val());
		});
	});
</script>

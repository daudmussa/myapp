<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sauti Ya Unabii</title>
	<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
	

<section style="padding-top:60px;">
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				
				<div class="card">
					<div class="card-header">
						 <h2>Maelezo ya Kujaza</h2>
					</div>
					<div class="card-body">
						@if(Session::has('message_sent'))
						<div class="alert alert-success" role="alert">{{Session::get('message_sent')}}
						</div>

						@endif
						<form action="{{route('emails.send')}}"  enctype="multipart/form-data">
							<div class="form-group m-3 row">
							<input class="col-md-12 p-2" placeholder="jina la kwanza" type="text" name="jinakwanza">
						</div>
						<div class="row form-group m-3">
							
							<input placeholder="Jina la ukoo" class="col-md-12 p-2" type="text" name="jinaukoo">
						</div>
						
						<div class="row form-group m-3">
							
							<input  placeholder="Email"  class="col-md-12 p-2" type="text" name="email">
						</div>
						<div class="row form-group m-3">
							
							<input placeholder="Namba ya simu" class="col-md-12 p-2" type="text" name="namba">
						</div>
						<div class="row form-group m-3">
							
							<input placeholder="Mtaa unaoishi" class="col-md-12 p-2" type="text" name="mtaa">
						</div>
						<div class="row form-group m-3">
							
							<input placeholder="Mkoa unaoishi" class="col-md-12 p-2" type="text" name="mkoa">
						</div>
						<div class="row form-group m-3">
							
							<input placeholder="nchi unayoishi" class="col-md-12 p-2" type="text" name="nchi">
						</div>
						<div class="row form-group m-3">
							
							<input placeholder="sanduku la posta" class="col-md-12 p-2" type="text" name="posta">
						</div>
						
					
						<button type="submit" class="btn btn-success float-right m-3">Thibisha</button>
							
						</form>
					</div>
					
				</div>
			</div>

		</div>
		
	</div>
</section>

<!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>
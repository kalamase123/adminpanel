<?php
	require_once('JSONAPI.php')
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/panle.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-default ">
  		<div class="container">

  			<div class="nav-header">
    			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
    				 <span class="sr-only">Toggle navigation</span>
    			</button>
    			<a class="navbar-brand" href="#">AdminPanel</a>
    		</div>

    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    			<ul class="nav navbar-nav navbar-right">
        			<li>
        				<a href="#" role="button" aria-haspopup="true" aria-expanded="false">Parametre <span class="glyphicon glyphicon-cog"></span></a>
        			</li>
      			</ul>
    		</div>

  		</div>
	</nav>

	<div id="tabinfo" class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="container-fluid">
					<ul class="nav nav-tabs">
  						<li role="presentation" class="active"><a href="#">Dernière co</a></li>
  						<li role="presentation"><a href="#">Ban liste</a></li>
  						<li role="presentation"><a href="#">Info serveur</a></li>
					</ul>
				</div>
			</div>
			<div class="panel-body">
				<table class="table">
					<tr>
						<th>UserName</th>
						<th></th>
					</tr>
				</table>
			</div>
		</div>	
	</div>

	<div id="Console" class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading"><h5>Console</h5></div>
			<div class="panel-body">
				<ul name="console" id="console"></ul>
				<div id="input">
					<div class="input-group" id="commandeline">
  						<span class="input-group-addon" id="sizing-addon2">
  							<span class="glyphicon glyphicon-console" aria-hidden="true"></span>
  						</span>
						<input type="text" class="form-control" placeholder="Commande" aria-describedby="sizing-addon2">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button" id="run">Send</button>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
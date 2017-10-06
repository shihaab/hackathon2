<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="#2ecc71">
		<title>Redesign The Netherlands 2017</title>
		<link rel="stylesheet" href="pub/css/bootstrap.css">
		<link rel="stylesheet" href="pub/css/main.css">
		<script src="pub/js/jquery.js"></script>
		<script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
		<script src="pub/js/bootstrap.js"></script>
	</head>
	<body>
	
		<nav class="navbar sticky-top navbar-toggleable-md navbar-inverse bg-inverse">
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand" href="">Hackathon</a>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="usage/">Gebruik</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="hackathon/">Hackathon</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="container-fluid">
			<div class="progress">
				<div class="progress-bar progress-bar-striped bg-lgrey" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
				<div class="progress-bar progress-bar-striped bg-grey" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
				<div class="progress-bar progress-bar-striped bg-grey" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
				<div class="progress-bar progress-bar-striped bg-grey" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
				<div class="progress-bar progress-bar-striped bg-grey" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
			<div class="text-center">
				<h1 class="sr-h sr-under">Hackathon Redesign The Netherlands</h1><br>
				<form class="form1">
					<h2>Plaats</h2>
					<input type="text" autocomplete="off" autofocus class="plaats letteronly2" spellcheck="false"><br><br>
					<h2>Postcode</h2>
					<input type="text" maxlength="1" class="postcodeNB d-inline-block inputs" id="test">
					<input type="text" maxlength="1" class="postcodeN d-inline-block inputs">
					<input type="text" maxlength="1" class="postcodeN d-inline-block inputs">
					<input type="text" maxlength="1" class="postcodeNE d-inline-block inputs">
					<input type="text" class="postcode d-inline-block letteronly" maxlength="2"  spellcheck="false"><br><br>
					<h2>Straatnaam &amp;<br> Huisnummer</h2>
					<input placeholder="Str. Naam" type="text" autocomplete="off" class="straatnaam letteronly2" spellcheck="false">
					<input placeholder="Nr." type="text" autocomplete="off" class="huisnummer" data-toggle="tooltip" data-placement="bottom" data-html="true" title="<small class='sr-s'>E.V.T. toevoeging.</small>"><br>
					<button class="btn btn-sr"><span class="transi">></span>><span class="transi">></span></button>
				</form>
			</div>
		</div>
		<script>
			var regExp = /[a-z]/i;
			var nums = /[0-9]/i;
			$(".inputs").keyup(function (e) {
				var value = String.fromCharCode(e.which) || e.key;
				// No letters
				if (regExp.test(value)) {
					e.preventDefault();
					$('.inputs').val('');
					return false;
				}
				if (this.value.length == this.maxLength) {
					$(this).next('input').focus();
				}
			});
			$(".letteronly").keyup(function (e) {
				var value = String.fromCharCode(e.which) || e.key;
				// No letters
				if (nums.test(value)) {
					e.preventDefault();
					$('.letteronly').val('');
					return false;
				}
				if (this.value.length == this.maxLength) {
					$(".straatnaam").focus();
				}
			});
			$(".letteronly2").keyup(function (e) {
				var value = String.fromCharCode(e.which) || e.key;
				// No letters
				if (nums.test(value)) {
					e.preventDefault();
					$('.letteronly2').val('');
					return false;
				}
			});
			$(function () {
				$('[data-toggle="tooltip"]').tooltip()
			})
		</script>
	</body>
	
</html>

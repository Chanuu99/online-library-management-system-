<!DOCTYPE html>
<html>
<head>
	<title>Loading</title>
</head>
<style type="text/css">
	*
	{
		margin: 0;
		padding: 0;
		transition: 0.5s;
		background: #262626;
	}
	img
	{
		position: absolute;
		top: 50%;
		left: 50%;
		width: 150px;
		height: 150px;
		text-align: center;
		line-height: 150px;
		
	}
	.ring
	{
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
		width: 150px;
		height: 150px;
		background: transparent;
		border: 3px solid #3c3c3c;
		border-radius: 50%;
		text-align: center;
		line-height: 150px;
		font-family: sans-serif;
		font-size: 20px;
		color: #fff000;
		letter-spacing: 4px;
		text-transform: uppercase;
		text-shadow: 0 0 10px #fff000;
		box-shadow: 0 0 20px rgba(0,0,0,0.5);
	}
	.ring:before
	{
		content: '';
		position: absolute;
		top: -3px;
		left: -3px;
		width: 100%;
		height: 100%;
		border: 3px solid transparent;
		border-top: 3px solid #fff000;
		border-right: 3px solid #fff000;
		border-radius: 50%;
		animation: animatecircle 2s linear infinite;
	}
	span
	{
		display: block;
		position: absolute;
		top: calc(50% - 2px);
		left: 50%;
		width: 50%;
		height: 4px;
		background: transparent;
		transform-origin: left;
		animation: animate 2s linear infinite;
	}
	span:before
	{
		content: '';
		position: absolute;
		width: 16px;
		height: 16px;
		border-radius: 50%;
		background: #fff000;
		top: -6px;
		right: -8px;
		box-shadow: 0 0 20px #fff000;
	}
	@keyframes animatecircle
	{
		0%
		{
			transform: rotate(0deg);
		}
		100%
		{
			transform: rotate(360deg);
		}
	}
	@keyframes animate 
	{
		0%
		{
			transform: rotate(45deg);
		}
		100%
		{
			transform: rotate(405deg);
		}

	}
	@keyframes Text 
	{
		0%
		{
			Bibliyoteca
		}
		100%
		{
			
		}
</style>
<body onload="">
	<div class="ring">
		<em style="font-size:10px;">Loading</em>

		<script type="text/javascript">
			/*var i=0;
			for ( i = 0; i<100;  i++) {
				if(i==100){
					 window.location.href = 'index.php';
				}
			}*/

setTimeout(function(){
            window.location.href = 'index1.php';
         }, 10000);
		</script>
		<span></span>
	</div>
 <img width="90%" height="10%" src="bg logo.png "  > 
</body>

<script type="text/javascript">
	$(window).load(function() {
		// Animate loader off screen
		$("ring").fadeOut("slow");;
		document.getElementById("ring").onload = function() {src="/h.php"};
	});
	function handlePageLoaded(){
  document.getElementsByClassName("ring")[0].style.display = "none";
   document.getElementById("demo").innerHTML = url("google");
}
</script>
</html>
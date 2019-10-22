<!DOCTYPE HTML>

<html>
	<head>
		<title>Arylion Network</title>

        <!-- load and instantiate ScrollReveal first -->
   <script src="https://cdn.jsdelivr.net/scrollreveal.js/3.1.2/scrollreveal.min.js"></script>

</script>
    <script>
      window.sr = ScrollReveal();

      // Add class to <html> if ScrollReveal is supported
      if (sr.isSupported()) {
        document.documentElement.classList.add('sr');
      }

    </script>



		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

<?php 
$SERVER_IP = "142.4.210.112"; //Insert the IP of the server you want to query. 
$SERVER_PORT = "25565"; //Insert the PORT of the server you want to ping. Needed to get the favicon, motd, players online and players max. etc
$QUERY_PORT = "25565";
$HEADS = "3D";
$show_max = "5";

$ping = json_decode(file_get_contents('http://api.minetools.eu/ping/' . $SERVER_IP . '/' . $SERVER_PORT . ''), true);
$query = json_decode(file_get_contents('http://api.minetools.eu/query/' . $SERVER_IP . '/' . $QUERY_PORT . ''), true);
$playerlist = $query['players'];
$online = $ping['players']['online'];

?>
<?
if(empty($query['error'])) {




                    if($playerlist != "null") { //is at least one player online? Then display it!
                        $shown = "0";
                        foreach ($playerlist as $player) {
                            $shown++;
                            if($shown < $show_max + 1 || $show_max == "unlimited") {
                        
?>


        <script>
            window.sr = ScrollReveal();
        </script>

	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="#">Arylion Network</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="index.html">Home</a></li>
                            <li><a href="#">About Us</a></li>
	
							<li><a href="#" class="button">Login</a></li>
                            <li><a href="#" class="button special">Sign Up</a></li>

						</ul>
					</nav>
				</header>


			<!-- Banner -->


				<section id="banner">

                

					<h2>Arylion Network</h2>
					<p>play.arylion.net</p>
                    <p class="player.counter"><?php echo "Join " .$online. " other players now!";?></p>
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
	                    <ul class="list">
                        <li><a href="#">Forums</a></li>    
                        <li><a href="#">Factions</a></li>
                        <li><a href="#">Skyblock</a></li>
                        <li><a href="#">Vote</a></li>
                        <li><a href="#">Store</a></li>

				</section>

                <script>
                    sr.reveal('.list', { duration: 2000}, { delay: 200});
                </script>
            

			<!-- Main -->

				

			
				<section id="about-us">

					<h2>About Us</h2>
					<p>Arylion, established in ... with one mission: Provide brilliant, safe and competitive fun with a rich community.
                    <br />
                    <br />
                    Please note, we are still in the process of re-migrating the servers </p>

				</section>
                <section id="updates">
                    <h2> Development Updates </h2>
                    <p> Insert something useful that I've done here </p>
                    <br />
                    <p> I've done something useful right? </p>

                </section>


			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Arylion Network All rights reserved.</li><li>Design: <a href="https://cmnatic.co.uk">CMNatic</a></li>
					</ul>
				</footer>


		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
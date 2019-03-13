<?php

	include_once "../../commun/vue/fragment/entete-fragment.php";
	include_once "../../commun/vue/fragment/pied-de-page-fragment.php";
	include_once "../../commun/vue/fragment/a-cote-fragment.php";

	$page = (object)
	[
		"style" => "publique/decoration/biere.css",
	    "titre" => "Bière",
	    "titrePrincipal" => "Bière",
	    "itemMenuActif" => "biere", 
	];

	function afficherPage($page = null){

		afficherEntete($page);

?>	 

<script src="publique/js/carousel.js"></script>

<div class="container">
		<div class="title">Biere</div>

		<div class="carousel">
			<div class="carousel_panorama">
			<div class="item"></div>
			<div class="item"></div>
			<div class="item"></div>
			<div class="item"></div>
			<div class="item"></div>
			</div>
		</div>

		<div id="carousel1">
			<div class="item">
				<div class="item_image">
					<img src="publique/illustration/biere-image/FMR.png">
				</div>
				<div class="item_body">
					<div class="item_title">
						Biere 1
					</div>
					<div class="item_description">
						Petite description pour tester
					</div>
				</div>
			</div>
		</div>
		
		<div id="carousel2">
			<div class="item">
				<div class="item_image">
					<img src="publique/illustration/biere-image/CH'TI.png">
				</div>
				<div class="item_body">
					<div class="item_title">
						Biere 2
					</div>
					<div class="item_description">
						Petite description pour tester
					</div>
				</div>
			</div>
		</div>

		<div id="carousel3">
			<div class="item">
				<div class="item_image">
					<img src="publique/illustration/biere-image/B.png">
				</div>
				<div class="item_body">
					<div class="item_title">
						Biere 3
					</div>
					<div class="item_description">
						Petite description pour tester
					</div>
				</div>
			</div>
		</div>



		<div id="carousel4">
			<div class="item">
				<div class="item_image">
					<img src="publique/illustration/biere-image/Asahi.png">
				</div>
				<div class="item_body">
					<div class="item_title">
						Biere 4
					</div>
					<div class="item_description">
						Petite description pour tester
					</div>
				</div>
			</div>
		</div>








<!-- 
		<main>
		    <div id="carousel">

		       <div class="hideLeft">
		        <img src="publique/illustration/biere-image/FMR.png">
		      </div>

		      <div class="prevLeftSecond">
		        <img src="publique/illustration/biere-image/CH'TI.png">
		      </div>

		      <div class="prev">
		        <img src="publique/illustration/biere-image/B.png">
		      </div>

		      <div class="selected">
		        <img src="publique/illustration/biere-image/Asahi.png">
		      </div>

		      <div class="next">
		        <img src="publique/illustration/biere-image/Boréal.png">
		      </div>

		      <div class="nextRightSecond">
		        <img src="publique/illustration/biere-image/Beck's.png">
		      </div>

		      <div class="hideRight">
		        <img src="publique/illustration/biere-image/78.png">
		      </div>

		    </div>

		    <div class="buttons">
		      <button id="prev">Prev</button>
		      <button id="next">Next</button>
		    </div>
		</main>
		  
		<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

			<script src="publique/js/carousel.js"></script> -->

<?php

		afficherPiedDePage($page);

	}

afficherPage($page);

?>
<?php require_once 'admin/database.php';?>
<!--header-->
<?php include "header.php" ?>
<!--end header-->
<main class="container">
 
<!--content-->
    <section>
         <h2>Bienvenue au American's Diner !</h2>
         <div class="flexslider">
            <ul class="slides">
                <li>
                <img  class="flex" src="public/flexslider/burger2.jpg" />
                </li>
                <li>
                <img class="flex" src="public/flexslider/burger3.jpg" />
                </li>
                <li>
                <img class="flex" src="public/flexslider/burger4.jpg" />
                </li>
            </ul>
        </div>
        <div>
        <p id="horaire" class="text">Nous sommes ouvert du lundi au vendredi de 11h30 à 22h00 et le dimanche de 12h30 à 23h30. <br> N' hesitez pas à nous contacter par téléphone ou par mail pour toutes autres questions.</p>
          
        <button class="btn btn-primary" id="cacher"> Click me !</button>
        <button class="btn btn-primary" id="afficher"> Click me !</button>
        
      </div>  
           
    </section>
    <section class="plan">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6242.233572575128!2d2.31612129916174!3d48.86705935484506!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fc50dc75ccf%3A0x42f0f4fa01438416!2sFranklin+D.+Roosevelt!5e0!3m2!1sfr!2sfr!4v1451318946422" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>
   <!-- end content-->
</main>

<!--home modal-->
<div id="explanation" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
		  <div class="modal-dialog modal-dialog-centered" role="document">
		    <div class="modal-content">
				<div class="modal-header text-white">
					<h5 id="start_title" class="translation modal-title ml-auto mr-auto"></h5>
					<div id="language">
						<select class="custom-select custom-select-sm" onchange="changeLanguage(event)"> 
						</select>
					</div>
				</div>
				<div class="modal-body text-center">
					<p id="start_text" class="translation"></p>
					<hr>
					<div class="row">
						<div id="orientation" class="col">
							<img class="img-fluid" src="public/images/phone.png" width=50px height=50px>
							<p id="orientation_text" class="translation font-weight-bold small"></p>
						</div>
					</div>
				</div>
		      <div class="modal-footer">
		        <button  id="start_button" type="button" onclick="start()" data-dismiss="modal" class="translation btn ml-auto mr-auto text-white"></button>
		      </div>
		    </div>
		  </div>
		</div>
<!--end home modal-->

<?php include "footer.php"; ?>
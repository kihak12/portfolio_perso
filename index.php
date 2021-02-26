

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
  <head>
    <title>Perret J&eacute;r&eacute;my</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="pragma" content="no-cache" />

	<link rel="stylesheet" href="css/style.css">

  </head>
  <body>
		<!--
		//	projects
		///////////////////////////////////-->
<div class="page__style projects">
  <div class="page__description">
    <div id="projects">

      <button class="btn_nav projects_link">Projects</button>
      <button class="btn_nav skills_link">Skills</button>
      <button class="btn_nav home_link">Home</button>
      <button class="btn_nav about_link">About</button>
      <button class="btn_nav contact_link">Contact</button>


    </div>
  </div>
</div>
<!--
		//	skills
		///////////////////////////////////-->
<div class="page__style skills">
  <div class="page__description">
    <div id="skills">

      <button class="btn_nav projects_link">Projects</button>
      <button class="btn_nav skills_link">Skills</button>
      <button class="btn_nav home_link">Home</button>
      <button class="btn_nav about_link">About</button>
      <button class="btn_nav contact_link">Contact</button>

      <?php include "pages/skills.html" ?>


    </div>
  </div>
</div>

<!--
		//	about
		///////////////////////////////////-->
<div class="page__style about">
  <div class="page__description">
    <div id="about">

      <button class="btn_nav projects_link">Projects</button>
      <button class="btn_nav skills_link">Skills</button>
      <button class="btn_nav home_link">Home</button>
      <button class="btn_nav about_link">About</button>
      <button class="btn_nav contact_link">Contact</button>


    </div>
  </div>
</div>
<!--
		//	contact
		///////////////////////////////////-->
<div class="page__style contact">
  <div class="page__description">
    <div id="contact">

      <button class="btn_nav projects_link">Projects</button>
      <button class="btn_nav skills_link">Skills</button>
      <button class="btn_nav home_link">Home</button>
      <button class="btn_nav about_link">About</button>
      <button class="btn_nav contact_link">Contact</button>
      
      <?php include "pages/contact.html" ?>

    </div>
  </div>
</div>
<!--
		//	home
		///////////////////////////////////-->
<div class="page__style home">
  <div class="page__description">
    <div id="home">

      <div class="box"></div>

      <button class="btn_nav projects_link">Projects</button>
      <button class="btn_nav skills_link">Skills</button>
      <button class="btn_nav home_link">Home</button>
      <button class="btn_nav about_link">About</button>
      <button class="btn_nav contact_link">Contact</button>
      
      <?php 
            if (isset($_GET["err"])) {
            $err = htmlspecialchars($_GET["err"]);
	            switch ($err){
                    case 'success_message_send':
                        echo "<div class='alert-success center'>Le message a bien &eacute;t&eacute; envoy&eacute;</div>";
                    break;

                    case 'bad_text':
                        echo "<div class='alert-danger center'>Une erreur est survenue lors de l'envoie du message, veuillez compl&eacute;ter tous les champs</div>";
                    break;
                    }
            }

        include "pages/home.html"
      ?>

    </div>
    </div>
  </div>
</div>

  </body>

	<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</html>

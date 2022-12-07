<?php 
include('header.php'); 
?>

      <!--
        - #A propos de moi
      -->
<main>
  
<?php include('sidebar.php');?>

<div class="main-content">

  <?php include('navbar.php');?>
  
      <article class="about  active" data-page="about">

        <header>
          <h2 class="h2 article-title">Moi</h2>
        </header>

        <section class="about-text">
          <p>
            Développeur d'application mobile (Android & iOS), de site Web et de logiciel bureautique. 
            Bientôt 3 ans d'expérience, extrêmement motivé pour développer constamment mes compétences et évolue professionnellement.
          </p>

          <p>
            Je suis confiant dans ma capacité à proposer des idées intéressantes 
            dans le but de réaliser un projet bénéfique.
          </p>
        </section>


        <!--
          - service
        -->

        <section class="service">

          <h3 class="h3 service-title">Qu'est-Ce Que Je Fais</h3>

          <ul class="service-list">

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-design.svg
                " alt="design icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Maquettage</h4>

                <p class="service-item-text">
                Conception des modèles de pages (maquettes) précisant toutes les indications techniques nécessaires.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-dev.svg" alt="Web development icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Application Web</h4>
                <p class="service-item-text">
                Développement de haute qualité des applications web au niveau professionnel.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-app.svg" alt="mobile app icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Application Mobile</h4>

                <p class="service-item-text">
                Développement d'applications pour iOS et Android.        
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <!-- <img src="./assets/images/icon-photo.svg" alt="camera icon" width="40"> -->
                <img src="https://img.icons8.com/external-tal-revivo-fresh-tal-revivo/28/000000/external-trello-a-web-based-list-making-application-for-multi-platform-logo-fresh-tal-revivo.png" alt="trello" width="45"/>
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Gestionn de Projet</h4>

                <p class="service-item-text">
                Organiser le déroulement d'un projet de A à Z, de sa phase de conception à sa phase finale
                </p>
              </div>

            </li>

          </ul>

        </section>


        <!--
          - testimonials
        -->

        <section class="testimonials">

          <h3 class="h3 testimonials-title">Témoignages</h3>

          <ul class="testimonials-list has-scrollbar">

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Fatoumata KALOGA</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                  Diawara a été embauché pour concevoir des applications et des sites web. Nous avons été très satisfaits du travail effectué. Il a eu
                     beaucoup d'expérience
                     et est très soucieux des besoins du client.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-2.png" alt="Jessica miller" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Jessica miller</h4>

                <div class="testimonials-text" data-testimonials-text> 
                  <p>
                  Diawara a été embauché pour concevoir des applications et des sites web. Nous avons été très satisfaits du travail effectué. Il a eu
                     beaucoup d'expérience
                     et est très soucieux des besoins du client.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-3.png" alt="Emily evans" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Emily evans</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                  Diawara a été embauché pour concevoir des applications et des sites web. Nous avons été très satisfaits du travail effectué. Il a eu
                     beaucoup d'expérience
                     et est très soucieux des besoins du client.
                  </p>
                </div>

              </div>

            </li>

            

          </ul>

        </section>





        <!-- 
          - testimonials modal

        

        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="80" data-modal-img>
              </figure>

              <img src="./assets/images/icon-quote.svg" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-title>Daniel lewis</h4>

              <time datetime="2021-06-14">14 June, 2021</time>

              <div data-modal-text>
                <p>
                  Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                  lot of experience
                  and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                  consectetur adipiscing
                  elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                </p>
              </div>

            </div>

          </section> 

        </div>





      -->

        <!--
          - clients
        -->

        <section class="clients">

          <h3 class="h3 clients-title">Clients</h3>

          <ul class="clients-list has-scrollbar">

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/logo-1-color.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/logo-2-color.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/logo-3-color.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/logo-4-color.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/logo-5-color.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/logo-6-color.png" alt="client logo">
              </a>
            </li>

          </ul>

        </section>

      </article>


</div>
</main>

    
<?php include('footer.php');?>

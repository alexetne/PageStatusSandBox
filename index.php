<?php include 'header.php'; ?>

<!-- Section 1 : Choix du formulaire -->
<section class="text-center mb-5" id="formumaires">
  <h2 class="text-violet mb-4">Inscription</h2>
  <p>Choisissez votre type de profil pour accéder au formulaire correspondant :</p>
  <div class="d-flex justify-content-center gap-4 mt-3 flex-wrap">
    <a href="https://glpi.mysandbox.fr/marketplace/formcreator/front/formdisplay.php?id=2" class="btn btn-outline-violet btn-lg">Formulaire Intervenant</a>
    <a href="https://glpi.mysandbox.fr/marketplace/formcreator/front/formdisplay.php?id=1" class="btn btn-outline-violet btn-lg">Formulaire Étudiant</a>
  </div>
</section>

<!-- Section 2 : Présentation du projet -->
<section class="text-center mb-5" id="apropos">
  <h2 class="text-violet mb-4">À propos de MySandBox</h2>
  <p class="mx-auto" style="max-width: 800px;">
    MySandBox est un service gratuit d'hébergement de machines virtuelles, proposé par l’EPSI Toulouse. Il permet aux étudiants
    de monter des projets, tester des environnements, ou simuler des infrastructures dans un cadre sécurisé et pédagogique.
  </p>
  <a href="description.php" class="btn btn-violet mt-3">En savoir plus sur le projet</a>
</section>

<!-- Section 3 : Statuts des services -->
<section id="statuts" class="text-center mb-5">
  <h2 class="text-violet mb-4">Statut des Services</h2>
  <div class="d-flex flex-wrap justify-content-center gap-3">
    <div>
      <p>WAN – Ping</p>
      <img src="https://status.mysandbox.fr/api/badge/1/status" alt="Statut WAN">
    </div>
    <div>
      <p>CTF – Accueil</p>
      <img src="https://status.mysandbox.fr/api/badge/13/status" alt="Statut CTF Accueil">
    </div>
    <div>
      <p>CTF – CH1</p>
      <img src="https://status.mysandbox.fr/api/badge/14/status" alt="Statut CH1">
    </div>
    <div>
      <p>CTF – CH2</p>
      <img src="https://status.mysandbox.fr/api/badge/15/status" alt="Statut CH2">
    </div>
    <div>
      <p>GLPI</p>
      <img src="https://status.mysandbox.fr/api/badge/10/status" alt="Statut GLPI">
    </div>
    <div>
      <p>OpenCTI</p>
      <img src="https://status.mysandbox.fr/api/badge/16/status" alt="Statut OpenCTI">
    </div>
  </div>
  <a href="status.php" class="btn btn-outline-violet mt-4">Voir tous les statuts</a>
</section>

<?php include 'footer.php'; ?>

$(document).ready(function () {
  //**************************************************************************
  // REDIRECTION AND URL SAVING
  //**************************************************************************
  //redirection vers la page de connection CAS si non connecté
  $('#connexionCASButton').click(function(){
      // Redirection
      window.location.href='connexion/_auth.php';
  })
  $('#disconnectCASButton').click(function(){
      // Redirection
      window.location.href='connexion/logout.php';

  })
})

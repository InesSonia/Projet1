<?php
    require_once ('connexiondb.php');
    
    if (isset($_GET['id']))
        
        $id = $_GET['id'];
    
    else
        
        $id = "";

    $requete1 = "select * from candidats where idcand='$id'";
    
    $resultat1 = $pdo->query($requete1);

    if ($candidat = $resultat1->fetch()) {
         $email = $candidat['idcand'];

        $to = $candidat['email'];
        
        $subject = "INVITATION A UN ENTRETIEN CHEZ 2NCORPORATE ";
        
        $txt = "Madame, Mesieur,

Suite à l’étude de votre candidature, nous avons le plaisir de vous inviter à passer des entretiens physiques dans nos locaux.

Je vous enverrai une invitation dès que j'aurai reçu le calendrier de disponibilité des managers.

Nous vous invitons à confirmer votre présence, par la simple réponse à cette e-mail.

Nous restons à votre disposition quant aux différentes questions que vous pourriez rencontrer, et nous vous souhaitons une bonne réussite dans cette série d’entretien.

Nous avons hâte de vous voir.

Bien cordialement,

Le service des ressources humaines,

stephane kouamo
directeur service informatique,
info@2ncorporat.com";
        
        $headers = "From: 2NCORPORATE" . "\r\n" . "CC: info@2ncorporat.com";
        
        //mail($to, $subject, $txt, $headers);
  }
?>

<html>
  <head>
      
    </head>
     <body>
  
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        swal({
          icon: "success",
          title: "Bon travail !",
          text: "  Un mail de confirmation a été envoyé au candidat !",
          showConfirmButton: true,
          confirmButtonText: "Cerrar",
          closeOnConfirm: false
         }). then(function(result){
            window.location = "recrutement.php";
             })
         </script>

     </body>
</html>


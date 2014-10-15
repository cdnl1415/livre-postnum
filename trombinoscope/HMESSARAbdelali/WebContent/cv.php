<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
	
	<title>Insert title here</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="page">
 <div class="imgf">
         <img alt="image" src="images//Capture.PNG"  >
      </div>
      <?php 
try {
		$bdd = new PDO('mysql:host=localhost;dbname=cvsgbd', 'root', '');
	}
	catch(Exception $ex) {
		die('Erreur : '.$e->getMessage());
	}
		
		$reponse = $bdd->query('SELECT nom, prenom, age, sexe, adresse,tel , email FROM infopersonne');
			
		
		while ($donnees = $reponse->fetch()) { 
      // on affiche les résultats
		echo '<h3>'.$donnees['nom'] . ' ';
		echo ''.$donnees['prenom'].'<br />' . '</h3>'; 
		echo ''.$donnees['age'] . ' ';
		echo ''.$donnees['sexe'] . ' ' . '<br />' ; 
		echo 'Adresse'.$donnees['adresse'].'<br />'; 	 
		echo 'Téléphone : '.$donnees['tel'].'<br />';
		echo 'E-mail : '.$donnees['email'].'<br />';
		
 
		}  
		$reponse->closeCursor();
?>
       </br></br></br>
      <div class="title"> 
           <table border="3" width="50%" cellspacing="0" align="center" >
                 <tr align="center"> <td> Ingénieur En Génie Informatique </td></tr>
           </table>
           </br>
      
      <table border="1" width="90%" cellspacing="0">
          <tr align="center" > <td>  Formation </td> </tr>
      </table>
     </div>
      </br>
      <div class="cadre">
       &diams; 2014-2015 : Master 2  Technologies de l'hypermédia Université Paris 8 </br>
       &diams; 2013-2014 : Master 1 Génie Informatique  Logicielle (GIL) Université Rouen </br>
	   &diams; 2009-2013 : ESISA (Ecole Supérieur d’ingénierie en Sciences Appliquées)  FES.</br>
	   &rArr;   CISCO Certified Network Associate (CCNA1, CCNA2, CCNA3, CCNA4).</br>
	   &diams; 2008-2009 : 1 ère Année, faculté de Science dhar el mahraz filière : Sciences de la Matière Physique (SMP)</br>
	   &diams; 2007-2008 : Baccalauréat sciences physique à  FES.</br>
	   </div>
      </br>
      <div class="title">
         <table border="1" width="90%" cellspacing="0">
            <tr align="center" > <td>  Expériences professionnelles </td> </tr>
      </table>
      </div>
      </br>
      <div class="cadre">
       &diams; 01/04/2013 – 01/07/2013 : Stage PFE au sein de (EST) l’Ecole Supérieure de Technologie à FES.</br>
		&rArr; Sujet : Réalisation d'une application de gestion d’école.</br>
		&rArr; Outils : Android, PHP, MySQL , Json.</br>
	   &diams; 19/07/2012 – 19/09/2012 : Stage de 3ème année au sein de la Société Competence Center à FES.</br>
		&rArr; Sujet : Réalisation d'une application de gestion d’école.</br>
		&rArr; Outils : PHP, JavaScript, CSS, MySQL.</br>
	   &diams; 15/07/2011 – 15/09/2011 : Stage de 2ère année au sein de la Société Fina Consulting en France.</br>
		&rArr; Sujet : Réalisation d’une application Web Statique. </br>
		&rArr; Outils : PHP, HTML, CSS.</br>  
		</div>
 </div>   
 </br>
     <div class="title">
         <table border="1" width="88%" cellspacing="0">
            <tr align="center" > <td>  Compétences </td> </tr>
      </table>
      </br>
      </div>
      <div class="cadreC">
		   <div class ="colorB"> Langage de programmation: </div>
		      &nbsp; &bull; Langage C/C++.</br>
		      &nbsp; &bull; Langage C#, VB (Visual Basic).</br>
		      &nbsp; &bull; Java (JDBC, RMI,…).</br>
		      &nbsp; &bull; Langage Assembleur (Intel 8086, Motorola)</br>
		    <div class ="colorB"> Technologies et Framework : </div>
		      &nbsp; &bull; JEE, Struts2 </br>
		      &nbsp; &bull; DOT NET/ DOT NET Remoting.</br>
		      &nbsp; &bull; Servlet, JSP, JSF, EJB.</br> 
		    <div class ="colorB"> SGBD : </div>
		      &nbsp; &bull; MySQL /SQL Server.</br>
		      &nbsp; &bull; Microsoft Access</br>
		      &nbsp; &bull; PL/Oracle</br>
      </div>
      <div class="cadreC2">
		     <div class ="colorB"> Langage de modélisation et de conception : </div>
		        &nbsp; &bull;MERISE.
		        &nbsp; &bull; UML.
		        &nbsp; &bull;  Design Pattern.
		     <div class ="colorB"> Economie : </div>
		        &nbsp; &bull;Comptabilité (General, Analytique) </br>
		        &nbsp; &bull;  Marketing 
		        &nbsp; &bull; Statistique, Analyse de Données. </br>
		
		     <div class ="colorB"> Réseaux : </div>
		       &nbsp; &bull; Modèle OSI. </br>
		       &nbsp; &bull; Administration et Configuration sous Windows et Unix. <br>
		       &nbsp; &bull;  Administration CISCO.   </br>
		      <div class ="colorB"> Divers : </div>
              &nbsp; &bull; Recherche Opérationnel </br>
              &nbsp; &bull; Gestion Projet, Gestion Production </br>
              &nbsp; &bull; Gestion D’entreprise </br>
		       
      </div>
      </br>  
     </br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>
     <div class="titlel">
         <table border="1" width="88%" cellspacing="0">
            <tr> <td align="left">  Langues &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             </td> <td align="center">  Centres d’intérêt</td> </tr>
      </table>
      </div>
      </br>
      <div class="langu">
		 <?php 
			try {
					$bdd = new PDO('mysql:host=localhost;dbname=cvsgbd', 'root', '');
				}
				catch(Exception $ex) {
					die('Erreur : '.$e->getMessage());
				}
					$reponse = $bdd->query('SELECT langue , niveau  FROM langues ');	
					while ($donnees = $reponse->fetch()) { 
					echo '&diams;' . $donnees['langue'] . '&nbsp;';
					echo ':' . $donnees['niveau'] . '<br />' ;
					
			 		}  
					$reponse->closeCursor();
			?>
</div>
<div class="loisir">
		<?php 
			try {
					$bdd = new PDO('mysql:host=localhost;dbname=cvsgbd', 'root', '');
				}
				catch(Exception $ex) {
					die('Erreur : '.$e->getMessage());
				}
					$reponse = $bdd->query('SELECT sport  FROM centresinteret ');	
					while ($donnees = $reponse->fetch()) { 
					echo '&diams;' . $donnees['sport'] . '&nbsp;' . '<br />' ;
					
			 		}  
					$reponse->closeCursor();
		?>
</div>
</br>
</body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Index_Inclusion_Page</title>
    </head>
 
    <body>
 
    <!-- L'en-tête -->
    
    <header>
       <p>HEADER</p> 
    </header>
    
    <!-- Le menu -->
    
    <!-- la partie suivante est transférée vers le fichier menu.php que l'on va rappeler : 'inclure' dans cette page et dans d'autres pages si necessaire au leu de recopier le menu plusieurs fois

    <nav id="menu">        
        <div class="element_menu">
            <h3>Titre menu</h3>
            <ul>
                <li><a href="page1.html">Lien</a></li>
                <li><a href="page2.html">Lien</a></li>
                <li><a href="page3.html">Lien</a></li>
            </ul>
        </div>    
    </nav>-->
    

<!--Ensuite on rappelle cette page avec : -->
<?php include('menu.php') ?>



    <!-- Le corps -->
    
    <div id="corps">
        <h1>Mon super site</h1>
        
        <p>
            Bienvenue sur mon super site !<br />
            Vous allez adorer ici, c'est un site génial qui va parler de... euh... Je cherche encore un peu le thème de mon site. :-D
        </p>
    </div>
    
    <!-- Le pied de page -->
    
    <footer id="pied_de_page">PIEDS DE PAGE
        <p>Copyright moi, tous droits réservés</p>
    </footer>
    
    </body>
</html>
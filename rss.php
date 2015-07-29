<?php 
try
{
$bdd = new PDO('mysql:host=localhost;dbname=magazine', 'root', '');
}
catch(Exception $e)
{
die('Erreur de connexion: '.$e->getMessage());
}
$reponse = $bdd->query("select * from article limit 20");

header("Content-Type: text/xml;charset=ISO-8859-15");
echo '<?xml version="1.0" encoding="ISO-8859-15" ?>
<rss version="2.0">
    <channel>
        <description>les articles</description>
        <link>http:localhost/magazine/flux.php</link>
        <title>liste des article</title>
        ';
         
        
        $req = $bdd->query('select * from article order by id_article DESC');
         
        while ($donnees = $req->fetch())
        {
        ?>
            <item>
                <title><?php echo htmlspecialchars($donnees['titre']) ?></title>
                <link></link>
                <description><?php echo htmlspecialchars($donnees['texte']) ?></description>
                <comments></comments>
                           </item>      
         
        <?php
        }
        $req->closeCursor();
        echo'
    </channel>
</rss>';
?>
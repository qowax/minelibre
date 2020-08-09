<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Minelibre | Serveur Minecraft</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Minelibre | Serveur Minecraft" />
    <meta name="keywords" content="minelibre, mine, libre, 25942, servegame.com, semi-rp, pvp">
    <meta name="twitter:url" content="https://minelibre.eu">
    <meta name="twitter:title" content="Minelibre">
    <meta name="twitter:description" content="Serveur Minecraft" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="image/png" href="favicon.png" />
</head>

<body>

<?php
$playDate = new DateTime('2011-06-01');
$serverDate = new DateTime('2012-06-01');
$videoDate = new DateTime('2013-01-22');

$nowDate = new DateTime();
    
$playDiff = $playDate->diff($nowDate);
$serverDiff = $serverDate->diff($nowDate);
$videoDiff = $videoDate->diff($nowDate);
?>

    <div class="container pt-5">
        <img src="images/logo.png" style="max-height: 150px;" class="mx-auto d-block pb-5" alt="Minelibre">
        <div class="alert alert-light">
            <h4 class="alert-heading pb-4" style="color: #333333;">Minelibre</h4>
            <p>Déjà plus de <?php echo $playDiff->y; ?> années que j'ai commencé à jouer à ce jeu. Et déjà plus de <?php echo $serverDiff->y; ?> années me séparent de la première exécution de ce fameux craftbukkit.jar, qui donnera un peu plus tard naissance à Minelibre.</p>
            <p>Parce qu'à la base, Minelibre c'était un de mes potes d'enfance et moi, un serveur Hamachi hébergé sur mon ordi, un petit serveur en 1.2.1 maintenu par une connexion approximative, un énorme panneau en bloc de diamant avec le nom du serveur, des bâtisses en bois surplombant une cascade d'eau naturelle formée par une seed aléatoire et des heures à construire cet endroit dont seuls les souvenirs me restent aujourd'hui.</p>
            <p>Un an plus tard, j'ai décidé de vraiment m'y mettre. Pendant les grandes vacances de 2012, je profitais de mon temps libre pour configurer les plugins de ce qui allait devenir le serveur que vous avez connu : PermissionsEx, iConomy, WorldEdit, MobArena, HungerGames, un vrai spawn (parce que oui, on n'a pas toujours eu de spawn) et tout ce qui s'en suivi. C'était aussi le moment de passer Minelibre sur un vrai hébergeur ! (on se souvient de ce fameux port 25942...)</p>
            <p>Certains se souviendront de ModernCity, d'Athènes, de ParadizeLand (quelle ville bordélique celle-là), d'EgypCity, de Sinderland (avec sa mairie et son théâtre), de Médiéville (je ne sais plus qui tu es, toi qui as construit la cathédrale probablement en 2013, mais ton travail était majestueux), de la loterie du spawn, de la salle de rencontre totalement inutile juste en face, des nombreuses versions des villes qui se sont succédé, de la seconde version du serveur avec le spawn du bateau, du bordel constant dans ce chat, mais au final on s'en est tapé des barres, hein ?</p>
            <hr>
            <p>On retrouve quelques vidéos de notre serveur (merci Razore si tu passes par là), c'est drôle de se dire que tout cela a plus de <?php echo $videoDiff->y; ?> ans maintenant.</p>
            <div class="embed-responsive embed-responsive-16by9" style="max-width: 600px; margin: 0 auto;">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/94IoA1-qJdA" allowfullscreen></iframe>
            </div>
            <hr>
            <p>Avec une dernière image du fameux spawn de l'époque multiserveur (t'avais géré Asy sur ce coup-là) :</p>
            <div class="container">
                <img class="rounded mx-auto d-block" style="width: 90%;max-width: 800px;" src="images/bungeecord.jpg" alt="Spawn BungeeCord">
                </div>
            <hr>
            <p>Je me remémore ces souvenirs devant le même bureau sur lequel j'ai passé mon temps à construire Minelibre, et ça fait tout drôle de se rappeler ces nombreuses aventures, parce que la majorité d'entre vous m'a simplement présenté sa bienveillance et sa bonne humeur, quatre ou cinq heures par soir, et ça faisait du bien.</p>
            <p>Jusqu'en 2015, j'ai rencontré des centaines de joueurs, peut-être même des milliers, passé des mois sur Skype avec vous à dessiner et entretenir ce beau monde, et je tenais à vous remercier vous particulièrement, qui avez contribué à faire vivre ce serveur :</p>
            <div class="row pt-4">
                <div class="col col-sm-3 pb-3 joueur">
                    <img src="https://mc-heads.net/avatar/4c84d673ca4247c78f20f8fb2a9fa745/100" alt="Asy">
                    <span style="display:block;">Asy</span>
                </div>
                <div class="col col-sm-3 pb-3 joueur">
                    <img src="https://mc-heads.net/avatar/6e262b61f5614ee79480aebb039d2f5d/100" alt="MineTronik">
                    <span style="display:block;">MineTronik</span>
                </div>
                <div class="col col-sm-3 pb-3 joueur">
                    <img src="https://mc-heads.net/avatar/7560e3d0ac4c4b178a615023dc7c4dda/100" alt="SoCraft">
                    <span style="display:block;">SoCraft</span>
                </div>
                <div class="col col-sm-3 pb-3 joueur">
                    <img src="https://mc-heads.net/avatar/4da65ed70beb4cf89621dd2a00999a2e/100" alt="Pixel2503">
                    <span style="display:block;">Pixel2503</span></div>
            </div>
            <div class="row">
                <div class="col col-sm-3 pb-3 joueur">
                    <img src="https://mc-heads.net/avatar/7de801976248412c85be2cb512a2f9f1/100" alt="Hispahan978">
                    <span style="display:block;">Hispahan978</span>
                </div>
                <div class="col col-sm-3 pb-3 joueur">
                    <img src="images/steve.png" alt="Night">
                    <span style="display:block;">Night</span>
                </div>
                <div class="col col-sm-3 pb-3 joueur">
                    <img src="https://mc-heads.net/avatar/07e58dea01db4caea1de4857955bdd4b/100" alt="Physa">
                    <span style="display:block;">Physa</span>
                </div>
                <div class="col col-sm-3 pb-3 joueur">
                    <img src="https://mc-heads.net/avatar/fd1b9b1297d1479f86f6a3325ec2a1f8/100" alt="Skynerx">
                    <span style="display:block;">Skynerx</span>
                </div>
            </div>
            <div class="row">
                <div class="col col-sm-3 pb-3 joueur">
                    <img src="images/steve.png" alt="erdnivel">
                    <span style="display:block;">erdnivel</span>
                </div>
                <div class="col col-sm-3 pb-3 joueur">
                    <img src="images/steve.png" alt="maxtktdu33">
                    <span style="display:block;">maxtktdu33</span>
                </div>
                <div class="col col-sm-3 pb-3 joueur">
                    <img src="images/steve.png" alt="Saxuralle">
                    <span style="display:block;">Saxuralle</span>
                </div>
                <div class="col col-sm-3 pb-3 joueur">
                    <img src="https://mc-heads.net/avatar/5cbf16c462dd487ea66d268cfe943671/100" alt="Kmoi">
                    <span style="display:block;">Kmoi</span>
                </div>
            </div>
            <hr>
            <p class="mb-0">Où que vous soyez, vous pouvez toujours m'envoyer un message <a style="color: #333333;font-weight: bold;" href="mailto:nathan.haudot@outlook.fr">ici</a> ou me retrouver autre part sous le pseudo de <strong>qowax</strong> :) Ce serait sympa de se retrouver un peu, c'était une sacrée expérience. Merci à vous, et prenez soin de vous mes bichons.</p>
            <p class="mt-5 mb-0" style="text-align: right;">Nathan (nathan060700)</p>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <footer>
    </footer>

</body>

</html>
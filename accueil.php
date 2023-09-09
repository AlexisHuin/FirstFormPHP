<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
</head>

<body>
    <header>
        <h1 class="titre">
            <?php echo "Page de formulaire" ?>
        </h1>
        <section class="section_frm">
            
            <form class="formulaire" method="POST" action="traitement.php">

                
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" required>

                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" required>

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                

                <input class="formulaire_btn" type="submit" name="submit" value="Envoyer">


            </form>
        </section>
    </header>

</body>

</html>
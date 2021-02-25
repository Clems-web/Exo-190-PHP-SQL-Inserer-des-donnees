<?php

/**
 * Pour cet exercice, vous allez utiliser la base de données table_test_php créée pendant l'exo 189
 * Vous utiliserez également les deux tables que vous aviez créées au point 2 ( créer des tables avec PHP )
 */

try {
    /**
     * Créez ici votre objet de connection PDO, et utilisez à chaque fois le même objet $pdo ici.
     */
    $server = "localhost";
    $db = "table_test_php";
    $user = "root";
    $password = "";

    $pdo = new PDO("mysql:host=$server;dbname=$db", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /**
     * 1. Insérez un nouvel utilisateur dans la table utilisateur.
     */

    // TODO votre code ici.

    /*$sql = "
        INSERT INTO utilisateur(nom, prenom, email, password, adresse, code_postal, pays, date_join)
        VALUES ('Doe', 'John', 'monsuperemail@gmail.com', 'azerty', '34 rue des inconnus', 59785, 'France', '25/02/21');
    ";
    $result = $pdo->exec($sql);*/

    /**
     * 2. Insérez un nouveau produit dans la table produit
     */

    // TODO votre code ici.
    /*$sql = "
        INSERT INTO produit(titre, prix, description_courte, description_longue)
        VALUES ('lave-vaisselle', 599.99, 'lave-vaisselle', 'blablablablablablablablabla');
    ";
    $result = $pdo->exec($sql);*/
    /**
     * 3. En une seule requête, ajoutez deux nouveaux utilisateurs à la table utilisateur.
     */
    /*$sql = "
        INSERT INTO utilisateur(nom, prenom, email, password, adresse, code_postal, pays, date_join)
        VALUES ('Lapin', 'Pierre', 'monsuperemail@gmail.com', 'azerty', '34 rue des inconnus', 59785, 'France', '25/02/21'),
                ('Cerf', 'Camille', 'monsuperemail@gmail.com', 'azerty', '34 rue des inconnus', 59785, 'France', '25/02/21')
               
    ";
    $result = $pdo->exec($sql);*/
    // TODO Votre code ici.

    /**
     * 4. En une seule requête, ajoutez deux produits à la table produit.
     */

    // TODO Votre code ici.
    /*$sql = "
        INSERT INTO produit(titre, prix, description_courte, description_longue)
        VALUES ('Lavabo', 48.99, 'lavabo', 'blablablablablablablablabla'),
               ('Chaise', 19.99, 'Chaise', 'blablablablablablablablabla');
    ";
    $result = $pdo->exec($sql);*/
    /**
     * 5. A l'aide des méthodes beginTransaction, commit et rollBack, insérez trois nouveaux utilisateurs dans la table utilisateur.
     */
    // TODO Votre code ici.

    /*$pdo->beginTransaction();
    $insert = "INSERT INTO utilisateur(nom, prenom, email, password, adresse, code_postal, pays, date_join) VALUES ";

    $sql1 = $insert . "('Gnouf', 'Paul', 'monsuperemail@gmail.com', 'azerty', '34 rue des inconnus', 59785, 'France', '25/02/21')";
    $pdo->exec($sql1);

    $sql2 = $insert . "('Qfkdfg', 'Patrick', 'monsuperemail@gmail.com', 'azerty', '34 rue des inconnus', 59785, 'France', '25/02/21')";
    $pdo->exec($sql2);

    $sql3 = $insert . "('ksdjfhd', 'Sacha', 'monsuperemail@gmail.com', 'azerty', '34 rue des inconnus', 59785, 'France', '25/02/21')";
    $pdo->exec($sql3);

    $pdo->commit();*/

    /**
     * 6. A l'aide des méthodes beginTransaction, commit et rollBack, insérez trois nouveaux produits dans la table produit.
     */

    $pdo->beginTransaction();
    $insert = "INSERT INTO produit(titre, prix, description_courte, description_longue) VALUES ";

    $sql1 = $insert . "('Table', 59.99, 'Table', 'blablablablablablablablabla')";
    $pdo->exec($sql1);

    $sql2 = $insert . "('Chemise', 59.99, 'Chemise', 'blablablablablablablablabla')";
    $pdo->exec($sql2);

    $sql3 = $insert . "('PC', 1499.99, 'PC', 'blablablablablablablablabla')";
    $pdo->exec($sql3);

    $pdo->commit();

}
catch (PDOException $exception) {
    echo $exception->getMessage();
    $pdo->rollBack();
}
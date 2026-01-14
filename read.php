<?php

require_once('config/db.php');
$query = $bdd->query('select * from contact');
$contacts = $query->fetchAll();

  // $id = $contact['id'];
   // $nom = $contact['nom'];
   // $telephone = $contact['telephone'];
   // $email = $contact['email'];
    //$adresse = $contact['adresse']; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of contact</title>
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-2">
            <a href=""class="btn btn-success btn">Nouveau contact</a>
        </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col">
                 <table class="table table-responsive 
                 table-hover table-striped">
        <thead class="bs-purple text-align bs-purple:#6f42c1" >
            <th>Id</th>
            <th>Nom</th>
            <th>Telephone</th>
            <th>Email</th>
            <th>Adresse</th>
            <th>Actions</th>
        </thead>
        <tbody>
                 <?php foreach($contacts as $key => $contact) {?>
           
            <tr>
                <td><?= $contact['id'] ?></td>
                <td><?= $contact['nom'] ?></td>
                <td><?= $contact['telephone'] ?></td>
                <td><?= $contact['email'] ?></td>
                <td><?= $contact['adresse'] ?></td>
                <td>
                    <a href=""></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
            </div>
        </div>

    </div>
   
</body>
</html>
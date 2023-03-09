<?php
$titre ="Liste des Pompiers";
ob_start();
?>
<table class="table table-striped">
    <tbody>
        <thead>
        <tr>
            <th scope="col">Nom du Pompier</th>
            <th scope="col">Prénom du Pompier</th>
            <th scope="col">Téléphone</th>
            <th scope="col">Sexe</th>
        </tr>
        </thead>
        <?php        
            foreach ($pompiers as $pompier){
        ?>
            <tr>
             <td><?= $pompier['NomPompier'] ?></td> 
             <td><?= $pompier['PrenomPompier'] ?></td> 
             <td><?= $pompier['TelPompier'] ?></td> 
             <td><?= $pompier['SexePompier'] ?></td>  
            </tr>
        <?php
        }
    ?>
    </tbody>
</table>
<?php
$content = ob_get_clean();
require "gabarit.php";
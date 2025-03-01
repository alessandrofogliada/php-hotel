<!--

Il valore relativo al parcheggio deve essere indicato con “Sì” o “No” -->

<?php

// Partiamo da questo array di hotel. https://www.codepile.net/pile/OEWY7Q1G

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
];

// if (($hotels[0]['parking'])  == true){
//     print_r(array_replace($hotels [0] ['parking'] , $hotels [0] ['Si'] ));
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- inclusione di bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>PHP Hotel</title>
</head>
<body>

<!-- Prima stampate in pagina i dati, senza preoccuparvi dello stile. -->

<!-- Dopo aggiungete Bootstrap e mostrate le informazioni con una tabella  -->

<ul>         
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name </th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parking</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Distanza dal centro</th>
                    </tr>
                </thead>

                <tbody>
                <?php foreach($hotels as $hotel):?>
                <tr>
                            <th scope="row">1</th>
                            <td><?php echo $hotel['name'] ?></td>
                            <td><?php echo $hotel['description'] ?></td>
                            <td><?php echo $hotel['parking'] ? 'Si' : 'No' ?></td>
                            <td><?php echo $hotel['vote'] ?></td>
                            <td><?php echo $hotel['distance_to_center'] ?></td>                
                </tr>
                <?php endforeach;?>
                </tbody>
             </table>
</ul>
</body>
</html>

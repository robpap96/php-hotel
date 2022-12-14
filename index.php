<?php

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

    $park_flag = isset($_GET['parking'])=='Si' ? true : false;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hotel</title>
        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <!-- ///BOOTSTRAP -->
    </head>
    <body>
        <div class="container py-3 px-5">
            <form action="index.php" method="GET">
                <label for="park_flag">Selezioni se desidera o meno il parcheggio</label>
                <select name="parking" id="park_flag" class="form-select " aria-label="Default select example">
                    <option selected>Scegliere filtro parcheggio</option>
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
                <button type="submit">Filtra</button>
            </form>

        </div>
        <div class="container py-3 px-5">
            <!-- TAB-BOOTSTRAP -->
            <table class="table table-striped">
                <thead>
            
                </thead>
                <tbody>       
                    <tr>
                        <th scope="row">Name</th>
                        <th scope="row">Description</th>
                        <th scope="row">Parking</th>
                        <th scope="row">Vote</th>
                        <th scope="row">Distance to Center</th>
                    </tr>
                    <?php foreach($hotels as $hotel){ 
                        if($park_flag){    
                    ?> 
                        <tr>
                            <td><?php echo $hotel["name"]?></td>           
                            <td><?php echo $hotel["description"]?></td>
                            <td><?php echo $hotel["parking"] ? 'si' : 'no' ?></td>
                            <td><?php echo $hotel["vote"]?></td>
                            <td><?php echo $hotel["distance_to_center"]?></td>
                        </tr>                 
                    <?php 
                        }
                    } ?>
                </tbody>
            </table>
            <!-- ///TAB-BOOTSTRAP -->
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <div class="container">

        <h1 class="text-center">HOTELS</h1>

        <form class="mb-3" action="./index.php" method="GET">
            <select class="form-select mb-2" name="stars" id="stars">
                <option selected>Select stars</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
                <option value="4">Four</option>
                <option value="5">Five</option>
            </select>
            <div class="form-check">
                <label class="form-check-label" for="parking">Parking</label>
                <input class="form-check-input" type="checkbox" value="" id="parking">
            </div>
        </form>

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
        ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">-</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $keys = array_keys($hotels);
                $count = '1';
                for ($hotel = 0; $hotel < count($hotels); $hotel++) { ?>
                    <tr>
                        <th scope="row"><?php echo $count++ ?></th>
                        <td><?php echo $hotels[$hotel]['name']; ?></td>
                        <td><?php echo $hotels[$hotel]['description']; ?></td>
                        <!-- If parking is true => SI, else NO -->
                        <td><?php echo ($hotels[$hotel]['parking']) ? "Si" : "No"; ?></td>
                        <td><?php echo $hotels[$hotel]['vote']; ?></td>
                        <td><?php echo $hotels[$hotel]['distance_to_center']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
</body>

</html>
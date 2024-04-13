<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Simple Search through Code Igniter</title>
</head>

<body>
    <h1 align='center'>Jay Gurudev . Welcome to art of living internanal center</h1>
    <div class="container">
        <?php echo form_open('test'); ?>

        <div class="col-auto">
            <label for="input" class="visually-hidden">Search</label>
            <input type="text" class="form-control" id="search" placeholder="search" name="key">


        </div>
        <div class="col-auto">
            <button type="search" class="btn btn-primary mb-3">Search</button>
        </div>
        <?php echo form_close(); ?>
    </div>

    <?php foreach ($store as $key) { ?>
        <div class="container" align='center' >
            <div class="card text-center" style="width: 18rem; height:auto ; display:block; ">

                <img src="<?php echo base_url() ?>assets/image/<?= $key->image ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $key->name ?></h5>
                    <p class="card-text"><?php echo $key->description ?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    
                </div>
            </div>

        </div>
    <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
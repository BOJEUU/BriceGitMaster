<?php require_once "controler.php"; ?>

<!doctype html>
<html lang="fr">

<head>
    <title>vaisseaux star wars</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <h1 class="text-center text-light">$ STAR SHiP #</h1>
    <div class="row m-0">
        <?php
        foreach ($sw_data as $key => $value) { ?>

            <div class="col-12 col-md-4 p-4">
                <div class="card" style="height: 50rem; ">
                    <img class="card-img-top h-50 cc" src="<?php echo $sw_data[$key]["image"] ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-center">@ <?php echo $sw_data[$key]["name"] ?> </h5>
                        <p class="card-text">-<?php echo $sw_data[$key]["arsenal"] ?></p>
                        <p class="card-text">-<?php echo $sw_data[$key]["weight"] ?></p>
                        <p class="card-text">-<?php echo $sw_data[$key]["size"] ?></p>
                        <p class="card-text"><?= ($sw_data[$key]["astromechDroid"]) ? "- port droide astromechano" : "" ?></p>
                    </div>
                    <div class="d-flex flex-column justify-content-center w-100 p-3">
                        <a href="https://www.paypal.com/donate?hosted_button_id=YPCDAABFFFBKL" class="btn btn-primary">Pimp my ship !</a>
                        <small class="text-center">star wars is better than star trek !! ¶</small>
                    </div>
                </div>
            </div>

        <?php } ?>
    </div>


    <div class="bb-8">
        <div class="bb-8__head">
            <div class="bb-8__head__antenna"></div>
            <div class="bb-8__head__antenna--longer"></div>
            <div class="bb-8__head__top">
                <div class="bb-8__head__top__bar--gray"></div>
                <div class="bb-8__head__top__bar--red"></div>
                <div class="bb-8__head__top__lens">
                    <div class="bb-8__head__top__lens__inner"></div>
                </div>
                <div class="bb-8__head__top__lens--secondary">
                    <div class="bb-8__head__top__lens--secondary__inner"></div>
                </div>
                <div class="bb-8__head__top__bar--red--lower--left"></div>
                <div class="bb-8__head__top__bar--red--lower--right"></div>
                <div class="bb-8__head__top__bar--gray--lower"></div>
            </div>
            <div class="bb-8__head__joint"></div>
        </div>
        <div class="bb-8__head-shadow"></div>
        <div class="bb-8__body">
            <div class="bb-8__body__circle bb-8__body__circle--one">
                <div class="bb-8__body__circle__bar bb-8__body__circle--one__bar--one"></div>
                <div class="bb-8__body__circle__bar bb-8__body__circle--one__bar--two"></div>
                <div class="bb-8__body__circle--one__inner-circle"></div>
                <div class="bb-8__body__circle--one__inner-border"></div>
            </div>
            <div class="bb-8__body__circle bb-8__body__circle--two">
                <div class="bb-8__body__circle__bar bb-8__body__circle--two__bar--one"></div>
                <div class="bb-8__body__circle--two__inner-border"></div>
            </div>
            <div class="bb-8__body__circle bb-8__body__circle--three">
                <div class="bb-8__body__circle__bar bb-8__body__circle--three__bar--one"></div>
                <div class="bb-8__body__circle__bar bb-8__body__circle--three__bar--two"></div>
                <div class="bb-8__body__circle--three__inner-circle"></div>
                <div class="bb-8__body__circle--three__inner-border"></div>
            </div>
            <div class="bb-8__body__line bb-8__body__line--one"></div>
            <div class="bb-8__body__line bb-8__body__line--two"></div>
            <div class="bb-8__body__line bb-8__body__line--three"></div>
            <div class="bb-8__body__screw bb-8__body__screw--one"></div>
            <div class="bb-8__body__screw bb-8__body__screw--two"></div>
            <div class="bb-8__body__screw bb-8__body__screw--three"></div>
            <div class="bb-8__body__screw bb-8__body__screw--four"></div>
            <div class="bb-8__body__screw bb-8__body__screw--five"></div>
            <div class="bb-8__body__screw bb-8__body__screw--six"></div>
        </div>
        <div class="bb-8__body-shadow"></div>
    </div>
    <div class="github-link">
        <a target="_blank" href="https://github.com/jrmontejo/bb-8">github</a>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
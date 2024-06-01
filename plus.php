<?php include('header.php') ?>

<head>
    <style>
        .accordion-item {
            background: none;
            border: none;
        }

        button {
            background: none;
            border: none;
        }

        .accordion-body {
            padding: 0;
        }

        .minus {
            display: none;
        }

        .plus {
            display: block;
        }

        li {
            padding: 5px 0;
        }

        .collapsed {
            .minus {
                display: block;
            }

            .plus {
                display: none;
            }
        }
    </style>
</head>
<div class="row justify-content-center">
    <div class="col-5">
        <ul class="list-unstyled">
            <li><img src="assets/img/user.png" width="20">
            </li>
            <li><img src="assets/img/bag.png" width="20">
            </li>
            <li><img src="assets/img/user.png" width="20">
            </li>
            <li> <img src="assets/img/bag.png" width="20">
            </li>
        </ul>

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <ul class="list-unstyled">
                            <li><img src="assets/img/user.png" width="20">
                            </li>
                            <li><img src="assets/img/bag.png" width="20">
                            </li>
                            <li> <img src="assets/img/bag.png" width="20">
                            </li>
                        </ul>
                    </div>
                </div>
                <h2 class="accordion-header" id="headingOne">
                    <button data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <span class="plus">+</span> <span class="minus">-</span>
                    </button>
                </h2>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>
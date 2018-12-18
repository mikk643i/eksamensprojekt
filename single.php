<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <style>
        .data-page {
            margin-left: 10vw;
            display: grid;
            grid-template-columns: repeat(1, 1fr);

        }

        .funitureBillede {
            width: 70vw;
        }


        .funitureInfo {
            width: 70vw;
        }

        .data_billeder {
            width: 75vw;

        }

        .billeder img {
            width: 75vw;
            margin: 5vw;
        }

        .billeder {
            margin-left: 5vw;
        }

        p {
            font-family: sans-serif;
            line-height: 23px;
        }

        h1 {
            font-family: sans-serif;
        }

        @media screen and (min-width: 750px) {
            .data-page {
                margin-left: 10vw;
                display: grid;
                grid-template-columns: repeat(1, 1fr);

            }

            .funitureBillede {
                width: 70vw;
            }


            .funitureInfo {
                width: 70vw;
            }

            .data_billeder {
                width: 75vw;

            }

            .billeder img {
                width: 35vw;
                margin: 5vw;
            }

            .billeder {
                margin-left: 5vw;
            }

            p {
                font-family: sans-serif;
                line-height: 23px;
            }

            h1 {
                font-family: sans-serif;
            }
        }

        @media screen and (min-width: 1400px) {
            .data-page {
                margin-left: 10vw;
                display: grid;
                grid-template-columns: repeat(2, 1fr);

            }

            .funitureBillede {
                width: 30vw;
            }


            .funitureInfo {
                width: 30vw;
            }

            .data_billeder {
                width: 35vw;

            }

            .billeder img {
                width: 16.8vw;
                margin: 2vw 1vw;
            }

            .billeder {
                margin-left: 9vw;
            }

        }

    </style>
</head>

<body>


<?php include "header.html"; ?>


<section class="forside"></section>



<article class="data-page">


    <div class="funitureBillede">
        <img class="data_billeder" src="" alt="">
    </div>

    <div class="funitureInfo">
        <h1 class="data-title"></h1>
        <p class="data-beskrivelse"></p>
    </div>

</article>

<div class="billeder">
    <img class="data_billeder1" src="" alt="">
    <img class="data_billeder2" src="" alt="">
    <img class="data_billeder3" src="" alt="">
    <img class="data_billeder4" src="" alt="">
</div>



    <?php include "footer.html"; ?>



    <script>
        let urlParams = new URLSearchParams(window.location.search);
        let id = urlParams.get("id");

        console.log(id);



        let templateModtager = document.querySelector(".forside");

        let chrForside = document.querySelector(".data-page");



        document.addEventListener("DOMContentLoaded", getJson);





        async function getJson() {

            let ForsideObjekt = await fetch("http://schaadtdesign.dk/kea/eksamen/wordpress/wp-json/wp/v2/portfolio");
            chrForside = await ForsideObjekt.json();
            console.log(chrForside);

            VisPost();

        }



        function VisPost() {

            let dest = document.querySelector(".data-page");
            let box = document.querySelector(".billeder");

            chrForside.forEach(port => {
                console.log(VisPost);

                if (port.id == id) {

                    dest.querySelector(".data-title").textContent = port.title.rendered;
                    dest.querySelector(".data_billeder").src = port.acf.billedefront.url;
                    dest.querySelector(".data-beskrivelse").textContent = port.acf.beskrivelse;
                    box.querySelector(".data_billeder1").src = port.acf.billede1;
                    box.querySelector(".data_billeder2").src = port.acf.billede2.url;
                    box.querySelector(".data_billeder3").src = port.acf.billede3.url;
                    box.querySelector(".data_billeder4").src = port.acf.billede4.url;


                }
            });
        }

    </script>
</body>

</html>

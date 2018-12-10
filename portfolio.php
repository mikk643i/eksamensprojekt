<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="portfolioStyle.css">
    <link rel="stylesheet" href="samlet.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>

<body>

    <?php include "header.html"; ?>


    <section class="portfolio"></section>

    <template id="wp_template">

        <article class="data-page">
            <h2 class="data-title"></h2>
            <img class="data_img" src="" alt="">
            <p class="data-kategori"></p>
            <p class="data-beskrivelse"></p>
        </article>
    </template>



   <?php include "footer.html"; ?>

    <script>
        let minTemplate = document.querySelector("#wp_template");
        let templateModtager = document.querySelector(".portfolio");
        let chrPortfolio;




        document.addEventListener("DOMContentLoaded", getJson);
        async function getJson() {


            let portfolioObjekt = await fetch("http://schaadtdesign.dk/kea/eksamen/wordpress/wp-json/wp/v2/portfolio");
            chrPortfolio = await portfolioObjekt.json();
            console.log(chrPortfolio);


            visPost();
        }

        function visPost() {

            chrPortfolio.forEach(port => {
                let klon = minTemplate.cloneNode("true").content;
                klon.querySelector(".data-title").textContent = port.title.rendered;
                klon.querySelector(".data_img").src = port.acf.billedefront.url;
                klon.querySelector(".data-kategori").textContent = port.acf.kategori;
                klon.querySelector(".data-beskrivelse").textContent = port.acf.beskrivelse;

                templateModtager.appendChild(klon);
            });
        }

    </script>
</body>

</html>

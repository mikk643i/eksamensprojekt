<!DOCTYPE html>
<html lang="da">

<head>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="portfolioStyle.css">
    <link rel="stylesheet" href="samlet.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <style>


    </style>
</head>

<body>

    <?php include "header.html"; ?>

    <!--    <div class="filtreringsknapper">-->
    <div class="filtrering">
        <button class="menu-item" data-kategori="Alle">All funitures</button>
        <button class="menu-item" data-kategori="Chair">Chairs</button>
        <button class="menu-item" data-kategori="Table">Tables</button>
        <button class="menu-item" data-kategori="Bench">Bench</button>
        <button class="menu-item" data-kategori="Stool">Stool</button>

    </div>




    <section class="portfolio"></section>

    <template id="wp_template">

        <article class="data-page">

            <img class="data_img" src="" alt="">
            <div class="overlay">
                <p class="data-title"></p>
                <p class="data-kategori"></p>
            </div>

        </article>
    </template>
    <!--   </div>-->

    <?php include "footer.html"; ?>


    <script>
        let minTemplate = document.querySelector("#wp_template");
        let templateModtager = document.querySelector(".portfolio");
        let chrPortfolio;
        let filter = "Alle"
        let dest = document.querySelector(".portfolio");




        document.addEventListener("DOMContentLoaded", getJson);
        filter = "Alle";
        document.querySelectorAll(".menu-item").forEach(knap => {
            knap.addEventListener("click", filtering)
        });

        function filtering() {
            dest.textContent = "";
            console.log(this.getAttribute("data-kategori"));

            filter = this.getAttribute("data-kategori");
            visPost();
        }
        async function getJson() {


            let portfolioObjekt = await fetch("http://schaadtdesign.dk/kea/eksamen/wordpress/wp-json/wp/v2/portfolio");
            chrPortfolio = await portfolioObjekt.json();
            console.log(chrPortfolio);


            visPost();
        }

        function visPost() {

            chrPortfolio.forEach(port => {

                if (filter == "Alle" || filter == port.acf.kategori) {
                    let klon = minTemplate.cloneNode("true").content;

                    klon.querySelector(".data_img").src = port.acf.billedefront.url;
                    klon.querySelector(".data-title").textContent = port.title.rendered;
                    klon.querySelector(".data-kategori").textContent = port.acf.kategori;

                    klon.querySelector(".data-page").addEventListener("click", () => {
                        window.location.href = "single.php?id=" + port.id;

                    });

                    templateModtager.appendChild(klon);
                } else {

                }
            });
        }

    </script>
</body>

</html>

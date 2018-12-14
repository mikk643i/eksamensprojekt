<!DOCTYPE html>
<html lang="da">

<head>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christian Juhl</title>
    <link rel="stylesheet" href="samlet.css">
    <link rel="stylesheet" href="indexStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>

<body>

    <?php include "header.html"; ?>

    <div class="forside-collage">

        <section class="forside"></section>


        <template id="wp_template">

            <article class="data-page">
                <img class="data-billeder" src="" alt="">
                <div class="overlay">
                    <p class="data-title"></p>
                </div>
                <p class="data-modified"></p>
            </article>

        </template>






        <section class="forside-midt"></section>


        <template id="wp_template">

            <article class="data-page-midt">
                <img class="data-billeder" src="" alt="">
                <div class="overlay1">
                    <p class="data-title"></p>
                </div>
                <p class="data-modified"></p>
            </article>

        </template>





        <section class="forside-hojre"></section>


        <template id="wp_template">

            <article class="data-page-hojre">
                <img class="data-billeder" src="" alt="">
                <div class="overlay">
                    <p class="data-title"></p>
                </div>
                <p class="data-modified"></p>
            </article>

        </template>


    </div>







    <?php include "footer.html"; ?>
    <script>
        let minTemplate = document.querySelector("#wp_template");
        let templateModtager1 = document.querySelector(".forside");
        let templateModtager2 = document.querySelector(".forside-hojre");
        let templateModtager3 = document.querySelector(".forside-midt");
        let chrForside;
        let husetEvents;
        let eventFilter = "Alle";



        document.addEventListener("DOMContentLoaded", getJson1);
        async function getJson1() {

            let ForsideObjektHojre = await fetch("http://schaadtdesign.dk/kea/eksamen/wordpress/wp-json/wp/v2/hojre_forside");
            chrForsideHojre = await ForsideObjektHojre.json();
            visPostH();
        }

        function visPostH() {
            console.log(visPostH);
            chrForsideHojre.forEach(port => {
                if (eventFilter == "Alle" || eventFilter == chrForsideHojre.acf.modified) {


                    let klon = minTemplate.cloneNode("true").content;

                    klon.querySelector(".data-billeder").src = port.acf.billedefront.url;
                    klon.querySelector(".data-title").textContent = port.title.rendered;

                    klon.querySelector(".data-page").addEventListener("click", () => {
                        window.location.href = "singleH.html?id=" + port.id;

                    });

                    templateModtager2.appendChild(klon);
                }
            })
        };





        document.addEventListener("DOMContentLoaded", getJson2);
        async function getJson2() {

            let ForsideObjektMidt = await fetch("http://schaadtdesign.dk/kea/eksamen/wordpress/wp-json/wp/v2/midt_forside");
            chrForsideMidt = await ForsideObjektMidt.json();
            visPostM();

        }



        function visPostM() {
            console.log(visPostM);
            chrForsideMidt.forEach(port => {
                if (eventFilter == "Alle" || eventFilter == chrForsideMidt.acf.modified) {


                    let klon = minTemplate.cloneNode("true").content;

                    klon.querySelector(".data-billeder").src = port.acf.billedefront.url;
                    klon.querySelector(".data-title").textContent = port.title.rendered;

                    klon.querySelector(".data-page").addEventListener("click", () => {
                        window.location.href = "singleM.html?id=" + port.id;

                    });

                    templateModtager3.appendChild(klon);
                }
            })
        };




        document.addEventListener("DOMContentLoaded", getJson3);
        async function getJson3() {


            let ForsideObjekt = await fetch("http://schaadtdesign.dk/kea/eksamen/wordpress/wp-json/wp/v2/venstre_forside");

            chrForside = await ForsideObjekt.json();



            console.log(chrForside);

            visPostV();
        }

        function visPostV() {
            console.log(visPostV);
            chrForside.forEach(port => {
                if (eventFilter == "Alle" || eventFilter == chrForside.acf.modified) {


                    let klon = minTemplate.cloneNode("true").content;

                    klon.querySelector(".data-billeder").src = port.acf.billedefront.url;
                    klon.querySelector(".data-title").textContent = port.title.rendered;

                    klon.querySelector(".data-page").addEventListener("click", () => {
                        window.location.href = "singleV.html?id=" + port.id;

                    });

                    templateModtager1.appendChild(klon);
                }
            })
        };

    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="samlet.css">


    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>

<body>
    <?php include "header.html"; ?>


    <section class="pagecontainer">
        <template id="temp">
            <h1 id="data-pagetitle">title</h1>
            <article id="data-page"></article>
        </template>
    </section>



    <?php include "footer.html"; ?>

    <script>
        async function getJson() {

            let pagetemplate = document.querySelector("#temp");
            let pagecontainer = document.querySelector(".pagecontainer");


            let jsonObjekt = await fetch("http://schaadtdesign.dk/kea/eksamen/wordpress/wp-json/wp/v2/pages/27");
            let page = await jsonObjekt.json();

            let klon = pagetemplate.cloneNode(true).content;
            klon.querySelector("#data-pagetitle").textContent = page.title.rendered;
            klon.querySelector("#data-page").innerHTML = page.content.rendered;
            pagecontainer.appendChild(klon);
        };

        document.addEventListener("DOMContentLoaded", getJson);

    </script>
</body>

</html>

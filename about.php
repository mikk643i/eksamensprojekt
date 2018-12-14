<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="samlet.css">
    <link rel="stylesheet" href="aboutStyle.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>

<body>
    <?php include "header.html"; ?>


    <!-- Tidslinjens kode er lavet som en liste med de passende tags indeni. -->
    <section class="timeline">
        <ul>
            <li>
                <div>
                    <h4>2017</h4><strong>Graduate – Master of Arts & Design – KADK </strong><br>
                    <h2>Awards</h2>
                    <p>Finn Juhl Prisen 2017 – Wilhelm Hansen Fonden.</p>
                    <p>Design Awards 2017 – Talent of the year – Bo Bedre, Bolig Magasinet, Costume Living and Nordic Living.</p>
                </div>
            </li>
            <li>
                <div>
                    <h4>2016</h4><strong>Product Developer at HAY </strong><br>
                    <h2>Awards</h2>
                    <p>Designmuseum Danmark – Danish Design Now – Latch stool & Helix.</p>
                </div>
            </li>
            <li>
                <div>
                    <h4>2015</h4><strong>Internship at HAY – Product Development<br>
                        Studentjob at Fritz Hansen A/S – Prototype and Product Design Department. <br>
                        BA degree in Furniture Design – The Royal Danish Academy of Fine Arts – School of Design.</strong>
                    <h2>Awards</h2>
                    <p>Grete Jalk Price of Honour 2015.</p>
                    <p>Snedkernes Efterårsudstilling 2015 – Samarbejde med Norm Architects & Frederik Werner med stolen Pause.</p>
                    <p>Albertsen Prisen – NØW! – Helix.</p>
                    <p>Milano Design week – NØW! – Helix.</p>
                </div>
            </li>
            <li>
                <div>
                    <h4>2014</h4> <strong>Exchange programme at Ontario College of Art & Design, Toronto</strong><br>
                    <h2>Awards</h2>
                    <p>Stockholm Furniture Fair – Made KADK – Felt chair.</p>
                </div>
            </li>
            <li>
                <div>
                    <h4>2013</h4> <strong>Assistent and Tradeshow responsible at Ørgreen Optics.</strong><br>
                    <h2>Awards</h2>
                </div>
            </li>
            <li>
                <div>
                    <h4>2012</h4>
                    <h2>Awards</h2>
                    <p>Nominee – Bolig Magasinet Design Award – Upcoming talent.</p>
                    <p>Winner of Bolia Design Award 2012.</p>
                </div>
            </li>
            <li>
                <div>
                    <h4>2009 - 2011</h4> <strong>Apprentice as cabinetmaker at Rud. Rasmussen / Denmark.<br>
                        Admitted at The Royal Danish Academy of Fine Arts, School of Architecture, Design and
                        Conservation.</strong>
                    <h3>Awards</h3>
                </div>
            </li>

        </ul>
    </section>


    <?php include "footer.html"; ?>
    <script>
        (function() {

            'use strict';


            var items = document.querySelectorAll(".timeline li");


            function isElementInViewport(el) {
                var rect = el.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }

            function callbackFunc() {
                for (var i = 0; i < items.length; i++) {
                    if (isElementInViewport(items[i])) {
                        items[i].classList.add("in-view");
                    }
                }
            }


            window.addEventListener("load", callbackFunc);
            window.addEventListener("resize", callbackFunc);
            window.addEventListener("scroll", callbackFunc);

        })();

    </script>
</body>

</html>

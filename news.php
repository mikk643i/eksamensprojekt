<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="stylesheet" href="samlet.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Christian Juhl">
</head>

<body>

    <style>
        /*
body {
color: #262626;
background-color: #fafafa;
font-size: 18px;
font-family: 'Open Sans', sans-serif;
font-weight: 300;
}

h1 {
font-weight: 300;
font-size: 30px;
}
*/
        #rudr_userinfo a {
            font-family: 'Open Sans', sans-serif;
            text-decoration: none;
            color: black;
            font-weight: 400;
            font-size: 0.9em;

        }

        @media screen and (max-width: 730px) {
            #rudr_userinfo {
                display: block;
                align-content: center;
                margin: auto;
                width: 68vw;
            }

            #rudr_userinfo h1 {
                font-size: 1.4em;
                font-family: 'Open Sans', sans-serif;
            }

            #rudr_userinfo img {
                display: block;
                align-content: center;
                border-radius: 50%;
                margin: 38px auto;
            }

            #rudr_userinfo p a {

                text-decoration: none;

                font-family: 'Montserrat', sans-serif;
            }


            #rudr_instafeed {
                display: inline-grid;
                grid-template-columns: 100vw;


            }

            #rudr_instafeed img {
                width: 70vw;
                display: block;

                margin: 20px auto;
            }

            li {
                list-style-type: none;

            }

            #rudr_instafeed p {
                display: block;
                font-size: 0.8em;
                margin: auto;
                width: 70vw;
                line-height: 20px;
            }
        }


        /*Når skærmen er en vide på minumum 730px*/

        @media screen and (min-width: 730px) {
            #rudr_userinfo {
                display: flex;
                align-content: center;
                margin: auto 63px;
                width: 70vw;
            }




            #rudr_userinfo img {
                border-radius: 50%;
                margin: 10px 50px;
            }

            #rudr_userinfo p a {

                text-decoration: none;

                font-family: 'Montserrat', sans-serif;
                width: 30vw;
            }


            #rudr_instafeed {
                display: inline-grid;
                grid-template-columns: 50vw 50vw;


            }

            #rudr_instafeed img {
                width: 40vw;
                display: block;

                margin: 20px auto;

            }

            li {
                list-style-type: none;

            }

            #rudr_instafeed p {
                display: block;
                font-size: 0.8em;
                margin: auto;
                width: 40vw;
                line-height: 20px;
            }
        }


        @media screen and (min-width: 800px) {
            #rudr_userinfo {
                display: flex;
                align-content: center;
                margin: auto;
                width: 58vw;
            }



            #rudr_userinfo img {
                border-radius: 50%;
                margin: 10px 50px;
            }

            #rudr_userinfo p a {

                text-decoration: none;

                font-family: 'Montserrat', sans-serif;
            }


            #rudr_instafeed {
                display: inline-grid;
                grid-template-columns: 50vw 50vw;


            }

            #rudr_instafeed img {
                width: 40vw;
                display: block;

                margin: 20px auto;
            }

            li {
                list-style-type: none;

            }

            #rudr_instafeed p {
                display: block;
                font-size: 0.8em;
                margin: auto;
                width: 40vw;
                line-height: 20px;
            }
        }


        @media screen and (min-width: 900px) {
            #rudr_userinfo {
                display: flex;
                align-content: center;
                margin: auto;
                width: 61vw;
            }



            #rudr_userinfo img {
                border-radius: 50%;
                margin: 10px 50px;
            }

            #rudr_userinfo p a {

                text-decoration: none;

                font-family: 'Montserrat', sans-serif;
            }


            #rudr_instafeed {
                display: inline-grid;
                grid-template-columns: 50vw 50vw;


            }

            #rudr_instafeed img {
                width: 40vw;
                display: block;

                margin: 20px auto;
            }

            li {
                list-style-type: none;

            }

            #rudr_instafeed p {
                display: block;
                font-size: 0.8em;
                margin: auto;
                width: 40vw;
                line-height: 20px;
            }
        }


        /*Når skærmen er en vide på minimum 1040px*/

        @media screen and (min-width: 1040px) {
            #rudr_userinfo {
                display: flex;
                align-content: center;
                margin: auto;
                width: 50vw;
            }



            #rudr_userinfo img {
                border-radius: 50%;
                margin: 10px 50px;
            }

            #rudr_userinfo p a {

                text-decoration: none;

                font-family: 'Montserrat', sans-serif;
            }


            #rudr_instafeed {
                display: inline-grid;
                grid-template-columns: 50vw 50vw;


            }

            #rudr_instafeed img {
                width: 40vw;
                display: block;

                margin: 20px auto;
            }

            li {
                list-style-type: none;

            }

            #rudr_instafeed p {
                display: block;
                font-size: 0.8em;
                margin: auto;
                width: 40vw;
                line-height: 20px;
            }
        }


        @media screen and (min-width: 1080px) {
            #rudr_userinfo {
                display: flex;
                align-content: center;
                margin: auto;
                width: 50vw;
            }



            #rudr_userinfo img {
                border-radius: 50%;
                margin: 10px 50px;
            }

            #rudr_userinfo p a {

                text-decoration: none;

                font-family: 'Montserrat', sans-serif;
            }


            #rudr_instafeed {
                display: inline-grid;
                grid-template-columns: 50vw 50vw;


            }

            #rudr_instafeed img {
                width: 40vw;
                display: block;

                margin: 20px auto;
            }

            li {
                list-style-type: none;

            }

            #rudr_instafeed p {
                display: block;
                font-size: 0.8em;
                margin: auto;
                width: 40vw;
                line-height: 20px;
            }
        }

        @media screen and (min-width: 1100px) {
            #rudr_userinfo {
                display: flex;
                align-content: center;
                margin: auto;
                width: 50vw;
            }



            #rudr_userinfo img {
                border-radius: 50%;
                margin: 10px 50px;
            }

            #rudr_userinfo p a {

                text-decoration: none;

                font-family: 'Montserrat', sans-serif;
            }


            #rudr_instafeed {
                display: inline-grid;
                grid-template-columns: 50vw 50vw;


            }

            #rudr_instafeed img {
                width: 40vw;
                display: block;

                margin: 20px auto;
            }

            li {
                list-style-type: none;

            }

            #rudr_instafeed p {
                display: block;
                font-size: 0.8em;
                margin: auto;
                width: 40vw;
                line-height: 20px;
            }
        }

        @media screen and (min-width: 1180px) {
            #rudr_userinfo {
                display: flex;
                align-content: center;
                margin: auto;
                width: 50vw;
            }



            #rudr_userinfo img {
                border-radius: 50%;
                margin: 10px 50px;
            }

            #rudr_userinfo p a {

                text-decoration: none;

                font-family: 'Montserrat', sans-serif;
            }


            #rudr_instafeed {
                display: inline-grid;
                grid-template-columns: 33vw 33vw 33vw;


            }

            #rudr_instafeed img {
                width: 30vw;
                display: block;

                margin: 20px auto;
            }

            li {
                list-style-type: none;

            }

            #rudr_instafeed p {
                display: block;
                font-size: 0.8em;
                margin: auto;
                width: 30vw;
                line-height: 20px;
            }
        }

        @media screen and (min-width: 1280px) {
            #rudr_userinfo {
                display: flex;
                align-content: center;
                margin: auto;
                width: 50vw;
            }



            #rudr_userinfo img {
                border-radius: 50%;
                margin: 10px 50px;
            }

            #rudr_userinfo p a {

                text-decoration: none;

                font-family: 'Montserrat', sans-serif;
            }



            #rudr_instafeed {
                display: inline-grid;
                grid-template-columns: 33vw 33vw 33vw;


            }

            #rudr_instafeed img {
                width: 30vw;
                display: block;

                margin: 20px auto;
            }

            li {
                list-style-type: none;

            }

            #rudr_instafeed p {
                display: block;
                font-size: 0.8em;
                margin: auto;
                width: 30vw;
                line-height: 20px;
            }


        }

        @media screen and (min-width: 1530px) {

            #rudr_userinfo {
                display: flex;
                align-content: center;
                margin: auto;
                width: 50vw;
            }



            #rudr_userinfo img {
                border-radius: 50%;
                margin: 10px 50px;
            }

            #rudr_userinfo p a {

                text-decoration: none;

                font-family: 'Montserrat', sans-serif;
            }



            #rudr_instafeed {
                display: inline-grid;
                grid-template-columns: 33vw 33vw 33vw;


            }

            #rudr_instafeed img {
                width: 30vw;
                display: block;

                margin: 20px auto;
            }

            li {
                list-style-type: none;

            }

            #rudr_instafeed p {
                display: block;
                font-size: 0.8em;
                margin: auto;
                width: 30vw;
                line-height: 20px;
            }
        }

    </style>


    <?php include "header.html"; ?>

    <div id="rudr_userinfo"> </div>




    <div id="rudr_instafeed"></div>

    <?php include "footer.html"; ?>

    <script>
        var num_photos = 3,
            container = document.getElementById('rudr_instafeed'),
            scrElement = document.createElement('script'),
            token = '9602470857.1677ed0.e3b6ff533da042a18f6d33a4a8daa074',
            container2 = document.getElementById('rudr_userinfo'),
            scrElement2 = document.createElement('script');;
        // Profil information

        window.mishaProcessResult2 = function(response) {
            container2.innerHTML = '<div><p><a href="https://www.instagram.com/test.kea.2018/?hl=da"><img src="' + response.data.profile_picture + '"></a></p></div>' +
                '<div><h1><a href="https://www.instagram.com/test.kea.2018/?hl=da">' + response.data.username + '</a></h1>' + '<p>' + response.data.counts.media + ' Posts ' + response.data.counts.followed_by + ' Followers ' + response.data.counts.follows + ' Follows</p><strong>' + response.data.full_name + '</strong><p> ' + response.data.bio + '<a href="' + response.data.website + '">' + response.data.website + '</a></p></div>';
        }

        scrElement2.setAttribute('src', 'https://api.instagram.com/v1/users/self?access_token=' + token + '&callback=mishaProcessResult2');
        document.body.appendChild(scrElement2);

        //Billeder og billede tekst


        window.mishaProcessResult = function(data) {
            for (x in data.data) {
                container.innerHTML += '<li><p><a href="' + data.data[x].link + '"><img src="' + data.data[x].images.standard_resolution.url + '"><strong></a>' + data.data[x].likes.count + ' Likes ' + data.data[x].comments.count + ' Comments <br></strong>' + data.data[x].caption.text + '</p> </li>';
            }
        }

        scrElement.setAttribute('src', 'https://api.instagram.com/v1/users/self/media/recent?access_token=9602470857.1677ed0.e3b6ff533da042a18f6d33a4a8daa074&callback=callbackFunction' + token + '&count=' + num_photos + '&callback=mishaProcessResult');
        document.body.appendChild(scrElement);

    </script>
</body>

</html>

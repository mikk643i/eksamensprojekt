<!DOCTYPE html>
<html lang="da">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="stylesheet" href="samlet.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
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

        #rudr_userinfo {
            display: flex;
            align-content: center;
            margin: auto;
            width: 50vw;
        }



        #rudr_userinfo img {
            border-radius: 50%;
            margin: 10px;
        }

        #rudr_userinfo p a {

            text-decoration: none;

            font-family: 'Open Sans', sans-serif;
        }


        #rudr_instafeed {
            display: inline-grid;
            grid-template-columns: 33vw 33vw 33vw;


        }

        #rudr_instafeed img {
            width: 30vw;
            margin-top: 20px;
        }

        li {
            list-style-type: none;

        }

    </style>


    <?php include "header.html"; ?>
    <div id="rudr_userinfo"> </div>
    <div id="rudr_instafeed"></div>

    <?php include "footer.html"; ?>

    <script>
        var token = 'YOUR INSTAGRAM TOKEN',
            num_photos = 20, // maximum 20
            container = document.getElementById('rudr_instafeed'), // it is our <ul id="rudr_instafeed">
            scrElement = document.createElement('script');

        window.mishaProcessResult = function(data) {
            for (x in data.data) {
                container.innerHTML += '<li><img src="' + data.data[x].images.low_resolution.url + '"></li>';
            }
        }

        scrElement.setAttribute('src', 'https://api.instagram.com/v1/users/self/media/recent?access_token=243468568.1677ed0.b95c8575a280433d81778312a20fceb8&callback=callbackFunction' + token + '&count=' + num_photos + '&callback=mishaProcessResult');
        document.body.appendChild(scrElement);




        var token = '243468568.1677ed0.b95c8575a280433d81778312a20fceb8',
            container2 = document.getElementById('rudr_userinfo'),
            scrElement2 = document.createElement('script');

        window.mishaProcessResult2 = function(response) {
            container2.innerHTML = '<div><p><img src="' + response.data.profile_picture + '"></p></div>' +
                '<div><h1>' + response.data.username + '</h1>' +
                '<p>#' + response.data.id + '</p>' +
                '<p>' + response.data.counts.media + ' media ' + response.data.counts.followed_by + ' followers ' + response.data.counts.follows + ' follows</p>' +
                '<p><strong>' + response.data.full_name + '</strong> ' + response.data.bio + '<a href="' + response.data.website + '">' + response.data.website + '</a></p></div>';
        }

        scrElement2.setAttribute('src', 'https://api.instagram.com/v1/users/self?access_token=' + token + '&callback=mishaProcessResult2');
        document.body.appendChild(scrElement2);

    </script>
</body>

</html>

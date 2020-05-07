<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>

    <style>
        .btn-gradient {
            background-color: #1fc8db;
            background-image: linear-gradient(141deg, #9fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
            color: white;

        }

        button {
            margin-top: 5%;
            margin-bottom: 5%;
        }



        .rdiogrp {
            display: inline-block;
            margin-left: 3%;
            margin-right: 3%;
        }

        .video {
            margin-top: 3%;
            margin-bottom: 8%;
        }
    </style>
    <div class="container text-center">
        <div class="container video rounded embed-responsive embed-responsive-16by9">
            <iframe class="rounded embed-responsive-item " src="https://www.youtube.com/embed/Zr7--itZamw?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="container buttons text-center">
            <div class="rdiogrp">
                <span>A</span>
                <input type="radio" name="answer" value="0">
            </div>
            <div class="rdiogrp">
                <span>B</span>
                <input type="radio" name="answer" value="1">
            </div>
            <div class="rdiogrp">
                <span>C</span>
                <input type="radio" name="answer" value="2">
            </div>
            <br>
            <button id="submit" class="btn btn-gradient">Submit</button>

        </div>
    </div>
    <script>
        let count = 1;
        let score = 0;
        let right_ans;
        var videos = new Array(10);
        for (var i = 0; i < 10; i++) {
            videos[i] = [];
        }
        /* Choix De Carrieres */
        videos[0][0] = "9IBagaAKanE";
        videos[0][1] = "1";
        /*Monteur Videos a faire q2 et 3*/
        videos[1][0] = "zlvNhQBIT5c";
        videos[1][1] = "2";
        videos[2][0] = "LUqa__6yz2A";
        videos[2][1] = "1";
        videos[3][0] = "0S2xK5oPjCs";
        videos[3][1] = "1";
        /*Developpeur check*/
        videos[4][0] = "fTAS-GE5Bas";
        videos[4][1] = "1";
        videos[5][0] = "UYVtNaDxnb8";
        videos[5][1] = "0";
        videos[6][0] = "ag8vbjEhscA";
        videos[6][1] = "1";
        /*Communication a faire 3q*/
        videos[7][0] = "p9dmKEj02O4";
        videos[7][1] = "1";
        videos[8][0] = "NmFlcnjGFKI";
        videos[8][1] = "0";
        videos[9][0] = "2rcZUEFFM-I";
        videos[9][1] = "0";


        function getAverage(score) {
            return (Math.floor(score / 3 * 100));
        }

        function getId() {
            let url = $("iframe").attr("src");
            return url.substr(30, 11);
        }


        function embed(idvideos) {
            return "https://www.youtube.com/embed/" + idvideos;
        }

        $("#submit").on('click', function() {
            //alert(videos);
            count++;
            console.log(getId());
            //console.log(count);
            /* id video intro*/
            if (getId() == "Zr7--itZamw") {
                $("iframe").attr("src", embed(videos[0][0]));
                $('input[name=answer]:checked').prop("checked", false);
            }
            if (getId() == videos[3][0]) {
                let answer = $('input[name=answer]:checked').val();
                if (right_ans == answer) {
                    score++;
                    console.log(score);
                }
            }
            if (getId() == videos[2][0]) {
                let answer = $('input[name=answer]:checked').val();
                if (right_ans == answer) {
                    score++;
                    console.log(score);
                }
                $("iframe").attr("src", embed(videos[3][0]));
                right_ans = videos[3][1];
                $('input[name=answer]:checked').prop("checked", false);


            }
            if (getId() == videos[1][0]) {
                let answer = $('input[name=answer]:checked').val();
                if (right_ans == answer) {
                    score++;
                    console.log(score);
                }
                $("iframe").attr("src", embed(videos[2][0]));
                right_ans = videos[2][1];
                $('input[name=answer]:checked').prop("checked", false);


            }
            
            
            if (getId() == videos[6][0]) {
                let answer = $('input[name=answer]:checked').val();
                if (right_ans == answer) {
                    score++;
                }
            }
            
            if (getId() == videos[5][0]) {
                let answer = $('input[name=answer]:checked').val();
                if (right_ans == answer) {
                    score++;
                }
                $("iframe").attr("src", embed(videos[6][0]));
                right_ans = videos[6][1];
                $('input[name=answer]:checked').prop("checked", false);


            }
            if (getId() == videos[4][0]) {
                let answer = $('input[name=answer]:checked').val();
                if (right_ans == answer) {
                    score++;
                }
                $("iframe").attr("src", embed(videos[5][0]));
                right_ans = videos[5][1];
                $('input[name=answer]:checked').prop("checked", false);


            }
            
            if (getId() == videos[9][0]) {
                let answer = $('input[name=answer]:checked').val();
                if (right_ans == answer) {
                    score++;
                }
            }
            if (getId() == videos[8][0]) {
                let answer = $('input[name=answer]:checked').val();
                if (right_ans == answer) {
                    score++;
                }
                $("iframe").attr("src", embed(videos[9][0]));
                right_ans = videos[9][1];
                $('input[name=answer]:checked').prop("checked", false);


            }
            if (getId() == videos[7][0]) {
                let answer = $('input[name=answer]:checked').val();
                if (right_ans == answer) {
                    score++;
                }
                $("iframe").attr("src", embed(videos[8][0]));
                right_ans = videos[8][1];
                $('input[name=answer]:checked').prop("checked", false);


            }
            
            
            if (getId() == videos[0][0]) {

                let answer = $('input[name=answer]:checked').val();
                //Monteur Video 
                if (answer == 0) {
                    $("iframe").attr("src", embed(videos[1][0]));
                    right_ans = videos[1][1];
                }
                //Developpeur
                if (answer == 1) {
                    $("iframe").attr("src", embed(videos[4][0]));
                    right_ans = videos[4][1];
                }
                //Communication
                if (answer == 2) {
                    $("iframe").attr("src", embed(videos[7][0]));
                    right_ans = videos[7][1];
                }


                $('input[name=answer]:checked').prop("checked", false);
            }
            if (count > 5) {
                window.location.href = "index.php?test=finished&score=" + getAverage(score);
            }
        })
    </script>
</body>

</html>
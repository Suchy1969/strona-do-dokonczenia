
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Pacifico" />
    <meta charset="utf-8" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <link href="StyleSheet1.css" rel="stylesheet" />
    <link href="StyleSheet2.css" rel="stylesheet" />
   
    <style>
        .flip-card-inner {
            min-height: 2vw;
            position: relative;
            transition: transform 0.6s;
            transform-style: preserve-3d;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front, .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }



        .flip-card-back {
            transform: rotateY(180deg);
        }
    </style>
 
    
    <title></title>
</head> 
<body>
    <header>
    </header>

    <section>
        <div class="row">

        </div>
            <div class="row">



                <div style="background-color: #15172b; padding:2vw; text-align: center; " class="col-md-12">
                    <div class="flip-card col-md-12">
                        <div class="flip-card-inner col-md-12">
                            <div class="flip-card-front">
                                <h1>Link do dysku google
                           
                                </h1>
                            </div>
                            <div class="flip-card-back col-md-12">
                                <a class="" href="https://drive.google.com/drive/folders/1dYL0sBd340hW3_-dHgO29OKXp5XRlrOq?usp=sharing" target="_blank">
                                    <h1>Kliknij aby przejść do dysku</h1>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div style="padding:10px" class="col-md-4"></div>
                    <div style="padding:10px" class="col-md-4">
                        <div class="form col-md-12">
                            <div class="title">Grupa <?php echo $_GET["name"] ?></div>
                            <div class="subtitle">Wypełnij dane:</div>
                            <div class="input-container ic1">
                                <input id="firstname" class="input" type="text" placeholder=" " />
                                <div class="cut"></div>
                                <label for="firstname" class="placeholder">Wpisz imię i nazwisko dziecka</label>
                            </div>

                            <div class="input-container ic2">
                                <input id="lastname" class="input" type="text" placeholder=" " />
                                <div class="cut"></div>
                                <label for="lastname" class="placeholder">asdasd</label>
                            </div>
                            <div class="input-container ic2">
                                <input id="lastname" class="input" type="text" placeholder=" " />
                                <div class="cut"></div>
                                <label for="lastname" class="placeholder">asdasd</label>
                            </div>

                            <div class="input-container ic2">
                                <input id="lastname" class="input" type="text" placeholder=" " />
                                <div class="cut"></div>
                                <label for="lastname" class="placeholder">Wddadasd</label>
                            </div>
                            <div class="input-container ic2">
                                <input id="lastname" class="input" type="text" placeholder=" " />
                                <div class="cut"></div>
                                <label for="lastname" class="placeholder">Wddadasd</label>
                            </div>
                            <div class="input-container ic2">
                                <input id="lastname" class="input" type="text" placeholder=" " />
                                <div class="cut"></div>
                                <label for="lastname" class="placeholder">Wddadasd</label>
                            </div>
                            



                            <button type="text" class="submit">Prześlij</button>
                        </div>
                    </div>
                </div>
                <div style="padding:10px" class="col-md-4"></div>


            </div>
    </section>






</body>
</html>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chłodnictwo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <!--Pierwszy musi byc-->
</head>

<body onresize="space()" onload="space()">
    <header>
        <!--Zajebiste menu tutaj-->
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top" id="navbar">
            <div class="navbar-brand col-9 col-sm-6 col-md-5 col-lg-4 col-xl-3" id="logobg">
                <a href="index.html" class="logo___">
                    <img src="images/logo.png" class="logo__" width="160px" alt="logo">
                </a>
            </div>
            <button class="navbar-toggler col-2" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#chlodnictwo">Chłodnictwo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#klimatyzacja">Klimatyzacja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#wentylacja">Wentylacja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontakt">Kontakt</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container-fluid">

        <div id="getoverit" class="row">
            <!--Przesuwane obrazki tutaj-->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="images/klima.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/slide2.png" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="images/slide3.png" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!--images/klima.jpg-->
        </div>

        <!--Content-->
        <div class="row nocontent" id="chlodnictwo"> </div>
        <div class="margintop">
            <div class="row content">
                <h1>Usługi</h1>
            </div>
            <div class="row content">
                <div>
                    <h4><a href="#">Twoja usługa 1</a></h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga ea ad at. Sed, nesciunt dolores.
                        Neque, eveniet, deleniti nostrum laboriosam voluptatem, deserunt rem blanditiis temporibus cum
                        repudiandae iure corporis numquam.</p>
                </div>
            </div>
            <div class="row content">
                <div>
                    <h4><a href="#">Twoja usługa 2</a></h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga ea ad at. Sed, nesciunt dolores.
                        Neque, eveniet, deleniti nostrum laboriosam voluptatem, deserunt rem blanditiis temporibus cum
                        repudiandae iure corporis numquam.</p>
                </div>
            </div>
            <div class="row content">
                <div>
                    <h4><a href="#">Twoja usługa 3</a></h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga ea ad at. Sed, nesciunt dolores.
                        Neque, eveniet, deleniti nostrum laboriosam voluptatem, deserunt rem blanditiis temporibus cum
                        repudiandae iure corporis numquam.</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Eaque placeat aperiam vel corrupti, ad at, natus laboriosam
                        illum id minima amet facere! Corporis ducimus debitis minus animi
                        excepturi error iste!</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Eaque placeat aperiam vel corrupti, ad at, natus laboriosam
                        illum id minima amet facere! Corporis ducimus debitis minus animi
                        excepturi error iste!</p>
                </div>
            </div>
            <div class="row nocontent" id="klimatyzacja"> </div>
        </div>
        <div class="row content margintop">
            <h1>Klimatyzacja</h1>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam saepe impedit odio error, deleniti, consectetur nam, labore unde expedita officiis porro quibusdam ea illo velit! Aliquid quo praesentium eos numquam magni voluptas consequatur molestiae aperiam quidem! Dolorem exercitationem vero reiciendis quod aperiam. Perspiciatis quas quia quo sed, nemo fugiat quibusdam. Repudiandae id voluptates aperiam voluptatum, provident ducimus nemo eos voluptatibus commodi aliquid amet autem tenetur corrupti quas nulla suscipit fugit animi? Quae omnis rem nam dolorum ab id ullam cupiditate temporibus recusandae! Maiores, accusamus magnam asperiores corporis neque laboriosam minima dolores nostrum a sed! Tempore quae ex aut porro, nemo assumenda inventore officia ipsam ea sint aliquam labore dolorum iusto minima sunt, dolorem qui illo beatae ipsum temporibus iste aperiam quas! Nam et iste non quia. Rerum minus et ab hic, cumque esse accusamus expedita. Totam repudiandae laboriosam a recusandae dolores quia et cum quasi assumenda? Aspernatur sint incidunt dolorem, a aperiam iste accusantium eaque quisquam vitae cum deleniti possimus nisi eligendi officiis voluptate nesciunt, maiores ipsa earum mollitia itaque dignissimos numquam repellendus harum dolores? Natus, earum laboriosam mollitia illum nostrum perspiciatis optio culpa, blanditiis quasi voluptatum delectus, unde praesentium molestias saepe tempora voluptates pariatur impedit velit rem quam distinctio.
            <div class="row nocontent" id="wentylacja"> </div>
        </div>
        <div class="row content margintop">
            <h1>Wentylacja</h1>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat nam accusantium recusandae dignissimos corporis saepe voluptates maxime provident aperiam animi ut maiores accusamus, rem commodi dolorem porro optio fugit itaque quo ipsum similique? Enim corrupti architecto sapiente totam, repellat placeat sit rerum! Vel quas praesentium eos omnis tempora, eveniet itaque debitis architecto neque! Cupiditate magnam placeat inventore iusto praesentium nesciunt mollitia distinctio veniam incidunt quisquam recusandae, perferendis accusantium amet sunt voluptatibus saepe doloribus quaerat repudiandae modi enim commodi in! Dolorum facere minus eos exercitationem, reiciendis repellat omnis nulla officia labore explicabo. Dolores in amet nostrum dolor sunt est quasi enim temporibus neque facilis excepturi ratione voluptatibus, quis porro et eos autem velit architecto tempore magni exercitationem id. Dolorum sequi cumque ex in, molestiae labore impedit magnam. Dolores voluptatibus possimus distinctio aliquid! Alias omnis veniam nostrum, recusandae magnam eveniet minus dicta ipsam quae neque, voluptatibus, perspiciatis aliquid quis minima libero modi quo placeat. Ea maxime voluptates, voluptas labore quis distinctio nisi numquam. Fugiat aspernatur id tempore. Unde corrupti in quos tenetur voluptas, possimus eos voluptatem laudantium accusantium pariatur, rem beatae perspiciatis corporis minus accusamus cum voluptates expedita dolor animi ex vitae eaque nulla fugit nostrum? Quam quibusdam similique voluptas eius molestias?
            <div class="row nocontent" id="kontakt"> </div>
        </div>
        <div class="row content margintop">
            <h1>Kontakt</h1>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia quidem voluptates totam illo nulla! Aliquam at atque id minima nulla minus voluptates excepturi sequi molestias, ducimus illum voluptate corrupti eaque cupiditate aperiam ipsa eius, consequuntur, optio rem exercitationem iusto blanditiis nisi nesciunt ipsam. Nisi dignissimos officiis, eum, sint amet itaque perspiciatis harum, voluptates iure modi ipsa facilis laboriosam praesentium. Architecto vero corporis exercitationem iste non tenetur molestiae maiores sit placeat accusamus nostrum rem, ab ex enim quos officiis. Numquam soluta velit perferendis. Quisquam quod illo voluptates amet illum. Doloribus, dolor. Non repellendus incidunt itaque fuga illo quos, quia neque odit? Amet itaque placeat illo obcaecati non maiores fuga perferendis? Corrupti consectetur at ipsam quos. Maxime ipsam architecto voluptate quisquam neque consequuntur corrupti nesciunt perferendis tempore porro? Enim ullam soluta at tempore odit quibusdam pariatur aspernatur odio rem, non cumque, maxime natus fuga quidem veritatis vel mollitia facilis quos, asperiores sit saepe nisi! Nulla, cupiditate! Hic reiciendis dolor fuga quos voluptatibus. Perferendis, explicabo dolore perspiciatis ratione iusto placeat distinctio alias delectus quam sunt, suscipit eius dicta rerum quisquam, ea neque eligendi quibusdam. Expedita, nobis aspernatur culpa, delectus dolore eos eveniet molestias ducimus inventore ea laborum dolorum autem. Expedita dicta cupiditate laborum?
            <div class="row">
            <div class="col md">
                <form action="" method="post">
                    <h4><a href="#">Skontaktuj się z nami!</a></h4><br>
                    <input name="contact-name" type="text" placeholder="Nazwa" required><br>
                    <input name="contact-email" type="email" placeholder="Adres e-mail" required><br>
                    <input name="contact-topic" type="text" placeholder="Temat" required><br>
                    <textarea name="contact-message" required placeholder="Treść wiadomości"></textarea><br>
                    <button name="contact-message-submit" type="submit">Wyślij!</button><br>
                    Nasz numer telefonu: 505 312 626
                </form>
                <?php 
                    $name = $email = $topic = $message = "";

                    if(isset($_POST['contact-message-submit'])){
                        $to = "icecoldservice@o2.pl"; 
                        $from = $_POST['contact-email']; 
                        $name = $_POST['contact-name'];
                        $topic = $_POST['contact-topic'];
                        $message = $name . " napisał: " . "\n\n" . $_POST['contact-message'];

                        $headers = "From:" . $from;
                        $headers2 = "To:" . $to;
                        mail($to,$topic,$message,$headers);
                        mail($from,$topic,$message,$headers2); // sends a copy of the message to the sender
                        echo "Wysłano wiadomość. Dziękujemy " . $name . ", niebawem się skontaktujemy.";
                    }
                ?>
        </div>
        </div>
        
        <!--Stopka tutaj-->
        <footer>
            <hr class="przerwa">
            <div class="row">
                <div class="col-6 col-md-5 col-lg-4 footer_logo">
                    <a class="footer" href="http://opentechnologies.pl" target="_blank"><img src="images/logoopen.png"
                            class="_resimage"></a>
                </div>
                <div class="col-6 col-md-7 col-lg-8 footer_text">
                    <p>&copy; Ice Cold Service 2019 Paweł&nbsp;Albanowski, Adrian&nbsp;Ciborski, Szymon&nbsp;Głowacki,
                        Jakub&nbsp;Hemmerling, Mikołaj&nbsp;Marcińczak &&nbsp;Maciej&nbsp;Wieczorek</p>
                </div>
            </div>
        </footer>
    </div>

    <!--Te ponizej musza byc ostatnie-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="main.js"></script>
</body>

</html>
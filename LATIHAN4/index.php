
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../Css/bootstrap.min.css">
    <link rel="stylesheet" href="../Css/all.css">
</head>

<body>
<!-- Hello World !-->
    <nav class="Navbar bg-dark">
        <label for="" class="logo h1 text-light">X-B1</label>
        <ul class="ul">
            <li><a href="#" class="text-decoration-none text-light active">Home</a></li>
            <li><a href="#" class="text-decoration-none text-light">About</a></li>
            <li><a href="#" class="text-decoration-none text-light">Contact</a></li>
            <li><a href="#" class="text-decoration-none text-light">Service</a></li>
            <li><a href="#" class="text-decoration-none text-light">Feedback</a></li>
        </ul>
        <a class="fas fa-bars bars text-light h2 mt-4"></a>
        <a class=" fas fa-times times text-light h2 mt-4"></a>
    </nav>
    <section class="bg-dark p-2 mb-5">
        <div class="container-fluid">
            <h1 class="text-dark">hello qorld</h1>
            <div class="row">
                <div class="col-md-6">
                    <img src="../img/hacker.png" class="img-fluid d-none d-md-block" alt="" srcset="">

                </div>
                <div class="col-md-6">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <h1 class="card-title text-center fw-bold text-light">Login</h1>
                            <div class="form-group">
                                <form action="" method="post" aria-required="required">
                                    <label for="Name" class="form-label h2 text-light">Name</label>
                                    <input type="text" name="name" id="name" class="form-control mb-3">
                                    <label for="Password" class="form-label h2 text-light">Password</label>
                                    <input type="password" name="password" id="password" class="form-control mb-3">
                                    <button name="submit" class="btn btn-md btn-dark">Login</button>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="bg-secondary-p2">
        <div class="container-fluid">
            <h1 class="fw-bold text-dark h1">Hello World</h1>
            <br>
            <p class="lead text-dark">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio in sequi similique ipsa quidem quibusdam fugiat alias! Sit error magnam delectus incidunt reiciendis esse maiores. Vero porro exercitationem alias quia quidem nihil. Repellendus necessitatibus ducimus temporibus? Voluptas quidem ratione iure magnam vel harum optio mollitia, quisquam iusto accusantium inventore dolorem ipsum voluptatibus doloribus beatae pariatur repellendus enim dolores amet laborum voluptatem corporis? Sint voluptatem error, veritatis amet perferendis, molestias veniam eaque incidunt, assumenda placeat neque consequatur. Beatae laudantium repellat adipisci fugiat numquam itaque dolores deleniti dolorum animi vero sed omnis quo, molestias quaerat harum perferendis ea ab, eveniet velit autem.</p>
        </div>
    </section>
    <footer class="footer">
        <div class="container-fluid d-flex justify-content-evenly align-content-center">
            <a href="#" class="fab fa-instagram  fa-6x  text-primary "></a>
            <a href="#" class="fab fa-youtube text-danger fa-6x"></a>
            <a href="#" class="fab fa-facebook text-primary fa-6x"></a>
        </div>
        <div class="container-fluid bg-dark mt-4 border-4 border-top border-primary d-flex justify-content-center align-content-center text-light">

            <div class="text mt-2">
                <h4>Conpyright &copy; 2021 By <span class="text-info">Bilsy</span></h4>
                <br>
                <h4>Made with <span class="fab fa-php fa-2x"></span>
                    <span class="fab fa-js-square fa-2x"></span>
                    <span class="fab fa-css3-alt fa-2x"></span>
                    <span class="fab  fa-html5 fa-2x"></span>
                </h4>
            </div>



        </div>
    </footer>





    <script src="../Js/Jquery.js"></script>
    <script src="../Js/all.js"></script>
    <script src="js/app.js"></script>
    <script>
        $(document).ready(function() {
            $(".bars").click(function() {
                $(".bars").css("display", "none");
                $(".times").css("display", "block");
                $("ul").animate({
                    left: "0"
                }, 1000)
            })
            $(".times").click(function() {
                $(".times").css("display", "none");
                $(".bars").css("display", "block");
                $("ul").animate({
                    left: "-100%"
                }, 1000)
            })



        })
    </script>

</body>

</html>
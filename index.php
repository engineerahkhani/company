<!DOCTYPE html>
<html lang="fa">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="css/bootstrap.css" type="text/css" rel="stylesheet">
    <link href="css/styleSheet.css" type="text/css" rel="stylesheet">
    <link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="css/brand-colors.latest.min.css" type="text/css" rel="stylesheet">
    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.js"></script>
    <title>Company</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="jumbotron" id="landing-section">
            <div class="container text-center">
                <h1>فروشگاه کیف و کفش</h1>

                <h2>متناسب با همه سلیقه ها</h2>
            </div>
        </div>

        <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="420">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Logo</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Products</a></li>
                        <li><a href="#">Deals</a></li>
                        <li><a href="#">Stores</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class=""></span> Your Account</a></li>
                        <li><a href="#"><span class=" "></span> Cart</a></li>
                    </ul>
                </div>
            </div>
        </nav>
<!-- end nave-->

        <div id="carousel">
            <div class="row">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="img/2.jpg" alt="Chania">

                            <div class="carousel-caption">
                                <h3>Chania</h3>

                                <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/4.jpg" alt="Chania">

                            <div class="carousel-caption">
                                <h3>Chania</h3>

                                <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/7.jpg" alt="Flower">

                            <div class="carousel-caption">
                                <h3>Flowers</h3>

                                <p>Beatiful flowers in Kolymbari, Crete.</p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="img/1.jpg" alt="Flower">

                            <div class="carousel-caption">
                                <h3>Flowers</h3>

                                <p>Beatiful flowers in Kolymbari, Crete.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="fa fa-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="fa fa-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <br>

        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">BLACK FRIDAY DEAL</div>
                        <div class="panel-body"><img src="img/1.jpg" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">BLACK FRIDAY DEAL</div>
                        <div class="panel-body"><img src="img/2.jpg" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">BLACK FRIDAY DEAL</div>
                        <div class="panel-body"><img src="img/4.jpg" class="img-responsive"
                                                     style="width:100%" alt="Image"></div>
                        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>

        <footer class="container-fluid text-center">
            <p>Online Store Copyright</p>

            <form class="form-inline">Get deals:
                <input type="email" class="form-control" size="50" placeholder="Email Address">
                <button type="button" class="btn btn-danger">Sign Up</button>
            </form>
        </footer>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('.carousel').carousel({
            interval: 3000
        });
    });
</script>
</body>
</html>

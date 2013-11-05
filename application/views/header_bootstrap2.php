<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar-wrapper navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Vacation Rentals</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-star"></span> Top Destinations</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> About Us<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Company Details</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-right" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-asterisk"></span> Book Tickets</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-info-sign"></span> Reservation<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Cancel</a></li>
                            <li><a href="#">Confirm</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>

    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Best Vacation Rentals</h1>
            <p>Sed placerat fringilla quam et.</p>
            <p><a class="btn btn-primary btn-lg">Start Now!</a></p>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="#"><img class="img-responsive img-circle" src="application/imgs/img1.jpg"></a>
                <h3 class="text-center">Type 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean hendrerit quis augue sit amet mollis. Mauris id turpis diam. Ut pellentesque justo dolor, nec eleifend mauris euismod vitae. Morbi diam est, ornare non felis sit amet, elementum ultricies ante. Mauris id condimentum mauris. Nunc eleifend et enim eu sagittis. In congue, sapien nec vulputate pulvinar, tellus leo porttitor nibh, at rhoncus tellus lacus ac metus. Vestibulum pharetra scelerisque est sed tincidunt. Ut congue, quam a molestie luctus, quam orci congue erat, laoreet interdum lectus justo ac urna. Vestibulum eleifend tellus sit amet urna egestas tempus. Proin ac pretium nisi. Phasellus sit amet tincidunt magna, quis tincidunt sapien. Quisque quis pretium diam, ut consectetur ligula. Sed condimentum purus viverra auctor porta. Ut in bibendum velit. Curabitur eu leo mattis, pretium sapien sed, iaculis mauris.</p>
                <a href="#" class="btn btn-success">Book Now @ $599</a>
            </div>
            <div class="col-md-4">
                <a href="#"><img class="img-responsive img-circle" src="application/imgs/img2.jpg"></a>
                <h3 class="text-center">Type 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean hendrerit quis augue sit amet mollis. Mauris id turpis diam. Ut pellentesque justo dolor, nec eleifend mauris euismod vitae. Morbi diam est, ornare non felis sit amet, elementum ultricies ante. Mauris id condimentum mauris. Nunc eleifend et enim eu sagittis. In congue, sapien nec vulputate pulvinar, tellus leo porttitor nibh, at rhoncus tellus lacus ac metus. Vestibulum pharetra scelerisque est sed tincidunt. Ut congue, quam a molestie luctus, quam orci congue erat, laoreet interdum lectus justo ac urna. Vestibulum eleifend tellus sit amet urna egestas tempus. Proin ac pretium nisi. Phasellus sit amet tincidunt magna, quis tincidunt sapien. Quisque quis pretium diam, ut consectetur ligula. Sed condimentum purus viverra auctor porta. Ut in bibendum velit. Curabitur eu leo mattis, pretium sapien sed, iaculis mauris.</p>
                <a href="#" class="btn btn-danger">Book Now @ $899</a>
            </div>
            <div class="col-md-4">
                <a href="#"><img class="img-responsive img-circle" src="application/imgs/img3.jpg"></a>
                <h3 class="text-center">Type 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean hendrerit quis augue sit amet mollis. Mauris id turpis diam. Ut pellentesque justo dolor, nec eleifend mauris euismod vitae. Morbi diam est, ornare non felis sit amet, elementum ultricies ante. Mauris id condimentum mauris. Nunc eleifend et enim eu sagittis. In congue, sapien nec vulputate pulvinar, tellus leo porttitor nibh, at rhoncus tellus lacus ac metus. Vestibulum pharetra scelerisque est sed tincidunt. Ut congue, quam a molestie luctus, quam orci congue erat, laoreet interdum lectus justo ac urna. Vestibulum eleifend tellus sit amet urna egestas tempus. Proin ac pretium nisi. Phasellus sit amet tincidunt magna, quis tincidunt sapien. Quisque quis pretium diam, ut consectetur ligula. Sed condimentum purus viverra auctor porta. Ut in bibendum velit. Curabitur eu leo mattis, pretium sapien sed, iaculis mauris.</p>
                <a href="#" class="btn btn-info">Book Now @ $699</a>
            </div>
        </div>
    </div>

    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">&copy; 2013</div>
                <div class="col-md-4">
                    <ul class="nav nav-pills">
                        <li class="active"><a href="#">About Us</a></li>
                        <li><a href="#">Support 24x7</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3 class="text-right">Vacation Rentals</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

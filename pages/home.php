<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Day-20</title>
    <link rel="stylesheet" href="asset/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
        <a href="#" class="navbar-brand">Logo</a>
        <ul class="navbar-nav ml-auto">
<!--            <li class="nav-item"><a href="#" class="nav-link">Word Count</a></li>-->
            <li class="nav-item"><a href="action.php?pages=home" class="nav-link">Series</a></li>

        </ul>
    </div>
</nav>

<!--<section class="py-5">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-8 mx-auto  py-5">-->
<!--                <div class="card card-body">-->
<!--                    <form action="action.php" method="POST">-->
<!--                        <div class="form-group row">-->
<!--                            <label for="name" class="col-form-label col-md-4">Input </label>-->
<!--                            <div class="col-md-8">-->
<!--                                <input type="text" name="input-value" class="form-control">-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="form-group row">-->
<!--                            <label for="name" class="col-form-label col-md-4">Result View </label>-->
<!--                            <div class="col-md-8">-->
<!--                                <input type="text" class="form-control" value="--><?php //echo isset($result) ? $result : ''?><!--" readonly>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="form-group row">-->
<!--                            <label for="name" class="col-form-label col-md-4"> </label>-->
<!--                            <div class="col-md-8">-->
<!--                                <input type="submit" class="btn btn-outline-success btn-block" value="Get Result" name="btn">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<section class="py-5 bg-info">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card bg-transparent">
                    <div class="card-header bg-success">
                        <h4>series</h4>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="post">
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label"><i><b>Starting Number</b></i></label>
                                <div class="col-md-8">
                                    <input type="number" name="starting_number" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label"><i><b>Ending Number</b></i></label>
                                <div class="col-md-8">
                                    <input type="number" name="ending_number" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label"><i><b>Select</b></i></label>
                                <div class="col-md-8">
                                    <label for=""> <input type="radio" name="type" value="asc" > Low to high</label>
                                    <label for="">  <input type="radio" name="type" value="desc" >High to low</label>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Result</label>
                                <div class="col-md-8">
                                    <textarea class="form-control" rows="10">
                                        <?php echo isset($result) ? $result : ''; ?>
                                    </textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="btn" value="Check Result" class="btn btn-outline-dark btn-block">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="asset/js/jquery-3.6.0.min.js"></script>
<script src="asset/js/bootstrap.js"></script>
</body>
</html>
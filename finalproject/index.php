<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset ="UTF-8">
        <meta name = "viewport" content="width=device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content = "ie=edge">
        <link href="stylesheet" href="bootstrap.css">
        <title> Contact Us Form </title>
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="card">
                        <div class="car-title">
                            <h2 class="text-center py-2"> Contact Us </h2>
                            <hr>
                            <?php
                            $message = "";
                            if(isset($_GET['error']))
                            {
                                $message = "please fill in the blanks";
                                echo '<div class = "alert alert-danger">..</div>';
                            }
                            if(isset($_GET['success']))
                            {
                                $message = "Your Message has been Sent";
                                echo '<div class =  "alert alert-danger"> $message</div> ';
                            }
                            ?>
                        </div>
                        <div class="card-body">
                            <form action="process.php" method="post">
                                <input type="text" name="name" placeholder="name" class="form-control mb-2">
                                <input type="email" name="email" placeholder="email" class="form-control mb-2">
                                <input type="number" name="number" placeholder="number" class="form-control mb-2">
                                <textarea name="message" class="form-control" placeholder="message"></textarea>
                                <button class="btn btn-success" name="btn send"> Send message </button>
                                </form>
                            </div>
                        </div>     
                    </div>
                </div>
            </div>
            </body>
            </html>
            
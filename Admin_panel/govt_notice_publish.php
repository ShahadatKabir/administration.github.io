<?php
    include('start_session.php');
?>


<!doctype html>
<html lang="en">
  <head>
    <title>AP-Govt_notice_publish</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Displaying the project logo in Browser Tab-->
    <link rel="icon" type="image" href="../Frontend_images/gvtBD.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>

        <nav class="navbar navbar-expand-sm navbar-light pl-5" style="width: 100%; box-shadow: 0px 0px 7px lightgray;">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <div class="pt-3">
                        <a class="nav-link glyphicon glyphicon-home" href="./index.php"></a>
                    </div> 
                </li>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <li>
                    <p class="pt-3 pl-3 div_head">Upload a govt. notice / orders / circulars -</p>   
                </li>
            </ul>
        </nav>                 
   
        <style>
            .div_head
            {
                text-align : left;
                background : ;
                color : gray;
                font-size : 20px;
            }
        </style>

    <div class="container">
        <fieldset>
            <br>
            <legend style="font-size:1.6em"> Notice :- </legend>

            <div class="card" style="width: 100%; box-shadow: 0px 0px 7px lightgray;">
                <div class="card-body">

                    <form action="./Admin Database/notice_data.php" Method="POST">
                        <br><br><label for=""> Date *  &nbsp;&nbsp;&nbsp;</label>
                        <input type="date" name="date" placeholder="MM-DD-YY" required>

                        <br><br>

                        <table>
                            <tr>
                                <td>
                                    <h4>Title * </h4>
                                    <textarea name="title" rows="5" cols="65" placeholder=" Write the notice / orders / circulars" required></textarea>
                                </td>

                                <td>
                                    &nbsp;&nbsp;&nbsp; <h4> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Upload a pdf : &nbsp;&nbsp;&nbsp;</h4>

                                    <td class="pt-4">
                                        <input type="file" name="pdf_file" accept=".pdf">                             
                                    </td>   
                                </td>
                            </tr>
                        </table>
                        <br><br>

                        <hr>

                        <br>
                        <div class="" style="text-align:center;">
                            <input class="btn btn-info col-4" id="submit" type="submit" name="Submit" value="Post">
                        </div>
                        <br>
    
                    </form>

                </div>
            </div>

            <style>
                .card
                {
                    border-top : 3px;
                    border-top-style : solid; 
                    border-top-color : green;
                }
            </style>
        </fieldset>
    </div>
    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
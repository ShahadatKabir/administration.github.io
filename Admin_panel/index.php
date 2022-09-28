<?php
    include('start_session.php');        //Checking the user is loged in or not.
?>

<?php
    include('head.php');

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Index File</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="info">

    <table>
            <tr>
                <td>
                    <div class="card tex-black bg-light mb-4 mr-4" style="max-width: 18rem;">
                    <div class="card-header bg-dark text-light">Admin info</div>
                    <div class="card-body">
                        <h5 class="card-title">Selection</h5>
                        <p class="card-text">Admin will be selected officially by Bangladesh government. So he/she will be authintic.</p>
                    </div>
                    </div>
                </td>

                <td>
                    <div class="card text--black bg-light mb-4 mr-4" style="max-width: 18rem;">
                    <div class="card-header bg-dark text-light">Services</div>
                    <div class="card-body">
                        <h5 class="card-title">Govt. Services</h5>
                        <p class="card-text">Admin can approve or reject the applicant request who apply for a govt. service.</p>
                    </div>
                    </div>
                </td>

                <td>
                    <div class="card tex-black bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header bg-dark text-light">Complains</div>
                    <div class="card-body">
                        <h5 class="card-title">User Complains</h5>
                        <p class="card-text">User can complain about wrong things that is happening in their area.</p>
                    </div>
                    </div>
                </td>
            </tr>


            <tr>
                <td>
                    <div class="card tex-black bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header bg-dark text-light">Notice</div>
                    <div class="card-body">
                        <h5 class="card-title">Govt. Notice</h5>
                        <p class="card-text">Admin can publish a govt. notice from here. And it will be fully authentic.</p>
                    </div>
                    </div>
                </td>

                <td>
                    <div class="card text--black bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header bg-dark text-light">Members</div>
                    <div class="card-body">
                        <h5 class="card-title">User info</h5>
                        <p class="card-text">Admin can see users information. He/she can also delete their account if anything found wrong.</p>
                    </div>
                    </div>
                </td>

                <td>
                    <div class="card tex-black bg-light mb-3" style="max-width: 18rem;">
                    <div class="card-header bg-dark text-light">Login / Logout</div>
                    <div class="card-body">
                        <h5 class="card-title">Admin login / logout</h5>
                        <p class="card-text">Username and Password will be provided from govt. to an admin as he/she will be selected by govt.</p>
                    </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>



    <style>
        .info{
        margin: 20px;
        color: black;
        width: 80%;
        margin-left: 230px;
      }

      .info div{
        margin-bottom: 20px;         
      }

    </style>
      







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Displaying the project logo in Browser Tab-->
  <link rel="icon" type="image" href="./Frontend_images/gvtBD.png">

  <title>DPSA-Sign up</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/c28ce6a750.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
      <div class="row justify-content-md-center">
        <section class="col-lg-10  shadow mt-5 bg-body rounded">
          <div class="row p-4">
            <div class="col-lg-6">
              <div class="mt-3 offset-md-1">
                <h1 class="fw-bold">Sign Up</h1>
              </div>

              <form Action="./Database/signup.php" method="POST" class="pt-3 offset-md-1" enctype="multipart/form-data">
                <label class="col-12">
                  <input
                    type="text"
                    id="name"
                    class="inputcss"
                    name="name"
                    placeholder="Enter Your Name"
                    autoComplete="off"
                    required
                  />
                </label>

                <label class="col-12">
                  <input
                    type="email"
                    id="email"
                    class="inputcss"
                    name="email"
                    placeholder="Enter Your Email"
                    autoComplete="off"
                    required
                  />
                </label>

                <label class="col-12">
                  <input
                    type="nid"
                    id="nid"
                    class="inputcss"
                    name="nid"
                    placeholder="NID/Passport No."
                    autoComplete="off"
                    required
                  />
                </label>

                <label class="col-12">
                  <input
                    type="number"
                    id="phone"
                    class="inputcss"
                    name="mobile"
                    placeholder="Mobile Number"
                    autoComplete="off"
                    required
                  />
                </label>

                <label class="col-12">
                  <input
                    type="text"
                    id="password"
                    class="inputcss"
                    name="password"
                    placeholder="Password"
                    autoComplete="off"
                    required
                  />
                </label>           

                <div class="pb-5 pt-5">
                  <input
                    type="submit"
                    name="signup"
                    id="signup"
                    class="btn btn-info fw-bold"
                  />

                  <a class="p-4 text-decoration-none" href="User_login.php">I'm already registered.</a>
                </div>
              </form>
            </div>

            <div class="col-lg-6 align-self-center  d-none d-lg-block">
              <img src="./Frontend_images/signup.png" class="img-fluid" alt="logo"
                width={"800px"} alt="">
            </div>
          </div>
        </section>
      </div>
    </div><br>
  
</body>
</html>


<style>
  .inputcss {
    width: 100%;
    padding: 12px 20px;
    margin: 5px;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid rgb(204, 201, 201);
    outline: none;
  }
  .inputcss:hover {
    border-bottom: 2px solid rgba(248, 36, 7, 0.945);
    transition: 0.5s;
  }
</style>
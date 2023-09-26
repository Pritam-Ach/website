<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="index.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login page</title>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <form class="p-5 rounded shadow" style="max-width: 70rem; width:fit-content"
                     method="POST"
                     action="php/auth.php">
       
       

                    











        <h1 class="text-center ">Login</h1>   
       <?php if (isset($_GET['error'])){ ?>
       
       <div class="alert alert-danger" role="alert">
        <?=htmlspecialchars($_GET['error']);?>
       </div>
       <?php } ?>
       
        <div class="mb-3">
                <label for="exampleInputEmail1"
                        class="form-label">Email address</label>
                <input type="email" 
                        class="form-control" 
                        name="email"
                        id="exampleInputEmail1" 
                        aria-describedby="emailHelp">

                
            </div>


            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password"
                class="form-control"
                name="password"
                id="exampleInputPassword1">
            </div>
            <center>
            <button type="submit" 
            class="btn btn-primary">
            login</button>
            <a href="home.php">Store</a>
            </center>
            
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
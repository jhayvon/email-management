<?php

include "conn.php";

if(isset($_POST['submit'])){
    $code = $_POST["code"];
    // prepare and bind
    $stmt = $conn->prepare("SELECT firstname, lastname, status, password, email FROM accounts WHERE code=?");
    $stmt->bind_param("s", $code);
    $stmt->execute();
    $result = $stmt->get_result();
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }

        .index-btn {
            width: 300px;
        }

        .logo {
            height: 130px;
        }

        .code {
            height: 76px;
            width: 450px;
            position: relative;
        }

        .code h4 {
            position: absolute;
            top: 20px;
            left: 10px;
        }

        .code i {
            position: absolute;
            top: 26px;
            left: 400px;
        }

        @media only screen and (max-width: 578px) {
            .logo {
                height: 76px;
            }
            .name h1 {
                font-size: .9rem;
                font-weight: 800;
            }
            .name h5 {
                font-size: .8rem;
            }
        }
        img {
            height: 100px;
        }
    </style>
</head>

<body>
    <!-- As a link -->
    <nav class="navbar bg-light">
        <div class="container-fluid d-flex justify-content-start ">
            <img src="pic/logo1.png" alt="">
            <a class="navbar-brand mx-3" href="#">DEPED LAGUNA</a>
        </div>
    </nav>
    <div class="container">

        <main>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-floating my-3 text-center">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Code" name="code">
                    <label for="floatingInput">Code</label>
                </div>
                <div class="m-3 d-flex justify-content-center d-flex justify-content-between">
                    <a href="index.php" class="btn btn-primary btn-lg">back</a>
                    <button type="submit" class="btn btn-primary btn-lg" name="submit">Submit</button>
                </div>
            </form>
        </main>
        <table class="table mt-5 text-center">
            <thead >
                <th>name</th>
                <th>email</th>
                <th>password</th>
                <th>status</th>
            </thead>
            <tbody>
                <?php if (isset($_POST["submit"])) { ?>
                <?php if ($result->num_rows > 0) { ?>
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <?php echo "<td>".$row["firstname"]. " ".$row["lastname"]."</td>"?>
                        <?php echo "<td>".$row["email"]."</td>"?>
                        <?php echo "<td>".$row["password"]."</td>"?>
                        <?php echo "<td>".$row["status"]."</td>"?>
                    <?php } ?>
                <?php }?>
                <?php } ?>
                
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>
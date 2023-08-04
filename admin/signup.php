<?php include "../includes/server.php"; ?>
<!DOCTYPE html>
<html lang="en">

<?php include "includes/header.php";?>

<body>
    <div class="containers m-auto ">


        <form  method="post" class="container " enctype = "multipart/form-data">
            <div class="header">
                <p>Create an admin account</p>
            </div>
            <?php include "admin_error.php"; ?>
            <div class=" input_group">
                <label for="exampleInputEmail1" class="form-label">First Name</label>
                <input type="text" class="form-control" name = "first_name">
            </div>
            <div class=" input_group">
                <label for="" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="" name="last_name">
            </div>
             <div class=" input_group">
                <label for="" class="form-label">Username</label>
                <input type="text" class="form-control" id name="username">
           
            <div class="input_group">
                <label for="" class="form-label">Email</label>
                <input type="email" class="form-control" id="" name="email">
            </div>
            </div><div class=" input_group">
                <label for="" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="" name="phone_number">
            </div>
             <div class=" input_group">
                <label for="" class="form-label">Image</label>
                <input type="file" class="form-control" id="" name="admin_image"> 
 </div>
            <div class="    input_group">
                <label for="" class="form-label">Password</label>
                <input type="password" class="form-control" id="" name="password">
            </div>
            <div class="mb-4    input_group">
                <label for="" class="form-label">Confirm password</label>
                <input type="password" class="form-control" id="" name="confirm_password">
            </div>
            <div class=" input_group">
                <label for="" class="form-label">Password</label> 
                <!-- \\<input type="submit" class="form-control" value="Create account" id="btn" name="signup"> -->
            <button type="submit" class="form-control" id="btn" name="submit">Create Account</button>

            </div>

        </form>
    </div>
</body>
<script src="./assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>


</html>
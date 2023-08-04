<?php include "../includes/server.php"; ?>

<!DOCTYPE html>
<html lang="en">
<?php include "includes/header.php"; ?> 
<style>
    .containers{
        margin-top:150px;
    }
</style>
<div class = "containers bg-dager">
<form class="container "  method = "POST" enctype = "multipart/form-data">
            <div class="header">
                <p>Login into the Admin Dashboard</p>
            </div>
            <?php include "admin_error.php"; ?>
            <div class=" input_group">
                <label for="" class="form-label">Username</label>
                <input type="text" class="form-control" id name="username">
            </div>
            
            <div class="    input_group">
                <label for="" class="form-label">Password</label>
                <input type="password" class="form-control" id="" name="password">
            </div>
            
            <div class=" input_group">
                <!-- <label for="" class="form-label">Password</label> -->
                <input type="submit" class="form-control" value="Login" id="btn" name="login">
            </div>

            <!-- <button type="submit" class="btn btn-primary" name="submit">Submit</button> -->
        </form>
    </div>
</body>
<script src="./assets/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
</html>
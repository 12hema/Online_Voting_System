<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body class="bg-dark">
    <h1 class="text-success text-center p-3">Voting System</h1>
    <div class="bg-success py-5">
        <h2 class="text-center p-2">Login</h2>
        <div class="container text-center">
            <form action="./actions/login.php" method="POST">
                <div class="mb-3">
                    <input type="text" name="username" class="form-control w-50 m-auto" placeholder="Enter your username" required="required">
                </div>
                <div class="mb-3">
                    <input type="text" name="mobile" class="form-control w-50 m-auto" placeholder="Enter your mobile number" required="required" maxlength="10" minlength="10">
                </div>
                <div class="mb-3">
                    <input type="password" name="password" class="form-control w-50 m-auto" placeholder="Enter your password" required="required">
                </div>
                <div class="mb-3">
                    <select name="std" class="form-select w-50 m-auto">
                        <option value="group">Group</option>
                        <option value="voter">Voter</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-dark my-4">Login</button>
                <p>Dont't have an account? <a href="./part1/registration.php" class="text-white"> Register Here</a></p>
                <p>Admin <a href="admin.php" class="text-white"> Login Here</a></p>

            </form>
        </div>
    </div>
    
</body>
</html>
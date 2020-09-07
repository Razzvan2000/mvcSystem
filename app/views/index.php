<html>
<head>
<title>Users List</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>



<div class="col-xs-8 col-xs-offset-2">
    <table class="table table-stripped">
        <thead>
            <tr><th colspan="5">USERS LIST</th></tr>
        </thead>
        <tbody>
            <?php
            // print_r($data['users']);die();
            foreach ($data['users'] as $user) {
                echo "<tr><td> " . $user->Firstname . "</td><td>" . $user->Lastname . "</td><td>" . $user->Username . "</td><td>" . $user->Email . "</td><td>" . $user->Created . "</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>


<div class="col-xs-12 text-center">
    <a class="btn btn-md btn-success" href="Pages/addUser">ADD USER</a>
</div>



</body>
</html>

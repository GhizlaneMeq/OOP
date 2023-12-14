<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../../assests/css/dashboard.css">
</head>

<body>
    <div class="container">
        <?php include '../includes/navbar.php' ?>
        <div class="main active">
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent Orders</h2>
                        <a href="add.php" class="btn">Add New</a>
                    </div>

                    <table>
                        <thead>
                            <th>
                                <td>ID</td>
                                <td>name</td>
                                <td>capacité</td>
                                <td>status</td>
                                <td>nombre</td>
                                <td>prix</td>
                                <td>type</td>
                                <td>Image</td>
                                <td>Action</td>
                            </th>
                        </thead>

                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
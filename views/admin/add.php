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
        <div class="containerr">
        <div class="main active">
        <div class="mainn">
            <div class="topbar">
                <h2>Add New Room</h2>

            </div>

            <div class="form-container">
                <form action="../../controllers/admin/add.php" method="POST" enctype="multipart/form-data">
                    <label for="image">Room Image:</label>
                    <input type="file" name="image" id="image" required>
                    
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" required>

                    <label for="nombre">nombre</label>
                    <input type="text" name="nombre" id="nombre" required>

                    <label for="status">status</label>
                    <input type="text" name="status" id="status" required>
                    <label for="prix">prix</label>
                    <input type="text" name="prix" id="prix" required>
                    <label for="type">type</label>
                    <input type="text" name="type" id="type" required>

                    <label for="capacite">capacite:</label>
                    <select name="capacite" id="capacite" required>
                        <option value="reserved">reserved</option>
                        <option value="not reserved">Not reserved</option>
                    </select>

                    <button type="submit" class="btn">Add Room</button>
                </form>
            </div>
        </div>
    </div>
        </div>
    </div>
</body>

</html>
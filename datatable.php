<?php include('assets/connect.php')

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
    <script src="assets/js/jquery-3.5.1.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.buttons.min.js"></script>
    <script src="assets/js/jszip.min.js"></script>
    <script src="assets/js/pdfmake.min.js"></script>
    <script src="assets/js/vfs_fonts.js"></script>
    <script src="assets/js/buttons.html5.min.js"></script>
    <script src="assets/js/buttons.print.min.js"></script>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th tr {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    </body>
    <title>Datatables</title>
</head>

<body>

    <div class="container">
        <table id="example">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start_date</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;
                $sql = $db->query("SELECT * FROM users");
                while ($row = mysqli_fetch_array($sql)) {
                ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['position'] ?></td>
                        <td><?= $row['office'] ?></td>
                        <td><?= $row['age'] ?></td>
                        <td><?= $row['start_date'] ?></td>
                        <td><?= $row['salary'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script>
        $('document').ready(function() {
            $('#example').DataTable({
                dom: 'Blfrtip'
            });
        });
    </script>
</body>

</html>
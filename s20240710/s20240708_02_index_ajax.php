<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>

    </style>
</head>

<body>
    <div class="container mt-3">
        <h2>Bordered Table</h2>
        <p>The .table-bordered class adds borders on all sides of the table and the cells:</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>mobile</th>
                    <th>rank</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>id</td>
                    <td>name</td>
                    <td>mobile</td>
                    <td>rank</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- js or jqery -->
    <script>
        $(document).ready(function() {
            url = './data_ajax.php';
            $.ajax({
                type: "get",
                url: url,
                // data: "data",
                dataType: "json",
                success: function(res) {
                    // console.log('res', res);
                    // let data = JSON.parse(res);
                    
                    let data = res;
                    console.log('data', data);
                }
            });

        });
        // jquery end
    </script>
</body>

</html>
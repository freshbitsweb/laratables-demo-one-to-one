<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>One-To-One Relationship LaraTable</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
</head>
<body>

@yield('content')

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#one-to-one-lara-table-table").DataTable({
                serverSide: true,
                ajax: "{{ route('oneToOne') }}",
                columns: [
                    { name: 'first_name' },
                    { name: 'last_name' },
                    { name: 'start_date' },
                    { name: 'salary' },
                    { name: 'country.name', orderable: false, searchable: false},//Relation.columnName
                ],
            });
        });
    </script>
</body>
</html>
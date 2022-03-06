<!DOCTYPE html>
<html>
<head>
    <title>Hi</title>
</head>
<body>
<table class="table table-bordered mb-5">
                <thead>
                    <tr class="table-danger">
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">DOB</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $datas){ ?>
                    <tr>
                        <th scope="row">{{ $datas->id }}</th>
                        <td>{{ $datas->name }}</td>
                        <td>{{ $datas->email }}</td>
                        <td>{{ $datas->phone_number }}</td>
                        <td>{{ $datas->dob }}</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
</body>
</html>


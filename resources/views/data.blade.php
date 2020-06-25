<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>School</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <h3 align="center"> Student Data<h3>
            <br>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Registor_number</th>
                    <th>Name</th>
                    <th>Mark</th>
                    <th>Grade</th>
                    <th>Class</th>
                </tr>
                @foreach($datas  as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                       <td> {{$data->reg_no}} </td>
                       <td> {{$data->name}} </td>
                        <td>{{$data->mark}}</td>
                        <td>{{$data->grade}}</td>
                        <td>{{$data->class}}</td>
                    </tr>
                @endforeach
            </table>
            <a href="/" class="btn btn-primary">BACK</a>
        </div>

    </div>
    </div>
</body>
</html>

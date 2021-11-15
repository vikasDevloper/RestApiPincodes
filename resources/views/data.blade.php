<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Laravel Pagination Demo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">
            <table class="table table-bordered mb-5">
                <thead>
                    <tr class="table-success">
                        <th scope="col">#</th>
                        <th scope="col">Office Name</th>
                        <th scope="col">Pincode</th>
                        <th scope="col">Office Type</th>
                        <th scope="col">Delivery Status</th>
                        <th scope="col">Division Name</th>
                        <th scope="col">Region Status</th>
                        <th scope="col">Circle Status</th>
                        <th scope="col">Taluk</th>
                        <th scope="col">District Name</th>
                        <th scope="col">State Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pincodes as $data)
                    <tr>
                    
                        <th scope="row">{{ $data->id }}</th>
                        <td>{{ $data->officename }}</td>
                        <td>{{ $data->pincode }}</td>
                        <td>{{ $data->officeType }}</td>
                        <td>{{ $data->Deliverystatus }}</td>
                        <td>{{ $data->divisionname }}</td>
                        <td>{{ $data->regionname }}</td>
                        <td>{{ $data->circlename }}</td>
                        <td>{{ $data->Taluk }}</td>
                        <td>{{ $data->Districtname }}</td>
                        <td>{{ $data->statename }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
    {!! $pincodes->links() !!}
</div>
        </div>
    </body>
</html>
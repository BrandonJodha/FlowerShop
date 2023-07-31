<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>

    <style>
        table {
            width: 95%;
            border-collapse: collapse;
            margin: 50px auto;
        }

        /* Zebra striping */
        tr:nth-of-type(odd) {
            background: #eee;
        }

        th {
            background: #3498db;
            color: white;
            font-weight: bold;
        }

        td,
        th {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
            font-size: 18px;
        }


    </style>

</head>

<body>

    <div style="width: 95%; margin: 0 auto;">
        <div style="width: 10%; float:left; margin-right: 20px;">
            <img src="{{ public_path('assets/images/logo.png') }}" width="100%"  alt="">
        </div>
        <div style="width: 50%; float: left;">
            <h1>All User Details</h1>
        </div>
    </div>

    <table style="position: relative; top: 50px;">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Roses</th>
                <th scope="col">Lilies</th>
                <th scope="col">Orchids</th>
                <th scope="col">Tulips</th>
                <th scope="col">Daffodils</th>
                <th scope="col">Delivery Address</th>
                <th scope="col">Delivery Date</th>
                <th scope="col">Date Created</th>
            </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
                <tr>
                    <th scope="row">{{$order->id}}</th>
                    <td>{{$order->rose_count}}</td>
                    <td>{{$order->lily_count}}</td>
                    <td>{{$order->orchid_count}}</td>
                    <td>{{$order->tulip_count}}</td>
                    <td>{{$order->daffodil_count}}</td>
                    <td>{{$order->delivery_address}}</td>
                    <td>{{$order->delivery_date}}</td>
                    <td>{{$order->created_at}}</td>
                </tr>
                @endforeach
        </tbody>
    </table>

</body>

</html>
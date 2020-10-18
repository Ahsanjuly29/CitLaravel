<!DOCTYPE html>
<html>
<head>
    <style>
        body{
            margin:0px;
            margin-top:35px;
        }
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #bbb;
        }
    </style>
</head>
<body>
<center>
    <img style='width:80px; margin:auto;' src="https://2.bp.blogspot.com/-LGDs96H28_I/XS3q1Z49FPI/AAAAAAAAABw/7XbypZuan1sCfXduJWzmX4RkYxwRUhwEgCK4BGAYYCw/s113/ae.png" alt="">
    <h2 style='font-size:50px; margin:15px 0px'>Invoice</h2>

    <table>
        <tr>
            <th>product Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total amount</th>
            <th>x</th>
            <th>y</th>
        </tr>
        @php
            $grand_total = 0;
        @endphp
        @foreach($billing as $item)
            <tr>
                <td>{{$item->product->product_name}}</td>
                <td>{{$item->product_quantity}}</td>
                <td>৳ {{$item->product_price}}</td>
                <td>৳ {{$item->product_quantity * $item->product_price}}</td>
                <td>0</td>
                <td>0</td>
            </tr>
            @php
                $grand_total += $item->product_price * $item->product_quantity;
            @endphp
        @endforeach
        <h4 style="text-align:justify;">Grand Total:
            <span>৳ {{$grand_total}}</span>
        </h4>
    </table>
</center>
</body>
</html>

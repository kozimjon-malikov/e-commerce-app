<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
</head>

<body>
    <div class="col-md-12">
        <h2>Name:{{ $orders->name }}</h2>
        <h2>Email:{{ $orders->email }}</h2>
        <h2>Phone:{{ $orders->phone }}</h2>
        <h2>Address:{{ $orders->address }}</h2>
        <h2>Product:{{ $orders->product_title }}</h2>
        <h2>Quantity:{{ $orders->quantity }}</h2>
        <h2>Price:{{ $orders->price }}</h2>
        <h2>Product_id:{{ $orders->product_id}}</h2>
        <h2>Status:{{ $orders->payment_status}}</h2>
        <h2>Product image: <img src="product/{{ $orders->image }}" width="300px" alt=""></h2>
    </div>
</body>

</html>

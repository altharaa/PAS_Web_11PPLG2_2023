@extends('layouts.main')

@section('container')
    <h1 style="text-align: center;">Sell</h1>
    <table style="width: 80%; margin: auto; border-collapse: collapse; border-spacing: 0; font-size: 18px; text-align: left;">
        <thead>
            <tr style="background-color: #f2f2f2; border-top: 1px solid #dddddd; border-bottom: 1px solid #dddddd;">
                <th scope="col" style="padding: 15px; border: 1px solid #dddddd;">No</th>
                <th scope="col" style="padding: 15px; border: 1px solid #dddddd;">Buyer</th>
                <th scope="col" style="padding: 15px; border: 1px solid #dddddd;">Title</th>
                <th scope="col" style="padding: 15px; border: 1px solid #dddddd;">Price</th>
                <th scope="col" style="padding: 15px; border: 1px solid #dddddd;">Quantity</th>
                <th scope="col" style="padding: 15px; border: 1px solid #dddddd;">Total Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sells as $sell)
                <tr style="border-top: 1px solid #dddddd; border-bottom: 1px solid #dddddd;">
                    <th scope="row" style="padding: 15px; border: 1px solid #dddddd;">{{$loop->iteration}}</th>
                    <td style="padding: 15px; border: 1px solid #dddddd;">{{$sell["buyer"]}}</td>
                    <td style="padding: 15px; border: 1px solid #dddddd;">{{$sell["books_name"]}}</td>
                    <td style="padding: 15px; border: 1px solid #dddddd;">{{$sell["books_price"]}}</td>
                    <td style="padding: 15px; border: 1px solid #dddddd;">{{$sell["quantity"]}}</td>
                    <td style="padding: 15px; border: 1px solid #dddddd;">{{$sell["total_price"]}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
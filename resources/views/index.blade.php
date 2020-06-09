<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


    <script src="/pagination.js"></script>
</head>
<body>
    <div class="contatiner">
        <div class="row">
            <div class="col">
                <table class="table" id="t1">
                {{--@foreach($orders as $order)
                    <tr>
                        <td>{{$order["order_id"]}}</td>
                        <td>{{$order["summ"]}} {{$order["currency"]}}</td>
                    </tr>
                @endforeach--}}
                </table>
            </div>
        </div>
            <ul class="pagination">
                <li class="page-item" id="prev"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item" id="next"><a class="page-link" href="#">Next</a></li>
            </ul>
</div>
</body>
</html>

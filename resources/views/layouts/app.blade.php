<html>
<head>
    <title>Mein erstes Laravel Tool</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet'
          type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <style>
        div {
            border: 1px solid black;
        }
    </style>

</head>
<body>
<h1>Hallo Ivan Gartsev</h1>
<div class="container">
    <div class="row">
        @yield('projects')
    </div>
</div>


<table border="1" class="table table-striped">
    <thead>
    <tr>
        <th colspan="2">Stunden</th>
        <th>Montag<br>Datum</th>
        <th>Dienstag<br>Datum</th>
        <th>Mittwoch<br>Datum</th>
        <th>Donnerstag<br>Datum</th>
        <th>Freitag<br>Datum</th>
    </tr>
    </thead>
    <tbody>
    @for($i=1; $i<9; $i++)
        <tr>
            <td rowspan="">{{$i}}</td>
            <td>Bearbeiter</td>
            @for ($ii=0; $ii<5; $ii++)
                <td></td>
            @endfor
        </tr>
    @endfor
    </tbody>
</table>
</body>
</html>

@extends('layouts.master')


@section('content')
<br>

<h4 class="text-uppercase text-strong">NEGARA ASEAN</h4>

<div class="row">

    <div class="col-sm-4">

    <br>
    <br>

    <table class="table table-sm table-striped">
    <thead class="thead-dark">
    <tr>
    <th  scope="col">Negara</th>
    <th class="text-center"">Positif</th>
    <th class="text-center">Meninggal</th>
    <th class="text-center">Sembuh</th>

    </tr>
    </thead>
    <tbody>

    @php

    $no = 0;

    @endphp

    @foreach($negara as $d)

    @php

    $no++;

    @endphp

    <tr>
    <td><a href="/country/{{$d['Country_Region']}}" >{{$d['Country_Region']}}</a></td>
    <td class="text-center">{{$d['Confirmed']}}</td>
    <td class="text-center">{{$d['Deaths']}}</td>
    <td class="text-center">{{$d['Recovered']}}</td>
    </tr>

    @endforeach

    </tbody>
    </table>







    </div>

    <div class="col-sm-8">

    <div id="app">
            {!! $chart->container() !!}

    </div>

    <br>

    <div class="text-center">
    <div class="btn-group" role="group" aria-label="Basic example">
        <a href="/asean/confirmed" class="btn btn-warning btn-sm">Confirmed</a>
        <a href="/asean/deaths" class="btn btn-danger btn-sm">Deaths</a>
        <a href="/asean/recovered" class="btn btn-success btn-sm">Recovered</a>
    </div>
</div>	
    
    
    </div>
</div>
    
    

    


<hr>

	

<br>
<br>

{!! $chart->script() !!}

@stop

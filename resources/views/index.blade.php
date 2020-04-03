@extends('layouts.master')



@section('content')

<br>


<h2>STATISTIK COVID-19   
</h2>


<livewire:world-stats>



<table class="table table-sm table-striped">
    <thead class="thead-dark">
    <tr>
    <th scope="col">#</th>
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

    @foreach($data as $d)

    @php

    $no++;

    @endphp

    <tr>
    <th scope="row">{{$no}}</th>
    <td><a href="/country/{{$d['attributes']['Country_Region']}}" >{{$d['attributes']['Country_Region']}}</a></td>
    <td class="text-center">{{$d['attributes']['Confirmed']}}</td>
    <td class="text-center">{{$d['attributes']['Deaths']}}</td>
    <td class="text-center">{{$d['attributes']['Recovered']}}</td>
    </tr>

    @endforeach

    </tbody>
    </table>









<hr>

    



@stop








                       

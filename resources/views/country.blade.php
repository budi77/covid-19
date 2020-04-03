
@extends('layouts.master')


@section('content')

<div>
<br>
<h4>BERDASARKAN NEGARA</h4>
<br>
<form action="{{route('search')}}" method="post" class="form-inline my-2 my-lg-0">

    @csrf
     

      <select class="form-control mr-sm-2 form-control-sm" id="exampleSelect1" name="country">
        @foreach($negara_sorted as $d )
        <option value="{{$d['Country_Region']}}">{{$d['Country_Region']}}</option>
        @endforeach
      </select>
      <button class="btn btn-success btn-sm my-2 my-sm-0" type="submit">Lihat</button>
    

    </form>
</div>
<br>

<h4 class="text-uppercase text-center">{{$country}}</h4>
    
    

    <div id="app">
            {!! $chart->container() !!}
        </div>

        <div class="row mt-6">
											<div class="col text-center">
												<h5 class="font-weight-normal mt-2">KES HARI INI</h5>
												<h3 class="text-xxl mb-1 social-content  number-font text-info"> {{$todayCases}}</h3>
												<p class="mb-0 text-muted"><span class="text-lg font-weight-700"></span>ORANG</p>
												
											</div>
											<div class="col text-center">
												<h5 class="font-weight-normal mt-2">MENINGGAL HARI INI</h5>
												<h3 class="text-xxl mb-1 social-content danger number-font text-info"> {{$todayDeaths}}</h3>
												<p class="mb-0 text-muted"><span class="text-lg font-weight-700"></span>ORANG</p>
												
											</div>
											<div class="col text-center">
												<h5 class="font-weight-normal mt-2">AKTIF</h5>
												<h3 class="text-xxl mb-1 social-content  number-font text-info"> {{$active}}</h3>
												<p class="mb-0 text-muted"><span class="text-lg font-weight-700"></span>ORANG</p>
											
											</div>

                      <div class="col text-center">
												<h5 class="font-weight-normal mt-2">KRITIKAL</h5>
												<h3 class="text-xxl mb-1 social-content  number-font text-info"> {{$critical}}</h3>
												<p class="mb-0 text-muted"><span class="text-lg font-weight-700"></span>ORANG</p>
											
											</div>
											<!-- <div class="chart-wrapper">
											<canvas id="deals" class="chart-dropshadow-success chartjs-render-monitor" hidden="" height="113" style="display: block; height: 84px; width: 0px;" width="0"></canvas>
										</div> -->
										</div>

<br>



<table class="table table-sm table-striped">
  <thead class="thead-dark">
    <tr>
      <th class="text-center" scope="col">Tarikh</th>
      <th class="text-center" scope="col">Positif</th>
      <th class="text-center" scope="col">Sembuh</th>
      <th class="text-center" scope="col">Meninggal</th>

    </tr>
  </thead>
  <tbody>


  @foreach($cntry as $c)

    <tr>
      <td class="text-center">{{$c['date']}}</td>
      <td class="text-center">{{$c['confirmed']}}</td>
      <td class="text-center">{{$c['recovered']}}</td>
      <td class="text-center">{{$c['deaths']}}</td>
    </tr>

@endforeach
    
  </tbody>
</table>


<hr>

{!! $chart->script() !!}


@stop
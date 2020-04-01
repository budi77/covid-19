@extends('layouts.master')



@section('content')

<br>


<h2>STATISTIK COVID-19   
</h2>
<small class="text-muted">* Sumber Data : JHU </small>
<div class="row pt-6">
							
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
								<div class="card bg-warning img-card box-primary-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL POSITIF</p>
												<h2 class="mb-0 number-font">{{$data1['value']}}</h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
								<div class="card bg-success img-card box-secondary-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL SEMBUH</p>
												<h2 class="mb-0 number-font">{{$data2['value']}}</h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
								<div class="card  bg-danger img-card box-success-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL MENINGGAL</p>
												<h2 class="mb-0 number-font">{{$data3['value']}}</h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>


<br>


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








                       

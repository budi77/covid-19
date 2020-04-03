<div>


<div class="row mb-3">
                <div class="col-xl-4 col-sm-6 py-2">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body bg-success">
                            <div class="rotate">
                                <i class="fa fa-user-plus fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase"># Positif</h6>
                            <h3 class="display-6">{{$stats['total_cases']}}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 py-2">
                    <div class="card text-white bg-info h-100">
                        <div class="card-body bg-info">
                            <div class="rotate">
                                <i class="fa fa-child fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase"># Sembuh</h6>
                            <h3 class="display-6">{{$stats['recovery_cases']}}</h3>
							<h5 class="display-6">({{$stats['closed_cases_recovered_percentage']}} %)</h5>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 py-2">
                    <div class="card text-white bg-danger h-100">
                        <div class="card-body bg-danger">
                            <div class="rotate">
                                <i class="fa fa-frown-o fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase"># Meninggal</h6>
                            <h3 class="display-6">{{$stats['death_cases']}}</h3>
							<h5 class="display-6">({{$stats['closed_cases_death_percentage']}} %)</h5>

                        </div>
                    </div>
                </div>
               
            </div>



			<div class="row mb-3">

			<div class="col-xl-4 col-sm-6 py-2">
                    <div class="card text-white bg-info h-100">
                        <div class="card-body bg-info">
                            <div class="rotate">
                                <i class="fa fa-bed fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase"># Dalam Rawatan</h6>
                            <h3 class="display-6">{{$stats['currently_infected']}}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 py-2">
                    <div class="card bg-warning text-white h-100">
                        <div class="card-body bg-warning">
                            <div class="rotate">
                                <i class="fa fa-thermometer fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase"># Sakit Ringan</h6>
                            <h3 class="display-6">{{$stats['mild_condition_active_cases']}}</h3>
							<h5 class="display-6">({{$stats['active_cases_mild_percentage']}} %)</h5>

                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 py-2">
                    <div class="card text-white bg-danger h-100">
                        <div class="card-body bg-danger">
                            <div class="rotate">
                                <i class="fa fa-heartbeat fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase"># Kritikal</h6>
                            <h3 class="display-6">{{$stats['critical_condition_active_cases']}}</h3>
							<h5 class="display-6">({{$stats['active_cases_critical_percentage']}} %)</h5>

                        </div>
                    </div>
                </div>
                
                <!-- <div class="col-xl-3 col-sm-6 py-2">
                    <div class="card text-white bg-warning h-100">
                        <div class="card-body">
                            <div class="rotate">
                                <i class="fa fa-share fa-4x"></i>
                            </div>
                            <h6 class="text-uppercase"># Dalam Rawatan</h6>
                            <h3 class="display-6">36</h3>
                        </div>
                    </div>
                </div> -->
				<small class="text-muted pull-right">* Sumber Data : https://corona-virus-stats.herokuapp.com/    Kemaskini : {{$stats['last_update']}} </small>

            </div>




<!-- <div class="row pt-6">
							
                            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
								<div class="card bg-warning img-card box-primary-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL POSITIF</p>
												<h2 class="mb-0 number-font">{{$totalpositif}}</h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
								<div class="card bg-success img-card box-secondary-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL SEMBUH</p>
												<h2 class="mb-0 number-font">{{$totalsembuh}}</h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
								<div class="card  bg-danger img-card box-success-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL MENINGGAL</p>
												<h2 class="mb-0 number-font">{{$totalmeninggal}}</h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							
						</div>


<br> -->


</div>

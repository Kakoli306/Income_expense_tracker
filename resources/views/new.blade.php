@extends('layouts.app')

@section('content')
<section class="card">


						<div class="card-body">
							<div class="invoice">
								<header class="clearfix">
									<div class="row">
										<div class="col-sm-6">
											<div class="ib">
												<img src="{{asset('images/')}}/invoice-logo.png" alt="OKLER Themes" />
											</div>

											<h2 class="h2 mt-0 mb-1 text-dark font-weight-bold">INVOICE</h2>
										</div>
										<div class="col-sm-6 text-right">
											<address class="ib mr-5">
												BFIN SASU(HQ)Montpellier France
												<br/>
												BFIN LTD (UK) England & Wales
												<br/>
												BFIN SASU* Dhaka Bangladesh Office
												<br/>
												Bangladesh office: BFIN SASU(HQ) -
												RES N 5352217731
												<br/>
												Phone: +0033666100010
												<br/>
												bfinsasu@gmail.com
											</address>
												</div>
									</div>
								</header>
								<div class="bill-info">
									<div class="row">
										<div class="col-md-6">
													</div>
										<div class="col-md-6">
											<div class="bill-data text-right">
																</div>
										</div>
									</div>
								</div>
							
								<table class="table table-responsive-md invoice-items">
									<thead>
										<tr class="text-dark">
											<th id="cell-id"     class="font-weight-semibold">#</th>
											<th id="cell-item"   class="font-weight-semibold">Date</th>
											<th id="cell-desc"   class="font-weight-semibold">Description</th>
											<th id="cell-price"  class="text-center font-weight-semibold">Category</th>
											<th id="cell-qty"    class="text-center font-weight-semibold">Income Money In</th>
                                            <th id="cell-qty"    class="text-center font-weight-semibold">Expense Money Out</th>
                                            <th id="cell-qty"    class="text-center font-weight-semibold">Debit/Credit</th>

                                         <th id="cell-total"  class="text-center font-weight-semibold">Total</th>
										</tr>
									</thead>
                                    <?php $new = 0; ?>

                    @foreach($res as $key)
                        <tr>
                            <td>{{ $key->name }}</td>
                            <td>{{ $key->dates }}</td>
                            <td>{{ $key->description }}</td>
                            <td>{{ $key->category }}</td>
                            <td>{{ $key->sums }}</td>
                            <td>{{ $key->exp}}</td>
                    <td>{{ $key->status == 1 ? 'Credit' : 'Debit' }}</td>
                            <td>                         
                            <?php


                            if  ($key->exp == null )
        
                            {
                                $new = $key->sums + $new;
        
                            }
        
                            else
                            {
                                $new = $new - $key->exp;
        
                                }
        
                            ?>
                        {{$new}}
                    </td>
                   </tr>

                    @endforeach
								</table>
							</div>
						</div>
					</section>

                    @endsection
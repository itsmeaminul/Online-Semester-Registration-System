@extends('layouts.app')
@section('content')
<div class="container">
	<div class="card border-info mb-2">
		{{-- <div class="card-header h3">Registration Form (Regular)</div> --}}
		<div class="card-body">
			<div class="wrapper d-block d-sm-flex align-items-center justify-content-between">
				<h3 class="card-title">Payment Process</h3>
				<ul class="nav nav-pills flex-column flex-sm-row" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-expanded="true">Mobile (USSD)</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="image-tab" data-toggle="tab" href="#image" role="tab" aria-controls="image">bKash App</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="trxid-tab" data-toggle="tab" href="#trxid" role="tab" aria-controls="trxid">Submit Transaction ID</a>
					</li>
				</ul>
			</div><hr>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
					<ol class="ml-3">
						<li>Go to your bKash Mobile Menu by dialing <span class="bg-primary text-white pl-1 pr-1"> *247# </span></li>
						<li>Choose "Payment"</li>
						<li>Enter our Merchant bKash Account Number: <span class="bg-danger text-white pl-1 pr-1"> 01234567891 </span></li>
						<li>Enter the invoice total amount <span class="bg-danger text-white pl-1 pr-1">2100</span> taka</li>
						<li>Enter your student ID number as refference</li>
						<li>Counter No not applicable, you can skip it by entering '0'</li>
						<li>Now enter your bKash Menu PIN to confirm</li>
					</ol>
					<img src="images/bkashpay.PNG">
				</div>
				<div class="tab-pane fade show" id="image" role="tabpanel" aria-labelledby="image-tab">
					<ol class="ml-3">
						
						<img src="images/Online-Payment-Process.jpg" width="800">
					</ol>
				</div>
				<div class="tab-pane fade show" id="trxid" role="tabpanel" aria-labelledby="trxid-tab">
					<form>
						<span class="text-danger font-weight-bold">Please, submit your payment Transaction ID to complete the payment process.</span><br>
						<label class="font-weight-bold mt-3">bKash Transaction ID :</label>
						<input type="text" class="form-control col-md-4" name="trxid" placeholder="TrxID">
						<div class="form-group mt-2">
							<a href=""><button type="submit" class="btn btn-success mr-2">Submit</button></a>
						</div>
					</form>
				</div>
			</div>
			
			
		</div>
		
	</div>
</div>
@endsection
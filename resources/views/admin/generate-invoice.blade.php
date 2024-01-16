@extends('admin.layouts.app')

@section('content')

<style>


    .icon-bar {
      position: fixed;
      top: 60%;
      -webkit-transform: translateY(-50%);
      -ms-transform: translateY(-50%);
      transform: translateY(-50%);
        z-index:10001;
          right:0px;
    }

    .icon-bar a {
      display: block;
      text-align: center;
      padding: 10px;
      transition: all 0.3s ease;
      color: white;
      font-size: 15px;
    }

    .icon-bar a:hover {
      background-color: #000;
    }

    .facebook {
      background: #3B5998;
      color: white;
    }

    .twitter {
      background: #55ACEE;
      color: white;
    }

    .google {
      background: #dd4b39;
      color: white;
    }

    .instagram {
      background: #dd2a7b;
      color: white;
    }

    .youtube {
      background: #bb0000;
      color: white;
    }
    .google {
      background: #dd4b39;
      color: white;
    }
    .breadcrumb-bar {
        background-color: #15558d;
        padding: 15px 0;
    }
    .page-breadcrumb ol {
        background-color: transparent;
        font-size: 12px;
        margin-bottom: 0;
        padding: 0;
    }
    .invoice-content {
        background-color: #fff;
        border: 1px solid #261f1f;
        margin-bottom: 30px;
        padding: 30px;
    }
    .content {
        padding: 30px 0 0;
    }
    .invoice-item .invoice-details {
        text-align: right;
        color: #757575;
        font-weight: 500;
    }
    p.invoice-details strong{
       color: #343333;
    }
    .invoice-info {
        margin-bottom: 30px;
    }
    .invoice-item .customer-text {
        font-size: 18px;
        color: #272b41;
        font-weight: 600;
        margin-bottom: 8px;
        display: block;
    }
    .invoice-item .invoice-details-two {
        text-align: left;
    }
    .invoice-info p {
        margin-bottom: 0;
    }
    .invoice-info.invoice-info2 {
        text-align: right;
    }
    .invoice-item .invoice-logo {
        margin-bottom: 30px;
    }
    .ms-auto {
        margin-left: auto !important;
    }
    table.invoice-table{
       margin-bottom: 0px;
    }
    .table thead {
        border-bottom: 1px solid rgba(0, 0, 0, 0.03);
    }
    .table tbody tr {
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }
    @media only screen and (max-width: 575.98px){
        .invoice-content {
        padding: 1.25rem;
    }
    }
    @media only screen and (max-width: 767.98px){
        .invoice-item .invoice-details {
        text-align: left;
    }
    }
    @media only screen and (max-width: 767.98px){
        .invoice-item .customer-text {
        font-size: 16px;
    }
    }
    @media only screen and (max-width: 767.98px){
        .invoice-item .invoice-details {
        text-align: left;
    }
    }
    @media only screen and (max-width: 767.98px){
        .invoice-info.invoice-info2 {
        text-align: left;
    }
    }
    @media only screen and (max-width: 575.98px){
        h4, .h4 {
        font-size: 1rem;
    }
    }
    div.other-info p{
        text-align: justify;
    }
    .container-fluid {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }
    .row {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }
    @media (min-width: 992px){
       .offset-lg-2 {
        margin-left: 16.666667%;
    }
    }

    @media (min-width: 992px){
       .col-lg-8 {
        -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
        max-width: 66.666667%;
    }
    }
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;
        box-shadow: none;
    }
    @media (min-width: 768px){
       .col-md-6 {
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%;
    }
    }
    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
    }
    .table-responsive>.table-bordered {
        border: 0;
    }
    table.invoice-table {
        margin-bottom: 0px;
    }
    .table-bordered {
        border: 1px solid #dee2e6;
    }
    .table {
        width: 100%;
        margin-bottom: 1rem;
        background-color: transparent;
    }
    table {
        border-collapse: collapse;
    }
    .table thead {
        border-bottom: 1px solid rgba(0, 0, 0, 0.03);
    }
    .table-bordered thead td, .table-bordered thead th {
        border-bottom-width: 2px;
    }
    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6;
    }
    .table-bordered td, .table-bordered th {
        border: 1px solid #dee2e6;
    }
    .table td, .table th {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }
    th {
        text-align: inherit;
    }
    .col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
        position: relative;
        width: 100%;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }
    h4, h5, h6 {
        color: #cd6605;
        font-weight: 700;
        margin-bottom: 0.5rem;
        font-size: 30px;
    }


    </style>
                <!--app-content open-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">

							<ol class="breadcrumb"><!-- breadcrumb -->
								<li class="breadcrumb-item"><a href="#"><i class="fe fe-home mr-2"></i> Home </a></li>
								<li class="breadcrumb-item active" aria-current="page"> Generate Invoice </li>
							</ol><!-- End breadcrumb -->

							<div class="ml-auto">
								<div class="input-group">
									<a href="#" class="btn btn-primary btn-icon text-white mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Add New Account">
										<span>
											<i class="fe fe-plus"></i>
										</span>
									</a>
									<a href="#" class="btn btn-icon btn-info text-white mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Help">
										<span>
											<i class="fe fe-help-circle"></i>
										</span>
									</a>
									<a href="#" class="btn btn-icon btn-danger text-white" data-toggle="tooltip" title="" data-placement="top" data-original-title="Settings">
										<span>
											<i class="fe fe-settings"></i>
										</span>
									</a>
								</div>
							</div>
						</div>
						<!--page-header closed-->
                        <!--row open-->
						<div class="row">
                            <div class="content">
                                <div class="container-fluid">
                                   <div class="row">
                                      <div class="col-lg-8 offset-lg-2">
                                         <div class="invoice-content">
                                            <div class="invoice-item">
                                               <div class="row">
                                                  <div class="col-md-6">
                                                     <div class="invoice-logo">
                                                        <img src="{{asset('header_front_end/assets/images/logo/logo.png')}}" alt="logo">
                                                     </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                     <p class="invoice-details">
                                                        <strong>Order:</strong> #00124 <br>
                                                        <strong>Issued:</strong> 20/08/2022
                                                     </p>
                                                  </div>
                                               </div>
                                            </div>
                                            <div class="invoice-item">
                                               <div class="row">
                                                  <div class="col-md-6">
                                                     <div class="invoice-info">
                                                        <strong class="customer-text">Invoice From</strong>
                                                        <p class="invoice-details invoice-details-two">
                                                           Aishwarya <br>
                                                           806 Twin Willow Lane, Old Forge,<br>
                                                           Delhi, India <br>
                                                        </p>
                                                     </div>
                                                  </div>
                                                  <div class="col-md-6">
                                                     <div class="invoice-info invoice-info2">
                                                        <strong class="customer-text">Invoice To</strong>
                                                        <p class="invoice-details">
                                                           Robin K <br>
                                                          #123 New Town <br>
                                                           Delhi India <br>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </div>
                                            </div>
                                            <div class="invoice-item">
                                               <div class="row">
                                                  <div class="col-md-12">
                                                     <div class="invoice-info">
                                                        <strong class="customer-text">Payment Method</strong>
                                                        <p class="invoice-details invoice-details-two">
                                                           Debit Card <br>
                                                           XXXXXXXXXXXX-2541 <br>
                                                           HDFC Bank<br>
                                                        </p>
                                                     </div>
                                                  </div>
                                               </div>
                                            </div>
                                            <div class="invoice-item invoice-table-wrap">
                                               <div class="row">
                                                  <div class="col-md-12">
                                                     <div class="table-responsive">
                                                        <table class="invoice-table table table-bordered">
                                                           <thead>
                                                              <tr>
                                                                 <th>Description</th>
                                                                 <th class="text-center">Quantity</th>
                                                                 <th class="text-center">Rate</th>
                                                                 <th class="text-center">GST</th>
                                                                 <th class="text-end">Total</th>
                                                              </tr>
                                                           </thead>
                                                           <tbody>

                                                              <tr>
                                                                 <td>Brown Egg</td>
                                                                 <td class="text-center">1</td>
                                                                 <td class="text-center">Rs 0</td>
                                                                 <td class="text-center">Rs 0</td>
                                                                 <td class="text-end">Rs 250</td>
                                                              </tr>
                                                           </tbody>
                                                        </table>
                                                     </div>
                                                  </div>
                                                  <div class="col-md-6 col-xl-4 ms-auto">
                                                     <div class="table-responsive">
                                                        <table class="invoice-table-two table">
                                                           <tbody>
                                                              <tr>
                                                                 <th>Subtotal:</th>
                                                                 <td><span>Rs 250</span></td>
                                                              </tr>
                                                            <!--  <tr>
                                                                 <th>Discount:</th>
                                                                 <td><span>-10%</span></td>
                                                              </tr> -->
                                                              <tr>
                                                                 <th>Total Amount:</th>
                                                                 <td><span>Rs 250</span></td>
                                                              </tr>
                                                           </tbody>
                                                        </table>
                                                     </div>
                                                  </div>
                                               </div>
                                            </div>
                                            <div class="other-info">
                                               <h4>Other information</h4>
                                               <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed dictum ligula, cursus blandit risus. Maecenas eget metus non tellus dignissim aliquam ut a ex. Maecenas sed vehicula dui, ac suscipit lacus. Sed finibus leo vitae lorem interdum, eu scelerisque tellus fermentum. Curabitur sit amet lacinia lorem. Nullam finibus pellentesque libero.</p>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="ml-auto">
                                <div class="pull-right">
                                    <a href="#" class="btn btn-primary  m-b-5 m-t-5"><i class="fa fa-print"></i> Print </a>
                                    <a href="#" class="btn btn-secondary  m-b-5 m-t-5"><i class="fa fa-paper-plane"></i> Send </a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>


@endsection

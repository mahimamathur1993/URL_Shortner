@extends('layouts.app')
@section('title', "Welcome, ". auth()->user()->name)
@push('style')
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.3/css/dataTables.dataTables.min.css
">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.dataTables.min.css">

<style>
    .scroll-container{
        padding: 20px 10px;
        background-color: #007bff;
        color: white
    }
    .scroll-container p {
        font-size: 25px;
    }
    @media (max-width: 767px) {
        .referral-link{
            flex-direction: column;
        }
    }
</style>
<?php
$user = auth()->user();

?>
@endpush
@section('content')
   
    <div class="row">
        <div class="col-lg-6 col-12">
            <!-- small box -->
            <div class="small-box bg-gradient-blue">
                <div class="inner">
                    <h5>{{ auth()->user()->account_status }}</h5>

                    <h2>Genrate short url </h2>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
             
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="small-box bg-gradient-red">
                <div class="inner">
                    <h5>{{ auth()->user()->account_status }}</h5>

                    <h2>Invite  </h2>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
               
            </div>
        </div>
        </div>
         {{-- new --}}
       
     
       
    </div>
  
@endsection
@push('script')
<script src="https://cdn.datatables.net/2.1.3/js/dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.min.js"></script>
@endpush

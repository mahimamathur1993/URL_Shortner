@extends('layouts.app')
@section('title', "Welcome, ". auth()->user()->name)
@push('style')
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.3/css/dataTables.dataTables.min.css
">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.dataTables.min.css">

</style>
<?php
$user = auth()->user();

?>
@endpush
@section('content')
   
    <div class="row">
        <div class=" col-12">
           <form method="POST" action="{{ route('genateurl.store') }}">
        @csrf
        <label for="original_url">Original URL:</label>
        <input type="url" name="original_url" id="original_url" required>
        <button class="btn btn-primary" type="submit">Shorten</button>
    </form>
                         </div>
        </div>
    </div>
  
@endsection
@push('script')
<script src="https://cdn.datatables.net/2.1.3/js/dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/responsive/3.0.2/js/dataTables.responsive.min.js"></script>
@endpush

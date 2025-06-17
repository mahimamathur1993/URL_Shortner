@extends('layouts.app')
@section('title', 'Welcome')
@section('content')


<style>
    @font-face {
        font-family: 'Calibri Bold';
        src: url('{{storage_path("/fonts/Calibri Bold.TTF")}}') format("truetype");
    }

    /* body {
        font-family: 'Calibri Bold';
        line-height: 15px;
    } */

    h5.m-zero {
        margin: 0 !important;
    }

    h5.p-zero {
        padding: 0;
    }

    p {
        /* word-spacing: 5px; */
        font-size: 18px;
    }

    p.m-zero {
        margin: 0 !important;
    }

    p.p-zero {
        padding: 0;
    }

    div.background-image-container {
        width: 700px;
        height: auto;
        margin: auto;
        position: relative;
    }

    div.content-container {
        position: absolute;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        text-align: center;
        font-weight: 800;
        color: #ffff;
    }

    div.main-content-container {
        padding-left: 75px;
        padding-right: 75px;
        padding-top: 75px;
        text-align: center;
        line-height: 30px;
    }

    .user_id {
        position: relative;
        top: 21rem;
        left: 0rem;
        margin-left: 23rem;
    }

    .user_name {
        position: relative;
        top: 21.5rem;
        margin-left: 23rem;
    }

    .email_id {
        position: relative;
        top: 22.6rem;
        margin-left: 23rem;
    }

    .mobile {
        position: relative;
        top: 23.7rem;
        margin-left: 23rem;
    }

    .password {
        position: relative;
        top: 25.1rem;
        margin-left: 23rem;
    }

    .registration_date {
        position: relative;
        top: 25.6rem;
        margin-left: 23rem;
    }

    .sponsor_id {
        position: relative;
        top: 26.7rem;
        margin-left: 23rem;
    }

    .sponsor_name {
        position: relative;
        top: 27.5rem;
        margin-left: 23rem;
    }

    .sponer_mobile {
        position: relative;
        top: 28.6rem;
        margin-left: 23rem;
    }
    .content-container p{
        font-size: 25px;
    }
    .overlay-content {
        position: relative;
        color: #fff;
        display: block;
        background-image:  url('assets/images/welcome.png');
        padding: 10px 0px;
        text-align: center;
        padding: 15px;
        box-shadow: none;

    }
    .ctext{
        font-family: cursive;
    }
    
</style>

<body>
    <div class="container">
        <div class="background-image-container">
            <!-- Background image -->
            {{-- <img src='{{asset('assets/images/welcome.png')}}' width="100%" alt=""> --}}
            <!-- Content container -->
            <div class="overlay-content" >
                <h3> !! Welcome {{ $userId->name }} !! </h3>
                <h3 class="ctext"> Congratulations </h3>
                <h3> Your Account has been created Successfully!! </h3>
                <table class="table table-bordered">
                    <tbody>
                     
                      <tr>
                        <th scope="row">User Name</th>
                        <td>{{ $userId->name }}</td>                          
                    </tr>
                      <tr>
                        <th scope="row">Email ID</th>
                        <td>{{ $userId->email }}</td>                          
                    </tr>
                    <tr>
                        <th scope="row">Mobile Number</th>
                        <td>{{ $userId->mobile }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Pasword</th>
                        <td>***</td>                          
                    </tr>
                     
                </tbody>
                  </table>
                </div>
                
            </div>
        </div>
    </div>
</body>



@endsection
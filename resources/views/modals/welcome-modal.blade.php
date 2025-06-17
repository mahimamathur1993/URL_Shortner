<style>
    .modal-content {
        text-align: center;
        padding: 15px;
        box-shadow: none;
    }

    .modal-body img {
        max-width: 100px;
        margin-bottom: 20px;
    }

    .modal-body h5 {
        color: #007bff;
    }

    .modal-body p { 
        font-size: 18px;
        margin: 5px 0;
    }

    .modal-footer {
        display: flex;
        justify-content: center;
    }

    .image-container {
        position: relative;
        text-align: center;
        color: white;
    }

    .background-image {
        width: 100%;
        height: auto;
    }

    .overlay-content {
        position: relative;
        color: #fff;
        display: block;
        background-image:  url('assets/images/welcome.png');
        padding: 10px 0px;

    }

    .modal-footer {
        background: #fff;
    }
    .ctext{
        font-family: cursive;
    }
    .table td, .table th{
        padding: .2rem;
    }
    .modal-dialog {
        margin: 6rem auto;
    }
</style>

<div class="modal fade" id="welcomeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="overlay-content">
                    <h3> !! Welcome {{ auth()->user()->name }} !! </h3>
                    <h3 class="ctext"> Congratulations </h3>
                    <h3> Your Account has been created Successfully!! </h3>
                    <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <th scope="row">User ID</th>
                            <td>{{ auth()->user()->refral_id }}</td>
                          </tr>
                          <tr>
                            <th scope="row">User Name</th>
                            <td>{{ auth()->user()->name }}</td>                          
                        </tr>
                          <tr>
                            <th scope="row">Email ID</th>
                            <td>{{ auth()->user()->email }}</td>                          
                        </tr>
                        <tr>
                            <th scope="row">Mobile Number</th>
                            <td>{{ auth()->user()->mobile }}</td>
                          </tr>
                          <tr>
                            <th scope="row">Pasword</th>
                            <td>***</td>                          
                        </tr>
                          <tr>
                            <th scope="row">Registration Date</th>
                            <td>{{ \Carbon\Carbon::parse(auth()->user()->activation_dt)->format('d M Y') }}</td>                          
                        </tr>
                        @if (auth()->user()->sponsor && auth()->user()->sponsor->refral_id)
                        <tr>
                            <th scope="row">Sponsor ID</th>
                            <td>{{auth()->user()->sponsor->refral_id}}</td>
                          </tr>
                          <tr>
                            <th scope="row">Sponsor Name</th>
                            <td>{{auth()->user()->sponsor->name}}</td>                          
                        </tr>
                          <tr>
                            <th scope="row">Sponsor Mobile</th>
                            <td>{{auth()->user()->sponsor->mobile}}</td>                          
                        </tr>
                        @endif
                    
                    </tbody>
                      </table>
                        
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" onclick="window.print()">Print</button>
                    <a type="button" class="btn btn-warning" href="/dashboard">Home</a>
                </div>
            </div>
        </div>
    </div>
</div>
@push('script')
    <script>
        $('#welcomeModal').modal('show');

        $.ajax({
            type: "get",
            url: "/mark-as-first-login-completed",
            success: function(response) {

            }
        });
    </script>
@endpush

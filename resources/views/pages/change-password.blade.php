@extends('layouts.app')
@section('title', 'Change Password')
@section('content')
    <section class="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Change Password</div>

                        <div class="card-body">
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if (session('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('error') }}
                                </div>
                            @endif

                            <div class="row">
                                <div class="col-lg-8 mx-auto">
                                    <form action="{{ route('updatePassword') }}" method="post">
                                        @csrf
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label class="form-label">Old Password </label>
                                                <input type="password" class="form-control" name="old_password">
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">New Password </label>
                                                <input type="password" class="form-control" name="new_password">
                                                @if ($errors->has('new_password'))
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $errors->first('new_password') }}
                                                        <button type="button" class="btn-close float-end"
                                                            data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label">Confirm Password </label>
                                                <input type="password" class="form-control" name="confirm_password">
                                                @if ($errors->has('confirm_password'))
                                                    <div class="alert alert-danger mt-2">
                                                        {{ $errors->first('confirm_password') }}
                                                        <button type="button" class="btn-close float-end"
                                                            data-bs-dismiss="alert" aria-label="Close"></button>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="text-start mt-3">
                                            <button type="submit" class="btn btn-primary px-4">Save
                                                Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div><!--end row-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('section')
    <script>
        function showKycUploadDiv() {
            $("#KycUpdateDiv").toggle();
        }

        setTimeout(function() {
            document.getElementById('successMessage').style.display = 'none';
        }, 5000);

        setTimeout(function() {
            document.getElementById('errorMessage').style.display = 'none';
        }, 5000);
    </script>
@endpush

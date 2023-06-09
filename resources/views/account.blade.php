@extends('layout')

@section('title', Auth::user()->name)

@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<div class=" background" style="padding-top:20px;">


    <div class="card mb-3" style="max-width: 830px; background-color:#96858F; right: -50px; border-radius:20px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{asset(Auth::user()->photo_profile)}}" class="img-fluid rounded-start"
                    style="width:120px; height:120px; top:80px; margin-left:130%;  text-align: center; margin-top: 32px;">
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title" style="margin-left:60vh ;">{{Auth::user()->username}} </h5>


                        <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" background" style=margin-top:20px;>


        <div class="card mb-3" style="max-width: 830px; background-color:D9D9D9; right: -50px; border-radius:20px;">
            <div>
                <div>
                    <div>
                        <div class="card-body">
                            <h5 style="line-height:1,5; word-spacing:9px; display:inline;">Email
                                Address : {{Auth::user()->email}}</p><br>
                            <h5 style="line-height:3; word-spacing:5px;">Phone Number : {{Auth::user()->phoneNumber}}
                            </h5> <br>
                            <h5 style="line-height:3; word-spacing:12px;">Your Address : {{Auth::user()->address}}</h5>
                        </div>
                        <center style="">
                            <button type="button" class="btn btn-outline-light" style="background-color:#AC608D;">Delete Account</button>
                                <form action="" method="DELETE">
                                @csrf
                                  @method('DELETE')
                                </form>
                                <a class="btn btn-outline-light" style="background-color:#673A54;" href="update-account" type="button">Update Account</a>
                        </center>

                        <br>
                    </div>
                </div>
            </div>
        </div>

        @endsection

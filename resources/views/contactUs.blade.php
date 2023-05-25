@extends('layout')
@section('title', 'Contact Us')
@section('content')
<div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
<div class="card-all" style="padding-top:40px;">
    <div class="d-flex" id="table" style=" background-color: #96858F; padding: 25px; border-radius: 35px; margin-left:85px;">
        <div class="card" id="left-box" style="border-radius:35px; background-color: #D5D5D5; margin-right: 16px;">
            <div class="card-body">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.6552839615997!2d112.6294390742592!3d-7.9310248789755144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629e3735ae75f%3A0xee89cfc2ab1a8d8d!2sMALANG%20CAMP%20(Rental%20Alat%20Camping)!5e0!3m2!1sid!2sid!4v1684302561155!5m2!1sid!2sid"
                    width="450px" height="450px" style="border-radius:20px;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" id="card-content"></iframe>
            </div>
        </div>

        <div class="card" id="right-box" style="border-radius:35px; background-color: #332C33; width:32rem; padding-bottom:18px;">
            <div class="card-body"
                style="width: 30rem; height: 30rem; margin-top: 10px; margin-left: 10px; background-color:#000000; border-radius:35px; padding-top:40px;">
                <ul class="list-group list-group-flush" id="card-content" style="background-color:black; border-radius:35px;">
                    <li class="list-group-item" style="background-color:black; "><img
                            src="{{asset('static/image/Secured Letter.png')}}"
                            style="width:70px; padding-left :20px; padding-top:5px;"><a
                            href="mailto:Malangcamp@yahoo.com?subject=Judul%20pesan&body=Halo,%20Ini%20pesan%20saya"
                            style="color:white; text-decoration: none; font-family: Jacques Francois;font-size:17px;">malangcamp@yahoo.com</a>
                    </li>
                    <li class="list-group-item" style="background-color:black; border-radius:35px;"><img
                            src="{{asset('static/image/Facebook.png')}}"
                            style="width:70px; padding-left :20px; padding-top:5px;"><a
                            href="https://www.facebook.com/malang.camp"
                            style="color:white; text-decoration: none; font-family: Jacques Francois; font-size:17px;">malang.camp</a>
                    </li>
                    <li class="list-group-item" style="background-color:black; border-radius:35px;"><img
                            src="{{asset('static/image/Instagram.png')}}"
                            style="width:70px; padding-left :20px; padding-top:5px;"><a
                            href="https://www.instagram.com/malangcamp"
                            style="color:white; text-decoration: none; font-family: Jacques Francois; font-size:17px;">malangcamp</a>
                    </li>
                    <li class="list-group-item" style="background-color:black; border-radius:35px;"><img
                            src="{{asset('static/image/WhatsApp.png')}}"
                            style="width:70px; padding-left :20px; padding-top:5px;"><a
                            href="https://wa.me/6285646547053"
                            style="color:white; text-decoration: none; font-family: Jacques Francois; font-size:17px; ">085646547053</a>
                    </li>
                    <li class="list-group-item" id="address" style="background-color:black; border-radius:35px;"><img
                            src="{{asset('static/image/Address.png')}}"
                            style="width:70px; padding-left :20px; padding-top:5px;"><a
                            href="https://goo.gl/maps/Hcg6Ur5dpuyjxcdC6"
                            style="color:white; text-decoration: none; font-family: Jacques Francois;">JL
                            Ikan
                            Lumba Lumba Residence Kav 9 Malang</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection

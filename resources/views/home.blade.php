@extends('layouts.app')

@section('content')

<section class="content-1 font-content" >
    
    <div class="container-1">
        <p style="font-size:40px;font-weight:bold;">ABOUT ME</p>
        <p style="font-size:20px" id="about-me">
        My name is Luthfi Ferdian, everyone is now calling me UPI.
        <br>I'am a student of Universitas Indonesia faculty of Computer Science.
        this website is dedicated for KOTA's internship assignment.
        Just scroll if you wanna know more!
        </p>

        <a href="https://www.linkedin.com/in/luthfi-ferdian-42878a141/"> <img src="{{ asset('img/linkedin-logo.svg')}}" style="margin:20px;margin-top:100px"></a>
        <a href="https://web.facebook.com/lferdian"> <img src="{{ asset('img/facebook-logo.svg')}}" style="margin:20px;margin-top:100px"></a>
        <a href="https://twitter.com/ferdianluthfi"> <img src="{{ asset('img/twitter-logo.svg')}}" style="margin:20px;margin-top:100px"></a>
        

    
    </div>
    
    <div>
        <center>
            <img src="{{ asset('img/profile.svg')}}" style="margin:20px;margin-top:100px">
        </center>
    </div>

</section>

<div class="content-break font-content">
    <center>
        <br><br><br>
        <h3>Tell more!</h3>
        <img src="{{ asset('img/scroll.svg')}}" style="margin-bottom:20px">
    </center>
</div>

<div class="content-break font-content-2" style="background-color:#121216;">
    <center><h3 style="font-size:40px;font-weight:bold;">PROJECTS</h3></center>
<div>

<section class="content-2 font-content-2">
    <div>
        <center>
            <img src="{{ asset('img/project-1.svg')}}" style="margin: 40px 20px 20px;">
        </center>
    </div>

    <div>
        <br><br>
        <h3 id="project-1-title" style="font-weight:bold;">Proyek Pengembangan Sistem Informasi</h3>
        <p id="project-1-content" style="font-size:20px"> Proyek Pengembangan Sistem Informasi (PROPENSI) is one of the subjects that must be taken by Information System students of the University of Indonesia. From this experience I got a lesson in building an information system from 0 to be used optimally by the users in a real world company.  </p>
    </div>
</section>

<section class="content-2 font-content-2">
    <div>
        <br><br>
        <h3 id="project-2-title" style="font-weight:bold;margin-left:100px">Enterprise Application Programming and Architecture</h3>
        <p id="project-2-content" style="font-size:20px;margin-left:100px"> I learn a lot about fullstack development in this project. My project is to code a fictitious Information System, specifically an Hospital System. Find more at tugasakhirapap49.herokuapp.com</p>
    </div>

    <div>
        <center>
            <img src="{{ asset('img/project-2.svg')}}" style="margin: 40px 20px 20px;">
        </center>
    </div>
</section>

<section class="content-2 font-content-2">
    <div>
        <center>
            <img src="{{ asset('img/project-3.svg')}}" style="margin: 40px 20px 20px;">
        </center>
    </div>

    <div>
        <br><br>
        <h3 id="project-1-title" style="font-weight:bold;">Redesigning Website</h3>
        <p id="project-1-content" style="font-size:20px"> I once have to redesigning a website. I have to analize this website so that it can has a better UI/UX. In my case, the website is PKPU.org  </p>
    </div>
</section>

<section class="content-3 font-content-3" style="background-image: url('img/background-3.svg');">
    <div class="container-1" style="margin-top:58px;">
            <p style="font-size:40px;font-weight:bold;">SKILLS</p>
    </div>
    <div>
        <center>
            <img src="{{ asset('img/java.svg')}}" style="margin: 0px 20px 20px;">
        </center>
    </div>
    
    <div>
        <center>
            <img src="{{ asset('img/php.svg')}}" style="margin: 40px 20px 20px;">
        </center>
    </div>
    <br><br><br><br><br><br><br>
    <div>
            <img src="{{ asset('img/python.svg')}}" style="margin: 40px 20px 20px;">
        
    </div>
    <div>
            <img src="{{ asset('img/mySql.svg')}}" style="margin: 40px 20px 20px;">
        
    </div>
</section>


@endsection

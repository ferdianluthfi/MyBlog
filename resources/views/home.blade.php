@extends('layouts.app')

@section('content')

<section class="content-1 font-content" >
    
    @foreach($content1 as $content)
    <div class="container-1">
        <p style="font-size:40px;font-weight:bold;">{{$content->title}}</p>
        <p style="font-size:20px" id="about-me">{{$content->content}}</p>
        @if(Auth::check())
            <button onclick="window.location.href='/ubah/1'">edit</button>
        @endif
        <a href="https://www.linkedin.com/in/luthfi-ferdian-42878a141/"> <img src="{{ asset('img/linkedin-logo.svg')}}" style="margin:20px;margin-top:100px"></a>
        <a href="https://web.facebook.com/lferdian"> <img src="{{ asset('img/facebook-logo.svg')}}" style="margin:20px;margin-top:100px"></a>
        <a href="https://twitter.com/ferdianluthfi"> <img src="{{ asset('img/twitter-logo.svg')}}" style="margin:20px;margin-top:100px"></a>
    </div>
    @endforeach
    
    <div>
        <center>
            <img src="{{ asset('img/profile.svg')}}" style="margin:20px;margin-top:100px">
        </center>
    </div>

</section>

<div class="content-break font-content">
    <br><br><br>
        <center><h3>Know more!</h3></center>
    <a href="#content-2-title"><center>
        
        <img src="{{ asset('img/scroll.svg')}}" style="margin-bottom:20px">
    </center>
    </a>
</div>

<div id="content-2-title"class="content-break font-content-2" style="background-color:#121216;">
    <center><h3 style="font-size:40px;font-weight:bold;">PROJECTS</h3></center>
<div>

<section id="content-2" class="content-2 font-content-2">
    @foreach($content2 as $content)
    <div class="img-1">
        <center>
            <img id="project-1" src="{{ asset('img/project-1.svg')}}" style="margin: 40px 20px 20px;">
        </center>
    </div>
    <div>
        <br><br>
        <h3 id="project-1-title" style="font-weight:bold;">{{$content->title}}</h3>
        <p id="project-1-content" style="font-size:20px"> {{$content->content}}</p>
        @if(Auth::check())
            <button onclick="window.location.href='/ubah/2'">edit</button>
        @endif
    </div>
    @endforeach
</section>


<section class="content-2 font-content-2">
    @foreach($content3 as $content)
    <div>
        <br><br>
        <h3 id="project-2-title" style="font-weight:bold;margin-left:100px">{{$content->title}}</h3>
        <p id="project-2-content" style="font-size:20px;margin-left:100px"> {{$content->content}}</p>
        @if(Auth::check())
            <button onclick="window.location.href='/ubah/3'">edit</button>
        @endif
    </div>

    <div>
        <center>
            <img src="{{ asset('img/project-2.svg')}}" style="margin: 40px 20px 20px;">
        </center>
    </div>
    @endforeach
</section>

<section class="content-2 font-content-2">
    @foreach($content4 as $content)
    <div>
        <center>
            <img src="{{ asset('img/project-3.svg')}}" style="margin: 40px 20px 20px;">
        </center>
    </div>

    <div>
        <br><br>
        <h3 id="project-1-title" style="font-weight:bold;">{{$content->title}}</h3>
        <p id="project-1-content" style="font-size:20px"> {{$content->content}}</p>
        @if(Auth::check())
            <button onclick="window.location.href='/ubah/4'">edit</button>
        @endif
    </div>
    @endforeach
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


@section('scripts')
<script>
  sr.reveal('#content-2 .img-1',{
    origin: 'bottom',
    });
  
    sr.reveal('.sqs-col-6:nth-child(odd)',{
    origin: 'left',
    });
  
      sr.reveal('.sqs-col-6:nth-child(even)',{
    origin: 'right',
    });
</script>
@endsection
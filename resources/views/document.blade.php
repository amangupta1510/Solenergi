@extends('main')
@section('body')
    

<div class="top-header">
	<img style="height: 380px;" class="desktop" src="{{asset('images/uu7.jpg')}}" alt="" title="">
    <img class="mob" src="{{asset('images/uu7.jpg')}}" alt="" title="" style="height: 150px;">

<div class="clear"></div>

<div class="wrapper">
    <div class="gap50"></div>
    <div class="clear"></div>
    <div class="about-box2">

    <CENTER>
    <div class="right-box" style="width: 100%; float: none; padding-left: 0px; padding-right: 5px;">
            <div class="policies-row">
                <h2>Company Documents</h2>
                <ul>
                    <li><a class="gtmpdfdownload" href="{{route('download',['id'=>'Solenergi_Profile'])}}" target="_blank">Company Profile</a></li>
                    <li><a class="gtmpdfdownload" href="{{route('download',['id'=>'Solenergi_Registration'])}}" target="_blank">Company Registration</a></li>
                    <li><a class="gtmpdfdownload" href="{{route('download',['id'=>'Solenergi_Electric_Licence'])}}" target="_blank">Company Electric Licence</a></li>
                    <li><a class="gtmpdfdownload" href="{{route('download',['id'=>'Solenergi_Recognition_Certificate'])}}" target="_blank">Recognition Certificate</a></li>
                    <li><a class="gtmpdfdownload" href="{{route('download',['id'=>'Solenergi_Solar_Solutions'])}}" target="_blank">Company Solar Solutions</a></li>
                    <li><a class="gtmpdfdownload" href="{{route('download',['id'=>'Solenergi_Solar_Trees'])}}" target="_blank">Company Solar Trees</a></li>
                </ul>
            </div>
           
        </div> </CENTER>
    </div>
<div class="clear"></div>
</div>
<div class="clear"></div><div class="clear"></div>


@endsection
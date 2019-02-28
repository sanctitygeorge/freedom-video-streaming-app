@extends('layouts.app')
@section('content')

<br><br><br><br>
<div class="container">
        <a href="{{ route('home') }}">Dashboard</a>
        <i class="fa fa-chevron-right breadcrumb-separator" style="padding:2px; font-size:10px;width 20px;"></i>
        <span><a href="./">Back</a></span>
        <i class="fa fa-chevron-right breadcrumb-separator" style="padding:2px; font-size:10px;width 20px;"></i>
        <span>Contact Us</span>
    </div>


<div class="container">

 @if (session()->has('success_message'))
            <div class="spacer"></div>
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="spacer"></div>
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{!! $error !!}</li>
                    @endforeach
                </ul>
            </div>
        @endif


<div class="container">
  <!-- <div class="jumbotron" style="background-image: url(img/unicalview3.jpg);"> -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2 align="center">Contact Us</h2></div>

                <div class="card-body">

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('feedbacks.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label"><i class="fa fa-user" style="padding:2px; font-size:20px; width:30px;"></i>Full Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                            <label for="subject" class="col-md-4 control-label">Subject</label>

                            <div class="col-md-6">
                                <input id="subject" type="subject" class="form-control" name="subject" required>

                                @if ($errors->has('subject'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('subject') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                            <label for="message" class="col-md-4 control-label">Message</label>

                            <div class="col-md-6">
                                <textarea id="message" type="textarea" class="form-control" name="message" required></textarea>

                                @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label"><i class="fa fa-phone" style="padding:2px; font-size:20px; width:30px;"></i>Contact</label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control" name="phone" required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label"><i class="fa fa-envelope" style="padding:2px; font-size:20px; width:30px;"></i>E-Mail</label>

                            <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success btn-lg">
                                    Send
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
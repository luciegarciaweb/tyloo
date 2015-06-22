@extends('layouts.frontend')

@section('content')
    @include('frontend.partials.common.header._headerPage', ['pageName' => 'Get in Touch!', 'pageNameBreadcrumb' => 'Contact'])

<!-- Map -->
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12 no-padding" style="margin-bottom: -7px;">
            <iframe style="border: 0px none; border-color:#fff; width:100%;" height="350" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2621.406055546888!2d2.5093635!3d48.926707300000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e613826eb2534b%3A0xc32ad0ee3eedda9f!2s31+Avenue+de+Nonneville%2C+93600+Aulnay-sous-Bois!5e0!3m2!1sen!2sfr!4v1434966483922"></iframe>
        </div>
    </div>
</div>
<!-- /Map -->

<!-- Contact -->
<section class="mt40 mb40">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="heading mb20"><h4><span class="ion-android-mail mr15"></span>Let's get in touch!</h4></div>
                <p class="mb20">
                    Feel free to fill that form to enter in contact with me. I'll try to answer you as quick as possible!
                </p>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (isset($success))
                    <div class="alert alert-success">
                        {{ $success }}
                    </div>
                @endif
                <form role="form" method="POST" action="{{ URL::route('contact') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <input type="text" name="contactName" value="{{ old('contactName') }}" placeholder="Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="email" name="contactEmail" value="{{ old('contactEmail') }}" placeholder="Email Address" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="contactMessage" placeholder="Message" rows="7">{{ old('contactMessage') }}</textarea>
                    </div>
                    <div class="form-group">
                        {!! Recaptcha::render() !!}
                    </div>
                    <button type="submit" class="btn btn-rw btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>
</section>
<!-- /Contact -->
@stop

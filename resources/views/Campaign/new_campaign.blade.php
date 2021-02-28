
@extends('base')



@section('content')
<div class='container'>
    
    <h5>New Campaign </h5>

    <h4> Create a Campaign </h4>
    {!! form($form) !!}

{{-- {{ Form::open([ 'route' => 'camapaign.store' ]) }}
    {{ Form::model($campaign,array('route' => array('camapaign.store', $campaign->id))) }}
        {{ Form::label('name', ' Name:', array('class' => 'address')) }}
        {{ Form::text('name') }}

        {{ Form::label('campaign_name', 'Campaign Name:', array('class' => 'address')) }}
        {{ Form::text('campaign_name') }}

        {{ Form::label('email', 'E-Mail Address', array('class' => 'address')) }}
        {{ Form::text('email') }}

        {{ Form::submit('Send this form!') }}
{{ Form::close() }} --}}
</div>
@endsection
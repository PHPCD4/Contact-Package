@component('mail::message')
# Introduction

There is new query from {{ $name }} <br>
Message: {!! $message !!}

Thanks,<br>
{{ config('app.name') }}
@endcomponent

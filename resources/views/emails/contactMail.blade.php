@component('mail::message')
Good Day, <br >

{{$details['message']}}
<br>



Thanks,<br>
{{ $details['name'] }}
@endcomponent

@component('mail::message')
# Hello! {{ ((!empty($webinar->title))?$webinar->title:'').' '.  $webinar->first_name.' '.$webinar->last_name }}

Thank you for registering for the {{ config('app.name') }}
holding on <b>{{ $webinar->day }}</b>  via Zoom.<br>
We have received your information correctly.
We look forward to welcoming you, click the button below join the
on {{ $webinar->day }} by <b>{{ $webinar->session }}</b><br>
For further questions, please call: +2348032005619; +2348034447997


@component('mail::button', ['url' =>  'https://us02web.zoom.us/j/86806919767'  ])
    Join the Webinar
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent




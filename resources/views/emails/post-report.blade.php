@component('mail::message')
Post Reported
@component('mail::panel')
A post has been reported by {{ $reported_by->name }}

@endcomponent

Post details
* Post title : {{ $post->post_title }}
* Post By Name: {{ $post->user->name }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent

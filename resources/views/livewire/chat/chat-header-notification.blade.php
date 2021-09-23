<a onclick="openChatBubble()" href="#">
    {{-- <i class="fa-envelope fa text-white mt-2"></i> --}}
    <img src="{{ asset('assets/img/front/send_ic.png') }}">
     {!! auth()->user()->receive_messages()->where('read_at', null)->count() > 0 ? '<i class="badge1">'.auth()->user()->receive_messages()->where('read_at', null)->count().'</i>' : '' !!}
</a>
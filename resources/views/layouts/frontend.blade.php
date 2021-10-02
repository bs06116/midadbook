<!doctype html>
<html lang="en">

<head>
    <title>مداد المكتبة</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app-env" content="{{ env('APP_ENV') }}">
    @auth
        <meta name="auth-user-id" content="{{ auth()->user()->id }}">
    @endauth
   
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/front/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/front/chat.css') }}">
    <!-- FontAwsome  -->
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.3/css/pro.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        @livewireStyles

</head>

<body>
    @yield('content')
    @auth
        <div id="chat-bubble">
            <div class="chat-container">
                <div class="msg-chat-header ">
                    <div class="user-avatar" onclick="openChatBubble()">
                        <div>
                            <h5>Message</h5>
                        </div>
                    </div>
                </div>
            </div>
            @livewire('chat.chat-container', ['user_id' => ''])
        </div>
    @endauth

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    @livewireScripts
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js" integrity="sha512-LGXaggshOkD/at6PFNcp2V2unf9LzFq6LE+sChH7ceMTDP0g2kn6Vxwgg7wkPP7AAtX+lmPqPdxB47A0Nz0cMQ==" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ url('js/pushjs/push.min.js') }}"></script>
    <script src="{{ url('js/pushjs/serviceWorker.min.js') }}"></script>

    <script src="{{ asset('assets/js/chat.js') }}"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            window.livewire.on('alert', (type, message, title = '') => {
                alert(message)
            });

            window.livewire.on('close-modal', (id) => {
                $(id).modal('hide');
            });

            window.livewire.on('redirect', (url, timeout = 1000, target = false) => {
                setTimeout(() => {
                    if(target){
                        window.open(url, '_blank');
                    }
                    window.location = url;
                }, timeout);
            });

            window.livewire.on('urlChange', (url) => {
                history.pushState(null, null, url);
            }); 
        });
        window.onscroll = function(ev) {
            if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
                window.livewire.emit('load-more');
            }
        };

        function openChatBubble() {
            var element = document.getElementById("chat-bubble");
            element.classList.toggle("open")
        }

        Pusher.logToConsole = true; 
    </script>
    @stack('scripts')

    
</body>

</html>

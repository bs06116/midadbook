<div class="card chat-app shadow h-100">
    <div id="plist" class="people-list" style="{{ !empty($receiver) ? '' : 'left:0px;' }}">
        @livewire('chat.chat-user-list', ['user_id' => request()->user_id])
    </div>
    <div class="chat {{ empty($receiver) ? 'd-none' : '' }} ">
        @if (!empty($receiver))
            <div class="chat-header clearfix">
                <div class="row d-flex justify-content-start align-items-center ">
                    <div class="col-lg-10 col-9 text-truncate d-flex justify-content-start align-items-center text-dark">
                        <button class="btn btn-link shadow-none back-to-chat-list" wire:click="resetChat">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        </button>
                        <img src="{{ $receiver->getUserImageUrl() }}" class="rounded-circle" alt="{{ $receiver->name }}">
                        {{-- <span class="header-user" data-letters="{{ Helper::firstLetter($receiver->name) }}" style="font-size:18px;" class="mr-3"></span> --}}
                        <div class="chat-about">
                            <h6 class="mb-0 ">{{ $receiver->name }}</h6>
                            <small class="d-none is-typing"><i>Typing...</i></small>
                            <small class="text-secondary online-status">
                                @if(Cache::has('is_online' . $receiver->id))
                                    <i class="fa fa-circle online"></i> online
                                @elseif(!empty($receiver->last_seen))
                                    <i class="" style="width: 50px">Last seen: {{ Carbon::parse($receiver->last_seen)->diffForHumans() }}</i>
                                @endif
                            </small>
                        </div>
                    </div>
                    <div class="col-lg-2 col-3 hidden-sm text-right">
                        @if ($isDelete)
                            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example"> 
                                <button type="button" class="btn btn-danger btn-sm shadow-none" wireTarget="deleteChat('{{ ($receiver->id) }}')" wire:click="deleteChat('{{ ($receiver->id) }}')"><i class="fa fa-check"></i></button>
                                <button type="button" class="btn btn-light btn-sm shadow-none" wire:loading.attr="disabled" wire:click="$set('isDelete', false)"><i class="fa fa-times"></i></button>
                            </div>
                        @else 
                            <button class="btn btn-link shadow-none text-danger" wire:loading.attr="disabled" wire:click="$set('isDelete', true)"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        @endif
                    </div>
                </div>
            </div>
            <div class="chat-history chat-scrollable" wire:loading.delay.class="opacity-2" style="overflow-y: auto;">
                @livewire('chat.chat-messages', ['user_id' => $receiver->id])
            </div>
            <div class="chat-message clearfix bg-light">
                @livewire('chat.chat-form', ['user_id' => $receiver->id])
            </div>
        @endif 
    </div>
</div>
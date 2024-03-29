<div>
    <form>
        <div class="text-center rounded-pill mt-4 px-1 py-1 d-flex">
            <i class="fa fa-search  rounded-pill search" aria-hidden="true"></i>
            <input wire:model.debounce.500ms="search" class="px-4 rounded-pill text-right search-input" type="search">
        </div>
    </form>

    @foreach ($posts as $key => $post)
        @livewire('item', ['post' => $post], key($post->id))
    @endforeach
</div>

@push('scripts')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            Livewire.on('triggerCommentDelete', array => {
                var r = confirm("Are you sure you want to delete comment?");
                if (r == true) {
                    Livewire.emit('deletePostComment'+array.post_id, array.comment_id, array.post_id);
                }
            });

            Livewire.on('triggerPostReport', (msg) => {
                confirm(msg);
            });
        })
    </script>
@endpush

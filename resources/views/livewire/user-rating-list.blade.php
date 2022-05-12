<div>
    @foreach ($user_ratings as $item)
        <div class="body-added-data p-3 border-bottom" data-direction="rtl">
            <div class="d-flex">
                <div class="added-user-avatar ml-3">
                    <img src="{{ url('storage/' . $item->ratingBy->profile_photo) }}" width="40px" height="40px" alt="username" />
                </div>
                <div class="added-data-name">
                    <h5 class="mb-0 d-flex flex-wrap">
                        منذ شهر
                        <div class="added-data-tag" data-direction="ltr">
                            <p class="mb-0">@ {{ $item->ratingBy->username }}<span class="d-inline-block dot-tag mx-3"> . </span></p>
                        </div>
                    </h5>
                    <p class="mb-0 mt-1">منذ أسبوعين</p>
                </div>
            </div>
            <div class="added-comment text-right">
                <p class="mb-0 mt-2">{{ $item->comment }}</p>
            </div>
        </div>
    @endforeach
</div>
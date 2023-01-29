<div class="stories mt-5">
    <div class="home-sec-head mb-4">
        <div class="text">
            <h4> قصص عروض التجار</h4>
            <p> شاهد حالات وقصص التجار</p>
        </div>
        <div class="button">
            <button class="btnn-orange btn btnn hvr-shadow" type="button"><span>عرض الكل  </span>
            </button>
        </div>
    </div>
    <div class="storiesWrapper" id="stories"></div>
</div>
@push('css')
    <link rel="stylesheet" href="{{ asset('website_assets/') }}/assets/css/zuck.min.css">
    <link rel="stylesheet" href="{{ asset('website_assets/') }}/assets/css/facesnap.css">
@endpush

@push('js')
    <script src="{{ asset('website_assets/') }}/assets/js/zuck.min.js"> </script>
    <script src="{{ asset('website_assets/') }}/assets/js/story.js"> </script>
    <script>
        const stories = new Zuck("stories", {
            backNative: true,
            previousTap: true,
            skin: currentSkin["name"],
            autoFullScreen: currentSkin["params"]["autoFullScreen"],
            avatars: currentSkin["params"]["avatars"],
            paginationArrows: currentSkin["params"]["paginationArrows"],
            list: currentSkin["params"]["list"],
            cubeEffect: currentSkin["params"]["cubeEffect"],
            localStorage: true,
            stories: @json($stories)
        });

    </script>
@endpush

<div class="home-slider">
    <div class="owl-carousel owl-theme">
        @foreach($main_advertises as $advertise)
            <div class="itme"><img src="{{ $advertise->image }}" alt=""></div>
        @endforeach
    </div>
</div>

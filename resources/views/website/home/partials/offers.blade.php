<div class="offers mt-5">
    @foreach($offers as $offer)
    <a class="offer hvr-float-shadow" href="#">
        <div class="offer-image"><img src="{{$offer->deal->mainCategory->image}}" alt=""/></div>
        <div class="offer-body">
            <h4 class="mb-2">{{$offer->deal->mainCategory->name}}</h4>
            <p class="m-0">{{calcPriceWithCurrentCurrency($offer->final_amount)}} {{getSymbolCurrency()}}</p>
        </div>
    </a>
    @endforeach
</div>

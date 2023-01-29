<div class="modal fade" id="dayModal" tabindex="-1" aria-labelledby="dayModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content time-modal">
            <div class="modal-header">
                <h5 class="modal-title" id="timeModalLabel"></h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-5">
                <div class="cansel-offer-modal p-0"> <span class="close" data-bs-toggle="modal"
                                                           data-bs-target="#dayModal">
                    <svg>
                      <use href="{{asset('website_assets/assets/images/icons/icons.svg#close')}}"></use>
                    </svg></span>
                    <h5 class="fw-bold">معاد التوصيل</h5>
                    <ul class="p-0 m-0 w-100 payments-list-check mt-4">
                        <li class="me-md-2">
                            <input class="active" type="radio" name="delivery_date" value="{{now()->toDateString()}}" id="day-1">
                            <label class="active" for="day-1">
                                <div class="title">اليوم {{now()->toDateString()}}</div>
                                <div class="express">
                                    <p class="m-0 fw-bold">Express</p><span>SR 20+</span><img class="img"
                                                                                              src="{{asset('website_assets/assets/images/landing/express.svg')}}"
                                                                                              alt="">
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" name="delivery_date" value="{{\Carbon\Carbon::tomorrow()->toDateString()}}" id="day-2">
                            <label for="day-2">
                                <div class="title">غدا {{\Carbon\Carbon::tomorrow()->toDateString()}}</div>
                            </label>
                        </li>
                    </ul>
                    <button type="button"  class="w-100 btnn-orange btn-fill btn btnn hvr-shadow" data-bs-toggle="modal"
                            data-bs-target="#dayModal"><span>تم </span></button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="timeModal" tabindex="-1" aria-labelledby="timeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content time-modal">
            <div class="modal-header">
                <h5 class="modal-title" id="timeModalLabel"></h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-5">
                <div class="cansel-offer-modal p-0"> <span class="close" data-bs-toggle="modal"
                                                           data-bs-target="#timeModal">
                    <svg>
                      <use href="{{asset('website_assets/assets/images/icons/icons.svg#close')}}"></use>
                    </svg></span>
                    <h5 class="fw-bold">وقت التوصيل</h5>
                    <ul class="p-0 m-0 w-100 payments-list-check mt-4">

                        <li>
                            <input type="radio" name="delivery_time" value="10-12 صباحا" id="time-2">
                            <label for="time-2">
                                <div class="title">10-12 صباحاَ</div>
                            </label>
                        </li>
                        <li class="me-md-2">
                            <input type="radio" name="delivery_time" value="1-3 مساءً" id="time-3">
                            <label for="time-3">
                                <div class="title">1-3 مساءً</div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" name="delivery_time" value="4-6 مساء" id="time-4">
                            <label for="time-4">
                                <div class="title">4-6 مساءً</div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" name="delivery_time" value="7-9 مساء" id="time-4">
                            <label for="time-4">
                                <div class="title">7-9 مساءً</div>
                            </label>
                        </li>
                    </ul>
                    <button type="button" class="w-100 btnn-orange btn-fill btn btnn hvr-shadow" data-bs-toggle="modal"
                            data-bs-target="#timeModal"><span>تم</span></button>
                </div>
            </div>
        </div>
    </div>
</div>

@extends('layout.sellers.dashboardLayout')

@section('title', __('translate.Messages'))

@section('content')

<div class="main-content">
    <div class="sidbar-icon"> <i class="fas fa-bars"> </i></div>
    <div class="page-chat">
      <div class="chat-users">
        <div class="nav-tabs-1">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="Offer-messages-tab" data-bs-toggle="tab" data-bs-target="#Offer-messages" type="button" role="tab" aria-controls="Offer-messages" aria-selected="true">
                  {{ __('translate.OffersMessages') }}
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="Deal-Messages-tab" data-bs-toggle="tab" data-bs-target="#Deal-Messages" type="button" role="tab" aria-controls="Deal-Messages" aria-selected="false">
                {{ __('translate.DealsMessages') }}
              </button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="Offer-messages" role="tabpanel" aria-labelledby="Offer-messages-tab">
              <div class="chat-users-list">
                <ul>

                    @isset($usersOffersChat)
                    @foreach($usersOffersChat as $one)
                        <li>
                            <div class="user-details">
                            <div class="img"> <img src="{{ @$one->chat->buyer->image_profile }}" alt=""></div>
                            <div class="name-message">
                                <h3> {{ @$one->chat->buyer->name }} </h3>
                                <div class="new-message"><span> {{ @$one->message }} </span></div>
                            </div>
                            </div>
                            <div class="message-time"> <span> {{ @$one->created_at }} </span></div>
                        </li>
                    @endforeach
                    @endisset


                </ul>
              </div>
            </div>
            <div class="tab-pane fade" id="Deal-Messages" role="tabpanel" aria-labelledby="Deal-Messages-tab"> </div>
          </div>
        </div>
      </div>
      <div class="message-view-box">
        <Lorem>ipsum dolor sit amet consectetur adipisicing elit. Iusto amet incidunt expedita, asperiores rerum praesentium facere dolorum minima neque magni dicta ducimus et sequi eius dolore doloremque quo perferendis sed.</Lorem>
      </div>
    </div>
  </div>

@endsection

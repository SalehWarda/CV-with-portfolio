<div wire:poll.10s>



    <li class="nav-item dropdown">
        <a   class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>

            <span id="messages_count" class="badge badge-danger navbar-badge">{{ auth()->user()->unreadNotifications->count() }}</span>

        </a>

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

            <div class="dropdown-divider"></div>

            <a href="#" class="dropdown-item dropdown-footer "><span class="float-right text-sm "><i class="fa fa-check-circle"></i></span>Mark all as read</a>

            <div id="unreadNotification">
                @foreach(auth()->user()->unreadNotifications as $notification)

                    <a href="#" class="dropdown-item">
                        <!-- Message Start -->
                        <div class="media">
                            <img src="{{ asset('admin/dist/img/user1-128x128.jpg') }}" alt="User Avatar"
                                 class="img-size-50 mr-3 img-circle">
                            <div class="media-body">
                                <h3 class="dropdown-item-title">
                                    {{ $notification->data['name'] }}
                                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                </h3>
                                <p class="text-sm">{!! \Illuminate\Support\Str::limit( $notification->data['message'] , 50, '...') !!}</p>
                                <p class="text-sm text-muted"><i
                                        class="far fa-clock mr-1"></i> {{ $notification->created_at->diffForHumans() }}
                                </p>
                            </div>
                        </div>
                        <!-- Message End -->
                    </a>


                @endforeach
            </div>


            <div class="dropdown-divider"></div>

            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>

    </li>

</div>

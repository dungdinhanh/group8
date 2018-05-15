<div onclick="showNotices()" class="popover-region collapsed popover-region-notifications" id="nav-notification-popover-container"
     data-userid="13" data-region="popover-region">
    <div class="popover-region-toggle nav-link" data-region="popover-region-toggle" aria-role="button"
         aria-controls="popover-region-container-5ad3a457db2285ad3a45768f3413" aria-haspopup="true"
         aria-label="Show notification window with no new notifications" tabindex="0">
        <i style="font-size: 1.5em;" class="alarm icon" aria-hidden="true"
           title="Toggle notifications menu"
           aria-label="Toggle notifications menu">
        </i>
        <div class="count-container" data-region="count-container">{{$unreadCount}}</div>

        <div class="count-container hidden" data-region="count-container"></div>

    </div>

    <div id="popover-region-container-5af7b96f7d2bb5af7b96f679cf12" class="popover-region-container"
         data-region="popover-region-container" aria-expanded="true" aria-hidden="false"
         aria-label="Notification window" role="region">
        <div class="popover-region-header-container">
            <h3 class="popover-region-header-text" data-region="popover-region-header-text">
                Messages</h3>
        </div>
        <div class="popover-region-content-container" data-region="popover-region-content-container"
             aria-busy="false">
            <div class="popover-region-content" data-region="popover-region-content">
                <div class="messages" data-region="messages" role="log" aria-busy="false"
                     aria-atomic="false" aria-relevant="additions">

                    @foreach($notifications as $notification)
                        <form action="{{route('read_notification', ['$notification_id' => $notification->id])}}">
                            <button type="submit" class="notification-container" data-region="message-content-item-container"
                               @if (!$notification->isUnread())
                                    style="background-color: whitesmoke"
                                @endif
                               role="listitem"
                               aria-label="View messages with Margaret Rivera" tabindex="0">

                                <div class="content-item">
                                    <div class="content-item-body">
                                        <h3>{{$notification->type}}</h3>
                                        <p>
                                            {!! $notification->message !!}
                                        </p>
                                    </div>
                                    <div class="unread-count-container">
                                        <span data-region="unread-count" class="badge badge-important"></span>
                                    </div>
                                </div>
                            </button>
                        </form>
                    @endforeach
                </div>
                <div class="empty-message" data-region="empty-message" tabindex="0">No messages</div>
            </div>
        </div>
        <a class="see-all-link" href="#">
            <div class="popover-region-footer-container">
                <div class="popover-region-seeall-text">See all</div>
            </div>
        </a>
    </div>
</div>
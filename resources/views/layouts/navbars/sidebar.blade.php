<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini">{{ _('') }}</a>
            <a href="#" class="simple-text logo-normal">{{ _('CUTAA') }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ _('Dashboard') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'members') class="active " @endif>
                <a href="{{ route('admin-members.index') }}">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ _('Members') }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#laravel-examples" aria-expanded="true">
                    <i class="fab fa-laravel" ></i>
                    <span class="nav-link-text" >{{ __('Users') }}</span>
                    <b class="caret mt-1"></b>
                </a>

                <div class="collapse show" id="laravel-examples">
                    <ul class="nav pl-4">
                        <li @if ($pageSlug == 'profile') class="active " @endif>
                            <a href="{{ route('profile.edit')  }}">
                                <i class="tim-icons icon-single-02"></i>
                                <p>{{ _('User Profile') }}</p>
                            </a>
                        </li>
                        {{-- <li @if ($pageSlug == 'users') class="active " @endif>
                            <a href="{{ route('user.index')  }}">
                                <i class="tim-icons icon-bullet-list-67"></i>
                                <p>{{ _('User Management') }}</p>
                            </a>
                        </li> --}}
                    </ul>
                </div>
            </li>
            <li @if ($pageSlug == 'icons') class="active " @endif>
                <a href="{{ route('admin-gallery.index') }}">
                    <i class="tim-icons icon-atom"></i>
                    <p>{{ _('Gallery') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'maps') class="active " @endif>
                <a href="{{ route('admin-sermons.index') }}">
                    <i class="tim-icons icon-pin"></i>
                    <p>{{ _('Sermons') }}</p>
                </a>
            </li>
            <li @if ($pageSlug == 'events') class="active " @endif>
                <a href="{{ route('admin-events.index') }}">
                    <i class="tim-icons icon-bell-55"></i>
                    <p>{{ _('Events') }}</p>
                </a>
            </li>

        </ul>
    </div>
</div>

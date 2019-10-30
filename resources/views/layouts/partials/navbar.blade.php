<nav class="navbar navbar-expand-md navbar-light mb-3">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ app('shaarli')->getName() }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        @can('restricted')
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <search url="{{ route('api.search') }}" id="search"></search>

                <ul class="navbar-nav">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <h6 class="dropdown-header">{{ __('Contents') }}</h6>

                                <a class="dropdown-item" href="{{ route('link.create') }}">
                                    <i class="fas fa-link fa-fw mr-1"></i> {{ __('Add link') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('story.create') }}">
                                    <i class="fas fa-book fa-fw mr-1"></i> {{ __('Add story') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('chest.create') }}">
                                    <i class="fas fa-briefcase fa-fw mr-1"></i> {{ __('Add chest') }}
                                </a>

                                <h6 class="dropdown-header">{{ __('Manage') }}</h6>

                                <a class="dropdown-item" href="{{ route('account') }}">
                                    <i class="fas fa-user fa-fw mr-1"></i> {{ __('Account') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('manage.settings') }}">
                                    <i class="fas fa-cogs fa-fw mr-1"></i> {{ __('Settings') }}
                                </a>
                                <a class="dropdown-item" href="#" @click.prevent="promptPwa()" v-if="!pwa">
                                    <i class="fas fa-magnet fa-fw mr-1"></i> {{ __('Add to homescreen') }}
                                </a>

                                <h6 class="dropdown-header">{{ __('Session') }}</h6>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-fw mr-1"></i> {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        @endcan
    </div>
</nav>

<div class="sidebar" data="blue">
    <div class="sidebar-wrapper">
        <div class="logo text-center">
            <a href="#" class="simple-text logo-normal">{{ ('Mini notícias') }}</a>
        </div>
        <ul class="nav">
            <li @if ($pageSlug == 'dashboard') class="active " @endif>
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-paper"></i>
                    <p>{{ ('Minhas Notícias') }}</p>
                </a>
            </li>
            <li>
                <a href="{{ route('write.novo') }}">
                    <i class="tim-icons icon-pencil"></i>
                    <p>{{ ('Nova notícia') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>

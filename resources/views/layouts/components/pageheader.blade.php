<div class="page-header{{ isset($tabs) && count($tabs)>0 ? ' m-b-0 p-b-0 b-b-0' : '' }}">
    <h1>
        @if(isset($breadcrumbs) && count($breadcrumbs)>0)
            @foreach($breadcrumbs as $index=>$breadcrumb)
            <span class="text-muted font-weight-light">
            <a href="{{ $breadcrumb['url'] }}"><i class="{{$index == 0 ? 'page-header-icon '.$headerIcon : ''}}"></i>{{ $breadcrumb['name'] }}</a> /
            </span>
            @endforeach
        @else
            <span class="text-muted font-weight-light">
            <i class="{{'page-header-icon '.$headerIcon}}"></i>
            </span>
        @endif
        {{ $headerTitle }}
    </h1>
    @if(isset($tabs) && count($tabs) > 0 )
    <ul id="pageHeaderTabs" class="nav nav-tabs page-block m-t-4 tab-resize-nav">
    @foreach($tabs as $index=>$tab)
        <li class="">
            <a href="#{{$tab['id']}}"
               role="tab"
               data-tab-history="true"
               data-tab-history-update-url="true"
               data-toggle="tab"
               aria-controls="{{$tab['id']}}"
               aria-expanded="false">
                {{ $tab['name'] }}
            </a>
        </li>
    @endforeach
    </ul>
    @endif
</div>

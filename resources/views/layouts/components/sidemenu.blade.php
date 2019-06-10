<?php
use Spatie\Menu\Laravel\Link;
use Spatie\Menu\Menu;

$dashboard = Link::menu('home', 'Enviar E-Mail', 'fa-envelope');

$menu = Menu::new()
    ->addClass('px-nav-content')
    ->add($dashboard)
    ->setActive(URL::current());
?>

<nav class="px-nav px-nav-left">
    <button type="button" class="px-nav-toggle" data-toggle="px-nav">
        <span class="px-nav-toggle-arrow"></span>
        <span class="navbar-toggle-icon"></span>
        <span class="px-nav-toggle-label font-size-11">HIDE MENU</span>
    </button>

    {!! $menu !!}
</nav>

{{--<nav class="px-nav px-nav-left">--}}
    {{--<button type="button" class="px-nav-toggle" data-toggle="px-nav">--}}
        {{--<span class="px-nav-toggle-arrow"></span>--}}
        {{--<span class="navbar-toggle-icon"></span>--}}
        {{--<span class="px-nav-toggle-label font-size-11">FECHAR</span>--}}
    {{--</button>--}}

    {{--<ul class="px-nav-content">--}}

        {{--<li class="px-nav-item px-nav-dropdown">--}}
            {{--<a href="#"><i class="px-nav-icon fa fa-picture-o"></i><span class="px-nav-label">Banners Home</span></a>--}}
            {{--<ul class="px-nav-dropdown-menu">--}}
                {{--<li class="px-nav-item {{ route('home') ? 'active' : '' }}">--}}
                    {{--<a href="{{ route('home') }}">--}}
                        {{--<i class="px-nav-icon fa fa-picture-o"></i>--}}
                        {{--<span class="px-nav-label">Banners</span>--}}
                    {{--</a>--}}
                {{--</li>--}}

                {{--<li class="px-nav-item {{ route('home') ? 'active' : '' }}">--}}
                    {{--<a href="{{ route('home') }}">--}}
                        {{--<i class="px-nav-icon fa fa-circle-o fa-fw"></i>--}}
                        {{--<span class="px-nav-label">Internas de destaque</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</li>--}}

        {{--<li class="px-nav-item px-nav-dropdown">--}}
            {{--<a href="#"><i class="px-nav-icon fa fa-beer"></i><span class="px-nav-label">Lojas</span></a>--}}
            {{--<ul class="px-nav-dropdown-menu">--}}
                {{--<li class="px-nav-item {{ route('home') ? 'active' : '' }}">--}}
                    {{--<a href="{{ route('home') }}">--}}
                        {{--<i class="px-nav-icon fa fa-beer fa-fw"></i>--}}
                        {{--<span class="px-nav-label">Lojas</span>--}}
                    {{--</a>--}}
                {{--</li>--}}

                {{--<li class="px-nav-item {{ route('home') ? 'active' : '' }}">--}}
                    {{--<a href="{{ route('home') }}">--}}
                        {{--<i class="px-nav-icon fa fa-beer fa-fw"></i>--}}
                        {{--<span class="px-nav-label">Lojas não participantes</span>--}}
                    {{--</a>--}}
                {{--</li>--}}

                {{--<li class="px-nav-item {{ route('home') ? 'active' : '' }}">--}}
                    {{--<a href="{{ route('home') }}">--}}
                        {{--<i class="px-nav-icon fa fa-dot-circle-o fa-fw"></i>--}}
                        {{--<span class="px-nav-label">Tipos de ofertas</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</li>--}}

        {{--<li class="px-nav-item px-nav-dropdown">--}}
            {{--<a href="#"><i class="px-nav-icon fa fa-reorder"></i><span class="px-nav-label">Prateleiras</span></a>--}}
            {{--<ul class="px-nav-dropdown-menu">--}}
                {{--<li class="px-nav-item {{ route('home') ? 'active' : '' }}">--}}
                    {{--<a href="{{ route('home') }}">--}}
                        {{--<i class="px-nav-icon fa fa-reorder fa-fw"></i>--}}
                        {{--<span class="px-nav-label">Prateleiras</span>--}}
                    {{--</a>--}}
                {{--</li>--}}

                {{--<li class="px-nav-item {{ route('home') ? 'active' : '' }}">--}}
                    {{--<a href="{{ route('home') }}">--}}
                        {{--<i class="px-nav-icon fa fa-qrcode fa-fw"></i>--}}
                        {{--<span class="px-nav-label">Cupons</span>--}}
                    {{--</a>--}}
                {{--</li>--}}

                {{--<li class="px-nav-item {{ route('home') ? 'active' : '' }}">--}}
                    {{--<a href="{{ route('home') }}">--}}
                        {{--<i class="px-nav-icon fa fa-image fa-fw"></i>--}}
                        {{--<span class="px-nav-label">Imagens de fundo</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        {{--</li>--}}

        {{--<li class="px-nav-item {{ route('home') ? 'active' : '' }}">--}}
            {{--<a href="{{ route('home') }}">--}}
                {{--<i class="px-nav-icon fa fa-legal fa-fw"></i>--}}
                {{--<span class="px-nav-label">Textos legais</span>--}}
            {{--</a>--}}
        {{--</li>--}}

        {{--<li class="px-nav-item {{ route('home') ? 'active' : '' }}">--}}
            {{--<a href="{{ route('home') }}">--}}
                {{--<i class="px-nav-icon fa fa-star fa-fw"></i>--}}
                {{--<span class="px-nav-label">Clássicos BK</span>--}}
            {{--</a>--}}
        {{--</li>--}}

        {{--<li class="px-nav-item {{ route('home') ? 'active' : '' }}">--}}
            {{--<a href="{{ route('home') }}">--}}
                {{--<i class="px-nav-icon fa fa-comment fa-fw"></i>--}}
                {{--<span class="px-nav-label">Sugestões de Ofertas</span>--}}
            {{--</a>--}}
        {{--</li>--}}

        {{--<li class="px-nav-item {{ route('home') ? 'active' : '' }}">--}}
            {{--<a href="{{ route('home') }}">--}}
                {{--<i class="px-nav-icon fa fa-users fa-fw"></i>--}}
                {{--<span class="px-nav-label">Administradores</span>--}}
            {{--</a>--}}
        {{--</li>--}}

        {{--<li class="px-nav-item {{ route('home') ? 'active' : '' }}">--}}
            {{--<a href="{{ route('home') }}">--}}
                {{--<i class="px-nav-icon fa fa-users fa-fw"></i>--}}
                {{--<span class="px-nav-label">Usuários</span>--}}
            {{--</a>--}}
        {{--</li>--}}

    {{--</ul>--}}
{{--</nav>--}}

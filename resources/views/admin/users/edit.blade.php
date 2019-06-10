@extends('layouts.app')

@section('page-header')
    @include('layouts.components.pageheader', [
            'headerIcon'  => 'fa fa-user',
            'headerTitle' => $user->name,
            'breadcrumbs' => [
                ['name' => 'Usuários', 'url' => route('admin.users.index')],
            ],
            'tabs' => [
                ['name' => 'Perfil', 'id' => 'profile'],
                ['name' => 'Senha', 'id' => 'password'],
            ]
        ])
@endsection

@section('content')

    <div class="tab-content p-y-4">
        <div class="tab-pane fade" id="profile">
            @include('admin.users.tabs.profile')
        </div>
        <div class="tab-pane fade" id="password">
            @include('admin.users.tabs.password')
        </div>
    </div>

@endsection


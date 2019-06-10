@extends('layouts.app')

@section('page-header')
    @include('layouts.components.pageheader', [
            'headerIcon'  => 'fa fa-users',
            'headerTitle' => 'Usuários',
            'breadcrumbs' => [
                // ['name' => 'UI', 'url' => route('admin.dashboard')],
                // ['name' => 'UcasdasdI', 'url' => route('admin.dashboard')],
                // ['name' => 'hjfghj fghj ', 'url' => route('admin.dashboard')],
            ],
            'tabs' => [
                ['name' => 'Usuários', 'id' => 'usuarios'],
                ['name' => 'Tab 1', 'id' => 'tab_1'],
                ['name' => 'Tab 2', 'id' => 'tab_2'],
                // ['name' => 'Notifications', 'id' => 'notifications'],
            ]
        ])
@endsection

@section('content')

    <div class="tab-content p-y-3">
        <div class="tab-pane fade" id="usuarios">
            @include('admin.users.tabs.users')
        </div>
        <div class="tab-pane fade" id="tab_1">
            Tab 1
        </div>
        <div class="tab-pane fade" id="tab_2">
            Tab 2
        </div>
    </div>

@endsection

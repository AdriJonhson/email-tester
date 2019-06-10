@extends('layouts.app')

@section('page-header')
    @include('layouts.components.pageheader', [
            'headerIcon'  => 'fa fa-envelope',
            'headerTitle'       => 'Enviar E-Mail',
            'breadcrumbs' => [
                // ['name' => 'UI', 'url' => route('admin.dashboard')],
                // ['name' => 'UcasdasdI', 'url' => route('admin.dashboard')],
                // ['name' => 'hjfghj fghj ', 'url' => route('admin.dashboard')],
            ],
            'tabs' => [
                // ['name' => 'Profile', 'id' => 'profile'],
                // ['name' => 'Password', 'id' => 'password'],
                // ['name' => 'Notifications', 'id' => 'notifications'],
            ]
        ])
@endsection

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <form action="{!! route('send.mail') !!}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="file" id="upload-file" name="upload-file">
                </div>

                <button class="btn btn-success" type="submit">Enviar</button>
            </form>
        </div>
    </div>

    <script>
        _init.push(function(){


            $('#upload-file').dropify();

        });
    </script>
@endsection

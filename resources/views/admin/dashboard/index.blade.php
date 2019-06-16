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
            <form action="{!! route('send.mail') !!}" method="POST" enctype="multipart/form-data" id="form">
                @csrf
                <div class="form-group">
                    <label for="emails">E-Mails para quem vai ser enviado o teste</label>
                    <select name="emails[]" id="emails" class="form-control" multiple>
                        <option></option>
                        @foreach($sugestedEmails as $email)
                            <option value="{!! $email !!}">{!! $email !!}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="upload-file">Arquivos do E-Mail</label>
                    <input type="file" id="upload-file" name="upload-file">
                </div>

                <button class="btn btn-success" type="submit">Enviar</button>
            </form>
        </div>
    </div>

    <script>
        _init.push(function(){

            $('#upload-file').dropify();
            $('#emails').select2({
                placeholder: "Digite os e-mails para quem deseja enviar o e-mail de teste",
                allowClear: true,
                tags: true
            });

            $('#form').pxValidate({
                focusInvalid: false,
                rules: {
                    'emails[]': {
                        required: true
                    },
                    'upload-file': {
                        required: true
                    },
                }
            });
        });
    </script>
@endsection

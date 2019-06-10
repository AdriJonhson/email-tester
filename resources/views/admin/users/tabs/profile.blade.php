<div class="row">
    <form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="col-md-8 col-lg-9">
        @csrf()
        @method('PUT')

        <div class="p-x-1">
            {{-- NAME --}}
            <fieldset class="form-group form-group-lg {{ $errors->has('name')?'has-error has-validation-error':'' }}">
                <label for="name" class="required">Nome</label>
                <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}">
                @if($errors->has('name'))
                    <div class="form-message validation-error p-a-1">{{ $errors->first('name') }}</div>
                @endif
            </fieldset>
            {{-- USERNAME --}}
            <fieldset class="form-group form-group-lg {{ $errors->has('username')?'has-error has-validation-error':'' }}">
                <label for="username" class="required">Nome de usuário</label>
                <input type="text" class="form-control" name="username" value="{{ old('username', $user->username) }}">
                @if($errors->has('username'))
                    <div class="form-message validation-error p-a-1">{{ $errors->first('username') }}</div>
                @endif
            </fieldset>
            {{-- EMAIL --}}
            <fieldset class="form-group form-group-lg {{ $errors->has('email')?'has-error has-validation-error':'' }}">
                <label for="email" class="required">E-mail</label>
                <input type="text" class="form-control" name="email" value="{{ old('email', $user->email) }}">
                @if($errors->has('email'))
                    <div class="form-message validation-error p-a-1">{{ $errors->first('email') }}</div>
                @endif
            </fieldset>
            <button type="submit" class="btn btn-lg btn-primary m-t-3">Atualizar</button>
        </div>
    </form>

    <!-- Spacer -->
    <div class="m-t-4 visible-xs visible-sm"></div>

    <!-- Avatar -->
    <div class="col-md-4 col-lg-3">
        <div class="panel bg-transparent">
            <div class="panel-body text-xs-center">
                <img src="{{ $user->avatar() }}"
                     id="avatar"
                     alt=""
                     class=""
                     style="max-width: 100%; object-fit: cover;">
            </div>
        </div>
    </div>
</div>

<script>
    _init.push(function(){
    });
</script>

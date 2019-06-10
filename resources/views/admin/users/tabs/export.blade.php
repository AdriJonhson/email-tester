<div class="panel">

    <div class="panel-heading">
        Exportação de usuários por data de cadastro
    </div>

    <div class="panel-body">

        <form id="dropzonejs" action="{{ route('admin.users.export') }}" method="POST" class="col-md-8 col-lg-9" enctype="multipart/form-data" class="dropzone-box">
            @csrf()
            @method('post')
            <fieldset class="form-group form-group-lg {{ $errors->has('start_date') || $errors->has('end_date')?'has-error has-validation-error':'' }}">
                <label class="required" for="start_date">Data de início e fim</label>
                <div class="input-daterange input-group" id="datepicker-range">
                    <input type="text" class="form-control" name="start_date" value="{{ old('start_date', now()->subWeek(1)->format('d/m/Y')) }}">
                    <span class="input-group-addon">até</span>
                    <input type="text" class="form-control" name="end_date" value="{{ old('end_date', now()->format('d/m/Y')) }}">
                </div>
                @if($errors->has('start_date'))
                    <div class="form-message validation-error p-a-1">{!! $errors->first('start_date') !!}</div>
                @endif
                @if($errors->has('end_date'))
                    <div class="form-message validation-error p-a-1">{!! $errors->first('end_date') !!}</div>
                @endif
            </fieldset>

            <button type="submit" class="btn-primary">Exportar</button>
        </form>

    </div>
</div>
<script>
    _init.push(function(){

        $('#datepicker-range').datepicker({
            format: 'dd/mm/yyyy',
            zIndexOffset: 99999
        });

    });
</script>

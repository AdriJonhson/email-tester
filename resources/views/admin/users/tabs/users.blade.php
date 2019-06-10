<div class="table-primary">
    <table class="table table-striped table-bordered" id="datatables" style="width: 100%">
        <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

<script>
    _init.push(function(){
        window.table = $('#datatables').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('admin.users.index') }}',
            columns: [
                {data: 'name', name: 'name', render: function($data, $, $row){
                        return '<a href="'+$row.editUrl+'">'+$row.name+'</a>';
                    }},
                {data: 'email', name: 'email'},
                {data: 'name', name: 'name', sortable:false, render: function($data, $, $row){
                        let buttons = [
                            // '<a onclick="openUserData('+$row.id+')" href="#" class="btn btn-default btn-sm">Visualizar</a>'
                            '<a href="'+$row.editUrl+'" class="btn btn-default btn-sm">Editar</a>'
                        ];
                        return buttons.join('&nbsp;&nbsp;');
                    }},
            ]
        });
    });
</script>

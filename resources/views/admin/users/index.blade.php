@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Lista de usuários</h3>
            {!! Button::primary(Icon::plus() . ' Novo usuário')->asLinkTo(route('admin.users.create')) !!}
            {!!
            Table::withContents($users->items())
            ->striped()
            ->callback('Ações', function ($field,$model){
                $linkEdit = route('admin.users.edit',['user' => $model->id]);
                $linkShow = route('admin.users.show',['user' => $model->id]);
                return Button::link(Icon::create('pencil') . '&nbsp;&nbsp;Editar')->asLinkTo($linkEdit).'|'.
                    Button::link(Icon::create('folder-open') . '&nbsp;&nbsp;Ver')->asLinkTo($linkShow);
            })
            !!}

            {!! $users->links() !!}
        </div>
    </div>
@endsection
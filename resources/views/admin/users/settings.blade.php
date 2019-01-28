@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Meu perfil de usuário</h3>
            {!!
            form($form->add('insert', 'submit', [
                'attr' => [ 'class' => 'btn btn-primary btn-block' ],
                'label' => Icon::create('floppy-disk') . '&nbsp;&nbsp; Salvar'
            ]))
            !!}
        </div>
    </div>
@endsection
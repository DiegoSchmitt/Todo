<x-layout page="B7Web Todo: Login">
    <x-slot:btn>
        <a href="{{route('home')}}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id='task_section'>
        <h1>Registrar-se</h1>

        @if($errors->any())
            <ul class="alert alert-error">
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        <form  method="POST" action="{{route('user.register_action')}}">
            @csrf
            <x-form.text_input
                name="name"
                label="Nome"
                required="required"
                placeholder="Nome"
            />

            <x-form.text_input
                type="email"
                name="email"
                label="E-mail"
                required="required"
                placeholder="Email"
            />

            <x-form.text_input
                type="password"
                name="password"
                label="Senha"
                placeholder="Senha"
                required="required"
            />

            <x-form.text_input
                type="password"
                name="password_confirmation"
                label="Confirme a Senha"
                placeholder="Confirme a Senha"
                required="required"
            />

            <x-form.form_button resetTxt="Limpar" submitTxt="Registrar-se"/>

        </form>
    </section>

</x-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <style>
                    .form-control{ 
                        width: 100%;
                        border-radius: 5px;
                    }
                    .form-button{
                        background-color: black;
                        color: white;
                        border-radius: 10px;
                        padding: 10px 20px;
                    }
                </style>
                <form class="row g-3" method=POST action="/registerclient">
                    @csrf
                        <div class="mb-3">
                            <label for="textNome" class="form-label" name="labelNome">Nome</label>
                            <input type="text" class="form-control" name="inputNome">
                        </div>

                        <div class="mb-3">
                            <label for="textEndereco" class="form-label" name="labelEndereco">Endereço</label>
                            <input type="text" class="form-control" name="inputEndereco">
                        </div>

                        <div class="mb-3">
                            <label for="textBairro" class="form-label" name="labelBairro">Bairro</label>
                            <input type="text" class="form-control" name="inputBairro">
                        </div>

                        <div class="mb-3">
                            <label for="textCep" class="form-label" name="labelCep">Cep</label>
                            <input type="text" class="form-control" name="inputCep" placeholder="XXXXX-XXX">
                        </div>

                        <div class="mb-3">
                            <label for="textCidade" class="form-label" name="labelCidade">Cidade</label>
                            <input type="text" class="form-control" name="inputCidade">
                        </div>

                        <div class="mb-3">
                            <label for="textEstado" name="labelEstado">Estado</label>
                            <select class="form-control" name="inputEstado">
                                <option value="1">AC</option>
                                <option value="2">AL</option>
                                <option value="3">AP</option>
                                <option value="4">AM</option>
                                <option value="5">BA</option>
                                <option value="6">CE</option>
                                <option value="7">ES</option>
                                <option value="8">GO</option>
                                <option value="9">MA</option>
                                <option value="10">MT</option>
                                <option value="11">MS</option>
                                <option value="12">MG</option>
                                <option value="13">PA</option>
                                <option value="14">PB</option>
                                <option value="15">PR</option>
                                <option value="16">PE</option>
                                <option value="17">PI</option>
                                <option value="18">RJ</option>
                                <option value="19">RN</option>
                                <option value="20">RS</option>
                                <option value="21">RO</option>
                                <option value="22">RR</option>
                                <option value="23">SC</option>
                                <option value="24">SP</option>
                                <option value="25">SE</option>
                                <option value="26">TO</option>
                                <option value="27">DF</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="textBairro" name="labelBairro">Email</label>
                            <input type="email" class="form-control" name="inputEmail" placeholder="example@gmail.com">
                        </div>
                        
                        <div class="mb-3">
                            <label for="textSenha" name="labelSenha">Senha</label>
                            <input type="password" class="form-control" name="inputSenha">
                        </div>
                        <div>
                            <button type="submit" class="form-button" name="button-submit">Cadastrar</button>
                        </div>
                    
                </div>
                
                
            </div>
        </div>
    </div>
</x-app-layout>
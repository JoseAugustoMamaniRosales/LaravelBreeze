<?php
    use App\Models\Clientes;
?>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Visualizar Clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <style>
                        .d-flex{
                            display: flex;
                            justify-content: center;
                        }
                        thead{
                            background-color: black;
                            color: white;
                        }
                        th{
                            padding: 10px;
                        }
                        .button{
                            background-color: black;
                            border-radius: 15px;
                            height: 40px;
                            width: 70px;
                            color: white;
                        }
                        
                    </style>
                    <div class="d-flex">
                        <table class="table table-responsive" style="width: auto;">

                            <thead class="table-active bg-dark">
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>

                            <tbody class="tbody bg-light">
                                @foreach($clientes as $cliente)
                                <tr>
                                    <th scope = "col"> {{$cliente->id}} </td>
                                    <td scope = "col"> {{$cliente->nome}} </td>
                                    <td scope = "col"> {{$cliente->email}} </td>
                                    <td scope = "col">
                                        <button type = "button" class="button">Editar</button>
                                        <button type = "button" class="button">Excluir</button>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
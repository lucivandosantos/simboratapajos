<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{route('pagecreate')}}"><button class="btn btn-success">Nova pagina</button></a>
                   <table class="table">
                        <thead>
                            <th scope="col">#</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Opções</th>
                        </thead>
                        <tbody>
                            @foreach ($pages as $page)
                            <tr><td scope="col">{{$page->id}}</td>
                                <td>{{$page->title}}</td>
                                <td> <a href="dashboard/pagedatails/{{$page->id}}"><button class="btn btn-primary">visualizar</button></a>
                                    <a href="{{$page->id}}/pageedit"><button class="btn btn-warning">editar</button></a>
                                    <a href="{{$page->id}}"><button class="btn btn-danger">excluir</button></a></td></tr>
                               
                            @endforeach
                           
                        </tbody>
                    
                   </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

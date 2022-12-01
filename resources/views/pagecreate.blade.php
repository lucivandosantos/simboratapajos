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
                    @if(isset($pages))
                    <form name="formEdit" id="formEdit" method="post" action="/dashboard/{{$pages->id}}/pageedit" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @method('PUT')
                       
                @else
                    <form name="formCad"  id="formCad" method="POST" action="/dashboard/pagecreate" enctype="multipart/form-data">
                        @endif
                        {{ csrf_field() }}
                        <input type="text" class="form-control mb-3" placeholder="Titulo da pagina" name="title" id="title" value="{{$pages->title ?? ''}}">
                        <textarea class="form-control" id="description" name="description"> {{$pages->description ?? ''}}</textarea>
                        <script src="{{ asset('ckeditor/ckeditor.js') }} " charset="utf-8">
                        
                        </script>
                        <script>
                        CKEDITOR.replace( 'description' , {
        filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
                       
                        </script>

                        <button type="submit" class="btn btn-primary mt-3">@if(isset($pages)) Editar @else Cadastrar @endif</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

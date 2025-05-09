<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{__('Modificar Tarefa: Atualizar')}}
        </h2>
    </x-slot>
<body>

    <main class="flex justify-center">
        <section class="bg-slate-2 mt-4 w-3/4 p-4 shadow-lg shadow-indigo-200/50">

            <form action="{{route('task.update', $task->id)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="mt-4 flex flex-col">
                    <label for="description" class="text-indigo-500">Descrição da Tarefa:</label>
                    <input type="text" name="description" id="description" class="rounded-md border border-indigo-600 p-2" value="{{ @old('description', $task->description) }}">
                    @error('description')
                    <p class="text-muted text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-4 flex flex-col">
                    <label for="date" class="text-indigo-500">Data Programada:</label>
                    <input type="date" name="date" id="date" class="rounded-md border border-indigo-600 p-2" value="{{ @old('date', $task->date) }}">
                    @error('date')
                    <p class="text-muted text-red-400">{{ $message }}</p>
                    @enderror
                </div>
                
                <div class="mt-4 flex justify-end">
                    <input type="submit" value="Salvar Alterações" class="rounded-md bg-indigo-500 p-2 text-indigo-50 shadow-md shadow-indigo-500/50 hover:bg-indigo-400 w-40">
                </div>
            </form>

        </section>
    </main>
    
</body>
</x-app-layout>
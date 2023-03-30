<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tipo</title>
</head>
<body>
    <section>
        <form action="{{ route ('type.update', $type->id) }}" method="post"> 
            @csrf      
            @method('post')
            <div>
              <x-input-label for="name" :value="__('Tipo:')" />
              <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" required autofocus autocomplete="name" />
              <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>
            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('Guardar') }}</x-primary-button>
            </div>
        </form>  
    </section>
</body>
</html>
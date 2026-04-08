<div class="space-y-6">
    
    <div>
        <x-input-label for="nombre_visitante" :value="__('Nombre Visitante')"/>
        <x-text-input id="nombre_visitante" name="nombre_visitante" type="text" class="mt-1 block w-full" :value="old('nombre_visitante', $visitante?->nombre_visitante)" autocomplete="nombre_visitante" placeholder="Nombre Visitante"/>
        <x-input-error class="mt-2" :messages="$errors->get('nombre_visitante')"/>
    </div>
    <div>
        <x-input-label for="numero_identificacion" :value="__('Numero Identificacion')"/>
        <x-text-input id="numero_identificacion" name="numero_identificacion" type="text" class="mt-1 block w-full" :value="old('numero_identificacion', $visitante?->numero_identificacion)" autocomplete="numero_identificacion" placeholder="Numero Identificacion"/>
        <x-input-error class="mt-2" :messages="$errors->get('numero_identificacion')"/>
    </div>
    <div>
        <x-input-label for="relacion_con_prisionero" :value="__('Relacion Con Prisionero')"/>
        <x-text-input id="relacion_con_prisionero" name="relacion_con_prisionero" type="text" class="mt-1 block w-full" :value="old('relacion_con_prisionero', $visitante?->relacion_con_prisionero)" autocomplete="relacion_con_prisionero" placeholder="Relacion Con Prisionero"/>
        <x-input-error class="mt-2" :messages="$errors->get('relacion_con_prisionero')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Guardar</x-primary-button>
    </div>
</div>
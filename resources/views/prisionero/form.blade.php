<div class="space-y-6">
    
    <div>
        <x-input-label for="nombre_prisionero" :value="__('Nombre Prisionero')"/>
        <x-text-input id="nombre_prisionero" name="nombre_prisionero" type="text" class="mt-1 block w-full" :value="old('nombre_prisionero', $prisionero?->nombre_prisionero)" autocomplete="nombre_prisionero" placeholder="Nombre Prisionero"/>
        <x-input-error class="mt-2" :messages="$errors->get('nombre_prisionero')"/>
    </div>
    <div>
        <x-input-label for="fecha_nacimiento" :value="__('Fecha Nacimiento')"/>
        <x-text-input id="fecha_nacimiento" name="fecha_nacimiento" type="text" class="mt-1 block w-full" :value="old('fecha_nacimiento', $prisionero?->fecha_nacimiento)" autocomplete="fecha_nacimiento" placeholder="Fecha Nacimiento"/>
        <x-input-error class="mt-2" :messages="$errors->get('fecha_nacimiento')"/>
    </div>
    <div>
        <x-input-label for="fecha_ingreso" :value="__('Fecha Ingreso')"/>
        <x-text-input id="fecha_ingreso" name="fecha_ingreso" type="text" class="mt-1 block w-full" :value="old('fecha_ingreso', $prisionero?->fecha_ingreso)" autocomplete="fecha_ingreso" placeholder="Fecha Ingreso"/>
        <x-input-error class="mt-2" :messages="$errors->get('fecha_ingreso')"/>
    </div>
    <div>
        <x-input-label for="delito_cometido" :value="__('Delito Cometido')"/>
        <x-text-input id="delito_cometido" name="delito_cometido" type="text" class="mt-1 block w-full" :value="old('delito_cometido', $prisionero?->delito_cometido)" autocomplete="delito_cometido" placeholder="Delito Cometido"/>
        <x-input-error class="mt-2" :messages="$errors->get('delito_cometido')"/>
    </div>
    <div>
        <x-input-label for="celda_asignada" :value="__('Celda Asignada')"/>
        <x-text-input id="celda_asignada" name="celda_asignada" type="text" class="mt-1 block w-full" :value="old('celda_asignada', $prisionero?->celda_asignada)" autocomplete="celda_asignada" placeholder="Celda Asignada"/>
        <x-input-error class="mt-2" :messages="$errors->get('celda_asignada')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>
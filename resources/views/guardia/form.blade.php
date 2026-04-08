<div class="space-y-6">
    
    <div>
        <x-input-label for="nombre_guardia" :value="__('Nombre Guardia')"/>
        <x-text-input id="nombre_guardia" name="nombre_guardia" type="text" class="mt-1 block w-full" :value="old('nombre_guardia', $guardia?->nombre_guardia)" autocomplete="nombre_guardia" placeholder="Nombre Guardia"/>
        <x-input-error class="mt-2" :messages="$errors->get('nombre_guardia')"/>
    </div>
    <div>
        <x-input-label for="numero_identificacion" :value="__('Numero Identificacion')"/>
        <x-text-input id="numero_identificacion" name="numero_identificacion" type="text" class="mt-1 block w-full" :value="old('numero_identificacion', $guardia?->numero_identificacion)" autocomplete="numero_identificacion" placeholder="Numero Identificacion"/>
        <x-input-error class="mt-2" :messages="$errors->get('numero_identificacion')"/>
    </div>
    <div>
        <x-input-label for="fecha_hora_login" :value="__('Fecha Hora Login')"/>
        <x-text-input id="fecha_hora_login" name="fecha_hora_login" type="text" class="mt-1 block w-full" :value="old('fecha_hora_login', $guardia?->fecha_hora_login)" autocomplete="fecha_hora_login" placeholder="Fecha Hora Login"/>
        <x-input-error class="mt-2" :messages="$errors->get('fecha_hora_login')"/>
    </div>
    <div>
        <x-input-label for="fecha_hora_logout" :value="__('Fecha Hora Logout')"/>
        <x-text-input id="fecha_hora_logout" name="fecha_hora_logout" type="text" class="mt-1 block w-full" :value="old('fecha_hora_logout', $guardia?->fecha_hora_logout)" autocomplete="fecha_hora_logout" placeholder="Fecha Hora Logout"/>
        <x-input-error class="mt-2" :messages="$errors->get('fecha_hora_logout')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Guardar</x-primary-button>
    </div>
</div>
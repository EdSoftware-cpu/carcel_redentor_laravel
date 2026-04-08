<div class="space-y-6">
    
    <div>
        <x-input-label for="fecha_hora_inicio_visita" :value="__('Fecha Hora Inicio Visita')"/>
        <x-text-input id="fecha_hora_inicio_visita" name="fecha_hora_inicio_visita" type="text" class="mt-1 block w-full" :value="old('fecha_hora_inicio_visita', $visita?->fecha_hora_inicio_visita)" autocomplete="fecha_hora_inicio_visita" placeholder="Fecha Hora Inicio Visita"/>
        <x-input-error class="mt-2" :messages="$errors->get('fecha_hora_inicio_visita')"/>
    </div>
    <div>
        <x-input-label for="fecha_hora_fin_visita" :value="__('Fecha Hora Fin Visita')"/>
        <x-text-input id="fecha_hora_fin_visita" name="fecha_hora_fin_visita" type="text" class="mt-1 block w-full" :value="old('fecha_hora_fin_visita', $visita?->fecha_hora_fin_visita)" autocomplete="fecha_hora_fin_visita" placeholder="Fecha Hora Fin Visita"/>
        <x-input-error class="mt-2" :messages="$errors->get('fecha_hora_fin_visita')"/>
    </div>
    <div>
        <x-input-label for="prisionero_id" :value="__('Prisionero Id')"/>
        <x-select id="prisionero_id" name="prisionero_id" class="mt-1 block w-full" :value="old('prisionero_id', $visita?->prisionero_id)" autocomplete="prisionero_id">
            <option value="">Seleccione un prisionero</option>
            @foreach($prisioneros as $prisionero)
                <option value="{{ $prisionero->id }} {{ (old('prisionero_id', $visita?->prisionero_id) == $prisionero->id) ? 'selected' : '' }}">
                    {{ $prisionero->nombre }}
                </option>
            @endforeach
        
    </div>
    <div>
        <x-input-label for="visitante_id" :value="__('Visitante Id')"/>
        <x-select id="visitante_id" name="visitante_id" class="mt-1 block w-full" :value="old('visitante_id', $visita?->visitante_id)" autocomplete="visitante_id">
            <option value="">Seleccione un visitante</option>
            @foreach($visitantes as $visitante)
                <option value="{{ $visitante->id }} {{ (old('visitante_id', $visita?->visitante_id) == $visitante->id) ? 'selected' : '' }}">
                    {{ $visitante->nombre }}
                </option>
            @endforeach
        </x-select>
        <x-input-error class="mt-2" :messages="$errors->get('visitante_id')"/>
    </div>
    <div>
        <x-input-label for="guardia_id" :value="__('Guardia Id')"/>
        <x-select id="guardia_id" name="guardia_id" class="mt-1 block w-full" :value="old('guardia_id', $visita?->guardia_id)" autocomplete="guardia_id">
            <option value="">Seleccione un guardia</option>
            @foreach($guardias as $guardia)
                <option value="{{ $guardia->id }} {{ (old('guardia_id', $visita?->guardia_id) == $guardia->id) ? 'selected' : '' }}">
                    {{ $guardia->nombre }}
                </option>
            @endforeach
        </x-select>
        <x-input-error class="mt-2" :messages="$errors->get('guardia_id')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>
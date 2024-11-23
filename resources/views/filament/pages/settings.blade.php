<x-filament-panels::page>
    <div class="grid grid-cols-1 gap-6 max-w-full">
        <div class="space-y-6">
            <div class="flex flex-col md:flex-row md:space-x-6 space-y-6 md:space-y-0">
                <div class="w-full md:w-1/2">
                    <div class="bg-white rounded-lg shadow p-6">
                        <h2 class="text-lg font-semibold mb-4">Concurso de Remoção</h2>
                        <select wire:model="concurso" id="concurso" wire:change="loadTypes" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="">Selecione</option>
                            <option value="1">Tipo</option>
                        </select>
                    </div>
                </div>
                <div class="w-full md:w-1/2">
                    <div class="bg-white rounded-lg shadow p-6">
                        <h2 class="text-lg font-semibold mb-4">Tipo de Listagem</h2>
                        <select wire:model="type" id="type" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="">Selecione</option>
                            <option value="1">Tipo</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-lg font-semibold mb-4">Modelo de Relatório</h2>
                <select wire:model="modelReport" id="modelReport" class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    <option value="1">Modelo Professor</option>
                    <option value="2">Modelo Quadro Geral</option>
                </select>
            </div>
        </div>
    </div>

    <hr />

    <div class="grid grid-cols-1 gap-6 max-w-full">
        <div class="flex flex-col md:flex-row md:space-x-6 space-y-6 md:space-y-0">
            <div class="w-full md:w-1/2">
                <div class="bg-white rounded-lg shadow p-6">
                    <x-filament::button wire:click="listagem1QuadroGeralPdf" wire:loading.attr="disabled" class="w-full">
                        Listagem 1 - Gerar relatório
                    </x-filament::button>
                </div>
            </div>
            <div class="w-full md:w-1/2">
                <div class="bg-white rounded-lg shadow p-6">
                    <x-filament::button wire:click="listagem2QuadroGeralPdf" wire:loading.attr="disabled" class="w-full">
                        Listagem 2 - Gerar relatório
                    </x-filament::button>
                </div>
            </div>
        </div>
    </div>
</x-filament-panels::page>

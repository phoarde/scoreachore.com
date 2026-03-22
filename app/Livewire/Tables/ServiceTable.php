<?php

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Locked;
use RamonRietdijk\LivewireTables\Actions\Action;
use RamonRietdijk\LivewireTables\Columns\ActionColumn;
use RamonRietdijk\LivewireTables\Columns\BooleanColumn;
use RamonRietdijk\LivewireTables\Columns\Column;
use RamonRietdijk\LivewireTables\Columns\DateColumn;
use RamonRietdijk\LivewireTables\Columns\ImageColumn;
use RamonRietdijk\LivewireTables\Columns\SelectColumn;
use RamonRietdijk\LivewireTables\Filters\BooleanFilter;
use RamonRietdijk\LivewireTables\Filters\DateFilter;
use RamonRietdijk\LivewireTables\Filters\SelectFilter;
use RamonRietdijk\LivewireTables\Livewire\LivewireTable;
use Livewire\Component;
use App\Models\Service;
use App\Models\Skill;

new class extends livewireTable
{

    public string $sortColumn='service_name';
    public string $sortDirection='asc';
    public $models=Service::class;

    protected function columns(): array
    {
        return[
            Column::make(__('Service Name')'service_name')->searchable()->sortable(),
            BooleanColumn::make(__('Active')'active'),
            SelectColumn::make(__('Skill')'skills.skill')->options(Skill:query()->pluck('skill','skill')->toArray()-> sortable()->seachable()),
            ActionColumn::make(__('Actions')->sortable(),
            Column::make(__('View')'view'),
        ];
        protected function  actions():array
    {
        return[
        Action::make(__('Add Service') function (Service $service $description):void
            {
        Service::create(['service_name' => $service, 'service_description' => $description]);
                 }),
            Action::make(__('Edit Service')function (Service $service $description):void
                    {
        Service::update(['service_name' => $service, 'service_description' => $description]);
                     }),
             Action::make(__('Delete')function (collection $models): void {
        foreach ($models as $model) {
            $model->delete();
        }
    })
   ]}
            ]
};
?>

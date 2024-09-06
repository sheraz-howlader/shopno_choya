<?php

namespace App\Services;

trait DataTableFilterService
{
    public function query($model, $target_table)
    {
        return $model::query();
    }

    public function querySearch($modelQuery, $search, $column_name)
    {
        return $modelQuery->when(isset($search), function ($query) use ($search, $column_name) {
            $query->whereHas('user', function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('email', 'like', '%' . $search . '%')
                    ->orWhere('phone_no', 'like', '%' . $search . '%');
            });
        });
    }

    public function orQuerySearch($modelQuery, $search, $column_name)
    {
        return $modelQuery->when(isset($search), function ($query) use ($search, $column_name) {
            $query->orwhere([[$column_name, 'LIKE', "%{$search}%"]]);
        });
    }

    public function queryGet($request, $filter, $columns, $target_table)
    {
        $start = $request->input('start');
        $limit = $request->input('length');
        $order = $target_table.$columns[$request->input('order.0.column')];
        $direction = $request->input('order.0.dir');

        return $filter->offset($start)
            ->limit($limit)
            ->orderBy($order, $direction)
            ->get();
    }
}

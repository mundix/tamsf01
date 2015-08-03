<?php

/**
 * Este controller, contendra los assets necesarios
 * como javascript y css para los templates
*/
class AssetsController extends BaseController
{
    protected function getJsDataTables()
    {
        return [
            //DataTable Plugins
            'melon/plugins/datatables/jquery.dataTables.min.js',
            'melon/plugins/datatables/tabletools/TableTools.min.js',
            'melon/plugins/datatables/colvis/ColVis.min.js',
            'melon/plugins/datatables/columnfilter/jquery.dataTables.columnFilter.js',
            'melon/plugins/datatables/DT_bootstrap.js',
            //apps
            'melon/js/app.js',
            'melon/js/plugins.js',
            'melon/js/plugins.form-components.js',
        ];
    }
    protected function getCssDataTable()
    {
        return [];
    }

    public function getProductsData()
    {
        $raw = \DB::table('products')
            ->select(DB::raw('sum(stock * price) as total'))
            ->get();

        return [
            'total' => $raw[0]->total
        ];
    }
}
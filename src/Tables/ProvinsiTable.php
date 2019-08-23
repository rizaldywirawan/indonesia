<?php

namespace Laravolt\Indonesia\Tables;

use Laravolt\Suitable\Columns\Numbering;

class ProvinsiTable extends \Laravolt\Suitable\TableView
{
    protected function columns()
    {
        return [
            Numbering::make('No'),
            \Laravolt\Suitable\Columns\Id::make('id', 'Kode'),
            \Laravolt\Suitable\Columns\Text::make('name'),
            \Laravolt\Suitable\Columns\RestfulButton::make('indonesia::provinsi')->except('view'),
        ];
    }
}
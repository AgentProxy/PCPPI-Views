<?php

namespace TCG\Voyager\FormFields;

class ListAreaHandler extends AbstractHandler
{
    protected $codename = 'list_area';

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('voyager::formfields.list_area', [
            'row'             => $row,
            'options'         => $options,
            'dataType'        => $dataType,
            'dataTypeContent' => $dataTypeContent,
        ]);
    }
}
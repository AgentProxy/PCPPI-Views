<?php

namespace TCG\Voyager\Widgets;

use Arrilot\Widgets\AbstractWidget;
use TCG\Voyager\Facades\Voyager;

class VacancyDimmer extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Voyager::model('User')->count();
        $string = $count == 1 ? 'vacancy' : 'vacancies';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-group',
            // 'title'  => "{$count} {$string}",
            'title' => "Vacancies",
            // 'text'   => "You have {$count} {$string} in your database. Click on button below to view all vacancies.",
            'text' => "Click on button below to view all vacancies.",
            'button' => [
                'text' => 'View all vacancies',
                'link' => route('voyager.vacancies.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/03.png'),
        ]));
    }
}

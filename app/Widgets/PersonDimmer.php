<?php

namespace App\Widgets;

use App\Models\Person;

use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class PersonDimmer extends BaseDimmer
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
        $count = Person::count();
        $string = 'People';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'fas fa-users fa-3x text-info',
            'title'  => "{$count} persona(s)",
            'text'   => __('Tienes '.$count.' persona(s) registrada(s). Click para verlos.'),
            'button' => [
                'text' => __('Ver'),
                'link' => route('voyager.people.index'),
            ],
            'image' => asset('storage/settings/widgets/person.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return app('VoyagerAuth')->user()->can('browse', Voyager::model('User'));
    }
}

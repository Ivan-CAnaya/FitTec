<?php

namespace App\Widgets;

use App\Models\Invoice;
use DB;

use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class CurrentYearIncomeDimmer extends BaseDimmer
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
        $count = Invoice::where('created_at','>=',date('Y').'-01-01 00:00:00')->sum('total');
        $string = 'año';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'fas fa-money-bill-wave-alt fa-3x text-success',
            'title'  => "Este {$string} el ingreso es de $ {$count}",
            'text'   => __('Click para ver mas'),
            'button' => [
                'text' => __('Ver'),
                'link' => route('voyager.invoice.index'),
            ],
            'image' => asset('storage/settings/widgets/CurrentYearIncome.jpg'),
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

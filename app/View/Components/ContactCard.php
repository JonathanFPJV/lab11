<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ContactCard extends Component
{
    public $contact;

    /**
     * Create a new component instance.
     *
     * @param $contact
     * @return void
     */
    public function __construct($contact)
    {
        //
        $this->contact = $contact;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View
     */
    public function render(): View|Closure|string
    {
        return view('components.contact-card');
    }
}

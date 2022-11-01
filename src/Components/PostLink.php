<?php
declare(strict_types=1);

namespace Salehhashemi1992\LaravelPostLink\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PostLink extends Component
{
    /**
     * @var string
     */
    public string $uniqueId;

    /**
     * @param string $method
     * @param string $url
     * @param string|null $confirm
     */
    public function __construct(
        public string $method,
        public string $url,
        public ?string $confirm = null,
    ) {
        $this->uniqueId = str_replace('.', '', uniqid('post_link_', true));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function render(): View
    {
        return view('post-link::post-link');
    }
}

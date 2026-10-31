<?php

namespace App\Models\Concerns;

use App\Support\Media;

trait HasPortfolioImage
{
    public function imageUrl(): ?string
    {
        return Media::display($this->image);
    }
}

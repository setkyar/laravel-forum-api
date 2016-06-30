<?php

namespace App\Transformer;

use App\Models\Section;
use League\Fractal\TransformerAbstract;

class SectionTransformer extends TransformerAbstract
{
	public function transform(Section $section)
	{
		return [
			'id'			=> $section->id,
			'title' 		=> $section->title,
			'slug'			=> $section->slug,
			'decription'	=> $section->description
		];
	}
}
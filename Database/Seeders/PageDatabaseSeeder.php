<?php

namespace Modules\Page\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Modules\Page\Repositories\PageRepository;

class PageDatabaseSeeder extends Seeder
{
    /**
     * @var PageRepository
     */
    private $page;

    public function __construct(PageRepository $page)
    {
        $this->page = $page;
    }

    public function run()
    {
        Model::unguard();

        $data = [
            'template' => 'home',
            'is_home' => 1,
            'es' => [
                'title' => 'Página de inicio',
                'slug' => 'inicio',
                'body' => '<p><strong>¡Lo hiciste!</strong></p>
<p>Has instalado AsgardCMS y estás listo para pasar al <a href="/backend">área de administración</a>.</p>
<h2>&iquest;Qu&eacute; es lo siguiente?</h2>
<p>Aprende cómo puede desarrollar módulos para AsgardCMS leyendo nuestra <a href="https://github.com/AsgardCms/Documentation">documentación</a>.</p>
',
                'meta_title' => 'Página de inicio',
            ],
            'en' => [
                'title' => 'Home page',
                'slug' => 'home',
                'body' => '<p><strong>You made it!</strong></p>
<p>You\'ve installed AsgardCMS and are ready to proceed to the <a href="/en/backend">administration area</a>.</p>
<h2>What\'s next?</h2>
<p>Learn how you can develop modules for AsgardCMS by reading our <a href="https://github.com/AsgardCms/Documentation">documentation</a>.</p>
',
                'meta_title' => 'Home page',
            ],
        ];
        $this->page->create($data);
    }
}

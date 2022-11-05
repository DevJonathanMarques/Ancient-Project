<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	public function initRoutes($value=''){
		
		$routes['home'] = array(
			'route' => '/',
			'controller' => 'IndexController',
			'action' => 'index'
		);

		$routes['todosRegistros'] = array(
			'route' => '/todosRegistros',
			'controller' => 'IndexController',
			'action' => 'todosRegistros'
		);

		$routes['biografias'] = array(
			'route' => '/biografias',
			'controller' => 'IndexController',
			'action' => 'biografias'
		);

		$routes['noticia'] = array(
			'route' => '/noticia',
			'controller' => 'IndexController',
			'action' => 'noticia'
		);

		$routes['idades'] = array(
			'route' => '/idades',
			'controller' => 'IndexController',
			'action' => 'idades'
		);

		$routes['prehistoria'] = array(
			'route' => '/prehistoria',
			'controller' => 'IndexController',
			'action' => 'prehistoria'
		);

		$routes['antiga'] = array(
			'route' => '/antiga',
			'controller' => 'IndexController',
			'action' => 'antiga'
		);

		$routes['media'] = array(
			'route' => '/media',
			'controller' => 'IndexController',
			'action' => 'media'
		);

		$routes['moderna'] = array(
			'route' => '/moderna',
			'controller' => 'IndexController',
			'action' => 'moderna'
		);

		$routes['contemporanea'] = array(
			'route' => '/contemporanea',
			'controller' => 'IndexController',
			'action' => 'contemporanea'
		);

		$routes['mundo'] = array(
			'route' => '/mundo',
			'controller' => 'IndexController',
			'action' => 'mundo'
		);

		$routes['brasil'] = array(
			'route' => '/brasil',
			'controller' => 'IndexController',
			'action' => 'brasil'
		);

		$routes['fotos'] = array(
			'route' => '/fotos',
			'controller' => 'IndexController',
			'action' => 'fotos'
		);

		///////////////////////////////////////////////////////////////

		$routes['news'] = array(
			'route' => '/news',
			'controller' => 'NewsController',
			'action' => 'news'
		);

		$routes['pesquisarNoticias'] = array(
			'route' => '/pesquisarNoticias',
			'controller' => 'NewsController',
			'action' => 'pesquisarNoticias'
		);

		$routes['pesquisarBios'] = array(
			'route' => '/pesquisarBios',
			'controller' => 'NewsController',
			'action' => 'pesquisarBios'
		);

		$routes['criar_noticia'] = array(
			'route' => '/criar_noticia',
			'controller' => 'NewsController',
			'action' => 'criarNoticia'
		);

		$routes['inserir_noticia'] = array(
			'route' => '/inserir_noticia',
			'controller' => 'NewsController',
			'action' => 'inserirNoticia'
		);

		$routes['editor_noticia'] = array(
			'route' => '/editor_noticia',
			'controller' => 'NewsController',
			'action' => 'editorNoticia'
		);

		$routes['editar_noticia'] = array(
			'route' => '/editar_noticia',
			'controller' => 'NewsController',
			'action' => 'editarNoticia'
		);

		$routes['remover_noticia'] = array(
			'route' => '/remover_noticia',
			'controller' => 'NewsController',
			'action' => 'removerNoticia'
		);

		$routes['bios'] = array(
			'route' => '/bios',
			'controller' => 'NewsController',
			'action' => 'bios'
		);

		$routes['criar_bio'] = array(
			'route' => '/criar_bio',
			'controller' => 'NewsController',
			'action' => 'criarBio'
		);

		$routes['inserir_bio'] = array(
			'route' => '/inserir_bio',
			'controller' => 'NewsController',
			'action' => 'inserirBio'
		);

		$routes['editor_bio'] = array(
			'route' => '/editor_bio',
			'controller' => 'NewsController',
			'action' => 'editorBio'
		);

		$routes['editar_bio'] = array(
			'route' => '/editar_bio',
			'controller' => 'NewsController',
			'action' => 'editarBio'
		);

		$routes['remover_bio'] = array(
			'route' => '/remover_bio',
			'controller' => 'NewsController',
			'action' => 'removerBio'
		);

		$this->setRoutes($routes);

	}

}

?>
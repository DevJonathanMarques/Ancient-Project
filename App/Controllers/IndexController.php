<?php

	namespace APP\Controllers;

	use MF\Controller\Action;
	use MF\Model\Container;

	use App\Conection;

	class IndexController extends Action {

		//PAGINA HOME
		public function index(){

			$noticia = Container::getModel('Noticia');

			$this->view->noticiaMundo = $noticia->getNoticiaHome('mundo');
			$this->view->noticiaBrasil = $noticia->getNoticiaHome('brasil');

			$this->view->noticiasMundo = $noticia->getNoticiasHome('mundo');
			$this->view->noticiasBrasil = $noticia->getNoticiasHome('brasil');

			$biografia = Container::getModel('Biografia');
			$this->view->biografias = $biografia->getBios(6, 0);
			
			$this->render('index', 'layout1');

		}

		//MODELO NOTÍCIA
		public function noticia(){

			$noticia = Container::getModel('Noticia');
			$noticia->__set('id', $_GET['id']);

			$this->view->noticia = $noticia->getNoticia();
			
			$this->render('noticia', 'layout1');

		}

		//PESQUISANDO REGISTROS
		public function todosRegistros(){

			$noticia = Container::getModel('Noticia');
			$pesquisa = $_GET['dados'];

			if (isset($_GET['dados']) && $_GET['dados'] != '') {

				$noticia = Container::getModel('Noticia');

				$total_por_pagina = 2;
				$pagina_atual = isset($_GET['pag']) ? $_GET['pag'] : 1;
				$deslocamento = ($pagina_atual - 1) * $total_por_pagina;

				$total_registros = $noticia->getTotalRegistros($pesquisa);
				$this->view->total_paginas = ceil($total_registros[0]/$total_por_pagina);


				$this->view->noticias = $noticia->getTodosRegistros($pesquisa, $total_por_pagina, $deslocamento);
				$this->view->pag = 'search';

				if ($this->view->noticias == []) {
					header('location: /search?erro=erro');
				}
				
				$this->render('search', 'layout1');

			} else {
				header('location: /search');
			}

		}

		public function search(){

			$this->view->noticias = '';

			$this->render('search', 'layout1');

		}

		//PAGINA DE BIOGRAFIAS
		public function biografias(){

			$biografia = Container::getModel('Biografia');

			$total_por_pagina = 2;
			$pagina_atual = isset($_GET['pag']) ? $_GET['pag'] : 1;
			$deslocamento = ($pagina_atual - 1) * $total_por_pagina;

			$total_registros = $biografia->getTotalBios();
			$this->view->total_paginas = ceil($total_registros[0]/$total_por_pagina);

			$this->view->noticias = $biografia->getBios($total_por_pagina, $deslocamento);
			$this->view->pag = 'biografias';

			$this->render('noticias', 'layout1');

		}

		//PAGINA DAS IDADES
		public function idades(){
			
			$this->render('idades', 'layout1');

		}

		public function prehistoria(){

			$noticia = Container::getModel('Noticia');

			$total_por_pagina = 2;
			$pagina_atual = isset($_GET['pag']) ? $_GET['pag'] : 1;
			$deslocamento = ($pagina_atual - 1) * $total_por_pagina;

			$total_registros = $noticia->getTotalIdade('prehistoria');
			$this->view->total_paginas = ceil($total_registros[0]/$total_por_pagina);

			$this->view->noticias = $noticia->getNoticiasIdade('prehistoria', $total_por_pagina, $deslocamento);
			$this->view->pag = 'prehistoria';
			
			$this->render('noticias', 'layout1');

		}

		public function antiga(){

			$noticia = Container::getModel('Noticia');

			$total_por_pagina = 2;
			$pagina_atual = isset($_GET['pag']) ? $_GET['pag'] : 1;
			$deslocamento = ($pagina_atual - 1) * $total_por_pagina;

			$total_registros = $noticia->getTotalIdade('antiga');
			$this->view->total_paginas = ceil($total_registros[0]/$total_por_pagina);

			$this->view->noticias = $noticia->getNoticiasIdade('antiga', $total_por_pagina, $deslocamento);
			$this->view->pag = 'antiga';
			
			$this->render('noticias', 'layout1');

		}

		public function media(){

			$noticia = Container::getModel('Noticia');

			$total_por_pagina = 2;
			$pagina_atual = isset($_GET['pag']) ? $_GET['pag'] : 1;
			$deslocamento = ($pagina_atual - 1) * $total_por_pagina;

			$total_registros = $noticia->getTotalIdade('media');
			$this->view->total_paginas = ceil($total_registros[0]/$total_por_pagina);

			$this->view->noticias = $noticia->getNoticiasIdade('media', $total_por_pagina, $deslocamento);
			$this->view->pag = 'media';
			
			$this->render('noticias', 'layout1');

		}

		public function moderna(){

			$noticia = Container::getModel('Noticia');

			$total_por_pagina = 2;
			$pagina_atual = isset($_GET['pag']) ? $_GET['pag'] : 1;
			$deslocamento = ($pagina_atual - 1) * $total_por_pagina;

			$total_registros = $noticia->getTotalIdade('moderna');
			$this->view->total_paginas = ceil($total_registros[0]/$total_por_pagina);

			$this->view->noticias = $noticia->getNoticiasIdade('moderna', $total_por_pagina, $deslocamento);
			$this->view->pag = 'moderna';
			
			$this->render('noticias', 'layout1');

		}

		public function contemporanea(){

			$noticia = Container::getModel('Noticia');

			$total_por_pagina = 2;
			$pagina_atual = isset($_GET['pag']) ? $_GET['pag'] : 1;
			$deslocamento = ($pagina_atual - 1) * $total_por_pagina;

			$total_registros = $noticia->getTotalIdade('contemporanea');
			$this->view->total_paginas = ceil($total_registros[0]/$total_por_pagina);

			$this->view->noticias = $noticia->getNoticiasIdade('contemporanea', $total_por_pagina, $deslocamento);
			$this->view->pag = 'contemporanea';
			
			$this->render('noticias', 'layout1');

		}

		//PAGINAS DAS CLASSES
		public function mundo(){

			$noticia = Container::getModel('Noticia');

			$total_por_pagina = 2;
			$pagina_atual = isset($_GET['pag']) ? $_GET['pag'] : 1;
			$deslocamento = ($pagina_atual - 1) * $total_por_pagina;

			$total_registros = $noticia->getTotalClasse('mundo');
			$this->view->total_paginas = ceil($total_registros[0]/$total_por_pagina);

			$this->view->noticias = $noticia->getNoticiasClasse('mundo', $total_por_pagina, $deslocamento);
			$this->view->pag = 'mundo';
			
			$this->render('noticias', 'layout1');

		}

		public function brasil(){

			$noticia = Container::getModel('Noticia');

			$total_por_pagina = 2;
			$pagina_atual = isset($_GET['pag']) ? $_GET['pag'] : 1;
			$deslocamento = ($pagina_atual - 1) * $total_por_pagina;

			$total_registros = $noticia->getTotalClasse('brasil');
			$this->view->total_paginas = ceil($total_registros[0]/$total_por_pagina);

			$this->view->noticias = $noticia->getNoticiasClasse('brasil', $total_por_pagina, $deslocamento);
			$this->view->pag = 'brasil';
			
			$this->render('noticias', 'layout1');

		}

		//PAGINA DE FOTOS
		public function fotos(){

			$noticia = Container::getModel('Noticia');

			$total_por_pagina = 2;
			$pagina_atual = isset($_GET['pag']) ? $_GET['pag'] : 1;
			$deslocamento = ($pagina_atual - 1) * $total_por_pagina;
			$this->view->noticias = $noticia->getFotos($total_por_pagina, $deslocamento);

			$total_registros = $noticia->getTotalFotos();
			$this->view->total_paginas = ceil($total_registros[0]/$total_por_pagina);
			
			$this->render('fotos', 'layout1');

		}

	}

?>
<?php

	namespace APP\Controllers;

	use MF\Controller\Action;
	use MF\Model\Container;

	use App\Conection;

	class NewsController extends Action {

		//TODAS NOTÍCIAS EM NEWS
		public function news(){

			$noticia = Container::getModel('Noticia');

			$total_por_pagina = 4;
			$pagina_atual = isset($_GET['pag']) ? $_GET['pag'] : 1;
			$deslocamento = ($pagina_atual - 1) * $total_por_pagina;
			$this->view->noticias = $noticia->getNoticias($total_por_pagina, $deslocamento);

			$total_registros = $noticia->getTotalNoticias();
			$this->view->total_paginas = ceil($total_registros[0]/$total_por_pagina);
			
			$this->render('news', 'layout2');

		}

		//PESQUISA DE NOTÍCIAS EM NEWS
		public function pesquisarNoticias(){

			$noticia = Container::getModel('Noticia');
			$pesquisa = $_GET['dados'];

			if (isset($_GET['dados']) && $_GET['dados'] != '') {

				$noticia = Container::getModel('Noticia');

				$total_por_pagina = 4;
				$pagina_atual = isset($_GET['pag']) ? $_GET['pag'] : 1;
				$deslocamento = ($pagina_atual - 1) * $total_por_pagina;

				$total_registros = $noticia->getTotalNoticiasADM($pesquisa);
				$this->view->total_paginas = ceil($total_registros[0]/$total_por_pagina);


				$this->view->noticias = $noticia->getTodosNoticiasADM($pesquisa, $total_por_pagina, $deslocamento);
				$this->view->pag = 'pesquisarNoticias';
				
				$this->render('pesquisarNoticias', 'layout2');

			} else {
				header('location: /news');
			}

		}

		//PÁGINA PARA CRIAR UMA NOTÍCIA
		public function criarNoticia(){
			
			$this->render('criar_noticia', 'layout2');

		}

		//CRIANDO UMA NOTÍCIA
		public function inserirNoticia(){

			//armazenando imagem
			$extensao = strtolower(substr($_FILES['capa']['name'], -4));

			$novo_nome = str_replace($extensao, '', $_FILES['capa']['name']);

			$diretorio = "Imagens/";

			$arquivo = $diretorio.md5($novo_nome).$extensao;

			move_uploaded_file($_FILES['capa']['tmp_name'], $arquivo);

			//registrando notícia
			$noticia = Container::getModel('Noticia');
			$noticia->__set('titulo', $_POST['titulo']);
			$noticia->__set('descricao', $_POST['descricao']);
			$noticia->__set('capa', $arquivo);
			$noticia->__set('conteudo', $_POST['conteudo']);
			$noticia->__set('classe', $_POST['classe']);
			$noticia->__set('idade', $_POST['idade']);

			$noticia->inserirNoticia();

			header('location: /news');

		}

		//PÁGINA PARA EDITAR UMA NOTÍCIA
		public function editorNoticia(){

			$noticia = Container::getModel('Noticia');
			$noticia->__set('id', $_GET['id']);
			$this->view->noticias = $noticia->getNoticia();
			
			$this->render('editor_noticia', 'layout2');

		}

		//EDITANDO UMA NOTÍCIA
		public function editarNoticia(){

			//armazenando imagem
			$extensao = strtolower(substr($_FILES['capa']['name'], -4));

			$novo_nome = str_replace($extensao, '', $_FILES['capa']['name']);

			$diretorio = "Imagens/";

			$arquivo = $diretorio.md5($novo_nome).$extensao;

			move_uploaded_file($_FILES['capa']['tmp_name'], $arquivo);

			//editando notícia
			$noticia = Container::getModel('Noticia');
			$noticia->__set('id', $_POST['id']);
			$noticia->__set('titulo', $_POST['titulo']);
			$noticia->__set('descricao', $_POST['descricao']);
			$noticia->__set('capa', $arquivo);
			$noticia->__set('conteudo', $_POST['conteudo']);
			$noticia->__set('classe', $_POST['classe']);
			$noticia->__set('idade', $_POST['idade']);

			$noticia->editarNoticia();

			header('location: /news');

		}

		//REMOVENDO UMA NOTÍCIA
		public function removerNoticia(){
			
			$noticia = Container::getModel('Noticia');
			$noticia->__set('id', $_GET['id']);

			$imagem = $noticia->getNoticia()['capa'];

			unlink($imagem);

			$noticia->removerNoticia();

			header('location: /news');

		}

		//////////////////////////////////////////////////////////////////////////////////////////

		//TODAS BIOGRAFIAS EM BIOS
		public function bios(){

			$biografia = Container::getModel('Biografia');

			$total_por_pagina = 4;
			$pagina_atual = isset($_GET['pag']) ? $_GET['pag'] : 1;
			$deslocamento = ($pagina_atual - 1) * $total_por_pagina;
			$this->view->biografias = $biografia->getBios($total_por_pagina, $deslocamento);

			$total_registros = $biografia->getTotalBios();
			$this->view->total_paginas = ceil($total_registros[0]/$total_por_pagina);
			
			$this->render('bios', 'layout2');

		}

		//PESQUISA DE BIOGRAFIAS EM BIOS
		public function pesquisarBios(){

			$biografia = Container::getModel('Biografia');
			$pesquisa = $_GET['dados'];

			if (isset($_GET['dados']) && $_GET['dados'] != '') {

				$biografia = Container::getModel('Biografia');

				$total_por_pagina = 4;
				$pagina_atual = isset($_GET['pag']) ? $_GET['pag'] : 1;
				$deslocamento = ($pagina_atual - 1) * $total_por_pagina;

				$total_registros = $biografia->getTotalBiosADM($pesquisa);
				$this->view->total_paginas = ceil($total_registros[0]/$total_por_pagina);

				$this->view->biografias = $biografia->getTodosBiosADM($pesquisa, $total_por_pagina, $deslocamento);
				$this->view->pag = 'pesquisarBios';
				
				$this->render('pesquisarBios', 'layout2');

			} else {
				header('location: /bios');
			}

		}

		//PÁGINA PARA CRIAR UMA BIOGRAFIA
		public function criarBio(){
			
			$this->render('criar_bio', 'layout2');

		}

		//CRIANDO UMA BIOGRAFIA
		public function inserirBio(){

			//armazenando imagem
			$extensao = strtolower(substr($_FILES['capa']['name'], -4));

			$novo_nome = str_replace($extensao, '', $_FILES['capa']['name']);

			$diretorio = "Imagens/";

			$arquivo = $diretorio.md5($novo_nome).$extensao;

			move_uploaded_file($_FILES['capa']['tmp_name'], $arquivo);

			//registrando notícia
			$biografia = Container::getModel('Biografia');
			$biografia->__set('titulo', $_POST['titulo']);
			$biografia->__set('descricao', $_POST['descricao']);
			$biografia->__set('capa', $arquivo);
			$biografia->__set('conteudo', $_POST['conteudo']);

			$biografia->inserirBio();

			header('location: /bios');

		}

		//PÁGINA PARA EDITAR UMA BIOGRAFIA
		public function editorBio(){

			$biografia = Container::getModel('Biografia');
			$biografia->__set('id', $_GET['id']);
			$this->view->biografias = $biografia->getBio();
			
			$this->render('editor_bio', 'layout2');

		}

		//EDITANDO UMA BIOGRAFIA
		public function editarBio(){

			//armazenando imagem
			$extensao = strtolower(substr($_FILES['capa']['name'], -4));

			$novo_nome = str_replace($extensao, '', $_FILES['capa']['name']);

			$diretorio = "Imagens/";

			$arquivo = $diretorio.md5($novo_nome).$extensao;

			move_uploaded_file($_FILES['capa']['tmp_name'], $arquivo);

			//editando notícia
			$biografia = Container::getModel('Biografia');
			$biografia->__set('id', $_POST['id']);
			$biografia->__set('titulo', $_POST['titulo']);
			$biografia->__set('descricao', $_POST['descricao']);
			$biografia->__set('capa', $arquivo);
			$biografia->__set('conteudo', $_POST['conteudo']);

			$biografia->editarBio();

			header('location: /bios');

		}

		//REMOVENDO UMA BIOGRAFIA
		public function removerBio(){
			
			$biografia = Container::getModel('Biografia');
			$biografia->__set('id', $_GET['id']);

			$imagem = $biografia->getBio()['capa'];

			unlink($imagem);

			$biografia->removerBio();

			header('location: /bios');

		}
	}

?>
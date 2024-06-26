<?php

header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");

$path = "http://localhost/glow/imagens/";

$games[1] = array(
    "id" => 1, "nome" => "HELPSAURO",
    "descricao" => "<p>Em um mundo pré-histórico repleto de mistérios e perigos, surge um jogo de dinossauro que promete uma aventura emocionante como nenhuma outra. Os jogadores são transportados para uma época onde gigantes colossais governavam a terra, e a sobrevivência era uma batalha constante.</p>",
    "poster" => "{$path}HelpSauro3d.png",
    "banner" => "{$path}HelpSaurobanner.png",
    "jogar" => "http://localhost/glow/jogo1/index.html",
    "foto" => "{$path}jacqueline.jpeg",
    "ceo" => "Jacqueline Custma",
    "cargo" => "Desenvolvedora do site Custma Games e Glow Games",
);



$games[2] = array(
    "id" => 2,
    "nome" => "WALKA",
    "descricao" => "<p>O jogo Walka tem como foco derrotar seu inimigo, que está andando de um lado para o outro, os jogador tem a oportunidade de enfrentar o inimigo e derrotá-lo com sua arma, o inimigo pode proporcionar ao jogadores uma sensação de realização.</p>",
    "poster" => "{$path}Walka.jpeg",
    "banner" => "{$path}Walkabanner.jpeg",
    "jogar" => "http://localhost/glow/jogo2/index.html",
    "foto" => "{$path}elaine.jpeg",
    "ceo" => "Elaine Da Silva",
    "cargo" => "Desenvolvedora de Sites e do jogo Walka",
);


$games[3] = array(
    "id" => 3,
    "nome" => "BUG FROM HELL 1.0",
    "descricao" => "<p>  Está versão do jogo foi pensada para a diversão dos usuários; o jogo se resume a um dinossauro(personagem principal) que está buscando sair de uma floresta repleta de obstáculos, porém quando ele chega ao fim dela é surpreendido por um bug que o levará para outra dimensão misteriosa, que será revelada na próxima versão do jogo.</p>",
    "poster" => "{$path}BUGFROMHELL.jpg",
    "banner" => "{$path}dino.jpg",
    "jogar" => "http://localhost/glow/jogo3/index.html",
    "foto" => "{$path}vanderleia.jpeg",
    "ceo" => "Vanderléia Ribeiro",
    "cargo" => "Desenvolvedora de Sites e do jogo BUG FROM HELL",
);



$games[4] = array(
    "id" => 4,
    "nome" => "NINJA FORG",
    "descricao" => "<p>Uma aventura Anfibia inesquecivel! mergulhe em um mundo vibrante de plataformas e desafios com Ninja frog, o sapo ninja mais ágil do pantano!.</p>",
    "poster" => "{$path}Nija.jpeg",
    "banner" => "{$path}nijabanner.jpeg",
    "jogar" => "http://localhost/glow/jogo6/index.html",
    "foto" => "{$path}everton.jpeg",
    "ceo" => "Everton Cordeiro",
    "cargo" => "Desenvolvedor de Sites e do jogo Ninja Frog",
);


$games[5] = array(
    "id" => 5,
    "nome" => "THE LAST WORDS",
    "descricao" => "<p>Embarque em uma jornada assustadora através de um mundo 2D repleto de perigos e mistérios. Inspirado pelos grandes clássicos de survival horror como Resident Evil e The Last of Us, este jogo desenvolvido pelo PixelPulse Studios traz uma experiência única de terror e suspense. Encare desafios intensos, explore ambientes sombrios e descubra segredos macabros enquanto luta pela sobrevivência neste jogo emocionante.</p>",
    "poster" => "{$path}TheLastWords.jpeg",
    "banner" => "{$path}TheLastWordsbanner.jpeg",
    "jogar" => "http://localhost/glow/jogo4/index.html",
    "foto" => "{$path}vinicius.jpeg",
    "ceo" => "Vinicius Cavalcanti",
    "cargo" => "Desenvolvedor de Sites e do jogo The Last Words",
);



$games[6] = array(
    "id" => 6,
    "nome" => "FOREST",
    "descricao" => "<p>o game forest é um ambiente sombrio e cheios de criaturas mais perigosas que uma floresta densa pode contem , por isso o aventureiro vai em busca de derrotar essas criaturas.</p>",
    "poster" => "{$path}forest.jpeg",
    "banner" => "{$path}forestbanner.jpeg",
    "jogar" => "http://localhost/glow/jogo7/index.html",
    "foto" => "{$path}caua.jpeg",
    "ceo" => "Caua De Castro Muniz",
    "cargo" => "Desenvolvedor de Sites e do jogo Forest"
);



$games[7] = array(
    "id" => 7,
    "nome" => "WARS STARS",
    "descricao" => "<p>Imagine um jogo espacial frenético onde você controla uma nave espacial avançando por cenários cheios de asteroides, naves inimigas e obstáculos. Seu objetivo é acumular pontos destruindo inimigos, coletando power-ups e alcançando checkpoints. Cada fase oferece desafios diferentes e chefes épicos no final de cada nível. À medida que avança, sua nave pode ser atualizada com armas mais poderosas e escudos mais resistentes para enfrentar ameaças cada vez maiores. O jogo combina ação rápida, estratégia de sobrevivência e habilidades de manobra para chegar ao confronto final com o chefe supremo do mal, onde suas habilidades serão testadas ao máximo.</p>",
    "poster" => "{$path}warstar.png",
    "banner" => "{$path}bannerwarstar.png",
    "jogar" => "http://localhost/glow/jogo5/index.html",
    "foto" => "{$path}paulo.jpeg",
    "ceo" => "Paulo Verdramini Schanam",
    "cargo" => "Desenvolvedor de Sites e do jogo Warstars"
);


echo json_encode($games);

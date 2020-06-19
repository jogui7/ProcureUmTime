<nav>
  <ul id="slide-out" class="side-nav">
	  <div class="topo">
		  <div class="avatar"></div>
		  <p><?=$usuario['nome']?><br>
		  <small>Gols feitos: <?=$usuario['gols']?> &nbsp&nbsp Partidas: <?=$usuario['partidas']?></small></p>
	  </div>
    <li><a href="#" class="home"><img src="img/home.svg" alt="">HOME</a></li>
    <li><a href="perfil.php" class="perfil"><img src="img/perfil.svg" alt="">MEU PERFIL</a></li>
	  <li><a href="#" class="time"><img src="img/time.svg" alt="">MEU TIME</a></li>
	  <li><a href="#" class="procure"><img src="img/procure.svg" alt="">PROCURE UM TIME</a></li>
	  <li><a href="#" class="ultimas-partidas"><img src="img/ultimas.svg" alt="">ÚLTIMAS PARTIDAS</a></li>
	  <li><a href="#" class="ranking"><img src="img/ranking.svg" alt="">RANKING</a></li>
    <li><a href="logout.php" class="sair"><img src="img/sair.svg" alt="">SAIR</a></li>
  </ul>
  <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><div class="menubotao"></div></a>
</nav>
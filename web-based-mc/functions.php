<?php
	function listMovies() {
		$movies = glob("Movies/*");
		for($movie=0;$movie<count($movies);$movie++) {
			echo "<li onclick='v(\"$movies[$movie]\")'>".substr($movies[$movie],7,-4)."</li>";
//			echo '<li><a href="'.$movies[$movie].'" target="video">'.substr($movies[$movie],7,-4).'</li>';
		}
	}
	function listShows() {
		$shows = glob("TV Shows/*");
		for($show=0;$show<count($shows);$show++) {
			echo "<li><span>".substr($shows[$show],9)."</span><ul id='show-$show'>";
			$seasons = glob("$shows[$show]/*");
			for($season=0;$season<count($seasons);$season++) {
				echo "<li><span>".substr($seasons[$season],1+strlen($shows[$show]))."</span><ul id='season-$season'>";
				$episodes = glob("$seasons[$season]/*");
				for($episode=0;$episode<count($episodes);$episode++) {
					echo "<li onclick='v(\"$episodes[$episode]\")'>".substr($episodes[$episode],3+strlen($seasons[$season]),-4)."</li>";
				}
				echo "</ul></li>";
			}
			echo "</ul></li>";
		}
	}
?>
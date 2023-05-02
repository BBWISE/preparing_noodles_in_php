<?php
/*
	PSEUDO CODE

	print Preparing noodle ...

	Container ← has water of 5cl
	NoodleSachet ← has 2g noodles

	boilingProcess(water and noodle)
		boilingTime ← 5minutes

		while boilingTime > 0
			boilingTime - 1

		Container ← has water and noodle

	cookingProcess(containerAll and preparedStew)
		cookingTime ← 3minutes

		while cookingTime > 0
			cookingTime - 1

		Container ← containerAll and preparedStew

		reture The noodle is ready
*/
	if(isset($_POST)){
		echo "Preparing noodle ...";

		$Container = 5;
		$NoodleSachet = 2;
		function boilingProcess($water, $noodle){
			global $Container;
			$boilingTime = 5;
			while($boilingTime > 0){
				$boilingTime -= 1;
			}
			$Container = $water + $noodle;
		}

		function cookingProcess($containerAll, $preparedStew){
			global $Container;
			$cookingTime = 3;
			while($cookingTime > 0){
				$cookingTime --;
			}
			$Container = $containerAll + $preparedStew;
			return "The noodle is READY";
		}
		echo boilingProcess($Container, $NoodleSachet);
		echo "<br/>";
		$preparedStew = 3;
		echo cookingProcess($Container, $preparedStew);
	}

?>
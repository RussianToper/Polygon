<?php
	class Point {
		public $x = 0.0;
		public $y = 0.0;

		function __construct(float $x, float $y) {
			$this->x = $x;
			$this->y = $y;
		}

		public function movePoint(float $deltaX, float $deltaY) {
			$this->x += $deltaX;
			$this->y += $deltaY;
		}
	}

	class Vector {
		public $x = 0.0;
		public $y = 0.0;

		function __construct(float $x, float $y) {
			$this->x = $x;
			$this->y = $y;
		}

		public function getVectorLength() {
			print(sqrt($this->x ** 2 + $this->y ** 2));
			echo("<br>");
		}

		public function isNull() {
			print(getVectorLength() == 0);
			echo("<br>");
			# echo(getVectorLength() == 0);
		}

		public function isPerpendicular(Vector $v) {
			print($this->x * $v->x + $this->y * $v->y == 0);
			echo("<br>");
			# echo($this->x * $v->x + $this->y * $v->y == 0);
		}
	}

	$T1 = new Point(((float)rand() / 10), ((float)rand() / 10));
	$V1 = new Vector(((float)rand() / 10), ((float)rand() / 10));
	$V2 = new Vector(0.0, 0.0);
	if ($V1->y != 0) {
		$y_p = (-$V1->x / $V1->y);
		$V3 = new Vector(1.0, $y_p);
	}
	else {
		$y_p = 1.0;
		$V3 = new Vector(0.0, $y_p);
	}

	$V1->getVectorLength();
	$V2->getVectorLength();
	$V3->getVectorLength();

	$V1->isPerpendicular($V3);
	$V3->isPerpendicular($V1);

	echo("V1: ");
	echo($V1->x . " " . $V1->y);
	echo("<br>");
	echo("T1: ");
	echo($T1->x . " " . $T1->y);
	echo("<br>");
	$T1->movePoint($V1->x - $T1->x, $V1->y - $T1->y);
	echo("T1: ");
	echo($T1->x . " " . $T1->y);
	echo("<br>");
?>

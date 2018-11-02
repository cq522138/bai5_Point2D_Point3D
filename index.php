<?php

class Point2d
{
    protected $x;
    protected $y;

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function toString()
    {
        return "vi tri diem la" . $this->x . "  " . $this->y;
    }
}

class Point3d extends Point2d
{
    private $z;

    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    public function getZ()
    {
        return $this->z;
    }

    public function toString1()
    {
        return "vi tri diem la" . $this->x . "  " . $this->y . "  " . $this->z;

    }
}

$point2d = new Point2d(3, 5);
$point3d = new Point3d(3, 5,8);
echo $point2d->toString();
echo "<br>";
echo $point3d->toString1();

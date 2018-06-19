abstract class Bmi
{
    abstract protected function fatOrThin();
   
    protected $height;
    protected $weight;
}

public class BmiMen extends Bmi
{
	protected function fatOrThin ()
	{
		$total = $this->weight / ($this->height) * ($this->height);
		if($total > 18.5 && $total < 24.9)
		echo "Normal";
		else
		echo "not normal";
	}
}

public class BmiWonman extends Bmi
{
	protected function fatOrThin ()
	{
		$total = $this->weight / ($this->height) * ($this->height);
		if($total > 19 && $total < 21)
		echo "Normal";
		else
		echo "not normal";
	}
}
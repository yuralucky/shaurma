<?php


namespace Main;


class ShaurmaCalculator
{
    private $totalCost=0;
    private $totalIngredients=[];

    /**
     * @param ShaurmaInterface $shaurma
     */
    public function add(ShaurmaInterface $shaurma)
    {
        $this->setTotalCost($shaurma->getCost());
        $this->setTotalIngredients($shaurma->getIngredients());
    }

    /**
     * @param float $totalCost
     */
    public function setTotalCost(float $totalCost)
    {
        $this->totalCost = $totalCost+$this->totalCost;
    }

    /**
     * @param array $totalIngredients
     */
    public function setTotalIngredients(array $totalIngredients)
    {
        $this->totalIngredients = array_merge($totalIngredients, $this->totalIngredients);
    }

    /**
     * @return float
     */
    public function price()
    {
        return $this->totalCost;
    }

    /**
     * @return array
     */
    public function ingredients()
    {
        return array_unique($this->totalIngredients);
    }
}
<?php


namespace Main;


class ShaurmaOdesskaya implements ShaurmaInterface
{

    private $ingredients = ['pickled cucumbers', 'fried potatoes', 'garlic sauce', 'tandoor lavash',
        'pickled onions with barberry and herbs', 'chicken meat', 'cole slow salad', 'korean carrots'];

    private $cost = 69;

    private $title = 'ShaurmaOdesskaya';

    /**
     * @inheritDoc
     */
    public function getCost(): float
    {
        return $this->cost;
    }

    /**
     * @inheritDoc
     */
    public function getIngredients(): array
    {
        return $this->ingredients;
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return $this->title;
    }
}
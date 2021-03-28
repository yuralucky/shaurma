<?php


namespace Main;


class ShaurmaBeef implements ShaurmaInterface
{

    private $ingredients = ['garlic sauce', 'beef ham', 'pickled cucumbers', 'pickled onions with barberry and herbs',
        'cole slow salad', 'tandoor lavash', 'fresh tomatoes', 'hummus', 'tahin sauce'];

    private $cost = 75;

    private $title = 'ShaurmaBeef';

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
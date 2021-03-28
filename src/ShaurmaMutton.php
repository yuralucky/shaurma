<?php


namespace Main;


class ShaurmaMutton implements ShaurmaInterface
{
    private $ingredients = ['hot sauce', 'pickled cucumbers', 'cilantro', 'fresh tomatoes',
        'pickled onions with barberry and herbs', 'lamb meat', 'Arabic lavash'];

    private $cost = 85;

    private $title = 'ShaurmaMutton';

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
<?php

namespace App\GraphQL\Mutations;
use Closure;
use App\Models\Book;
use App\Models\Author;
use GraphQL;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\Mutation;


class CreateBookMutation extends Mutation{

    protected $attributes = [
        'name' => 'createBook'
    ];

    public function type(): Type
    {
        return GraphQL::type('BookType');
    }
    
    public function args(): array
    {
        return [
            'title' => [
                'type' => Type::string(),

            ],
            'year' => [
                'type' => Type::int(),
                
            ], 
            'number_of_pages' => [
                'type' => Type::int(),
                
            ],
            'author_id' => [
                'type' => Type::int(),
                
            ]
        ];
    }

    public function resolve($root, array $args)
    {
        $book = new Book();
        $book->fill($args);
        $book->save();

        return $book;
    }
}


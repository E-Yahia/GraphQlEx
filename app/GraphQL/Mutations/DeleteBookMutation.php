<?php

namespace App\GraphQL\Mutations;
use Closure;
use App\Models\Book;
use App\Models\Author;
use GraphQL;
use GraphQL\Type\Definition\Type;
use GraphQL\Type\Definition\ResolveInfo;
use Rebing\GraphQL\Support\Mutation;


class DeleteBookMutation extends Mutation{

    protected $attributes = [
        'name' => 'deleteBook'
    ];

    public function type(): Type
    {
        return GraphQL::type('BookType');
    }
    
    public function args(): array
    {
        return [
            'id'=>[
                'type' => Type::int(),
            ],
    
        ];
    }

    public function resolve($root, array $args)
    {
        $book = Book::find($args['id']);
        
        $book->delete();

        return $book;
    }
}


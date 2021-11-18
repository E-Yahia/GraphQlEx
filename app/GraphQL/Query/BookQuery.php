<?php

namespace App\GraphQL\Query;
use Closure;
use App\Models\Book;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;

class BookQuery extends Query{

    protected $attributes = [
        'name' => 'book',
    ];


    public function type(): Type
    {
        return GraphQL::type('BookType');
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id', 
                'type' => Type::int(),
            ],
           
        ];
    }
    //how data comes from db
    public function resolve($root, array $args)
    {
        // if (isset($args['id'])) {
            return Book::find($args['id']);
        // }


        // return Book::all();
    }
}


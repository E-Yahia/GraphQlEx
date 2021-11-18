<?php
namespace App\GraphQL\Types;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;
use App\Models\Author;
use Rebing\GraphQL\Support\Facades\GraphQL;

class AuthorType extends GraphQLType{

    protected $attributes = [
        'name'          => 'AuthorType',
        'description'   => 'author',
        // Note: only necessary if you use `SelectFields`
        'model'         => Author::class,
    ];


    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::int(),
            ],
            'name' => [
                'type' => Type::string(),

            ],
            'age' => [
                'type' => Type::int(),
                
            ],
            'books' => [
                'type' =>Type::listOf(GraphQL::type('BookType')),
                
            ]
        ];
    }
}
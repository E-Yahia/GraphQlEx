<?php
namespace App\GraphQL\Types;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;
use App\Models\Book;
use Rebing\GraphQL\Support\Facades\GraphQL;

class BookType extends GraphQLType{

    protected $attributes = [
        'name'          => 'BookType',
        'description'   => 'book',
        // Note: only necessary if you use `SelectFields`
        'model'         => Book::class,
    ];


    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::int(),
            ],
            'title' => [
                'type' => Type::string(),

            ],
            'year' => [
                'type' => Type::int(),
                
            ], 
            'number_of_pages' => [
                'type' => Type::int(),
                
            ],
            'author' => [
                'type' =>GraphQL::type('AuthorType'),
                
            ]
        ];
    }
}
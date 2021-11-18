<?php

namespace App\GraphQL\Query;
use Closure;
use App\Models\Book;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;

class BooksQuery extends Query{

    protected $attributes = [
        'name' => 'books',
    ];


    public function type(): Type
    {   //list of book type
        return Type::listOf(GraphQL::type('BookType'));
    }

    //how data comes from db
    public function resolve($root, array $args, $context, ResolveInfo $info, Closure $getSelectFields)
    {
  
        $fields = $getSelectFields();
        $select = $fields->getSelect();
        $with = $fields->getRelations();

        $books = Book::select($select)->with($with);

        return $books->get();
    }
 }
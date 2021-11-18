<?php

namespace App\GraphQL\Query;
use Closure;
use App\Models\Author;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query;

class AuthorsQuery extends Query{

    protected $attributes = [
        'name' => 'authors',
    ];


    public function type(): Type
    {   //list of authors type
        return Type::listOf(GraphQL::type('AuthorType'));
    }

    //how data comes from db
    public function resolve($root, array $args, $context, ResolveInfo $info, Closure $getSelectFields)
    {

        $fields = $getSelectFields();
        $select = $fields->getSelect();
        $with = $fields->getRelations();

        $authors = Author::select($select)->with($with);

        return $authors->get();
    }
 }
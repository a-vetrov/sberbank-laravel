<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 20.01.2019
 * Time: 18:12
 */

namespace App;

use Illuminate\Database\Eloquent\Model;


class Card extends Model
{
    public $id = '1' ;
    public $currency = "RUR" ;
    public $cardNumber = "1234" ;
    public $title = '' ;
    public $amount = '0' ;
    public $description = '' ;
    public $dueDate = '01-01-2020' ;
}
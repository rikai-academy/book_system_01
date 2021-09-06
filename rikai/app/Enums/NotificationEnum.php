<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class NotificationEnum extends Enum
{
    const AddBook =   'new book';
    const EditBook =   'edit book';
    const DeleteBook = 'delete book';
    const AddCategory = 'new category';
    const EditCategory = 'update category';
    const DeleteCategory = 'delete category';
    const AcceptOrder = 'Accept Buy Book';
    const DeleteOrder = 'Delete Order Buy Book';
}

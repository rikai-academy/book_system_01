<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class PermissionType extends Enum
{
    const AddBook =   'add_book';
    const UpdateBook =  "edit_book";
    const DeleteBook = "delete_book";
    const AddCategory = 'add_category';
    const UpdateCategory = 'edit_category';
    const DeleteCategory = 'delete_category';
    const AcceptOrder = 'accept_order';
    const DeleteOrder = 'delete_order';
}

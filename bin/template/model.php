<?php
namespace {{namespace}};

/**
 * This class is generated using https://github.com/gajus/moa.
 * Do not edit this file; it will be overwritten.
 */
abstract class {{model_name}} extends {{extends}} {
    const TABLE_NAME = '{{table_name}}';
    const PRIMARY_KEY_NAME = '{{primary_key_name}}';

    static protected
        $columns = {{columns}};
}
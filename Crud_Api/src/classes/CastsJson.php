<?php


namespace Nima\Crud_Api\classes;


use Illuminate\Contracts\Database\Eloquent\CastsAttributes;


// کلاس بالا برای  Cast کردن رشته های Json  نوشته ام
class CastsJson implements CastsAttributes {
    
    /**
     * Transform the attribute from the underlying model values.
     *
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @param  string $key
     * @param  mixed $value
     * @param  array $attributes
     * @return mixed
     */
    public function get ($model , string $key , $value , array $attributes) {
        return json_decode ($value , true);
    }
    
    /**
     * Transform the attribute to its underlying model values.
     *
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @param  string $key
     * @param  mixed $value
     * @param  array $attributes
     * @return mixed
     */
    public function set ($model , string $key , $value , array $attributes) {
        return json_encode ($value);
    }
}

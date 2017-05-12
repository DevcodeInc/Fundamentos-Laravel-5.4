<?php
namespace App\Http\Domain\Contracts;
/**
 * Created by Juan Carlos Gonzales Q.
 * Email: juangonzaq@gmail.com
 * Date: 4/05/17
 */

interface IPost
{
    /*
     * Metodo encargado de registrar
     */
    public function store($params);

    /*
     * Metodo que trae todos los post
     */
    public function all();

    /*
     * DEtalle del post
     */
    public function detail($slug);
}
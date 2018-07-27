<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
 * Landing Routes...
 */
Route::get('/', 'LandingController@index')->name('index');

/*
 * Authentication Routes...
 */
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

/*
 * Password Reset Routes..
 */
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

/*
 * Home Routes...
 */
Route::get('/inicio', 'HomeController@index')->name('inicio');

/*
 * Acudientes Routes...
 */
Route::resource('acudientes', 'AcudienteController');

/*
 * Administrativos Routes...
 */
Route::resource('administrativos', 'AdministrativoController');

/*
 * Alumnos Routes...
 */
Route::resource('alumnos', 'AlumnoController');

/*
 * Areas Routes...
 */
Route::resource('areas', 'AreaController');

/*
 * Asignaturas Routes...
 */
Route::resource('asignaturas', 'AsignaturaController');

/*
 * Asistencias Routes...
 */
Route::resource('asistencias', 'AsistenciaController');

/*
 * Bitacoras Routes...
 */
Route::resource('bitacoras', 'BitacoraController')->only(['index']);

/*
 * Calendarios Routes...
 */
Route::resource('calendarios', 'CalendarioController');

/*
 * Docentes Routes...
 */
Route::resource('docentes', 'DocenteController');

/*
 * Planeamientos Routes...
 */
Route::resource('planeamientos', 'PlaneamientoController');

/*
 * Empleados Routes...
 */
Route::resource('empleados', 'EmpleadoController');

/*
 * Estudiantes Routes...
 */
Route::resource('estudiantes', 'EstudianteController');

/*
 * Eventos Routes...
 */
Route::resource('eventos', 'EventoController');

/*
 * Fechas Routes...
 */
Route::resource('fechas', 'FechaController');

/*
 * Galerias Routes...
 */
Route::resource('galerias', 'GaleriaController');

/*
 * Grados Routes...
 */
Route::resource('grados', 'GradoController');

/*
 * SubGrados Routes...
 */
Route::resource('grados.subgrados', 'SubGradoController');

/*
 * Implementos Routes...
 */
Route::resource('implementos', 'ImplementoController');

/*
 * Inventarios Routes...
 */
Route::resource('inventarios', 'InventarioController');

/*
 * Mesas Routes...
 */
Route::resource('mesas', 'MesaController');

/*
 * Nominas Routes...
 */
Route::resource('nominas', 'NominaController');

/*
 * Notas Routes...
 */
Route::resource('notas', 'NotaController');

/*
 * Pagos Routes...
 */
Route::resource('pagos', 'PagoController');

/*
 * Permissions Routes...
 */
Route::resource('permissions', 'PermissionController');

/*
 * Practicantes Routes...
 */
Route::resource('practicantes', 'PracticanteController');

/*
 * Roles Routes...
 */
Route::resource('roles', 'RoleController');

/*
 * Salidas Routes...
 */
Route::resource('salidas', 'SalidaController');

/*
 * Tipo Empleados Routes...
 */
Route::resource('tipoempleados', 'TipoEmpleadoController');

/*
 * Usuarios Routes...
 */
Route::resource('usuarios', 'UsuarioController');

/*
 * Seguimientos Routes...
 */
Route::resource('seguimientos', 'SeguimientoController');
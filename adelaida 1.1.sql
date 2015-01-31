-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-01-2015 a las 12:06:58
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `adelaida`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `audits`
--

CREATE TABLE IF NOT EXISTS `audits` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=80 ;

--
-- Volcado de datos para la tabla `audits`
--

INSERT INTO `audits` (`id`, `name`, `title`, `description`, `id_user`, `type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-01-26 16:18:55', '2015-01-26 16:18:55', NULL),
(2, 'users_get_create', 'Listado de Usuarios', 'Vizualización del listado de Usuarios', 1, 'READ', '2015-01-26 16:39:41', '2015-01-26 16:39:41', NULL),
(3, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-01-28 00:48:24', '2015-01-28 00:48:24', NULL),
(4, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-01-28 03:42:15', '2015-01-28 03:42:15', NULL),
(5, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-01-28 03:47:52', '2015-01-28 03:47:52', NULL),
(6, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-01-28 04:04:02', '2015-01-28 04:04:02', NULL),
(7, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-01-30 01:41:47', '2015-01-30 01:41:47', NULL),
(8, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-01-31 00:46:58', '2015-01-31 00:46:58', NULL),
(9, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-01-31 02:01:12', '2015-01-31 02:01:12', NULL),
(10, 'auth_login', 'Inicio de Sesión', 'El usuario AlexanderZon ha Iniciado Sesión', 1, 'CREATE', '2015-01-31 04:34:59', '2015-01-31 04:34:59', NULL),
(11, 'users_get_create', 'Listado de Usuarios', 'Vizualización del listado de Usuarios', 1, 'READ', '2015-01-31 04:35:06', '2015-01-31 04:35:06', NULL),
(12, 'users_get_create', 'Listado de Usuarios', 'Vizualización del listado de Usuarios', 1, 'READ', '2015-01-31 04:43:06', '2015-01-31 04:43:06', NULL),
(13, 'users_get_create', 'Formulario de Creación de Usuarios', 'Vizualización del Formulario de Creación de Usuarios', 1, 'READ', '2015-01-31 04:43:17', '2015-01-31 04:43:17', NULL),
(14, 'users_get_create', 'Listado de Usuarios', 'Vizualización del listado de Usuarios', 1, 'READ', '2015-01-31 04:44:46', '2015-01-31 04:44:46', NULL),
(15, 'users_get_create', 'Formulario de Creación de Usuarios', 'Vizualización del Formulario de Creación de Usuarios', 1, 'READ', '2015-01-31 04:44:48', '2015-01-31 04:44:48', NULL),
(16, 'users_create', 'Usuario Agregado', 'El usuario Daniel Henriquez fue agregado exitosamente', 1, 'CREATE', '2015-01-31 04:45:18', '2015-01-31 04:45:18', NULL),
(17, 'users_get_create', 'Listado de Usuarios', 'Vizualización del listado de Usuarios', 1, 'READ', '2015-01-31 04:45:19', '2015-01-31 04:45:19', NULL),
(18, 'users_get_create', 'Listado de Usuarios', 'Vizualización del listado de Usuarios', 1, 'READ', '2015-01-31 04:47:13', '2015-01-31 04:47:13', NULL),
(19, 'users_get_show', 'Visualización detallada de Usuario', 'Vizualización detallada del Usuario robertdacorte', 1, 'READ', '2015-01-31 04:47:18', '2015-01-31 04:47:18', NULL),
(20, 'users_get_create', 'Listado de Usuarios', 'Vizualización del listado de Usuarios', 1, 'READ', '2015-01-31 04:54:56', '2015-01-31 04:54:56', NULL),
(21, 'users_get_create', 'Listado de Usuarios', 'Vizualización del listado de Usuarios', 1, 'READ', '2015-01-31 07:33:29', '2015-01-31 07:33:29', NULL),
(22, 'users_get_edit', 'Formulario de Edición de Usuarios', 'Vizualización del Formulario de Edición de Usuarios', 1, 'READ', '2015-01-31 07:33:32', '2015-01-31 07:33:32', NULL),
(23, 'users_edit', 'Usuario Editado', 'El usuario Daniel Henriquez fue editado exitosamente', 1, 'UPDATE', '2015-01-31 07:33:37', '2015-01-31 07:33:37', NULL),
(24, 'users_get_create', 'Listado de Usuarios', 'Vizualización del listado de Usuarios', 1, 'READ', '2015-01-31 07:33:37', '2015-01-31 07:33:37', NULL),
(25, 'users_get_create', 'Listado de Usuarios', 'Vizualización del listado de Usuarios', 1, 'READ', '2015-01-31 07:35:14', '2015-01-31 07:35:14', NULL),
(26, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-01-31 09:50:24', '2015-01-31 09:50:24', NULL),
(27, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-01-31 09:50:28', '2015-01-31 09:50:28', NULL),
(28, 'capability_create', 'Capacidad Agregada', 'La capacidad Visualizar Metodos de Pago fue agregada exitosamente', 1, 'CREATE', '2015-01-31 09:51:28', '2015-01-31 09:51:28', NULL),
(29, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-01-31 09:51:28', '2015-01-31 09:51:28', NULL),
(30, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-01-31 09:51:42', '2015-01-31 09:51:42', NULL),
(31, 'capability_create', 'Capacidad Agregada', 'La capacidad Visualizar Cuentas de Facturación fue agregada exitosamente', 1, 'CREATE', '2015-01-31 09:52:19', '2015-01-31 09:52:19', NULL),
(32, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-01-31 09:52:20', '2015-01-31 09:52:20', NULL),
(33, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-01-31 09:52:23', '2015-01-31 09:52:23', NULL),
(34, 'role_get_assign', 'Asignación de roles', 'Asignación de roles a un usuario del sistema', 1, 'READ', '2015-01-31 09:52:28', '2015-01-31 09:52:28', NULL),
(35, 'role_assign', 'Capacidades Asignadas', 'Las capacidades fueron exitosamente asignadas', 1, 'UPDATE', '2015-01-31 09:52:31', '2015-01-31 09:52:31', NULL),
(36, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-01-31 09:52:32', '2015-01-31 09:52:32', NULL),
(37, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-01-31 09:53:36', '2015-01-31 09:53:36', NULL),
(38, 'stock_get_index', 'Stock', 'Vizualización del listado de items disponibles en stock', 1, 'READ', '2015-01-31 09:58:16', '2015-01-31 09:58:16', NULL),
(39, 'payment_method_get_index', 'Listado de Métodos de Pago', 'Vizualización del listado de métodos de pago', 1, 'READ', '2015-01-31 10:37:42', '2015-01-31 10:37:42', NULL),
(40, 'payment_method_get_index', 'Listado de Métodos de Pago', 'Vizualización del listado de métodos de pago', 1, 'READ', '2015-01-31 10:39:03', '2015-01-31 10:39:03', NULL),
(41, 'payment_method_get_index', 'Listado de Métodos de Pago', 'Vizualización del listado de métodos de pago', 1, 'READ', '2015-01-31 10:42:40', '2015-01-31 10:42:40', NULL),
(42, 'payment_method_get_index', 'Listado de Métodos de Pago', 'Vizualización del listado de métodos de pago', 1, 'READ', '2015-01-31 10:43:04', '2015-01-31 10:43:04', NULL),
(43, 'client_get_index', 'Listado de clientes', 'Vizualización del listado de clientes', 1, 'READ', '2015-01-31 10:43:13', '2015-01-31 10:43:13', NULL),
(44, 'payment_method_get_index', 'Listado de Métodos de Pago', 'Vizualización del listado de métodos de pago', 1, 'READ', '2015-01-31 10:43:43', '2015-01-31 10:43:43', NULL),
(45, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-01-31 10:43:50', '2015-01-31 10:43:50', NULL),
(46, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-01-31 10:43:53', '2015-01-31 10:43:53', NULL),
(47, 'capability_create', 'Capacidad Agregada', 'La capacidad Crear Métodos de Pago fue agregada exitosamente', 1, 'CREATE', '2015-01-31 10:44:25', '2015-01-31 10:44:25', NULL),
(48, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-01-31 10:44:25', '2015-01-31 10:44:25', NULL),
(49, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-01-31 10:44:29', '2015-01-31 10:44:29', NULL),
(50, 'capability_create', 'Capacidad Agregada', 'La capacidad Editar Métodos de Pago fue agregada exitosamente', 1, 'CREATE', '2015-01-31 10:45:14', '2015-01-31 10:45:14', NULL),
(51, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-01-31 10:45:15', '2015-01-31 10:45:15', NULL),
(52, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-01-31 10:45:18', '2015-01-31 10:45:18', NULL),
(53, 'payment_method_get_index', 'Listado de Métodos de Pago', 'Vizualización del listado de métodos de pago', 1, 'READ', '2015-01-31 10:48:18', '2015-01-31 10:48:18', NULL),
(54, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-01-31 10:48:23', '2015-01-31 10:48:23', NULL),
(55, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-01-31 10:48:33', '2015-01-31 10:48:33', NULL),
(56, 'capability_controller_err', 'Error al agregar la capacidad', 'Error: el controlador PaymentMethodController@getIndex ya existe, intente con uno diferente.', 1, 'CREATE', '2015-01-31 10:49:27', '2015-01-31 10:49:27', NULL),
(57, 'capability_get_create', 'Añadir capacidades', 'Adición de capacidades', 1, 'READ', '2015-01-31 10:49:28', '2015-01-31 10:49:28', NULL),
(58, 'capability_create', 'Capacidad Agregada', 'La capacidad Eliminar Métodos de Pago fue agregada exitosamente', 1, 'CREATE', '2015-01-31 10:49:54', '2015-01-31 10:49:54', NULL),
(59, 'capability_get_index', 'Capacidades', 'Vizualización de capacidades', 1, 'READ', '2015-01-31 10:49:54', '2015-01-31 10:49:54', NULL),
(60, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-01-31 10:49:59', '2015-01-31 10:49:59', NULL),
(61, 'role_get_assign', 'Asignación de roles', 'Asignación de roles a un usuario del sistema', 1, 'READ', '2015-01-31 10:50:02', '2015-01-31 10:50:02', NULL),
(62, 'role_assign', 'Capacidades Asignadas', 'Las capacidades fueron exitosamente asignadas', 1, 'UPDATE', '2015-01-31 10:50:06', '2015-01-31 10:50:06', NULL),
(63, 'role_get_index', 'Roles', 'Vizualización del listado de roles en el sistema', 1, 'READ', '2015-01-31 10:50:07', '2015-01-31 10:50:07', NULL),
(64, 'payment_method_get_index', 'Listado de Métodos de Pago', 'Vizualización del listado de métodos de pago', 1, 'READ', '2015-01-31 10:50:09', '2015-01-31 10:50:09', NULL),
(65, 'payment_method_get_create', 'Añadir Métodos de Pago', 'Adición de métodos de pago', 1, 'READ', '2015-01-31 10:51:14', '2015-01-31 10:51:14', NULL),
(66, 'payment_method_create', 'Método de Pago Agregado', 'El método de pago Débito fue agregado exitosamente', 1, 'CREATE', '2015-01-31 10:52:02', '2015-01-31 10:52:02', NULL),
(67, 'payment_method_get_index', 'Listado de Métodos de Pago', 'Vizualización del listado de métodos de pago', 1, 'READ', '2015-01-31 10:52:02', '2015-01-31 10:52:02', NULL),
(68, 'payment_method_get_index', 'Listado de Métodos de Pago', 'Vizualización del listado de métodos de pago', 1, 'READ', '2015-01-31 10:52:49', '2015-01-31 10:52:49', NULL),
(69, 'payment_method_get_edit', 'Editar Métodos de Pago', 'Edicion de métodos de pago', 1, 'READ', '2015-01-31 10:54:44', '2015-01-31 10:54:44', NULL),
(70, 'payment_method_get_edit', 'Editar Métodos de Pago', 'Edicion de métodos de pago', 1, 'READ', '2015-01-31 10:55:00', '2015-01-31 10:55:00', NULL),
(71, 'payment_method_get_edit', 'Editar Métodos de Pago', 'Edicion de métodos de pago', 1, 'READ', '2015-01-31 10:55:14', '2015-01-31 10:55:14', NULL),
(72, 'payment_method_edit', 'Método de Pago editado', 'El método de pago Débito fue editado exitosamente', 1, 'UPDATE', '2015-01-31 10:57:26', '2015-01-31 10:57:26', NULL),
(73, 'payment_method_get_index', 'Listado de Métodos de Pago', 'Vizualización del listado de métodos de pago', 1, 'READ', '2015-01-31 10:57:26', '2015-01-31 10:57:26', NULL),
(74, 'payment_method_get_delete', 'Eliminar Métodos de Pago', 'Eliminar registro de métodos de pago', 1, 'READ', '2015-01-31 10:57:37', '2015-01-31 10:57:37', NULL),
(75, 'payment_method_get_delete', 'Eliminar Métodos de Pago', 'Eliminar registro de métodos de pago', 1, 'READ', '2015-01-31 10:58:13', '2015-01-31 10:58:13', NULL),
(76, 'payment_method_delete', 'Método de Pago eliminada', 'El método de pago Débito fue eliminado exitosamente', 1, 'DELETE', '2015-01-31 10:58:17', '2015-01-31 10:58:17', NULL),
(77, 'payment_method_get_index', 'Listado de Métodos de Pago', 'Vizualización del listado de métodos de pago', 1, 'READ', '2015-01-31 10:58:17', '2015-01-31 10:58:17', NULL),
(78, 'invoice_account_get_index', 'Listado de Cuentas', 'Vizualización del listado de cuentas', 1, 'READ', '2015-01-31 11:04:35', '2015-01-31 11:04:35', NULL),
(79, 'invoice_account_get_index', 'Listado de Cuentas', 'Vizualización del listado de cuentas', 1, 'READ', '2015-01-31 11:06:10', '2015-01-31 11:06:10', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capabilities`
--

CREATE TABLE IF NOT EXISTS `capabilities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `controller` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=55 ;

--
-- Volcado de datos para la tabla `capabilities`
--

INSERT INTO `capabilities` (`id`, `name`, `title`, `description`, `controller`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'dashboard_view_get', 'Visualizar Escritorio', '', 'DashboardController@getIndex', '2015-01-26 16:15:12', '2015-01-26 16:23:27', NULL),
(2, 'users_view_get', 'Visualizar Usuarios', '', 'UserController@getIndex', '2015-01-26 16:15:12', '2015-01-26 16:39:34', NULL),
(3, 'users_create_get', 'Crear Usuarios', '', 'UserController@getCreate', '2015-01-26 16:15:12', '2015-01-26 16:38:44', NULL),
(4, 'users_edit_get', 'Editar Usuarios', '', 'UserController@getEdit', '2015-01-26 16:15:12', '2015-01-26 16:39:01', NULL),
(5, 'users_delete_get', 'Eliminar Usuarios', '', 'UserController@getDelete', '2015-01-26 16:15:12', '2015-01-26 16:39:16', NULL),
(6, 'capabilities_view_get', 'Visualizar Capacidades', '', 'CapabilityController@getIndex', '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(7, 'capabilities_create_get', 'Crear Capacidades', '', 'CapabilityController@getCreate', '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(8, 'capabilities_edit_get', 'Editar Capacidades', '', 'CapabilityController@getEdit', '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(9, 'capabilities_delete_get', 'Eliminar Capacidades', '', 'CapabilityController@getDelete', '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(10, 'roles_view_get', 'Visualizar Roles', '', 'RoleController@getIndex', '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(11, 'roles_create_get', 'Crear Roles', '', 'RoleController@getCreate', '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(12, 'roles_edit_get', 'Editar Roles', '', 'RoleController@getEdit', '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(13, 'roles_delete_get', 'Eliminar Roles', '', 'RoleController@getDelete', '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(14, 'roles_assign_get', 'Asignar Capacidades ', '', 'RoleController@getAssign', '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(15, 'stock_view_get', 'Visualizar Stock', '', 'StockController@getIndex', '2015-01-28 00:49:36', '2015-01-28 00:49:36', NULL),
(16, 'stock_create_get', 'Crear Items de Stock', '', 'StockController@getCreate', '2015-01-28 00:50:14', '2015-01-28 00:50:14', NULL),
(17, 'stock_edit_get', 'Editar Stock', '', 'StockController@getEdit', '2015-01-28 00:50:44', '2015-01-28 00:50:44', NULL),
(18, 'stock_delete_get', 'Eliminar Stock', '', 'StockController@getDelete', '2015-01-28 00:51:49', '2015-01-28 00:51:49', NULL),
(19, 'categories_view_get', 'Visualizar Categorias', '', 'CategoryController@getIndex', '2015-01-28 00:53:28', '2015-01-28 00:53:28', NULL),
(20, 'categories_create_get', 'Crear Categorias', '', 'CategoryController@getCreate', '2015-01-28 00:54:15', '2015-01-28 00:54:15', NULL),
(21, 'categories_edit_get', 'Editar Categorias', '', 'CategoryController@getEdit', '2015-01-28 00:55:16', '2015-01-28 00:55:16', NULL),
(22, 'categories_delete_get', 'Eliminar Categorias', '', 'CategoryController@getDelete', '2015-01-28 00:55:49', '2015-01-28 00:55:49', NULL),
(23, 'measurement_units_view_get', 'Visualizar Unidades de Medida', '', 'MeasurementUnitController@getIndex', '2015-01-28 00:58:17', '2015-01-28 00:58:17', NULL),
(24, 'measurement_units_create_get', 'Crear Unidades de Medida', '', 'MeasurementUnitController@getCreate', '2015-01-28 00:59:09', '2015-01-28 00:59:09', NULL),
(25, 'measurement_units_edit_get', 'Editar Unidades de Medida', '', 'MeasurementUnitController@getEdit', '2015-01-28 00:59:42', '2015-01-28 00:59:42', NULL),
(26, 'measurement_units_delete_get', 'Eliminar Unidades de Medida', '', 'MeasurementUnitController@getDelete', '2015-01-28 01:00:22', '2015-01-28 01:00:22', NULL),
(27, 'clients_view_get', 'Visualizar Clientes', '', 'ClientController@getIndex', '2015-01-28 01:38:05', '2015-01-28 01:38:05', NULL),
(28, 'clients_create_get', 'Crear Clientes', '', 'ClientController@getCreate', '2015-01-28 01:38:28', '2015-01-28 01:38:28', NULL),
(29, 'clients_edit_get', 'Editar Clientes', '', 'ClientController@getEdit', '2015-01-28 01:39:09', '2015-01-28 01:39:09', NULL),
(30, 'clients_delete_get', 'Eliminar Clientes', '', 'ClientController@getDelete', '2015-01-28 01:40:07', '2015-01-28 01:40:07', NULL),
(31, 'persons_view_get', 'Visualizar Personas', '', 'PersonController@getIndex', '2015-01-30 02:02:52', '2015-01-30 02:02:52', NULL),
(32, 'providers_view_get', 'Visualizar Proveedores', '', 'ProviderController@getIndex', '2015-01-30 02:04:24', '2015-01-30 02:07:04', NULL),
(33, 'locations_view_get', 'Visualizar Localidades', '', 'LocationController@getIndex', '2015-01-30 02:05:10', '2015-01-30 02:05:10', NULL),
(34, 'persons_create_get', 'Crear Personas', '', 'PersonController@getCreate', '2015-01-30 02:52:10', '2015-01-30 02:52:10', NULL),
(35, 'persons_edit_get', 'Editar Personas', '', 'PersonController@getEdit', '2015-01-30 02:52:49', '2015-01-30 02:52:49', NULL),
(36, 'persons_delete_get', 'Eliminar Personas', '', 'PersonController@getDelete', '2015-01-30 02:53:33', '2015-01-30 02:56:33', NULL),
(37, 'locations_create_get', 'Crear Localidades', '', 'LocationController@getCreate', '2015-01-30 02:54:36', '2015-01-30 02:54:36', NULL),
(38, 'locations_edit_get', 'Editar Localidades', '', 'LocationController@getEdit', '2015-01-30 02:55:07', '2015-01-30 02:55:07', NULL),
(39, 'locations_delete_get', 'Eliminar Localidades', '', 'LocationController@getDelete', '2015-01-30 02:55:38', '2015-01-30 02:56:00', NULL),
(40, 'providers_create_get', 'Crear Proveedores', '', 'ProviderController@getCreate', '2015-01-31 01:28:10', '2015-01-31 01:28:10', NULL),
(41, 'providers_edit_get', 'Editar Proveedores', '', 'ProviderController@getEdit', '2015-01-31 01:28:55', '2015-01-31 01:29:18', NULL),
(42, 'providers_delete_get', 'Eliminar Proveedores', '', 'ProviderController@getDelete', '2015-01-31 01:30:07', '2015-01-31 01:30:07', NULL),
(43, 'users_show_get', 'Visualizar Detalle de Usuario', '', 'UserController@getShow', '2015-01-31 04:47:03', '2015-01-31 04:47:03', NULL),
(44, 'projects_view_get', 'Visualizar Proyectos', '', 'ProjectController@getIndex', '2015-01-31 05:09:08', '2015-01-31 05:09:08', NULL),
(45, 'tasks_view_get', 'Visualizar Tareas', '', 'TaskController@getIndex', '2015-01-31 05:09:39', '2015-01-31 05:09:39', NULL),
(46, 'materials_view_get', 'Visualizar Materiales', '', 'MaterialController@getIndex', '2015-01-31 05:10:09', '2015-01-31 05:10:09', NULL),
(47, 'projects_create_get', 'Crear Proyectos', '', 'ProjectController@getCreate', '2015-01-31 05:32:32', '2015-01-31 05:32:32', NULL),
(48, 'projects_edit_get', 'Editar Proyectos', '', 'ProjectController@getEdit', '2015-01-31 05:32:53', '2015-01-31 05:32:53', NULL),
(49, 'projects_delete_get', 'Eliminar Proyectos', '', 'ProjectController@getDelete', '2015-01-31 05:33:42', '2015-01-31 05:33:42', NULL),
(50, 'payment_methods_view_get', 'Visualizar Metodos de Pago', '', 'PaymentMethodController@getIndex', '2015-01-31 09:51:28', '2015-01-31 09:51:28', NULL),
(51, 'invoice_accounts_view_get', 'Visualizar Cuentas de Facturación', '', 'InvoiceAccountController@getIndex', '2015-01-31 09:52:19', '2015-01-31 09:52:19', NULL),
(52, 'payment_methods_create_get', 'Crear Métodos de Pago', '', 'PaymentMethodController@getCreate', '2015-01-31 10:44:25', '2015-01-31 10:44:25', NULL),
(53, 'payment_methods_edit_get', 'Editar Métodos de Pago', '', 'PaymentMethodController@getEdit', '2015-01-31 10:45:14', '2015-01-31 10:45:14', NULL),
(54, 'payment_methods_delete_get', 'Eliminar Métodos de Pago', '', 'PaymentMethodController@getDelete', '2015-01-31 10:49:54', '2015-01-31 10:49:54', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Metales', 'Cabillas, Alambres, Láminas', 'stock', '', '2015-01-28 01:08:30', '2015-01-28 01:08:30', NULL),
(2, 'Maderas', 'Contrachapados', 'stock', '', '2015-01-28 01:10:37', '2015-01-28 01:10:37', NULL),
(3, 'Clavos', '', 'stock', '', '2015-01-28 01:13:32', '2015-01-28 01:13:32', NULL),
(4, 'Tornillos', '', 'stock', '', '2015-01-28 01:13:44', '2015-01-28 01:13:44', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `identification_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_person` int(11) NOT NULL,
  `id_location` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`id`, `name`, `identification_number`, `email`, `phone`, `id_person`, `id_location`, `type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Magicmedia', 'J405064943', 'magicmediave@gmail.com', '02432831372', 4, 2, '', '', '2015-01-31 05:00:15', '2015-01-31 05:00:15', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client_authorized`
--

CREATE TABLE IF NOT EXISTS `client_authorized` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_client` int(11) NOT NULL,
  `id_person` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client_conventions`
--

CREATE TABLE IF NOT EXISTS `client_conventions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invoices`
--

CREATE TABLE IF NOT EXISTS `invoices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `correlative` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `id_seller` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_invoice_account` int(11) NOT NULL,
  `id_sale_order` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invoice_accounts`
--

CREATE TABLE IF NOT EXISTS `invoice_accounts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `header` longtext COLLATE utf8_unicode_ci NOT NULL,
  `footer` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `locations`
--

INSERT INTO `locations` (`id`, `name`, `description`, `type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Maracay - La Romana', 'Sector La Romana', 'location', 'active', '2015-01-30 03:56:24', '2015-01-30 04:01:12', '2015-01-30 04:01:12'),
(2, 'Maracay - La Romana', 'Urbanización La Romana', 'location', 'active', '2015-01-31 01:37:46', '2015-01-31 01:37:46', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materials`
--

CREATE TABLE IF NOT EXISTS `materials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_stock` int(11) NOT NULL,
  `units` float(8,2) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `measurement_units`
--

CREATE TABLE IF NOT EXISTS `measurement_units` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `symbol` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `measurement_units`
--

INSERT INTO `measurement_units` (`id`, `name`, `symbol`, `created_at`, `updated_at`) VALUES
(1, 'Metros', 'm', '2015-01-28 01:06:36', '2015-01-28 01:06:36'),
(2, 'Centímetros', 'cm', '2015-01-28 01:07:07', '2015-01-28 01:07:07'),
(3, 'Kilogramos', 'kg', '2015-01-28 01:07:30', '2015-01-28 01:07:30'),
(4, 'Gramos', 'g', '2015-01-28 01:07:41', '2015-01-28 01:07:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user_from` int(11) NOT NULL,
  `id_user_to` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_01_05_163122_create_clients_table', 1),
('2015_01_05_163259_create_client_authorized_table', 1),
('2015_01_05_163405_create_client_conventions_table', 1),
('2015_01_05_163431_create_persons_table', 1),
('2015_01_05_163457_create_locations_table', 1),
('2015_01_05_163534_create_sellers_table', 1),
('2015_01_05_163605_create_invoice_accounts_table', 1),
('2015_01_05_163630_create_invoices_table', 1),
('2015_01_05_163701_create_sale_orders_table', 1),
('2015_01_05_163732_create_receipts_table', 1),
('2015_01_05_163809_create_payment_methods_table', 1),
('2015_01_05_163843_create_purchase_orders_table', 1),
('2015_01_05_163915_create_projects_table', 1),
('2015_01_05_164022_create_materials_table', 1),
('2015_01_05_164052_create_stock_table', 1),
('2015_01_05_164140_create_measurement_units_table', 1),
('2015_01_05_164210_create_providers_table', 1),
('2015_01_05_164349_create_provider_invoices_table', 1),
('2015_01_05_164424_create_provider_items_table', 1),
('2015_01_05_164453_create_categories_table', 1),
('2015_01_05_212719_create_users_table', 1),
('2015_01_06_002911_create_roles_table', 1),
('2015_01_06_002951_create_capabilities_table', 1),
('2015_01_07_212659_create_options_table', 1),
('2015_01_07_212742_create_audits_table', 1),
('2015_01_07_212758_create_tasks_table', 1),
('2015_01_07_212823_create_messages_table', 1),
('2015_01_07_213423_create_role_capabilities_table', 1),
('2015_01_07_214401_create_user_tasks_table', 1),
('2015_01_07_225827_create_message_user_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `options`
--

CREATE TABLE IF NOT EXISTS `options` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `options_key_unique` (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `payment_methods`
--

CREATE TABLE IF NOT EXISTS `payment_methods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `identification_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `persons`
--

INSERT INTO `persons` (`id`, `first_name`, `last_name`, `identification_number`, `email`, `phone`, `type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Alexis Anderson', 'Montenegro Reyes', 'V23498535', 'amontenegro.sistemas@gmail.com', '+584243134301', 'client_representant', 'active', '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(2, 'Yoselin Susana', 'Chacin Martínez', 'V24443306', 'susanaunefa@hotmail.com', '04241234567', 'person', 'active', '2015-01-28 04:03:10', '2015-01-30 03:39:34', '2015-01-30 03:39:34'),
(3, 'Antony Robert', 'Borges Dacorte', 'V18554560', 'robertdacorte@gmail.com', '04241234567', 'person', 'active', '2015-01-30 03:11:59', '2015-01-30 03:11:59', NULL),
(4, 'Fredo', 'Godofredo', 'V96385274', 'fredogodofredo@gmail.com', '04147894651', 'provider_representant', 'active', '2015-01-31 01:44:25', '2015-01-31 01:44:25', NULL),
(5, 'Hebber', 'McGubber', 'V14725836', 'hebbermcgubber@gmail.com', '02437418523', 'provider_representant', 'active', '2015-01-31 01:46:57', '2015-01-31 01:46:57', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `projects`
--

INSERT INTO `projects` (`id`, `code`, `name`, `description`, `type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '', 'dsad', '', '', 'active', '2015-01-31 09:23:09', '2015-01-31 09:23:09', '2015-01-21 16:06:34'),
(2, '', 'Proyecto Prueba', 'Esta Descripción', '', 'active', '2015-01-31 09:34:07', '2015-01-31 09:34:07', NULL),
(3, '', 'Segundo Proyecto Prueba', 'Esta es la Descripción', '', 'active', '2015-01-31 09:35:40', '2015-01-31 09:35:40', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `providers`
--

CREATE TABLE IF NOT EXISTS `providers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `identification_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_person` int(11) NOT NULL,
  `id_location` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `providers`
--

INSERT INTO `providers` (`id`, `name`, `identification_number`, `email`, `phone`, `id_person`, `id_location`, `type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Parmalat', 'J1234567981', 'ventas@parmalat.com.ve', '02437654321', 5, 2, '', '', '2015-01-31 01:44:32', '2015-01-31 02:04:34', '2015-01-31 02:04:34'),
(2, 'Bimbo', 'J789456123', 'ventas@bimbo.com', '02431234567', 4, 2, '', '', '2015-01-31 02:03:04', '2015-01-31 02:03:04', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provider_invoices`
--

CREATE TABLE IF NOT EXISTS `provider_invoices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `correlative` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_purchase_order` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provider_items`
--

CREATE TABLE IF NOT EXISTS `provider_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `units` float(8,2) NOT NULL,
  `id_stock` int(11) NOT NULL,
  `id_purchase_order` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `purchase_orders`
--

CREATE TABLE IF NOT EXISTS `purchase_orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `id_project` int(11) NOT NULL,
  `id_provider` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receipts`
--

CREATE TABLE IF NOT EXISTS `receipts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `amount` float(16,2) NOT NULL,
  `id_sale_order` int(11) NOT NULL,
  `id_payment_method` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'superadmin', 'Super Administrador', 'active', '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(2, 'administrator', 'Administrador', 'active', '2015-01-31 04:43:40', '2015-01-31 04:43:40', NULL),
(3, 'seller', 'Vendedor', 'active', '2015-01-31 07:31:33', '2015-01-31 07:32:45', '2015-01-31 07:32:45'),
(4, 'seller', 'Vendedor', 'active', '2015-01-31 07:33:13', '2015-01-31 07:33:13', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_capabilities`
--

CREATE TABLE IF NOT EXISTS `role_capabilities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_capability` int(10) unsigned NOT NULL,
  `id_role` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `role_capabilities_id_capability_index` (`id_capability`),
  KEY `role_capabilities_id_role_index` (`id_role`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=101 ;

--
-- Volcado de datos para la tabla `role_capabilities`
--

INSERT INTO `role_capabilities` (`id`, `id_capability`, `id_role`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(2, 2, 1, '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(6, 6, 1, '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(7, 7, 1, '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(8, 8, 1, '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(9, 9, 1, '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(10, 10, 1, '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(11, 11, 1, '2015-01-26 16:15:13', '2015-01-26 16:15:13', NULL),
(12, 12, 1, '2015-01-26 16:15:14', '2015-01-26 16:15:14', NULL),
(13, 13, 1, '2015-01-26 16:15:14', '2015-01-26 16:15:14', NULL),
(14, 14, 1, '2015-01-26 16:15:14', '2015-01-26 16:15:14', NULL),
(16, 4, 1, '2015-01-26 16:15:14', '2015-01-26 16:15:14', NULL),
(17, 5, 1, '2015-01-26 16:15:14', '2015-01-26 16:15:14', NULL),
(18, 3, 1, '2015-01-26 16:15:14', '2015-01-26 16:15:14', NULL),
(19, 16, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(20, 17, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(21, 18, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(22, 15, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(23, 20, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(24, 21, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(25, 22, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(26, 19, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(27, 24, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(28, 25, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(29, 26, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(30, 23, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(31, 28, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(32, 29, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(33, 30, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(34, 27, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(35, 33, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(36, 31, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(37, 32, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(38, 37, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(39, 34, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(40, 38, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(41, 35, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(42, 39, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(43, 36, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(44, 40, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(45, 41, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(46, 42, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(47, 14, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(48, 7, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(49, 20, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(50, 28, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(51, 16, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(52, 37, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(53, 34, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(54, 40, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(55, 11, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(56, 24, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(57, 3, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(58, 8, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(59, 21, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(60, 29, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(61, 38, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(62, 35, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(63, 41, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(64, 12, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(65, 17, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(66, 25, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(67, 4, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(68, 9, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(69, 22, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(70, 30, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(71, 39, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(72, 36, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(73, 42, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(74, 13, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(75, 18, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(76, 26, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(77, 5, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(78, 6, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(79, 19, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(80, 27, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(81, 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(82, 33, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(83, 31, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(84, 32, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(85, 10, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(86, 15, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(87, 23, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(88, 2, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(89, 43, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(90, 46, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(91, 44, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(92, 45, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(93, 47, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(94, 48, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(95, 49, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(96, 51, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(97, 50, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(98, 52, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(99, 53, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL),
(100, 54, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sale_orders`
--

CREATE TABLE IF NOT EXISTS `sale_orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `correlative` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `budget` float(16,2) NOT NULL,
  `period_days` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_seller` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `sale_orders`
--

INSERT INTO `sale_orders` (`id`, `correlative`, `date`, `budget`, `period_days`, `id_client`, `id_seller`, `id_project`, `type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '0000125', '1969-12-31', 1000000.00, 120, 1, 3, 2, '', 'active', '2015-01-31 09:34:07', '2015-01-31 09:34:07', NULL),
(2, '0000126', '1969-12-31', 1000000.00, 150, 1, 3, 3, '', 'active', '2015-01-31 09:35:40', '2015-01-31 09:35:40', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sellers`
--

CREATE TABLE IF NOT EXISTS `sellers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_person` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `id_measurement_unit` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `units` float(8,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`id`, `name`, `description`, `id_measurement_unit`, `id_category`, `units`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Clavos', '\r\n', 4, 3, 200.00, '2015-01-28 01:33:28', '2015-01-28 01:33:28', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `id_project` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `displayname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_role` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `displayname`, `email`, `password`, `id_role`, `status`, `created_at`, `updated_at`, `deleted_at`, `remember_token`) VALUES
(1, 'Alexis', 'Montenegro', 'AlexanderZon', 'Alexis Montenegro', 'amontenegro@magicmedia.com.ve', '$2y$10$n2GSpFQogYh6QitwvS/ycuN4xekWRUdhUmR9xIrngwDMuE1G5v.pS', 1, 'active', '2015-01-26 16:15:14', '2015-01-26 16:15:14', NULL, NULL),
(2, 'Antony', 'Borges', 'robertdacorte', 'Antony Borges', 'aborges@magicmedia.com.ve', '$2y$10$yMFpcNzTAxDCmU3BN7ek8eNbsYoyIykTKT3EAp849KaMHxmHVGovq', 1, 'active', '2015-01-26 16:15:14', '2015-01-26 16:15:14', NULL, NULL),
(3, 'Daniel', 'Henriquez', 'henriquezdan', 'Daniel Henriquez', 'henriquezdan@gmail.com', '$2y$10$fSgh/p72I9AhgK54c6yLGOG/yuGkMiubb4ehTp39e1nUAtJG7Qw7S', 4, 'inactive', '2015-01-31 04:45:18', '2015-01-31 07:33:37', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_mesages`
--

CREATE TABLE IF NOT EXISTS `user_mesages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_message` int(10) unsigned NOT NULL,
  `id_user` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `user_mesages_id_message_index` (`id_message`),
  KEY `user_mesages_id_user_index` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_tasks`
--

CREATE TABLE IF NOT EXISTS `user_tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(10) unsigned NOT NULL,
  `id_task` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_tasks_id_user_index` (`id_user`),
  KEY `user_tasks_id_task_index` (`id_task`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `role_capabilities`
--
ALTER TABLE `role_capabilities`
  ADD CONSTRAINT `role_capabilities_id_capability_foreign` FOREIGN KEY (`id_capability`) REFERENCES `capabilities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_capabilities_id_role_foreign` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `user_mesages`
--
ALTER TABLE `user_mesages`
  ADD CONSTRAINT `user_mesages_id_message_foreign` FOREIGN KEY (`id_message`) REFERENCES `messages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_mesages_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `user_tasks`
--
ALTER TABLE `user_tasks`
  ADD CONSTRAINT `user_tasks_id_task_foreign` FOREIGN KEY (`id_task`) REFERENCES `tasks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_tasks_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
